<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./resources/css/styles.css">
	<title>Document</title>
</head>

<body>
	<div class="header">
		<h1>PHP Auto-suggestion Application</h1>
	</div>

	<div class="main-container">

		<h1 class="heading">Search Users</h1>

		<form action="" class="form-body">
			<label for="">Search User:</label>
			<input type="text" onkeyup="showSuggestions(this.value)">
			<p>Suggestions: <span class="output" id="output" ></span></p>
		</form>
	</div>

</body>
<script>

	function showSuggestions(str){
		if(str.length == 0){
			document.getElementById("output").innerHTML = "";
		}else{
			// AJAX Request:
			// Create a new XML HTTP Request object:
			let xhr = new XMLHttpRequest();

			// Set XML HTTP GET request url:
			xhr.open("GET", "resources/php/suggest.php?q=" + str , true);

			// Set conditions to run upon success of onreadystatechange & status:
			xhr.onreadystatechange = function(){
				if(this.readystate == 4 && this.status == 200){
					document.getElementById("output").innerHTML = this.responseText;
				}
			}

			// Send GET request:
			xhr.send();
		}
	}

</script>

</html>