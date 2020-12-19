<?php
    if ($_POST['password']==$_POST['password_check'])
    {
        include("includes/dbconnection.php");
        $query = "INSERT INTO `student_login` (`name`, `email`, `password`) VALUES ('$_POST[name]', '$_POST[email]', '$_POST[password]')";
        $query_run = mysqli_query($con, $query); 
        ?>
        <script src="JS/register.js"></script>
        <?php      
    }
    else
    {
        echo "Passwords didn't match.";
    }

?>

