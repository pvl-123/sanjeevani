<?php

// Start the session
session_start();
//Establish a connection with the DB
$host = "localhost";
$user = "root";
$password = "";
$dbname = "events";
$conn = new mysqli($host, $user, $password, $dbname);

$username = $_POST["username"];

$sql = "SELECT id FROM users1 WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $_SESSION["id"] = $row["id"];  //Session variable id set, to be used across all pages
        header("location:mdetails.php"); 
    }
} else {
    echo "Unregistered.";
}


/*if (isset($_POST['login'])) {
 
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    $query = "SELECT * FROM users1 WHERE username=:username";
    $result=mysqli_query($conn,$query);
   
 
    if (!$result) {
        echo '<p class="error">Username password combination is wrong!</p>';
    } else {
        if (password_verify($password, $result['password'])) {
            $_SESSION['user_id'] = $result['ID'];
           // echo '<p class="success">Congratulations, you are logged in!</p>';
           header("location:mdetails.php"); 
        } else {
            
            echo '<p class="error">Username password combination is wrong!</p>';
        }
    }
}*/
 
?>