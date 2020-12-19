<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/admin.css">
    <title>Administrator</title>
</head>

<body>
    <h1 class="h1">Admin Login</h1>
    <marquee behavior="scroll" direction="right" id="marquee" bgcolor="lightgrey" scrollamount="10">Welcome Admin!</marquee>
    <div id="background">
        <div class="container">
            <form action="" id="form" method="post">

                <input type="email" name="email" placeholder="Enter email" required>
                <input type="password" name="password" placeholder="Enter password" required>
                <input type="submit" class="btn" name="submit" value="Login">

            </form>
    </div>
            <?php
            session_start();
            if (isset($_POST['submit'])) { 

                    include("includes/dbconnection.php");
                

                $query = "SELECT * FROM login WHERE email = '$_POST[email]'";
                $query_run = mysqli_query($con, $query);
                
                while ($row = mysqli_fetch_assoc($query_run)) {

                    if ($row['email'] == $_POST['email']) {

                        if ($row['password'] == $_POST['password']) {
                          
                            $_SESSION['email']=$row['email'];
                            $_SESSION['name']=$row['name'];
                            header("Location: admin_details.php");
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