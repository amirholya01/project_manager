<?php

$sale_id = null;

/* 
    If a delete is posted then delete the sale with the given id 
*/
if(isset($_POST['deleteSale'])){
    
    $sale_id = $_POST['sale_id'];

    if($sale_id != "" && $sale_id != '%' && $sale_id != '%%'){
        $ProductsHandler->deleteSaleById($sale_id);
    }
}