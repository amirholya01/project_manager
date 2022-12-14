<?php

/* needs $products to function *///$products = array();
$newProducts = array();
$total = 0;


/* Discounts */
$currentDate = date('Y-m-d');
$currentDate = date('Y-m-d', strtotime($currentDate));

/* Gets all sales */
$allSales = $ProductsHandler->getSales();
/* 
    Container for all individual product sales. 
    but it can have duplicates
    (if the same product is on sale twice at the same time) 
*/
$roughProductSales = array();

/* goes through all sales */
foreach($allSales as $sale){
    /* Checks if the sale is currently going on */
    $saleBeginDate = date('Y-m-d', strtotime($sale['start']));
    $saleEndDate = date('Y-m-d', strtotime($sale['end']));

    if (($currentDate >= $saleBeginDate) && ($currentDate <= $saleEndDate)){
        /* If the sale is going on, add all the products on sale to roughProductSales */
        $prodSales = $ProductsHandler->getProductSalesBySaleId($sale['sale_id']);
        foreach($prodSales as $prodSale){
            array_push($roughProductSales, $prodSale);
        }
    }
}

/* Calculate new prices and filter for cheapest available discount */
$productSales = array();
foreach($roughProductSales as $sale){
    /* Refine the prices. cut % of price to get the new price */
    if($sale['saleType'] == '%') {
        /* % */
        $prod = $ProductsHandler->getProducts('', $sale['product_id']);
        $originalPrice = $prod[0]['price'];
        $newPrice = $originalPrice - (($originalPrice / 100) * $sale['sale']);
    } else {
        /* $ */
        $newPrice = $sale['sale'];
    }

    /* Check for dublicate products sales and apply the cheapest */
    $pushToCart = true;
    foreach($productSales as $index => $refinedSale){
        /* Check for dublicates */
        if($sale['sale_id'] == $refinedSale['sale_id']){
            /* 
                If the new discount is better than the previous
                overwrite the old one with the discount
            */
            if($refinedSale['sale'] > $newPrice){
                $refinedSale['sale'] = $newPrice;
                $refinedSale['sale_id'] = $sale['sale_id'];
            }

            $pushToCart = false;
        }
    }

    /* Push product to productSales if there isnt any dublicates yet */
    if($pushToCart == true){
        $newSale = array(
            'sale_id' => $sale['sale_id'],
            'product_id' => $sale['product_id'],
            'sale' => $newPrice
        );
        array_push($productSales, $newSale);
    }
}


/* Updates products to include sales */
foreach($products as $product){
    /* Checks if the product has a discount */
    foreach($productSales as $sale){
        /* $productSales = all the active sales we filtered above */
        /* if the ids match, apply the discount */
        if($sale['product_id'] == $product['products_id']){
            $product['price'] = $sale['sale'];
        }
    }

    /* Push the product to the products array */
    array_push($newProducts, $product);
}

$products = $newProducts;