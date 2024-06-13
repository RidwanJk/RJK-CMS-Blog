<?php
session_start();
include '../homepage/p_article.php';
include 'comment_handler.php';

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $user = readUserByUsername($username);
} else {
    $username = 'Guest'; // Default value if the session variable is not set
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Blog Post</title>
    <!-- Favicon-->
    <link rel="shortcut icon" href="../../assets/img/LOGO BULAT.png">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="../../assets/img/LOGO BULAT.png" alt="LOGO BULAT" style="width: 30px; height: 30px;"></a>
            <a class="navbar-brand" href="#"><?= htmlspecialchars($username) ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="../homepage/Post">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="../homepage/post/create.php">Post</a></li>
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="../homepage/">Blog</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <?php
    if (isset($_GET['id'])) {
        $articleId = $_GET['id'];
        $article = readArticle($articleId);
    } else {
        echo "Invalid article ID";
        exit();
    }
    ?>
    <!-- Page content-->
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <!-- Post content-->
                <article>
                    <!-- Post header-->
                    <header class="mb-4">
                        <!-- Post title-->
                        <h1 class="fw-bolder mb-1"><?= $article->title ?></h1>
                        <!-- Post meta content-->
                        <div class="text-muted fst-italic mb-2">Posted on <?= $article->created_at ?> by <?= $article->username ?></div>
                        <!-- Post categories-->
                        <a class="badge bg-secondary text-decoration-none link-light" href="#!"><?= $article->name ?></a>
                    </header>
                    <!-- Preview image figure-->
                    <figure class="mb-4"><img class="img-fluid rounded" src="../article/<?= $article->imagefile ?>" alt="..." /></figure>
                    <!-- Post content-->
                    <section class="mb-5">
                        <p class="fs-5 mb-4"><?= $article->content ?></p>
                    </section>
                </article>
                <!-- Comment form -->

                <form method="POST" action="comment_handler.php">

                    <div class="mb-3">
                        <label for="comment" class="form-label">Leave a Comment:</label>
                        <input type="hidden" name="id" id="id" value="<?= $articleId ?>">
                        <input type="hidden" name="user_id" value="<?= $user->id ?>">
                        <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit Comment</button>
                </form>
                <!-- Display Comments -->
                <section class="mb-5">
                    <div class="card bg-light">
                        <div class="card-body">
                            <h5 class="card-title">Comments</h5>
                            <?php
                            $comments = getComments($articleId);
                            if ($comments) {
                                foreach ($comments as $comment) {
                            ?>
                                    <div class="mb-3">
                                        <strong><?= $comment->username ?></strong> (<?= $comment->created_at ?>)<br>
                                        <?= $comment->content ?>
                                    </div>
                            <?php
                                }
                            } else {
                                echo "<p>No comments yet.</p>";
                            }
                            ?>
                        </div>
                    </div>
                </section>

            </div>
            <!-- Side widgets-->
            <div class="col-lg-4">
                <!-- Search widget-->
                <div class="card mb-4">
                    <div class="card-header">Search</div>
                    <div class="card-body">
                        <form action="../homepage/index.php" method="GET">
                            <div class="input-group">
                                <input class="form-control" type="text" name="query" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                                <button class="btn btn-primary" id="button-search" type="submit">Go!</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Categories widget-->
                <?php $categories = readCategories(); ?>
                <div class="card mb-4">
                    <div class="card-header">Categories</div>
                    <div class="card-body">
                        <div class="row">
                            <?php foreach ($categories as $category) : ?>
                                <div class="card" style="width: 18rem;">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><a href="../homepage/category.php?id=<?= $category->id ?>"><?= $category->name ?></a></li>
                                    </ul>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <!-- Side widget-->
                <div class="card mb-4">
                    <div class="card-header">Side Widget</div>
                    <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>