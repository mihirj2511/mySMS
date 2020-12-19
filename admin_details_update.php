<?php

    include("includes/dbconnection.php");
    $query = "UPDATE `student` SET `name`='$_POST[name]', `class`='$_POST[class]', `email`='$_POST[email]', `password`='$_POST[password]', `mobile`='$_POST[mobile]' WHERE `roll.no` = '$_POST[rollno]'";
    $query_run = mysqli_query($con, $query);
?>
<script src="JS/admin.js"></script>