<?php

$product = null;

/* 
    If a delete is posted then delete the product with the given id 
*/
if(isset($_POST['delete'])){
    $product = $_POST['delete'];

    if($product != "" && $product != '%' && $product != '%%'){
        $deleteProduct = $pdo->prepare($Products->deleteProductById);
        $deleteProduct->bindParam(":id", $product);
        $deleteProduct->execute();
    }
}