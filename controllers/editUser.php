<?php

if(isset($_POST['editUser'])){
    $id = $_POST['editId'];
    $name = $_POST['editName'];
    $password;
    
    if( isset($_POST['password']) ){
        $password = $_POST['password'];
    }
    
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