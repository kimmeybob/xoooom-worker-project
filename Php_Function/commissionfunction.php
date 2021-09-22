<?php
  
   require 'main_links_config.php';
  
?>


<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
<head>
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
  padding: 5px;
  background: black;
  
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
<body onload="timer_function()">
<!-- LOADER DIV -->
<div style=" display: block;background: black;top:0;left: 0; position:fixed;z-index: 10;width: 100%;height: 100%;margin: 0;opacity: 0.95;" id="loader_visuals" class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
       
<p style="z-index: 11;color: white;top:50%;left: 0; position:fixed;display: block;background: black;width: 100%;text-align: center;font-size: 16px;">Please wait while data is being sent to the server.</p>
<p id="slow_internet_display" style="z-index: 11;color: white;top:54%;left: 0; position:fixed;display: none;background: black;width: 100%;text-align: center;font-size: 12px;">You may be experiencing slow internet connections.</p> 


</body>
<script>
    function timer_function() {
    setTimeout(setAlert, 10000);
}
function setAlert() {
    document.getElementById("slow_internet_display").style.display = "block";
}
</script>
</html>

<?php

$job_listing_id = $_GET['job_listing_id'];
$date_serviced = $_POST['date_serviced'];
$time_serviced = $_POST['time_serviced'];
$name_of_personnel = $_POST['workers'];
$tag_personnel = $_POST['tag_workers'];
$car_size = $_POST['car_size_details'];
$package_type  = $_POST['package_type'];
$plate_number = $_POST['platenumber'];
$discount = $_POST['discounts'];
$promo_code = $_POST['promo'];
$promo_reason = $_POST['promo_reason'];
$additional_option = $_POST['additionals'];
$note = $_POST['note'];
//$time_finished = $_POST['time_done'];
$discount_amount = $_POST['discount_amount'];
$other_amount = $_POST['other_amount'];
$vat = $_POST['package_vat_amount'];
$total = $_POST['service_subtotal'];


echo "
job_listing_id: $job_listing_id<br>
date_serviced: $date_serviced<br>
time_serviced: $time_serviced<br>
name_of_personnel: $name_of_personnel <br>
tag_personnel: $tag_personnel <br>
car_size: $car_size <br>
package_type: $package_type <br>
plate_number: $plate_number <br>
discount: $discount <br>
promo_code: $promo_code <br>
promo_reason: $promo_reason <br>
additional_option: $additional_option <br>
note: $note<br>
other_amount: $other_amount<br>
discount_amount: $discount_amount <br>
vat: $vat <br>
total: $total <br>
";

require '../Admin/database_config.php';
$AddToDatabase = false;
$ChangeStatus = false;

$final_promo_reason = "";
$final_note = "";

if($promo_reason == "" || $promo_reason == null){
    $final_promo_reason = "none";
}else{
    $final_promo_reason = $promo_reason;
}

//checks if others status is none if yes then sets note to none.
if($additional_option == "none"){
    $final_note = "none";
}else{
    $final_note = $note;
}




$sql_add_commission_form = "INSERT INTO service_commissions (cust_id, date,personnel,partner,size,type,plate,discount,promo_code,discount_notes,additional_charge_type,additional_notes,discount_amount,others_amount,vat,total,time,edit_logs) 
VALUES ('$job_listing_id', '$date_serviced', '$name_of_personnel', '$tag_personnel', '$car_size', '$package_type', '$plate_number', '$discount', 
'$promo_code', '$final_promo_reason', '$additional_option', '$final_note', '$discount_amount', '$other_amount', '$vat', '$total','$time_serviced','none')";

if ($connection->query($sql_add_commission_form) === TRUE) {
    //header("Location: ../CC-client_dashboard.php");
    $AddToDatabase = true;
    proccesses_done($AddToDatabase,$ChangeStatus, $job_listing_id);
    echo "Success! adding to database";
    /** Success on adding to database*/
} else {
echo "Error: " . $sql_add_commission_form . "<br>" . $connection->error;
?>
     <script>alert("Something went wrong! Please check your internet connection. You will be returned to the dashboard.");</script>   
     <meta http-equiv="refresh" content="0;url=<?php echo $GLOBALS['myqueue_dashboard'];?>">
     <?php
    
}     


$sql_update_status = "update customer set status='complete' where customer_id = $job_listing_id;";
 
     if ($connection->query($sql_update_status) === TRUE) {
     $ChangeStatus = true;
     proccesses_done($AddToDatabase,$ChangeStatus, $job_listing_id);
     echo "Success! on changing status";
     } else {
     echo "Error: " . $sql_update_status . "<br>" . $conn->error;
     ?>
     <script>alert("Something went wrong! Please check your internet connection. You will be returned to the dashboard.");</script>   
     <meta http-equiv="refresh" content="0;url=<?php echo $GLOBALS['myqueue_dashboard'];?>">
     <?php
        
     }


function proccesses_done($AddToDatabase,$ChangeStatus, $job_listing_id){
   
    if($AddToDatabase && $ChangeStatus){
        ?>
        
        <meta http-equiv="refresh" content="0;url=<?php echo $GLOBALS['myqueue_dashboard'];?>">
        <?php echo $GLOBALS['myqueue_dashboard']; ?>
        <?php
        echo "Success!";
        
    }
}
 

?>
