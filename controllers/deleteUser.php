<?php

$user = null;

/* 
    If a delete is posted then delete the user with the given id 
*/
if(isset($_POST['delete'])){
    $user = $_POST['delete'];

    if($user != "" && $user != '%' && $user != '%%'){
        $deleteUser = $pdo->prepare($Users->deleteUserById);
        $deleteUser->bindParam(":user_id", $user);
        $deleteUser->execute();
    }
}