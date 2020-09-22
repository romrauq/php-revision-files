<?php 
	require('config/config.php');
	require('config/db.php');

	// Check for delete click:
	if(isset($_POST['delete'])){
		// Assign clicked id value to variable:
		$delete_id = mysqli_real_escape_string($connect, $_POST['delete_id']);

		// Assign query statement to a variable that would delete a post data from the database:
		$query = "DELETE FROM posts WHERE id = {$delete_id}";

		// Return to homepage upon successful delete:
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
			
			<!-- Back Button -->
			<div class="mt-1 mb-1">
				<a class="btn btn-primary" href="<?php echo ROOT_URL ?>">Back</a>
			</div>

			<!-- Post Title -->
			<h1>
				<?php echo $post['title']; ?>
			</h1>

			<!-- Post Body -->
			<p class="m-0"><?php echo $post['body']; ?></p>
			<!-- Post Author -->
			<small class="blog-info">Created on <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?></small>
			<hr class="m-1">
			
		<!-- Edit Post Button -->
			<div class="mb-1">
				<a href="<?php echo ROOT_URL; ?>editpost.php?id=<?php echo $post['id']; ?>" class="btn btn-success">Edit Post</a>
			</div>

			<form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>" class="pull-right">
				<input type="hidden" name="delete_id" value="<?php echo $post['id']?>">
				<input type="submit" name="delete" value="Delete POST" class="btn btn-danger">
			</form>

		</div>


<?php include('inc/footer.php') ?>
