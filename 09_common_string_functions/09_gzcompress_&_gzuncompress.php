<?php

	# gzcompress() - compresses a string.
	# gzuncompress() - uncompresses a compressed string.

	$largeString = "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
	Culpa aperiam laudantium doloribus praesentium quisquam mollitia aut suscipit 
	qui itaque illo incidunt, corrupti voluptatem ullam quos, modi ratione deleniti 
	consectetur? Voluptatibus!";

	// Compressing string value and assigning it to a new variable:
	$compressed = gzcompress($largeString);
	echo $compressed;
	echo "<br><br>";

	// Uncompressing a compressed string value and assigning it to a new variable:
	$uncompressed = gzuncompress($compressed);
	echo $uncompressed;
?>