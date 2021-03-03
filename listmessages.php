<?php
$server = '127.0.0.1';
$username = 'root';
$password = '';
require 'functions.php';
//The name of the schema we created earlier in MySQL workbench
$schema = 'message_demo';
$pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

$messages= findAll($pdo, 'message');

echo '<ul>';

foreach ($messages as $row) {

	$users = find($pdo, 'person', 'id', $row['userId']);
	$user = $users->fetch();

	$date = new DateTime($row['messageDate']);
	
	echo '<li>' . $row['messageText'] . ' posted by 
		<strong>' . $user['firstname'] . ' ' . $user['surname'] . '</strong> 
		on <em>' . $date->format('d/m/Y') . '</em>';

}
echo '</ul>';

echo '<a href="index.php?page=addmessage-page">Add a new message</a>';
?>
