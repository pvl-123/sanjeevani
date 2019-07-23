<?php
 
include('config.php');


session_start();
 
if (isset($_POST['submit'])) {
 
    $First_name = $_POST['First_name'];
    $Last_name = $_POST['Last_name'];
    $email = $_POST['email'];
    $Address_1 = $_POST['Address_1'];
    $Address_2 = $_POST['Address_2'];
    $password = $_POST['password'];
    $password1 = $_POST['password1'];
    $password_hash = password_hash($password, PASSWORD_BCRYPT);
 
    $query = $connection->prepare("SELECT * FROM reg WHERE email=:email");
    $query->bindParam("email", $email, PDO::PARAM_STR);
    $query->execute();
 
    if ($query->rowCount() > 0) {
        echo '<p class="error">The email address is already registered!</p>';
    }
    
    if ($query->rowCount() == 0) {
        $query = $connection->prepare("INSERT INTO reg(First_name,Last_name,email,Address_1,Address_2,password,password1) VALUES (:First_name,:Last_name,:email,:Address_1,:Address_2,:password_hash,:password_hash)");
        $query->bindParam("First_name", $First_name, PDO::PARAM_STR);
        $query->bindParam("Last_name", $Last_name, PDO::PARAM_STR);
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $query->bindParam("Address_1", $Address_1, PDO::PARAM_STR);
        $query->bindParam("Address_2", $Address_2, PDO::PARAM_STR);
        $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
        $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
       
        $result = $query->execute();
 
        if ($result) {
           // echo '<p class="success">Your registration was successful!</p>';
           header("location:log.html"); 
        } else {
            echo '<p class="error">Something went wrong!</p>';
        }
    }
}
?>