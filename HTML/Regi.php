<?php
 
include('config.php');


session_start();
 
if (isset($_POST['register'])) {
 
    $username = $_POST['username'];
    $Email_id = $_POST['Email-id'];
    $Age = $_POST['Age'];
    $Mobile_Number = $_POST['Mobile_Number'];
    $DOB = $_POST['DOB'];
    $Gender = $_POST['Gender'];
    $Address = $_POST['Address'];
    $Marital_status = $_POST['Marital_Status'];
    $Current_Medications = $_POST['Current_Medications'];
    $If_yes_please_list_here = $_POST['List_Here'];
    $password = $_POST['Password'];
    $c_password = $_POST['Password1'];
    $password_hash = password_hash($password, PASSWORD_BCRYPT);
 
    $query = $connection->prepare("SELECT * FROM users1 WHERE Email_id=:Email_id");
    $query->bindParam("Email_id", $Email_id, PDO::PARAM_STR);
    $query->execute();
 
    if ($query->rowCount() > 0) {
        echo '<p class="error">The email address is already registered!</p>';
    }
    
    if ($query->rowCount() == 0) {

        $query = $connection->prepare("INSERT INTO users1(username,Email-id,age,Mobile Number,dob,Gender,Address,Marital Status,current medication
        List_Here,password,password1) VALUES (:username,:Email-id,:Age,:Mobile_Number,:DOB,:Gender,:Address,:Marital_Status,
        :Current_Medications,:List_Here,:Password_hash,:password_hash)");
        $query->bindParam("username", $username, PDO::PARAM_STR);
        $query->bindParam("Email_id", $Email_id, PDO::PARAM_STR);
        $query->bindParam("Age", $Age, PDO::PARAM_STR);
        $query->bindParam("Mobile_Number", $Mobile_Number, PDO::PARAM_STR);
        $query->bindParam("DOB", $DOB, PDO::PARAM_STR);
        $query->bindParam("Gender", $Gender, PDO::PARAM_STR);
        $query->bindParam("Address", $Address, PDO::PARAM_STR);
        $query->bindParam("Marital_Status", $Marital_Status, PDO::PARAM_STR);
        $query->bindParam("Current_Medications", $Current_Medications, PDO::PARAM_STR);
        $query->bindParam("List_Here ", $If_yes_please_list_here , PDO::PARAM_STR);
        $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
        $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
       
        $result = $query->execute();
 
        if ($result) {
            echo '<p class="success">Your registration was successful!</p>';
           //header("location:login.html"); 
        } else {
            echo '<p class="error">Something went wrong!</p>';
        }
    }
}
?>