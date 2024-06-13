<?php
session_start();
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    $username = 'Guest'; // Default value if the session variable is not set
}

include 'p_article.php';

$articlesPerPage = 2; // Number of articles per page
$category_id = isset($_GET['id']) ? $_GET['id'] : 0; // Get category ID from URL parameter
$totalArticles = countArticlesByCategory($category_id); // Function to get total number of articles in the category
$totalPages = ceil($totalArticles / $articlesPerPage);
$currentpage = isset($_GET['page']) ? $_GET['page'] : 1; // Get current page number from URL parameter
$offset = ($currentpage - 1) * $articlesPerPage;
$category = getCategoryById($category_id); // Function to get category details by ID
$articles = readArticlesByCategory($category_id, $offset, $articlesPerPage); // Function to get articles by category
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Category - <?= $category->name ?></title>
    <!-- Favicon-->
    <link rel="shortcut icon" href="../../assets/img/LOGO BULAT.png">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <!-- add logo before name -->
            <a class="navbar-brand" href="index.php"><img src="../../assets/img/LOGO BULAT.png" alt="LOGO BULAT" style="width: 30px; height: 30px;"></a>
            <a class="navbar-brand" href="index.php"><?= $username ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="Post">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="post/create.php">Post</a></li>
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Blog</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page header with logo and tagline-->
    <header class="py-5 bg-light border-bottom mb-3">
        <div class="container">
            <div class="text-left my-5">
                <h1 class="fw-bolder"><?= $category->name ?></h1>
            </div>
        </div>
    </header>
    <!-- Page content-->
    <div class="container">
        <div class="row">
            <!-- Blog entries-->
            <div class="col-lg-8">
                <?php foreach ($articles as $row) : ?>
                    <?php $newDate = date("F j, Y", strtotime($row->created_at)); ?>
                    <div class="card mb-4">
                        <a href="../article/<?= $row->imagefile ?>"><img class="card-img-top" src="../article/<?= $row->imagefile ?>" alt="Image for <?= $row->title ?>" /></a>
                        <div class="card-body">
                            <div class="small text-muted"><?= $newDate ?></div>
                            <h2 class="card-title h4"><?= $row->title ?></h2>
                            <?php
                            $contentWithStyles = $row->content;
                            $contentWithoutStyles = preg_replace('/(<[^>]+) style=".*?"/i', '$1', $contentWithStyles);
                            $a = substr($contentWithoutStyles, 0, 200) . '...'; ?>
                            <p class="card-text"><?= $a ?></p>
                            <a class="btn btn-primary" href="../detail/index.php?id=<?= $row->id ?>">Read more →</a>
                        </div>
                    </div>
                <?php endforeach; ?>
                <!-- Pagination-->
                <nav aria-label="Pagination">
                    <hr class="my-0" />
                    <ul class="pagination justify-content-center my-4">
                        <li class="page-item <?= ($currentpage == 1) ? 'disabled' : '' ?>">
                            <a class="page-link" href="?id=<?= $category_id ?>&page=<?= ($currentpage - 1) ?>" tabindex="-1" aria-disabled="true">Newer</a>
                        </li>
                        <?php for ($page = 1; $page <= $totalPages; $page++) : ?>
                            <li class="page-item <?= ($currentpage == $page) ? 'active' : '' ?>">
                                <a class="page-link" href="?id=<?= $category_id ?>&page=<?= $page ?>"><?= $page ?></a>
                            </li>
                        <?php endfor; ?>
                        <li class="page-item <?= ($currentpage == $totalPages) ? 'disabled' : '' ?>">
                            <a class="page-link" href="?id=<?= $category_id ?>&page=<?= ($currentpage + 1) ?>">Older</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- Side widgets-->
            <div class="col-lg-4">
                <!-- Search widget-->
                <div class="card mb-4">
                    <div class="card-header">Search</div>
                    <div class="card-body">
                        <form action="index.php" method="GET">
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
                                        <li class="list-group-item"><a href="category.php?id=<?= $category->id ?>"><?= $category->name ?></a></li>
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