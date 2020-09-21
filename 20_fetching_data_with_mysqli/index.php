<?php 
	require('config/config.php');
	require('config/db.php');

	// Assign a query statement to a variable:
	$query = 'SELECT * FROM posts';

	// Get query result:
	$result = mysqli_query($connect, $query);

	// Fetch Data:
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
	// var_dump($posts); 


	// Free $results from memory:
	mysqli_free_result($result);

	// Close connection:
	mysqli_close($connect);

?>

<?php include('inc/header.php') ?>

	<h1 class="heading">Blog Posts:</h1>

	<?php foreach($posts as $post) : ?>
		<div class="blog-container">
			<h3 class="blog-title"><?php echo $post['title']; ?></h3>
			<small class="blog-info">Created on <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?></small>
			<a class="blog-link" href="post.php?id=<?php echo $post['id']; ?>">Read post</a>
		</div>
	<?php endforeach; ?>

<?php include('inc/footer.php');