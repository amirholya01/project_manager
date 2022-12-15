<?php


$inputSanitation->numberSanitice($_POST['sale']);

$mediaData = $ProductsHandler->getMedia();

$validStrings = $inputSanitation->getValidationStatus();

if($validStrings == true){
    $saleData =  $ProductsHandler->getSaleById($_POST['sale']);
    $productData =  $ProductsHandler->getProductSalesBySaleId($_POST['sale']);
}
