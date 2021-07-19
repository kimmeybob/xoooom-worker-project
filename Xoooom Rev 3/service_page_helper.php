<?php

//require 'Admin/database_config.php';
$worker_name = $_POST['toggle'];

echo "Hello! ".$worker_name;

/*$query = "Select * from job_list where customer_id = ''";
$query_run = mysqli_query($connection, $query);
$check_job_orders = mysqli_num_rows($query_run) > 0;

if($check_job_orders == 0){
    echo $customer_id ?"OK" : "ERROR MESSAGE";
}*/


?>