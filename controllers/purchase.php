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

/* ✒️ Send email */



