<?php

require_once 'db.php';

class BookModel extends DB {

    protected $table = "books";

    public function getAllBooks(){
        return $this->getAll($this->table);
    }

    public function addBook(string $title, int $year){
        $sql = "INSERT INTO {$this->table} (title,year) VALUES (?,?)";
        $statement = $this->pdo->prepare($sql);
        $statement->execute([$title, $year]);
    }
}
