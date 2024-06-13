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


function createCategory($name)
{
    $conn = connectDB();
    $sql = "INSERT INTO categories (name, created_at) VALUES ('$name', NOW())";
    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}

function updateCategory($category_id, $name)
{
    $conn = connectDB();
    $sql = "UPDATE categories SET name='$name' WHERE id=$category_id";
    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action'])) {
    if ($_POST['action'] == "delete" && isset($_POST['category_id'])) {
        $category_id = $_POST['category_id'];
        $result = deleteCategory($category_id);
        if ($result) {
            header("Location: index.php");
            exit;
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    } else if ($_POST['action'] == "edit") {
        $category_id = $_POST['id'];
        $name = $_POST['category'];

        updateCategory($category_id, $name);
        header("Location: index.php");
    }
}

function deleteCategory($category_id)
{
    $conn = connectDB();
    $sql = "DELETE FROM categories WHERE id=$category_id";
    if ($conn->query($sql) === TRUE) {
        $conn->close();
        return true;
    } else {
        $conn->close();
        return false;
    }
}




function readCategories()
{
    $conn = connectDB();
    $sql = "SELECT * FROM categories";
    $result = $conn->query($sql);
    $categories = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_object()) {
            $categories[] = $row;
        }
    }
    $conn->close();
    return $categories;
}

function readUserByUsername($username)
{
    $conn = connectDB();
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);
    $user = $result->fetch_object();
    $conn->close();
    return $user;
}

function getArticleById($id)
{
    $conn = connectDB();
    $sql = "SELECT * FROM articles WHERE id=$id";
    $result = $conn->query($sql);
    $article = $result->fetch_object();
    $conn->close();
    return $article;
}

function getCategoryById($id)
{
    $conn = connectDB();
    $sql = "SELECT * FROM categories WHERE id=$id";
    $result = $conn->query($sql);
    $category = $result->fetch_object();
    $conn->close();
    return $category;
}
