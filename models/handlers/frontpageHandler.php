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

    public function editAboutUs($aboutUs){
        $update = $this->db->prepare($this->editAboutUsQuery);
        $update->bindParam(":text", $aboutUs);
        $update->execute();
    }
}

$FrontpageHandler = new FrontpageHandler($db);