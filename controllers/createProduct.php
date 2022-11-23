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

        
        $validStrings = $stringSanitation->getValidationStatus();
        /* Checks if all the strings pass validation */
        if($validStrings == true){
            if( isset($_POST['createColors']) ){
                $colors = $_POST['createColors'];
                $ProductsHandler->createProduct($name, $type, $description, $price, $colors);
            }else{
                $ProductsHandler->createProduct($name, $type, $description, $price);
            }

            /* Upload Image */
            /* if(isset($_FILES['createImage'])){
                echo "createImage is making it here!";
                $imageUpload->uploadImage($_FILES['createImage']);
            } */

            /* ✒️ Needs to connect the uploaded image to the product */
        }
    }
}
