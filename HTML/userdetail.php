<?php
// Start the session
session_start();
$id = $_SESSION["id"] //Session variable id retrieved
?>

<!DOCTYPE html>
<html>
<title>User detail</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<form action="user.php" method="POST">

    <fieldset style="width:60%">

        <legend>
            <h2>User Detail</h2>
        </legend>
        <table text-align="center">

            <tr>
                <td class="f1_label"> First_name:<br>
                </td>
                <td><input type="text" name="First_name"></td>
            </tr>
            <tr>
                <td class="f1_label"> Last_name:<br></td>
                <td><input type="text" name="Last_name"></td><br>
            </tr>
            <tr>
                <td class="f1_label"> email:</td>
                <td><input type="email" name="email"></td><br>
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
</body>