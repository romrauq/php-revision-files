<?php

	$signedIn = false;

	$user = "John Smith";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Embedded if...else 1</title>
</head>
<body>
		<div>
			<?php if ($signedIn) {?>
				<h3>Welcome <?php echo $user ?></h3>
			<?php } else {?>
				<h3>Please sign in.</h3>
			<?php } ?>
		</div>
</body>
</html>