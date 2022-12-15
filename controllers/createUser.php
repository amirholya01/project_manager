<?php

$rootPath = "";
while(!file_exists($rootPath . "index.php")){
    $rootPath = "../$rootPath";
}
require_once $rootPath . "public/dbconn.php";
    
require_once $rootPath . "models/handlers/Usershandler.php";
require_once $rootPath . "security/adminCheck.php";

require_once $rootPath . "security/formSpam.php";
require_once $rootPath . "security/inputSanitation.php";


/* Checks if there is a createUser request */
if( isset( $_POST['createUser'] ) ){
    /* Gets the data from the post request */
    $name = $inputSanitation->sanitice($_POST['createName']);
    $role = $inputSanitation->numberSanitice($_POST['createRole']);
    $password = $inputSanitation->sanitice($_POST['createPassword']);

    $validStrings = $inputSanitation->getValidationStatus();

    if($validStrings == true){
        $data = $UsersHandler->checkIfUserExists($name);
    
        /* 
            validName keeps track if the name is already taken or not 
            (True = not taken | Fales = taken) 
        */
        $validName = true;
        if($data != ""){
            $validName = false;
        }
    
        if($validName && $name != "" && $name != null){
            /* Creates the user in the db */
    
            /* The salt is pretty low, should be higher in none testing environment */
            $password = password_hash($_POST['createPassword'], PASSWORD_BCRYPT, ["cost" => 5]);
    
            $UsersHandler->createUser($name, $password, $role);
        }
    }
}

header("location: /adminUsers");