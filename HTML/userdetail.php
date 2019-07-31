<?php
// Start the session
session_start();
$id = $_SESSION["id"] //Session variable id retrieved
?>

<!DOCTYPE html>
<html>

<head>
    <title>User detail</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body background="img\f6.png">

    <div class="w3-top">
        <div class="w3-bar w3-theme-d2 w3-left-align">
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
            <a href="record.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="UserRecord"><i class="fa fa-user"></i></a>

            <a href="from.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Appoinment</a>
            <a href="user.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Patient Record</a>
        </div>
    </div>
    <br><br>
   <center> <form action="userupdate.php" method="POST">

        <fieldset style="width:60%">

            <legend>
                <h2>User Detail</h2>
            </legend>
            <table text-align="center">

                <tr>
                    <td class="f1_label"> Full_name:<br>
                    </td>
                    <td><input type="text" name="Full_name"></td>
                </tr>
                <tr>
                    <td class="f1_label"> DOB:<br></td>
                    <td><input type="date" name="dob"></td><br>
                </tr>
                
                <tr>
                    <td class="f1_label"> email:</td>
                    <td><input type="email" name="email"></td><br>
                </tr>
                
                <tr>
                    <td class="f1_label"> Current_Medication:</td>
                    <td><input type="medi" name="Current_Medication"></td><br>
                </tr>
                <tr>
                    <td class="f1_label">Address_1:</td>
                    <td><input type="text" name="Address_1"><br></td>
                </tr>
                <tr>
                    <td class="f1_label"> Address_2:</td>
                    <td><input type="text" name="Address_2"><br></td>

                </tr>
        </fieldset>

        </table>
        <button type="submit" class="btn btn-default btn-lg" name="submit">submit</button>
    </form>
    </center>
</body>

</html>