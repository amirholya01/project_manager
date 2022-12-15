<?php

// Checks if there is an edit field send with the form
if(isset($_POST['editProduct'])){
    $id = $inputSanitation->numberSanitice($_POST ['editId']);
    $name = $inputSanitation->sanitice($_POST ['editName']);
    $description = $inputSanitation->sanitice($_POST ['editDescription']);
    $price = $inputSanitation->numberSanitice($_POST ['editPrice']);
    $type = $inputSanitation->numberSanitice($_POST ['editType']);
    $primaryImage = $inputSanitation->numberSanitice($_POST ['editPrimaryImage']);
    $colors = null;
    $medias = null;

    if(isset($_POST['editColors'])){
        /* ✒️ Needs array sanitasion */
        $colors = $_POST['editColors'];
    }

    if( isset($_POST['media']) ){
        /* ✒️ Needs array sanitasion */
        $medias = $_POST['media'];
    }

    $validStrings = $inputSanitation->getValidationStatus();
    
    /* Checks if all the strings pass validation */
    if($validStrings == true){
        $ProductsHandler->editProduct($id, $name, $description, $price, $type, $colors, $medias, $primaryImage);
    }
}