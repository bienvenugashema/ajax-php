<?php
//data base connection

$conn = mysqli_connect("localhost","root","","ajax");

$query = "select * from users";
//get result
$result = mysqli_query($conn, $query);

//fetch data

$data = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($data);

?>