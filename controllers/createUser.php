<?php
    $connPath = "dbconn.php";
    while(!file_exists($connPath)){
        $connPath = "../$connPath";
    }
    require $connPath;

    
    $name = $_POST['name'];
    $password = $_POST['password'];
    
    $sql = "SELECT name FROM users WHERE name = '$name'"; /* <-- Model */
    $data = $pdo->query($sql)->fetchAll();

    $validName = true;
    if($data[0]){
        $validName = false;
    }
    if($data[0] == $currentName){
        $validName = true;
    }

    if($validName && $name != ""){
        $sql = "INSERT INTO users (name, password) VALUES ('$name', '$password')"; /* <-- Model */
    
        $pdo->query($sql);
        
        $_SESSION['name'] = $name;
        $_SESSION['loggedin'] = "true";
        
        header("Location: /$URL/");
    }else{
        header("Location: /$URL/views/login/signup.php?err=invalidname");
    }
 