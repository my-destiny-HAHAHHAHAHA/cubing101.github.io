<?php
// Establish a database connection (You should have a valid connection here)

$email = $_POST['email'];
$password = $_POST['password'];

// Retrieve user data from the database
$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
    
    if (password_verify($password, $user['password'])) {
        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['name'];
        header('Location: dashboard.php'); // Redirect to dashboard page
    } else {
        echo "Incorrect password";
    }
} else {
    echo "User not found";
}

mysqli_close($conn);
?>
