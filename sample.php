
<!DOCTYPE html>
<html>
<head>
<title>Read Data From Database Using PHP - Demo Preview</title>
<meta content="noindex, nofollow" name="robots">
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="maindiv">
<div class="divA">
<div class="title">
<h2>Read Data Using PHP</h2>
</div>
<div class="divB">
<div class="divD">
<p>Click On Menu</p>
<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("patient", $connection); // Selecting Database
//MySQL Query to read data
$query = mysql_query("select * from doctor", $connection);
while ($row = mysql_fetch_array($query)) {
//echo "<b><a href="sample.php?id={$row['employee_id']}">{$row['employee_name']}</a></b>";
echo "<br />";
}
?>
</div>
<?php
if (isset($_GET['id'])) {
$id = $_GET['id'];
$query1 = mysql_query("select * from doctor where doc_id=$id", $connection);
while ($row1 = mysql_fetch_array($query1)) {
?>
<div class="form">
<h2>---Details---</h2>
<!-- Displaying Data Read From Database -->
<span>doc_name:</span> <?php echo $row1['doc_name']; ?>
<span>Speci_name:</span> <?php echo $row1['employee_email']; ?>
<span>doc_city:</span> <?php echo $row1['employee_contact']; ?>
<span>Patient_experince:</span> <?php echo $row1['employee_address']; ?>
</div>
<?php
}
}
?>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
</div>
<?php
mysql_close($connection); // Closing Connection with Server
?>
</body>
</html>
