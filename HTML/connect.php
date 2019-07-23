<?php
 
include('config.php');
session_start();
 
if (isset($_POST['login'])) {
 
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
}
 
?>