<?php

$job_listing_id = $_GET['job_listing_id'];
ob_start();
?>
<html>
<head>
    <title>Update Form Submission Process</title>
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
     $wax_status = "false";
     $engine_shine_status = "false";
     $freshener_status = "false";
     $watermark_status = "false";
     $engine_degrease_status = "false";

    $job_product_ID_link = $job_listing_id;
    $scheduled_date = $_POST["transaction_date"];
    $personnel = $_POST["workers"];

    $subtotal = $_POST["additional_other_amount"];

    //Quantity
    $wax_quantity = $_POST["wax_quantity"];
    $engine_shine_quantity = $_POST["engine_shine_quantity"];
    $engine_degreaser_quantity = $_POST["engine_degreaser_quantity"];
    $freshener_quantity = $_POST["freshener_quantity"];
    $water_remover_quantity = $_POST["water_remover_quantity"];

    
    $discount_percent = $_POST["discounts"];
    $promo_code = $_POST["promo"];
    $reason_promo = $_POST["promo_reason"];
    $note = $_POST["note"];
    $discount_value = $_POST["additional_discount_amount"];
    $vat = $_POST["additional_vat_amount"];
    $total = $_POST["additional_sub_total"];

    include '../Admin/database_config.php';
    echo "
    ID: $job_product_ID_link<br>
    Sched Date: $scheduled_date<br>
    Personnel: $personnel<br>
   
    Wax Qty: $wax_quantity<br>
    Engine Shine Qty: $engine_shine_quantity<br>
    Freshener Qty: $freshener_quantity<br>
    Water RemoverQty: $water_remover_quantity<br>
    Discount Percent: $discount_percent<br>
    Promo Code: $promo_code<br>
    Promo Reason: $reason_promo<br>
    Note: $note<br>
    Discount Value: $discount_value<br>
    Vat: $vat<br>
    Total: $total<br>
    ";

    $promo_code_value = "none";
    $promo_reason_value = "none";
    $customer_name = "";

    if($promo_code == ""){
        
    }else{
        $promo_code_value = $promo_code;
    }

    if($reason_promo == ""){

    }else{
        $promo_reason_value = $reason_promo;
    }

   
    if($job_product_ID_link = "0"){
        $customer_name =  $personnel;
    }else{
        $customer_name =  $personnel;
    }
    

    if($wax_quantity != 0){
        $subtotal_computed_value = 499 * $wax_quantity;

        $sql_wax_item = "INSERT INTO product_commissions (date,personnel,product_name,quantity,note,customer_name,subtotal,discount_percentage,promo_code,reason_promo,discount_value,vat,total) 
                                        VALUES ('$scheduled_date', '$personnel', 'Wax', '$wax_quantity', '$note', '$customer_name', '$subtotal_computed_value', '$discount_percent','$promo_code_value','$promo_reason_value','$discount_value','0', '$total')";

        if ($connection->query($sql_wax_item) === TRUE) {
            //echo "Product successfully registered - Wax<br>";
            $wax_status = "true";
            proceed_to_next_page($watermark_status,$freshener_status, $engine_degrease_status,$engine_shine_status, $wax_status,$job_listing_id);
        } else {
            echo "Error: " . $sql_wax_item . "<br>" . $connection->error;
        }                                 
    }else{
        $wax_status = "true";
        proceed_to_next_page($watermark_status,$freshener_status, $engine_degrease_status,$engine_shine_status, $wax_status,$job_listing_id);
    }

    if($engine_shine_quantity != 0){
        $subtotal_computed_value = 499 * $engine_shine_quantity;

        $sql_wax_item = "INSERT INTO product_commissions (date,personnel,product_name,quantity,note,customer_name,subtotal,discount_percentage,promo_code,reason_promo,discount_value,vat,total) 
                                            VALUES ('$scheduled_date', '$personnel', 'Engine Shine', '$engine_shine_quantity', '$note', '$customer_name', '$subtotal_computed_value', '$discount_percent','$promo_code_value','$promo_reason_value','$discount_value','0', '$total')";

        if ($connection->query($sql_wax_item) === TRUE) {
            //echo "Product successfully registered - Engine Shine<br>";
            $engine_shine_status = "true";
            proceed_to_next_page($watermark_status,$freshener_status, $engine_degrease_status,$engine_shine_status, $wax_status,$job_listing_id);
        } else {
            echo "Error: " . $sql_wax_item . "<br>" . $connection->error;
        }
    }else{
        $engine_shine_status = "true";
        proceed_to_next_page($watermark_status,$freshener_status, $engine_degrease_status,$engine_shine_status, $wax_status,$job_listing_id);
    }

    if($engine_degreaser_quantity != 0){
        $subtotal_computed_value = 499 * $engine_degreaser_quantity;

        $sql_wax_item = "INSERT INTO product_commissions (date,personnel,product_name,quantity,note,customer_name,subtotal,discount_percentage,promo_code,reason_promo,discount_value,vat,total) 
                                            VALUES ('$scheduled_date', '$personnel', 'Engine Degreaser', '$engine_degreaser_quantity', '$note', '$customer_name', '$subtotal_computed_value', '$discount_percent','$promo_code_value','$promo_reason_value','$discount_value','0', '$total')";

        if ($connection->query($sql_wax_item) === TRUE) {
            //echo "Product successfully registered - Engine Degreaser<br>";
            $engine_degrease_status = "true";
            proceed_to_next_page($watermark_status,$freshener_status, $engine_degrease_status,$engine_shine_status, $wax_status,$job_listing_id);
        } else {
            echo "Error: " . $sql_wax_item . "<br>" . $connection->error;
        }
        
    }else{
        $engine_degrease_status = "true";
        proceed_to_next_page($watermark_status,$freshener_status, $engine_degrease_status,$engine_shine_status, $wax_status,$job_listing_id);
    }

    if($freshener_quantity != 0){
        $subtotal_computed_value = 350 * $freshener_quantity;

        $sql_wax_item = "INSERT INTO product_commissions (date,personnel,product_name,quantity,note,customer_name,subtotal,discount_percentage,promo_code,reason_promo,discount_value,vat,total) 
        VALUES ('$scheduled_date', '$personnel', 'Freshener', '$freshener_quantity', '$note', '$customer_name', '$subtotal_computed_value', '$discount_percent','$promo_code_value','$promo_reason_value','$discount_value','0', '$total')";

        if ($connection->query($sql_wax_item) === TRUE) {
            //echo "Product successfully registered - Freshener<br>";
            $freshener_status = "true";
            proceed_to_next_page($watermark_status,$freshener_status, $engine_degrease_status,$engine_shine_status, $wax_status,$job_listing_id);
        } else {
            echo "Error: " . $sql_wax_item . "<br>" . $conn->error;
            ?>
     <script>alert("Something went wrong! Please check your internet connection. You will be returned to the dashboard.");</script>   
     <meta http-equiv="refresh" content="0;url=https://xoooomautospafleet.com/workerone/CC-client_dashboard.php">
     <?php
        }

    }else{
        $freshener_status = "true";
        proceed_to_next_page($watermark_status,$freshener_status, $engine_degrease_status,$engine_shine_status, $wax_status,$job_listing_id);
    }

    if($water_remover_quantity != 0){
        $subtotal_computed_value = 350 * $water_remover_quantity;

        $sql_wax_item = "INSERT INTO product_commissions (date,personnel,product_name,quantity,note,customer_name,subtotal,discount_percentage,promo_code,reason_promo,discount_value,vat,total) 
        VALUES ('$scheduled_date', '$personnel', 'Watermarks Remover', '$water_remover_quantity', '$note', '$customer_name', '$subtotal_computed_value', '$discount_percent','$promo_code_value','$promo_reason_value','$discount_value','0', '$total')";

        if ($connection->query($sql_wax_item) === TRUE) {
            //echo "Product successfully registered - Watermark<br>";
            $watermark_status = "true";
            proceed_to_next_page($watermark_status,$freshener_status, $engine_degrease_status,$engine_shine_status, $wax_status,$job_listing_id);
        } else {
            echo "Error: " . $sql_wax_item . "<br>" . $conn->error;
            ?>
     <script>alert("Something went wrong! Please check your internet connection. You will be returned to the dashboard.");</script>   
     <meta http-equiv="refresh" content="0;url=https://xoooomautospafleet.com/workerone/CC-client_dashboard.php">
     <?php
        }
    }else{
        $watermark_status = "true";
        proceed_to_next_page($watermark_status,$freshener_status, $engine_degrease_status,$engine_shine_status, $wax_status,$job_listing_id);
    }
    

    
    /*$sql = "INSERT INTO product_commissions (date,personnel,product_name,quantity,note,job_order_id,subtotal,discount_percentage,promo_code,reason_promo,discount_value,vat,total) 
                                    VALUES ('John', 'Doe', 'john@example.com')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }*/

    function proceed_to_next_page($watermark_status,$freshener_status, $engine_degrease_status,$engine_shine_status, $wax_status,$job_listing_id){
        if($watermark_status && $freshener_status && $engine_degrease_status && $engine_shine_status && $wax_status){
            //echo "Location: ../CC-TrackerForm.php?job_listing_id=$job_listing_id";
            if($job_listing_id == 0){
                echo "Successfuly Added!";
                //header("Location: ../CC-client_dashboard.php");
                ?>
        
                <meta http-equiv="refresh" content="0;url=https://xoooomautospafleet.com/workerone/CC-client_dashboard.php">
                <?php
            }else{
                echo "Successfuly Added!";
                ?>
        
                <meta http-equiv="refresh" content="0;url=https://xoooomautospafleet.com/workerone/CC-TrackerForm.php?job_listing_id=<?php echo $job_listing_id;?>">
                <?php
                //header("Location: ../CC-TrackerForm.php?job_listing_id=".$job_listing_id);
            }
            
            
        }
    }

    
?>