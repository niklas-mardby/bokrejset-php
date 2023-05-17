<?php

class Book
{

    private string $title;
    private int $year;
    private int $author_id;

    public function __construct($title, $year, $author_id)
    {
        $this->title = $title;
        $this->year = $year;
        $this->author_id = $author_id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }
    public function getYear(): int
    {
        return $this->year;
    }
    public function getAuthorId(): int
    {
        return $this->author_id;
    }
}
