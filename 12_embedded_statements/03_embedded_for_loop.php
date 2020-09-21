<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Embedded for...loop</title>
</head>
<body>

		<div>
			<ol>Loop Iterations:</ol>
			<?php for($i = 0; $i < 5; $i++): ?>
				<?php echo "<li>$i</li>" ?>
			<?php endfor; ?>
		</div>

</body>
</html>