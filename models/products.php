<?php

class Products{
    //Basic Crud
    public $getProductsDynamicSearch = "SELECT p.products_id, p.name, p.description, p.price, pt.type
                                        FROM products p, product_types pt
                                        WHERE p.type = pt.id
                                        AND (p.product_id LIKE :id
                                        OR p.name LIKE :search
                                        OR p.description LIKE :search)
                                        AND pt.type = :type";

    public $getProductsDynamicSearchWithoutId = "SELECT p.products_id, p.name, p.description, p.price, pt.type
                                                 FROM products p, product_types pt
                                                 WHERE p.type = pt.id
                                                 AND (p.name LIKE :search
                                                 OR p.description LIKE :search)
                                                 AND pt.type = :type";

                                                 
    public $getProductsDynamicSearchWithoutType = "SELECT p.products_id, p.name, p.description, p.price, pt.type
                                                  FROM products p, product_types pt
                                                  WHERE p.type = pt.id
                                                  AND (p.product_id LIKE :id
                                                  OR p.name LIKE :search
                                                  OR p.description LIKE :search)";

    public $getProductsDynamicSearchWithoutIdAndType = "SELECT p.products_id, p.name, p.description, p.price, pt.type
                                                        FROM products p, product_types pt
                                                        WHERE p.type = pt.id
                                                        AND (p.name LIKE :search
                                                        OR p.description LIKE :search)";
    
    //Advanced queries

}

$Products = new Products();