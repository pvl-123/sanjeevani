<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css">
    <script src="js\form.js"> </script>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!--search location-->
    <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2019.2.619/styles/kendo.common-material.min.css" />
    <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2019.2.619/styles/kendo.material.min.css" />
    <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2019.2.619/styles/kendo.material.mobile.min.css" />

    <script src="https://kendo.cdn.telerik.com/2019.2.619/js/jquery.min.js"></script>
    <script src="https://kendo.cdn.telerik.com/2019.2.619/js/kendo.all.min.js"></script>

    <!--navbar-->

<body background="img\f6.png">
    <center>
        <div class="w3-top">
            <div class="w3-bar w3-theme-d2 w3-left-align">
                <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>

                <!--<div class="w3-dropdown-hover w3-hide-small">
                <button class="w3-button" title="Notifications">Login<i class="fa fa-caret-down"></i></button>
                <div class="w3-dropdown-content w3-card-4 w3-bar-block">
                    <a href="Madmin.html" class="w3-bar-item w3-button">Admin</a>
                </div>
            </div>-->

                <a href="record.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="UserRecord"><i class="fa fa-user"></i></a>

                <a href="docapp.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Appoinment</a>

                <a href="record.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Patient Details</a>
            </div>
        </div>

        <fieldset>


            <div class="container">

                <table style="text-align:center">
                    <br><br><br>

                    <?php

                    session_start();
                    $servername = 'localhost';
                    $username = 'root';
                    $password = '';
                    $dbname = "patient";
                    $conn = mysqli_connect($servername, $username, $password, "$dbname");
                    if (!$conn) {
                        die('Could not Connect My Sql:' . mysql_error());
                    }

                    if (isset($_POST['submit'])) {

                        $date  = $_POST['Full_name'];
                        $dob = $_POST['dob'];
                        $gender = $_POST['gender'];
                        $email = $_POST['email'];
                        $Current_Medication = $_POST['Current_Medication'];
                        $Address_1 = $_POST['Address_1'];
                        $Address_2  = $_POST['Address_2'];
                        

                        $sql = "INSERT INTO pat_app (Full_name,dob,gender,email,Current_Medication,Address_1,Address_2) 
	 VALUES ('$Full_name', '$dob', '$gender','$email','$Current_Medication','$Address_1','$Address_2')";
                        if (mysqli_query($conn, $sql)) {
                            echo "New patient record !<br><br>";
                            $result = mysqli_query($conn, "SELECT * FROM pat_app limit 1");
                            while ($row = mysqli_fetch_array($result)) {

                                echo "<tr><td>Full_name:</td><td>";
                                echo $row["Full_name"];
                                echo "<br><tr><td>DOB:</td><td>";
                                echo $row["dob"];
                                echo "<br><tr><td>Gender:</td><td>";
                                echo $row["gender"];
                                echo "<br><tr><td>Email:</td><td>";
                                echo $row["email"];
                                echo "<br><tr><td>Current_Medication:</td><td>";
                                echo $row["Current_Medication"];
                                echo "<br><tr><td>Address_1:</td><td>";
                                echo $row["Address_1"];
                                echo "<br><tr><td>Address_2:</td><td>";
                                echo $row["Address_2"];
                            }
                        } else {
                            echo "Error: " . $sql . "" . mysqli_error($conn);
                        }
                        mysqli_close($conn);
                    }



                    ?>
    </center>


    <!-- Modal -->
    </table>
    </div>
</body>
</fieldset>

</html>