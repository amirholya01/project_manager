<?php

$rootPath = "";
while(!file_exists($rootPath . "index.php")){
    $rootPath = "../$rootPath";
}

require_once $rootPath . "public/dbconn.php";

require_once $rootPath . "models/handlers/productsHandler.php";
require_once $rootPath . "models/handlers/Usershandler.php";

require_once $rootPath . "security/adminCheck.php";
require_once $rootPath . "security/formSpam.php";
require_once $rootPath . "security/inputSanitation.php";

require_once $rootPath . "controllers/imageUpload.php";

/* Checks if it passes validation */
if($validated == true){
    
    /* Check if there is sent a post */
    if( isset( $_POST['createMedia'] ) ){
        /* Gets all the values from the post request */
        $name = $inputSanitation->sanitice($_POST['createName']);
        
        /* Checks if all the strings pass validation */
        $validStrings = $inputSanitation->getValidationStatus();

        /* Disables the data from being send to the database - used for testing*/
        //$validStrings = false;
        
        if($validStrings == true){
            if(isset($_FILES['createImage'])){
                $imageUpload->createImage($_FILES['createImage'], $name /* Type should be here too */);
            }
        }
    }
}

header("location: /adminMedia");