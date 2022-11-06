<?php

class Products{
    //Basic Crud
    public $getProductsDynamicSearch = "SELECT p.products_id, p.name, p.description, p.price, pt.type
                                        FROM products p, product_types pt
                                        WHERE p.type = pt.id
                                        AND p.product_id LIKE :id
                                        AND pt.type LIKE :search
                                        AND p.name LIKE :search
                                        AND p.description LIKE :search";

    public $getProductsDynamicSearchWithoutId = "SELECT p.products_id, p.name, p.description, p.price, pt.type
                                                 FROM products p, product_types pt
                                                 WHERE p.type = pt.id
                                                 AND pt.type LIKE :search
                                                 AND p.name LIKE :search
                                                 AND p.description LIKE :search";
    
    //Advanced queries

}

$Products = new Products();