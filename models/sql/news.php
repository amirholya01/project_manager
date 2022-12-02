<?php

class News{
    //Basic Crud
    public $createNewsQuery = "INSERT INTO `news`(`title`, `description`) VALUES (':title',':description')";

    public $getNewsQuery = "SELECT * FROM news";
    
    public $updateNewsQuery = "UPDATE `news` SET `title`= :title,`description`= :description WHERE `news_id`= :id;";

    public $deleteNewsQuery = "DELETE FROM `news` WHERE news_id = :id";
}