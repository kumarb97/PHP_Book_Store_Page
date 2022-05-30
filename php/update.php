<?php

 include '../php/databasecon.php';

 if(isset($_POST['done'])){

 $id = $_GET['update_id'];
 $book_name = $_POST['book_name'];
 $book_author= $_POST['book_author'];
 $book_desc= $_POST['book_desc'];
 $book_price= $_POST['book_price'];
 $q = " UPDATE book_store set id=$id, BookName='$book_name', Author='$book_author', BookDescription='$book_desc', Price= $book_price where id=$id  ";

 $query = mysqli_query($con,$q);

 header('location:../page/homepage.php');
 }

?>


<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Book Store </h1>
 </div><br>

 <label>  Book Name: </label>
 <input type="text" name="book_name" class="form-control"> <br>

 <label>  Author: </label>
 <input type="text" name="book_author" class="form-control"> <br>

 <label>  Description: </label>
 <input type="text" name="book_desc" class="form-control"> <br>

 <label>  Price: </label>
 <input type="text" name="book_price" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="done"> Update </button><br>

 </div>
 </form>
 </div>
</body>
</html>