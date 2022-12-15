<?php

$user_id = null;
if(isset($_SESSION['name'])){
    $user = $UsersHandler->getUsers('','',$_SESSION['name']);
    $user_id = $user[0]['user_id'];
}
require_once $rootPath . "security/inputSanitation.php";

$inputSanitation->sanitice($_POST['country']);
$inputSanitation->sanitice($_POST['firstname']);
$inputSanitation->sanitice($_POST['lastname']);
$inputSanitation->sanitice($_POST['address']);
$inputSanitation->sanitice($_POST['appartment']);
$inputSanitation->sanitice($_POST['city']);
$inputSanitation->sanitice($_POST['state']);
$inputSanitation->numberSanitice($_POST['postcode']);
$inputSanitation->sanitice($_POST['email']);
$inputSanitation->numberSanitice($_POST['phone']);
$inputSanitation->sanitice($_POST['note']);
$inputSanitation->sanitice($_POST['company']);

$validStrings = $inputSanitation->getValidationStatus();

if($validStrings == true){
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
}


/* ✒️ Send email */



