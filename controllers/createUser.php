<?php
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }
    require $rootPath . "dbconn.php";
    require $rootPath . "models/users.php";

    $Users = new Users();
    echo $Users->createUser;
    
    $name = $_POST['name'];
    $password = $_POST['password'];

    $sql = "SELECT name FROM users WHERE name = '$name'";
    $data = $pdo->query($sql)->fetchAll();

    $validName = true;
    if($data[0]){
        $validName = false;

        if($data[0] == $currentName){ /* $currentName not defined */
            $validName = true; 
        }
    }

    //if($validName && $name != ""){
        /* $createUser->prepare($Users->createUser);
        $createUser->bindParam(':name', $name, PDO::PARAM_STR);
        $createUser->bindParam(':password', $password, PDO::PARAM_STR);
        $createUser->execute(); */
        echo "Meeeep";
        /* $sql = "INSERT INTO users (name, password) VALUES ('$name', '$password')";
    
        $pdo->query($sql);
        
        $_SESSION['name'] = $name;
        $_SESSION['loggedin'] = "true";
        
        header("Location: /$URL/"); */
    //}else{
        //header("Location: /$URL/views/login/signup.php?err=invalidname");
    //}
