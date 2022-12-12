<?php

$rootPath = "";
while(!file_exists($rootPath . "index.php")){
    $rootPath = "../$rootPath";
}
require_once $rootPath . "public/dbconn.php";
require_once $rootPath . "models/sql/purchase.php";

class PurchaseHandler extends Purchase{

    public $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function createOrder(
        $country,
        $fname,
        $lname,
        $address,
        $appartment,
        $city,
        $state,
        $postcode,
        $email,
        $phone,
        $note,
        $company = null,
        $user_id = null,
        $cart
    ) {
        if($_SESSION['cart'] != array()){
            $createOrder = $this->db->prepare($this->createOrderQuery);
            $createOrder->bindParam(":country", $country);
            $createOrder->bindParam(":fname", $fname);
            $createOrder->bindParam(":lname", $lname);
            $createOrder->bindParam(":address", $address);
            $createOrder->bindParam(":appartment", $appartment);
            $createOrder->bindParam(":city", $city);
            $createOrder->bindParam(":state", $state);
            $createOrder->bindParam(":postcode", $postcode);
            $createOrder->bindParam(":email", $email);
            $createOrder->bindParam(":phone", $phone);
            $createOrder->bindParam(":note", $note);
            $createOrder->bindParam(":company", $company);
            $createOrder->bindParam(":user_id", $user_id); 
            $createOrder->execute();
    
            $purchase_id = $this->db->lastInsertId();
    
            foreach($cart as $item){
                $assignProductToPurchase = $this->db->prepare($this->assignProductToPurchaseQuery);
                $assignProductToPurchase->bindParam(':purchase_id', $purchase_id);
                $assignProductToPurchase->bindParam(':product_id', $item['product'][0]['products_id']);
                
                if($user_id != null){
                    $assignProductToPurchase->bindParam(':user', $user_id);
                }else{
                    $name = $fname . " " . $lname;
                    $assignProductToPurchase->bindParam(':user', $name);
                }
                
                $assignProductToPurchase->bindParam(':quantity', $item['quantity']);
                $assignProductToPurchase->bindParam(':price', $item['product'][0]['price']);
                $assignProductToPurchase->execute();
            }
        }
    }

}

$PurchaseHandler = new PurchaseHandler($db);