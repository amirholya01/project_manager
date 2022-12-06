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

    public function createNews($title, $description, $media = null){
        $createNews = $this->db->prepare($this->createNewsQuery);
        $createNews->bindParam(':title', $title);
        $createNews->bindParam(':description', $description);
        $createNews->bindParam(':media', $media);
        $createNews->execute();
    }

    public function getNews($search){
        if($search == ""){
            $search = "%";
        }else{
            $search = "%" . $search . "%";
        }

        $getNews = $this->db->prepare($this->getNewsQuery);
        $getNews->bindParam(":title", $search);
        $getNews->bindParam(":description", $search);
        $getNews->execute();

        $news = $getNews->fetchAll();
        return $news;
    }

    public function editNews($id, $title, $description, $media){
        $editNews = $this->db->prepare($this->updateNewsQuery);
        $editNews->bindParam(':id', $id);
        $editNews->bindParam(':title', $title);
        $editNews->bindParam(':description', $description);
        $editNews->bindParam(':media', $media);
        $editNews->execute();
    }

    public function deleteNewsById($id){
        $deleteNews = $this->db->prepare($this->deleteNewsQuery);
        $deleteNews->bindParam('id', $id);
        $deleteNews->execute();
    }
}

$NewsHandler = new NewsHandler($db);