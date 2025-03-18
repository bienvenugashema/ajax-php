<?php
//data base connection

$conn = mysqli_connect("localhost","root","","ajax");



//post operatir with ajax
if(isset($_POST['name'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $query = "insert into users(name) values('$name')";

    if(mysqli_query($conn, $query)){
        echo "User Added";
} else {
    echo "ERROR: ".mysqli_error($conn);
}
}

//get operatir with ajax
if(isset($_GET['name'])){
    echo "Hello " . $_GET['name'];
}
?>