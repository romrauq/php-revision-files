<?php

	# echo date('h'); // Returns current hour numerical value.
	# echo date('i'); // Returns current minutes numerical value.
	# echo date('s'); // Returns current seconds numerical value.
	# echo date('a'); // Returns AM/PM string value.

	echo date('h:i:sa'); // Returns time hh:mm:ss(am/pm)

	echo "<br><br>";

	# Setting a timezone:
	// date_timestamp_set('America/New_York'); // Sets the timezone to New York's. 

	# Making a specific time:
		$timeStamp = mktime(22, 45, 30, 12, 14, 1991); // args=(hours, mins, secs, month, day, year)
		/* the variable above is assignedwith the value of an integer of seconds between the 
		Unix Epoch (Jan 1st 1970 00:00:00) and the date specified.*/
		echo $timeStamp; // Returns culmilative seconds from Unix Epoch date.
		echo "<br>";

		// Converting to readable date and time values from culmilative seconds:
		echo date('h:i:sa', $timeStamp); // Returns time values from culmulative seconds.
		echo "<br>";
		echo date('d/m/Y', $timeStamp); // Returns date values from culmulative seconds.
		echo "<br>";
		echo date('h:i:sa d/m/Y', $timeStamp); // Returns time & date values from culmulative seconds.

		echo "<br><br>";


		// Using the string to time function:
		# You can specify a date by using its string value:
		$timeStamp2 = strtotime('12:00am April 20 2020'); // Unix Epoch value assigned to variable
		// echo $timeStamp2;
		echo date('h:i:sa d/m/Y', $timeStamp2);
		echo "<br><br>";

		# You can specify a date using arbitrary terms like:
		# "Yesterday", "Tomorrow", "Next Sunday", "Last week", "Next Month", "Next year" ,
		# "+2 Days", +3 weeks, "+3 Months" "+10 Years" etc...
		$timeStamp3 = strtotime('Tomorrow');
		echo date('h:i:sa d/m/Y', $timeStamp3);



?>