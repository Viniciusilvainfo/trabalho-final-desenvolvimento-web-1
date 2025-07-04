<?php
require_once 'config/database.php';
require_once 'includes/auth.php';
require_once 'includes/functions.php';

if (isLoggedIn()) {
    header("Location: pages/dashboard.php");
    exit();
} else {
    header("Location: pages/login.php");
    exit();
}
?>