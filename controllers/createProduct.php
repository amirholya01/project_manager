<?php

$rootPath = "";
while(!file_exists($rootPath . "index.php")){
    $rootPath = "../$rootPath";
}
require_once $rootPath . "public/dbconn.php";

require_once $rootPath . "models/handlers/ProductsHandler.php";
require_once $rootPath . "models/handlers/UsersHandler.php";
require_once $rootPath . "security/adminCheck.php";

require_once $rootPath . "security/formSpam.php";
require_once $rootPath . "security/inputSanitation.php";

/* Checks if it passes validation */
if($validated == true){
    /* Check if there is sent a post */
    if( isset( $_POST['createProduct'] ) ){
        /* Gets all the values from the post request */
        $name = $inputSanitation->sanitice($_POST['createName']);
        $type = $inputSanitation->numberSanitice($_POST['createType']);
        $description = $inputSanitation->sanitice($_POST['createDescription']);
        $price = $inputSanitation->numberSanitice($_POST['createPrice']);
        $colors = null;
        $medias = null;
        $primaryImage = null;

        
        /* Checks if all the strings pass validation */
        $validStrings = $inputSanitation->getValidationStatus();
        
        /* Disables the data from being send to the database - used for testing*/
        //$validStrings = false;
        
        if($validStrings == true){
            if( isset($_POST['createColors']) ){
                $colors = $_POST['createColors'];
            }
            if( isset($_POST['media']) ){
                $medias = $inputSanitation->arraySanitice($_POST['media']); /* 🔥 We should have a media sanitation */
            }
            if( isset($_POST['primaryImage']) ){
                $primaryImage = $_POST['primaryImage']; /* 🔥 We should have a media sanitiation */
            }

            $validStrings = $inputSanitation->getValidationStatus();
            
            if($validStrings == true){
                $ProductsHandler->createProduct($name, $type, $description, $price, $colors, $medias, $primaryImage);
            }
        }
    }
}

header("location: /adminProducts");