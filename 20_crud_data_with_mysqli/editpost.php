<?php 
	require('config/config.php');
	require('config/db.php');

	// Check for submit:
		if(isset($_POST['submit'])){
			// Assign form data to variables:
				$update_id = mysqli_real_escape_string($connect, $_POST['update_id']);
			$title = mysqli_real_escape_string($connect, $_POST['title']);
			$author = mysqli_real_escape_string($connect, $_POST['author']);
			$body = mysqli_real_escape_string($connect, $_POST['body']);

			// Assign query statement to a variable that would store form input data to the database:
			$query = "UPDATE posts SET 
				title = '$title',
				author = '$author',
				body = '$body'
				WHERE id = {$update_id}
			";

			//
			if(mysqli_query($connect, $query)){
				header('Location: '. ROOT_URL .'');
			}else{
				echo 'Error: ' . mysqli_error($connect);
			}
		}

		// Get ID:
		$id = mysqli_real_escape_string($connect, $_GET['id']);

		// Assign a query statement to a variable:
		$query = 'SELECT * FROM posts WHERE id = ' . $id;

		// Get query result:
		$result = mysqli_query($connect, $query);

		// Fetch Data:
		$post = mysqli_fetch_assoc($result);
		// var_dump($posts); 


		// Free $results from memory:
		mysqli_free_result($result);

		// Close connection:
		mysqli_close($connect);
?>

<?php require('inc/header.php') ?>
<?php require('inc/navbar.php') ?>

	<div class="container w-50 m-auto">
		<h1 class="text-center">Add a New Post</h1>

		<form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
			<div class="form-group">
				<label for="title">Title:</label>
				<input type="text" name="title" class="form-control" value="<?php echo $post['title']?>">
			</div>

			<div class="form-group">
				<label for="author">Author:</label>
				<input type="text" name="author" class="form-control" value="<?php echo $post['author']?>">
			</div>

			<div class="form-group">
				<label for="body" style="display: block;">Post Body:</label>
				<textarea name="body" class="form-control"><?php echo $post['body']?></textarea>
			</div>
			
			<input type="hidden" name="update_id" value="<?php echo $post['id']?>">

			<input type="submit" name="submit" value="Add Post" class="btn btn-primary">

		</form>
	</div>

<?php include('inc/footer.php');