<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/register_student.css">
    <?php
        include("includes/dbconnection.php");
    ?>
    <title>Registration</title>
</head>

<body>
    <h1 class="h1">Student Register</h1>
    <marquee behavior="scroll" direction="right" id="marquee" bgcolor="lightgrey" scrollamount="10">Welcome Admin!</marquee>
    <div id="background">
        <div class="container">
            <form action="register.php" id="form" method="post">

                <input type="text" name="name" placeholder="Enter name" required>
                <input type="email" name="email" placeholder="Enter email" required>
                <input type="password" name="password" placeholder="Enter password" required>
                <input type="password" name="password_check" placeholder="Enter password again" required>
                <input type="submit" class="btn" name="submit" value="Register">

            </form>
        </div>
        
    </div>
</body>

</html>