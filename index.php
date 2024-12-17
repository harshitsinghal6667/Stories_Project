<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Story website</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">



    <!--fontasom-->
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">




    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <?php include './partials/connect.php';?>

    <div class="conatiner-fluid slider">
        <?php include './partials/header.php';?>

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./image/img11.jpg" class="d-block w-100" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img src="./image/img10.jpg" class="d-block w-100" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img src="./image/img3.jpg" class="d-block w-100" alt="Third slide">
                </div>
            </div>

        </div>

    </div>
    <!--cart-->
    <div class="container mb-5">
        <h1 class="text-center featureTitle mb-5">Featured Stories</h1>
        <div class="row g-4">
            <?php
        $sql = "SELECT * FROM `topics`";
        $result = mysqli_query($con, $sql);
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['topic_id'];
                $topic_image = $row['topic_image'];
                $topic_name = $row['topic_name'];
                $topic_desc = $row['topic_desc'];
                echo '<div class="col-md-4 col-sm-6">
                    <div class="card" style="width: 18rem;">
                        <img src="' . $topic_image . '" class="card-img-top" alt="' . $topic_name . '">
                        <div class="card-body">
                            <h5 class="card-title">' . $topic_name . '</h5>
                            <p class="card-text">' . substr($topic_desc, 0, 50) . '...</p>
                            <a href="stories.php?story_id='.$id.'" class="btn btn-primary">Continue Reading</a>
                        </div>
                    </div>
                </div>';
            }
        }
        ?>

        </div>

    </div>


    <?php include './partials/footer.php';?>
    <!-- Include Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>