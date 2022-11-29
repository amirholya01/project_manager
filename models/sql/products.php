<?php

class Products{
    //Basic Crud
    public $createProductQuery = "INSERT INTO products (name, type, description, price) VALUES (:name, :type, :description, :price);";

    public $getProductsDynamicSearchQuery = "SELECT p.products_id, p.name, p.description, p.price, pt.type
                                        FROM products p, product_types pt
                                        WHERE p.products_id = :id
                                        AND (p.name LIKE :search
                                        OR p.description LIKE :search)
                                        AND p.type = pt.id;";

    public $getProductsDynamicSearchWithoutIdQuery = "SELECT p.products_id, p.name, p.description, p.price, pt.type
                                                 FROM products p, product_types pt
                                                 WHERE p.type = pt.id
                                                 AND (p.name LIKE :search
                                                 OR p.description LIKE :search)
                                                 AND pt.type = :type;";
                   
    public $getProductsDynamicSearchWithoutTypeQuery = "SELECT p.products_id, p.name, p.description, p.price, pt.type
                                                    FROM products p, product_types pt
                                                    WHERE p.products_id = :id
                                                    AND (p.name LIKE :search
                                                    OR p.description LIKE :search)
                                                    AND p.type = pt.id;";

    public $getProductsDynamicSearchWithoutIdAndTypeQuery = "SELECT p.products_id, p.name, p.description, p.price, pt.type
                                                        FROM products p, product_types pt
                                                        WHERE p.type = pt.id
                                                        AND (p.name LIKE :search
                                                        OR p.description LIKE :search);";
    
    public $getMediaDynamicSearchQuery = "SELECT * FROM media WHERE name LIKE :name AND type = :type;";
    
    public $getMediaDynamicSearchWithoutTypeQuery = "SELECT * FROM media WHERE name LIKE :name;";

    public $updateProductByIdQuery = "UPDATE products SET name = :name, description = :description, price = :price, type = :type WHERE products_id = :id;";

    public $deleteProductByIdQuery = "DELETE FROM products WHERE `products_id` = :id;";

    //Advanced queries
    public $createProductColorQuery = "INSERT INTO assign_colors_to_products (product_id, color_id) VALUES (:product_id, :color_id);";
    public $getAllTypesQuery = "SELECT id, type FROM product_types;";
    public $getColorAssigmentsQuery = "SELECT actp.product_id, pc.color
                            FROM assign_colors_to_products actp, product_colors pc
                            WHERE actp.color_id = pc.id;";
    public $getAllColorsQuery = "SELECT * FROM product_colors;";
    public $deleteProductColorByProductIdQuery = "DELETE FROM assign_colors_to_products WHERE product_id = :id;";

    public $assignMediaToProductQuery = "INSERT INTO assign_media_to_products (product_id, media_id) VALUES (:product_id, :media_id);";
    
}