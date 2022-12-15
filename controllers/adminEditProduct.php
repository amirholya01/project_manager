<?php

$allTypes = $ProductsHandler->getTypes();

$allColors = $ProductsHandler->getColors();

$mediaData = $ProductsHandler->getMedia();


$inputSanitation->numberSanitice($_POST['id']);

$validStrings = $inputSanitation->getValidationStatus();

if($validStrings == true){
    $mediaAssignedToProduct = $ProductsHandler->getAssignedMediaToProductsByProductId($_POST['id']);

    $colorsAssignedToProduct = $ProductsHandler->getAssignedColorsToProductsByProductId($_POST['id']);
}