<?php

include('config.php');

session_start();
$email = $_SESSION['email'];

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = "patient";
$conn = mysqli_connect($servername, $username, $password, "$dbname");
if (!$conn) {
    die('Could not Connect My Sql:' . mysql_error());
}
$sql = "SELECT id from reg where email='$email';";
if (mysqli_query($conn, $sql)) {
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $_SESSION['id'] = $row['id']; //session var set
        $id = $_SESSION['id'];
    }
} else {
    echo "Error: " . $sql . "" . mysqli_error($conn);
}
mysqli_close($conn);



if (isset($_POST['submit'])) {
    $_SESSION['app_date'] = $_POST['app_date'];
    $app_date = $_POST['app_date'];
    $time_slot = $_POST['time_slot'];
    $p = 'Pending';




    $query = $connection->prepare("INSERT INTO pat_app(app_date,time_slot,regID,status) VALUES (:app_date,:time_slot,:id,:p)");
    $query->bindParam("app_date", $app_date, PDO::PARAM_STR);
    $query->bindParam("time_slot", $time_slot, PDO::PARAM_STR);
    $query->bindParam("id", $id, PDO::PARAM_STR);
    $query->bindParam("p", $p, PDO::PARAM_STR);




    $result = $query->execute();

    if ($result) {
        // echo '<p class="success">Your registration was successful!</p>';
        header("location:doc detail app.php");
    } else {
        echo '<p class="error">Something went wrong!</p>';
    }
}
