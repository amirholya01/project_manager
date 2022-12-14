<?php

class Purchase{
    //Basic Crud
    public $createOrderQuery = "INSERT INTO purchases (`country`,`fname`,`lname`,`address`,
    `appartment`,`city`,`state`,`postcode`,`email`,`phone`, `note`,`company`,`user_id`) VALUES ( :country ,
     :fname , :lname , :address , :appartment , :city , :state , :postcode , :email , :phone ,
     :note , :company , :user_id );";
    
    public $assignProductToPurchaseQuery = "INSERT INTO products_assigned_to_purchases (`purchases_id`,
    `products_id`, `user`, `quantity`, `price`) VALUES ( :purchase_id ,  :product_id ,  :user , 
     :quantity ,  :price )";

    public $addPayedToOrderQuery = "UPDATE `purchases` SET `payed` = 1 WHERE purchases_id = :id;";
    
    public $removePayedToOrderQuery = "UPDATE `purchases` SET `payed` = 0 WHERE purchases_id = :id;";

    public $addSendToOrderQuery = "UPDATE `purchases` SET `send` = 1 WHERE purchases_id = :id;";
    
    public $removeSendToOrderQuery = "UPDATE `purchases` SET `send` = 0 WHERE purchases_id = :id;";
}