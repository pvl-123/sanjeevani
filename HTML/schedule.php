<head>
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
</head>


<div class="w3-top">
    <div class="w3-bar w3-theme-d2 w3-left-align">
        <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
        <a href="record.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="UserRecord"><i class="fa fa-user"></i></a>
        <a href="form1.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Appoinment</a>
        <a href="user.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Patient Record</a>
    </div>
</div>
<br><br>

<?php
session_start();

$url = 'localhost';
$username = 'root';
$password = '';
$conn = mysqli_connect($url, $username, $password, "patient");
if (!$conn) {
    die('Could not Connect My Sql:' . mysql_error());
}
$result = mysqli_query($conn, "SELECT d.spec_id,d.doc_city,d.doc_name,d.patient_experience,s.Spec_name FROM doctor d, city c, spec s
WHERE d.doc_city = c.doc_city AND c.doc_city='pune' AND d.spec_id= s.spec_id AND d.spec_id=1");
?>

<!DOCTYPE html>
<html>

<body background="img\f6.png">
    <center>
        <h1 style="color:black"><i>SANJEEVANI CLINIC</i></h1>

        <form method="POST" action="form.php">
            <h3>Available Doctors</h3>
            <title>doctor data </title>
            <?php
            if (mysqli_num_rows($result) > 0) {
                ?>
                <br><br><br>
                <table width="400" border="2" cellpadding="2" cellspacing='1' id="mytable">
                    <tr bgcolor="#2ECCFA">
                        <td><b>Spec_Id</b></td>
                        <td><b>Spec_Name</b></td>
                        <td><b>Doc_City</b></td>
                        <td><b>Patient_Experience</b></td>
                        <td><b>Doc_Name</b></td>
                        <td><b>Action</b></td>
                    </tr>
                    <?php
                    if (isset($_POST['search'])) {
                        $i = 0;
                        while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <tr>
                                <td> <?php echo $row["spec_id"] ?></td>
                                <td><?php echo $row["Spec_name"] ?></td>
                                <td><?php echo $row["doc_city"] ?></td>
                                <td><?php echo $row["patient_experience"] ?></td>
                                <td> <?php echo $row["doc_name"] ?></td>
                                <td> <a href="form1.php"><b>Request for Appointment</b>
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
                header('location:form.php');
            }
            ?>
        </form>
    </center>
</body>



</html>