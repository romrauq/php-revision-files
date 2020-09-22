<?php 
	require('config/config.php');
	require('config/db.php');

	// Check for submit:
		if(isset($_POST['submit'])){
			// Assign form data to variables:
			$title = mysqli_real_escape_string($connect, $_POST['title']);
			$author = mysqli_real_escape_string($connect, $_POST['author']);
			$body = mysqli_real_escape_string($connect, $_POST['body']);

			// Assign query statement to a variable that would store form input data to the database:
			$query = "INSERT INTO posts(title, body, author) VALUES('$title','$body','$author')";

			//
			if(mysqli_query($connect, $query)){
				header('Location: '. ROOT_URL .'');
			}else{
				echo 'Error: ' . mysqli_error($connect);
			}

		}

?>

<?php require('inc/header.php') ?>
<?php require('inc/navbar.php') ?>

	<div class="container ">
		<h1>Add Post</h1>

		<form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
			<div class="form-group">
				<label for="title">Title:</label>
				<input type="text" name="title" class="form-control">
			</div>

			<div class="form-group">
				<label for="author">Author:</label>
				<input type="text" name="author" class="form-control">
			</div>

			<div class="form-group">
				<label for="body" style="display: block;">Post Body:</label>
				<textarea name="body" class="form-control"></textarea>
			</div>

			<input type="submit" name="submit" value="Add Post" class="btn btn-primary">

		</form>
	</div>

<?php include('inc/footer.php');