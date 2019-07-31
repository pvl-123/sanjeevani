<?php
// Start the session
session_start();
$id = $_SESSION["id"]; //Session variable id retrieved
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="C:\new\css\style.css">
    <script src="C:\new\js\form.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet " href="css\home.css">
    <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2019.2.619/styles/kendo.common-material.min.css" />
    <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2019.2.619/styles/kendo.material.min.css" />
    <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2019.2.619/styles/kendo.material.mobile.min.css" />

    <script src="https://kendo.cdn.telerik.com/2019.2.619/js/jquery.min.js"></script>
    <script src="https://kendo.cdn.telerik.com/2019.2.619/js/kendo.all.min.js"></script>
    <script src="javascript\home.js"></script>
    <!--search location-->
    <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2019.2.619/styles/kendo.common-material.min.css" />
    <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2019.2.619/styles/kendo.material.min.css" />
    <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2019.2.619/styles/kendo.material.mobile.min.css" />

    <!--date picker-->
    <link rel="stylesheet" href="styles/kendo.common.min.css" />
    <link rel="stylesheet" href="styles/kendo.default.min.css" />
    <link rel="stylesheet" href="styles/kendo.default.mobile.min.css" />

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="C:\xampp\htdocs\new\HTML\css\from.css">

    <link rel="stylesheet" href="styles/kendo.common.min.css" />
    <link rel="stylesheet" href="styles/kendo.default.min.css" />
    <link rel="stylesheet" href="styles/kendo.default.mobile.min.css" />
    <link rel="stylesheet" href="css\from.css" />

    <script src="js/jquery.min.js"></script>
    <script src="js/kendo.all.min.js"></script>
    <script src="C:\xampp\htdocs\new\HTML\js\form.js"></script>
    <script src="https://kendo.cdn.telerik.com/2019.2.619/js/jquery.min.js"></script>
    <script src="https://kendo.cdn.telerik.com/2019.2.619/js/kendo.all.min.js"></script>
    <script src="js\log.js"></script>
</head>
<br>
<center>
    <form action="pat detail.php" method="POST">

        <body background="img\h2.jpeg">
            <div class="w3-top">
                <div class="w3-bar w3-theme-d2 w3-left-align">
                    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
                    <a href="record.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="UserRecord"><i class="fa fa-user"></i></a>
                    <a href="from.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Appoinment</a>
                    <a href="user.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Patient Record</a>
                </div>
            </div>

            <h1 style="color:white;"><i>SANJEEVANI CLINIC</i></h1>
            <h3><b>Request For Appointment</b></h3>
            <div id="myDIV">
                <div id="example">
                    <div class="demo-section k-content">
                        <h2>Patients Appoinment Details</h2>
                        <hr>
                        <div class="demo-section k-content">
                            <h4>Enter Date:</h4>
                            <input id="datepicker" value="10/10/2011" title="datepicker" style="width: 50%" />
                        </div><br>
                        <div class="demo-section k-content">
                            <label for="countries" style="width: 100px; "><b>Time slots:</b>
                                <input id="countries" name="time_slot" /></label>
                            <div class="demo-hint"></div>
                        </div><br>

                        <button type="submit" class="btn btn-default btn-lg" name="submit">submit</button>
                        <button type="submit" class="btn btn-default btn-lg" name="submit">cancel</button>
                    </div>
                </div>


    </form>

    </body>
</center>

</html>