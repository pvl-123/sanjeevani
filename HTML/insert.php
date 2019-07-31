<?php
// Start the session
session_start();
//$id = $_SESSION["id"]; //Session variable id retrieved
$app_date = $_SESSION["app_date"];
echo $app_date;
echo "<br>";

//Establish a connection with the DB
$host = "localhost";
$user = "root";
$password = "";
$dbname = "patient";
$conn = new mysqli($host, $user, $password, $dbname);

//$sql = "SELECT * FROM `pat_app` WHERE app_date='$app_date';";
//$result = $conn->query($sql);
//if ($result->num_rows > 0) {
//    while ($row = $result->fetch_assoc()) {
//        $pid = $row['id'];
//        echo $pid;
//    }
//} else {
//    echo "Unregistered user. Sign Up first.";
//}

$c = 0;
$d = 0;
$c = $_GET['c'];
$d = $_GET['d'];

if ($c == 1) {
    $sql = "UPDATE `pat_app` SET `status`='Confirmed' WHERE app_date='$app_date';";
    if ($conn->query($sql) == TRUE) {
        echo "Status updated: Confirmed.";
       header("Location: doc app.php");
    }
}
if ($d == 1) {
    $sql = "UPDATE `pat_app` SET `status`='Declined' WHERE app_date='$app_date';";
    if ($conn->query($sql) == TRUE) {
        echo "Status updated: Declined.";
        header("Location: doc app.php");
    }
}
$conn->close();

?>

<html>

</html>