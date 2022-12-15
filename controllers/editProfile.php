<?php
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }

    /* 🔥 Do we even use this file? it is reaaally outdated */
    
    require_once $rootPath . "models/handlers/UsersHandler.php";

    /* gets the name of the user you are currently logged in as */
    $currentName = $_SESSION['name'];

    /* gets the data from post request */
    $name = $_POST['name'];
    $password = $_POST['password'];
    
    /* checks if a user with inserted name already exists */
    $data = $UsersHandler->checkIfUserExists($name);

    /* 
        validName keeps track if the name is already taken or not 
        (True = not taken | Fales = taken) 
    */
    /* sets validName to false if there is a user with the name
       sets it back to true if the user just didnt change their name */
    $validName = true;
    if(isset($data['name'])){
        $validName = false;
        if($data['name'] == $currentName){
            $validName = true;
        }
    }

    /* Checks if the requirements are fulfilled */
    if($name != "" && $validName){
        /* Checks if the user changed their password or not */
        $UsersHandler->editUserByName($currentName, $name, $password);

        /* Updates the session so the username get updated live */
        $_SESSION['name'] = $name;
    
        /* Redirects to frontpage */
        header("Location: /");
    }else{
        /* Throws an error message */
        header("Location: /profile?err=nameerror");
    }
