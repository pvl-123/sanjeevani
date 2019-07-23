<?php
// Start the session
session_start();
$id = $_SESSION["id"] //Session variable id retrieved
?>

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
          
        <h1>Your Personal Details</h1>
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
       
                <td><button class="button0" name="edit" onclick="window.location.href=''">
                    Edit Your Details
                </button></td>
                <td><button class="button1" name="delete"onclick="window.location.href=''" >
                Delete Your Account
                </button></td>
            
            
        </table>
        </fieldset>
           </div>
    
    </body>
        <!-- Modal -->
       


</html>