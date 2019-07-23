<?php
    include "connect.php";
    if(!isset($cmd))
    {
        if($_GET["cmd"]=="menu" || $_POST["cmd"]=="menu")
        {
            if (!isset($_POST["Submit"]))
            {
                $id = $_GET["id"];
                $sql = "SELECT doctor.*, spec.* FROM doctor, spec WHERE doctor.id=$id AND spec.id=doctor.id";
                $result = mysql_query($sql);
                $row = mysql_fetch_array($result);
                header('location:form1.php');
?>