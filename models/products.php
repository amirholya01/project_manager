<?php

class Products{
    //Basic Crud
    public $createProduct = "INSERT INTO products (name, type, description, price) VALUES (:name, :type, :description, :price)";

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
    
    public $updateProductById = "UPDATE products SET name = :name, description = :description, price = :price WHERE products_id = :id";

    public $deleteProductById = "DELETE FROM products WHERE `products_id` = :id";

    //Advanced queries

}

$Products = new Products();