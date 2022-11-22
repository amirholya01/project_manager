<?php

require_once $rootPath . "models/sql/products.php";
require_once $rootPath . "dbconn.php";
//$Products = new Products();

class ProductsHandler extends Products{
    /* DB Connection */
    protected $rootPath = "";
    public $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
        $this->pdo->DbConnect();
        
        var_dump($this->pdo->pdo->prepare("jido"));
        while(!file_exists($this->rootPath . "index.php")){
            $this->rootPath = "../$this->rootPath";
        }    
        require_once $this->rootPath . "dbconn.php";
    }     


    public function getColors() {
        $getColors = $this->pdo->pdo->prepare($this->getAllRawColors);
        $getColors->execute();
        
        $allColors = $getColors->fetchAll();
        return $allColors;
    }

    public function getTypes() {
        $getTypes = $this->pdo->prepare($this->getAllTypes);
        $getTypes->execute();

        $allTypes = $getTypes->fetchAll();
        return $allTypes;
    }

    public function createProduct($name, $type, $description, $price) {
        $createProduct = $this->pdo->prepare($this->createProduct);
        $createProduct->bindParam(':name', $name);
        $createProduct->bindParam(':type', $type);
        $createProduct->bindParam(':description', $description);
        $createProduct->bindParam(':price', $price);
        $createProduct->execute();
    
        /* The id is AI by the db after insert the above data into the db */
        $productId = $this->pdo->lastInsertId();
        return $productId;
    }

    public function assignProductToColor($productId, $color){
        $createProductColor = $this->pdo->prepare($this->createProductColor);
        $createProductColor->bindParam(':product_id', $productId);
        $createProductColor->bindParam(':color_id', $color);
        $createProductColor->execute();
    }

    public function deleteProduct($productId) {
        try{
            $this->pdo->beginTransaction();
            $deleteProduct = $this->pdo->prepare($this->deleteProductById);
            $deleteProduct->bindParam(":id", $productId);
            $deleteProduct->execute();
            
            $deleteColorJunction = $this->pdo->prepare($this->deleteProductColorByProductId);
            $deleteColorJunction->bindParam(":id", $productId);
            $deleteColorJunction->execute();
            $this->pdo->commit();
        } catch (Throwable $error) {
            $this->pdo->rollBack();
        }
    }

    public function editProduct($id, $name, $description, $price, $type, $colors) {
        try {
            /* 🔥 It prints 2 errors but it still goes through */
            $this->pdo->beginTransaction();
    
            //Deletes the colors that was previously assigned to the product
            $deletePeviouslyAssignedColors = $this->pdo->prepare($this->deleteProductColorByProductId);
            $deletePeviouslyAssignedColors->bindParam(':id', $id);
            $deletePeviouslyAssignedColors->execute();
        
            //Uploads every a new relation for each color that was selected
            if($colors != [] && $colors != null){
                foreach ($colors as $color) {
                    $assignColorToProduct = $this->pdo->prepare($this->createProductColor);
                    $assignColorToProduct->bindParam(':product_id', $id);
                    $assignColorToProduct->bindParam(':color_id', $color);
                    $assignColorToProduct->execute();
        
                }
            }
    
            //Uploads the remaining user data
            $editUser = $this->pdo->prepare($this->updateProductById);
            
            $editUser->bindParam(':id', $id);
            $editUser->bindParam(':name', $name);
            $editUser->bindParam(':description', $description);
            $editUser->bindParam(':price', $price);
            $editUser->bindParam(':type', $type);
            $editUser->execute();
    
            $this->pdo->commit();
        } catch (Throwable $error) {
            $this->pdo->rollBack();
            throw $error;
        }
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
                $getProducts = $this->pdo->prepare($this->getProductsDynamicSearch);
                $getProducts->bindParam(':id', $id);
            }else{
                $getProducts = $this->pdo->prepare($this->getProductsDynamicSearchWithoutId);
            }
            $getProducts->bindParam(':type', $type);
        }else{
            /* 
                This is basicly just a copy paste of the above code with minor changes
            */
            if( isset( $id ) && $id != ''){
                $getProducts = $this->pdo->prepare($this->getProductsDynamicSearchWithoutType);
                $getProducts->bindParam(':id', $id);
            }else{
                $getProducts = $this->pdo->pdo->prepare($this->getProductsDynamicSearchWithoutIdAndType);
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
}

$ProductsH = new ProductsHandler($pdo);