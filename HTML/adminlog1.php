<?php
include('config.php');
session_start();


if(isset($_POST['login'])) {

$username = $_POST['username'];
$password = $_POST['password'];

if(empty($username) || empty($password)) {
$message = 'All field are required';
} else {
$query = $connection->prepare("SELECT username, password FROM admin WHERE 
username=? AND password=? ");
$query->execute(array($username,$password));
$row = $query->fetch(PDO::FETCH_BOTH);

if($query->rowCount() > 0) {
  $_SESSION['username'] = $username;
  header('location:app.html');
} else {
  echo '<p class="error">Username password combination is wrong!</p>';
       
}


}

}
?>