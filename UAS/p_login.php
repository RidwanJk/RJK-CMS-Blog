<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myweb";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $conn->real_escape_string($_POST['username']);
    $password = $conn->real_escape_string($_POST['password']);

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $hashed_password = $user['password'];

        // Verify the password
        if (password_verify($password, $hashed_password)) {
            $_SESSION['username'] = $username;

            // Check user role
            $role = $user['role'];
            if ($role == 'admin') {
                $_SESSION['role'] = 'admin';
                header("Location: index.php"); // Redirect to admin homepage
                exit;
            } else {
                $_SESSION['role'] = 'author';
                header("Location: ./pages/homepage/index.php"); // Redirect to user homepage
                exit;
            }
        } else {
            // Invalid password
            $_SESSION['error'] = "Invalid username or password.";
            header("Location: login.php");
            exit;
        }
    } else {
        // User does not exist
        $_SESSION['error'] = "Invalid username or password.";
        header("Location: login.php");
        exit;
    }
}

$conn->close();
?>
