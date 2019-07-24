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




<?php
session_start();

$url = 'localhost';
$username = 'root';
$password = '';
$conn = mysqli_connect($url, $username, $password, "patient");
if (!$conn) {
    die('Could not Connect My Sql:' . mysql_error());
}
$result = mysqli_query($conn, "SELECT d.spec_id,d.doc_city,d.patient_experience,s.Spec_name FROM doctor d, city c, spec s
WHERE d.doc_city = c.doc_city AND c.doc_city='pune' AND d.spec_id= s.spec_id AND d.spec_id=1");
?>

<!DOCTYPE html>
<html>


<body background="img\f6.png">
    <center>
        <h1 style="color:white;"><i>SANJEEVANI CLINIC</i></h1>
    </center>
    <form method="POST" action="from.php">
        <h3>Available Doctors</h3>
        <title>doctor data </title>
        <?php
        if (mysqli_num_rows($result) > 0) {
            ?>
            <br><br><br>
            <table width="400" border="2" cellpadding="2" cellspacing='1' id="mytable">
                <tr bgcolor="#2ECCFA">

                    <td>spec_id</td>
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
                            <td> <?php echo $row["spec_id"] ?></td>
                        </tr>
                        <tr>
                            <td><?php echo $row["Spec_name"] ?></td>
                        </tr>
                        <tr>
                            <td><?php echo $row["doc_city"] ?></td>
                        </tr>
                        <tr>
                            <td><?php echo $row["patient_experience"] ?></td>
                        </tr>
                        <td> <a href="form1.html">Request for Appointment


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
    </form>

</body>



</html>