<?php

echo '<ul>';

foreach ($stmt as $row) {
	echo '<li><a href="edit.php?person=' . $row['email'] . '">' . $row['firstname'] . ' ' . $row['surname'] . '</a> was born on ' . $row['birthday'] .
	 	  ' and their email address is ' . $row['email'] . '</li>'; 
}

echo '</ul>';

?>