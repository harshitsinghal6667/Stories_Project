<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php include './partials/header.php'; ?>
    <div class="container mt-5">
        <h1 class="text-center">Articles</h1>
        <div class="row">
            <?php
            include './partials/connect.php';
            $sql = "SELECT * FROM `articles`";
            $result = mysqli_query($con, $sql);
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="' . $row['article_image'] . '" class="card-img-top" alt="' . $row['article_title'] . '">
                            <div class="card-body">
                                <h5 class="card-title">' . $row['article_title'] . '</h5>
                                <p class="card-text">' . substr($row['article_content'], 0, 100) . '...</p>
                                <a href="article_details.php?article_id=' . $row['article_id'] . '" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>';
                }
            }
            ?>
        </div>
    </div>
    <?php include './partials/footer.php'; ?>
</body>

</html>