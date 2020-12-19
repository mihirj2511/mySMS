<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/student_details.css">
    <title>Student Control Panel</title>
    <?php
        session_start();
        include("includes/dbconnection.php");
    ?>
</head>

<body>

    <h1 class="h1">Students Dashboard <span class="span">Email:
            <?php echo $_SESSION['email'];?> | Name:
            <?php echo $_SESSION['name'];?> | <a href="logout.php">Logout</a>
        </span></h1>

    <span class="span1">
        <marquee behavior="scroll" direction="right" scrollamount="10" bgcolor="lightgrey">Note:- Soon the portal will
            be going under maintainance. Please re-fill the details if incorrect.</marquee>
    </span>

    <nav id="navbar">
        <form action="" method="post">
            <ul>

                <li>
                    <input type="submit" name="student_view" value="View Details">
                </li>
                <li>
                    <input type="submit" name="student_edit" value="Edit details">
                </li>

            </ul>
        </form>
    </nav>
    <div id="background">
        <div id="main">
            <?php
            // For Searching 
                if (isset($_POST['student_view']))
                {
                    $query = "SELECT * FROM `student` WHERE `password` = '$_SESSION[password]'";
                    $query_run = mysqli_query($con, $query);
                    while ($row = mysqli_fetch_assoc($query_run))
                    {

                        ?>
            <table id="table">
                <tr>
                    <th>Name:</th>
                    <th>Roll.No:</th>
                    <th>Class:</th>
                    <th>E-mail:</th>
                    <th>Password:</th>
                    <th>Mobile:</th>
                </tr>
                <tr>
                    <td><input type="text" value="<?php echo $row['name'];?>" disabled></td>
                    <td><input type="text" value="<?php echo $row['roll.no'];?>" disabled></td>
                    <td><input type="text" value="<?php echo $row['class'];?>" disabled></td>
                    <td><input type="text" value="<?php echo $row['email'];?>" disabled></td>
                    <td><input type="text" value="<?php echo $row['password'];?>" disabled></td>
                    <td><input type="text" value="<?php echo $row['mobile'];?>" disabled></td>
                </tr>
            </table>
            <?php
                    }
                }

            // For Editing
                if (isset($_POST['student_edit']))
                {
                    $query = "SELECT * FROM `student` WHERE `password` = '$_SESSION[password]'";
                    $query_run = mysqli_query($con, $query);
                    while ($row = mysqli_fetch_assoc($query_run))
                    {

                            ?>
            <table id="table1">
                <tr>
                    <th>Name:</th>
                    <th>Roll.No:</th>
                    <th>Class:</th>
                    <th>E-mail:</th>
                    <th>Password:</th>
                    <th>Mobile:</th>
                </tr>
                <tr>
                    <td><input type="text" value="<?php echo $row['name'];?>"></td>
                    <td><input type="text" value="<?php echo $row['roll.no'];?>"></td>
                    <td><input type="text" value="<?php echo $row['class'];?>"></td>
                    <td><input type="text" value="<?php echo $row['email'];?>"></td>
                    <td><input type="text" value="<?php echo $row['password'];?>"></td>
                    <td><input type="text" value="<?php echo $row['mobile'];?>"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Save"></td>
                </tr>
            </table>
            <?php
                    }
                }
            
            ?>
        </div>
    </div>
</body>

</html>