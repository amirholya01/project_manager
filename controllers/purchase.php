<?php

$user_id = null;
if(isset($_SESSION['name'])){
    $user = $UsersHandler->getUsers('','',$_SESSION['name']);
    $user_id = $user[0]['user_id'];
}

/* Insert db */
$PurchaseHandler->createOrder(
    $_POST['country'],
    $_POST['firstname'],
    $_POST['lastname'],
    $_POST['address'],
    $_POST['appartment'],
    $_POST['city'],
    $_POST['state'],
    $_POST['postcode'],
    $_POST['email'],
    $_POST['phone'],
    $_POST['note'],
    $_POST['company'],
    $user_id,
    $cart
);

/* Checks if the data was inserted in the db */
/* 
    This will give an error the first time you insert a purchase
    into a new db 
*/

$x = 1; /* just there to make the condition true */
if(/* Needs to check for error */ $x == 1){
    /* ✒️ Send email */
}else{
    if(isset($error)){
        $error = true;
    }else{
        echo "something went wrong";
    }
}


