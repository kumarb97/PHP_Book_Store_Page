<?php

include 'databasecon.php';
if(isset($_GET['delete_id'])){
$id = $_GET['delete_id'];
$q = " DELETE FROM `book_store` WHERE id=$id";

$query = mysqli_query($con,$q);
if ($query) {
    header('location:../page/homepage.php');
}
}
?>