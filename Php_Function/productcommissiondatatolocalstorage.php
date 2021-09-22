<?php

$job_listing_id = $_GET['job_listing_id'];
$edit_status_id = $_GET['edit_status_id'];

require 'main_links_config.php';
require '../Admin/database_config.php';

echo "Job Order ID: ".$job_listing_id."<br>"
."Product Commission ID: ".$edit_status_id."<br>";

$products_subtotal = 0;
     
      $products_customer_name = "";
      $products_contact_number = "";
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
                $products_customer_name = $row['customer_name'];
                $products_contact_number = $row['customer_contact_number'];
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
        

      }else{
        echo '<script>alert("No products order found.");</script>';
      }

      
      echo '<script>localStorage.setItem("products_order_bind_id", "'.$job_listing_id.'");</script>';
      echo '<script>localStorage.setItem("local_product_commission_id", "'.$edit_status_id.'");</script>';
      echo '<script>localStorage.setItem("customer_name", "'.$products_customer_name.'");</script>';
      echo '<script>localStorage.setItem("contactnumber", "'.$products_contact_number.'");</script>';
      echo '<script>localStorage.setItem("products_date", "'.$products_date.'");</script>';
      echo '<script>localStorage.setItem("workers", "'.$products_workers.'");</script>';
      echo '<script>localStorage.setItem("products_wax_quantity", "'.$products_wax_quantity.'");</script>';
      echo '<script>localStorage.setItem("products_engine_shine_quantity", "'.$products_engine_shine_quantity.'");</script>';
      echo '<script>localStorage.setItem("products_engine_degreaser_quantity", "'.$products_engine_degreaser_quantity.'");</script>';
      echo '<script>localStorage.setItem("products_freshener_quantity", "'.$products_freshener_quantity.'");</script>';
      echo '<script>localStorage.setItem("products_water_remover_quantity", "'.$products_water_remover_quantity.'");</script>';
      echo '<script>localStorage.setItem("products_discounts", "'.$products_discount_percentage.'");</script>';
      echo '<script>localStorage.setItem("products_promo", "'.$products_promo.'");</script>';
      echo '<script>localStorage.setItem("products_note", "'.$products_note.'");</script>';
      echo '<script>localStorage.setItem("products_subtotal_amount", '.$products_subtotal.');</script>';
      echo '<script>localStorage.setItem("products_additional_discount_amount", '.$products_discount_amount.');</script>';
      echo '<script>localStorage.setItem("products_additional_vat_amount", '.$products_vat.');</script>';
      echo '<script>localStorage.setItem("products_additional_sub_total", '.$products_total.');</script>';

      /** Require Variables for Product Tracker Page
       * 
       * products_order_bind_id
       * customer_name
       * contactnumber
       * products_date
       * workers
       * products_wax_quantity
       * products_engine_shine_quantity
       * products_engine_degreaser_quantity
       * products_freshener_quantity
       * products_water_remover_quantity
       * products_discounts
       * products_promo
       * products_note
       * products_subtotal_amount
       * products_additional_discount_amount
       * products_additional_vat_amount
       * products_additional_sub_total
       * 
       */

echo "Product Order  ID: ".$edit_status_id."<br>".
"Product Date: ".$products_customer_name."<br>".
"Product Customer Name: ".$products_customer_name."<br>".
"Product Customer Number: ".$products_contact_number."<br>".
"Product Discount Percentage: ".$products_discount_percentage."<br>".
"Product VAT: ".$products_vat."<br>".
"Product Total: ".$products_total."<br>".
"Product Date: ".$products_date."<br>".
"Product Commissioner: ".$products_workers."<br>".
"Product Wax Quantity: ".$products_wax_quantity."<br>".
"Product Engine Shine Quantity: ".$products_engine_shine_quantity."<br>".
"Product Engine Degreaser Quantity: ".$products_engine_degreaser_quantity."<br>".
"Product Freshener Quantity: ".$products_freshener_quantity."<br>".
"Product Watermark Remover Quantity: ".$products_water_remover_quantity."<br>".
"Product Reason Promo: ".$products_promo."<br>".
"Product Note: ".$products_note."<br>";

?>
<html>
<head>
<title>Xoooom Autospa</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
/* ANIMATION LOADER STYLE */
.lds-ellipsis {
  /* display: inline-block;
  position: relative;
  width: 80px;
  height: 80px; */
}
.lds-ellipsis div {
  position: absolute;
  top: 45%;
  width: 13px;
  margin-left: 40%;
  height: 13px;
  border-radius: 50%;
  background: white;
 
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
 
}

body {
  width: 100%;
  margin: 0 auto;
  padding: 10px;
  /* background: black; */
  
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
<body onload="timer_function()" style="background: black">
    <!-- LOADER DIV -->
<div style=" display: block;background: black;top:0;left: 0; position:fixed;z-index: 10;width: 100%;height: 100%;margin: 0;opacity: 0.95;" id="loader_visuals" class="lds-ellipsis"><div></div><div></div><div></div><div></div></div> 
<p style="z-index: 11;color: white;top:50%;left: 0; position:fixed;display: block;width: 100%;text-align: center;font-size: 16px;">Please wait while data is being sent to the server.</p>
<p id="slow_internet_display" style="z-index: 11;color: white;top:54%;left: 0; position:fixed;display: none;background: black;width: 100%;text-align: center;font-size: 12px;">You may be experiencing slow internet connections.</p> 


</body>

<script>

function timer_function() {
    setLocalStorageAndLeave();
    setTimeout(setAlert, 10000);
}
function setAlert() {
    document.getElementById("slow_internet_display").style.display = "block";
}

function setLocalStorageAndLeave(){

    (function one(){
         if (localStorage.getItem("products_additional_sub_total") === null) {
           
            setTimeout(one, 30);
         } else {
             
            
            // LIVE LINK
            //window.location.replace('https://xoooomautospafleet.com/workerone/CC-ProductPurchaseTrackerForm.php?job_listing_id=<?php echo $job_listing_id; ?>&edit_status_id=<?php echo $edit_status_id; ?>')
            
            //REPLACE LOCAL HOST (TEST LINK)
             window.location.replace('<?php echo $product_tracker_form;?>job_listing_id=<?php echo $job_listing_id; ?>&edit_status_id=<?php echo $edit_status_id; ?>')
       
         }
    })();
}
</script>
</html>