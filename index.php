<?php

require 'classes/db.php';
$pdo = require 'partials/connect.php';

$db = new DB($pdo);

include 'partials/header.php';

// våran apps vyer här
$users = $db->getAll("users");
foreach($users as $user){
    echo $user['name'];
}

// gör om för tre tabeller!

include 'partials/footer.php';
