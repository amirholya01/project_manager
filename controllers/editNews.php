<?php

// Checks if there is an edit field send with the form
if(isset($_POST['editNews'])){
    $id = $stringSanitation->sanitice($_POST['editId']);
    $name = $stringSanitation->sanitice($_POST['editTitle']);
    $description = $stringSanitation->sanitice($_POST['editDescription']);
    $media = $stringSanitation->sanitice($_POST['editMedia']);

    $validStrings = $stringSanitation->getValidationStatus();
    
    /* Checks if all the strings pass validation */
    if($validStrings == true){
        $NewsHandler->editNews($id, $name, $description, $media);
    }
}