<?php

/* ✒️ Needs to syncronise creates on all the tables in use (i did Read, Update and Delete)*/
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
    
    public $updateProductById = "UPDATE products SET name = :name, description = :description, price = :price, type = :type WHERE products_id = :id";

    public $deleteProductById = "DELETE FROM products WHERE `products_id` = :id";

    //Advanced queries
    public $createProductColor = "INSERT INTO assign_colors_to_products (product_id, color_id) VALUES (:product_id, :color_id)";
    public $getAllTypes = "SELECT id, type FROM product_types";
    public $getAllColors = "SELECT actp.product_id, pc.color
                            FROM assign_colors_to_products actp, product_colors pc
                            WHERE actp.color_id = pc.id";
    public $getAllRawColors = "SELECT * FROM product_colors";
    public $deleteProductColorByProductId = "DELETE FROM assign_colors_to_products WHERE product_id = :id";
    
}

$Products = new Products();