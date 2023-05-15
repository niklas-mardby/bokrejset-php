<?php

require 'classes/db.php';
$pdo = require 'partials/connect.php';

$db = new DB($pdo);

include 'partials/header.php';

// våran apps vyer här

include 'partials/footer.php';
