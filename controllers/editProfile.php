<?php
    /* 📒 */
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }
    require $rootPath . "views/partials/header.php";
    require $rootPath . "models/users.php";

    //$Users = new Users();

    $currentName = $_SESSION['name'];

    $name = $_POST['name'];
    $password = $_POST['password'];
    
    $userCheck = $pdo->prepare($Users->checkIfUserExists);
    $userCheck->bindParam(':name', $name);
    $userCheck->execute();

    $data = $userCheck->fetch();

    $validName = true;
    if(isset($data['name'])){
        $validName = false;
        if($data['name'] == $currentName){
            $validName = true;
        }
    }


    if($name != "" && $validName){
        if($password != ""){
            $editProfile = $pdo->prepare($Users->updateUserByName);
            $editProfile->bindParam(':name', $name);
            $editProfile->bindParam(':password', $password);
            $editProfile->bindParam(':currentName', $currentName);
            $editProfile->execute();
        }else{
            $editProfile = $pdo->prepare($Users->updateUserByNameWithoutPassword);
            $editProfile->bindParam(':name', $name);
            $editProfile->bindParam(':currentName', $currentName);
            $editProfile->execute();
        }
    
        $_SESSION['name'] = $name;
    
        header("Location: /");
    }else{
        header("Location: /profile?err=nameempty");
    }
