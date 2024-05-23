<?php

class Komponen_model {
    //database handler
    private $dbh;
    private $stmt;

public function __construct()
{
    //data source name
    $dsn = 'mysql:host=localhost;dbname=pc_component';

    try {
        $this->dbh = new PDO($dsn, 'root', '');
    } catch(PDOException $e) {
        die($e->getMessage());
    }
}

    public function getAllKomponen()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM cpu');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
