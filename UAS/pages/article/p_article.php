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


function createArticle($user_id, $title, $content, $image, $category_id)
{
    $conn = connectDB();
    $sql = "INSERT INTO articles (user_id, title, content, imagefile, category_id, created_at, updated_at) VALUES ('$user_id', '$title', '$content', '$image', '$category_id', NOW(), NOW())";
    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}


function readArticles()
{
    $conn = connectDB();
    $sql = "SELECT articles.*, categories.name, users.username 
            FROM articles 
            JOIN categories ON articles.category_id = categories.id 
            JOIN users ON articles.user_id = users.id 
            ORDER BY articles.created_at asc";
    $result = $conn->query($sql);
    $articles = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_object()) {
            $articles[] = $row;
        }
    }
    $conn->close();
    return $articles;
}

function updateArticle($id, $title, $content, $image, $category_id)
{
    $conn = connectDB();
    $sql = "UPDATE articles SET title='$title', content='$content', imagefile='$image', category_id='$category_id', updated_at=NOW() WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}



if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action'])) {
    if ($_POST['action'] == "delete" && isset($_POST['article_id'])) {
        $article_id = $_POST['article_id'];
        $result = deleteArticle($article_id);
        if ($result) {
            header("Location: index.php");
            exit;
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    } else if ($_POST['action'] == "edit" && $_SERVER["REQUEST_METHOD"] == "POST") {
        $article_id = $_POST['id'];
        $title = $_POST['title'];
        $content = $_POST['content'];
        $category_id = $_POST['category'];

        // Handle file upload
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);

        // Debugging: Output file path to check
        echo "Target File Path: " . $target_file . "<br>";

        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            echo "File uploaded successfully.<br>";

            
            $image = $target_file;
            $result = updateArticle($article_id, $title, $content, $image, $category_id);

            if ($result) {
                header("Location: index.php");
                exit;
            } else {
                echo "Error updating record: " . $conn->error;
            }
        } else {
            echo "Error uploading file.<br>";
        }
    }
}

function deleteArticle($id)
{
    $conn = connectDB();
    $sql = "DELETE FROM articles WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
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
