<?php
    /* 📒 */
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }
    require $rootPath . "public/dbconn.php";
    require $rootPath . "models/handlers/UsersHandler.php";
    
    $name = $_POST['name'];
    //$password = $_POST['password'];
    
    /*🔥 Validate password! */
    /* The salt is pretty low, should be higher in none testing environment */
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT, ["cost" => 5]);

    $data = $UsersHandler->checkIfUserExists($name);

    $validName = true;
    if(isset($data[0])){
        $validName = false;
    }

    if($validName && $name != ""){
        $UsersHandler->createUser($name, $password, 0);
        
        $_SESSION['name'] = $name;
        $_SESSION['loggedin'] = true;
        
        header("Location: /");
    }else{
        header("Location: /signup?err=invalidname");
    }
