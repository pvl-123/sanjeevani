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
    <link rel="stylesheet" href="css\from.css" />
    <link rel="stylesheet" href="css\user.css">
</head>


<div class="w3-top">
    <div class="w3-bar w3-theme-d2 w3-left-align">
        <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
        <a href="Madmin.html" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title=""><i class="fa fa-user">Admin Login</i></a>
        <a href="form1.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Appoinment</a>

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
$result = mysqli_query($conn, "SELECT p.status,r.Full_name,r.gender,r.dob,r.email,r.Current_Medication,r.Address_1,r.Address_2,p.id,p.app_date,
p.time_slot FROM reg r JOIN pat_app p ON ( p.regID=r.id )ORDER BY r.id DESC limit 1;");
//$result = $query->execute();

?>

<!DOCTYPE html>
<html>
<div id="myDIV">

    <body background="img\h2.jpeg">
        <center>
            <h1 style="color:black"><i><b>SANJEEVANI CLINIC</b></i></h1>

            <u>
                <h3>Your Appointment Details</h3>
            </u>
            <title>doctor data </title>
            <?php
            if (mysqli_num_rows($result) > 0) {
                ?>
                <br>

                <table width="400" border="2" cellpadding="2" cellspacing='1' id="mytable">
                    <tr bgcolor="white">

                        <td><b>Full_Name</b></td>
                        <td><b>Gender</b></td>
                        <td><b>DOB</b></td>
                        <td><b>E-mail</b></td>
                        <td><b>Current_Medication</b></td>
                        <td><b>Address_1</b></td>
                        <td><b>Address_2</b></td>
                        <td><b>App_id</b></td>
                        <td><b>App_Date</b></td>
                        <td><b>Time_Slot</b></td>
                        <td><b>Status</b></td></b>


                    </tr>
                    <?php
                    $i = 0;
                    while ($row = mysqli_fetch_array($result)) {
                        ?>


                        <tr>
                            <td> <?php echo $row["Full_name"] ?></td>
                            <td><?php echo $row["gender"] ?></td>
                            <td><?php echo $row["dob"] ?></td>
                            <td><?php echo $row["email"] ?></td>
                            <td> <?php echo $row["Current_Medication"] ?></td>
                            <td> <?php echo $row["Address_1"] ?></td>
                            <td> <?php echo $row["Address_2"] ?></td>
                            <td> <?php echo $row["id"] ?></td>
                            <td> <?php echo $row["app_date"] ?></td>
                            <td> <?php echo $row["time_slot"] ?></td>
                            <td><b><u> <?php echo $row["status"] ?><u></b></td>

                        </tr>

                        <?php
                        $i++;
                    }
                }
                ?>

            </table>
</div>


</center>
</body>



</html>