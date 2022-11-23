<?php

/* 🔥 Needs sanitation */

/* Checks if there is a createUser request */
if( isset( $_POST['createUser'] ) ){
    /* Gets the data from the post request */
    $name = $_POST['createName'];
    $password = $_POST['createPassword'];
    $role = $_POST['createRole'];

    $data = $UsersHandler->checkIfUserExists($name);

    /* 
        validName keeps track if the name is already taken or not 
        (True = not taken | Fales = taken) 
    */
    $validName = true;
    if($data != ""){
        $validName = false;
        print_r($data);
        echo "Pineapple";
    }

    if($validName && $name != "" && $name != null){
        /* Creates the user in the db */
        $UsersHandler->createUser($name, $password, $role);
    }
}
