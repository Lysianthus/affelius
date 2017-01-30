<?php

session_start();

if ($_SESSION['dash'] == null || ($_SESSION != true)) {
	header('Location: /dash/login');
	exit;
}

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<title>Affelius Dashboard</title>

	<link rel="shortcut icon" href="/assets/images/favicon.ico" />
</head>

<body>
	<h1>Choose Task...</h1>
	<ul>
		<li><a href="./new_archive_entry">New `archive` entry</a></li>
		<li><a href="./new_showcase_entry">New `showcase` entry</a></li>
		<li><a href="./update_archive_entry">Update `archive` entry</a> (append `where` clause)</li>
	</ul>
</body>

</html>