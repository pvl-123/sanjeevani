<?php
 
include('config.php');


session_start();
 
if (isset($_POST['submit'])) {
 
    $app_date = $_POST['app_date'];
    $time_slot = $_POST['time_slot'];
   
 
    $query = $connection->prepare("SELECT * FROM pat_app WHERE email=:email");
    $query->bindParam("email", $email, PDO::PARAM_STR);
    $query->execute();
 
    if ($query->rowCount() > 0) {
        echo '<p class="error">The email address is already registered!</p>';
    }
    
    if ($query->rowCount() == 0) {
        $query = $connection->prepare("INSERT INTO pat_app(app_date,time_slot) VALUES (:app_date,:time_slot)");
        $query->bindParam("app_date", $app_date, PDO::PARAM_STR);
        $query->bindParam("time_slot", $time_slot, PDO::PARAM_STR);
     
       
        $result = $query->execute();
 
        if ($result) {
           // echo '<p class="success">Your registration was successful!</p>';
           header("location:doc detail app.php"); 
        } else {
            echo '<p class="error">Something went wrong!</p>';
        }
    }
}
