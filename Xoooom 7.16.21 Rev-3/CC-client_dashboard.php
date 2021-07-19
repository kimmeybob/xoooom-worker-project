<?php 
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } ?>
<html>
    <head>
        <title>Xoom Customer Carwash Booking Service</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css"/>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <!--<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css"/>-->
       <!-- <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <script type='text/javascript' src='script.js'></script> -->

       
    </head>

    <style>
.lds-ellipsis {
  /*display: inline-block;*/
  /*position: relative;*/
  /*width: 80px;
  height: 80px;*/
}
.lds-ellipsis div {
  position: absolute;
  top: 45%;
  width: 13px;
  margin-left: 40%;
  height: 13px;
  border-radius: 50%;
  background: #fff;
 
  animation-timing-function: cubic-bezier(0, 1, 1, 0);
}
.lds-ellipsis div:nth-child(1) {
  left: 8px;
  animation: lds-ellipsis1 0.6s infinite;
}
.lds-ellipsis div:nth-child(2) {
  left: 8px;
  animation: lds-ellipsis2 0.6s infinite;
}
.lds-ellipsis div:nth-child(3) {
  left: 32px;
  animation: lds-ellipsis2 0.6s infinite;
}
.lds-ellipsis div:nth-child(4) {
  left: 56px;
  animation: lds-ellipsis3 0.6s infinite;
}
@keyframes lds-ellipsis1 {
  0% {
    transform: scale(0);
  }
  100% {
    transform: scale(1);
  }
}
@keyframes lds-ellipsis3 {
  0% {
    transform: scale(1);
  }
  100% {
    transform: scale(0);
  }
}
@keyframes lds-ellipsis2 {
  0% {
    transform: translate(0, 0);
  }
  100% {
    transform: translate(24px, 0);
  }
}





        html{
            font-family: 'Roboto';
            
        }
        .sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 18px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}


/************************************************************************************
smaller than 1080
*************************************************************************************/
@media screen and (max-width: 4080px) {
body{

    width: 500px;
    margin: 0 auto;
    padding: 50px;
}
html{

  margin-top: 2%;
}
}

/************************************************************************************
smaller than 1080
*************************************************************************************/
@media screen and (max-width: 1024px) {
body{

    width: 500px;
    margin: 0 auto;
    padding: 50px;
}
}

/************************************************************************************
smaller than 980
*************************************************************************************/
@media screen and (max-width: 980px) {
body{

    width: 500px;
    margin: 0 auto;
    padding: 10px;

  
}
}

/************************************************************************************
smaller than 650
*************************************************************************************/
@media screen and (max-width: 650px) {
  body{
    
    width: 100%;
    margin: 0 auto;
    padding: 5px;
   
  
}
}
/************************************************************************************
smaller than 560
*************************************************************************************/
@media screen and (max-width: 480px) {
  body{
    width: 100%;
    margin: 0 auto;
    padding: 5px;
   
  }
}
    </style>

    <body>
    <div style="margin-top: 5%;margin-left: 2.5%;margin-right: 0%;width:100%;">
    
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  <a href="#" style="font-size: 12px;">Welcome <br><span style="font-size: 18px;color: white;">WORKER-1<span></a>
  <br>
  <br>
 
  <a style="color: white;color: #282828;pointer-event: none;cursor: default;" href="#">My Queue</a>
  <a onclick="display_page_Loading()" style="color: white;" href="CC-client_dashboard_all_orders.php">All Orders</a>
  <a onclick="display_page_Loading()" style="color: white;" href="#">All Products</a>
  <a style="color: #282828;pointer-event: none;cursor: default;" href="#">Logout (Disabled)</a>
  <br>
  <br><a href="#" style="color: #818181;font-size: 12px;">C-Dash Rev 1.2-7.9.21</a>
</div>

<!-- LOADER DIV -->
<div style=" display: block;background: black;top:0;left: 0; position:fixed;z-index: 10;width: 100%;height: 100%;margin: 0;opacity: 0.95;" id="loader_visuals" class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>

<span style="font-size:26px;cursor:pointer;background: white;" onclick="openNav()">&#9776;&nbsp&nbsp <span style="font-size: 22px;font-weight: bold;background: white;color: black;">Xoooom Service Client</span></span>
           
     </div>

     <div style="background: #D3D3D3;height: 1px;width: 100%;margin-top: 5%;">
     </div>

     <div>
        <p  style="margin:0;overflow: hidden;margin-left: 5%;margin-top: 5%;display: inline-block;" id="weekday_holder">
        <?php 
           date_default_timezone_set('Asia/Manila');

           
           $current_weekday = date('w');
           $weekday = "Weekday.Today()";
           
            if($current_weekday == 0){
              $weekday = "Sunday";
            }else if($current_weekday == 1){
              $weekday = "Monday";
            }else if($current_weekday == 2){
              $weekday = "Tuesday";
            }else if($current_weekday == 3){
              $weekday = "Wednesday";
            }else if($current_weekday == 4){
              $weekday = "Thursday";
            }else if($current_weekday == 5){
              $weekday = "Friday";
            }else if($current_weekday == 6){
              $weekday = "Saturday";
            }

           echo $weekday;
        ?></p>
     </div>

     <div>
        <span style="display: inline-block;margin:0;overflow: hidden;margin-top: 1%;margin-left: 5%;font-size: 22px;font-weight: bold;" id="fulld_date_holder">
        <?php 
          date_default_timezone_set('Asia/Manila');

          $n_raw = date("m");
          $current_date_display = date("d, Y");
          $n = $n_raw;
          
          $m = "";

          if($n == 1){
            $m = "January";
          }else if($n == 2){
            $m = "February";
          }else if($n == 3){
            $m = "March";
          }else if($n == 4){
            $m = "April";
          }else if($n == 5){
            $m = "May";
          }else if($n == 6){
            $m = "June";
          }else if($n == 7){
            $m = "July";
          }else if($n == 8){
            $m = "August";
          }else if($n == 9){
            $m = "September";
          }else if($n == 10){
            $m = "October";
          }else if($n == 11){
            $m = "November";
          }else if($n == 12){
            $m = "December";
          }
          echo $m." ".$current_date_display;

        ?></span>
     </div>

     <div style="margin-top: 5%;margin-left: 5%;font-size: 20px;font-weight:bold;">
        <span>Service Worker Queue</span>
     </div>

     <div style="margin-top: 0.5%;margin-left: 5%;font-size: 12px;color: #868686;display: inline-block;">
        <span >Manage Job Orders submitted by your customers.</span>
     </div>

     <div style="margin-top: 5%;margin-left: 5%;margin-right: 5%;width: auto; background: white;">
    
            <a onclick="display_page_Loading()" href="https://xoooomautospafleet.com/"><span style="background: white;color: black;font-size: 14px;padding-top: 5%;padding-bottom: 5%;margin: auto;border: 1px solid #CBCBCB;height: auto;width: 49%;float: left;display: inline-block;border-radius: 10px;text-align: center;font-weight: bold;">CUSTOMER BOOKING</span></a>
           <!-- LINK: CC-ProductPurchaseTrackerForm.php?job_listing_id=<?php echo "0";?>-->
            <a onclick="display_page_Loading()" href="CC-ProductPurchaseTrackerForm.php?job_listing_id=<?php echo "0";?>"><span style="background: white;color: black;font-size: 14px;padding-top: 5%;padding-bottom: 5%;text-align: center;border: 1px solid #CBCBCB;height: auto;width: 47%;float: right;display: inline-block;border-radius: 10px;font-weight: bold;">ORDER PRODUCT</span></a>
      
     </div>


     <div style="background: #D3D3D3;height: 1px;width: 100%;margin-top: 5%;display: inline-block">
     </div>


     <div style="margin-top: 5%;margin-left: 5%;color: black">
        <span style="font-weight: bold;font-size: 22px;">In Progress</span>
        
     </div>

     <div style="margin-top: 2%;margin-left: 5%;font-size: 12px;color: #868686">
        <span>
         My On Progress Job Orders Today.</span>
     </div>

  

<?php

/** LOGIC for listing here */

?>
     <div style="background: white; margin-left: 5%; margin-right: 5%;width: auto;margin-top: 5%;padding-bottom: 2%;">

        <!-- Recycleable Layout Cards --->
        <?php 
           require 'Admin/database_config.php';

            $query = "Select * from job_list where worker_name = 1;";
            $query_run = mysqli_query($connection, $query);
            $check_job_orders = mysqli_num_rows($query_run) > 0;
            $customer_ID = "";

            if($check_job_orders == 0){
                echo "No current work in the moment.";
            }

              while($row = mysqli_fetch_array($query_run)){
                $customer_ID = $row['customer_id'];
              
            $query_s = "Select * from customer where customer_id = $customer_ID order by STR_TO_DATE(time, '%l:%i %p');";
            $query_run_s = mysqli_query($connection, $query_s);
            $check_job_orders_s = mysqli_num_rows($query_run_s) > 0;  
            
            while($row = mysqli_fetch_array($query_run_s)){
              if($row['status'] == "in-progress"){
        ?>
        <a onclick="display_page_Loading()" href="CC-Service_Worker_Job_Listing_Que.php?job_id=<?php echo  $row['customer_id'];?>" style="text-decoration: none;">
        <div style="background: #2AA965;height: auto;border: 1px solid white;border-radius:10px;padding: 4%;display: block;margin-top:0.5%;">
        <div style="margin-bottom: 10%;">
                            <p style="float:left;width: auto;font-size: 18px;display: inline-block;margin:0;overflow: hidden;color: white;"><?php echo  "CUSTRK-".$row['customer_id'] ; ?></p>
                            <span style="padding-right:1%;float:right;width: auto;font-size: 14px;display: inline-block;margin:0;overflow: hidden;color: white;"> <i class="fa fa-unlock" aria-hidden="true" style="color: white;"></i></span>
                            <span style="padding-right:2%;float:right;width: auto;font-size: 14px;display: inline-block;margin:0;overflow: hidden;color: white;"> <i class="fa fa-user" aria-hidden="true" style="display: block;color: white;"></i></span>
                          </div>
           
            <p style="font-size: 14px;display: inline-block;margin:0;overflow:hidden;color: white;"><?php echo  $row['address'] ;?></p><br>
            <p style="font-size: 12px;display: inline-block;margin:0;overflow:hidden;color: white;"><?php echo  $row['Name'] ; ?> | status: <?php echo  $row['status'] ; ?></p><br>
            <p style="font-size: 12px;display: inline-block;margin:0;overflow:hidden;color: white;"><?php echo  $row['date'] ; ?> | <?php echo  $row['time'] ; ?></p>
              
          </div>
        </a>

        <?php 
              }//if closing
              else{

              }
      }} ?>

     </div>

     <?php 

?>

<div style="background: #D3D3D3;height: 1px;width: 90%;margin-right: 5%;margin-left: 5%;margin-top: 10%;display: inline-block">
     </div>

     <div style="margin-top: 5%;margin-left: 5%;color: black">
        <span style="font-weight: bold;font-size: 22px;">Today's Job Orders</span>
     </div>

     <div style="margin-top: 2%;margin-left: 5%;font-size: 12px;color: #868686">
        <span>
        <?php
          // Set the timezone
     
        date_default_timezone_set('Asia/Manila');

           $current_date_now = date("m/d/Y");
           //echo date("m/d/Y");
           //$current_date_now = "06/26/2021";

          $query = "Select * from customer where status = 'waiting' and date = '$current_date_now' order by STR_TO_DATE(time, '%l:%i %p');";
          $query_run = mysqli_query($connection, $query);
          $check_job_orders = mysqli_num_rows($query_run) > 0;
              
            echo mysqli_num_rows($query_run);
        ?>
         Pending Job Orders Today.</span>
     </div>

     <div style="background: white; margin-left: 5%; margin-right: 5%;width: auto;margin-top: 5%;padding-bottom: 2%;">

        <!-- Recycleable Layout Cards --->
        <?php 
            while($row = mysqli_fetch_array($query_run)){

        ?>
        <a onclick="display_page_Loading()" href="CC-Service_Worker_Job_Listing_Que.php?job_id=<?php echo $row['customer_id'];?>" style="text-decoration: none;">
        <div style="background: #0179F1;height: auto;border: 1px solid #D3D3D3;border-radius:10px;padding: 4%;">
            <div style="margin-bottom: 10%;">
                            <p style="float:left;width: auto;font-size: 18px;display: inline-block;margin:0;overflow: hidden;color: white;"><?php echo  "CUSTRK-".$row['customer_id'] ; ?></p>
                            <span style="padding-right:1%;float:right;width: auto;font-size: 14px;display: inline-block;margin:0;overflow: hidden;color: white;"> <i class="fa fa-unlock" aria-hidden="true" style="color: white;"></i></span>
            </div>
            <p style="font-size: 14px;display: inline-block;margin:0;overflow:hidden;color: white;"><?php echo  $row['address'] ;?></p><br>
            <p style="font-size: 12px;display: inline-block;margin:0;overflow:hidden;color: white;"><?php echo  $row['Name'] ; ?> | status: <?php echo  $row['status'] ; ?></p><br>
            <p style="font-size: 12px;display: inline-block;margin:0;overflow:hidden;color: white;"><?php echo  $row['date'] ; ?> | <?php echo  $row['time'] ; ?></p>
        </div>
        </a>

        <?php } ?>

     </div>
     
     <div style="background: #D3D3D3;height: 1px;width: 90%;margin-right: 5%;margin-left: 5%;margin-top: 10%;display: inline-block">


     <div style="margin-top: 5%;margin-left: 0%;color: black;display: inline-block;">
        <span style="font-weight: bold;font-size: 22px;">Completed</span>
        
     </div>

     <div style="margin-top: 1%;margin-left: 0%;font-size: 12px;color: #868686;">
        <span>
         Completed Job Orders for Today.</span>
     </div>

     <div style="background: white; margin-left: 0%; margin-right: 0%;width: auto;margin-top: 5%;padding-bottom: 10%;">

     <?php
     require 'Admin/database_config.php';

     $query = "Select * from job_list where worker_name = 1;";
     $query_run = mysqli_query($connection, $query);
     $check_job_orders = mysqli_num_rows($query_run) > 0;
     $customer_ID = "";

     if($check_job_orders == 0){
         echo "No completed work in the moment.";
     }

       while($row = mysqli_fetch_array($query_run)){
         $customer_ID = $row['customer_id'];
       
     $query_s = "Select * from customer where customer_id = $customer_ID order by STR_TO_DATE(time, '%l:%i %p');";
     $query_run_s = mysqli_query($connection, $query_s);
     $check_job_orders_s = mysqli_num_rows($query_run_s) > 0;  
     
     while($row = mysqli_fetch_array($query_run_s)){
       if($row['status'] == "complete" && $row['date'] == $current_date_now){
     ?>
     <!-- LINK: CC-Service_Worker_Job_Listing_Que.php?job_id=<?php echo  $row['customer_id'];?>-->
      <a onclick="display_page_Loading()" href="CC-Edittable-TrackerForm.php?job_listing_id=<?php echo $row['customer_id'];?>&return_link=dashboard" style="text-decoration: none;">
        <div style="background: #2B2B2B;height: auto;border: 1px solid black;border-radius:10px;padding: 4%;display: block;margin-top:0.5%;">
        <div style="margin-bottom: 10%;">
                            <p style="float:left;width: auto;font-size: 18px;display: inline-block;margin:0;overflow: hidden;color: white;"><?php echo  "CUSTRK-".$row['customer_id'] ; ?></p>
                            <span style="padding-right:1%;float:right;width: auto;font-size: 14px;display: inline-block;margin:0;overflow: hidden;color: white;"> <i class="fa fa-unlock" aria-hidden="true" style="color: white;"></i></span>
                            <span style="padding-right:2%;float:right;width: auto;font-size: 14px;display: inline-block;margin:0;overflow: hidden;color: white;"> <i class="fa fa-user" aria-hidden="true" style="display: block;color: white;"></i></span>
                          </div>
            <p style="font-size: 14px;display: inline-block;margin:0;overflow:hidden;color: white;"><?php echo  $row['address'] ;?></p><br>
            <p style="font-size: 12px;display: inline-block;margin:0;overflow:hidden;color: white;"><?php echo  $row['Name'] ; ?> | status: <?php echo  $row['status'] ; ?></p><br>
            <p style="font-size: 12px;display: inline-block;margin:0;overflow:hidden;color: white;"><?php echo  $row['date'] ; ?> | <?php echo  $row['time'] ; ?> | Edittable</p>
        </div>
        </a>
        <?php 
              }//if closing
              else{

              }
      }} ?>
</div>


<div style="background: #D3D3D3;height: 1px;width: 90%;margin-right: 5%;margin-left: 5%;margin-top: 5%;display: block"></div>

<div style="margin-top: 5%;margin-left: 0%;color: black;display: inline-block;">
        <span style="font-weight: bold;font-size: 22px;">Cancelled</span>
        
     </div>

     <div style="margin-top: 1%;margin-left: 0%;font-size: 12px;color: #868686;">
        <span>
         Cancelled job orders.</span>
     </div>

     <div style="background: white; margin-left: 0%; margin-right: 0%;width: auto;margin-top: 5%;padding-bottom: 10%;">

     <?php
     require 'Admin/database_config.php';

     $query = "Select * from job_list where worker_name = 1;";
     $query_run = mysqli_query($connection, $query);
     $check_job_orders = mysqli_num_rows($query_run) > 0;
     $customer_ID = "";

     if($check_job_orders == 0){
         echo "No completed work in the moment.";
     }

      while($row = mysqli_fetch_array($query_run)){
         $customer_ID = $row['customer_id'];
       
     $query_s = "Select * from customer where customer_id = $customer_ID order by STR_TO_DATE(time, '%l:%i %p');";
     $query_run_s = mysqli_query($connection, $query_s);
     $check_job_orders_s = mysqli_num_rows($query_run_s) > 0;  
     
     while($row = mysqli_fetch_array($query_run_s)){
       if($row['status'] == "cancelled" && $row['date'] == $current_date_now){
     ?>
     <!-- LINK: CC-Service_Worker_Job_Listing_Que.php?job_id=<?php echo  $row['customer_id'];?>-->
      <a onclick="display_page_Loading()" href="CC-Service_Worker_Job_Listing_Que.php?job_id=<?php echo $row['customer_id'];?>" style="text-decoration: none;">
        <div style="background: #FF3C49;height: auto;border: 1px solid #FF3C49;border-radius:10px;padding: 4%;display: block;margin-top:0.5%;">
        <div style="margin-bottom: 10%;">
                            <p style="float:left;width: auto;font-size: 18px;display: inline-block;margin:0;overflow: hidden;color: white;"><?php echo  "CUSTRK-".$row['customer_id'] ; ?></p>
                            <span style="padding-right:1%;float:right;width: auto;font-size: 14px;display: inline-block;margin:0;overflow: hidden;color: white;"> <i class="fa fa-unlock" aria-hidden="true" style="color: white;"></i></span>
                            <span style="padding-right:2%;float:right;width: auto;font-size: 14px;display: inline-block;margin:0;overflow: hidden;color: white;"> <i class="fa fa-user" aria-hidden="true" style="display: block;color: white;"></i></span>
                          </div>
            <p style="font-size: 14px;display: inline-block;margin:0;overflow:hidden;color: white;"><?php echo  $row['address'] ;?></p><br>
            <p style="font-size: 12px;display: inline-block;margin:0;overflow:hidden;color: white;"><?php echo  $row['Name'] ; ?> | status: <?php echo  $row['status'] ; ?></p><br>
            <p style="font-size: 12px;display: inline-block;margin:0;overflow:hidden;color: white;"><?php echo  $row['date'] ; ?> | <?php echo  $row['time'] ; ?> | Edittable</p>
        </div>
        </a>
        <?php 
              }//if closing
              else{

              }
      }} ?>
</div>
     




    </body>
    <script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>



<!-- FOR DATE -->

<script>

function display_page_Loading(){
  document.getElementById("loader_visuals").style.display = "block";
  setTimeout(() => { 
    document.getElementById("loader_visuals").style.display = "none";
    alert("You may be experiencing slow connections.");

  }, 15000);
}

window.onload = function(){
  document.getElementById("loader_visuals").style.display = "none";
 
}

</script>
</html>