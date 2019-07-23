<?php
$url='localhost';
$username='root';
$password='';
$conn=mysqli_connect($url,$username,$password,"patient");
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}
$result = mysqli_query($conn,"SELECT * FROM reg");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
 <link rel="stylesheet" href="css\register.css">
 </head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css\book1css.css">
  <script src=""></script>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://kendo.cdn.telerik.com/2019.2.619/styles/kendo.common-material.min.css" />
<link rel="stylesheet" href="https://kendo.cdn.telerik.com/2019.2.619/styles/kendo.material.min.css" />
<link rel="stylesheet" href="https://kendo.cdn.telerik.com/2019.2.619/styles/kendo.material.mobile.min.css" />

<script src="https://kendo.cdn.telerik.com/2019.2.619/js/jquery.min.js"></script>
<script src="https://kendo.cdn.telerik.com/2019.2.619/js/kendo.all.min.js"></script>

<div class="w3-top">
    <div class="w3-bar w3-theme-d2 w3-left-align">
      <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2"
        href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>



     <!-- <a href="Register.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Register</a>-->
      <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="Search"><i
          class="fa fa-search"></i></a>
          <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="User"><i
            class="fa fa-user"></i></a>   

            <body background="img\f6.png">

        <center>
                <h1 style="color:white;"><i>SANJEEVANI CLINIC</i></h1>
            </center>
    </div>
    <br>
    <h3>Patient Reports</h3>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<br><br><br>
    <table width="400" border="2" cellpadding="2" cellspacing='1' id="mytable">
           <tr bgcolor="#2ECCFA">
 
    <td>First_name</td>
    <td>Last_name</td>
    <td>email</td>
    <td>Address_1</td>
    <td>Address_2</td>
    <td>Action</td>

  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>


       <td><?php echo $row["First_name"] ?></td>
    <td><?php echo $row["Last_name"] ?></td>
    <td><?php echo $row["email"] ?></td>
    <td><?php echo $row["Address_1"] ?></td>
    <td><?php echo $row["Address_2"] ?></td>
   <td> <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;| <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
</tr>

<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>