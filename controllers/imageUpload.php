<?php

/* ✒️ Needs polymorph https://hearthstone.fandom.com/wiki/Polymorph */
class imageUpload {
    function uploadImage ($img) {
        $rootPath = "";
        while(!file_exists($rootPath . "index.php")){
            $rootPath = "../$rootPath";
        }    
        require $rootPath . "dbconn.php";


        $imageValidated = true;

        /* Checks for file type */
        if($imageValidated == true){
            if($img['type']=="image/jpeg" ||
                $img['type']=="image/gif" || /* ✒️ Png heelo? */
                $img['type']=="image/jpg"){
            } else {
                $imageValidated = false;
                echo "Unsupported file type!";
            }
        }  
        
        /* Checks for file size */
        if($imageValidated == true){
            if($img['size'] < 3000000){ /* 3mb */
                
            } else {
                $imageValidated = false;
                echo "File is tooooo big!";
            }
        }
        
        /* Checks for general file errors and adds a unique name to the file */
        if($imageValidated == true){
            if ($img['error'] > 0){
                $imageValidated = false;
                echo "FIRE!: ". $img['error'];
            }else{
                /* Add unique name id */
                $KABOOMedString = explode(".", $img['name']);
                $fileType = end( $KABOOMedString );
                $img['name'] = uniqid() . "." . $fileType;
            }
        }
        
        /* Checks for file name overlap and uploads file and sends file data to db */
        if($imageValidated == true){
            if (file_exists($rootPath . "uploads/" . $img['name'])){
                $imageValidated = false;
                echo "FIRE!: Names are overlapping";
            }else{
                move_uploaded_file($img['tmp_name'], $rootPath . "uploads/" . $img['name']);
        
                $testName = "pineapple"; /* ✒️ Should take file name */
                $createImageRefOnDb = $pdo->prepare("INSERT INTO media (media_id, name) VALUES (:id, :name)"); /* ✒️ Should be in models */
                $createImageRefOnDb->execute(array(
                    ":id" => $img['name'],
                    ":name" => $testName
                ));
            }
        }
    }
}

$imageUpload = new imageUpload();