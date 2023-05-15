<?php

// spindeln i nätet... Controller, tänk den del som "styr"... app

require 'classes/user-view.php';
// book-view
// review-view

require 'classes/db.php';
// user
// book
// review (innan userbook)

$pdo = require 'partials/connect.php';

$db = new DB($pdo);
$userView = new UserView();

// ==============================================
// Skapa vy nedan

include 'partials/header.php';

// våran apps vyer här
$users = $db->getAll("users");

$userView->renderAllUsersAsList($users);

// gör om för tre tabeller!

include 'partials/footer.php';
