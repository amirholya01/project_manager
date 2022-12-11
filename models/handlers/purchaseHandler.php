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
}

$NewsHandler = new NewsHandler($db);