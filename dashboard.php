<link rel="stylesheet" href="style.css">
<?php
// dashboard.php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Redirect if not logged in
    exit();
}

echo "Welcome, " . $_SESSION['username'] . "!<br>";
echo "<a href='logout.php'>Logout</a>";
?>
