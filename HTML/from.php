<?php
 
include('config.php');


session_start();
 
if (isset($_POST['search'])) {
 
    $doc_ID = $_POST['Specialities_name'];
    $doc_Name = $_POST['doc_city'];
    
 
    $query = $connection->prepare("SELECT Specialities_name, doc_city, FROM doctor INNER JOIN  spec ON spec.Specialities_Id = doctor.Specialities_Id;");
    $query->bindParam("email", $email, PDO::PARAM_STR);
    $query->execute();
 
    if ($query->rowCount() > 0) {
        echo '<p class="error">The email address is already registered!</p>';
    }
    
    if ($query->rowCount() == 0) {
        $query = $connection->prepare("INSERT INTO users2(Search_Specialities,Choose_city,Date) VALUES (:Search_Specialities,:Choose_city,:Date)");
        $query->bindParam("Search_Specialities", $Search_Specialities, PDO::PARAM_STR);
        $query->bindParam("Choose_city", $Choose_city, PDO::PARAM_STR);
        $query->bindParam("Date", $Date, PDO::PARAM_STR);
        
       
        $result = $query->execute();
 
        if ($result) {
           // echo '<p class="success">Your registration was successful!</p>';
          // header("location:from.html"); 
        } else {
            echo '<p class="error">Something went wrong!</p>';
        }
    }
}
?>