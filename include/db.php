<?php

	define("DB_IP", "localhost");

	define("DB_LOGIN", "root");

	define("DB_PASS", "harcelement");

	define("DB_BDD", "zazen");

	function dbconnect() {
		return mysqli_connect(DB_IP , DB_LOGIN , DB_PASS , DB_BDD); // Connexion a la BD
	}

?>
