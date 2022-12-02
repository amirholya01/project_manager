<?php

$news_id = null;

/* 
    If a delete is posted then delete the news with the given id 
*/
if(isset($_POST['delete'])){
    $news_id = $_POST['delete'];

    if($news_id != "" && $news_id != '%' && $news_id != '%%'){
        /* Deletes the media */
        $NewsHandler->deleteNewsById($news_id);
    }
}