<?php

$rootPath = "";
while(!file_exists($rootPath . "index.php")){
    $rootPath = "../$rootPath";
}

require_once $rootPath . "security/inputSanitation.php";

$inputSanitation->sanitice($_POST['type']);

$validStrings = $inputSanitation->getValidationStatus();

if($validStrings == true){
    $relatedProducts = $ProductsHandler->getRelatedProducts($_POST['type']);
}