<?php

session_start();

if (isset($_POST['dash'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	if (($username == 'Vera') && ($password == 'Farmiga')) {
		$_SESSION['dash'] = true;
		$_SESSION['username'] = $username;

		header('Location: /dash/dash');
	} else {
		header('Location: /dash/login');
		exit;
	}
}

?>