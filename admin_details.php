<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/admin_details.css">
    <title>Admin Control Panel</title>
    <?php
        session_start();
        include("includes/dbconnection.php");
    ?>
</head>

<body>

    <h1 class="h1">Admin Dashboard <span class="span">Email:
            <?php echo $_SESSION['email'];?> | Name:
            <?php echo $_SESSION['name'];?> | <a href="logout.php">Logout</a>
        </span></h1>

    <span class="span1">
        <marquee behavior="scroll" direction="right" scrollamount="10" bgcolor="lightgrey">Note:- This is Student Management System designed in HTML, CSS and JAVASCRIPT with the backend coded in PHP MySQL.</marquee>
    </span>

    <nav id="navbar">
        <form action="" method="post">
            <ul>

                <li>
                    <input type="submit" name="student_search" value="Search">
                </li>
                <li>
                    <input type="submit" name="student_edit" value="Edit details">
                </li>
                <li>
                    <input type="submit" name="student_delete" value="Delete">
                <li>
                    <input type="submit" name="student_add_new" value="Add Student">
                </li>
                <li>
                    <input type="submit" name="teacher_view" value="View Teachers">
                </li>
                <li>
                    <input type="submit" name="teacher_edit" value="Edit Teachers">
                </li>

            </ul>
        </form>
    </nav>
    <div id="background">
        <div id="main">
            <?php
            // For Searching 
                if (isset($_POST['student_search']))
                {

                    ?>
            <form action="" id="form" style="color: white;" method="post">
                Roll.No:<input type="text" name="roll_no">
                <input type="submit" name="search_by_rollno_search" value="Search Student">
            </form>
            <?php
                }

                if (isset($_POST['search_by_rollno_search']))
                {
                    $query = "SELECT *FROM `student` WHERE `roll.no` =  '$_POST[roll_no]'";
                    $query_run = mysqli_query($con, $query);
                    while($row = mysqli_fetch_assoc($query_run))
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

                    ?>
            <form action="" id="form" method="post">
                Roll.No:<input type="text" name="roll_no">
                <input type="submit" name="search_by_rollno_edit" value="Edit Student">
            </form>
            <?php
                }

                if (isset($_POST['search_by_rollno_edit']))
                {
                    $query = "SELECT *FROM `student` WHERE `roll.no` =  '$_POST[roll_no]'";
                    $query_run = mysqli_query($con, $query);
                    while($row = mysqli_fetch_assoc($query_run))
                    {
                        ?>
            <form action="admin_details_update.php" method="post">
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
                        <td><input type="text" name="name" value="<?php echo $row['name'];?>"></td>
                        <td><input type="text" name="rollno" value="<?php echo $row['roll.no'];?>"disabled></td>
                        <td><input type="text" name="class" value="<?php echo $row['class'];?>"></td>
                        <td><input type="text" name="email" value="<?php echo $row['email'];?>"></td>
                        <td><input type="text" name="password" value="<?php echo $row['password'];?>"></td>
                        <td><input type="text" name="mobile" value="<?php echo $row['mobile'];?>"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Save"></td>
                    </tr>
                </table>
            </form>
            <?php
                    }
                }
            ?>
            <?php
            // For Adding New Student
                if (isset($_POST['student_add_new']))
                {
                    ?>
            <form action="admin_add_newStudent.php" method="post">
                <table id="table2">
                    <tr>
                        <th>Name:</th>
                        <th>Roll.No:</th>
                        <th>Class:</th>
                        <th>E-mail:</th>
                        <th>Password:</th>
                        <th>Mobile:</th>
                    </tr>
                    <tr>
                        <td><input type="text" name="name"></td>
                        <td><input type="text" name="rollno"></td>
                        <td><input type="text" name="class"></td>
                        <td><input type="text" name="email"></td>
                        <td><input type="text" name="password"></td>
                        <td><input type="text" name="mobile"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Add Student"></td>
                    </tr>
                </table>
            </form>
            <?php
                }
            // For Removing Student
                if (isset($_POST['student_delete']))
                {
                    ?>
                    <form action="delete_student.php" style=" display: flex; flex-direction: row; justify-content: center; align-items: center; color: white;" method="post">
                        Roll.No:<input type="text" name="rollno" >
                        <input type="submit" value="Delete Student">
                    </form>
                    <?php
                }
            // For Viewing Teachers
                if (isset($_POST['teacher_view']))
                {
                    $query = "SELECT * FROM `teacher`";
                    $query_run = mysqli_query($con, $query);
                    while($row = mysqli_fetch_assoc($query_run))
                    {
                        ?>
                        <table id="table2">
                    <tr>
                        <th>ID:</th>
                        <th>Name:</th>
                        <th>Subject:</th>
                        <th>E-mail:</th>
                        <th>Password:</th>
                    </tr>
                    <tr>
                        <td><input type="text" name="id" value="<?php echo "$row[id]"?>"></td>
                        <td><input type="text" name="name" value="<?php echo "$row[name]"?>"></td>
                        <td><input type="text" name="subject" value="<?php echo "$row[subject]"?>"></td>
                        <td><input type="text" name="email" value="<?php echo "$row[email]"?>"></td>
                        <td><input type="text" name="password" value="<?php echo "$row[password]"?>"></td>
                    </tr>
                </table>
                        <?php
                    }
                }
                if (isset($_POST['teacher_edit']))
                {

                    ?>
            <form action="" id="form" style="color: white;" method="post">
                ID:<input type="text" name="id">
                <input type="submit" name="edit_by_id_edit" value="Submit">
            </form>
            <?php
                }

                if (isset($_POST['edit_by_id_edit']))
                {
                    $query = "SELECT *FROM `teacher` WHERE `id` =  '$_POST[id]'";
                    $query_run = mysqli_query($con, $query);
                    while($row = mysqli_fetch_assoc($query_run))
                    {
                        ?>
            <form action="teacher_details_update.php" method="post">
                <table id="table3">
                    <tr>
                        <th>ID:</th>
                        <th>Name:</th>
                        <th>Subject:</th>
                        <th>E-mail:</th>
                        <th>Password:</th>

                    </tr>
                    <tr>
                        <td><input type="text" name="id" value="<?php echo $row['id'];?>"></td>
                        <td><input type="text" name="name" value="<?php echo $row['name'];?>"></td>
                        <td><input type="text" name="subject" value="<?php echo $row['subject'];?>"></td>
                        <td><input type="text" name="email" value="<?php echo $row['email'];?>"></td>
                        <td><input type="text" name="password" value="<?php echo $row['password'];?>"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Update"></td>
                    </tr>
                </table>
            </form>
            <?php
                    }
                }
            ?>
        </div>
    </div>
</body>

</html>