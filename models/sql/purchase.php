<?php

class Purchase{
    //Basic Crud
    public $createOrderQuery = "INSERT INTO purchases (`country`,`fname`,`lname`,`address`,
    `appartment`,`city`,`state`,`postcode`,`email`,`phone`, `note`,`company`,`user_id`) VALUES ( :country ,
     :fname , :lname , :address , :appartment , :city , :state , :postcode , :email , :phone ,
     :note , :company , :user_id );";
    
    public $assignProductToPurchaseQuery = "INSERT INTO products_assigned_to_purchases (`purchase_id`,
    `product_id`, `user`, `quantity`, `price`) VALUES ( :purchase_id ,  :product_id ,  :user , 
     :quantity ,  :price )";
}