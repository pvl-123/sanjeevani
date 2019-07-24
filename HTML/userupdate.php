<?php
// Start the session
session_start();
$id = $_SESSION["id"]; //Session variable Teacher_ID retrieved
//Establish a connection with the DB
$host = "localhost";
$user = "root";
$password = "";
$dbname = "patient";
$conn = new mysqli($host, $user, $password, $dbname);
//Retrieve data from previous signup page

$First_name=$_POST['First_name'];
$Last_name=$_POST['Last_name'];
$email=$_POST['email'];
$Address_1=$_POST['Address_1'];
$Address_2=$_POST['Address_2'];




//UPDATE existing record in the teachers table in the database
$sql = "UPDATE `reg` SET `First_name`='$First_name',`Last_name`='$Last_name',`email`='$email',`Address_1`='$Address_1',
`Address_2`='$Address_2' WHERE `id`=$id";
if ($conn->query($sql) == TRUE) {
    echo "Details updated.";
header("Location: from.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>