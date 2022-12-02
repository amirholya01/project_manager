<?php

$rootPath = "";
while(!file_exists($rootPath . "index.php")){
    $rootPath = "../$rootPath";
}
require_once $rootPath . "public/dbconn.php";
require_once $rootPath . "models/sql/news.php";

class NewsHandler extends News{

    public $db;

    public function __construct($db) {
        $this->db = $db;
    }


    /* Media and Date???? */

    public function createNews($title, $description){
        $createNews = $this->db->prepare($this->createNewsQuery);
        $createNews->bindParam(':title', $title);
        $createNews->bindParam(':description', $description);
    }

    public function getNews(){
        $getNews = $this->db->prepare($this->getNewsQuery);
        $getNews->execute();

        $news = $getNews->fetchAll();
        return $news;
    }

    public function editNews($id, $title, $description){
        $editNews = $this->db->prepare($this->updateNewsQuery);
        $editNews->bindParam(':id', $id);
        $editNews->bindParam(':title', $title);
        $editNews->bindParam(':description', $description);
        $editNews->execute();
    }

    public function deleteNewsById($id){
        $deleteNews = $this->db->prepare($this->deleteNewsQuery);
        $deleteNews->bindParam('id', $id);
        $deleteNews->execute();
    }
}

$NewsHandler = new NewsHandler($db);