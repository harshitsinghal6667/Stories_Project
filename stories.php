<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Story website</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

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
    <?php include './partials/header.php';?>
    <!--php code-->
    <?php
    $id=$_GET['story_id'];
    $sql="Select * from `topics` where topic_id=$id";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_assoc($result)){
        $topic_name=$row['topic_name'];
        $topic_desc=$row['topic_desc'];
        $topic_image=$row['topic_image'];
    }
?>




    <div class="container-fluid ">
        <div class="jumbotron bg-warning rounded ">
            <div class="container">
                <h1 class="display-4"><?php echo $topic_name ;?></h1>
                
                <button class="btn btn-dark"><a class="text-light" href="#reading" role="button">Continue
                        Reading</a></button>
                </p>
            </div>
        </div>
    </div>

    <div class="conatiner-fluid slider">


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

    <!--Reading-->
    <div class="container" id="reading">
        <div class="jumbotron jumbotron-fluid bg-warning rounded p-0 ">
            <div class="container">
                <h1 class="display-4 text-center">Enjoy Reading</h1>
                <img src=<?php echo $topic_image ;?> class="img-fluid" alt="">
                <p class="lead"><?php echo $topic_desc ;?></p>

            </div>
        </div>

    </div>
    <!---->
    <div class="container-fluid mb-4">
        <h2 class="text-center display-4"> Thank you for your time 😀

        </h2>
    </div>



    <?php include './partials/footer.php';?>

</body>

</html>