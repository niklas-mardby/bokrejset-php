<?php
require_once 'classes/author-model.php';
// FULLÖSNING! Flytta till eget view-objekt (eller book-view?)
// ful lösning pga att vi lägger för mkt i partials
$authorModel = new AuthorModel(connect($host, $db, $user, $password));
?>

<form action="form-handlers/book-form-handler.php" method="post">
    <div>
        <label for="title">Titel: </label>
        <input type="text" name="title" id="title">
    </div>
    <div>
        <label for="year">Publicerad år: </label>
        <input type="text" name="year" id="year">
    </div>
    <div>
        <label for="author">Författare:</label>
        <select name="author-id" id="author">
            <option value="">--Välj författare--</option>

            <?php
            $authors = $authorModel->getAllAuthors();
            foreach ($authors as $author) {
                echo "<option value='{$author['id']}'>
                    {$author['first_name']} {$author['last_name']}
                </option>";
            }
            ?>

        </select>
    </div>
    <button type="submit">Lägg till bok</button>
</form>