<form action="list.php" method="POST">
	<input type="text" name="search" />
	<select name="field">
		<option value="firstname">First name</option>
		<option value="surname">Surname</option>
		<option value="email">Email address</option>
	</select>
	<input type="submit" value="Search" name="submit" />
</form>

<?php

$server = '127.0.0.1';
$username = 'root';
$password = '';

require 'functions.php';

//The name of the schema we created earlier in MySQL workbench
$schema = 'message_demo';
$pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);


require 'user-list.php';
require 'user-table.php';

?>
