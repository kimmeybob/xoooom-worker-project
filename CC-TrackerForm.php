<?php

$job_listing_id = $_GET['job_listing_id'];

?>
<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"  href="assets/css/timedropper.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link rel="icon" href="images/logo.png">
    <title>Xoooom Autospa Service Worker Form</title>

</head>


<style type="text/css">
/**Modal Feature for Products */

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 20px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: hidden; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 5%;
  border: 1px solid #888;
  width: 90%;
  
}

/* The Close Button */
.close {
  color: #aaaaaa;
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
  background: #F0F0F0;
}

body {
  width: 100%;
  margin: 0 auto;
  padding: 10px;
  
}

img.logo {
  width: 100%;
  height: auto;
  margin-bottom: -5%;
  /* Recommended - Limit maximum width */
  max-width: 150px;
}

div.elem-group {
  margin: 20px 0;
}

div.elem-group.inlined {
  width: 49%;
  display: inline-block;
  float: left;
  margin-left: 1%;
}
a
label {
  display: block;
  padding-bottom: 10px;
  font-size: 1.25em;
}

input, select, textarea {
  border-radius: 2px;
  border: 2px solid #777;
  box-sizing: border-box;
  font-size: 1.25em;
  width: 100%;
  padding: 10px;
}

div.elem-group.inlined input {
  width: 95%;
  display: inline-block;
}

label{
  font-family: 'roboto';
}
input{
  font-family: 'roboto';
}
select{
  font-family: 'roboto';
}
textarea {
  font-family: 'roboto';
  height: 250px;
}

hr {
  border: 1px dotted #ccc;
}

button {
  height: 50px;
  background: black
  border: none;
  color: white;
  font-size: 1.25em;
  border-radius: 4px;
  cursor: pointer;
}

button:hover {
  border: 2px solid black;
}

@media screen and (max-width: 767px) {
 body #logo {
   max-width: 90%;
   display: block;
 }
}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
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
  background: #F0F0F0;
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
    <!-- LOADER DIV -->
    <div style=" display: block;background: black;top:0;left: 0; position:fixed;z-index: 10;width: 100%;height: 100%;margin: 0;opacity: 0.95;" id="loader_visuals" class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>


        <div style="margin-top: 5%;margin-left: 5%;margin-right: 5%;background: white;">
            <div style="float:left; width: 85%;position: relative;display: inline-block;margin:0;">
                <p style="font-weight: bold;background: white;margin:0;overflow: hidden;font-size: 18px;">Service & Commission Tracker</p>
                <p style="font-size: 12px;margin:0;color: #868686;">Please fill up all the necessary fields for this job order     <br><b><?php echo "SERVICE-FORM Rev 1.2-7.9.21 (RES)";?></b></p>
            </div>
            <div style="float: right; width: 15%;position: relative;display: inline-block;text-align: right;"><p style="width: auto;background: white;margin:0;margin-top: 10%;overflow: hidden">
                <a onclick="display_page_Loading()" href="CC-Service_Worker_Job_Listing_Que.php?job_id=<?php echo $job_listing_id;?>" style="color: #0279F6;text-decoration: none;font-size: 14px">Cancel</a></p></div><br>
            <!--<div style="float:left; width: auto;position: relative;display: inline-block;font-size:11px;margin:0;"><p style="font-weight: bold;color: #868686;">Please fill up all the necessary fields for this product order</p></div>-->
        </div>

        <div style="height: 1px; width: 100%; background: #D3D3D3;margin-top: 5%;position: relative;display: inline-block;">        
        </div>
        
        <div style="color:#868686;margin-top: 5%;margin-left: 5%;font-size: 12px;">
            Job Order ID
        </div>

        <div>
            <div style="float:left; width: auto;position: relative;display: inline-block;margin:0;margin-left: 5%;">
            <?php

                echo "CUSTRK-$job_listing_id ";
                ?>
            </div>
            <div style="float: right; width: auto;position: relative;display: inline-block;margin-right: 5%;">
                <p style="width: auto;background: white;margin:0;overflow: hidden;"><a href="#back" style="color: black;font-size: 14px"></a></p>
            </div>
        <div>
        <br/>

    <div class="container">
    <div class="row">
    <div class="col-md-12">



      <div >
        
        <!--<a href="commissionfunction.php?job_listing_id=<?php echo $job_listing_id;?>">Add a Product </a>-->
        
      </div>
      <br>
      <form action="Php_Function/commissionfunction.php?job_listing_id=<?php echo $job_listing_id;?>" onsubmit="return submission_check()" method="POST"> 
     
      <!-- TEST IMPLEMENTATION:  
        <form action="#SUBMISSION" onsubmit="return submission_check()" method="POST"> -->
      <div class="form-group">
      <?php 
        require 'Admin/database_config.php';

        //Customer Name and Customer Number 
        $customer_name = "";
        $contactnumber = "";
        

        $query_date = "Select * from customer where customer_id = $job_listing_id;";
        $query_run_date = mysqli_query($connection, $query_date);
        $check_job_orders_date = mysqli_num_rows($query_run_date) > 0;
        $job_order_date = "00/00/00";
        $job_order_time = "00:00";

        while($row = mysqli_fetch_array($query_run_date)){
          $job_order_date = $row['date'];
          $job_order_time = $row['time'];
          $customer_name = $row['Name'];
          $contactnumber = $row['contactNum'];
        }

        //echo '<script>alert("'.$customer_name.'");</script>';
        //echo '<script>alert("'.$contactnumber.'");</script>';

      ?>
      <?php 
      
      // NOTE kay product_commissions where job_order_id is not customer_id;
      
      //Coonect to Custoemr Table
      // $query_add_on_pre = "Select * from customer where customer_id = $job_listing_id;";
      // $query_run_add_on_pre = mysqli_query($connection, $query_add_on_pre);
      // $check_job_orders_add_on_pre = mysqli_num_rows($query_run_add_on_pre) > 0;
      
      // $customer_id_name = "";
      
      // while($row = mysqli_fetch_array($query_run_add_on_pre)){
      //   $customer_id_name = $row['Name'];
      // } 
      
      //       $query_add_on = "Select * from product_commissions where customer_name = $customer_id_name;";
      //       $query_run_add_on = mysqli_query($connection, $query_add_on);
      //       $check_job_orders_add_on = mysqli_num_rows($query_run_add_on) > 0;
      
            $total_product_price = 0;
            $discount_add_on_value = 0;
            $vat_add_on_value = 0;
            $sub_total_value = 0;
            
      
      //       while($row = mysqli_fetch_array($query_run_add_on)){
      //         $total_product_price = $row['total'];
      //         $discount_add_on_value = $row['discount_value'];
      //         $vat_add_on_value = $row['vat'];
      //         $sub_total_value = $row['subtotal'];
      //       } 
      //echo "<br><font style='font-size: 12px;'>*Addition of Products and Product Billing is currently disabled.<font>";
          ?>
      <?php 
      
            $products_subtotal = 0;
            $products_discount_percentage = "none";
            $final_products_percentage_label = "none";
            $products_discount_amount = 0;
            $products_vat = 0;
            $products_total = 0;
            $products_date = "";
            $products_workers = "";
            $products_wax_quantity = 0;
            $products_engine_shine_quantity = 0;
            $products_engine_degreaser_quantity = 0;
            $products_freshener_quantity = 0;
            $products_water_remover_quantity = 0;
            $products_promo = "";
            $products_note = "";
      
            //Conect to products commission Table
            //echo '<script>alert("'.$job_order_date.'");</script>';
            // $query_add_on_pre = "Select * from product_commissions where cust_id = $job_listing_id and date = '$job_order_date'"; // and date = $job_order_date
            $query_add_on_pre = "select product_commissions.*, product_item_orders.product_name, product_item_orders.quantity, product_item_orders.subtotal from product_commissions left outer join product_item_orders on product_commissions.product_commission_id = product_item_orders.product_commission_id";
            $query_run_add_on_pre = mysqli_query($connection, $query_add_on_pre);
            $check_job_orders_add_on_pre = mysqli_num_rows($query_run_add_on_pre) > 0;
      
            if($check_job_orders_add_on_pre){
                  while($row = mysqli_fetch_array($query_run_add_on_pre)){
                    if($row['cust_id'] == $job_listing_id){
                        //echo $row['subtotal']." | ".$job_order_date."<br>";
                        $products_subtotal += (int)$row['subtotal'];
                        $products_discount_percentage = $row['discount_percentage'];
                        $products_discount_amount = $row['discount_value'];
                        $products_vat = $row['vat'];
                        $products_total = $row['total'];
                        $products_date = $row['date'];
                        $products_workers = $row['personnel'];
                        if($row['product_name'] == "Wax"){
                          $products_wax_quantity = (int)$row['quantity'];
                        }else if($row['product_name'] == "Engine Shine"){
                          $products_engine_shine_quantity = (int)$row['quantity'];
                        }else if($row['product_name'] == "Engine Degreaser"){
                          $products_engine_degreaser_quantity = $row['quantity'];
                        }else if($row['product_name'] == "Freshener"){
                          $products_freshener_quantity = (int)$row['quantity'];
                        }else if($row['product_name'] == "Watermarks Remover"){
                          $products_water_remover_quantity = (int)$row['quantity'];
                        }
                        $products_promo = $row['reason_promo'];
                        $products_note = $row['note'];
                    }
                  } 
            
                  //Convert Products Discount Percentage to value
                  if($products_discount_percentage == "none"){
                    $final_products_percentage_label = "10";
                  }elseif($products_discount_percentage == "ten"){
                    $final_products_percentage_label = "10";
                  }elseif($products_discount_percentage == "twenty"){
                    $final_products_percentage_label = "20";
                  }else if($products_discount_percentage == "thirty"){
                    $final_products_percentage_label = "30";
                  }else if($products_discount_percentage == "forty"){
                    $final_products_percentage_label = "40";
                  }else if($products_discount_percentage == "fifty"){
                    $final_products_percentage_label = "50";
                  }elseif($products_discount_percentage == "sixty"){
                    $final_products_percentage_label = "60";
                  }elseif($products_discount_percentage == "seventy"){
                    $final_products_percentage_label = "70";
                  }elseif($products_discount_percentage == "eighty"){
                    $final_products_percentage_label = "80";
                  }elseif($products_discount_percentage == "ninety"){
                    $final_products_percentage_label = "90";
                  }elseif($products_discount_percentage == "onehundred"){
                    $final_products_percentage_label = "100";
                  }else{
                    $final_products_percentage_label = "0";
                  }
            
            }else{
              
            }
          
            if($products_subtotal == 0){
                
            }else{
              echo '<script>
              localStorage.setItem("service_order_bind_id", '.$job_listing_id.');
              localStorage.setItem("products_order_bind_id", '.$job_listing_id.');
              localStorage.setItem("products_date", "'.$products_date.'");
              localStorage.setItem("workers", "'.$products_workers.'");
              localStorage.setItem("workers", "'.$products_workers.'");
              localStorage.setItem("products_wax_quantity", "'.$products_wax_quantity.'");
              localStorage.setItem("products_engine_shine_quantity", "'.$products_engine_shine_quantity.'");
              localStorage.setItem("products_engine_degreaser_quantity", "'.$products_engine_degreaser_quantity.'");
              localStorage.setItem("products_freshener_quantity", "'.$products_freshener_quantity.'");
              localStorage.setItem("products_water_remover_quantity", "'.$products_water_remover_quantity.'");
              localStorage.setItem("products_discounts", "'.$products_discount_percentage.'");
              localStorage.setItem("products_promo", "'.$products_promo.'");
              localStorage.setItem("products_note", "'.$products_note.'");
              localStorage.setItem("products_subtotal_amount", "'.$products_subtotal.'");
              localStorage.setItem("products_additional_discount_amount", "'.$products_discount_amount.'");
              localStorage.setItem("products_additional_vat_amount", "'.$products_vat.'");
              localStorage.setItem("products_additional_sub_total", "'.$products_total.'"); 
              </script>';
            }
            
            
            
           
      ?>
        <div style="width: 100%;display: inline-block;border: 1px solid #D3D3D3;padding-bottom: 1%;padding-top: 1%;padding-right: 2%;padding-left: 2%;border-radius: 15px;">
        <label style="color: #868686;font-size: 12px;" for="Time">Date</label>
        <input style="border-radius: 10px;border-color: none; border-style: none;font-size: 14px;background: white;" class="form-control" type="text" value="<?php echo $job_order_date;?>" placeholder="mmmm" id="date_serviced" name="date_serviced" readonly>
        </div>
      </div>

      <div class="form-group">
        <div style="width: 100%;display: inline-block;border: 1px solid #D3D3D3;padding-bottom: 1%;padding-top: 1%;padding-right: 2%;padding-left: 2%;border-radius: 15px;">
        <label style="color: #868686;font-size: 12px;" for="Time">Scheduled Time</label>
        <input style="border-radius: 10px;border-color: none; border-style: none;font-size: 14px;background: white;" class="form-control" type="text" value="<?php echo $job_order_time;?>" id="time_serviced" name="time_serviced" readonly>
        </div>
      </div>

      <div class="form-group">
        <div style="width: 100%;display: inline-block;border: 1px solid #D3D3D3;padding-bottom: 1%;padding-top: 1%;padding-right: 2%;padding-left: 2%;border-radius: 15px;">
        <label style="color: #868686;font-size: 12px;" for="worker">Name of Personnel</label>
        <select onchange="update_tag_personnel_options()" name="workers" id="workers" style="border-radius: 10px;border-color: none; border-style: none;font-size: 14px" class="form-control">
                <option id="rodel_macas" value="<?php echo "default_personnel";?>">
                    <?php echo "<i>--- Select personnel here ---</i>";?>
                </option>
                <option id="rodel_macas" value="<?php echo "Rodel Macas";?>">
                    <?php echo "Rodel Macas";?>
                </option>
                <option id="ruben_macas_jr" value="<?php echo "Ruben Macas Jr";?>">
                    <?php echo "Ruben Macas Jr";?>
                </option>
                <option id="michelle_bontong" value="<?php echo "Michelle Bontong";?>">
                    <?php echo "Michelle Bontong";?>
                </option>
            </select>
        </div>
      </div>

      <div class="form-group">
        <div style="width: 100%;display: inline-block;border: 1px solid #D3D3D3;padding-bottom: 1%;padding-top: 1%;padding-right: 2%;padding-left: 2%;border-radius: 15px;">
        <label style="color: #868686;font-size: 12px;" for="worker">Name of Partner</label>
        <select onchange="update_main_personnel_option()" name="tag_workers" id="tag_workers" style="border-radius: 10px;border-color: none; border-style: none;font-size: 14px" class="form-control">
                <option id="none_personnel" value="<?php echo "none";?>">
                    <?php echo "--- None ---";?>
                </option>
                <option disabled="true" id="tag_rodel_macas" value="<?php echo "Rodel Macas";?>">
                    <?php echo "Rodel Macas";?>
                </option>
                <option disabled="true" id="tag_ruben_macas_jr" value="<?php echo "Ruben Macas Jr";?>">
                    <?php echo "Ruben Macas Jr";?>
                </option>
                <option disabled="true" id="tag_michelle_bontong" value="<?php echo "Michelle Bontong";?>">
                    <?php echo "Michelle Bontong";?>
                </option>
            </select>
        </div>
        <label style="color: #868686;font-size: 12px;" for="email">If a personnel's name is not found please report it to the admins.</label>
      </div>

      <div class="form-group">
        <div style="width: 100%;display: inline-block;border: 1px solid #D3D3D3;padding-bottom: 1%;padding-top: 1%;padding-right: 2%;padding-left: 2%;border-radius: 15px;">
        <label style="color: #868686;font-size: 12px;" for="platenumber" required>Plate Number</label>
        <input style="border-radius: 10px;border-color: none; border-style: none;font-size: 14px" class="form-control" type="text" id="platenumber" name="platenumber" placeholder="AAA-1111"  required>
        </div>
    </div>
    
      
      <label style="color: #868686;font-size: 12px;">Service Package</label><br/>
    

      <div class="form-group">
        <div style="width: 100%;display: inline-block;border: 1px solid #D3D3D3;padding-bottom: 1%;padding-top: 1%;padding-right: 2%;padding-left: 2%;border-radius: 15px;">
        <label style="color: #868686;font-size: 12px;" for="size">Size</label>
         <select style="border-radius: 10px;border-color: none; border-style: none;font-size: 14px" name="car_size_details" id="car_size_details" onchange="dusplay_car_size_and_billing_summary()"  class="form-control">
                <option value="<?php echo "Small";?>">
                    <?php echo "Small";?>
                </option>
                <option value="<?php echo "Medium";?>">
                    <?php echo "Medium";?>
                </option>
                <option value="<?php echo "Large";?>">
                    <?php echo "Large";?>
                </option>
                <option value="<?php echo "Extra Large";?>">
                    <?php echo "Extra Large";?>
                </option>
            </select>
      </div>
    </div>

    <label style="display: none;color: #868686;font-size: 12px;height:0px;">*For Car Sizes please refer to your print outs.</label><br/>
            <div style="display: none;width: auto;position: relative;margin:0;padding-top: 0%">
            <p name="display_car_size_details" id="display_car_size_details">
              
                  <ul id="ul_text_size" style="font-size: 12px;width: 50%;float: left;background: white;">
                    <li style="List-style-type: none;"><b>TOYOTA</b></li>
                    <li>Wigo</li>
                    <li style="List-style-type: none;"><br></li>
                    <li style="List-style-type: none;"><br></li>
                    <li style="List-style-type: none;"><b>MITSUBISHI</b></li>
                    <li>Mirage (Hatccback)</li>
                    <li style="List-style-type: none;"><br></li>
                    <li style="List-style-type: none;"><b>NISSAN</b></li>
                    <li>March</li>
                    <li style="List-style-type: none;"><br></li>
                    <li style="List-style-type: none;"><b>SUZUKI</b></li>
                    <li>Calerio</li>
                    <li>Alto</li>
                  </ul>
                
                  <ul id="ul_text_size_two" style="font-size: 12px;width: 50%;float: left;background: white;">
                   
                    <li style="List-style-type: none;"><b>HYUNDAI</b></li>
                    <li>Eon</li>
                    <li>Getz</li>
                    <li style="List-style-type: none;"><br></li>
                    <li style="List-style-type: none;"><b>KIA</b></li>
                    <li>Picanto</li>
                    <li>Pride</li>
                    <li style="List-style-type: none;"><br></li>
                    <li style="List-style-type: none;"><b>CHEVROLET</b></li>
                    <li>Spark</li>
                    <li style="List-style-type: none;"><br></li>
                    <li style="List-style-type: none;"><b><br></b></li>
                    <listyle="List-style-type: none;" ><br></li>
                  </ul>
            </p>
            </div>


      <div class="form-group">
        <div style="width: 100%;display: inline-block;border: 1px solid #D3D3D3;padding-bottom: 1%;padding-top: 1%;padding-right: 2%;padding-left: 2%;border-radius: 15px;">
        <label style="color: #868686;font-size: 12px;" for="package">Type</label>
         <select style="border-radius: 10px;border-color: none; border-style: none;font-size: 14px" name="package_type" id="package_type" onchange="dusplay_car_size_and_billing_summary()"  class="form-control">
                <option value="<?php echo "Basic";?>">
                    <?php echo "Basic";?>
                </option>
                <option value="<?php echo "Premium";?>">
                    <?php echo "Premium";?>
                </option>
                <option value="<?php echo "Ultimate";?>">
                    <?php echo "Ultimate";?>
                </option>
            </select>
      </div>
    </div>

      <div class="form-group">
        <label style="color: #868686;font-size: 12px;">Package Inclusions</label><br/>
            <div style=" width: auto;position: relative;display: inline-block;margin:0;padding-top: 1%">
            <p name="package_type_benefits" id="package_type_benefits">
                <ul style="font-size: 14px;" id="ul_text">
                    <li>Exterior Car Wash</li>
                    <li>Glass Cleaning</li>
                    <li>Tire Shine</li>
                    <li>Premium Wax</li>
                </ul>
            </p>
            </div>
        </div>

      
    <label style="color: #868686;font-size: 12px;">Discounts</label>
    <div class="form-group" >
        <div style="width: 100%;display: inline-block;border: 1px solid #D3D3D3;padding-bottom: 1%;padding-top: 1%;padding-right: 2%;padding-left: 2%;border-radius: 15px;">
        <label style="color: #868686;font-size: 12px;" for="discounts">Discount Percentage</label>
         <select onchange="discounts_pop_up_and_service_discounts()" name="discounts" id="discounts" style="border-radius: 10px;border-color: none; border-style: none;font-size: 14px" class="form-control">
                 <option value="<?php echo "none";?>">
                    <?php echo "0%";?>
                </option>
                <option value="<?php echo "ten";?>">
                    <?php echo "10%";?>
                </option>
                <option value="<?php echo "twenty";?>">
                    <?php echo "20%";?>
                </option>
                <option value="<?php echo "thirty";?>">
                    <?php echo "30%";?>
                </option>
                <option value="<?php echo "forty";?>">
                    <?php echo "40%";?>
                </option>
                <option value="<?php echo "fifty";?>">
                    <?php echo "50%";?>
                </option>
                <option value="<?php echo "sixty";?>">
                    <?php echo "60%";?>
                </option>
                <option value="<?php echo "seventy";?>">
                    <?php echo "70%";?>
                </option>
                <option value="<?php echo "eighty";?>">
                    <?php echo "80%";?>
                </option>
                <option value="<?php echo "ninety";?>">
                    <?php echo "90%";?>
                </option>
                <option value="<?php echo "onehundred";?>">
                    <?php echo "100%";?>
                </option>
                
            </select>
      </div>
    </div>

    <div class="form-group" >
    <div id="discount_promo_code" style="position: relative;display: none;" class="form-group">
        <div style="float:left; width: 200%;position: relative;display: inline-block;margin:0;border: 1px solid #D3D3D3;padding-bottom: 1%;padding-top: 1%;padding-right: 2%;padding-left: 2%;border-radius: 15px;">
        <label style="color: #868686;font-size: 12px;" for="promocode">Promo Code</label>
        <input style="border-radius: 10px;border-color: none; border-style: none;font-size: 14px" value="none" class="form-control" type="text" id="promo" name="promo" placeholder="Enter promo code here. (Disregard if none)">
        </div>
    </div>
    </div>


    <div class="form-group" >
    <div id="discount_reason_container" style="width:  100%;position: relative;display: none;" class="form-group" >
        <div style="float:left; width: 100%;position: relative;display: inline-block;margin:0;border: 1px solid #D3D3D3;padding-bottom: 1%;padding-top: 1%;padding-right: 2%;padding-left: 2%;border-radius: 15px;" >
        <label style="color: #868686;font-size: 12px;" for="discountreason">Discount Reason</label>
        <input style="border-radius: 10px;border-color: none; border-style: none;font-size: 14px" class="form-control" type="text" id="promo_reason" name="promo_reason" placeholder="Enter discount reason here. (Required)">
        </div>
    </div>
    </div>
    
    <label style="color: #868686;font-size: 12px;">Extras</label>
     <div class="form-group" >
        <div style="width: 100%;display: inline-block;border: 1px solid #D3D3D3;padding-bottom: 1%;padding-top: 1%;padding-right: 2%;padding-left: 2%;border-radius: 15px;">
        <label style="color: #868686;font-size: 12px;" for="discounts">Additional Charges</label>
         <select onchange="pop_up_additionals()" name="additionals" id="additionals" style="border-radius: 10px;border-color: none; border-style: none;font-size: 14px" class="form-control">
                 <option value="<?php echo "none";?>">
                    <?php echo "None";?>
                </option>
            
                <option value="<?php echo "others";?>">
                    <?php echo "Others";?>
                </option>
            </select>
      </div>
    </div>

    <div id="additionals_container" style="position: relative;display: none;background: white;width:100%;" class="form-group">
        <div style="float:left; width: 100%;position: relative;display: inline-block;margin:0;border: 1px solid #D3D3D3;padding-bottom: 1%;padding-top: 1%;padding-right: 2%;padding-left: 2%;border-radius: 15px;">
        <label id="label_additionals" style="color: #868686;font-size: 12px;"></label>
        <input onkeyup="others_billing()" style="border-radius: 10px;border-color: none; border-style: none;font-size: 14px" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57" class="form-control" type="number" min="0" id="additional_amount" name="additional_amount" placeholder="Enter Amount here." value="0" novalidate>
        </div>
    </div>
    <div style="display: none;" id="other_notes_container">
    <label style="color: #868686;font-size: 12px;">Add Note</label>
    <div class="form-group">
        <div style="widht: 100%;display:block;border: 1px solid #D3D3D3;padding-bottom: 1%;padding-top: 1%;padding-right: 2%;padding-left: 2%;border-radius: 15px;">
         <textarea style="border-radius: 10px;border-color: none; border-style: none;font-size: 14px;width: 100%;" id="note" name="note" placeholder="Note here" class="form-control"></textarea>
        </div>
    </div>
    </div>

    <div style="width: 100%; height: 0.1vh; background: #DCDCDC;overflow:hidden;margin-top:10%;margin-bottom: 5%;"></div>

    <label style="color: black;font-size: 18px;font-weight: bold;">Product Orders</label>
    <br>
    <br>

    <div style="width: 100%;background: white;border: 2px solid #ECECEC;margin:0;padding:5% 5%;border-radius: 10px;">
    <label style="color: black;font-size: 18px;font-weight: bold;text-align: center;width:100%;margin:0px;overflow: hidden;">Additional Products</label>
    <label style="color: black;font-size: 12px;font-weight: normal;text-align: center;width:100%;margin:0px;overflow: hidden;color: #8E8E93">Place a product order together with this tracking form.</label>
    <br>
    
    <br>
        <a onclick="return cache_all_form_date()" href="CC-ProductPurchaseTrackerForm.php?job_listing_id=<?php echo $job_listing_id;?>" style="display: block;font-size: 14px;background: #0279F6;border:1px solid #0279F6;padding-bottom: 3%;padding-left: 2.5%;padding-right: 2.5%;padding-top: 3%;text-align: center;border-radius: 100px;color: white;font-weight: bold;width:80%;margin-left:10%;" id="bind_product_btn">Add a Product Order</a>
          
        <div style="width: 80%;margin-left:10%;padding-bottom: 0.5%;background: white;margin-top: 4%;">
            <p style="float:left;display: block;width:49%;font-size: 14px;background: #0279F6;border:1px solid #0279F6;padding-bottom: 3%;padding-left: 2.5%;padding-right: 2.5%;padding-top: 3%;text-align: center;border-radius: 100px;color: white;font-weight: bold;margin-left:0%;" id="myBtn">view order</p>
            <a onclick="return clear_products_local_data()" href="Php_Function/removeproductorder.php?job_listing_id=<?php echo $job_listing_id;?>" style="float:right;display: block;width:49%;font-size: 14px;background: white;border:1px solid #8E8E93;padding-bottom: 3%;padding-left: 2.5%;padding-right: 2.5%;padding-top: 3%;text-align: center;border-radius: 100px;color: #8E8E93;font-weight: bold;margin-left:0%;" id="remove_order_btn">remove order</a>
            <script>
              if(localStorage.getItem("products_order_bind_id") === null){
                document.getElementById("remove_order_btn").style.pointerEvents = "none";
                document.getElementById("remove_order_btn").style.background = "white";
                document.getElementById("remove_order_btn").style.color = "#98989D";
              
              }else{
                document.getElementById("remove_order_btn").style.pointerEvents = "auto";
                document.getElementById("remove_order_btn").style.background = "#98989D";
                document.getElementById("remove_order_btn").style.color = "white";
               
              }   
            </script>
            <br>
        </div>
        

        <br>
         
    </div>
    <br>
    <div style="width: 100%; height: 0.1vh; background: #DCDCDC;overflow:hidden;margin-top:5%;margin-bottom: 5%;"></div>

    <label style="color: black;font-size: 18px;font-weight: bold;">Billing Summary</label><br/>
            <div style=" width: 100%;position: relative;display: inline-block;margin:0;padding-top: 1%">
            <p name="package_type_benefits" id="package_type_benefits">
 <table>
  <tr >
    <th style="color: #868686;">Service Billing</th>
    <th style="text-align: right;color: #868686;">(PHP) Amount</th>
  </tr>
  
  <tr>
    <td id="package_label">Basic Package - Small</td>
    <td ><input id="package_amount" type="number" style="border: none; font-size: 15px;text-align: right;outline:none;height:auto;padding: 0;background: #DDDDDD;" value="280" readonly></td>
  </tr>

  <tr>
    <td id="discount_label">Discount - 0%</td>
    <td style="text-align: right;"><input id="discount_amount" name="discount_amount" type="number" style="border: none; font-size: 15px;text-align: right;outline:none;height:auto;padding: 0;background: white;" value="0" readonly></td>
   
  </tr>

  <tr>
    <td id="others">Manager's Discount</td>
    <td style="text-align: right;"><input id="service_managers_discount" name="service_managers_discount" type="number" style="border: none; font-size: 15px;text-align: right;outline:none;height:auto;padding: 0;background: #DDDDDD;" value="0" readonly></td>
  </tr>

  <tr>
    <td id="others">Others</td>
    <td style="text-align: right;"><input id="other_amount" name="other_amount" type="number" style="border: none; font-size: 15px;text-align: right;outline:none;height:auto;padding: 0;background: white;" value="0" readonly></td>
  </tr>

  <tr>
    <td id="package_label_16">VAT</td>
    <td style="text-align: right;"><input name="package_vat_amount" id="package_vat_amount" type="number" style="border: none; font-size: 15px;text-align: right;outline:none;height:auto;padding: 0;background: #DDDDDD;" value="0" readonly></td>
  </tr>

  <tr>
    <td id="service_subtotal_label" style="font-weight: bold;background: black;color: white;">Service Total:</td>
    <td style="text-align: right;background: black;"><input id="service_subtotal" name="service_subtotal" type="number" style="font-weight: bold;background: black;color: white;border: none; font-size: 15px;text-align: right;outline:none;height:auto;padding: 0;;" value="280" readonly></td>
  </tr>

</table>

<?php 
      
// NOTE kay product_commissions where job_order_id is not customer_id;

//Coonect to Custoemr Table
// $query_add_on_pre = "Select * from customer where customer_id = $job_listing_id;";
// $query_run_add_on_pre = mysqli_query($connection, $query_add_on_pre);
// $check_job_orders_add_on_pre = mysqli_num_rows($query_run_add_on_pre) > 0;

// $customer_id_name = "";

// while($row = mysqli_fetch_array($query_run_add_on_pre)){
//   $customer_id_name = $row['Name'];
// } 

//       $query_add_on = "Select * from product_commissions where customer_name = $customer_id_name;";
//       $query_run_add_on = mysqli_query($connection, $query_add_on);
//       $check_job_orders_add_on = mysqli_num_rows($query_run_add_on) > 0;

      $total_product_price = 0;
      $discount_add_on_value = 0;
      $vat_add_on_value = 0;
      $sub_total_value = 0;
      

//       while($row = mysqli_fetch_array($query_run_add_on)){
//         $total_product_price = $row['total'];
//         $discount_add_on_value = $row['discount_value'];
//         $vat_add_on_value = $row['vat'];
//         $sub_total_value = $row['subtotal'];
//       } 

//echo "<br><font style='font-size: 12px;'>*Addition of Products and Product Billing is currently disabled.</font>";
    ?>

<br>
<table>
  <tr>
    <th style="color: #868686;">Add-on Product Billing</th>
    <th style="text-align: right;color: #868686;">(PHP) Amount</th>
  </tr>
  
  <tr>
    <td id="package_label_14">Subtotal</td>
    <td style="text-align: right;"><input id="additional_other_amount" type="number" style="border: none; font-size: 15px;text-align: right;outline:none;height:auto;padding: 0;background: #DDDDDD;" value="<?php echo $sub_total_value;?>" readonly></td>
  </tr>

  <tr>
    <td id="additional_discount_label">Discount - 0%</td>
    <td style="text-align: right;"><input id="additional_discount_amount" type="number" style="border: none; font-size: 15px;text-align: right;outline:none;height:auto;padding: 0;background: white;" value="<?php echo $discount_add_on_value;?>" readonly></td>
  </tr>

  <tr>
    <td id="others">Manager's Discount</td>
    <td style="text-align: right;"><input id="product_managers_discount" name="product_managers_discount" type="number" style="border: none; font-size: 15px;text-align: right;outline:none;height:auto;padding: 0;background: #DDDDDD;" value="0" readonly></td>
  </tr>

  <tr>
    <td id="package_label_12">VAT</td>
    <td style="text-align: right;"><input id="additional_vat_amount" type="number" style="border: none; font-size: 15px;text-align: right;outline:none;height:auto;padding: 0;background: white;" value="<?php echo $vat_add_on_value;?>" readonly></td>
  </tr>

  <tr>
    <td id="package_label_13" style="font-weight: bold;background: black;color: white;">Product Total:</td>
    <td style="text-align: right;background: black;"><input id="additional_sub_total" type="number" style="font-weight: bold; color: white;border: none; font-size: 15px;text-align: right;outline:none;height:auto;padding: 0;background: black;" value="<?php echo $total_product_price;?>" readonly></td>
  </tr>
  
</table>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close" style="color: black;text-align: right;">&times;</span>
    
    <p style="color: black;font-size: 22px;font-weight: bold;overflow: hidden; margin: 0;">Products Ordered</p>
    <p style="font-size: 14px;color: gray;overflow: hidden; margin: 0;" id="modal_products_date">You can place product orders above.</p>
    <br>

    <p style="font-size: 14px;color:#676767;padding-top: 5%;" id="modal_empty_display">*Add product orders and view them here.</p>

    <!-- WAX -->
    <div id="wax_content_holder" style="display: none;background: white;height: 100px;border: 1px solid #F0F0F0;padding: 3%;padding-bottom: 5%;">
       <div style="background: white;float: left;display: inline-block;width:20%;text-align: center;height: 100%;">
          <!-- Insert Image here #0179F1; -->
          <p style="background: white;color: #0179F1;font-weight: bold;font-size: 16px;margin-top: 20%;padding-bottom: 5px;border: 1.5px solid #0179F1;border-radius: 5px;">₱499</p>
          
      </div>  
      <div style="background: white;float: left;display: block;height: 100%;width:60%;display: inline-block;margin-left: 5%;">
          <span style="padding-left: 4%;font-weight: normal;background: white;font-weight: normal;font-size: 14px;">Wax - (500ml)</span>
          
          <div style="margin-left: 2%;background:#F0F0F0;width: 40%;display: block;text-align: center;margin-top: 2%;">
         Qty: 
         <input type="number" name="wax_quantity" value="0" maxlength="2" min="0" id="wax_quantity" style="border: none;text-align: center;font-size:16px;width:25%;height:;padding: 0%;font-weight: normal;background: #F0F0F0;display: inline-block;" readonly/>
          </div>
    </div>
    <div style="background: white;float: left;display: block;height: 100%;width:12%;">
          <!-- Insert Image here -->
          <p id="wax_quantity_output">₱0</p>
      </div>  
    </div>

    <!-- Engine Shine-->
    <div id="es_content_holder" style="display: none;background: white;height: 100px;border: 1px solid #F0F0F0;padding: 3%;padding-bottom: 5%;">
      <div style="background: white;float: left;display: inline-block;width:20%;text-align: center;height: 100%;">
          <!-- Insert Image here #0179F1; -->
          <p style="background: white;color: #0179F1;font-weight: bold;font-size: 16px;margin-top: 20%;padding-bottom: 5px;border: 1.5px solid #0179F1;border-radius: 5px;">₱499</p>
          
      </div> 
      <div style="background: white;float: left;display: block;height: 100%;width:60%;display: inline-block;margin-left: 5%;">
          <span style="padding-left: 4%;font-weight: normal;background: white;font-weight: normal;font-size: 14px;">Engine Shine - (500ml)</span>
          
          <div style="margin-left: 2%;background:#F0F0F0;width: 40%;display: block;text-align: center;margin-top: 2%;">
         Qty: 
         <input type="number" name="es_quantity" value="0" maxlength="2" min="0" id="es_quantity" style="border: none;text-align: center;font-size:16px;width:25%;height:;padding: 0%;font-weight: normal;background: #F0F0F0;display: inline-block;" readonly/>
          </div>
    </div>
    <div style="background: white;float: left;display: block;height: 100%;width:12%;">
          <!-- Insert Image here -->
          <p id="es_quantity_output">₱0</p>
      </div>  
    </div>

    <!-- Engine Degreaser-->
    <div id="ed_content_holder" style="display: none;background: white;height: 100px;border: 1px solid #F0F0F0;padding: 3%;padding-bottom: 5%;">
      <div style="background: white;float: left;display: inline-block;width:20%;text-align: center;height: 100%;">
          <!-- Insert Image here #0179F1; -->
          <p style="background: white;color: #0179F1;font-weight: bold;font-size: 16px;margin-top: 20%;padding-bottom: 5px;border: 1.5px solid #0179F1;border-radius: 5px;">₱499</p>
          
      </div> 
      <div style="background: white;float: left;display: block;height: 100%;width:60%;display: inline-block;margin-left: 5%;">
          <span style="padding-left: 4%;font-weight: normal;background: white;font-weight: normal;font-size: 14px;">Engine Degreaser - (500ml)</span>
          
          <div style="margin-left: 2%;background:#F0F0F0;width: 40%;display: block;text-align: center;margin-top: 2%;">
         Qty: 
         <input type="number" name="ed_quantity" value="0" maxlength="2" min="0" id="ed_quantity" style="border: none;text-align: center;font-size:16px;width:25%;height:;padding: 0%;font-weight: normal;background: #F0F0F0;display: inline-block;" readonly/>
          </div>
    </div>
    <div style="background: white;float: left;display: block;height: 100%;width:12%;">
          <!-- Insert Image here -->
          <p id="ed_quantity_output">₱0</p>
      </div>  
    </div>

    <!-- Engine Degreaser-->
    <div id="freshener_content_holder" style="display: none;background: white;height: 100px;border: 1px solid #F0F0F0;padding: 3%;padding-bottom: 5%;">
      <div style="background: white;float: left;display: inline-block;width:20%;text-align: center;height: 100%;">
          <!-- Insert Image here #0179F1; -->
          <p style="background: white;color: #0179F1;font-weight: bold;font-size: 16px;margin-top: 20%;padding-bottom: 5px;border: 1.5px solid #0179F1;border-radius: 5px;">₱299</p>
          
      </div> 
      <div style="background: white;float: left;display: block;height: 100%;width:60%;display: inline-block;margin-left: 5%;">
          <span style="padding-left: 4%;font-weight: normal;background: white;font-weight: normal;font-size: 14px;">Freshener - (250ml)</span>
          
          <div style="margin-left: 2%;background:#F0F0F0;width: 40%;display: block;text-align: center;margin-top: 2%;">
         Qty: 
         <input type="number" name="freshener_quantity" value="0" maxlength="2" min="0" id="freshener_quantity" style="border: none;text-align: center;font-size:16px;width:25%;height:;padding: 0%;font-weight: normal;background: #F0F0F0;display: inline-block;" readonly/>
          </div>
    </div>
    <div style="background: white;float: left;display: block;height: 100%;width:12%;">
          <!-- Insert Image here -->
          <p id="freshener_quantity_output">₱0</p>
      </div>  
    </div>

    <!-- WM Degreaser-->
    <div id="wmremover_content_holder" style="display: none;background: white;height: 100px;border: 1px solid #F0F0F0;padding: 3%;padding-bottom: 5%;">
      <div style="background: white;float: left;display: inline-block;width:20%;text-align: center;height: 100%;">
          <!-- Insert Image here #0179F1; -->
          <p style="background: white;color: #0179F1;font-weight: bold;font-size: 16px;margin-top: 20%;padding-bottom: 5px;border: 1.5px solid #0179F1;border-radius: 5px;">₱299</p>
          
      </div> 
      <div style="background: white;float: left;display: block;height: 100%;width:60%;display: inline-block;margin-left: 5%;">
          <span style="padding-left: 4%;font-weight: normal;background: white;font-weight: normal;font-size: 14px;">WM Remover - (250ml)</span>
          
          <div style="margin-left: 2%;background:#F0F0F0;width: 40%;display: block;text-align: center;margin-top: 2%;">
         Qty: 
         <input type="number" name="wmremover_quantity" value="0" maxlength="2" min="0" id="wmremover_quantity" style="border: none;text-align: center;font-size:16px;width:25%;height:;padding: 0%;font-weight: normal;background: #F0F0F0;display: inline-block;" readonly/>
          </div>
    </div>
    <div style="background: white;float: left;display: block;height: 100%;width:12%;">
          <!-- Insert Image here -->
          <p id="wmremover_quantity_output">₱0</p>
      </div>  
    </div>
    <!-- END of Products modal display-->

  </div>

</div>

<br>

<table style="border-radius: 10px;">
  <tr  >
    <th style="background: #0279F6; color: white;">Grand Total:</th>
    <th style="text-align: right;background: #0279F6;"><input style="border: none; font-size: 18px;text-align: right;outline:none;height:auto;padding: 0;background: #0279F6;font-weight: bold;color: white;" type="number" id="total_billing_amount" value="280" readonly></th>
  </tr>
</table>
               
            </p>
            </div>
    
            <div style="width: 100%; height: 0.1vh; background: #DCDCDC;overflow:hidden;margin-top:5%;margin-bottom: 5%;"></div>

      <input class="btn btn-primary btn-lg btn-block" style="background-color:black;border-color:black;font-size:16px;border-radius: 200px;padding-top:13px;padding-bottom:13px;" value="Submit" type="submit"/>

    </form>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2020-2021 Xoooom Autospa</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>  
        </ul>
    </footer>

   


</body>
<script>
    function clear_products_local_data(){       
      var service_data = cache_all_form_date();
      if(service_data){      
            localStorage.removeItem("products_order_bind_id");
            localStorage.removeItem("products_date");
            localStorage.removeItem("products_workers");
            localStorage.removeItem("products_wax_quantity");
            localStorage.removeItem("products_engine_shine_quantity");
            localStorage.removeItem("products_engine_degreaser_quantity");
            localStorage.removeItem("products_freshener_quantity");
            localStorage.removeItem("products_water_remover_quantity");
            localStorage.removeItem("products_discounts");
            localStorage.removeItem("products_promo");
            localStorage.removeItem("products_note");
            localStorage.removeItem("products_subtotal_amount");
            localStorage.removeItem("products_additional_discount_amount");
            localStorage.removeItem("products_additional_vat_amount");
            localStorage.removeItem("products_additional_sub_total");

            if(localStorage.getItem("products_additional_sub_total") === null){
              return true;
            }else{
              return false;
            }
      }else{
          alert("Please try again.");
      }
    }
</script>
<script>
//Modal Scripts

// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery-migrate-3.0.0.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
<script>
function cache_all_form_date(){
  // Check browser support
  
  if (typeof(Storage) !== "undefined") {
    // data storage Set Data
    //SAMPLE: localStorage.setItem("date_serviced", mDate);
    //worker tracker bind id
    localStorage.setItem("service_order_bind_id", <?php echo $job_listing_id;?>);
    //date
    var mDate = document.getElementById("date_serviced").value;
    //alert("Date: "+mDate);
    localStorage.setItem("date_serviced", mDate);
    //scheduled time
    var mTime = document.getElementById("time_serviced").value;
    localStorage.setItem("time_serviced", mTime);
    //name of perssonel
    var mWorker = document.getElementById("workers").value;
    localStorage.setItem("workers", mWorker);
    //name of personnel partner
    var mTagWorker = document.getElementById("tag_workers").value;
    localStorage.setItem("tag_workers", mTagWorker);
    //Plate number
    var mPlateNum = document.getElementById("platenumber").value;
    localStorage.setItem("platenumber", mPlateNum);
    //size
    var mSize = document.getElementById("car_size_details").value;
    localStorage.setItem("car_size_details", mSize);
    //type
    var mType = document.getElementById("package_type").value;
    localStorage.setItem("package_type", mType);
    //discount (0%,10%...)
    var mDiscountPercentage = document.getElementById("discounts").value;
    localStorage.setItem("discounts", mDiscountPercentage);
    //discount reason
    var mDiscountReason = document.getElementById("promo_reason").value;
    localStorage.setItem("promo_reason", mDiscountReason);
    //additinal charges
    var mAdditionalChargeOption = document.getElementById("additionals").value;
    localStorage.setItem("additionals", mAdditionalChargeOption);
    //others amount
    var mAdditionalAmount = document.getElementById("additional_amount").value;
    localStorage.setItem("additional_amount", mAdditionalAmount);
    //others add note
    var mNote = document.getElementById("note").value;
    localStorage.setItem("note", mNote);

    //Customer Name
    localStorage.setItem("customer_name", "<?php echo $customer_name;?>");

    //Customer Contact Number
    localStorage.setItem("contactnumber", "<?php echo $contactnumber?>");


    // Retrieve
    //SAMPLE: document.getElementById("result").innerHTML = localStorage.getItem("lastname");
    return true;
   } else {
     document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Storage...";
     return true;
   }
}
</script>
<script>
function display_page_Loading(){
  document.getElementById("loader_visuals").style.display = "block";
  setTimeout(() => { 
    document.getElementById("loader_visuals").style.display = "none";
    alert("You may be experiencing slow connections.");

  }, 30000);
}

//On Load of page (Start Scripts here)
window.onload = function(){
  document.getElementById("loader_visuals").style.display = "none";

    //Checks if product order id binder exists.
    if(localStorage.getItem("service_order_bind_id") === null){
      //Worker has not added/binded an order with service commission form.

      //Checks if Worker binded or added a product to a customer service.
     document.getElementById("modal_empty_display").style.display = "block";
     document.getElementById("modal_empty_display").innerHTML = "Add a product orders and view items here.";

    }else{
      setAutoFillData();

      //Check if product has been added.
      if(localStorage.getItem("products_order_bind_id") === null){
          //Product Order has not been added yet.
      }else{     
            if((localStorage.getItem("products_order_bind_id")).toString() === "<?php echo $job_listing_id;?>"){
              
              document.getElementById("modal_empty_display").style.display = "none";

              document.getElementById("bind_product_btn").innerHTML = "Edit Product Order";
              document.getElementById("bind_product_btn").style.background = "white";
              document.getElementById("bind_product_btn").style.color = "#656565";
              document.getElementById("bind_product_btn").style.border = "1px solid #656565";
              document.getElementById("bind_product_btn").style.fontWeight = "bold";

                  //Check if local storage key variable from products exists
                  if (localStorage.getItem("products_subtotal_amount") === null) {
                    //Either Service/Commission Tracker has not tyet added products or something is broken.
                          
                  }else{

                    //Subtotal
                    document.getElementById("additional_other_amount").value = localStorage.getItem("products_subtotal_amount");
                    
                    //Discount Label
                    var discount_percentage = "none";
                    if (localStorage.getItem("products_subtotal_amount") === null){
                      discount_percentage = "none";
                    }else{
                      discount_percentage = localStorage.getItem("products_discounts");
                    }

                    //Modal Products date
                    document.getElementById("modal_products_date").innerHTML = "Ref #: <?php echo $job_listing_id;?> | "+" Transaction Date: "+localStorage.getItem("products_date");
                    
                    var discount_symbol_value = "0%";
                    if(discount_percentage === "none"){
                      discount_symbol_value = "0%";
                      document.getElementById("additional_discount_label").innerHTML = "Discount - "+discount_symbol_value;
                    }else if(discount_percentage === "ten"){
                      discount_symbol_value = "10%";
                      document.getElementById("additional_discount_label").innerHTML = "Discount - "+discount_symbol_value;
                    }else if(discount_percentage === "twenty"){
                      discount_symbol_value = "20%";
                      document.getElementById("additional_discount_label").innerHTML = "Discount - "+discount_symbol_value;
                    }else if(discount_percentage === "thirty"){
                      discount_symbol_value = "30%";
                      document.getElementById("additional_discount_label").innerHTML = "Discount - "+discount_symbol_value;
                    }else if(discount_percentage === "forty"){
                      discount_symbol_value = "40%";
                      document.getElementById("additional_discount_label").innerHTML = "Discount - "+discount_symbol_value;
                    }else if(discount_percentage === "fifty"){
                      discount_symbol_value = "50%";
                      document.getElementById("additional_discount_label").innerHTML = "Discount - "+discount_symbol_value;
                    }else if(discount_percentage === "sixty"){
                      discount_symbol_value = "60%";
                      document.getElementById("additional_discount_label").innerHTML = "Discount - "+discount_symbol_value;
                    }else if(discount_percentage === "seventy"){
                      discount_symbol_value = "70%";
                      document.getElementById("additional_discount_label").innerHTML = "Discount - "+discount_symbol_value;
                    }else if(discount_percentage === "eighty"){
                      discount_symbol_value = "80%";
                      document.getElementById("additional_discount_label").innerHTML = "Discount - "+discount_symbol_value;
                    }else if(discount_percentage === "ninety"){
                      discount_symbol_value = "90%";
                      document.getElementById("additional_discount_label").innerHTML = "Discount - "+discount_symbol_value;
                    }else if(discount_percentage === "onehundred"){
                      discount_symbol_value = "100%";
                      document.getElementById("additional_discount_label").innerHTML = "Discount - "+discount_symbol_value;
                    }else{
                      discount_symbol_value = "0%";
                      document.getElementById("additional_discount_label").innerHTML = "Discount - "+discount_symbol_value;
                    }

                    //Discount Amount
                    if (localStorage.getItem("products_additional_discount_amount") === null){
                        
                    }else{
                      document.getElementById("additional_discount_amount").value = localStorage.getItem("products_additional_discount_amount");
                    }

                    //VAT
                    if (localStorage.getItem("products_additional_vat_amount") === null){
                        
                    }else{
                      document.getElementById("additional_vat_amount").value = localStorage.getItem("products_additional_vat_amount");
                    }
                    
                    //Total Amount
                    if (localStorage.getItem("products_additional_sub_total") === null){
                        
                    }else{
                      document.getElementById("additional_sub_total").value = localStorage.getItem("products_additional_sub_total");
                    }

                    setAutoFillData();
                    DisplayProductItems();
                    subtotal_service_bill();
                    
                  }

              }else{
                //Clear held data if browser has different bind data
                localStorage.clear();
                //alert("deleting Bind data\n"+localStorage.getItem("products_order_bind_id")+"\n"+"<?php echo $job_listing_id;?>");
              }
        }
    }
}

function setAutoFillData(){
      //alert(localStorage.getItem("service_order_bind_id")+" | <?php echo $job_listing_id;?>");
      if(localStorage.getItem("service_order_bind_id") === <?php echo json_encode($job_listing_id);?>){
        //alert("Local Storage Data ID matches with tracker form.");

        //Worker  
      if(localStorage.getItem("workers") === null){
        
      }else{

          //alert("Script Running");
            var i_selected_personnel_main = localStorage.getItem("workers");
            var i_default_personnel_main = document.getElementById("workers").getElementsByTagName("option");

            for (var i = 0; i < i_default_personnel_main.length; i++) {
              
              if(i_selected_personnel_main == i_default_personnel_main[i].value){
              
                document.getElementById('workers').getElementsByTagName('option')[i].selected = 'selected';
                
                update_tag_personnel_options();
              }
            }
      }

      //Worker Tag
      if(localStorage.getItem("tag_workers") === null){
        
      }else{
          //alert("Script Running: "+localStorage.getItem("tag_workers"));
              var selected_personnel_tag = localStorage.getItem("tag_workers");
              var default_personnel_tag = document.getElementById("tag_workers").getElementsByTagName("option");

              for (var i = 0; i < default_personnel_tag.length; i++) {

              if(selected_personnel_tag == default_personnel_tag[i].value){
              
                document.getElementById('tag_workers').getElementsByTagName('option')[i].selected = 'selected';
                  update_main_personnel_option();
                  update_tag_personnel_options();
              }
            }
      }

      //Plate
        if(localStorage.getItem("platenumber") === null){
            
        }else{
          document.getElementById("platenumber").value = localStorage.getItem("platenumber");
        }


        //Car Size   
        if(localStorage.getItem("car_size_details") === null){
              
        }else{
          var selected_car_size = localStorage.getItem("car_size_details");
          var default_car_size_selector = document.getElementById("car_size_details").getElementsByTagName("option");

                for (var i = 0; i < default_car_size_selector.length; i++) {
                // lowercase comparison for case-insensitivity
                //alert("Tag Value: "+selected_personnel_tag[i].value);

                if(selected_car_size == default_car_size_selector[i].value){
                
                  document.getElementById('car_size_details').getElementsByTagName('option')[i].selected = 'selected';
                  dusplay_car_size_and_billing_summary();
                }
              }
        }

        //Car Type
        if(localStorage.getItem("package_type") === null){
              
        }else{
            var selected_package_type = localStorage.getItem("package_type");
            var default_package_type_selector = document.getElementById("package_type").getElementsByTagName("option");
        
            for (var i = 0; i < default_package_type_selector.length; i++) {
            
                if(selected_package_type == default_package_type_selector[i].value){
                
                  document.getElementById('package_type').getElementsByTagName('option')[i].selected = 'selected';
                  dusplay_car_size_and_billing_summary();
                }
            }
        }

        //Discount
        if(localStorage.getItem("discounts") === null){
              
        }else{
            var selected_discount_percentage = localStorage.getItem("discounts");
            var default_discount_percentage = document.getElementById("discounts").getElementsByTagName("option");

            for (var i = 0; i < default_discount_percentage.length; i++) {
                if(selected_discount_percentage == default_discount_percentage[i].value){
                
                  document.getElementById('discounts').getElementsByTagName('option')[i].selected = 'selected';
                  discounts_pop_up_and_service_discounts();
                }
            }
        }

        //Discount Reason
        if(localStorage.getItem("promo_reason") === null){
              
        }else{
            document.getElementById("promo_reason").value = localStorage.getItem("promo_reason");
        }

        //Additional Charges
        if(localStorage.getItem("additionals") === null){
              
        }else{
            var selected_extras_option = localStorage.getItem("additionals");
            var default_extras_option = document.getElementById("additionals").getElementsByTagName("option");
            //var selected_personnel_tag =  document.getElementById("tag_workers").getElementsByTagName("option");

            //alert("Worker: "+selected_personnel_main);

            for (var i = 0; i < default_extras_option.length; i++) {

                if(selected_extras_option == default_extras_option[i].value){
                
                  document.getElementById('additionals').getElementsByTagName('option')[i].selected = 'selected';
                  pop_up_additionals();
                }
            }
        }

        //Others Amount
        if(localStorage.getItem("additional_amount") === null){
              
        }else{
            document.getElementById("additional_amount").value = localStorage.getItem("additional_amount");
            others_billing();
        }

        //Add Note
        if(localStorage.getItem("note") === null){
              
        }else{
          document.getElementById("note").innerHTML = localStorage.getItem("note");
        }

        subtotal_service_bill();

      }else{
        alert("Clearing cached data from previous form.");
        localStorage.clear();

      }
      
}

function DisplayProductItems(){
  
  var product_wax_qty = localStorage.getItem("products_wax_quantity");
  var product_es_qty = localStorage.getItem("products_engine_shine_quantity");
  var product_ed_qty = localStorage.getItem("products_engine_degreaser_quantity");
  var product_freshener_qty = localStorage.getItem("products_freshener_quantity");
  var product_wmremover_qty = localStorage.getItem("products_water_remover_quantity");

  //WAX
  if(product_wax_qty === "0" || product_wax_qty === null){
    document.getElementById("wax_content_holder").style.display = "none";
  }else{
    document.getElementById("wax_content_holder").style.display = "block";
    document.getElementById("wax_quantity").value = product_wax_qty;
    document.getElementById("wax_quantity_output").innerHTML = "₱"+(product_wax_qty*499);
  }

  //Engine Shine
  if(product_es_qty === "0" || product_es_qty === null){
    document.getElementById("es_content_holder").style.display = "none";
  }else{
    document.getElementById("es_content_holder").style.display = "block";
    document.getElementById("es_quantity").value = product_es_qty;
    document.getElementById("es_quantity_output").innerHTML = "₱"+(product_es_qty*499);
  }

  //Engine Degreaser
  if(product_ed_qty === "0" || product_ed_qty === null){
    document.getElementById("ed_content_holder").style.display = "none";
  }else{
    document.getElementById("ed_content_holder").style.display = "block";
    document.getElementById("ed_quantity").value = product_ed_qty;
    document.getElementById("ed_quantity_output").innerHTML = "₱"+(product_ed_qty*499);
  }

  //Freshener
  if(product_freshener_qty === "0" || product_freshener_qty === null){
    document.getElementById("freshener_content_holder").style.display = "none";
  }else{
    document.getElementById("freshener_content_holder").style.display = "block";
    document.getElementById("freshener_quantity").value = product_freshener_qty;
    document.getElementById("freshener_quantity_output").innerHTML = "₱"+(product_freshener_qty*299);
  }

  //Watermark Remover
  if(product_wmremover_qty === "0" || product_wmremover_qty === null){
    document.getElementById("wmremover_content_holder").style.display = "none";
  }else{
    document.getElementById("wmremover_content_holder").style.display = "block";
    document.getElementById("wmremover_quantity").value = product_wmremover_qty;
    document.getElementById("wmremover_quantity_output").innerHTML = "₱"+(product_wmremover_qty*299);
  }

  //document.getElementById("discount_promo_code").style.display = "none";
}

function onBeforePageUnloaded() {
  var txt;
  var r = confirm("Please confirm your tracker form submission.");
  if (r == true) {
    //txt = "You pressed OK!";
    display_page_Loading();
    return true;
  } else {
    return false;
    //txt = "You pressed Cancel!";
  }
}

//  window.onbeforeunload = function() {
     
// //   return "Do you really wanna leave?";
// }

      var service_subtotal = 280;
      var service_discount = 0;
      var service_others = 0;
      var service_vat_amount = 0;

      function submission_check(){
        var personnel_main = document.getElementById("workers").value;
        
        if(personnel_main == "default_personnel"){
          alert("Please select a personnel.");
          return false;
        }else{
          //display_page_Loading();
          return onBeforePageUnloaded();
        }
       
      }
      
      function billing_summary(){
        //Form date
        var package_type = document.getElementById("package_type").value;
        var car_size_details = document.getElementById("car_size_details").value;

        /*var package_label = document.getElementById("package_label").value;
        var package_amount = document.getElementById("package_amount").value;
        var discount_label = document.getElementById("discount_label").value;
        var discount_amount = document.getElementById("discount_amount").value;
        var others_amount = document.getElementById("others_amount").value;
        var package_vat_amount = document.getElementById("package_vat_amount").value;
        var service_subtotal = document.getElementById("service_subtotal").value;*/
     
        //Products
        /*var additional_other_amount = document.getElementById("additional_other_amount").value;
        var additional_discount_label = document.getElementById("additional_discount_label").value;
        var additional_discount_amount = document.getElementById("additional_discount_amount").value;
        var additional_vat_amount = document.getElementById("additional_vat_amount").value;
        var additional_sub_total = document.getElementById("additional_sub_total").value;*/

        //Total Bill
        //var total_billing_amount = document.getElementById("total_billing_amount").value;
     

        if(car_size_details == "Small"){
         
            if(package_type == "Basic"){
              document.getElementById("package_label").innerHTML = "";
              document.getElementById("package_label").innerHTML = "Basic Package - Small";

              document.getElementById("package_amount").value = "";
              document.getElementById("package_amount").value = 280;
              service_subtotal = 280;
              totals_and_subtotal_billings();
              
            }else if(package_type == "Premium"){
             
              document.getElementById("package_label").innerHTML = "";
              document.getElementById("package_label").innerHTML = "Premium Package - Small";

              document.getElementById("package_amount").value = "";
              document.getElementById("package_amount").value = 460;
              service_subtotal = 460;
              totals_and_subtotal_billings();

            }else if(package_type  == "Ultimate"){
              document.getElementById("package_label").innerHTML = "";
              document.getElementById("package_label").innerHTML = "Ultimate Package - Small";

              document.getElementById("package_amount").value = "";
              document.getElementById("package_amount").value = 640;
              service_subtotal = 640;
              totals_and_subtotal_billings();
            }

        }else if(car_size_details == "Medium"){
       
          if(package_type == "Basic"){
              document.getElementById("package_label").innerHTML = "";
              document.getElementById("package_label").innerHTML = "Basic Package - Medium";

              document.getElementById("package_amount").value = "";
              document.getElementById("package_amount").value = 300;
              service_subtotal = 300;
              totals_and_subtotal_billings();

            }else if(package_type == "Premium"){
              document.getElementById("package_label").innerHTML = "";
              document.getElementById("package_label").innerHTML = "Premium Package - Medium";

              document.getElementById("package_amount").value = "";
              document.getElementById("package_amount").value = 500;
              service_subtotal = 500;
              totals_and_subtotal_billings();

            }else if(package_type  == "Ultimate"){
              document.getElementById("package_label").innerHTML = "";
              document.getElementById("package_label").innerHTML = "Ultimate Package - Medium";

              document.getElementById("package_amount").value = "";
              document.getElementById("package_amount").value = 700;
              service_subtotal = 700;
              totals_and_subtotal_billings();
            }
        }else if(car_size_details == "Large"){
          if(package_type == "Basic"){
              document.getElementById("package_label").innerHTML = "";
              document.getElementById("package_label").innerHTML = "Basic Package - Large";

              document.getElementById("package_amount").value = "";
              document.getElementById("package_amount").value = 350;
              service_subtotal = 350;
              totals_and_subtotal_billings();

            }else if(package_type == "Premium"){
              document.getElementById("package_label").innerHTML = "";
              document.getElementById("package_label").innerHTML = "Premium Package - Large";

              document.getElementById("package_amount").value = "";
              document.getElementById("package_amount").value = 600;
              service_subtotal = 600;
              totals_and_subtotal_billings();

            }else if(package_type  == "Ultimate"){
              document.getElementById("package_label").innerHTML = "";
              document.getElementById("package_label").innerHTML = "Ultimate Package - Large";

              document.getElementById("package_amount").value = "";
              document.getElementById("package_amount").value = 850;
              service_subtotal = 850;
              totals_and_subtotal_billings();
            }
        }else if(car_size_details == "Extra Large"){
          
          if(package_type == "Basic"){
              document.getElementById("package_label").innerHTML = "";
              document.getElementById("package_label").innerHTML = "Basic Package - Extra Large";

              document.getElementById("package_amount").value = "";
              document.getElementById("package_amount").value = 400;
              service_subtotal = 400;
              totals_and_subtotal_billings();
            }else if(package_type == "Premium"){
              document.getElementById("package_label").innerHTML = "";
              document.getElementById("package_label").innerHTML = "Premium Package - Extra Large";

              document.getElementById("package_amount").value = "";
              document.getElementById("package_amount").value = 700;
              service_subtotal = 700;
              totals_and_subtotal_billings();

            }else if(package_type  == "Ultimate"){
              document.getElementById("package_label").innerHTML = "";
              document.getElementById("package_label").innerHTML = "Ultimate Package - Extra Large";

              document.getElementById("package_amount").value = "";
              document.getElementById("package_amount").value = 1000;
              service_subtotal = 1000;
              totals_and_subtotal_billings();
            }
        }
       
      }

      function discounts_pop_up_and_service_discounts(){
        discounts_pop_up();
        service_discounts();
        subtotal_service_bill();
      }

      function service_discounts(){
        
        var discounts = document.getElementById("discounts").value;

        var discount_percent_in_decimal;
        
        if(discounts == "none"){
         
          discount_percent_in_decimal = 0;
          service_discount = service_subtotal * 0;

          document.getElementById("discount_label").innerHTML = "";
          document.getElementById("discount_label").innerHTML = "Discount - 0%";

          document.getElementById("discount_amount").value = "";
          document.getElementById("discount_amount").value = service_subtotal * 0;
        }else if(discounts == "ten"){
          discount_percent_in_decimal = 0.10;
          service_discount = service_subtotal * discount_percent_in_decimal;

          document.getElementById("discount_label").innerHTML = "";
          document.getElementById("discount_label").innerHTML = "Discount - 10%";

          document.getElementById("discount_amount").value = "";
          document.getElementById("discount_amount").value = -(service_subtotal * discount_percent_in_decimal);
        }else if(discounts == "twenty"){
          discount_percent_in_decimal = 0.20;
          service_discount = service_subtotal * discount_percent_in_decimal;

          document.getElementById("discount_label").innerHTML = "";
          document.getElementById("discount_label").innerHTML = "Discount - 20%";

          document.getElementById("discount_amount").value = "";
          document.getElementById("discount_amount").value = -(service_subtotal * discount_percent_in_decimal);
        }else if(discounts == "thirty"){
          discount_percent_in_decimal = 0.30;
          service_discount = service_subtotal * discount_percent_in_decimal;

          document.getElementById("discount_label").innerHTML = "";
          document.getElementById("discount_label").innerHTML = "Discount - 30%";

          document.getElementById("discount_amount").value = "";
          document.getElementById("discount_amount").value = -(service_subtotal * discount_percent_in_decimal);
        }else if(discounts == "forty"){
          discount_percent_in_decimal = 0.40;
          service_discount = service_subtotal * discount_percent_in_decimal;

          document.getElementById("discount_label").innerHTML = "";
          document.getElementById("discount_label").innerHTML = "Discount - 40%";

          document.getElementById("discount_amount").value = "";
          document.getElementById("discount_amount").value = -(service_subtotal * discount_percent_in_decimal);
        }else if(discounts == "fifty"){
          discount_percent_in_decimal = 0.50;
          service_discount = service_subtotal * discount_percent_in_decimal;

          document.getElementById("discount_label").innerHTML = "";
          document.getElementById("discount_label").innerHTML = "Discount - 50%";

          document.getElementById("discount_amount").value = "";
          document.getElementById("discount_amount").value = -(service_subtotal * discount_percent_in_decimal);
        }else if(discounts == "sixty"){
          discount_percent_in_decimal = 0.60;
          service_discount = service_subtotal * discount_percent_in_decimal;

          document.getElementById("discount_label").innerHTML = "";
          document.getElementById("discount_label").innerHTML = "Discount - 60%";

          document.getElementById("discount_amount").value = "";
          document.getElementById("discount_amount").value = -(service_subtotal * discount_percent_in_decimal);
        }else if(discounts == "seventy"){
          discount_percent_in_decimal = 0.70;
          service_discount = service_subtotal * discount_percent_in_decimal;

          document.getElementById("discount_label").innerHTML = "";
          document.getElementById("discount_label").innerHTML = "Discount - 70%";

          document.getElementById("discount_amount").value = "";
          document.getElementById("discount_amount").value = -(service_subtotal * discount_percent_in_decimal);
        }else if(discounts == "eighty"){
          discount_percent_in_decimal = 0.80;
          service_discount = service_subtotal * discount_percent_in_decimal;

          document.getElementById("discount_label").innerHTML = "";
          document.getElementById("discount_label").innerHTML = "Discount - 80%";

          document.getElementById("discount_amount").value = "";
          document.getElementById("discount_amount").value = -(service_subtotal * discount_percent_in_decimal);
        }else if(discounts == "ninety"){
          discount_percent_in_decimal = 0.90;
          service_discount = service_subtotal * discount_percent_in_decimal;

          document.getElementById("discount_label").innerHTML = "";
          document.getElementById("discount_label").innerHTML = "Discount - 90%";

          document.getElementById("discount_amount").value = "";
          document.getElementById("discount_amount").value = -(service_subtotal * discount_percent_in_decimal);
        }else if(discounts == "onehundred"){
          discount_percent_in_decimal = 1.0;
          service_discount = service_subtotal * discount_percent_in_decimal;

          document.getElementById("discount_label").innerHTML = "";
          document.getElementById("discount_label").innerHTML = "Discount - 100%";

          document.getElementById("discount_amount").value = "";
          document.getElementById("discount_amount").value = -(service_subtotal * discount_percent_in_decimal);
        }
        subtotal_service_bill();
        
      }

      function subtotal_service_bill(){
        //service_discounts();
         
         service_vat_amount = ((service_subtotal + service_others)-service_discount);
         //alert("Subtotal: "+service_subtotal+"| Service Others: "+service_others+" | Service Discount: "+service_discount+"| Service Total Amount: "+service_vat_amount);
         var total_add_ons_value = document.getElementById("additional_sub_total").value; 
         //alert("Subtotal: "+service_vat_amount);

         document.getElementById("service_subtotal").value = "";
         document.getElementById("service_subtotal").value = service_vat_amount;

         document.getElementById("total_billing_amount").value = "";
         document.getElementById("total_billing_amount").value = (parseInt(total_add_ons_value)+parseInt(service_vat_amount));
         
      }

      function totals_and_subtotal_billings(){
        //Service Total
        service_discounts();

      }

      function others_billing(){
        
         var additional_amount = 0;
         
         var package_additionals_value = document.getElementById("additionals").value;

         if(String(package_additionals_value) == "none"){
            //alert("Others Selected: None --- !"+additional_amount);
            //document.getElementById("other_amount").value = 0;
            service_others = 0;
            subtotal_service_bill();   
          }else if(String(package_additionals_value) == "others"){
            additional_amount = document.getElementById("additional_amount").value;
            if(additional_amount == ""){
              //alert("Others Amount is Empty | Value is Defaulted to 0");
              document.getElementById("other_amount").value = 0;
              service_others = 0;
              subtotal_service_bill();
            }else{
              //alert("Others Selected: Others --- !"+additional_amount);
              document.getElementById("other_amount").value = additional_amount;
              service_others = parseInt(additional_amount);
              subtotal_service_bill();
            }   
          }

      }

      function update_tag_personnel_options(){
        
        var selected_personnel_main = document.getElementById("workers").value;
        var default_personnel_main = document.getElementById("workers").getElementsByTagName("option");
        var selected_personnel_tag =  document.getElementById("tag_workers").getElementsByTagName("option");

        //alert("Worker: "+selected_personnel_main);

        for (var i = 0; i < selected_personnel_tag.length; i++) {
        // lowercase comparison for case-insensitivity
        //alert("Tag Value: "+selected_personnel_tag[i].value);
        if (selected_personnel_tag[i].value == selected_personnel_main) {
          selected_personnel_tag[i].disabled = true;
        }else{
          selected_personnel_tag[i].disabled = false;
        }

        if(selected_personnel_main == default_personnel_main[0].value){
          if(i == 0){
            //Skip None
          }else{
          selected_personnel_tag[i].disabled = true;
          document.getElementById('tag_workers').getElementsByTagName('option')[0].selected = 'selected'
          update_main_personnel_option();
          }
        }
      }
    }

    function update_main_personnel_option(){
      
        var selected_personnel_main = document.getElementById("tag_workers").value;
        //alert("Value: "+selected_personnel_main);
        var selected_personnel_tag =  document.getElementById("workers").getElementsByTagName("option")

       //alert("Worker: "+selected_personnel_main);

        for (var i = 0; i < selected_personnel_tag.length; i++) {
        // lowercase comparison for case-insensitivity
        //alert("Tag Value: "+selected_personnel_tag[i].value);
        if (selected_personnel_tag[i].value == selected_personnel_main) {
          selected_personnel_tag[i].disabled = true;
        }else{
          selected_personnel_tag[i].disabled = false;
        }
      }
    }

      function dusplay_car_size_and_billing_summary(){
        display_car_size_details();
        display_package_benefits();
        billing_summary();
        subtotal_service_bill();
      }

      function display_car_size_details(){
          var car_size_select_value = document.getElementById("car_size_details").value;

          if(String(car_size_select_value) == "Small"){
        
          }else if(String(car_size_select_value) == "Medium"){
            
        
          }else if(String(car_size_select_value) == "Large"){
            
            
          }else if(String(car_size_select_value) == "Extra Large"){
        
          }
      }

        function display_package_benefits() {
            var package_select_value = document.getElementById("package_type").value;

            if(String(package_select_value) == "Basic"){
                document.getElementById("ul_text").innerHTML = "";
                document.getElementById("package_type_benefits").innerHTML = "<ul style='font-size: 14px;'><li>Exterior Wash</li><li>Water-based Premium Wax</li><li>Tire Shine</li></ul>";
            
            }else if(String(package_select_value) == "Premium"){
                document.getElementById("ul_text").innerHTML = "";
                document.getElementById("package_type_benefits").innerHTML = "<ul style='font-size: 14px;'><li>Exterior Wash</li><li>Water-based Premium Wax</li><li>Tire Shine</li><li>Interior Cleaning</li><li>Dashboard Protection</li><li>Side Panels dressing</li><li>Vacuum</li><li>Matting Cleaning</li><li>Car Odor Neutralizer</li><li><b>FREE - CAR FOGGING SANITATION</b></li></ul>";
            
            }else if(String(package_select_value) == "Ultimate"){
                document.getElementById("ul_text").innerHTML = "";
                document.getElementById("package_type_benefits").innerHTML = "<ul style='font-size: 14px;'><li>Exterior Wash</li><li>Water-based Premium Wax</li><li>Tire Shine</li><li>Interior Cleaning</li><li>Dashboard Protection</li><li>Side Panels dressing</li><li>Vacuum</li><li>Matting Cleaning</li><li>Car Odor Neutralizer</li><li><b>Waterless Engine Cleaning</b></li><li><b>UV LIGHT DISINFECTION</b></li><li><b>FREE - CAR FOGGING SANITATION</b></li></ul>";
            }
        }
         function discounts_pop_up() {
            var discounts_value = document.getElementById("discounts").value;

            if(String(discounts_value) == "none"){
                document.getElementById("discount_promo_code").style.display = "none";
                document.getElementById("discount_reason_container").style.display = "none";
                document.getElementById("promo_reason").required = false;
            }else{
                document.getElementById("discount_promo_code").style.display = "none";
                document.getElementById("discount_reason_container").style.display = "inline-block";
                document.getElementById("promo_reason").required = true;
            }
        }

            function pop_up_additionals(){
            
                var package_additionals_value = document.getElementById("additionals").value;
                
                if(String(package_additionals_value) == "none"){
                    //Resets Others Value to 0
                    document.getElementById("additional_amount").required = false;
                    document.getElementById("other_amount").value = 0;
                    document.getElementById("additional_amount").value = 0;
                    service_others = 0;
                    //Others Amount Input field Container
                    document.getElementById("note").required = false;

                    document.getElementById("label_additionals").innerHTML = "";
                    document.getElementById("additionals_container").style.display = "none";
                    document.getElementById("other_notes_container").style.display = "none";
                    document.getElementById("label_additionals").innerHTML = "Others";
                    subtotal_service_bill();  
                    
            
                }else if(String(package_additionals_value) == "others"){
                    document.getElementById("label_additionals").innerHTML = "";
                    document.getElementById("additionals_container").style.display = "inline-block";
                    document.getElementById("label_additionals").innerHTML = "Others";

                     //Others Amount Input field container
                     document.getElementById("additional_amount").required = true;
                    document.getElementById("other_notes_container").style.display = "block";
                    document.getElementById("note").required = true;
                }

                //others_billing();

            }
</script> 
</html>