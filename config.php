<?php
$db = parse_ini_file("myphp.ini");

/*
print_r($db);
echo '<br>';*/

$user = $db['DB_USERNAME'];
$pass = $db['DB_PASSWORD'];
$name = $db['DB_DATABASE'];
$host = $db['DB_HOST'];
$conn =mysqli_connect($host, $user, $pass ,$name);

//check connections
if(!$conn){
  echo 'connections error' . mysqli_connect_error();
}else{
	//echo 'connectios successful';
}
?>