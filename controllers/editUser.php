<?php

// Checks if there is an edit field send with the form
if(isset($_POST['editUser'])){
    $id = $_POST['editId'];
    $name = $_POST['editName'];
    $password;
    
    // Checks if there is submited a password
    if( isset($_POST['password']) ){
        $password = $_POST['password'];
    }
    
    // Runs queries depending on if there is a password or not
    if($password != "" && $password != null){
        $editUser = $pdo->prepare("UPDATE users SET name = :name, password = :password WHERE `user_id` = :id");
        $editUser->bindParam(':password', $password);
    }else{
        $editUser = $pdo->prepare("UPDATE users SET name = :name WHERE `user_id` = :id");
    }
    
    $editUser->bindParam(':id', $id);
    $editUser->bindParam(':name', $name);
    $editUser->execute();
}