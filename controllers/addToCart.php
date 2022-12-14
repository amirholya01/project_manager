<?php

require_once $rootPath . "security/stringSanitation.php";

/* 
    If you want to get rid of the refresh the easiest way would be to use javascript,
    but we tried using as little javascript as possible in this project
*/

/* Add to cart code here */
if(isset($_POST['product'])){
    /* -1 == not in cart */
    /* -1< in cart already */
    $inCart = -1;

    /* goes through the cart and check if the added product is already there */
    foreach($_SESSION['cart'] as $index => $productInCart){
        if($productInCart['product'] == $_POST['product']){
            $inCart = $index;
        }
    }

    /* Allows to add more than one product at a time */
    $amountToAdd = 1;
    if($_POST['amountToAdd']){
        $amountToAdd = $stringSanitation->numberSanitice($_POST['amountToAdd']);
        if($amountToAdd < 1){
            $amountToAdd = 1;
        }
    }

    if($inCart > -1){
        /* if the product is already in the cart increase the quanitity by 1 */
        $_SESSION['cart'][$inCart]['quantity'] += $amountToAdd;
    }else{
        /* if the product is not in the cart, add it */
        array_push($_SESSION['cart'], array("product" => $_POST['product'], "quantity" => $amountToAdd));
    }


    /* Goes back to the previous page */
    $linkToPrevPage = end($_SESSION['breadcrumbsLinks']);
    header("location: $linkToPrevPage");
}
?>