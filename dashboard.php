<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

// Display user information from session
$userName = $_SESSION['user_name'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Head content -->
</head>
<body>
    <h2>Welcome, <?php echo $userName; ?></h2>
    <a href="logout.php">Logout</a>
</body>
</html>
