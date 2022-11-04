<?php
    /* 📒 */
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }
    require $rootPath . "dbconn.php";
    require $rootPath . "models/users.php";

    //$Users = new Users();
    
    $name = $_POST['name'];
    $password = $_POST['password'];

    
    $userCheck = $pdo->prepare($Users->checkIfUserExists);
    $userCheck->bindParam(':name', $name);
    $userCheck->execute();

    $data = $userCheck->fetch();

    $validName = true;
    if(isset($data[0])){
        $validName = false;
    }

    if($validName && $name != ""){
        $createUser = $pdo->prepare($Users->createUser);
        $createUser->bindParam(':name', $name);
        $createUser->bindParam(':password', $password);
        $createUser->execute();
        
        $_SESSION['name'] = $name;
        $_SESSION['loggedin'] = "true";
        
        header("Location: /");
    }else{
        header("Location: /signup?err=invalidname");
    }
