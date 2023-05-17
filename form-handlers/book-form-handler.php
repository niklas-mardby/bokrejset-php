<?php

require '../classes/book-model.php';
$bookModel = new BookModel(require '../partials/connect.php');

if (isset($_POST['title'], $_POST['year'])) {
    $title = filter_var($_POST['title'], FILTER_SANITIZE_SPECIAL_CHARS);
    $year = filter_var($_POST['year'], FILTER_SANITIZE_NUMBER_INT);
    $authorId = filter_var($_POST['author-id'], FILTER_SANITIZE_NUMBER_INT);
    $bookModel->addBook($title, $year, $authorId);
}

header("Location: ../books.php");
