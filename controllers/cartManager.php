<?php

$cart = array();
$total = 0;


/* Discounts */
$currentDate = date('Y-m-d');
$currentDate = date('Y-m-d', strtotime($currentDate));

$allSales = $ProductsHandler->getSales();
$roughProductSales = array();

foreach($allSales as $sale){
    $saleBeginDate = date('Y-m-d', strtotime($sale['start']));
    $saleEndDate = date('Y-m-d', strtotime($sale['end']));

    if (($currentDate >= $saleBeginDate) && ($currentDate <= $saleEndDate)){
        $prodSales = $ProductsHandler->getProductSalesBySaleId($sale['id']);
        foreach($prodSales as $prodSale){
            array_push($roughProductSales, $prodSale);
        }
    }
}

/* Calculate new prices and filter for cheapest available discount */
$productSales = array();
foreach($roughProductSales as $sale){
    if($sale['saleType'] == '%') {
        $prod = $ProductsHandler->getProducts('', $sale['product_id']);
        $originalPrice = $prod[0]['price'];
        $newPrice = $originalPrice - (($originalPrice / 100) * $sale['sale']);
    } else {
        $newPrice = $sale['sale'];
    }

    /* Check for dublicate products sales and apply the cheapest */
    $pushToCart = true;
    foreach($productSales as $index => $refinedSale){
        if($sale['sale_id'] == $refinedSale['sale_id']){
            if($refinedSale['sale'] > $newPrice){
                $refinedSale['sale'] = $newPrice;
                $refinedSale['sale_id'] = $sale['sale_id'];
            }

            $pushToCart = false;
        }
    }

    if($pushToCart == true){
        $newSale = array(
            'sale_id' => $sale['sale_id'],
            'product_id' => $sale['product_id'],
            'sale' => $newPrice
        );
    }

    array_push($productSales, $newSale);
}


/* Creates a cart from the cart session */
foreach($_SESSION['cart'] as $item){
    /* Takes the product ids $_SESSION['cart'] and turn them into the intire product */
    $product = $ProductsHandler->getProducts('', $item['product']);

    /* Checks if the product has a discount */
    foreach($productSales as $sale){
        if($sale['product_id'] == $item['product']){
            $product[0]['price'] = $sale['sale'];
        }
    }

    /* Makes a new array that contains the intire product, quantity and total cost */
    $newItem = array(
        'product' => $product,
        'quantity' => $item['quantity'],
        'total' => $product[0]['price'] * $item['quantity']
    );

    /* Push the product array to the cart */
    array_push($cart, $newItem);

    /* Update total price */
    $total += $product[0]['price'] * $item['quantity'];
}