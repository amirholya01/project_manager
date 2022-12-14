<?php

$rootPath = "";
while(!file_exists($rootPath . "index.php")){
    $rootPath = "../$rootPath";
}

require_once $rootPath . "public/dbconn.php";

require_once $rootPath . "models/handlers/Usershandler.php";
require_once $rootPath . "security/adminCheck.php";

require_once $rootPath . "models/handlers/newsHandler.php";

require_once $rootPath . "security/formSpam.php";
require_once $rootPath . "security/stringSanitation.php";


/* Checks if it passes validation */
if($validated == true){
    
    /* Check if there is sent a post */
    if( isset( $_POST['createNews'] ) ){
        /* Gets all the values from the post request */
        $title = $stringSanitation->sanitice($_POST['createTitle']);
        $description = $stringSanitation->sanitice($_POST['createDescription']);
        $media = $stringSanitation->sanitice($_POST['createMedia']);

        echo $media;
        /* Checks if all the strings pass validation */
        $validStrings = $stringSanitation->getValidationStatus();

        /* Disables the data from being send to the database - used for testing*/
        //$validStrings = false;
        
        if($validStrings == true){
            $NewsHandler->createNews($title, $description, $media);
        }
    }
}

header("location: /adminNews");