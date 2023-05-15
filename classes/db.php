<?php

class DB {

    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    // fylla på med frågor mot databasen
    public function getAll($table)
    {
        $query = "SELECT * FROM $table";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}
