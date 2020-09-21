<?php
	$signedIn = true;
	$user = "John Smith";
	$members = ["Benard", "David", "James", "Sanchez", "et al..."];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Embedded foreach loop</title>
</head>
<body>
		<div>
			<?php if ($signedIn) :?>
				<h3>Welcome <?php echo $user ?></h3>
			<?php else: ?>
				<h3>Welcome guest user</h3>
			<?php endif; ?>
		</div>

		<div>
			<ol>Your team members are:</ol>
			<?php foreach($members as $member): ?>
				<?php echo "<li>$member</li>" ?>
			<?php endforeach; ?>
		</div>
</body>
</html>