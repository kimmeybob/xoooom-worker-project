<?php
$server_name = "localhost";
        $db_username = "root";
        $db_password = "";
        $db_name = "local_xoom_database";

        $connection = mysqli_connect($server_name, $db_username, $db_password);
        $conn = mysqli_connect($server_name, $db_username, $db_password);
        $dbconfig = mysqli_select_db($connection,$db_name);

        if($dbconfig){
           // echo 'Connected to Database';
        }else{
           // echo 'Unable to connect to database;';
        }

?>