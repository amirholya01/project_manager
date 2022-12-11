<?php

/* Insert db */
$PurchaseHandler->createOrder($_POST['country'],$_POST['firstname'],$_POST['lastname'],
$_POST['address'],$_POST['appartment'],$_POST['city'],$_POST['state'],$_POST['postcode'],
$_POST['email'],$_POST['phone'],$_POST['company']);/* should probably have a payed bool */

/* Checks if the data was inserted in the db */
/* 
    This will give an error the first time you insert a purchase
    into a new db 
*/
if($this->db->lastInsertId() == 0){
    /* ✒️ Send email */
}else{
    if(isset($error)){
        $error = true;
    }else{
        echo "something went wrong";
    }
}


