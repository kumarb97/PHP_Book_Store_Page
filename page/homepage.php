

<!DOCTYPE html>
<html>
<head>
 <title>Book Store</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Book Store </h1>
 </div><br>
<table>
		<thead>
			<tr>
				<th>Book Name</th>
				<th>Author</th>
				<th>Description</th>
				<th class="text-center">Price</th>
				<th class="text-center">Action</th>
			</tr>
		</thead>

		<tbody>
			<?php
			include '../php/databasecon.php';
			$q = "SELECT * FROM book_store";
            $query = mysqli_query($con,$q);
			while ($row = mysqli_fetch_array($query)) { ?>
				<tr>
					<td class="book_name"> <?php echo $row['BookName']; ?> </td>
					<td class="book_author"> <?php echo $row['Author']; ?> </td>
					<td class="book_desc"> <?php echo $row['BookDescription']; ?> </td>
                    <td class="book_price text-center"> <?php echo $row['Price']; ?> </td>
					<td class="edit_delete text-center">
					<button class="btn btn-primary" formaction="../php/update.php?update_id=<?php echo $row['id'] ?>">Edit</button>
					<button class="btn btn-danger" formaction="../php/delete.php?delete_id=<?php echo $row['id'] ?>">Delete</button>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
	<a href="#addbook" class=" h6 text-center"><button class="btn btn-success">ADD NEW BOOK</a> <br>
	</div>
	<br>
 </form>
 </div>
 


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div id="addbook">
 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Book Details </h1>
 </div><br>

 <label>  Book Name: </label>
 <input type="text" name="book_name" class="form-control" pattern="[A-Za-z0-9:-]*" 
 title="Error:Special characters are not allowed" /> <br>

 <label>  Author: </label>
 <input type="text" name="book_author" class="form-control" pattern="[A-Za-z]*" 
 title="Error:Special characters and symbols are not allowed"/> <br>

 <label>  Description: </label>
 <input type="text" name="book_desc" class="form-control" pattern="[A-Za-z0-9]*" 
 title="Error:Special characters and symbols are not allowed"/> <br>

 <label>  Price: </label>
 <input type="text" name="book_price" class="form-control" pattern="[0-9]*" 
 title="Error:Only numbers are allowed" placeholder="INR"/> <br>

 <button class="btn btn-success" formaction="../php/submit.php" value="submit" type="submit" name="done" id="add_btn">Add</button>
<br>

 </div>
 </div>
 </form>
 </div>
</body>
</html>