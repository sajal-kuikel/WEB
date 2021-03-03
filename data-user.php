<?php

if (isset($_POST['search'])) {
	//Prevent SQL injection by only allowing specific values for $_POST['field']
	if ($_POST['field'] == 'firstname' || $_POST['field'] == 'email' || $_POST['field'] == 'surname') {
		$stmt= find($pdo, 'person', $_POST['field'], $_POST['search'] ); 
	}	
}
else {
	$stmt = findAll($pdo, 'person');
	
}


?>