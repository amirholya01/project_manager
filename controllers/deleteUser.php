<?php

$user = null;

if(isset($_POST['delete'])){
    $user = $_POST['delete'];

    if($user != "" && $user != '%' && $user != '%%'){
        $deleteUser = $pdo->prepare("DELETE FROM users WHERE `user_id` = :user_id");
        $deleteUser->bindParam(":user_id", $user);
        $deleteUser->execute();
    }
}