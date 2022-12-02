<?php

class News{
    //Basic Crud
    public $getNewsQuery= "SELECT * FROM news";
    
    public $updateNewsQuery= "UPDATE `news` SET `title`= :title,`description`= :description WHERE `news_id`= :id;";
}