<?php
    include("includes/dbconnection.php");
    $query = "DELETE FROM `student` WHERE `roll.no` = '$_POST[rollno]'";
    $query_run = mysqli_query($con, $query);
?>
<script src="JS/student_del.js"></script>