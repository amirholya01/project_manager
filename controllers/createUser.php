<?php
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }
    require $rootPath . "dbconn.php";
    require $rootPath . "models/users.php";

    $Users = new Users();
    
    $name = $_POST['name'];
    $password = $_POST['password'];

    /* $sql = "SELECT name FROM users WHERE name = '$name'";
    $data = $pdo->query($sql)->fetchAll(); */
    
    $userCheck = $pdo->prepare($Users->checkIfUserExists);
    $userCheck->bindParam(':name', $name, PDO::PARAM_STR);
    $userCheck->execute();

    $data = $userCheck->fetch();

    $validName = true;
    if(isset($data[0])){
        $validName = false;
    }

    if($validName && $name != ""){
        $createUser = $pdo->prepare($Users->createUser);
        $createUser->bindParam(':name', $name, PDO::PARAM_STR);
        $createUser->bindParam(':password', $password, PDO::PARAM_STR);
        $createUser->execute();
        
        $_SESSION['name'] = $name;
        $_SESSION['loggedin'] = "true";
        
        header("Location: /$URL/");
    }else{
        header("Location: /$URL/views/login/signup.php?err=invalidname");
    }
