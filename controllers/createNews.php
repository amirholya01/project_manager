<?php

/* Checks if it passes validation */
if($validated == true){
    
    /* Check if there is sent a post */
    if( isset( $_POST['createNews'] ) ){
        /* Gets all the values from the post request */
        $title = $stringSanitation->sanitice($_POST['createTitle']);
        $description = $stringSanitation->sanitice($_POST['createDescription']);

        
        /* Checks if all the strings pass validation */
        $validStrings = $stringSanitation->getValidationStatus();

        /* Disables the data from being send to the database - used for testing*/
        //$validStrings = false;
        
        if($validStrings == true){
            $NewsHandler->createNews($name, $description);
        }
    }
}
