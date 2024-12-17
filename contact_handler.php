<?php
include './partials/connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $message = mysqli_real_escape_string($con, $_POST['message']);

    $sql = "INSERT INTO `contacts` (`name`, `email`, `message`) VALUES ('$name', '$email', '$message')";
    if (mysqli_query($con, $sql)) {
        echo "Thank you for contacting us!";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
?>