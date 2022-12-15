<?php


$rootPath = "";
while(!file_exists($rootPath . "index.php")){
    $rootPath = "../$rootPath";
}

require_once $rootPath . "models/handlers/Usershandler.php";
require_once $rootPath . "security/formSpam.php";


$inputSanitation->sanitice($_POST['subject']);
$inputSanitation->sanitice($_POST['name']);
$inputSanitation->sanitice($_POST['email']);
$inputSanitation->sanitice($_POST['phone']);
$inputSanitation->sanitice($_POST['message']);

$validStrings = $inputSanitation->getValidationStatus();

if($validStrings == true){
    if(isset($_SESSION['name'])){
        if($validated){
            //Does not work locally!
            mail("✒️ INSERT EMAIL HERE AND UNCOMMENT!", $_POST['subject'], $_POST['name'] . " " . 
            $_POST['email'] . " " . $_POST['phone'] . " " . $_POST['message']);
            /* need to make and use a mail from the domain */
            /* https://mailtrap.io/blog/php-email-sending/ */

            header("location: /Contact");
        } else{
            header("location: https://www.youtube.com/watch?v=dQw4w9WgXcQ");
        }
    }else{
        header("location: /Contact?login=required");
    }
}