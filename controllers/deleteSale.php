<?php

$sale_id = null;

/* 
    If a delete is posted then delete the sale with the given id 
*/
if(isset($_POST['deleteSale'])){
    $inputSanitation->numberSanitice($_POST['deleteSale']);
    
    $validStrings = $inputSanitation->getValidationStatus();

    if($validStrings == true){
        $sale_id = $_POST['sale_id'];
    
        if($sale_id != "" && $sale_id != '%' && $sale_id != '%%'){
            $ProductsHandler->deleteSaleById($sale_id);
        }
    }
}