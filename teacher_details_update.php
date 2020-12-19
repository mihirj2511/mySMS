<?php
    include("includes/dbconnection.php");
    $query = "UPDATE `teacher` SET `name`='$_POST[name]',`email`='$_POST[email]',`password`='$_POST[password]',`subject`='$_POST[subject]' WHERE `id` = '$_POST[id]'";
    $query_run = mysqli_query($con, $query);
?>
<script src="JS/teacher_update.js"></script>