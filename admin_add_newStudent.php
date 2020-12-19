<?php
    include("includes/dbconnection.php");
    $query = "INSERT INTO `student` (`name`, `class`, `email`, `password`, `roll.no`, `mobile`) VALUES ('$_POST[name]', '$_POST[class]', '$_POST[email]', '$_POST[password]', '$_POST[rollno]', '$_POST[mobile]')";
    $query_run = mysqli_query($con, $query);
?>
<script src="JS/student.js"></script>