<?php

echo '<table>';
echo '<thead>';
echo '<tr>';
echo '<th>First name</th>';
echo '<th>Surname</th>';
echo '<th>Birthday</th>';
echo '</tr>';
echo '</thead>';
foreach ($stmt as $user) {
 echo '<tr>';
 echo '<td>' . $user['firstname'] . '</td>';
 echo '<td>' . $user['surname'] . '</td>';
 echo '<td>' . $user['birthday'] . '</td>';
 echo '</tr>';
}
echo '</table>';


?>