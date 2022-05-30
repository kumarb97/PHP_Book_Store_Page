<?php

include 'databasecon.php';
if(isset($_POST['done'])){

 $book_name = $_POST['book_name'];
 $book_author= $_POST['book_author'];
 $book_desc= $_POST['book_desc'];
 $book_price= $_POST['book_price'];
 $q = " INSERT INTO `book_store`(`BookName`, `Author`,`BookDescription`,`Price`) VALUES ( '$book_name', '$book_author','$book_desc','$book_price' )";

 $query = mysqli_query($con,$q);
 if ($query) {
    header('location:../page/homepage.php');
}
}
else{
    echo "Please fill the details";
}
?>