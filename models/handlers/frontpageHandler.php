<?php

$rootPath = "";
while(!file_exists($rootPath . "index.php")){
    $rootPath = "../$rootPath";
}
require_once $rootPath . "public/dbconn.php";
require_once $rootPath . "models/sql/frontpage.php";

class FrontpageHandler extends Frontpage{

    public $db;

    public function __construct($db) {
        $this->db = $db;
    }
/* 
    public function editPhoneNumber($phone){
        $update = $this->db->prepare($this->);
        $update->bindParam(":", $phone);
        $update->execute();
    }
    
    public function editEmail($email){
        $update = $this->db->prepare($this->);
        $update->bindParam(":", $email);
        $update->execute();
    }
    
    public function editAddress($address){
        $update = $this->db->prepare($this->);
        $update->bindParam(":", $address);
        $update->execute();
    }
    
    public function editFollowUs($text){
        $update = $this->db->prepare($this->);
        $update->bindParam(":", $text);
        $update->execute();
    }

    public function editNav1($nav1){
        $update = $this->db->prepare($this->);
        $update->bindParam(":", $nav1);
        $update->execute();
    }
    
    public function editNav2($nav2){
        $update = $this->db->prepare($this->);
        $update->bindParam(":", $nav2);
        $update->execute();
    }
    
    public function editNav3($nav3){
        $update = $this->db->prepare($this->);
        $update->bindParam(":", $nav3);
        $update->execute();
    }
    
    public function editNav4($nav4){
        $update = $this->db->prepare($this->);
        $update->bindParam(":", $nav4);
        $update->execute();
    }

    public function editAboutUs($aboutUs){
        $update = $this->db->prepare($this->editAboutUsQuery);
        $update->bindParam(":text", $aboutUs);
        $update->execute();
    }

    public function editProductsSubTitle($title){
        $update = $this->db->prepare($this->);
        $update->bindParam(":", $title);
        $update->execute();
    }
    
    public function editProductsTitle($title){
        $update = $this->db->prepare($this->);
        $update->bindParam(":", $title);
        $update->execute();
    }
    

    public function editAboutUsSubTitle($title){
        $update = $this->db->prepare($this->);
        $update->bindParam(":", $title);
        $update->execute();
    }
    
    public function editAboutUsTitle($title){
        $update = $this->db->prepare($this->);
        $update->bindParam(":", $title);
        $update->execute();
    }

    
    public function editContactSubTitle($title){
        $update = $this->db->prepare($this->);
        $update->bindParam(":", $title);
        $update->execute();
    }
    
    public function editContactTitle($title){
        $update = $this->db->prepare($this->);
        $update->bindParam(":", $title);
        $update->execute();
    } */
    
}

$FrontpageHandler = new FrontpageHandler($db);