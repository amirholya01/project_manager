<?php

/* 
    ✒️
    * Needs multiple image upload
    * Needs to be able to add/remove images in edit product
    * Needs to be able to assign already existing images
    * Needs a media interface
*/

/* ✒️ Needs polymorph https://hearthstone.fandom.com/wiki/Polymorph */
class imageUpload extends ProductsHandler{

    function validateImage ($img) {
        $rootPath = "";
        while(!file_exists($rootPath . "index.php")){
            $rootPath = "../$rootPath";
        }    
        require_once $rootPath . "dbconn.php";


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
                $imgName = uniqid() . "." . $fileType;
            }
        }

        /* Checks for file name overlap and uploads file and sends file data to db */
        if($imageValidated == true){
            if (file_exists($rootPath . "uploads/" . $imgName)){
                $imageValidated = false;
                echo "FIRE!: Names are overlapping";
            }else{
                move_uploaded_file($img['tmp_name'], $rootPath . "uploads/" . $imgName);
        
                $name = "Test"; /* ✒️ Should be uploaded with the image */
                $id = $imgName;
                $this->uploadImage($id, $name);
            }
        }
    }
}

$imageUpload = new imageUpload($db);