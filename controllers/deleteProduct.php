<?php

$product_id = null;

/* 
    If a delete is posted then delete the product with the given id 
*/
if(isset($_POST['delete'])){
    $product_id = $_POST['delete'];

    if($product_id != "" && $product_id != '%' && $product_id != '%%'){
        $ProductsHandler->deleteProductById($product_id);
    }
}