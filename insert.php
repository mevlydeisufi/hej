<?php
$mysqli = new mysqli("mysql.hostinger.se", "u123447644_admin", "projectx", "u123447644_graph");
if ($mysqli === false){
    die("Can not connect" . mysqli_connect_error());
}
$first_name = mysqli_real_escape_string($mysqli, $_REQUEST['field1']);
$last_name = mysqli_real_escape_string($mysqli, $_REQUEST['field2']);
$email = mysqli_real_escape_string($mysqli, $_REQUEST['field3']);

$sql = "INSERT INTO persons (first_name, last,name, email) VALUES('$first_name','$last_name', '$email')";
if(mysqli_query($mysqli, $sql)){
    echo "Worked";
} else {
    echo "Could not add" . mysqli_error($mysqli);
}
mysqli_close($mysqli);