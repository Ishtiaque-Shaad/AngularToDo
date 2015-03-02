<?php

header('Content-Type: application/json');

mysql_connect('localhost', 'root', '') or die (mysql_error());

mysql_select_db('taskm');

$select = mysql_query('SELECT * FROM `tasks`');

$rows = array();

while ($row = mysql_fetch_array($select)) {
	$rows[]  = array('id' => $row['task']);
}



$jsonData =  json_encode($rows);



//echo $jsonData;

//$query="INSERT INTO json(jsondata)  VALUES ('$jsondata')";

//$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

//$result = $mysqli->affected_rows;


//echo json_encode($jsonData);


//Saving JSON data into a file

$mobiles = array('$jsonData');
file_put_contents('config.json', $mobiles);

//Reading JSON data from a file

//$fileName = 'config.json';
//$data = file_get_contents($fileName);
//$phpMobiles = json_decode($data);
//print_r($phpMobiles);



?>