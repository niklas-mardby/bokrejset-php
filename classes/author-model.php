<?php

require_once 'db.php';

class AuthorModel extends DB
{

    protected $table = "authors";

    public function getAllAuthors()
    {
        return $this->getAll($this->table);
    }
}
