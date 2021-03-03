<?php
//If the fomr has been submitted
if (isset($_POST['submit'])) {
	$server = '127.0.0.1';
	$username = 'root';
	$password = '';

	//The name of the schema we created earlier in MySQL workbench
	$schema = 'message_demo';

	// require 'functions.php';
	require 'DatabaseTable.php';

	$pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

	// $stmt = $pdo->prepare('INSERT INTO person (firstname, surname, email, birthday) 
	// 	VALUES(:firstname, :surname, :email, :birthday)');

	$criteria = $_POST;

	$criteria['birthday'] = $_POST['year'] . '-' . $_POST['month'] . '-' . $_POST['day'];

	unset($criteria['day']);
	unset($criteria['month']);
	unset($criteria['year']);
	unset($criteria['submit']);

	$objdb = new DatabaseTable();

	$objdb->insert($pdo, 'person', $criteria);

	echo '<p>Record added</p>';
}
//The form was not submitted, display the form
else {
?>

	<form action="add.php" method="POST">
		<label>First name:</label>
		<input type="text" name="firstname" />

		<label>Surname:</label>
		<input type="text" name="surname" />

		<label>Email:</label>
		<input type="text" name="email" />

		<label>Birthday:</label>
		<select name="day">
		<?php
			for ($i = 1; $i < 32; $i++) {
				echo '<option value="' . $i . '">' . $i  . '</option>';
			}
		?>
		</select>

		
		<select name="month">
		<?php
			$months = ['', 'January', 'Feburary', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
			for ($i = 1; $i < 13; $i++) {
				if ($i < 10) {
					echo '<option value="0' . $i . '">' . $months[$i]  . '</option>';	
				}
				else {
					echo '<option value="' . $i . '">' . $months[$i]  . '</option>';
				}			
			}
		?>
		</select>

		<select name="year">
		<?php
			for ($i = 1900; $i < 2016; $i++) {
				echo '<option value="' . $i . '">' . $i  . '</option>';
			}
		?>
		</select>

		<input type="submit" value="Add" name="submit" />


	</form>

<?php
}
?>
