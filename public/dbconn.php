<?php

while(!file_exists($rootPath . "index.php")){
    $rootPath = "../$rootPath";
}

require_once $rootPath . 'public/config.php';

class dbconn extends config {
        
    public $pdo;

    public function DbConnect() { 
        try {
            $dsn = "mysql:host=".$this->host.";dbname=".$this->db.";charset=UTF8";
            
            $pdo = new PDO($dsn, $this->user, $this->password);

            // Connected to the db database successfully!;
            return $pdo;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}

$dbconn = new dbconn();
/* db = database connection */
$db = $dbconn->DbConnect();
