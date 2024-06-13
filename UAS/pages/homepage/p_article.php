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

function countArticles()
{
    $conn = connectDB();
    $sql = "SELECT COUNT(*) as total FROM articles";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $conn->close();
    return $row['total'];
}

function countCategories()
{
    $conn = connectDB();
    $sql = "SELECT COUNT(*) as total FROM categories";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $conn->close();
    return $row['total'];
}
function readArticles($offset, $limit)
{
    $conn = connectDB();
    $sql = "SELECT articles.*, categories.name, users.username 
            FROM articles 
            JOIN categories ON articles.category_id = categories.id 
            JOIN users ON articles.user_id = users.id 
            ORDER BY articles.created_at ASC 
            LIMIT $offset, $limit";
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

function readArticlesByCategory($category_id, $offset, $limit)
{
    $conn = connectDB();
    $sql = "SELECT articles.*, categories.name, users.username 
            FROM articles 
            JOIN categories ON articles.category_id = categories.id 
            JOIN users ON articles.user_id = users.id 
            WHERE articles.category_id=$category_id
            LIMIT $offset, $limit";
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

function readArticle($id)
{
    $conn = connectDB();
    $sql = "SELECT articles.*, categories.name, users.username 
            FROM articles 
            JOIN categories ON articles.category_id = categories.id 
            JOIN users ON articles.user_id = users.id 
            WHERE articles.id=$id";
    $result = $conn->query($sql);
    $article = $result->fetch_object();
    $conn->close();
    return $article;
}

function getFeaturedPost()
{
    $conn = connectDB();
    $sql = "SELECT * FROM articles ORDER BY created_at DESC LIMIT 1"; // Fetch the most recent post
    $result = $conn->query($sql);
    $featuredPost = $result->fetch_object();
    $conn->close();
    return $featuredPost;
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
    } else if ($_POST['action'] == "edit") {
        $article_id = $_POST['id'];
        $title = $_POST['title'];
        $content = $_POST['content'];
        $category_id = $_POST['category'];

        // Handle file upload
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);
        move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);

        // Call createArticle function
        $image = $target_file;

        updateArticle($article_id, $title, $content, $image, $category_id);
        header("Location: index.php");
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


function getComments($articleId)
{
    $conn = connectDB();
    $sql = "SELECT comments.id, post_id, users.username, comments.content, comments.created_at
            FROM comments
            INNER JOIN users ON comments.user_id = users.id
            INNER JOIN articles ON comments.post_id = articles.id
            WHERE comments.post_id = $articleId
            ORDER BY comments.created_at DESC";

    $result = $conn->query($sql);
    $comments = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_object()) {
            $comments[] = $row;
        }
    }
    $conn->close();
    return $comments;
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

function getArticleByCategory($category_id)
{
    $conn = connectDB();
    $sql = "SELECT * FROM articles WHERE category_id=$category_id";
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


function searchQuery($query)
{
    $conn = connectDB();

    // Sanitize the input to prevent SQL injection
    $searchTerm = $conn->real_escape_string($query);
    $searchTerm = "%" . $searchTerm . "%";

    $sql = "SELECT * FROM articles WHERE title LIKE '$searchTerm' OR content LIKE '$searchTerm'";
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

function countArticlesByCategory($category_id)
{
    $conn = connectDB();
    $sql = "SELECT COUNT(*) as total FROM articles WHERE category_id=$category_id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $conn->close();
    return $row['total'];
}

function userCount()
{
    $conn = connectDB();
    $sql = "SELECT COUNT(*) as total FROM users";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $conn->close();
    return $row['total'];
}