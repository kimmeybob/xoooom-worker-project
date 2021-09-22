<?php 
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    
    if($_POST){
        date_default_timezone_set('Asia/Manila');
        $current_date = date("m/d/Y");
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
        $current_date = date("m/d/Y");
         
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
    padding: 0px;
}
}

/************************************************************************************
smaller than 980
*************************************************************************************/
@media screen and (max-width: 980px) {
body{

    width: 500px;
    margin: 0 auto;
    padding: 0px;
 
  
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
    width: 95%;
    margin: 0 auto;
    padding: 0px;
   
  }
}
    </style>

    <body onload="Preload_Functions()">
    <div style="margin-top: 5%;margin-left: 2.5%;margin-right: 0%;width:100%;">
   
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  <a href="#" style="font-size: 12px;">Welcome <br><span style="font-size: 18px;color: white;">Xooom Detailer - 01<span></a>
  <br>
  <br>
 
  <a onclick="display_page_Loading()" style="color: white;" href="CC-client_dashboard.php">My Queue</a>
  <a onclick="display_page_Loading()" style="color: white;" href="CC-client_dashboard_all_orders.php">All Jobs</a>
  <a style="color: #282828;pointer-event: none;cursor: default;" href="#">All Products</a>
  <a style="color: #282828;pointer-event: none;cursor: default;" href="#">Logout (Disabled)</a>
  <br>
  <br><a href="#" style="color: #818181;font-size: 12px;">C-Dash Rev 1.2-7.9.21</a>
</div>


<div style=" display: block;background: black;top:0;left: 0; position:fixed;z-index: 10;width: 100%;height: 100%;margin: 0;opacity: 0.95;" id="loader_visuals" class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>

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
        <span >Manage Products Orders here.</span>
     </div>


     <div style="background: #D3D3D3;height: 1px;width: 100%;margin-top: 5%;display: inline-block">
     </div>

</div>

     <div style="margin-top: 5%;margin-left: 5%;color: black;width:90%">
        <span style="font-weight: bold;font-size: 22px;">Product Orders</span>
     </div>


     <div style="margin-top: 2%;margin-left: 5%;font-size: 12px;color: #868686">
        <!-- <span>
        (Page is still under development).</span> -->
     </div>

     <div style="margin-top: 5%;margin-left: 5%;margin-right: 5%;color: #868686;width: 90%;background: white;padding-bottom: 0%;">
        <span>
        <form onsubmit="display_page_Loading()" action="CC-client_dashboard_all_products.php" method="POST">
        <input onchange="enable_submit_button()" style="background:white;padding-left: 3%;padding-right: 3%;width: 70%;height: 5%;border: 1px solid lightgray;border-radius: 100px;" type="date" id="filter_date" name="filter_date">
        <input id="subtmit_btn" style="width: 28%;background: darkgray;border:1px solid darkgray;height: 5%;border-radius: 100px;color: white;font-weight: bold;" disabled="true" type="submit" value="Confirm">
        </form>
     </div>

     <div style="margin-top: 0%;margin-left: 5%;margin-right: 5%;color: #868686;width: 90%;background: white;padding-bottom: 1%;font-size: 14px;padding-bottom: 1%;">
        <p>check out product orders based on the scheduled dates.</p>
     </div>

     <div style="background: #D3D3D3;height: 1px;width: 100%;margin-top: 2%;">
     </div>

  
     <div style="margin-top: 5%;margin-left: 5%;color: black">
        <span style="font-weight: bold;font-size: 22px;">Results</span>
     </div>
  
     

<!-- The Modal -->
<div id="myModal" class="modal" style="border-radius: 0px;">

<!-- Modal content -->
<div class="modal-content" style="background: white;">
  <div class="modal-header" style="">
  <br>
    <span class="close">&times;</span>
    <h2 style="">Product Billing </h2>
    
    <p style="font-size: 16px; color: grey;overflow: hidden; display: block;margin: 0;" id="product_ref_container">Reference Number:</p>
    <p style="font-size: 16px; color: grey;overflow: hidden; display: block;margin: 0;" id="order_date">Reference Number:</p>
    <!-- <p style="display: block;overflow: hidden;"><a href="#" style="text-decoration: none; color: white;" ><div style="background: #0179F1;color: white;border: 1px solid #0179F1;width:45%;float: left;text-align: center;padding: 10px 5px;border-radius: 20px;font-weight: bold;">Product Billing</div></a><a class="collapsible"href="#" style="text-decoration: none; color: white;"><div style="background: #8E8E93;color: white;border: 1px solid #8E8E93;width:45%;float: right;text-align: center;padding: 10px 5px;border-radius: 20px;font-weight:bold;" >Service Billing</div></a></p>
    <br> -->
    <br>
    
          <button type="button" style="margin-bottom: 2%;" class="collapsible" id="collapsible_btn"><i class="fa fa-info-circle" style="font-size: 14px;"></i> Service/Commission Charges.</button>
          
          <div class="content" id="content">
            <p style="font-size: 18px;font-weight: bold">Service Order Charges</p>
            <p id="service_commission_summary" style="font-size: 16px; color: grey;">Package_billing_summary</p>
            <p id="service_commission_charges"></p>
            <p>
            <div style="width: 50%;float: left;font-size: 16px;font-weight: normal;">Subtotal Amount </div><div style="width: 50%;float: right;text-align: right;" id="service_subtotal_display"> 0</div><br>
            <div style="width: 50%;float: left;font-size: 16px;font-weight: normal;" id="service_discount_percentage_display">Discount (0%)</div><div style="width: 50%;float: right;text-align: right;" id="service_discount_amount_display"> 0</div><br>
            <div style="width: 60%;float: left;font-size: 16px;font-weight: normal;">Manager's Discount</div><div style="width: 40%;float: right;text-align: right;" id="service_managers_discount"> 0</div><br>
               

            <div style="width: 50%;float: left;font-size: 16px;font-weight: normal;">Others Amount </div><div style="width: 50%;float: right;text-align: right;" id="service_others_amount_display"> 0</div><br>
                
            
                <div style="width: 50%;float: left;font-size: 16px;font-weight: normal;">VAT</div><div style="width: 50%;float: right;text-align: right;" id="service_vat_display"> 0</div><br>
               

                <div style="width: 50%;float: left;font-size: 18px;font-weight: bold;padding-bottom: 2%;">Service Total</div><div style="width: 50%;float: right;text-align: right;font-size: 18px;font-weight: bold;" id="service_total_display"> 0</div></p>
        
                
            </p> <!-- Closing for service_billing charges-->
                      </div>
                      <p style="font-size: 14px; color: grey;overflow: hidden; display: in-block;margin: 0;margin-bottom: 5%;" id="hint_service_commissiont_labels">Product order is linked with a service order.</p>
                
    
    <hr></hr> 
    
    <p style="font-size: 18px;font-weight: bold">Product Order Summary</p>
    <p style="font-size: 16px; color: grey;" id="order_summary_container">
    </p>
  </div>
  <div class="modal-body">
    
    <hr></hr> 
    
    <p style="display: block;overflow: hidden;">
    <span style="font-size: 18px;font-weight: bold;display: block;overflow: hidden;background: white;">Product Order Charges</span>
    <div style="width: 50%;float: left;font-size: 16px;font-weight: normal;">Subtotal Amount </div><div style="width: 50%;float: right;text-align: right;" id="subtotal_display"> 2</div><br>
    <!-- <hr></hr> -->
    <div style="width: 50%;float: left;font-size: 16px;font-weight: normal;" id="discount_percentage_display">Discount (0%)</div><div style="width: 50%;float: right;text-align: right;" id="discount_amount_display"> 2</div><br>
    <!-- <hr></hr> -->
    <div style="width: 60%;float: left;font-size: 16px;font-weight: normal;">Manager's Discount</div><div style="width: 40%;float: right;text-align: right;" id="products_managers_discount"> 0</div><br>
               

    <div style="width: 50%;float: left;font-size: 16px;font-weight: normal;">VAT</div><div style="width: 50%;float: right;text-align: right;" id="vat_display"> 2</div><br>
    <!-- <hr></hr> -->
    <!-- <div style="background:white;border: 1px solid black; border-radius: 10px;padding: 5px 2.5px;"> -->
    <div style="width: 50%;float: left;font-size: 18px;font-weight: bold;">Product Total</div><div style="width: 50%;float: right;text-align: right;font-size: 18px;font-weight: bold;" id="total_display"> 2</div>
    <!-- </div> -->
    <br>
    <br>
    <hr></hr> 
    <br>
    <div style="width: 50%;float: left;font-size: 18px;font-weight: bold;">Grand Total</div><div style="width: 50%;float: right;text-align: right;font-size: 18px;font-weight: bold;" id="grand_total"> 2</div></p>
    <p style="font-size: 12px; color: grey;">Products and Service Orders Total billing.</p>
    <br>
    
  </div>
  <!-- <div class="modal-footer">
    <h3 style="text-align: center">OK</h3>
  </div> -->
</div>

</div>

<?php

/** LOGIC for listing here */

?>
     <div style="background: white; margin-left: 5%; margin-right: 5%;width: auto;margin-top: 2%;padding-bottom: 2%;">

        <!-- Recycleable Layout Cards --->
        <?php 
           require 'Admin/database_config.php';
           
            //$query_s = "Select * from product_commissions where date = '$final_date'";
            echo "Selected Date: ".$final_date;
            
            $query_s = "select product_commissions.*, service_commissions.type as 's_type',service_commissions.size as 's_size',service_commissions.total as 's_total', service_commissions.discount_amount as 's_discount_amount', service_commissions.discount as 's_discount_percentage', service_commissions.vat as 's_vat', service_commissions.others_amount as 's_others_amount' from product_commissions left outer join service_commissions on service_commissions.cust_id = product_commissions.cust_id";
            $query_run_s = mysqli_query($connection, $query_s);
            $check_job_orders_s = mysqli_num_rows($query_run_s) > 0;  
            $card_color = "#282828"; //card color is dark black
            $product_commission_id = 0;

            if(mysqli_num_rows($query_run_s) == 0){
                echo "<p style='color: #656565;font-size: 14px;'>No product orders found on $final_date.</p>";
            }else{
            ?>

        <div style="margin-top: 1%;margin-left: 0%;margin-right: 0%;color: #868686;width: 90%;background: white;padding-bottom: 1%;font-size: 14px;padding-bottom: 1%;">
            <p>Showing results for Product Order Transactions.</p>
        </div>
                <?php 

                if($final_date == $current_date){
                  $card_color = "#282828"; 
                }else{
                  $card_color = "darkgray"; 
                }
              
                while($row = mysqli_fetch_array($query_run_s)){
                  if($row['date'] == $final_date){
                    
                ?>
                <a href="Php_Function/productcommissiondatatolocalstorage.php?job_listing_id=<?php echo $row['cust_id'];?>&edit_status_id=2" style="text-decoration: none;">
                            <div style="background: <?php echo $card_color;?>;height: auto;border: 1px solid white;border-radius:10px 10px 0 0;padding: 4%;display: block;margin-top:1%;">
                            <div style="margin-bottom: 10%;">
                            <p style="float:left;width: auto;font-size: 18px;display: inline-block;margin:0;overflow: hidden;color: white;"><?php echo  "PROTRK-".$row['product_commission_id'] ; ?></p>
                            <?php
                              if($final_date == $current_date){
                                ?>
                                <span style="padding-right:1%;float:right;width: auto;font-size: 14px;display: inline-block;margin:0;overflow: hidden;color: white;"> <i class="fa fa-unlock" aria-hidden="true" style="color: white;"></i></span>
                                <?php
                              }else{
                                  ?>
                                <span style="padding-right:1%;float:right;width: auto;font-size: 14px;display: inline-block;margin:0;overflow: hidden;color: white;"> <i class="fa fa-lock" aria-hidden="true" style="color: white;"></i></span>
                                  <?php
                              }
                            ?>
                            <?php 
                            if($row['cust_id'] == 0 || $row['cust_id'] == "0"){

                            }else{
                            ?>
                            <span style="padding-right:1%;float:right;width: auto;font-size: 14px;display: inline-block;margin:0;overflow: hidden;color: white;"> <i class="fa fa-link" aria-hidden="true" style="color: white;"></i></span>
                            <?php 
                            }
                            ?>
                            </div>
                            <p style="font-size: 14px;display: inline-block;margin:0;overflow:hidden;color: white;font-weight: bold;">Sold by: <?php echo  $row['personnel'] ;?></p><br>
                            <p style="font-size: 14px;display: inline-block;margin:0;overflow:hidden;color: white;font-weight: bold;">Customer: <?php echo  $row['customer_name'] ;?></p><br>
                            <p style="font-size: 14px;display: inline-block;margin:0;overflow:hidden;color: white;font-weight: bold;">Date: <?php echo  $row['date'] ;?> </p><br>
                            <?php 
                              // for displaying quantity
                              $service_orders = "";
                            
                              $service_charges = $row['s_size']." - ".$row['s_type']." Package"."<br>";
                              $items_ordered = "";
                              $product_commission_id = $row['product_commission_id'];

                              $query_product_item = "select * from product_item_orders where product_commission_id = ".$row['product_commission_id'];
                               $query_run_product_item = mysqli_query($connection, $query_product_item);
                               $check_job_orders_product_item = mysqli_num_rows($query_run_product_item) > 0;
                               $subtotal = 0;
                               
                               if(mysqli_num_rows($query_run_product_item) == 0){
                                echo "";
                                }else{
                                  $ctr = 0;
                                  while($sub_row = mysqli_fetch_array($query_run_product_item)){
                                    $subtotal += $sub_row['subtotal'];
                                    $items_ordered = $items_ordered.$sub_row['subtotal']." Php - ".$sub_row['product_name']." x".$sub_row['quantity']."<br>";
                                    
                                   // $ctr++;
                                    ?> 
                                    
                                    <?php
                                  }
                                }

                                $discount_percentage_holder = $row['discount_percentage'];
                                $discount_value_holder = $row['discount_value'];
                                $vat_value_holder = $row['vat'];
                                $total_value_holder = $row['total'];
                                $product_order_date = $row['date'];

                                $service_total = $row['s_total'];
                                $service_discount_amount = $row['s_discount_amount'];
                                $service_discount_percentage = $row['s_discount_percentage'];
                                $service_vat = $row['s_vat'];
                                $service_others_amount = $row['s_others_amount'];
                              
                            ?>
                           <script>
                                    //var items_ordered = <?php echo json_encode($items_ordered); ?>;
                                    
                                    </script>
                            </div>
                            <!-- <?php echo $subtotal?>,<?php echo $row['discount_percentage']?>,<?php echo $row['discount_value']?>,<?php echo $row['VAT']?>,<?php echo $row['total'];?> -->
                            
                            <a id="myBtn" onclick="setDataToModal('<?php echo $subtotal?>','<?php echo $discount_percentage_holder;?>','<?php echo $discount_value_holder;?>','<?php echo $vat_value_holder;?>','<?php echo $total_value_holder;?>', '<?php echo $items_ordered;?>','<?php echo $row['cust_id'];?>','<?php echo $product_order_date?>','<?php echo $service_charges?>','<?php echo $service_total?>', '<?php echo $service_discount_amount?>','<?php echo $service_discount_percentage?>','<?php echo $service_vat?>','<?php echo $service_others_amount?>')">
                                <?php
                                  if($row['cust_id'] == 0 || $row['cust_id'] == "0"){
                                ?>
                                <div style="width: 91%; background: #282828;padding:0;border:1px solid #656565;border-radius: 0 0 10px 10px;margin-bottom: 2%;height: 30px;padding-left:4%;padding-right:4%;padding-top:3%;">
                                   <p style="display: inline-block;margin:0;overflow:hidden;color: white"><div style="font-weight: bold;font-size: 14px;float: left;display: block;width: 4\50%;color: white;"><i class="fa fa-info-circle" style="font-size: 14px;"></i> | Product Purchase.</div> <div style="font-weight: bold;font-size: 14px;float: right;display: block;width: 50%;text-align: right;color: white;">Product Total: ₱<?php echo $row['total'];?></div></p><br>
                                <?php 
                                }else{
                                ?>
                                <div style="width: 91%; background: #0179F1;padding:0;border:1px solid #0A84FF;border-radius: 0 0 10px 10px;margin-bottom: 2%;height: 30px;padding-left:4%;padding-right:4%;padding-top:3%;">
                                   <p style="display: inline-block;margin:0;overflow:hidden;color: white"><div style="font-weight: bold;font-size: 14px;float: left;display: block;width: 4\50%;color: white;"><i class="fa fa-info-circle" style="font-size: 14px;"></i> | CUSTRK ID: <?php echo  $row['cust_id'] ;?></div> <div style="font-weight: bold;font-size: 14px;float: right;display: block;width: 50%;text-align: right;color: white;">Product Total: ₱<?php echo $row['total'];?></div></p><br>
                             
                                <?php 
                                }
                                ?>
                              </div> 
                             </a>
                        </a>

           <?php 
              }// Closing of 1st if statement in while
           } //closing of outer while statement
        }?>

     </div>

     <!-- Trigger/Open The Modal -->



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
function setDataToModal(subtotal, discount_percentage,discount_value,vat, total, order_summary, product_commission_id, order_date, service_charges, service_sub_total, service_discount_amount,service_discount_percentage,service_vat,service_others_amount){
  
  //Opens Modal Display
  modal.style.display = "block";
  var service_final_amount = 0;

  //check if data os NaN
  if(product_commission_id == 0){
    document.getElementById("collapsible_btn").style.display = "none";
    document.getElementById("hint_service_commissiont_labels").innerHTML = "<i class='fa fa-info-circle' style='font-size: 14px;'></i> Product order does not have a linked job order.";
    service_final_amount = 0
  }else{

    //Check if Service COmmission is still in progress
    if(isNaN(parseInt(service_sub_total))){
      document.getElementById("collapsible_btn").style.display = "block";
      document.getElementById("collapsible_btn").style.background = "gray";
      document.getElementById('collapsible_btn').style.pointerEvents = 'none';
      document.getElementById("hint_service_commissiont_labels").innerHTML = "Linked Service Job Order is still in-progress.";
    }else{
      document.getElementById('collapsible_btn').style.pointerEvents = 'auto';
      document.getElementById("collapsible_btn").style.display = "block";
      document.getElementById("hint_service_commissiont_labels").innerHTML = "Product order is linked with a job order.";
    }
    service_final_amount = parseInt(service_sub_total);
  }

  var discount_percentage_value = "0%";
  var service_discount_percentage_value = "0%";
  var service_discount_percentage_number = 0.00;
  var discount_amount_computed = 0;

  document.getElementById("subtotal_display").innerHTML = "";
  document.getElementById("subtotal_display").innerHTML = subtotal;

  document.getElementById("discount_amount_display").innerHTML = "";
  document.getElementById("discount_amount_display").innerHTML = discount_value;

  if(discount_percentage === "none"){
    discount_percentage_value = "0%";
  }else if(discount_percentage === "ten"){
    discount_percentage_value = "10%";
  }else if(discount_percentage === "twenty"){
    discount_percentage_value = "20%";
  }else if(discount_percentage === "thirty"){
    discount_percentage_value = "30%";
  }else if(discount_percentage === "forty"){
    discount_percentage_value = "40%";
  }else if(discount_percentage === "fifty"){
    discount_percentage_value = "50%";
  }else if(discount_percentage === "sixty"){
    discount_percentage_value = "60%";
  }else if(discount_percentage === "seventy"){
    discount_percentage_value = "70%";
  }else if(discount_percentage === "eighty"){
    discount_percentage_value = "80%";
  }else if(discount_percentage === "ninety"){
    discount_percentage_value = "90%";
  }else if(discount_percentage === "onehundred"){
    discount_percentage_value = "100%";
  }

  document.getElementById("discount_percentage_display").innerHTML = "";
  document.getElementById("discount_percentage_display").innerHTML = "Discount ("+discount_percentage_value+")";

  document.getElementById("vat_display").innerHTML = "";
  document.getElementById("vat_display").innerHTML = vat;

  document.getElementById("total_display").innerHTML = "";
  document.getElementById("total_display").innerHTML = total;

  document.getElementById("order_summary_container").innerHTML = "";
  document.getElementById("order_summary_container").innerHTML = order_summary;

  document.getElementById("product_ref_container").innerHTML = "";
  document.getElementById("product_ref_container").innerHTML = "PROTRK Ref#: "+product_commission_id;

  document.getElementById("order_date").innerHTML = "";
  document.getElementById("order_date").innerHTML = "Transaction Date:  "+order_date;

  //For service charges and summary
  document.getElementById("service_commission_summary").innerHTML = "";
  document.getElementById("service_commission_summary").innerHTML = service_charges;


  if(service_discount_percentage === "none"){
    service_discount_percentage_value = "0%";
    service_discount_percentage_number = 0;
  }else if(service_discount_percentage === "ten"){
    service_discount_percentage_value = "10%";
    service_discount_percentage_number = 0.10;
  }else if(service_discount_percentage === "twenty"){
    service_discount_percentage_value = "20%";
    service_discount_percentage_number = 0.20;
  }else if(service_discount_percentage === "thirty"){
    service_discount_percentage_value = "30%";
    service_discount_percentage_number = 0.30;
  }else if(service_discount_percentage === "forty"){
    service_discount_percentage_value = "40%";
    service_discount_percentage_number = 0.40;
  }else if(service_discount_percentage === "fifty"){
    service_discount_percentage_value = "50%";
    service_discount_percentage_number = 0.50;
  }else if(service_discount_percentage === "sixty"){
    service_discount_percentage_value = "60%";
    service_discount_percentage_number = 0.60;
  }else if(service_discount_percentage === "seventy"){
    service_discount_percentage_value = "70%";
    service_discount_percentage_number = 0.70;
  }else if(service_discount_percentage === "eighty"){
    service_discount_percentage_value = "80%";
    service_discount_percentage_number = 0.80;
  }else if(service_discount_percentage === "ninety"){
    service_discount_percentage_value = "90%";
    service_discount_percentage_number = 0.90;
  }else if(service_discount_percentage === "onehundred"){
    service_discount_percentage_value = "100%";
    service_discount_percentage_number = 1;
  }

  document.getElementById("service_discount_percentage_display").innerHTML = "";
  document.getElementById("service_discount_percentage_display").innerHTML = "Discount ("+service_discount_percentage_value+")";

  discount_amount_computed = parseInt(service_discount_amount.replace(/[^0-9]/g, ''));

  document.getElementById("service_subtotal_display").innerHTML = "";
  document.getElementById("service_subtotal_display").innerHTML = (parseInt(service_sub_total) - parseInt(service_others_amount))+discount_amount_computed;

  document.getElementById("service_others_amount_display").innerHTML = "";
  document.getElementById("service_others_amount_display").innerHTML = service_others_amount;

  document.getElementById("service_others_amount_display").innerHTML = "";
  document.getElementById("service_others_amount_display").innerHTML = service_others_amount;

  document.getElementById("service_discount_amount_display").innerHTML = "";
  document.getElementById("service_discount_amount_display").innerHTML = discount_amount_computed;

  document.getElementById("service_vat_display").innerHTML = "";
  document.getElementById("service_vat_display").innerHTML = service_vat;
  
  document.getElementById("service_total_display").innerHTML = "";
  document.getElementById("service_total_display").innerHTML = service_sub_total;

  document.getElementById("grand_total").innerHTML = "";

  if(isNaN(parseInt(service_sub_total))){
    document.getElementById("grand_total").innerHTML = parseInt(total);
  }else{
    document.getElementById("grand_total").innerHTML = parseInt(service_final_amount)+parseInt(total);
  }
  

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