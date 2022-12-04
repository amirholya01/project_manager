<?php

$rootPath = "";
while(!file_exists($rootPath . "index.php")){
    $rootPath = "../$rootPath";
}
require_once $rootPath . "public/dbconn.php";
require_once $rootPath . "models/sql/Products.php";

class ProductsHandler extends Products{

    public $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getColors() {
        $getColors = $this->db->prepare($this->getAllColorsQuery);
        $getColors->execute();
        
        $allColors = $getColors->fetchAll();
        return $allColors;
    }
    
    public function getAssignedColorsToProducts() {
        $getColorAssigments = $this->db->prepare($this->getColorAssigmentsQuery);
        $getColorAssigments->execute();
        
        $colorAssignments = $getColorAssigments->fetchAll();
        return $colorAssignments;
    }

    public function getAssignedColorsToProductsByProductId($id) {
        $getColorAssigments = $this->db->prepare($this->getColorAssigmentsByProductIdQuery);
        $getColorAssigments->bindParam(":id", $id);
        $getColorAssigments->execute();
        
        $colorAssignments = $getColorAssigments->fetchAll();
        return $colorAssignments;
    }

    public function getAssignedMediaToProductsByProductId($id) {
        $getMediaAssigments = $this->db->prepare($this->getMediaAssigmentsByProductIdQuery);
        $getMediaAssigments->bindParam(":id", $id);
        $getMediaAssigments->execute();
        
        $mediaAssignments = $getMediaAssigments->fetchAll();
        return $mediaAssignments;
    }

    public function getTypes() {
        $getTypes = $this->db->prepare($this->getAllTypesQuery);
        $getTypes->execute();

        $allTypes = $getTypes->fetchAll();
        return $allTypes;
    }

    public function createProduct($name, $type, $description, $price, $colors = null, $medias = null, $primaryImage = null) {
        /* 
            Can't do a transaction here because i need to create the product
            before i can get the ID of it since the ID is auto generated by
            the database.
        */
        $createProduct = $this->db->prepare($this->createProductQuery);
        $createProduct->bindParam(':name', $name);
        $createProduct->bindParam(':type', $type);
        $createProduct->bindParam(':description', $description);
        $createProduct->bindParam(':price', $price);
        $createProduct->bindParam(':primary_image', $primaryImage);
        $createProduct->execute();
    
        /* Get the id */
        /* The id is AI by the db after insert the above data into the db */
        $id = $this->db->lastInsertId();
    
        /* Assigns the colors to the product */
        if( isset($colors) && $colors != null ){
            foreach($colors as $color){
                $createProductColor = $this->db->prepare($this->createProductColorQuery);
                $createProductColor->bindParam(':color_id', $color);
                $createProductColor->bindParam(':product_id', $id);
                $createProductColor->execute();
            }
        }

        if( isset($medias) && $medias != null ){
            foreach($medias as $media){
                if($media != $primaryImage){
                    $assignMediaToProduct = $this->db->prepare($this->assignMediaToProductQuery);
                    $assignMediaToProduct->bindParam(':media_id', $media);
                    $assignMediaToProduct->bindParam(':product_id', $id);
                    $assignMediaToProduct->execute();
                }
            }
        }

    }

    public function getProducts($search = '', $id = '', $type = '') {
        /* 
            We need to check if we are searching for types because we have to use different
            queries depending on if we search for it or not
        */

        if( isset( $type ) && $type != '' ){
            /* 
                We can't use a wildcard on an int(id) so we have to structure the query
                differently depending on weather we have an id or not
            */
            if( isset( $id ) && $id != ''){
                $getProducts = $this->db->prepare($this->getProductsDynamicSearchQuery);
                $getProducts->bindParam(':id', $id);
            }else{
                $getProducts = $this->db->prepare($this->getProductsDynamicSearchWithoutIdQuery);
            }
            $getProducts->bindParam(':type', $type);
        }else{
            /* 
                This is basicly just a copy paste of the above code with minor changes
            */
            if( isset( $id ) && $id != ''){
                $getProducts = $this->db->prepare($this->getProductsDynamicSearchWithoutTypeQuery);
                $getProducts->bindParam(':id', $id);
            }else{
                $getProducts = $this->db->prepare($this->getProductsDynamicSearchWithoutIdAndTypeQuery);
            }
        }

        if ( isset( $search ) ){
            $search = "%" . $search . "%";
        }else{
            $search = "%";
        }
        $getProducts->bindParam(':search', $search);    
        $getProducts->execute();

        $products = $getProducts->fetchAll();
        return $products;
    }

    public function getMedia($name = '%') {
        $getMedia = $this->db->prepare($this->getMediaDynamicSearchQuery);

        if ( isset( $name ) ){
            $name = "%" . $name . "%";
        }else{
            $name = "%";
        }
        $getMedia->bindParam(':name', $name);    
        $getMedia->execute();

        $media = $getMedia->fetchAll();
        return $media;
    }
    
    public function editProduct($id, $name, $description, $price, $type, $colors = null, $medias = null) {
        /* 🔥 It prints 2 errors but it still goes through */
        $this->db->beginTransaction();

        //Deletes the colors and media that was previously assigned to the product
        $deletePeviouslyAssignedColors = $this->db->prepare($this->deleteProductColorByProductIdQuery);
        $deletePeviouslyAssignedColors->bindParam(':id', $id);
        $deletePeviouslyAssignedColors->execute();

        
        $deletePeviouslyAssignedColors = $this->db->prepare($this->deleteProductMediaByProductIdQuery);
        $deletePeviouslyAssignedColors->bindParam(':id', $id);
        $deletePeviouslyAssignedColors->execute();
    
        //Uploads every new relation for each color that was selected
        if( $colors != [] && $colors != null){
            foreach ($colors as $color) {
                $assignColorToProduct = $this->db->prepare($this->createProductColorQuery);
                $assignColorToProduct->bindParam(':product_id', $id);
                $assignColorToProduct->bindParam(':color_id', $color);
                $assignColorToProduct->execute();
    
            }
        }

        //Uploads every new relation for each media that was selected
        if( isset($medias) && $medias != null ){
            foreach($medias as $media){
                $assignMediaToProduct = $this->db->prepare($this->assignMediaToProductQuery);
                $assignMediaToProduct->bindParam(':product_id', $id);
                $assignMediaToProduct->bindParam(':media_id', $media);
                $assignMediaToProduct->execute();
            }
        }

        //Uploads the remaining user data
        $editUser = $this->db->prepare($this->updateProductByIdQuery);
        
        $editUser->bindParam(':id', $id);
        $editUser->bindParam(':name', $name);
        $editUser->bindParam(':description', $description);
        $editUser->bindParam(':price', $price);
        $editUser->bindParam(':type', $type);
        $editUser->execute();

        $this->db->commit();
    }

    public function editMedia($id, $name, $type = null){
        $assignMediaToProduct = $this->db->prepare($this->updateMediaQuery);
        $assignMediaToProduct->bindParam(':media_id', $id);
        $assignMediaToProduct->bindParam(':name', $name);
        $assignMediaToProduct->execute();
    }

    public function deleteProductById($product_id) {
        try{
            $this->db->beginTransaction();
            $deleteProduct = $this->db->prepare($this->deleteProductByIdQuery);
            $deleteProduct->bindParam(":id", $product_id);
            $deleteProduct->execute();
            
            $deleteColorJunction = $this->db->prepare($this->deleteProductColorByProductIdQuery);
            $deleteColorJunction->bindParam(":id", $product_id);
            $deleteColorJunction->execute();

            $deleteMediaJunction = $this->db->prepare($this->deleteProductMediaByProductIdQuery);
            $deleteMediaJunction->bindParam(":id", $product_id);
            $deleteMediaJunction->execute();
            $this->db->commit();
        } catch (Throwable $error) {
            $this->db->rollBack();
        }
    }

    public function deleteMediaById($media_id) {
        $deleteProduct = $this->db->prepare($this->deleteMediaByIdQuery);
        $deleteProduct->bindParam(":id", $media_id);
        $deleteProduct->execute();
    }

    public function deleteProductMediaJunctionByMediaId($id){
        $deleteMediaJunction = $this->db->prepare($this->deleteProductMediaByMediaIdQuery);
        $deleteMediaJunction->bindParam(":id", $id);
        $deleteMediaJunction->execute();
    }

    public function uploadImage($id, $name = "pineapple"){
        $createImageRefOnDb = $this->db->prepare("INSERT INTO media (media_id, name) VALUES (:id, :name)"); /* ✒️ Should be in models */
        $createImageRefOnDb->execute(array(
            ":id" => $id,
            ":name" => $name
        ));
    }
}

$ProductsHandler = new ProductsHandler($db);