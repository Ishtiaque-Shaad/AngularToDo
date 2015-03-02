<?php
//encode
$mobiles = array('Samsung', 'Apple', 'Nokia', 'Sony', 'LG');
//$jsonMobiles = json_encode($mobiles);
//echo $jsonMobiles;

//echo(" : ......new line ....... :");
//decode
//$phpMobiles = json_decode($jsonMobiles);
//print_r($phpMobiles);

//Saving JSON data into a file

//$mobiles = array('Samsung', 'Apple', 'Nokia', 'Sony', 'LG');
$jsonMobiles = json_encode($mobiles);
file_put_contents('config.json', $jsonMobiles);

//Reading JSON data from a file

$fileName = 'config.json';
$data = file_get_contents($fileName);
$phpMobiles = json_decode($data);
print_r($phpMobiles);

?>