<?php

require_once 'db.php';

class BookModel extends DB
{

    protected $table = "books";

    public function getAllBooks()
    {
        return $this->getAll($this->table);
        // $ass_array = $this->getAll($this->table);
        // loopar igenom assarray och skapar Book-objekt
        // lägger dessa i en array
        // returnerar arrayen
    }

    public function addBook(string $title, int $year, int $authorId)
    {
        $sql = "INSERT INTO {$this->table} (title,year,author_id) VALUES (?,?,?)";
        $statement = $this->pdo->prepare($sql);
        $statement->execute([$title, $year, $authorId]);
    }
}
