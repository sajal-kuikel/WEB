<?php
$server = '127.0.0.1';
$username = 'root';
$password = '';

//The name of the schema we created earlier in MySQL workbench
$schema = 'message_demo';

require 'functions.php';
$pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

if (isset($_POST['submit'])) {
	$date = new DateTime();

	// $stmt = $pdo->prepare('INSERT INTO message (userId, messageText, messageDate)
	// 	VALUES (:userId, :messageText, :messageDate)');
	
	unset($_POST['submit']);
	$_POST['messageDate'] = $date->format('Y-m-d');
	insert($pdo, 'message', $_POST);

	echo '<p>Message posted</p>';
	echo '<a href="listmessages.php">Return to message list</a>';
}
else {
?>

<form action="addmessage.php"? method="POST">
	
	<label>Select user</label>
	<select name="userId">
		<?php
			$stmt = $pdo->prepare('SELECT * FROM person');
			$stmt->execute();

			foreach ($stmt as $row) {
				echo '<option value="' . $row['id'] . '">' . $row['firstname'] . ' ' . $row['surname'] . '</option>';
			}
		?>
	</select>

	<label>Message</label>
	<textarea name="messageText"></textarea>

	<input type="submit" name="submit" value="add message" />
</form>

<?php
}
?>
