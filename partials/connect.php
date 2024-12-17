<?php
$con = new mysqli('localhost', 'root', '', 'stories');

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} else {
    echo "";
}
?>