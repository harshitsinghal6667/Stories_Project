<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">



    <!--fontasom-->
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">




    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        font-family: 'Arial', sans-serif;
        background-color:rgb(208, 211, 212);
        color: #333;
    }

    h1 {
        font-size: 2.5rem;
        font-weight: bold;
        color: #007bff;
    }

    .lead {
        font-size: 1.2rem;
        color: #555;
    }

    .section-heading {
        font-size: 1.5rem;
        font-weight: bold;
        color: #0056b3;
        margin-bottom: 20px;
    }

    ul {
        list-style-type: none;
        padding: 0;
    }

    ul li {
        margin-bottom: 10px;
        position: relative;
        padding-left: 25px;
    }

    ul li:before {
        content: "✔";
        position: absolute;
        left: 0;
        color: #007bff;
        font-weight: bold;
    }

    .call-to-action {
        background-color: #007bff;
        color: #fff;
        padding: 20px;
        border-radius: 8px;
        text-align: center;
        margin-top: 40px;
    }

    .call-to-action h3 {
        color: #fff;
    }

    .call-to-action a {
        text-decoration: none;
        color: #fff;
        font-weight: bold;
        border: 2px solid #fff;
        padding: 10px 20px;
        border-radius: 5px;
    }

    .call-to-action a:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }
    </style>
</head>

<body>
    <?php include './partials/header.php'; ?>

    <div class="container mt-5">
        <h1 class="text-center">About Us</h1>
        <p class="lead text-center">
            Welcome to <strong>StoriesBook!</strong> We are passionate about sharing stories that inspire and entertain.
            Our goal is to bring people together through the power of storytelling, connecting hearts and minds with
            tales
            that spark imagination and creativity.
        </p>
        <hr>
        <div class="row mt-4">
            <div class="col-md-6">
                <h3 class="section-heading">Our Mission</h3>
                <p>
                    At StoriesBook, we believe that everyone has a story to tell. Our mission is to provide a platform
                    for
                    storytellers and readers to come together, explore diverse narratives, and find meaning in shared
                    experiences.
                    Whether it’s a heartwarming tale, an exciting adventure, or a thoughtful reflection, every story has
                    the
                    power to make a difference.
                </p>
            </div>
            <div class="col-md-6">
                <h3 class="section-heading">What We Offer</h3>
                <ul>
                    <li><strong>Inspiring Stories:</strong> A collection of stories that uplift and motivate.</li>
                    <li><strong>Creative Writing:</strong> Tips and resources to help you craft your own stories.</li>
                    <li><strong>Community Connection:</strong> A space to share, comment, and discuss stories with
                        others.</li>
                </ul>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <h3 class="section-heading">Why Stories Matter</h3>
                <p>
                    Stories have the power to transcend boundaries, evoke emotions, and teach us valuable lessons.
                    They are the threads that weave the fabric of our shared humanity. At StoriesBook, we are committed
                    to preserving the art of storytelling and ensuring that every voice has a chance to be heard.
                </p>
            </div>
        </div>
        <div class="call-to-action">
            <h3>Join Us on this Journey!</h3>
            <p>
                Dive into our collection of captivating stories, share your own experiences, and be a part of a
                community that celebrates the joy of storytelling.
            </p>
            <a href="stories.php" class="btn">Explore Stories</a>
        </div>
    </div>

    <?php include './partials/footer.php'; ?>
</body>

</html>