<?php
 
//include('config.php');
// Start the session
session_start();
//Establish a connection with the DB
$host = "localhost";
$user = "root";
$password = "";
$dbname = "patient";
$conn = new mysqli($host, $user, $password, $dbname);

$email = $_POST["email"];


$sql = "SELECT id FROM reg WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $_SESSION["id"] = $row["id"];  //Session variable id set, to be used across all pages
        header("location:from.html"); 
    }
} else {
    echo "Unregistered.";
}
 
/*if (isset($_POST['login'])) {
 
    $email = $_POST['email'];
    $password = $_POST['password'];
 
    $query = $connection->prepare("SELECT * FROM reg WHERE email=:email");
    $query->bindParam("email", $email, PDO::PARAM_STR);
    $query->execute();
 
    $result = $query->fetch(PDO::FETCH_ASSOC);
 
    if (!$result) {
        echo '<p class="error">email password combination is wrong!</p>';
    } else {
        if (password_verify($password, $result['password'])) {
            $_SESSION['user_id'] = $result['ID'];
           // echo '<p class="success">Congratulations, you are logged in!</p>';
           header("location:from.html"); 
        } else {
            
            echo '<p class="error">Username password combination is wrong!</p>';
        }
    }
}*/
 
?>