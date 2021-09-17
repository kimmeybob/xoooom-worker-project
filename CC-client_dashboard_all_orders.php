<?php 
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    
    if($_POST){
        date_default_timezone_set('Asia/Manila');
        $raw_date = $_POST['filter_date'];
        $date = $raw_date;
        $date = explode('-', $date);
        $month = $date[1];
        $day   = $date[2];
        $year  = $date[0];

        $final_date = $month."/".$day."/".$year;
        //echo $final_date;
        // echo "Date Set: ".$raw_date;
        // echo "<br>Month: ".$month;
        // echo "<br>Day: ".$day;
        // echo "<br>Year: ".$year;
    }else{
        date_default_timezone_set('Asia/Manila');
        //echo "Date not Set";
        $final_date = date("m/d/Y");
         
    }

    ?>
<html>
    <head>
        <title>Xoom Customer Carwash Booking Service</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="icon" href="images/logo.png">
       <!-- <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <script type='text/javascript' src='script.js'></script> -->  
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
  background-color: #f1f1f1;
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
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  
}

/* Modal Content */
.modal-content {
  position: relative;
  height: 80%;
  overflow-y: auto;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 80%;
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

    <body onload="Preload_Functions()">

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
                      
                        <div style="width: 60%;float: left;font-size: 16px;font-weight: normal;">Manager's Discount</div><div style="width: 40%;float: right;text-align: right;" id="products_managers_discount_display"> 0</div><br>
              
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

    <div style="width: 60%;float: left;font-size: 16px;font-weight: normal;" >Manager's Discount</div><div style="width: 40%;float: right;text-align: right;" id="service_managers_discount"> 0</div><br>


    <div style="width: 50%;float: left;font-size: 16px;font-weight: normal;" >Others Amount</div><div style="width: 50%;float: right;text-align: right;" id="service_others_amount_display"> 0</div><br>

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





    <div style="margin-top: 5%;margin-left: 2.5%;margin-right: 0%;width:80%;">
   
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  <a href="#" style="font-size: 12px;">Welcome <br><span style="font-size: 18px;color: white;">Xooom Detailer - 01<span></a>
  <br>
  <br>
 
  <a onclick="display_page_Loading()" style="color: white;" href="CC-client_dashboard.php">My Queue</a>
  <a style="color: #282828;pointer-event: none;cursor: default;" href="#">All Jobs</a>
  <a onclick="display_page_Loading()" style="color: white;" href="CC-client_dashboard_all_products.php">All Products</a>
  <a style="color: #282828;pointer-event: none;cursor: default;" href="#">Logout (Disabled)</a>
  <br>
  <br><a href="#" style="color: #818181;font-size: 12px;">C-Dash Rev 1.2-7.9.21</a>
</div>


<div style=" display: block;background: black;top:0;left: 0; position:fixed;z-index: 10;width: 90%;height: 100%;margin: 0;opacity: 0.95;" id="loader_visuals" class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>

<span style="font-size:26px;cursor:pointer;background: white;" onclick="openNav()">&#9776;&nbsp&nbsp <span style="font-size: 22px;font-weight: bold;background: white;">Xoooom Service Client</span></span>
           
     </div>

     <div style="background: #D3D3D3;height: 1px;width: 100%;margin-top: 5%;">
     </div>

<div style="display: none;">
     <div>
        <p  style="margin:0;overflow: hidden;margin-left: 5%;margin-top: 5%;display: inline-block;" id="weekday_holder"></p>
     </div>

     <div>
        <span style="display: inline-block;margin:0;overflow: hidden;margin-top: 1%;margin-left: 5%;font-size: 22px;font-weight: bold;" id="fulld_date_holder">Today</span>
     </div>

     <div style="margin-top: 5%;margin-left: 5%;font-size: 18px;">
        <span>Service Worker Dashboard</span>
     </div>

     <div style="margin-top: 2%;margin-left: 5%;font-size: 12px;color: #868686;display: inline-block;">
        <span >Manage Job Orders submitted by your customers.</span>
     </div>


     <div style="background: #D3D3D3;height: 1px;width: 100%;margin-top: 5%;display: inline-block">
     </div>

</div>

     <div style="margin-top: 5%;margin-left: 5%;color: black">
        <span style="font-weight: bold;font-size: 22px;">Job Orders</span>
     </div>


     <div style="margin-top: 2%;margin-left: 5%;font-size: 12px;color: #868686">
        <span>
        All listed Job Orders.</span>
     </div>

     <div style="margin-top: 5%;margin-left: 5%;margin-right: 5%;color: #868686;width: 90%;background: white;padding-bottom: 0%;">
        <span>
        <form onsubmit="display_page_Loading()" action="CC-client_dashboard_all_orders.php" method="POST">
        <input onchange="enable_submit_button()" style="background:white;padding-left: 3%;padding-right: 3%;width: 70%;height: 5%;border: 1px solid lightgray;border-radius: 100px;" type="date" id="filter_date" name="filter_date" required>
        <input id="subtmit_btn" style="width: 28%;background: darkgray;border:1px solid darkgray;height: 5%;border-radius: 100px;color: white;font-weight: bold;" disabled="true" type="submit" value="Confirm">
        </form>
     </div>

     <div style="margin-top: 0%;margin-left: 5%;margin-right: 5%;color: #868686;width: 90%;background: white;padding-bottom: 1%;font-size: 14px;padding-bottom: 1%;">
        <p>Find Job orders based on specific dates.</p>
     </div>

     <div style="background: #D3D3D3;height: 1px;width: 100%;margin-top: 2%;">
     </div>

  
     <div style="margin-top: 5%;margin-left: 5%;color: black">
        <span style="font-weight: bold;font-size: 22px;">Results</span>
     </div>
     
<?php

/** LOGIC for listing here */

?>
     <div style="background: white; margin-left: 5%; margin-right: 5%;width: auto;margin-top: 2%;padding-bottom: 2%;">

        <!-- Recycleable Layout Cards --->
        <?php 
           require 'Admin/database_config.php';
           
            $query_s = "Select * from customer where date = '$final_date' order by STR_TO_DATE(time, '%l:%i %p');";
            $query_run_s = mysqli_query($connection, $query_s);
            $check_job_orders_s = mysqli_num_rows($query_run_s) > 0;  
            $card_color = "#49D260"; //card color is green
            

            //Variables for Service COmmissions Order details and Product Order details
            $customer_id_temp_holder = 0;
            $Service_ordered = "";
            $Service_subtotal = 0;
            $service_discount_percentage = "";
            $service_discount_amount = 0;
            $service_others_amount = 0;
            $service_vat = 0;
            $service_total = 0;
            $service_personnel = "";
            $service_partner = "";
            $service_date = "";

            //Collapseable data for products charges and summary
            $items_ordered = "";
            $product_commission_id = 0;
            $products_subtotal = 0;
            $products_discount_percentage = "";
            $products_discount_amount = 0;
            $products_vat = 0;
            $products_total = 0;


            if(mysqli_num_rows($query_run_s) == 0){
                echo "<p style='color: #656565;font-size: 14px;'>No Job Orders found on $final_date.</p>";
            }else{
            ?>

        <div style="margin-top: 1%;margin-left: 0%;margin-right: 0%;color: #868686;width: 90%;background: white;padding-bottom: 1%;font-size: 14px;padding-bottom: 1%;">
            <p>Showing results for Service Transactions</p>
        </div>

            <?php
            }
            

            while($row = mysqli_fetch_array($query_run_s)){
              $customer_id_temp_holder = $row['customer_id'];

                if($row['status'] == "in-progress"){
                    $card_color = "#2AA965";
                }else if($row['status'] == "waiting"){
                    $card_color = "#0179F1";
                }else if($row['status'] == "complete"){ 
                    $card_color = "#2B2B2B";
                }else if($row['status'] == "cancelled"){ 
                    $card_color = "#FF3C49";
                }

              
                //Checks if date is equal to current date,
                if($row['date'] == date("m/d/Y")){
                    if($row['status'] == "waiting"){
                       
                    ?>
                        <a onclick="display_page_Loading()" href="CC-Service_Worker_Job_Listing_Que.php?job_id=<?php echo  $row['customer_id'];?>&return_link=all_dashboard" style="text-decoration: none;">
                            <div style="background: <?php echo $card_color;?>;height: auto;border: 1px solid white;border-radius:10px;padding: 4%;display: block;margin-top:1%;">
                            <div style="margin-bottom: 10%;">
                            <p style="float:left;width: auto;font-size: 18px;display: inline-block;margin:0;overflow: hidden;color: white;"><?php echo  "CUSTRK-".$row['customer_id'] ; ?></p>
                            <span style="padding-right:1%;float:right;width: auto;font-size: 14px;display: inline-block;margin:0;overflow: hidden;color: white;"> <i class="fa fa-unlock" aria-hidden="true" style="color: white;"></i></span>
                            </div>
                            <p style="font-size: 14px;display: inline-block;margin:0;overflow:hidden;color: white;font-weight: bold;"><?php echo  $row['address'] ;?></p><br>
                            <p style="font-size: 12px;display: inline-block;margin:0;overflow:hidden;color: white;font-weight: bold;"><?php echo  $row['contactNum'] ; ?> | <?php echo  $row['Name'] ;?></p><br>
                            <p style="font-size: 12px;display: inline-block;margin:0;overflow:hidden;color: white;font-weight: bold;"><?php echo  $row['date'] ; ?> | <?php echo  $row['time'] ;?></p>
                            </div>
                        </a>
                    <?php
                    }else if($row['status'] == "complete"){

                      //Get Service Commission Details and Product details if has a linked product order.
                      $query_service_and_product_details = "select customer.customer_id,sc.commission_id, sc.date as sc_date, sc.personnel as sc_personnel, sc.partner, sc.size, sc.type, sc.plate, sc.discount as sc_discount,sc.discount_notes as sc_discount_notes, sc.additional_charge_type, sc.additional_notes, sc.discount_amount as sc_discount_amount, sc.others_amount, sc.vat as sc_vat, sc.total as sc_total, sc.time as sc_time,pc.product_commission_id, pc.date as pc_date, pc.personnel as pc_personnel, pc.note as pc_note, pc.customer_name as pc_customer,pc.customer_contact_number, pc.discount_percentage as pc_discount_percentage,pc.reason_promo as pc_reason_promo, pc.discount_value as pc_discount_value, pc.vat as pc_vat, pc.total as pc_total,pio.product_item_order_id, pio.product_name, pio.quantity, pio.subtotal as pio_subtotal from customer inner join service_commissions as sc on sc.cust_id = customer.customer_id left outer join product_commissions as pc on pc.cust_id = customer.customer_id left outer join product_item_orders as pio on pio.product_commission_id = pc.product_commission_id;";
                      $query_run_service_and_product_details = mysqli_query($connection, $query_service_and_product_details);
                      $check_service_and_product_details = mysqli_num_rows($query_run_service_and_product_details) > 0;  

                      while($sub_row = mysqli_fetch_array($query_run_service_and_product_details)){
                          //echo $sub_row["customer_id"];
                          if($row['customer_id'] == $sub_row["customer_id"]){
                              //Service Ordered
                              $Service_ordered = $sub_row["size"]." - ".$sub_row['type']." Package";
                              $service_discount_percentage = $sub_row["sc_discount"];
                              $service_discount_amount = $sub_row['sc_discount_amount'];
                              $service_others_amount = $sub_row['others_amount'];
                              $service_vat = $sub_row['sc_vat'];
                              $service_total = $sub_row['sc_total'];
                              $service_personnel = $sub_row['sc_personnel'];
                              $service_partner = $sub_row['partner'];
                              $service_date = $sub_row['sc_date'];


                                if($sub_row['product_commission_id'] == "NULL" || $sub_row['product_commission_id'] == null){
                                  $items_ordered = "";
                                  $products_subtotal = 0;
                                  $products_discount_percentage = "";
                                  $products_discount_amount = 0;
                                  $products_vat = 0;
                                  $products_total = 0;
                                  $product_commission_id = 0;
                      
                                }else{
                                  $items_ordered = $sub_row['pio_subtotal']." Php - ".$sub_row['product_name']." x".$sub_row['quantity']."<br>".$items_ordered;
                                  $products_subtotal = $products_subtotal + $sub_row['pio_subtotal'];
                                  $products_discount_percentage = $sub_row['pc_discount_percentage'];;
                                  $products_discount_amount = $sub_row['pc_discount_value'];;
                                  $products_vat = $sub_row['pc_vat'];
                                  $products_total = $sub_row['pc_total'];
                                  $product_commission_id = $sub_row['product_commission_id'];
                                }

                          }
                      }



                    ?>
                         <a onclick="display_page_Loading()" href="CC-Edittable-TrackerForm.php?job_listing_id=<?php echo  $row['customer_id'];?>&return_link=all_dashboard" style="text-decoration: none;">
                            <div style="background: <?php echo $card_color;?>;height: auto;border: 1px solid white;border-radius: 10px 10px 0 0;padding: 4%;display: block;margin-top:1%;">
                            <div style="margin-bottom: 10%;">
                            <p style="float:left;width: auto;font-size: 18px;display: inline-block;margin:0;overflow: hidden;color: white;"><?php echo  "CUSTRK-".$row['customer_id'];?></p>
                            <span style="padding-right:1%;float:right;width: auto;font-size: 14px;display: inline-block;margin:0;overflow: hidden;color: white;"> <i class="fa fa-unlock" aria-hidden="true" style="color: white;"></i></span>
                            <?php
                              if($product_commission_id == 0){

                              }else{
                            ?>
                            <span style="padding-right:2%;float:right;width: auto;font-size: 14px;display: inline-block;margin:0;overflow: hidden;color: white;"> <i class="fa fa-flask" aria-hidden="true" style="display: block;color: white;"></i></span>
                            <?php } ?>
                            
                            <?php 
                            $display = "none";

                            $query_job_list = "Select * from job_list where customer_id =".$row['customer_id']."&& worker_name = 1";
                            $query_run_jl = mysqli_query($connection, $query_job_list);
                            $check_job_jl= mysqli_num_rows($query_run_jl) > 0;
                
                             if(mysqli_num_rows($query_run_jl) == 0){
                                $display = "none";
                             }else{
                                $display = "block";
                             }
                            ?>
                        <span style="padding-right:2%;float:right;width: auto;font-size: 14px;display: inline-block;margin:0;overflow: hidden;color: white;"> <i class="fa fa-user" aria-hidden="true" style="display: <?php echo $display;?>;color: white;"></i></span>
            
                            </div>
                            <p style="font-size: 14px;display: inline-block;margin:0;overflow:hidden;color: white;font-weight: bold;">Serviced by: <?php echo $service_personnel; if($service_partner=="none"){ }else{echo " & ".$service_partner;}?></p><br>
                            <p style="font-size: 14px;display: inline-block;margin:0;overflow:hidden;color: white;font-weight: bold;"><?php echo  $row['address'] ;?></p><br>
                            <p style="font-size: 12px;display: inline-block;margin:0;overflow:hidden;color: white;font-weight: bold;"><?php echo  $row['contactNum'] ; ?> | <?php echo  $row['Name'] ;?></p><br>
                            <p style="font-size: 12px;display: inline-block;margin:0;overflow:hidden;color: white;font-weight: bold;"><?php echo  $row['date'] ; ?> | <?php echo  $row['time'] ;?></p>
                            </div>
                        </a>
                        
                        <a id="myBtn" onclick="setDataToModal('<?php echo $customer_id_temp_holder;?>','<?php echo $Service_ordered;?>','<?php echo $service_discount_percentage;?>','<?php echo $service_discount_amount;?>','<?php echo $service_others_amount;?>', '<?php echo $service_vat;?>','<?php echo $service_total;?>','<?php echo $service_date;?>','<?php echo $items_ordered;?>', '<?php echo $products_subtotal;?>','<?php echo $products_discount_percentage;?>','<?php echo $products_discount_amount;?>','<?php echo $products_vat;?>','<?php echo $products_total;?>')" >
                                <?php
                                  if($product_commission_id == 0 ){
                                ?> 
                                <div style="width: 91%; background: black;padding:0;border:1px solid #656565;border-radius: 0 0 10px 10px;margin-bottom: 2%;height: 30px;padding-left:4%;padding-right:4%;padding-top:3%;">
                                   <p style="display: inline-block;margin:0;overflow:hidden;color: white"><div style="font-weight: bold;font-size: 14px;float: left;display: block;width: 4\50%;color: white;"><i class="fa fa-info-circle" style="font-size: 14px;"></i> | No add-on products.</div> <div style="font-weight: bold;font-size: 14px;float: right;display: block;width: 50%;text-align: right;color: white;">Service Total: ₱<?php echo  $service_total;?></div></p><br>
                                <?php 
                                }else{
                                ?> 
                                 <div style="width: 91%; background: #0179F1;padding:0;border:1px solid #0A84FF;border-radius: 0 0 10px 10px;margin-bottom: 2%;height: 30px;padding-left:4%;padding-right:4%;padding-top:3%;">
                                   <p style="display: inline-block;margin:0;overflow:hidden;color: white"><div style="font-weight: bold;font-size: 14px;float: left;display: block;width: 4\50%;color: white;"><i class="fa fa-info-circle" style="font-size: 14px;"></i> | PROTRK ID: <?php echo  $product_commission_id ;?></div> <div style="font-weight: bold;font-size: 14px;float: right;display: block;width: 50%;text-align: right;color: white;">Service Total: ₱<?php echo $service_total;?></div></p><br>
                             
                                <?php 
                                }
                                ?>
                              </div> 
                        </a>
                    <?php
                    }else if($row['status'] == "cancelled"){
                       
                    ?>
                        <a onclick="display_page_Loading()" href="CC-Service_Worker_Job_Listing_Que.php?job_id=<?php echo $row['customer_id'];?>&return_link=all_dashboard" style="text-decoration: none;">
                            <div style="background: <?php echo $card_color;?>;height: auto;border: 1px solid white;border-radius:10px;padding: 4%;display: block;margin-top:1%;">
                            <div style="margin-bottom: 10%;">
                            <p style="float:left;width: auto;font-size: 18px;display: inline-block;margin:0;overflow: hidden;color: white;"><?php echo  "CUSTRK-".$row['customer_id'] ; ?></p>
                            <span style="padding-right:1%;float:right;width: auto;font-size: 14px;display: inline-block;margin:0;overflow: hidden;color: white;"> <i class="fa fa-lock" aria-hidden="true" style="color: white;"></i></span>
                            </div>
                            <p style="font-size: 14px;display: inline-block;margin:0;overflow:hidden;color: white;font-weight: bold;"><?php echo  $row['address'] ;?></p><br>
                            <p style="font-size: 12px;display: inline-block;margin:0;overflow:hidden;color: white;font-weight: bold;"><?php echo  $row['contactNum'] ; ?> | <?php echo  $row['Name'] ;?></p><br>
                            <p style="font-size: 12px;display: inline-block;margin:0;overflow:hidden;color: white;font-weight: bold;"><?php echo  $row['date'] ; ?> | <?php echo  $row['time'] ;?></p>
                            </div>
                        </a>
                    <?php
                    }else{
                        //Get Service Commission Details and Product details if has a linked product order.
                      $query_service_and_product_details = "select customer.customer_id,sc.commission_id, sc.date as sc_date, sc.personnel as sc_personnel, sc.partner, sc.size, sc.type, sc.plate, sc.discount as sc_discount,sc.discount_notes as sc_discount_notes, sc.additional_charge_type, sc.additional_notes, sc.discount_amount as sc_discount_amount, sc.others_amount, sc.vat as sc_vat, sc.total as sc_total, sc.time as sc_time,pc.product_commission_id, pc.date as pc_date, pc.personnel as pc_personnel, pc.note as pc_note, pc.customer_name as pc_customer,pc.customer_contact_number, pc.discount_percentage as pc_discount_percentage,pc.reason_promo as pc_reason_promo, pc.discount_value as pc_discount_value, pc.vat as pc_vat, pc.total as pc_total,pio.product_item_order_id, pio.product_name, pio.quantity, pio.subtotal as pio_subtotal from customer left outer join service_commissions as sc on sc.cust_id = customer.customer_id left outer join product_commissions as pc on pc.cust_id = customer.customer_id left outer join product_item_orders as pio on pio.product_commission_id = pc.product_commission_id;";
                      $query_run_service_and_product_details = mysqli_query($connection, $query_service_and_product_details);
                      $check_service_and_product_details = mysqli_num_rows($query_run_service_and_product_details) > 0;  
                   
                      while($sub_row = mysqli_fetch_array($query_run_service_and_product_details)){
               
                          if($row['customer_id'] == $sub_row["customer_id"]){
                        
                            if($sub_row['commission_id'] == "NULL" || $sub_row['commission_id'] == null ){
                            
                              $Service_ordered = "<i>In-Progress</i>";
                              $service_discount_percentage = "none";
                              $service_discount_amount = "0";
                              $service_others_amount = "0";
                              $service_vat = "0";
                              $service_total = "0";
                              $service_personnel = "none";
                              $service_partner = "none";
                              $service_date = $row['date'];
                            }else{
                             
                              $Service_ordered = $sub_row["size"]." - ".$sub_row['type']." Package";
                              $service_discount_percentage = $sub_row["sc_discount"];
                              $service_discount_amount = $sub_row['sc_discount_amount'];
                              $service_others_amount = $sub_row['others_amount'];
                              $service_vat = $sub_row['sc_vat'];
                              $service_total = $sub_row['sc_total'];
                              $service_personnel = $sub_row['sc_personnel'];
                              $service_partner = $sub_row['partner'];
                              $service_date = $sub_row['sc_date'];
                            }


                                if($sub_row['product_commission_id'] == "NULL" || $sub_row['product_commission_id'] == null){
                                  $items_ordered = "";
                                  $products_subtotal = 0;
                                  $products_discount_percentage = "";
                                  $products_discount_amount = 0;
                                  $products_vat = 0;
                                  $products_total = 0;
                                  $product_commission_id = 0;
                      
                                }else{
                                  $items_ordered = $sub_row['pio_subtotal']." Php - ".$sub_row['product_name']." x".$sub_row['quantity']."<br>".$items_ordered;
                                  $products_subtotal = $products_subtotal + $sub_row['pio_subtotal'];
                                  $products_discount_percentage = $sub_row['pc_discount_percentage'];;
                                  $products_discount_amount = $sub_row['pc_discount_value'];;
                                  $products_vat = $sub_row['pc_vat'];
                                  $products_total = $sub_row['pc_total'];
                                  $product_commission_id = $sub_row['product_commission_id'];
                                }

                          }
                      }
                    ?>

                        <a onclick="display_page_Loading()" href="CC-Service_Worker_Job_Listing_Que.php?job_id=<?php echo $row['customer_id'];?>&return_link=all_dashboardd" style="text-decoration: none;">
                            <div style="background: <?php echo $card_color;?>;height: auto;border: 1px solid white;border-radius: 10px 10px 0 0;padding: 4%;display: block;margin-top:1%;">
                            <div style="margin-bottom: 10%;">
                            <p style="float:left;width: auto;font-size: 18px;display: inline-block;margin:0;overflow: hidden;color: white;"><?php echo  "CUSTRK-".$row['customer_id'] ; ?></p>
                            <span style="padding-right:1%;float:right;width: auto;font-size: 14px;display: inline-block;margin:0;overflow: hidden;color: white;"> <i class="fa fa-lock" aria-hidden="true" style="color: white;"></i></span>
                            <?php
                              if($product_commission_id == 0){

                              }else{
                            ?>
                            <span style="padding-right:2%;float:right;width: auto;font-size: 14px;display: inline-block;margin:0;overflow: hidden;color: white;"> <i class="fa fa-flask" aria-hidden="true" style="display: block;color: white;"></i></span>
                            <?php } ?>
                            <?php 
                            $display = "none";

                            $query_job_list = "Select * from job_list where customer_id =".$row['customer_id']."&& worker_name = 1";
                            $query_run_jl = mysqli_query($connection, $query_job_list);
                            $check_job_jl= mysqli_num_rows($query_run_jl) > 0;
                
                             if(mysqli_num_rows($query_run_jl) == 0){
                                $display = "none";
                             }else{
                                $display = "block";
                             }
                            ?>
                        <span style="padding-right:2%;float:right;width: auto;font-size: 14px;display: inline-block;margin:0;overflow: hidden;color: white;"> <i class="fa fa-user" aria-hidden="true" style="display: <?php echo $display;?>;color: white;"></i></span>
            
                            </div>
                            <p style="font-size: 14px;display: inline-block;margin:0;overflow:hidden;color: white;font-weight: bold;"><?php echo  $row['address'] ;?></p><br>
                            <p style="font-size: 12px;display: inline-block;margin:0;overflow:hidden;color: white;font-weight: bold;"><?php echo  $row['contactNum'] ; ?> | <?php echo  $row['Name'] ;?></p><br>
                            <p style="font-size: 12px;display: inline-block;margin:0;overflow:hidden;color: white;font-weight: bold;"><?php echo  $row['date'] ; ?> | <?php echo  $row['time'] ;?> </p>
                            </div>
                        </a>

                        <a id="myBtn" onclick="setDataToModal('<?php echo $customer_id_temp_holder;?>','<?php echo $Service_ordered;?>','<?php echo $service_discount_percentage;?>','<?php echo $service_discount_amount;?>','<?php echo $service_others_amount;?>', '<?php echo $service_vat;?>','<?php echo $service_total;?>','<?php echo $service_date;?>','<?php echo $items_ordered;?>', '<?php echo $products_subtotal;?>','<?php echo $products_discount_percentage;?>','<?php echo $products_discount_amount;?>','<?php echo $products_vat;?>','<?php echo $products_total;?>')" >
                                <?php
                                  if($product_commission_id == 0 ){
                                ?> 
                                <div style="width: 91%; background: #2AA965;padding:0;border:1px solid #2AA965;border-radius: 0 0 10px 10px;margin-bottom: 2%;height: 30px;padding-left:4%;padding-right:4%;padding-top:3%;">
                                   <p style="display: inline-block;margin:0;overflow:hidden;color: white"><div style="font-weight: bold;font-size: 14px;float: left;display: block;width: 4\50%;color: white;"><i class="fa fa-info-circle" style="font-size: 14px;"></i> | No add-on products.</div> <div style="font-weight: bold;font-size: 14px;float: right;display: block;width: 50%;text-align: right;color: white;">Service Total: ₱<?php echo  $service_total;?></div></p><br>
                                <?php 
                                }else{
                                ?> 
                                 <div style="width: 91%; background: #0179F1;padding:0;border:1px solid #0A84FF;border-radius: 0 0 10px 10px;margin-bottom: 2%;height: 30px;padding-left:4%;padding-right:4%;padding-top:3%;">
                                   <p style="display: inline-block;margin:0;overflow:hidden;color: white"><div style="font-weight: bold;font-size: 14px;float: left;display: block;width: 4\50%;color: white;"><i class="fa fa-info-circle" style="font-size: 14px;"></i> | PROTRK ID: <?php echo  $product_commission_id ;?></div> <div style="font-weight: bold;font-size: 14px;float: right;display: block;width: 50%;text-align: right;color: white;">Service Total: ₱<?php echo $service_total;?></div></p><br>
                             
                                <?php 
                                }
                                ?>
                              </div> 
                        </a>
                        <?php
                    }

                    ?>
                    
                   

                    <?php
                }else{

                    //<i class="fa fa-lock" aria-hidden="true"></i>
                
        
           //Get Service Commission Details and Product details if has a linked product order.
                      $query_service_and_product_details = "select customer.customer_id,sc.commission_id, sc.date as sc_date, sc.personnel as sc_personnel, sc.partner, sc.size, sc.type, sc.plate, sc.discount as sc_discount,sc.discount_notes as sc_discount_notes, sc.additional_charge_type, sc.additional_notes, sc.discount_amount as sc_discount_amount, sc.others_amount, sc.vat as sc_vat, sc.total as sc_total, sc.time as sc_time,pc.product_commission_id, pc.date as pc_date, pc.personnel as pc_personnel, pc.note as pc_note, pc.customer_name as pc_customer,pc.customer_contact_number, pc.discount_percentage as pc_discount_percentage,pc.reason_promo as pc_reason_promo, pc.discount_value as pc_discount_value, pc.vat as pc_vat, pc.total as pc_total,pio.product_item_order_id, pio.product_name, pio.quantity, pio.subtotal as pio_subtotal from customer left outer join service_commissions as sc on sc.cust_id = customer.customer_id left outer join product_commissions as pc on pc.cust_id = customer.customer_id left outer join product_item_orders as pio on pio.product_commission_id = pc.product_commission_id;";
                      $query_run_service_and_product_details = mysqli_query($connection, $query_service_and_product_details);
                      $check_service_and_product_details = mysqli_num_rows($query_run_service_and_product_details) > 0;  
                   
                      while($sub_row = mysqli_fetch_array($query_run_service_and_product_details)){
               
                          if($row['customer_id'] == $sub_row["customer_id"]){
                        
                            if($sub_row['commission_id'] == "NULL" || $sub_row['commission_id'] == null ){
                            
                              $Service_ordered = "<i>In-Progress</i>";
                              $service_discount_percentage = "none";
                              $service_discount_amount = "0";
                              $service_others_amount = "0";
                              $service_vat = "0";
                              $service_total = "0";
                              $service_personnel = "none";
                              $service_partner = "none";
                              $service_date = $row['date'];
                            }else{
                             
                              $Service_ordered = $sub_row["size"]." - ".$sub_row['type']." Package";
                              $service_discount_percentage = $sub_row["sc_discount"];
                              $service_discount_amount = $sub_row['sc_discount_amount'];
                              $service_others_amount = $sub_row['others_amount'];
                              $service_vat = $sub_row['sc_vat'];
                              $service_total = $sub_row['sc_total'];
                              $service_personnel = $sub_row['sc_personnel'];
                              $service_partner = $sub_row['partner'];
                              $service_date = $sub_row['sc_date'];
                            }


                                if($sub_row['product_commission_id'] == "NULL" || $sub_row['product_commission_id'] == null){
                                  $items_ordered = "";
                                  $products_subtotal = 0;
                                  $products_discount_percentage = "";
                                  $products_discount_amount = 0;
                                  $products_vat = 0;
                                  $products_total = 0;
                                  $product_commission_id = 0;
                      
                                }else{
                                  $items_ordered = $sub_row['pio_subtotal']." Php - ".$sub_row['product_name']." x".$sub_row['quantity']."<br>".$items_ordered;
                                  $products_subtotal = $products_subtotal + $sub_row['pio_subtotal'];
                                  $products_discount_percentage = $sub_row['pc_discount_percentage'];;
                                  $products_discount_amount = $sub_row['pc_discount_value'];;
                                  $products_vat = $sub_row['pc_vat'];
                                  $products_total = $sub_row['pc_total'];
                                  $product_commission_id = $sub_row['product_commission_id'];
                                }

                          }
                      }
                    ?>
        <a onclick="display_page_Loading()" href="#" style="text-decoration: none;pointer-events: none;cursor: dafault;">
        <div style="background: darkgray;height: auto;border: 1px solid white;border-radius:10px 10px 0 0;padding: 4%;display: block;margin-top:1%;">
            <div style="margin-bottom: 10%;">
            <p style="float:left;width: auto;font-size: 18px;display: inline-block;margin:0;overflow: hidden;color: white;"><?php echo  "CUSTRK-".$row['customer_id'] ; ?></p>
            <span style="padding-right:1%;float:right;width: auto;font-size: 14px;display: inline-block;margin:0;overflow: hidden;color: white;"> <i class="fa fa-lock" aria-hidden="true" style="color: white;"></i></span>
            <?php 
                $display = "none";

                $query_job_list = "Select * from job_list where customer_id =".$row['customer_id']."&& worker_name = 1";
                $query_run_jl = mysqli_query($connection, $query_job_list);
                $check_job_jl= mysqli_num_rows($query_run_jl) > 0;
                
                if(mysqli_num_rows($query_run_jl) == 0){
                    $display = "none";
                }else{
                    $display = "block";
                }
            ?>
             <?php
                              if($product_commission_id == 0){

                              }else{
                            ?>
                            <span style="padding-right:2%;float:right;width: auto;font-size: 14px;display: inline-block;margin:0;overflow: hidden;color: white;"> <i class="fa fa-flask" aria-hidden="true" style="display: block;color: white;"></i></span>
                            <?php } ?>
            <span style="padding-right:2%;float:right;width: auto;font-size: 14px;display: inline-block;margin:0;overflow: hidden;color: white;"> <i class="fa fa-user" aria-hidden="true" style="display: <?php echo $display;?>;color: white;"></i></span>
            
            </div>
            <p style="font-size: 14px;display: inline-block;margin:0;overflow:hidden;color: white;font-weight: bold;"><?php echo  $row['address'] ;?></p><br>
            <p style="font-size: 12px;display: inline-block;margin:0;overflow:hidden;color: white;font-weight: bold;"><?php echo  $row['contactNum'] ; ?> | <?php echo  $row['Name'] ;?></p><br>
            <p style="font-size: 12px;display: inline-block;margin:0;overflow:hidden;color: white;font-weight: bold;"><?php echo  $row['date'] ; ?> | <?php echo  $row['time'] ;?> </p>      
          </div>
        </a>

        <a id="myBtn" onclick="setDataToModal('<?php echo $customer_id_temp_holder;?>','<?php echo $Service_ordered;?>','<?php echo $service_discount_percentage;?>','<?php echo $service_discount_amount;?>','<?php echo $service_others_amount;?>', '<?php echo $service_vat;?>','<?php echo $service_total;?>','<?php echo $service_date;?>','<?php echo $items_ordered;?>', '<?php echo $products_subtotal;?>','<?php echo $products_discount_percentage;?>','<?php echo $products_discount_amount;?>','<?php echo $products_vat;?>','<?php echo $products_total;?>')" >
                                <?php
                                  if($product_commission_id == 0 ){
                                ?> 
                                <div style="width: 91%; background: black;padding:0;border:1px solid black;border-radius: 0 0 10px 10px;margin-bottom: 2%;height: 30px;padding-left:4%;padding-right:4%;padding-top:3%;">
                                   <p style="display: inline-block;margin:0;overflow:hidden;color: white"><div style="font-weight: bold;font-size: 14px;float: left;display: block;width: 4\50%;color: white;"><i class="fa fa-info-circle" style="font-size: 14px;"></i> | No products.</div> <div style="font-weight: bold;font-size: 14px;float: right;display: block;width: 50%;text-align: right;color: white;">Service Total: ₱<?php echo  $service_total;?></div></p><br>
                                <?php 
                                }else{
                                ?> 
                                 <div style="width: 91%; background: #0179F1;padding:0;border:1px solid #0A84FF;border-radius: 0 0 10px 10px;margin-bottom: 2%;height: 30px;padding-left:4%;padding-right:4%;padding-top:3%;">
                                   <p style="display: inline-block;margin:0;overflow:hidden;color: white"><div style="font-weight: bold;font-size: 14px;float: left;display: block;width: 4\50%;color: white;"><i class="fa fa-info-circle" style="font-size: 14px;"></i> | PROTRK ID: <?php echo  $product_commission_id ;?></div> <div style="font-weight: bold;font-size: 14px;float: right;display: block;width: 50%;text-align: right;color: white;">Service Total: ₱<?php echo $service_total;?></div></p><br>
                             
                                <?php 
                                }
                                ?>
                              </div> 
                        </a>

        <?php 
                }
              
      } ?>

     </div>


    </body>
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
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>



<!-- FOR DATE -->

<script>
    function enable_submit_button(){
        document.getElementById("subtmit_btn").disabled = false;
        document.getElementById("subtmit_btn").style.borderColor = "#0179F1"; 
        document.getElementById("subtmit_btn").style.background = "#0179F1"; 
        document.getElementById("subtmit_btn").style.color = "white";
    }

function display_page_Loading(){
  document.getElementById("loader_visuals").style.display = "block";
  Preload_Functions();
  setTimeout(() => { 
    document.getElementById("loader_visuals").style.display = "none";
    alert("You may be experiencing slow connections.");

  }, 15000);
}

window.onload = function(){
  document.getElementById("loader_visuals").style.display = "none";
  Preload_Functions();
}
function Preload_Functions(){
    loadWeekDay();
    loadDate();
    clearLocalStorage();
}


function loadWeekDay() {
  var d = new Date();
  var n = d.getUTCDay();
  var weekday = "Today"

  if(n == 0){
    weekday = "Sunday";
  }else if(n == 1){
    weekday = "Monday";
  }else if(n == 2){
    weekday = "Tuesday";
  }else if(n == 3){
    weekday = "Wednesday";
  }else if(n == 4){
    weekday = "Thursday";
  }else if(n == 5){
    weekday = "Friday";
  }else if(n == 6){
    weekday = "Saturday";
  }
  document.getElementById("weekday_holder").innerHTML = weekday;
}

function loadDate(){
    var d = new Date();
  var n = d.getMonth();
  var day = d.getUTCDate();
  var year = d.getFullYear();
  var m = "MMMM";
  var completed_date = "MMMMM/DD/YYYYY";

  if(n == 0){
    m = "January";
  }else if(n == 1){
    m = "February";
  }else if(n == 2){
    m = "March";
  }else if(n == 3){
    m = "April";
  }else if(n == 4){
    m = "May";
  }else if(n == 5){
    m = "June";
  }else if(n == 6){
    m = "July";
  }else if(n == 7){
    m = "August";
  }else if(n == 8){
    m = "September";
  }else if(n == 9){
    m = "October";
  }else if(n == 10){
    m = "November";
  }else if(n == 11){
    m = "December";
  }

  completed_date = String(m)+" "+String(day)+", "+String(year);
  document.getElementById("fulld_date_holder").innerHTML = completed_date;
}

function clearLocalStorage(){
  localStorage.clear();
}
</script>
</html>