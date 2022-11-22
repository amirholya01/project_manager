<?php

// Checks if there is an edit field send with the form
if(isset($_POST['editProduct'])){
    $id = $_POST['editId'];
    $name = $stringSanitation->sanitice($_POST['editName']);
    $description = $stringSanitation->sanitice($_POST['editDescription']);
    $price = $_POST['editPrice'];
    $type = $_POST['editType'];
    $colors = null;
    if(isset($_POST['editColors'])){
        $colors = $_POST['editColors'];
    }

    $validStrings = $stringSanitation->getValidationStatus();
    
    /* Checks if all the strings pass validation */
    if($validStrings == true){
        try {
            $ProductsHandler->editProduct($id, $name, $description, $price, $type, $colors);
        } catch (Throwable $error) {
            $pdo->rollBack();
            throw $error;
        }
    }
}