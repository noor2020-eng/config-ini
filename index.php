<?php
include('config.php');
$sql = 'SELECT * FROM fations';

// make query & get result
$result = mysqli_query($conn, $sql);

//fetch the result row as an array
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

//free result from memory
mysqli_free_result($result);

//close connections
mysqli_close($conn);



print_r($users);
?>