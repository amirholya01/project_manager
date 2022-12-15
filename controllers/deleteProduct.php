<?php

$product_id = null;

/* 
    If a delete is posted then delete the product with the given id 
*/
if(isset($_POST['delete'])){
    $inputSanitation->numberSanitice($_POST['delete']);
    
    $validStrings = $inputSanitation->getValidationStatus();

    if($validStrings == true){
        $product_id = $_POST['delete'];
    
        if($product_id != "" && $product_id != '%' && $product_id != '%%'){
            $ProductsHandler->deleteProductById($product_id);
        }
    }
}