<?php

$job_listing_id = $_GET['job_listing_id'];

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/* Center the loader */
#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 120px;
  height: 120px;
  margin: -76px 0 0 -76px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
  text-align: center;
}
</style>
</head>
<body onload="myFunction()" style="margin:0;">

<div id="loader"></div>

<div style="display:none;" id="myDiv" class="animate-bottom">
  <h2>Product Order Successful!</h2>
  <p>Please wait while redirecting to Service Form.</p>
</div>

<script>
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 5000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>

</body>
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
    /*echo "
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
    ";*/

    $promo_code_value = "none";
    $promo_reason_value = "none";

    if($promo_code == ""){
        
    }else{
        $promo_code_value = $promo_code;
    }

    if($reason_promo == ""){

    }else{
        $promo_reason_value = $reason_promo;
    }

   
    

    if($wax_quantity != 0){
        $subtotal_computed_value = 499 * $wax_quantity;

        $sql_wax_item = "INSERT INTO product_commissions (date,personnel,product_name,quantity,note,job_order_id,subtotal,discount_percentage,promo_code,reason_promo,discount_value,vat,total) 
                                        VALUES ('$scheduled_date', '$personnel', 'Wax', '$wax_quantity', '$note', '$job_product_ID_link', '$subtotal_computed_value', '$discount_percent','$promo_code_value','$promo_reason_value','$discount_value','0', '$total')";

        if ($connection->query($sql_wax_item) === TRUE) {
            //echo "Product successfully registered - Wax<br>";
            $wax_status = "true";
            proceed_to_next_page($watermark_status,$freshener_status, $engine_degrease_status,$engine_shine_status, $wax_status,$job_listing_id);
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }                                 
    }else{
        $wax_status = "true";
        proceed_to_next_page($watermark_status,$freshener_status, $engine_degrease_status,$engine_shine_status, $wax_status,$job_listing_id);
    }

    if($engine_shine_quantity != 0){
        $subtotal_computed_value = 499 * $engine_shine_quantity;

        $sql_wax_item = "INSERT INTO product_commissions (date,personnel,product_name,quantity,note,job_order_id,subtotal,discount_percentage,promo_code,reason_promo,discount_value,vat,total) 
                                            VALUES ('$scheduled_date', '$personnel', 'Engine Shine', '$engine_shine_quantity', '$note', '$job_product_ID_link', '$subtotal_computed_value', '$discount_percent','$promo_code_value','$promo_reason_value','$discount_value','0', '$total')";

        if ($connection->query($sql_wax_item) === TRUE) {
            //echo "Product successfully registered - Engine Shine<br>";
            $engine_shine_status = "true";
            proceed_to_next_page($watermark_status,$freshener_status, $engine_degrease_status,$engine_shine_status, $wax_status,$job_listing_id);
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }else{
        $engine_shine_status = "true";
        proceed_to_next_page($watermark_status,$freshener_status, $engine_degrease_status,$engine_shine_status, $wax_status,$job_listing_id);
    }

    if($engine_degreaser_quantity != 0){
        $subtotal_computed_value = 499 * $engine_degreaser_quantity;

        $sql_wax_item = "INSERT INTO product_commissions (date,personnel,product_name,quantity,note,job_order_id,subtotal,discount_percentage,promo_code,reason_promo,discount_value,vat,total) 
                                            VALUES ('$scheduled_date', '$personnel', 'Engine Degreaser', '$engine_degreaser_quantity', '$note', '$job_product_ID_link', '$subtotal_computed_value', '$discount_percent','$promo_code_value','$promo_reason_value','$discount_value','0', '$total')";

        if ($connection->query($sql_wax_item) === TRUE) {
            //echo "Product successfully registered - Engine Degreaser<br>";
            $engine_degrease_status = "true";
            proceed_to_next_page($watermark_status,$freshener_status, $engine_degrease_status,$engine_shine_status, $wax_status,$job_listing_id);
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
    }else{
        $engine_degrease_status = "true";
        proceed_to_next_page($watermark_status,$freshener_status, $engine_degrease_status,$engine_shine_status, $wax_status,$job_listing_id);
    }

    if($freshener_quantity != 0){
        $subtotal_computed_value = 350 * $freshener_quantity;

        $sql_wax_item = "INSERT INTO product_commissions (date,personnel,product_name,quantity,note,job_order_id,subtotal,discount_percentage,promo_code,reason_promo,discount_value,vat,total) 
        VALUES ('$scheduled_date', '$personnel', 'Freshener', '$freshener_quantity', '$note', '$job_product_ID_link', '$subtotal_computed_value', '$discount_percent','$promo_code_value','$promo_reason_value','$discount_value','0', '$total')";

        if ($connection->query($sql_wax_item) === TRUE) {
            //echo "Product successfully registered - Freshener<br>";
            $freshener_status = "true";
            proceed_to_next_page($watermark_status,$freshener_status, $engine_degrease_status,$engine_shine_status, $wax_status,$job_listing_id);
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

    }else{
        $freshener_status = "true";
        proceed_to_next_page($watermark_status,$freshener_status, $engine_degrease_status,$engine_shine_status, $wax_status,$job_listing_id);
    }

    if($water_remover_quantity != 0){
        $subtotal_computed_value = 350 * $water_remover_quantity;

        $sql_wax_item = "INSERT INTO product_commissions (date,personnel,product_name,quantity,note,job_order_id,subtotal,discount_percentage,promo_code,reason_promo,discount_value,vat,total) 
        VALUES ('$scheduled_date', '$personnel', 'Watermarks Remover', '$water_remover_quantity', '$note', '$job_product_ID_link', '$subtotal_computed_value', '$discount_percent','$promo_code_value','$promo_reason_value','$discount_value','0', '$total')";

        if ($connection->query($sql_wax_item) === TRUE) {
            //echo "Product successfully registered - Watermark<br>";
            $watermark_status = "true";
            proceed_to_next_page($watermark_status,$freshener_status, $engine_degrease_status,$engine_shine_status, $wax_status,$job_listing_id);
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
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
                header("Location: ../CC-client_dashboard.php");
            }else{
                header("Location: ../CC-TrackerForm.php?job_listing_id=".$job_listing_id);
            }
            
            
        }
    }

    
?>