<?php

// Checks if there is an edit field send with the form
if(isset($_POST['editMedia'])){
    $id = $stringSanitation->sanitice($_POST['editId']);
    $name = $stringSanitation->sanitice($_POST['editName']);

    $validStrings = $stringSanitation->getValidationStatus();
    
    /* Checks if all the strings pass validation */
    if($validStrings == true){
        try {
            $ProductsHandler->editMedia($id, $name);
        } catch (Throwable $error) {
            $pdo->rollBack();
            throw $error;
        }
    }
}