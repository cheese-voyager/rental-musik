<?php
$connect = mysqli_connect("localhost", "root", "", "crudweb");

// Check connection
if (mysqli_connect_errno()) {
    echo "Connection to database failed: " . mysqli_connect_error();
}
?>