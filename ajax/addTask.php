<?php 
require_once '../includes/db.php'; // The mysql database connection script

if(isset($_GET['task'])) {

	$task = $_GET['task'];


	$query="INSERT INTO tasks(task,status,created_at)  VALUES ('$task', '$status', '$created')";
	
	$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

	$result = $mysqli->affected_rows;
}

$jsonData =  json_encode($rows);

echo $jsonData;

//saving in file

file_put_contents('../test/config.json', $jsonData);

?>