<?php

$user_id = null;

/* 
    If a delete is posted then delete the user with the given id 
*/
if(isset($_POST['delete'])){
    $user_id = $_POST['delete'];

    if($user_id != "" && $user_id != '%' && $user_id != '%%'){
        $UsersHandler->deleteUserById($user_id);
    }
}