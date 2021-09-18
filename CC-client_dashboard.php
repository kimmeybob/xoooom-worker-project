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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <link rel="icon" href="images/logo.png">
        
    </head>
   
    <style>

/** Collapse */
.collapsible {
  background-color: #007AFF;
  color: white;
  cursor: pointer;
  padding: 10px;
  width: 100%;
  border: none;
  text-align: left;
  font-weight: bold;
  outline: none;
  font-size: 14px;
}

.active, .collapsible:hover {
  background-color: #007AFF;

}

.content {
  padding: 0 1px;
  display: none;
  overflow: hidden;
  background-color: white;
}

/** MODAL STYLES */
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 15%; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  /* overflow: auto; Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  
}

/* Modal Content */
.modal-content {
  position: relative;
  height: 80%;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 80%;
  overflow-y: auto;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {bottom:-300px; opacity:0} 
  to {bottom:0; opacity:1}
}

@keyframes animatetop {
  from {bottom:-300px; opacity:0}
  to {bottom:0; opacity:1}
}

/* The Close Button */
.close {
  color: #0279F6;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding: 2px 16px;
  background-color: white;
  
}

.modal-body {padding: 2px 16px;}

.modal-footer {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}

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
    padding: 0px;
   
  
}
}
/************************************************************************************
smaller than 560
*************************************************************************************/
@media screen and (max-width: 480px) {
  body{
    width: 100%;
    margin: 0 auto;
    padding: 0px;
   
  }
}
    </style>

    <body>

    <!-- The Modal Mixed with Collapsable -->
<div id="myModal" class="modal" style="border-radius: 0px;">

<!-- Modal content -->
<div class="modal-content" style="background: white;">
              <div class="modal-header" style="">
              <br>
                <span class="close">&times;</span>
                <h2 style="">Service/Commissions <br>Job Order Billing </h2>
                
                <p style="font-size: 16px; color: grey;overflow: hidden; display: block;margin: 0;" id="service_ref_container">Reference Number:</p>
                <p style="font-size: 16px; color: grey;overflow: hidden; display: block;margin: 0;" id="service_date">Transaction Date:</p>
                <!-- <p style="display: block;overflow: hidden;"><a href="#" style="text-decoration: none; color: white;" ><div style="background: #0179F1;color: white;border: 1px solid #0179F1;width:45%;float: left;text-align: center;padding: 10px 5px;border-radius: 20px;font-weight: bold;">Product Billing</div></a><a class="collapsible"href="#" style="text-decoration: none; color: white;"><div style="background: #8E8E93;color: white;border: 1px solid #8E8E93;width:45%;float: right;text-align: center;padding: 10px 5px;border-radius: 20px;font-weight:bold;" >Service Billing</div></a></p>
                <br> -->
                <br>
                
                      <button type="button" style="margin-bottom: 2%;" class="collapsible" id="collapsible_btn"><i class="fa fa-info-circle" style="font-size: 14px;"></i> Product Order Charges.</button>
                      
                      <div class="content" id="content">
                        <p style="font-size: 18px;font-weight: bold">Product Order Charges</p>
                        <p id="product_order_summary" style="font-size: 16px; color: grey;">Package_billing_summary</p>
                        <p id="service_commission_charges"></p>
                        <p>
                        <div style="width: 50%;float: left;font-size: 16px;font-weight: normal;">Subtotal Amount </div><div style="width: 50%;float: right;text-align: right;" id="products_subtotal_display"> 0</div><br>
                        <div style="width: 50%;float: left;font-size: 16px;font-weight: normal;" id="products_discount_percentage_display">Discount (0%)</div><div style="width: 50%;float: right;text-align: right;" id="products_discount_amount_display"> 0</div><br>
                        <div style="width: 60%;float: left;font-size: 16px;font-weight: normal;" >Manager's Discount</div><div style="width: 40%;float: right;text-align: right;" id="products_managers_amount_display"> 0</div><br>
                            
              
                            <div style="width: 50%;float: left;font-size: 16px;font-weight: normal;">VAT</div><div style="width: 50%;float: right;text-align: right;" id="products_vat_display"> 0</div><br>
                          

                            <div style="width: 50%;float: left;font-size: 18px;font-weight: bold;padding-bottom: 2%;">Product Total</div><div style="width: 50%;float: right;text-align: right;font-size: 18px;font-weight: bold;" id="products_total_display"> 0</div></p>
                    
                            
                        </p> <!-- Closing for service_billing charges-->
                                  </div>
                                  <p style="font-size: 14px; color: grey;overflow: hidden; display: in-block;margin: 0;margin-bottom: 5%;" id="hint_service_commissiont_labels">Service Job order is linked with a product order.</p>
                            
                
                <hr></hr> 
                
                <p style="font-size: 18px;font-weight: bold">Service Order Summary</p>
                <p style="font-size: 16px; color: grey;" id="service_summary_container">
                </p>
              </div>

  <div class="modal-body">
    
    <hr></hr> 
    
    <p style="display: block;overflow: hidden;">
    <span style="font-size: 18px;font-weight: bold;display: block;overflow: hidden;background: white;">Service Order Charges</span>
    <div style="width: 50%;float: left;font-size: 16px;font-weight: normal;">Subtotal Amount </div><div style="width: 50%;float: right;text-align: right;" id="service_subtotal_display"> 0</div><br>
    <!-- <hr></hr> -->
    <div style="width: 50%;float: left;font-size: 16px;font-weight: normal;" id="service_discount_percentage_display">Discount (0%)</div><div style="width: 50%;float: right;text-align: right;" id="service_discount_amount_display"> 0</div><br>
    <!-- <hr></hr> -->
    <div style="width: 60%;float: left;font-size: 16px;font-weight: normal;" >Manager's Discount</div><div style="width: 40%;float: right;text-align: right;" id="service_managers_amount_display"> 0</div><br>
    <div style="width: 50%;float: left;font-size: 16px;font-weight: normal;" >Additional Charges</div><div style="width: 50%;float: right;text-align: right;" id="service_others_amount_display"> 0</div><br>

    <div style="width: 50%;float: left;font-size: 16px;font-weight: normal;">VAT</div><div style="width: 50%;float: right;text-align: right;" id="service_vat_display"> 0</div><br>
    <!-- <hr></hr> -->
    <!-- <div style="background:white;border: 1px solid black; border-radius: 10px;padding: 5px 2.5px;"> -->
    <div style="width: 50%;float: left;font-size: 18px;font-weight: bold;">Service Total</div><div style="width: 50%;float: right;text-align: right;font-size: 18px;font-weight: bold;" id="service_total_display"> 0</div>
    <!-- </div> -->
    <br>
    <br>
    <hr></hr> 
    <br>
    <div style="width: 50%;float: left;font-size: 18px;font-weight: bold;">Grand Total</div><div style="width: 50%;float: right;text-align: right;font-size: 18px;font-weight: bold;" id="service_grand_total"> 0</div></p>
    <p style="font-size: 12px; color: grey;">Products and Service Orders Total billing.</p>
    <br>
    
  </div>
  <!-- <div class="modal-footer">
    <h3 style="text-align: center">OK</h3>
  </div> -->
</div>

</div>



    <div style="margin-top: 5%;margin-left: 2.5%;margin-right: 0%;width:97%;">
    
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  <a href="#" style="font-size: 12px;">Welcome <br><span style="font-size: 18px;color: white;">Xooom Detailer - 01<span></a>
  <br>
  <br>
 
  <a style="color: white;color: #282828;pointer-event: none;cursor: default;" href="#">My Queue</a>
  <a onclick="display_page_Loading()" style="color: white;" href="CC-client_dashboard_all_orders.php">All Jobs</a>
  <a onclick="display_page_Loading()" style="color: white;" href="CC-client_dashboard_all_products.php">All Products</a>
  <a style="color: #282828;pointer-event: none;cursor: default;" href="#">Logout (Disabled)</a>
  <br>
  <br><a href="#" style="color: #818181;font-size: 12px;">C-Dash Rev 1.2-7.9.21</a>
</div>

<!-- LOADER DIV -->
<div style=" display: block;background: black;top:0;left: 0; position:fixed;z-index: 10;width: 100%;height: 100%;margin: 0;opacity: 0.95;" id="loader_visuals" class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>

<span style="font-size:26px;cursor:pointer;background: white;" onclick="openNav()">&#9776;&nbsp&nbsp <span style="font-size: 22px;font-weight: bold;background: white;color: black;">XOOOOM AUTOSPA</span></span>
           
     </div>

     <div style="background: #D3D3D3;height: 1px;width: 98%;margin-top: 5%;">
     </div>
    
     <div id="not_chrome_block" style="display:none;background: #1E1E1E;color: white;overflow: hidden;margin: 0px;">
     <p style="margin-left: 5%;"><i class="fa fa-chrome" aria-hidden="true"></i> <span style="font-size: 12px;"> &nbsp;For best user experience, Please use <u>Google Chrome</u>.</span></p> 
    
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
    
            <a onclick="display_page_Loading()" href="https://xoooomautospafleet.com/"><span style="background: white;color: black;font-size: 14px;padding-top: 5%;padding-bottom: 5%;margin: auto;border: 1px solid #CBCBCB;height: auto;width: 49%;float: left;display: inline-block;border-radius: 100px;text-align: center;font-weight: bold;">CUSTOMER BOOKING</span></a>
           <!-- LINK: CC-ProductPurchaseTrackerForm.php?job_listing_id=<?php echo "0";?>-->
            <a onclick="display_page_Loading()" href="CC-ProductPurchaseTrackerForm.php?job_listing_id=0"><span style="background: white;color: black;font-size: 14px;padding-top: 5%;padding-bottom: 5%;text-align: center;border: 1px solid #CBCBCB;height: auto;width: 47%;float: right;display: inline-block;border-radius: 100px;font-weight: bold;">ORDER PRODUCT</span></a>
      
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

  



<!-- /** LOGIC for listing here */ -->

     <!-- RT_Func_one (In-Progress)-->
     <div class="in_progress_container" style="background: white; margin-left: 5%; margin-right: 5%;width: auto;margin-top: 5%;padding-bottom: 2%;">
     <?php include 'RT_Func_one.php'?>

      
     </div>

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

     <div class="free_job_order_container" style="background: white; margin-left: 5%; margin-right: 5%;width: auto;margin-top: 5%;padding-bottom: 2%;">
        <?php include 'RT_Func_two.php'?>
        

     </div>
     
     <div style="background: #D3D3D3;height: 1px;width: 90%;margin-right: 5%;margin-left: 5%;margin-top: 10%;display: inline-block">


     <div style="margin-top: 5%;margin-left: 0%;color: black;display: inline-block;">
        <span style="font-weight: bold;font-size: 22px;">Completed</span>
        
     </div>

     <div style="margin-top: 1%;margin-left: 0%;font-size: 12px;color: #868686;">
        <span>
         Completed Job Orders for Today.</span>
     </div>

     <div class="completed_job_order_container" style="background: white; margin-left: 0%; margin-right: 0%;width: auto;margin-top: 5%;padding-bottom: 10%;">
       <?php include 'RT_Func_three.php'?>
        
    </div>


<div style="background: #D3D3D3;height: 1px;width: 100%;margin-right: 0%;margin-left: 0%;margin-top: 5%;display: inline-block"></div>


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
         echo "No cancelled job orders.";
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
                  <p style="font-size: 14px;display: inline-block;margin:0;overflow:hidden;color: white;font-weight: bold"><?php echo  $row['address'] ;?></p><br>
                  <p style="font-size: 14px;display: inline-block;margin:0;overflow:hidden;color: white;font-weight: bold"><?php echo  $row['contactNum'] ; ?> | <?php echo  $row['Name'] ;?></p><br>
                  <p style="font-size: 12px;display: inline-block;margin:0;overflow:hidden;color: white;font-weight: bold"><?php echo  $row['date'] ; ?> | <?php echo  $row['time'] ; ?></p>
          </div>
        </a>
        <?php 
              }//if closing
              else{

              }
      }} ?>
</div>
     




    </body>

<script type="text/javascript">
  
  $(function(){
      //Do something every *5 seconds
      setInterval(function(){
        $.ajax({
          url:'RT_Func_one.php',
          success:function(res){
              $('.in_progress_container').html(res);  
          }
        })
        $.ajax({
          url:'RT_Func_two.php',
          success:function(res){
              $('.free_job_order_container').html(res);  
          }
        })
        $.ajax({
          url:'RT_Func_three.php',
          success:function(res){
              $('.completed_job_order_container').html(res);  
          }
        })
      },2500);
  })

</script>

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
var coll = document.getElementsByClassName("collapsible");

var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  
}
</script>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
// btn.onclick = function() {
 

//   

// }

//set all information to holders.
function setDataToModal(customer_id_temp_holder,Service_ordered,service_discount_percentage,service_discount_amount,service_others_amount
,service_vat,service_total,service_date,items_ordered,products_subtotal,products_discount_percentage,products_discount_amount
,products_vat,products_total){
  
  //Opens Modal Display
  modal.style.display = "block";

  //Service Modal Details
  document.getElementById("service_ref_container").innerHTML = "";
  document.getElementById("service_ref_container").innerHTML = "CUSTRK Ref#: "+customer_id_temp_holder;

  document.getElementById("service_summary_container").innerHTML = "";
  document.getElementById("service_summary_container").innerHTML = Service_ordered;

  service_discount_amount_computed = parseInt(service_discount_amount.replace(/[^0-9]/g, ''));

  document.getElementById("service_subtotal_display").innerHTML = "";
  document.getElementById("service_subtotal_display").innerHTML = (parseInt(service_total) - parseInt(service_others_amount))+service_discount_amount_computed;


  var service_discount_percentage_value = "0%";

  if(service_discount_percentage === "none"){
    service_discount_percentage_value = "0%";
  
  }else if(service_discount_percentage === "ten"){
    service_discount_percentage_value = "10%";
  
  }else if(service_discount_percentage === "twenty"){
    service_discount_percentage_value = "20%";
  
  }else if(service_discount_percentage === "thirty"){
    service_discount_percentage_value = "30%";

  }else if(service_discount_percentage === "forty"){
    service_discount_percentage_value = "40%";
    
  }else if(service_discount_percentage === "fifty"){
    service_discount_percentage_value = "50%";
   
  }else if(service_discount_percentage === "sixty"){
    service_discount_percentage_value = "60%";
    
  }else if(service_discount_percentage === "seventy"){
    service_discount_percentage_value = "70%";
 
  }else if(service_discount_percentage === "eighty"){
    service_discount_percentage_value = "80%";
    
  }else if(service_discount_percentage === "ninety"){
    service_discount_percentage_value = "90%";
   
  }else if(service_discount_percentage === "onehundred"){
    service_discount_percentage_value = "100%";
  
  }

  document.getElementById("service_discount_percentage_display").innerHTML = "";
  document.getElementById("service_discount_percentage_display").innerHTML = "Discount ("+service_discount_percentage_value+")";

  document.getElementById("service_discount_amount_display").innerHTML = "";
  document.getElementById("service_discount_amount_display").innerHTML = parseInt(service_discount_amount.replace(/[^0-9]/g, ''));

  document.getElementById("service_others_amount_display").innerHTML = "";
  document.getElementById("service_others_amount_display").innerHTML = service_others_amount;

  document.getElementById("service_vat_display").innerHTML = "";
  document.getElementById("service_vat_display").innerHTML = service_vat;

  document.getElementById("service_total_display").innerHTML = "";
  document.getElementById("service_total_display").innerHTML = service_total;

  document.getElementById("service_date").innerHTML = "";
  document.getElementById("service_date").innerHTML = "Transaction Date: "+service_date;

  //Product Modal Details
    if(parseInt(products_total) === 0 || parseInt(products_total) == 0){
      document.getElementById("collapsible_btn").style.display = "none";
     document.getElementById("hint_service_commissiont_labels").innerHTML = "<i class='fa fa-info-circle' style='font-size: 14px;'></i> Service order does not have a product order.";
    }else{
      document.getElementById('collapsible_btn').style.pointerEvents = 'auto';
      document.getElementById("collapsible_btn").style.display = "block";
      document.getElementById("hint_service_commissiont_labels").innerHTML = "Service Job order is linked with a product order.";
    }

  document.getElementById("product_order_summary").innerHTML = "";
  document.getElementById("product_order_summary").innerHTML = items_ordered;

  document.getElementById("products_subtotal_display").innerHTML = "";
  document.getElementById("products_subtotal_display").innerHTML = products_subtotal;

  var product_discount_percentage_value = "0%";

  if(products_discount_percentage	 === "none"){
    product_discount_percentage_value = "0%";

  }else if(products_discount_percentage === "ten"){
    product_discount_percentage_value = "10%";

  }else if(products_discount_percentage === "twenty"){
    product_discount_percentage_value = "20%";

  }else if(products_discount_percentage === "thirty"){
    product_discount_percentage_value = "30%";

  }else if(products_discount_percentage === "forty"){
    product_discount_percentage_value = "40%";
    
  }else if(products_discount_percentage === "fifty"){
    product_discount_percentage_value = "50%";
  
  }else if(products_discount_percentage === "sixty"){
    product_discount_percentage_value = "60%";
    
  }else if(products_discount_percentage === "seventy"){
    product_discount_percentage_value = "70%";

  }else if(products_discount_percentage === "eighty"){
    product_discount_percentage_value = "80%";
    
  }else if(products_discount_percentage === "ninety"){
    product_discount_percentage_value = "90%";
  
  }else if(products_discount_percentage === "onehundred"){
    product_discount_percentage_value = "100%";

  }

  document.getElementById("products_discount_percentage_display").innerHTML = "";
  document.getElementById("products_discount_percentage_display").innerHTML = "Discount ("+product_discount_percentage_value+")";

  document.getElementById("products_discount_amount_display").innerHTML = "";
  document.getElementById("products_discount_amount_display").innerHTML = products_discount_amount;

  document.getElementById("products_vat_display").innerHTML = "";
  document.getElementById("products_vat_display").innerHTML = products_vat;

  document.getElementById("products_total_display").innerHTML = "";
  document.getElementById("products_total_display").innerHTML = products_total;

  document.getElementById("service_grand_total").innerHTML = "";
  document.getElementById("service_grand_total").innerHTML = parseInt(service_total)+parseInt(products_total);

}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
  setContentDisplayToHidden();
  
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

function setContentDisplayToHidden(){
  document.getElementById("content").style.display = "none";
}
</script>

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
  clearLocalStorage();
 
}

function clearLocalStorage(){
  localStorage.clear();
}

</script>
</html>