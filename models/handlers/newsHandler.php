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

    public function getNews(){
        $getNews = $this->db->prepare($this->getNewsQuery);
        $getNews->execute();

        $news = $getNews->fetchAll();
        return $news;
    }

    public function editNews($id, $title, $description){
        $deletePeviouslyAssignedColors = $this->db->prepare($this->updateNewsQuery);
        $deletePeviouslyAssignedColors->bindParam(':id', $id);
        $deletePeviouslyAssignedColors->bindParam(':title', $title);
        $deletePeviouslyAssignedColors->bindParam(':description', $description);
        $deletePeviouslyAssignedColors->execute();
    }
}

$NewsHandler = new NewsHandler($db);