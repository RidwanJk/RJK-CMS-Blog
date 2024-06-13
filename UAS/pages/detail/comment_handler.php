<?php
function koneksidb()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myweb";


    $koneksi = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($koneksi->connect_error) {
        die("Connection failed: " . $koneksi->connect_error);
    }
    return $koneksi;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['comment'])) {

    $content = ($_POST['comment']);
    $user_id = ($_POST['user_id']);

    if (!empty($content) && !empty($user_id)) {
        $post_id = $_POST['id'];
        $created_at = date('Y-m-d H:i:s');

        insertComment($post_id, $user_id, $content, $created_at);
        header("Location: index.php?id=$post_id");
    } else {
        echo "Error: Please fill out the comment form.";
    }
}

function insertComment($post_id, $user_id, $content, $created_at)
{
    $koneksi = koneksidb();
    $sql = "INSERT INTO comments (post_id, user_id, content, created_at)
            VALUES ('$post_id', '$user_id', '$content', '$created_at')";
    if ($koneksi->query($sql) === TRUE) {
        echo "Comment added successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
    $koneksi->close();
}

