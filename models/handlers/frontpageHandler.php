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

    public function getFrontpage(){
        $getFrontpage = $this->db->prepare($this->getAllFrontpageQuery);
        $getFrontpage->execute();

        return $getFrontpage->fetchAll();
    }

    public function editPhoneNumber($phone){
        $update = $this->db->prepare($this->UniversalEditQuery);
        $id = 'phone';
        $update->bindParam(":text", $phone);
        $update->bindParam(":id", $id);
        $update->execute();
    }
    
    public function editEmail($email){
        $update = $this->db->prepare($this->UniversalEditQuery);
        $id = 'email';
        $update->bindParam(":text", $email);
        $update->bindParam(":id", $id);
        $update->execute();
    }
    
    public function editAddress($address){
        $update = $this->db->prepare($this->UniversalEditQuery);
        $id = 'address';
        $update->bindParam(":text", $address);
        $update->bindParam(":id", $id);
        $update->execute();
    }
    
    public function editFollowUs($text){
        $update = $this->db->prepare($this->UniversalEditQuery);
        $id = 'follow';
        $update->bindParam(":text", $text);
        $update->bindParam(":id", $id);
        $update->execute();
    }

    public function editNav1($nav1){
        $update = $this->db->prepare($this->UniversalEditQuery);
        $id = 'nav1';
        $update->bindParam(":text", $nav1);
        $update->bindParam(":id", $id);
        $update->execute();
    }
    
    public function editNav2($nav2){
        $update = $this->db->prepare($this->UniversalEditQuery);
        $id = 'nav2';
        $update->bindParam(":text", $nav2);
        $update->bindParam(":id", $id);
        $update->execute();
    }
    
    public function editNav3($nav3){
        $update = $this->db->prepare($this->UniversalEditQuery);
        $id = 'nav3';
        $update->bindParam(":text", $nav3);
        $update->bindParam(":id", $id);
        $update->execute();
    }
    
    public function editNav4($nav4){
        $update = $this->db->prepare($this->UniversalEditQuery);
        $id = 'nav4';
        $update->bindParam(":text", $nav4);
        $update->bindParam(":id", $id);
        $update->execute();
    }

    public function editAboutUs($aboutUs){
        $update = $this->db->prepare($this->UniversalEditQuery);
        $id = 'aboutUs';
        $update->bindParam(":text", $aboutUs);
        $update->bindParam(":id", $id);
        $update->execute();
    }

    public function editProductsSubTitle($title){
        $update = $this->db->prepare($this->UniversalEditQuery);
        $id = 'productsSubtitle';
        $update->bindParam(":text", $title);
        $update->bindParam(":id", $id);
        $update->execute();
    }
    
    public function editProductsTitle($title){
        $update = $this->db->prepare($this->UniversalEditQuery);
        $id = 'productsTitle';
        $update->bindParam(":text", $title);
        $update->bindParam(":id", $id);
        $update->execute();
    }
    

    public function editAboutUsSubTitle($title){
        $update = $this->db->prepare($this->UniversalEditQuery);
        $id = 'aboutusSubtitle';
        $update->bindParam(":text", $title);
        $update->bindParam(":id", $id);
        $update->execute();
    }
    
    public function editAboutUsTitle($title){
        $update = $this->db->prepare($this->UniversalEditQuery);
        $id = 'aboutusTitle';
        $update->bindParam(":text", $title);
        $update->bindParam(":id", $id);
        $update->execute();
    }

    
    public function editContactSubTitle($title){
        $update = $this->db->prepare($this->UniversalEditQuery);
        $id = 'contactSubtitle';
        $update->bindParam(":text", $title);
        $update->bindParam(":id", $id);
        $update->execute();
    }
    
    public function editContactTitle($title){
        $update = $this->db->prepare($this->UniversalEditQuery);
        $id = 'contactTitle';
        $update->bindParam(":text", $title);
        $update->bindParam(":id", $id);
        $update->execute();
    }
    
}

$FrontpageHandler = new FrontpageHandler($db);