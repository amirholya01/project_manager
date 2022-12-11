<?php

class Purchase{
    //Basic Crud
    public $createOrderQuery = "INSERT INTO purchases (`country`,`fname`,`lname`,`address`,
    `appartment`,`city`,`state`,`postcode`,`email`,`phone`, `note`,`company`) VALUES (`:country`,
    `:fname`,`:lname`,`:address`,`:appartment`,`:city`,`:state`,`:postcode`,`:email`,`:phone`,
    `:note`,`:company`);";
    
    
}