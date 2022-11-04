<?php

$user = null;

/* 
    If a delete is posted then delete the user with the given id 
*/
if(isset($_POST['delete'])){
    $user = $_POST['delete'];

    if($user != "" && $user != '%' && $user != '%%'){
        $deleteUser = $pdo->prepare("DELETE FROM users WHERE `user_id` = :user_id");
        $deleteUser->bindParam(":user_id", $user);
        $deleteUser->execute();
    }
}