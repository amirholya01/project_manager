<?php

    /* 
        ✒️ 
        * Needs password hashing
        * Needs tokens instead of sessions    
    */
    $rootPath = "";
    while(!file_exists($rootPath . "index.php")){
        $rootPath = "../$rootPath";
    }
    require $rootPath . "public/dbconn.php";

    /* gets the information from the post request */
    $name = $_POST['name'];
    $password = $_POST['password'];

    $sql = "SELECT name, password, role FROM users WHERE name='$name'"; /* <-- ✒️ Model */

    $validated = false;

    /* Fetches the data from the db */
    $data = $db->query($sql)->fetchAll();

    /* Checks if the user exists */
    if( isset($data[0]['name']) ){
        if(password_verify($password, $data[0]['password'])){
            $validated = true;
        }else{
            header("Location: /?err=wronginfo");
        }
    }else{
        header("Location: /?err=wronginfo");
    }

    if($validated == true){
        //login
        $_SESSION["name"] = $data[0]['name'];
        $_SESSION["loggedin"] = true;

        if($data[0]['role'] == 1){
            header("Location: /adminFrontpage");
        }else{
            header("Location: /");
        }
    }
