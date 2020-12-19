<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbaname = "sms";

    $con = mysqli_connect($server, $username, $password, $dbaname);

    if (!$con){

        die("The connection to the database in unsuccsessfull due to ".mysqli_connect_error());
    }
    else{

        // echo "connection Successfull";
    }
?>