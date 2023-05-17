<?php

class BookView
{

    public function renderAllBooksAsList(array $books): void
    {
        echo "<ul>";
        foreach ($books as $book) {
            echo "<li>{$book['title']} ({$book['year']})</li>";
        }
        echo "</ul>";
    }

    public function renderAllBooksWithAuthorsAsList(array $books): void
    {
        echo "<ul>";
        foreach ($books as $book) {
            echo "<li>{$book['title']} av {$book['first_name']} {$book['last_name']} ({$book['year']})</li>";
        }
        echo "</ul>";
    }
}
