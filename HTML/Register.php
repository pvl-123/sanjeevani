<?php

include('config.php');


session_start();

if (isset($_POST['submit'])) {

    $Full_name = $_POST['Full_name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $_SESSION['email'] = $email;
    $Current_Medication = $_POST['Current_Medication'];
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
        $query = $connection->prepare("INSERT INTO reg(Full_name,dob,gender,email, Current_Medication,Address_1,Address_2,password,password1) VALUES (:Full_name,:dob,:gender,:email,:Current_Medication,:Address_1,:Address_2,:password_hash,:password_hash)");
        $query->bindParam("Full_name", $Full_name, PDO::PARAM_STR);
        $query->bindParam("dob", $dob, PDO::PARAM_STR);
        $query->bindParam("gender", $gender, PDO::PARAM_STR);
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $query->bindParam("Current_Medication", $Current_Medication, PDO::PARAM_STR);
        $query->bindParam("Address_1", $Address_1, PDO::PARAM_STR);
        $query->bindParam("Address_2", $Address_2, PDO::PARAM_STR);
        $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
        $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);

        $result = $query->execute();

        if ($result) {
            // echo '<p class="success">Your registration was successful!</p>';
            header("location:log.php");
        } else {
            echo '<p class="error">Something went wrong!</p>';
        }
    }
}
