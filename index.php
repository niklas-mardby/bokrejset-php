<?php

// spindeln i nätet... Controller, tänk den del som "styr"... app

require 'classes/user-view.php';
// book-view
// review-view

require 'classes/db.php';
require 'classes/user.php';
// book dvs id, title, author
// review (innan userbook) dvs id, user_id, book_id, review_text, pages

$pdo = require 'partials/connect.php';

$db = new DB($pdo);
$userModel = new User($pdo);
$userView = new UserView();

// ==============================================
// Skapa vy nedan

include 'partials/header.php';

// våran apps vyer här
$userView->renderAllUsersAsList($userModel->getAllUsers());

// gör om för tre tabeller!

include 'partials/footer.php';
