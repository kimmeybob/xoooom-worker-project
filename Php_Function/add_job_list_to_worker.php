<?php

 // Live Link (Uncomment for Production)
  // $myqueue_dashboard = "https://xoooomautospafleet.com/workerone/CC-client_dashboard.php"
  
  // Kim Development Playground Site
  //https://xoooomautospafleet.com/kim.development.site/CC-client_dashboard.php
  /*
  $myqueue_dashboard = "https://xoooomautospafleet.com/kim.development.site/CC-client_dashboard.php?";
  $all_orders_dashboard = "https://xoooomautospafleet.com/kim.development.site/CC-client_dashboard_all_orders.php?";
  $tracker_form = "https://xoooomautospafleet.com/kim.development.site/CC-TrackerForm.php?job_listing_id=";
  $all_products_dashboard = "https://xoooomautospafleet.com/kim.development.site/CC-client_dashboard_all_products.php?";
  $edit_tracker_form = "https://xoooomautospafleet.com/kim.development.site/CC-Edittable-TrackerForm.php?";
  $service_queue = "https://xoooomautospafleet.com/kim.development.site/CC-Service_Worker_Job_Listing_Que.php?";
  */

  // Debug Link (Comment in Product)
  $myqueue_dashboard = "http://localhost/Xoooom%20Worker%20V.1/CC-client_dashboard.php?";
  $all_orders_dashboard = "http://localhost/Xoooom%20Worker%20V.1/CC-client_dashboard_all_orders.php?";
  $tracker_form = "http://localhost/Xoooom%20Worker%20V.1/CC-TrackerForm.php?job_listing_id=";
  $all_products_dashboard = "http://localhost/Xoooom%20Worker%20V.1/CC-client_dashboard_all_products.php?";
  $edit_tracker_form = "http://localhost/Xoooom%20Worker%20V.1/CC-Edittable-TrackerForm.php?";
  $service_queue = "http://localhost/Xoooom%20Worker%20V.1/CC-Service_Worker_Job_Listing_Que.php?";


$job_listing_id = $_GET['job_id'];
$worker_on_duty_id = $_GET['worker_id'];
$choice_option = $_GET['choice'];

require '../Admin/database_config.php';

if($choice_option == "accept"){
    echo "Listing ID: $job_listing_id <br>
       Worker ID: $worker_on_duty_id<br>";

       add_to_worker_que($job_listing_id,$worker_on_duty_id);
       update_job_listing_status($job_listing_id,$worker_on_duty_id);

      
}else if($choice_option == "cancel"){
    require '../Admin/database_config.php';
    //echo "called";
     $sql_update_status = "update customer set status='cancelled' where customer_id = $job_listing_id;";
    
     if ($connection->query($sql_update_status) === TRUE) {
         
            ?>
            <meta http-equiv="refresh" content="0;url=<?php echo $myqueue_dashboard;?>"> 
            <?php

     } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
     }
}else if($choice_option == "relist"){
    require '../Admin/database_config.php';
    //echo "called";
     $sql_update_status = "update customer set status='in-progress' where customer_id = $job_listing_id;";
    
     if ($connection->query($sql_update_status) === TRUE) {
         
            ?>
            <meta http-equiv="refresh" content="0;url=<?php echo $myqueue_dashboard;?>"> 
            <?php
     } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
     }
}else{
    remove_to_worker_que($job_listing_id,$worker_on_duty_id);
    remove_job_listing_status($job_listing_id,$worker_on_duty_id);
}

function add_to_worker_que($job_listing_id,$worker_on_duty_id){
    require '../Admin/database_config.php';
       //echo "called";
        $sql_add_to_worker_que = "INSERT INTO job_list (customer_id,worker_name) 
        VALUES ('$job_listing_id','$worker_on_duty_id')";
    
        if ($connection->query($sql_add_to_worker_que) === TRUE) {
        echo "Job listing successfully registered to worker<br>";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
   }

   function update_job_listing_status($job_listing_id,$worker_on_duty_id){
    require '../Admin/database_config.php';
    //echo "called";
     $sql_update_status = "update customer set status='in-progress' where customer_id = $job_listing_id;";
 
     if ($connection->query($sql_update_status) === TRUE) {
         
     echo "Updated Job listing status successfully - Proceeding to CC-Que Page<br>";
       ?>
        <meta http-equiv="refresh" content="0;url=<?php echo $GLOBALS['service_queue'];?>job_id=<?php echo $job_listing_id;?>"> 
        <?php
        
     } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
     }
}

function remove_to_worker_que($job_listing_id,$worker_on_duty_id){
    require '../Admin/database_config.php';
       //echo "called";
        $sql_add_to_worker_que = "DELETE FROM job_list
        where customer_id = $job_listing_id";
    
        if ($connection->query($sql_add_to_worker_que) === TRUE) {
        echo "Job listing successfully deleted to worker<br>";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
   }

   function remove_job_listing_status($job_listing_id,$worker_on_duty_id){
    require '../Admin/database_config.php';
    //echo "called";
     $sql_update_status = "update customer set status='waiting' where customer_id = $job_listing_id;";
 
     if ($connection->query($sql_update_status) === TRUE) {
     echo "Updated Job listing status successfully<br>";
     ?>
        <meta http-equiv="refresh" content="0;url=<?php echo $GLOBALS['service_queue'];?>job_id=<?php echo $job_listing_id;?>"> 
     <?php
     } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
     }
}



//


?>
<html>
<head>
<style>
html{
    background: black;
}
</style>
</head>

</html>