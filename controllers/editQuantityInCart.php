<?php

$newCart = array();

// needs $_POST['quantity']

/* remove $_POST['id'] from $_SESSION['cart'] */
foreach($_SESSION['cart'] as $cart){
    if($cart['product'] != $_POST['id']){
        array_push($newCart, $cart);
    }else{
        $cart['quantity'] = $_POST['quantity'];
        array_push($newCart, $cart);
    }
}

$_SESSION['cart'] = $newCart;

?>

<script>
    window.history.go(-1);
</script>