<?php

require 'config.php';
class dbconn extends config {

    public $pdo;

    /* public function __construct() {
        $this->pdo = $this->DbConnect();
        var_dump($this->pdo);
        return $this->pdo;
    } */
    public function DbConnect() {
        $dsn = "mysql:host=$this->host;dbname=$this->db;charset=UTF8";
        
        var_dump($this->host);
        var_dump($this->db);

        try {
            $pdo = new PDO($dsn, $this->user, $this->password);
            $this->pdo = $pdo;
            // Connected to the db database successfully!;
            return $pdo;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    // $pdo = $this->DbConnect();
 }
 
 $pdo = new dbconn();