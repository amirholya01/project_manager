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

$media_id = null;

/* 
    If a delete is posted then delete the media with the given id 
*/
if(isset($_POST['delete'])){
    $media_id = $inputSanitation->numberSanitice($_POST['delete']);

    $validStrings = $inputSanitation->getValidationStatus();

    if($validStrings == true){
        if($media_id != "" && $media_id != '%' && $media_id != '%%'){
            /* Deletes the media */
            $ProductsHandler->deleteMediaById($media_id);
    
            /* Deletes junction rows in db where the media is used */
            $ProductsHandler->deleteProductMediaJunctionByMediaId($media_id);
            
            /* Deletes main image */
            unlink($rootPath . "uploads/" . $media_id);
    
            /* Deletes thumb image */
            $media_id = explode(".", $media_id);
            unlink($rootPath . "uploads/" . "thumbs/" . $media_id[0] . "_thumb." . $media_id[1]);
    
        }
    }
}

header("location: /adminMedia");