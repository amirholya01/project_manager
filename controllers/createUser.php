<?php

/* Checks if there is a createUser request */
if( isset( $_POST['createUser'] ) ){
    /* Gets the data from the post request */
    $name = $_POST['createName'];
    $password = $_POST['createpassword'];

    /* Checks if there already exist a user with the same name */
    $userCheck = $pdo->prepare($Users->checkIfUserExists);
    $userCheck->bindParam(':name', $name);
    $userCheck->execute();

    $data = $userCheck->fetch();

    /* 
        validName keeps track if the name is already taken or not 
        (True = not taken | Fales = taken) 
    */
    $validName = true;
    if(isset($data[0])){
        $validName = false;
    }

    if($validName && $name != "" && $name != null){
        /* Creates the user in the db */
        $createUser = $pdo->prepare($Users->createUser);
        $createUser->bindParam(':name', $name);
        $createUser->bindParam(':password', $password);
        $createUser->execute();
    }
}
