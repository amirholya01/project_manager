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

    function createImage ($img, $name = "pineapple") {
        $rootPath = "";
        while(!file_exists($rootPath . "index.php")){
            $rootPath = "../$rootPath";
        }    
        require_once $rootPath . "public/dbconn.php";


        $imageValidated = true;

        /* Checks for file type */
        if($imageValidated == true){
            if($img['type']=="image/jpeg" ||
                $img['type']=="image/gif" ||
                $img['type']=="image/png" ||
                $img['type']=="image/jpg"){
            } else {
                $imageValidated = false;
                echo "Unsupported file type!";
                /* var_dump($img['type']); */
            }
        }  
        
        /* Checks for file size */
        if($imageValidated == true){
            if($img['size'] < 3000000000){ /* 3mb */
                
            } else {
                $imageValidated = false;
                echo "File is too big!";
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
                $id = uniqid();
                $imgName = $id . "." . $fileType;
                $thumbName = $id . "_thumb." . $fileType;
            }
        }

        /* Checks for file name overlap and uploads file and sends file data to db */
        if($imageValidated == true){
            if (file_exists($rootPath . "uploads/" . $imgName)){
                $imageValidated = false;
                echo "FIRE!: Names are overlapping";
            }else{
                move_uploaded_file($img['tmp_name'], $rootPath . "uploads/" . $imgName);
        
                $id = $imgName;
                $this->uploadImage($id, $name);
            }
        }
        
        /* Create thumbnail */
        if($imageValidated == true){
            $thumbImagePath = $rootPath . "uploads/thumbs/" . $thumbName;
            copy(
                $rootPath . "uploads/" . $imgName, 
                $thumbImagePath
            );
            
            $thumbImage;
            if($fileType == "jpeg" || $fileType == "jpg"){
                $thumbImage = imagecreatefromjpeg($thumbImagePath);
            }
            if($fileType == "png"){
                $thumbImage = imagecreatefrompng($thumbImagePath);
            }
            if($fileType == "gif"){
                $thumbImage = imagecreatefromgif($thumbImagePath);
            }

            $imageSize = getimagesize($thumbImagePath);
            $imageWidth = $imageSize[0];
            $imageHeight = $imageSize[1];

            $thumbMaxSize = 500;

            /* Calculates the new image sizes */
            if($imageHeight > $imageWidth){
                $ratio = $imageWidth / $imageHeight;
                $imageHeight = 500;
                $imageWidth = 500 * $ratio;
            } else {
                $ratio = $imageHeight / $imageWidth;
                $imageWidth = 500;
                $imageHeight = 500 * $ratio;
            }


            $thumbImage = imagescale($thumbImage , $imageWidth, $imageHeight);
            
            if($fileType == "jpeg" || $fileType == "jpg"){
                imagejpeg($thumbImage, $thumbImagePath);
            }
            if($fileType == "png"){
                imagepng($thumbImage, $thumbImagePath);
            }
            if($fileType == "gif"){
                imagegif($thumbImage, $thumbImagePath);
            }
        }
    }
}

$imageUpload = new imageUpload($db);