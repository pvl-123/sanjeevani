<!DOCTYPE html>

<meta content="noindex, nofollow" name="robots">
<link href="style.css" rel="stylesheet" type="text/css">
<body background="img\f6.png">
<div class="maindiv">
<div class="divA">
<div class="title">
<h2>Read Data Using PHP</h2>
</div>
<div class="divB">
<div class="divD">

    <center>
        <h1 style="color:black"><i>SANJEEVANI CLINIC</i></h1>

        <form method="POST" action="from.php">
            <h3>Available Doctors</h3>
            <title>doctor data </title>
            <?php
            if (mysqli_num_rows($result) > 0) {
                ?>
                </div>
                <table width="400" border="2" cellpadding="2" cellspacing='1' id="mytable">
                    <tr bgcolor="#2ECCFA">

                        <td>spec_id</td>
                        <td>spec_name</td>
                        <td>doc_city</td>
                        <td>patient_experience</td>
                        <td>doc_name</td>
                        <td>Action</td>


                    </tr>
                    <?php
                    if (isset($_POST['search'])) {
                        $i = 0;
                        while ($row = mysqli_fetch_array($result)) {
                            ?>


                     <div class="form">
                                <span>spec_id:</span> <?php  $row["spec_id"] ?>
                                <span>Spec_name:</span><?php  $row["Spec_name"] ?>
                                <span>Doc_city:</span><?php  $row["doc_city"] ?>
                               <span>patient_experience:</span><?php  $row["patient_experience"] ?>
                                <span>doc:</span><?php $row["doc_name"] ?>
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