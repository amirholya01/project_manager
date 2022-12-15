<?php

class Products{
    //Basic Crud
    public $createProductQuery = "INSERT INTO products (name, type, description, price, primary_image) VALUES (:name, :type, :description, :price, :primary_image);";

    public $getProductsDynamicSearchQuery = "SELECT p.products_id, p.name, p.description, p.price, pt.type, p.primary_image
                                        FROM products p, product_types pt
                                        WHERE p.products_id = :id
                                        AND (p.name LIKE :search
                                        OR p.description LIKE :search)
                                        AND p.type = pt.id;";

    public $getProductsDynamicSearchWithoutIdQuery = "SELECT p.products_id, p.name, p.description, p.price, pt.type, p.primary_image
                                                    FROM products p, product_types pt
                                                    WHERE p.type = pt.id
                                                    AND (p.name LIKE :search
                                                    OR p.description LIKE :search)
                                                    AND pt.id = :type;";
                   
    public $getProductsDynamicSearchWithoutTypeQuery = "SELECT p.products_id, p.name, p.description, p.price, pt.type, p.primary_image
                                                    FROM products p, product_types pt
                                                    WHERE p.products_id = :id
                                                    AND (p.name LIKE :search
                                                    OR p.description LIKE :search)
                                                    AND p.type = pt.id;";

    public $getProductsDynamicSearchWithoutIdAndTypeQuery = "SELECT p.products_id, p.name, p.description, p.price, pt.type, p.primary_image
                                                        FROM products p, product_types pt
                                                        WHERE p.type = pt.id
                                                        AND (p.name LIKE :search
                                                        OR p.description LIKE :search);";
    
    public $getMediaDynamicSearchQuery = "SELECT * FROM media WHERE name LIKE :name;";


    public $updateProductByIdQuery = "UPDATE products SET name = :name, description = :description, price = :price, type = :type, primary_image = :primary_image WHERE products_id = :id;";

    public $updateMediaQuery = "UPDATE media SET name = :name WHERE media_id = :media_id;";

    /* ✒️ This should disable the product instead of deleting it for the purchase history to still be able to refrence it */
    public $deleteProductByIdQuery = "DELETE FROM products WHERE `products_id` = :id;";

    public $deleteMediaByIdQuery = "DELETE FROM media WHERE `media_id` = :id;";

    //Advanced queries
    public $createProductColorQuery = "INSERT INTO assign_colors_to_products (products_id, color_id) VALUES (:product_id, :color_id);";
    public $getAllTypesQuery = "SELECT id, type FROM product_types;";
    
    public $getColorAssigmentsQuery = "SELECT actp.products_id, pc.color
                                        FROM assign_colors_to_products actp, product_colors pc
                                        WHERE actp.color_id = pc.color_id;";
    public $getColorAssigmentsByProductIdQuery = "SELECT color_id FROM assign_colors_to_products WHERE products_id = :id";
    public $getMediaAssigmentsByProductIdQuery = "SELECT media_id FROM assign_media_to_products WHERE products_id = :id";
    
    
    public $getAllColorsQuery = "SELECT * FROM product_colors;";
    public $deleteProductColorByProductIdQuery = "DELETE FROM assign_colors_to_products WHERE products_id = :id;";
    public $deleteProductMediaByProductIdQuery = "DELETE FROM assign_media_to_products WHERE products_id = :id;";
    public $deleteProductMediaByMediaIdQuery = "DELETE FROM assign_media_to_products WHERE media_id = :id;";

    public $assignMediaToProductQuery = "INSERT INTO assign_media_to_products (products_id, media_id) VALUES (:product_id, :media_id);";
    public $getRelatedProductsQuery = "SELECT * FROM products WHERE type = :type";
    public $convertTypeToTypeIdQuery = "SELECT id FROM product_types WHERE type = :type";

    //Sale Queries
    public $createSaleQuery = "INSERT INTO sales (title, description, start, end) VALUES (:title, :description, :start, :end);";
    public $getSalesQuery = "SELECT * FROM getSalesQuery"; // SELECT * FROM sales ORDER BY end DESC
    public $editSaleQuery = "UPDATE sales SET title = :title, description = :description, start = :start, end = :end WHERE sale_id = :id;";
    public $assignProductToSaleQuery = "INSERT INTO assign_products_to_sales (sale_id, products_id, sale, saleType) VALUES (:sale_id, :product_id, :sale, :saleType)";
    public $deleteSaleById = "DELETE FROM sales WHERE sale_id = :id";
    public $deleteAssignedProductsToSaleQuery = "DELETE FROM assign_products_to_sales WHERE sale_id = :id";
    public $getSaleByIdQuery = "SELECT * FROM `sales` WHERE `sale_id` = :id";
    public $getProductSalesBySaleIdQuery = "SELECT * FROM `assign_products_to_sales` WHERE `sale_id` = :id";
}