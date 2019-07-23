<?php
session_start();

$url = 'localhost';
$username = 'root';
$password = '';
$conn = mysqli_connect($url, $username, $password, "patient");
if (!$conn) {
    die('Could not Connect My Sql:' . mysql_error());
}
$result = mysqli_query($conn, "SELECT * FROM doctor,spec ,city  WHERE 
spec.spec_id = doctor.spec_id  AND doctor.doc_city= city.doc_city");
?>
<!DOCTYPE html>
<html>
<body background="img\f6.png">
<center>
    <h1 style="color:white;"><i>SANJEEVANI CLINIC</i></h1>
</center>
<form method="POST" action="from.php">
    <h3>Available Doctors</h3>

   <!-- <div class="form-group">
            <button type="submit" name="login" class="btn btn-success btn-block login-btn">Request for Appoinment</button>
        </div>-->


    <title>doctor data </title>
    <link rel="stylesheet" href="css\register.css">


<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="C:\new\css\style.css">
    <script src="C:\new\js\form.js"> </script>

    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://kendo.cdn.telerik.com/2019.2.619/styles/kendo.common-material.min.css" />
<link rel="stylesheet" href="https://kendo.cdn.telerik.com/2019.2.619/styles/kendo.material.min.css" />
<link rel="stylesheet" href="https://kendo.cdn.telerik.com/2019.2.619/styles/kendo.material.mobile.min.css" />

<script src="https://kendo.cdn.telerik.com/2019.2.619/js/jquery.min.js"></script>
<script src="https://kendo.cdn.telerik.com/2019.2.619/js/kendo.all.min.js"></script>






    <?php
    if (mysqli_num_rows($result) > 0) {
        ?>
        <br><br><br>
        <table width="400" border="2" cellpadding="2" cellspacing='1' id="mytable">
            <tr bgcolor="#2ECCFA">

                <td>doc_id</td>
                <td>spec_name</td>
                <td>doc_city</td>
                <td>patient_experience</td>
                <td>Action</td>

            </tr>
            <?php
            if (isset($_POST['search'])) {
                $i = 0;
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row["id"] ?></td>
                        <td><?php echo $row["Spec_name"] ?></td>
                        <td><?php echo $row["doc_city"] ?></td>
                        <td><?php echo $row["patient_experience"] ?></td>

                        <td> <a href="form1.html">Request for Appointment
                    </tr>

                    <?php
                    $i++;
                }
            }
            ?>
        </table>
    <?php
    } else {
        echo "No result found";
        header('location:form1.php');
        
    }
    ?>
</body>

</html>