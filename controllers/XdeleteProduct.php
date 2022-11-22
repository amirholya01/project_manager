<?php

$product = null;

/* 
    If a delete is posted then delete the product with the given id 
*/
if(isset($_POST['delete'])){
    $product = $_POST['delete'];

    if($product != "" && $product != '%' && $product != '%%'){
        try{
            $pdo->beginTransaction();
            $deleteProduct = $pdo->prepare($Products->deleteProductById);
            $deleteProduct->bindParam(":id", $product);
            $deleteProduct->execute();
            
            $deleteColorJunction = $pdo->prepare($Products->deleteProductColorByProductId);
            $deleteColorJunction->bindParam(":id", $product);
            $deleteColorJunction->execute();
            $pdo->commit();
        } catch (Throwable $error) {
            $pdo->rollBack();
        }
    }
}