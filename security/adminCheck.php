<?php

/* 
    🔥 SECURITY RISK
    This is based on the users session which they can manually change
    so if the the name of an admin they can just breach security
    
    We need to set it up with tokens instead
*/

/* $getUserData = $pdo->prepare($Users->checkIfUserIsAdmin);
$getUserData->bindParam(':name', $_SESSION['name']);
$getUserData->execute(); */

if(isset($_SESSION['name'])){
    $role = $UsersHandler->getUserRole($_SESSION['name']);
    if($role == 0){
        header("location: https://www.youtube.com/watch?v=dQw4w9WgXcQ");
    }
} else {
    header("location: /"/* Login */);
}