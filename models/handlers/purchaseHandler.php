<?php

$rootPath = "";
while(!file_exists($rootPath . "index.php")){
    $rootPath = "../$rootPath";
}
require_once $rootPath . "public/dbconn.php";
require_once $rootPath . "models/sql/news.php";

class PurchaseHandler extends Purchase{

    public $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function createOrder($country, $fname, $lname, $address, $appartment, $city, $state, $postcode, $email, $phone, $note, $company= null) {
        $createOrder = $this->db->prepare($this->createOrderQuery);
        $createOrder->bindParam(':country', $country);
        $createOrder->bindParam(':fname', $fname);
        $createOrder->bindParam(':lname', $lname);
        $createOrder->bindParam(':address', $address);
        $createOrder->bindParam(':appartment', $appartment);
        $createOrder->bindParam(':city', $city);
        $createOrder->bindParam(':state', $state);
        $createOrder->bindParam(':postcode', $postcode);
        $createOrder->bindParam(':email', $email);
        $createOrder->bindParam(':phone', $phone);
        $createOrder->bindParam(':note', $note);
        $createOrder->bindParam(':company', $company);
        $createOrder->execute();
    }
}

$PurchaseHandler = new PurchaseHandler($db);