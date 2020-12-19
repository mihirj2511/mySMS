<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/student.css">
    <title>Student</title>
</head>
<body>
    <h1 class="h1" >Student Login</h1>
    <marquee behavior="scroll" direction="right" id="marquee" bgcolor="lightgrey" scrollamount="10">Welcome Student!</marquee>
    <div id="background">
        <div class="container">
            <form action="" id="form" method="POST">

                <input type="email" name="email" id="email" placeholder="Enter email">
                <input type="password" name="password" id="password" placeholder="Enter password">
                <input type="submit" class="btn" name="submit" value="Login">
                
            </form>
    </div>
        <?php
            session_start();
            if (isset($_POST['submit'])) {
                    
                include("includes/dbconnection.php");
                

                $query = "SELECT * FROM `student_login` WHERE `email` = '$_POST[email]'";
                $query_run = mysqli_query($con, $query);
                
                while ($row = mysqli_fetch_assoc($query_run)) {

                    if ($row['email'] == $_POST['email']) {

                        if ($row['password'] == $_POST['password']) {

                            $_SESSION['email']=$row['email'];
                            $_SESSION['name']=$row['name'];
                            $_SESSION['password']=$row['password'];
                            header("Location: student_details.php");
                        }
                        else {
                            
                            echo "Wrong Password";
                        }
                    }
                    else {

                        echo "Wrong email-id";
                    }
                }

            }
        ?>
        </center>
    </div>
</body>
</html>