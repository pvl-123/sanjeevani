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

            <a href="from.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Appoinment</a>

            <a href="record.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Patient Details</a>
        </div>
    </div>

    <br><br><br>
    <?php
    // Start the session
    session_start();
    $id = $_SESSION["id"] //Session variable id retrieved
    ?>
    <center>

        <body>

            <div class="container">

                <?php
                //Establish a connection with the DB
                $host = "localhost";
                $user = "root";
                $password = "";
                $dbname = "patient";
                $conn = new mysqli($host, $user, $password, $dbname);
                ?>
                <!-- Have to collect this data from Teacher Database -->

                <fieldset>
                    <table style="text-align:center">

                        <h1>Patient Personal Details</h1>

                        <?php
                        $sql = "SELECT First_name,Last_name, email, Address_1, Address_2 FROM reg WHERE id=$id";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr><td>First_name:</td><td>";
                                echo $row["First_name"];
                                echo "<tr><td>Last_name:</td><td>";
                                echo $row["Last_name"];
                                echo "<tr><td>Email-id:</td><td>";
                                echo $row["email"];
                                echo "<tr><td>Address_1:</td><td>";
                                echo $row["Address_1"];
                                echo "<tr><td>Address_2:</td><td>";
                                echo $row["Address_2"];
                            }
                        } else {
                            echo "Unregistered user. Sign Up first.";
                        }
                        ?>

                        <tr>

                            <td><button class="button0" name="edit" onclick="window.location.href='userdetail.php'">
                                    Edit Your Details
                                </button></td>
                            <td><button class="button1" name="delete" onclick="window.location.href='Userdelete.php'">
                                    Delete Your Account
                                </button></td>
            </div>

            </table>

            </fieldset>


        </body>
    </center>
    <!-- Modal -->



</html>