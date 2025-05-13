<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

echo "<h1>Bem-vindo, " . htmlspecialchars($_SESSION['username']) . "!</h1>";
?>

<a href="logout.php">Logout</a>

