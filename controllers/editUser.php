<?php

/* 🔥 Needs sanitation */

// Checks if there is an edit field send with the form
if(isset($_POST['editUser'])){
    $id = $_POST['editId'];
    $name = $_POST['editName'];
    $role = $_POST['editRole'];
    $password;
    
    // Checks if there is submited a password
    if( isset($_POST['password']) ){
        $password = $_POST['password'];
    }
    
    //Sends to db
    $UsersHandler->editUser($id, $name, $role, $password);
}