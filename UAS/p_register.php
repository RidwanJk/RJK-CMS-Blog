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
    $confirmpassword = $conn->real_escape_string($_POST['confirmpassword']);
    $email = $conn->real_escape_string($_POST['email']);

    // Check if password and confirm password match
    if ($password !== $confirmpassword) {
        $_SESSION['error'] = "Passwords do not match.";
        header("Location: register.php"); // Redirect back to the registration page
        exit;
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert the new user into the database
    $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$hashed_password', '$email')";
    
    if ($conn->query($sql) === TRUE) {
        $_SESSION['success'] = "Registration successful! You can now log in.";
        header("Location: login.php"); // Redirect to the login page
        exit;
    } else {
        $_SESSION['error'] = "Error: " . $sql . "<br>" . $conn->error;
        header("Location: register.php"); // Redirect back to the registration page
        exit;
    }
}

$conn->close();
?>
