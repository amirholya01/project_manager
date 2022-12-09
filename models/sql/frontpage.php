<?php

class Frontpage{
    //Basic Crud
    public $UniversalEditQuery = "UPDATE `frontpage` SET `text` = :text WHERE `id` = :id";

    public $getAllFrontpageQuery = "SELECT * FROM `frontpage`";
}