<?php
$servername = "localhost";
$username = "root";
$passwword = "";
$database = "students_data";
$conn = mysqli_connect($servername,$username,$passwword,$database);
if (!$conn) {
    die("connection failed:" . mysqli_connect_error());
    
}
?>