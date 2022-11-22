<?php

$rootPath = "";
while(!file_exists($rootPath . "index.php")){
    $rootPath = "../$rootPath";
}
require_once $rootPath . "dbconn.php";
require_once $rootPath . "models/sql/products.php";

class ProductsHandler extends Products{

    protected $db;

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

    public function getTypes() {
        $getTypes = $this->db->prepare($this->getAllTypesQuery);
        $getTypes->execute();

        $allTypes = $getTypes->fetchAll();
        return $allTypes;
    }

    public function getProducts($search, $id, $type) {
        /* 
            We need to check if we are searching for types because we have to use different
            queries depending on if we search for it or not
        */

        if( isset( $type ) && $type != '' ){
            /* 
                We can't use a wildcard on an int(id) so we have to structure the query
                differently depending on weather we have an id or not
            */
            if( isset( $id ) && $id != ""){
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
    public function editProduct($id, $name, $description, $price, $type, $colors) {
        /* 🔥 It prints 2 errors but it still goes through */
        $this->db->beginTransaction();

        //Deletes the colors that was previously assigned to the product
        $deletePeviouslyAssignedColors = $this->db->prepare($this->deleteProductColorByProductIdQuery);
        $deletePeviouslyAssignedColors->bindParam(':id', $id);
        $deletePeviouslyAssignedColors->execute();
    
        //Uploads every a new relation for each color that was selected
        if($colors != [] && $colors != null){
            foreach ($colors as $color) {
                $assignColorToProduct = $this->db->prepare($this->createProductColorQuery);
                $assignColorToProduct->bindParam(':product_id', $id);
                $assignColorToProduct->bindParam(':color_id', $color);
                $assignColorToProduct->execute();
    
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
}

$ProductsHandler = new ProductsHandler($db);