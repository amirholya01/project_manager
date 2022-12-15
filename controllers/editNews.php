<?php

// Checks if there is an edit field send with the form
if(isset($_POST['editNews'])){
    $id = $inputSanitation->sanitice($_POST['editId']);
    $name = $inputSanitation->sanitice($_POST['editTitle']);
    $description = $inputSanitation->sanitice($_POST['editDescription']);
    $media = $inputSanitation->sanitice($_POST['editMedia']);

    $validStrings = $inputSanitation->getValidationStatus();
    
    /* Checks if all the strings pass validation */
    if($validStrings == true){
        $NewsHandler->editNews($id, $name, $description, $media);
    }
}