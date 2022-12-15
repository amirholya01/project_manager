<?php

$inputSanitation->sanitice($_POST['type']);

$validStrings = $inputSanitation->getValidationStatus();

if($validStrings == true){
    $relatedProducts = $ProductsHandler->getRelatedProducts($_POST['type']);
}