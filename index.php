<?php
session_start();
require_once "public/index.php";

if (isset($_SESSION['id'])) {
    if (isset($_GET['url']) AND $_GET['url'] === "/") {
        include_once "views/home.php";
    } else {
        include_once "views/" . $_GET['url'] . ".php";
    }
} else {
    echo "Good";
}

require_once "includes/footer.php";