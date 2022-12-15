<?php


$inputSanitation->numberSanitice($_POST['sale']);

$validStrings = $inputSanitation->getValidationStatus();

if($validStrings == true){
    $saleData =  $ProductsHandler->getSaleById($_POST['sale']);
    $productData =  $ProductsHandler->getProductSalesBySaleId($_POST['sale']);
}
