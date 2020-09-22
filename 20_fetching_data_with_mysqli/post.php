<?php 
	require('config/config.php');
	require('config/db.php');

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

	<h1 class="heading"><?php echo $post['title']; ?></h1>

		<div class="blog-container">
			<p class="blog-body"><?php echo $post['body']; ?></p>
			<small class="blog-info">Created on <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?></small>
			<a class="return-link" href="<?php echo ROOT_URL ?>">Back</a>
		</div>


<?php include('inc/footer.php') ?>
