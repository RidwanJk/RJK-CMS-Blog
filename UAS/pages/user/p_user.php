<?php
function connectDB()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myweb";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}




if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action'])) {
    if ($_POST['action'] == "delete" && isset($_POST['id'])) {
        $id = $_POST['id'];
        $result = userDelete($id);
        if ($result) {
            header("Location: index.php");
            exit;
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    } else if ($_POST['action'] == "edit") {
        $id = $_POST['id'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $role = $_POST['role'];

        $result = userUpdate($id, $username, $password, $email, $role);

        if ($result) {
            header("Location: index.php");
            exit();
        } else {
            echo "Error updating record.";
        }
    }
}

function readUserByid($id)
{
    $conn = connectDB();
    $sql = "SELECT * FROM users WHERE id=$id";
    $result = $conn->query($sql);
    $user = $result->fetch_object();
    $conn->close();
    return $user;
}

function users()
{
    $conn = connectDB();
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
    $users = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_object()) {
            $users[] = $row;
        }
    }
    $conn->close();
    return $users;
}

function userDelete($id)
{
    $conn = connectDB();
    $sql = "DELETE FROM users WHERE id=$id";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}

function userUpdate($id, $username, $password, $email, $role)
{
    $conn = connectDB();
    $valid_roles = ['admin', 'author']; 
    if (!in_array($role, $valid_roles)) {
        echo "Invalid role value.";
        return false;
    }

    if (empty($password)) {
        $stmt = $conn->prepare("UPDATE users SET username = ?, email = ?, role = ? WHERE id = ?");
        $stmt->bind_param("sssi", $username, $email, $role, $id);
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $conn->prepare("UPDATE users SET username = ?, password = ?, email = ?, role = ? WHERE id = ?");
        $stmt->bind_param("ssssi", $username, $hashed_password, $email, $role, $id);
    }

    if ($stmt === false) {
        echo "Error preparing the statement: " . $conn->error;
        $conn->close();
        return false;
    }

    $result = $stmt->execute();

    if (!$result) {
        echo "Error executing the statement: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
    return $result;
}



function userCreate($username, $password, $email, $role)
{
    $conn = connectDB();
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (username, password, email, role, created_at) VALUES ('$username', '$hashed_password', '$email', '$role', now())";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}
