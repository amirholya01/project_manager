<?php

/* Checks if it passes validation */
if($validated == true){
    
    /* Check if there is sent a post */
    if( isset( $_POST['createProduct'] ) ){
        /* Gets all the values from the post request */
        $name = $stringSanitation->sanitice($_POST['createName']);
        $type = $_POST['createType'];
        $description = $stringSanitation->sanitice($_POST['createDescription']);
        $price = $_POST['createPrice'];
        $colors = null;
        $medias = null;
        $primaryImage = null;

        
        /* Checks if all the strings pass validation */
        $validStrings = $stringSanitation->getValidationStatus();

        /* Disables the data from being send to the database - used for testing*/
        //$validStrings = false;
        
        if($validStrings == true){
            if( isset($_POST['createColors']) ){
                $colors = $_POST['createColors'];
            }
            if( isset($_POST['media']) ){
                $medias = $_POST['media'];
            }
            if( isset($_POST['primaryImage']) ){
                $primaryImage = $_POST['primaryImage'];
            }
            $ProductsHandler->createProduct($name, $type, $description, $price, $colors, $medias, $primaryImage);
        }
    }
}
