<?php

// Checks if there is an edit field send with the form
if(isset($_POST['editMedia'])){
    $id = $inputSanitation->sanitice($_POST['editId']);
    $name = $inputSanitation->sanitice($_POST['editName']);

    $validStrings = $inputSanitation->getValidationStatus();
    
    /* Checks if all the strings pass validation */
    if($validStrings == true){
        $ProductsHandler->editMedia($id, $name);
    }
}