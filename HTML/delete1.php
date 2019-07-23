<?php  


$url='localhost';
$username='root';
$password='';
$conn=mysqli_connect($url,$username,$password,"patient");
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}


// confirm that the 'id' variable has been set
	$id=$_GET['id'];
	
    mysqli_query($conn,"delete from `reg` where id='$id'");
    header('location:record.php');
    
?>