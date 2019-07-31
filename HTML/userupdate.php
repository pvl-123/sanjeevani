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

$Full_name=$_POST['Full_name'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$Current_Medication=$_POST['Current_Medication'];
$Address_1=$_POST['Address_1'];
$Address_2=$_POST['Address_2'];




//UPDATE existing record in the teachers table in the database
$sql = "UPDATE `reg` SET `Full_name`='$Full_name',`dob`='$dob',`email`='$email',`Current_Medication`='$Current_Medication',`Address_1`='$Address_1',
`Address_2`='$Address_2' WHERE `id`=$id";
if ($conn->query($sql) == TRUE) {
    echo "Details updated.";
header("Location: user.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
