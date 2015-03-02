<?php

header('Content-Type: application/json');

mysql_connect('localhost', 'root', '') or die (mysql_error());

mysql_select_db('taskm');

$select = mysql_query('SELECT * FROM `tasks`');

$rows = array();

while ($row = mysql_fetch_array($select)) {
	$rows[]  = array('id' => $row['task']);
}

echo json_encode($rows);

?>