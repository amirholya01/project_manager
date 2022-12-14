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
        $appartment = null,
        $city,
        $state,
        $postcode,
        $email,
        $phone,
        $note = null,
        $company = null,
        $user_id = null,
        $cart
    ) {
        if($_SESSION['cart'] != array()){
            echo $country;
            echo "<br>";
            echo "<br>";
            echo $fname;
            echo "<br>";
            echo "<br>";
            echo $lname;
            echo "<br>";
            echo "<br>";
            echo $address;
            echo "<br>";
            echo "<br>";
            echo $appartment;
            echo "<br>";
            echo "<br>";
            echo $city;
            echo "<br>";
            echo "<br>";
            echo $state;
            echo "<br>";
            echo "<br>";
            echo $postcode;
            echo "<br>";
            echo "<br>";
            echo $email;
            echo "<br>";
            echo "<br>";
            echo $phone;
            echo "<br>";
            echo "<br>";
            echo $note;
            echo "<br>";
            echo "<br>";
            echo $company;
            echo "<br>";
            echo "<br>";
            echo $user_id;
            echo "<br>";
            echo "<br>";
            
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

            echo $purchase_id;

            print_r($cart);
    
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

    public function getOrders($new = false){
        if($new == false){
            $getOrders = $this->db->prepare("SELECT * FROM purchases ORDER BY time DESC");
        }else{
            $getOrders = $this->db->prepare("SELECT * FROM purchases WHERE payed = 1 AND send = 0 ORDER BY time DESC");
        }
        $getOrders->execute();

        return $getOrders->fetchAll();
    }

    public function addPayedToOrder($id){
        $order = $this->db->prepare($this->addPayedToOrderQuery);
        $order->bindParam(':id', $id);
        $order->execute();
    }
    public function removePayedToOrder($id){
        $order = $this->db->prepare($this->removePayedToOrderQuery);
        $order->bindParam(':id', $id);
        $order->execute();
    }
    public function addSendToOrder($id){
        $order = $this->db->prepare($this->addSendToOrderQuery);
        $order->bindParam(':id', $id);
        $order->execute();
    }
    public function removeSendToOrder($id){
        $order = $this->db->prepare($this->removeSendToOrderQuery);
        $order->bindParam(':id', $id);
        $order->execute();
    }

}

$PurchaseHandler = new PurchaseHandler($db);