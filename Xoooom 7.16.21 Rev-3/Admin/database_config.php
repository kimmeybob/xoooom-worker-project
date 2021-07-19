<?php
$server_name = "xoooomautospafleet.com";
        $db_username = "ztcanrtj_xooom";
        $db_password = "wM9a3.A?UW-v";
        $db_name = "ztcanrtj_xooom";

        $connection = mysqli_connect($server_name, $db_username, $db_password);
        $conn = mysqli_connect($server_name, $db_username, $db_password);
        $dbconfig = mysqli_select_db($connection,$db_name);

        if($dbconfig){
           // echo 'Connected to Database';
        }else{
           // echo 'Unable to connect to database;';
        }

?>