<?php

/**
 * Connect to database
 */
function connect_to_db() {
	return $dbh = new PDO('mysql:host=' . af_server . ';dbname=' . af_database_name . ';charset=utf8', af_username, af_password);
}

?>