<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	include("Connection.php");

	$query = "SELECT * FROM books";
	Connection::select($query);

	?>
</body>
</html>