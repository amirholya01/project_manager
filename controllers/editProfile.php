<?php
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }
    require_once_once $rootPath . "views/partials/header.php";
    require_once_once $rootPath . "models/users.php";

    /* gets the name of the user you are currently logged in as */
    $currentName = $_SESSION['name'];

    /* gets the data from post request */
    $name = $_POST['name'];
    $password = $_POST['password'];
    
    /* checks if a user with inserted name already exists */
    $userCheck = $pdo->prepare($Users->checkIfUserExists);
    $userCheck->bindParam(':name', $name);
    $userCheck->execute();

    $data = $userCheck->fetch();

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

    /* Checks if the require_once_oncements are fulfilled */
    if($name != "" && $validName){
        /* Checks if the user changed their password or not */
        if($password != ""){
            /* Updated the user with a new password */
            $editProfile = $pdo->prepare($Users->updateUserByName);
            $editProfile->bindParam(':name', $name);
            $editProfile->bindParam(':password', $password);
            $editProfile->bindParam(':currentName', $currentName);
            $editProfile->execute();
        }else{
            /* Update the user without changing the password */
            $editProfile = $pdo->prepare($Users->updateUserByNameWithoutPassword);
            $editProfile->bindParam(':name', $name);
            $editProfile->bindParam(':currentName', $currentName);
            $editProfile->execute();
        }

        /* Updates the session so the username get updated live */
        $_SESSION['name'] = $name;
    
        /* Redirects to frontpage */
        header("Location: /");
    }else{
        /* Throws an error message */
        header("Location: /profile?err=nameempty");
    }
