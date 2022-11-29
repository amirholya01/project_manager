<?php

/* Checks if it passes validation */
if($validated == true){
    
    /* Check if there is sent a post */
    if( isset( $_POST['createMedia'] ) ){
        /* Gets all the values from the post request */
        $name = $stringSanitation->sanitice($_POST['createName']);
        $type = $_POST['createType'];
        
        /* Checks if all the strings pass validation */
        $validStrings = $stringSanitation->getValidationStatus();

        /* Disables the data from being send to the database - used for testing*/
        //$validStrings = false;
        
        if($validStrings == true){
            /* Upload Image - ✒️ Should be removed*/
            if(isset($_FILES['createImage'])){
                $imageUpload->createImage($_FILES['createImage'], $name /* Type should be here too */);
            }
        }
    }
}
