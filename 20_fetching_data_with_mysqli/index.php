<?php 
	require('config/config.php');
	require('config/db.php');

	// Assign a query statement to a variable:
	$query = 'SELECT * FROM posts';

	// Get query result:
	$result = mysqli_query($connect, $query);

	// Fetch data as associative array & assign to variable:
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
	// var_dump($posts); 

	// Free $results from memory:
	mysqli_free_result($result);

	// Close connection:
	mysqli_close($connect);

?>

<?php require('inc/header.php') ?>
<?php require('inc/navbar.php') ?>

<div class="container">
<h1 class="text-primary">My Posts:</h1>
		<?php foreach($posts as $post) : ?>
				<div class="card">
					<h3><?php echo $post['title']; ?></h3>
					<small>Created on <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?></small>
					<a class="blog-link" href="post.php?id=<?php echo $post['id']; ?>">Read post</a>
				</div>
		<?php endforeach; ?>
	</div>
<?php include('inc/footer.php');