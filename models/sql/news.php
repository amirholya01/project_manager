<?php

class News{
    //Basic Crud
    public $createNewsQuery = "INSERT INTO `news`(`title`, `description`, `media`) VALUES (:title, :description, :media)";

    public $getNewsQuery = "SELECT * FROM news";
    
    public $updateNewsQuery = "UPDATE `news` SET `title`= :title,`description`= :description WHERE `news_id`= :id;";

    public $deleteNewsQuery = "DELETE FROM `news` WHERE news_id = :id";
}