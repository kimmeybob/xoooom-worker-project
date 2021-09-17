<?php

$job_listing_id = $_GET['job_listing_id'];
$edit_status_id = 0;
if(isset($_GET['edit_status_id'])) {
  // id index exists
  $edit_status_id = $_GET['edit_status_id'];
}else{
  $edit_status_id = 0;
}

$Local_product_commission_id = $edit_status_id;


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
<div style=" display: none;background: black;top:0;left: 0; position:fixed;z-index: 10;width: 100%;height: 100%;margin: 0;opacity: 0.95;" id="loader_visuals" class="lds-ellipsis"><div></div><div></div><div></div><div></div></div> 
<p style="z-index: 11;color: white;top:50%;left: 0; position:fixed;display: block;width: 100%;text-align: center;font-size: 16px;">Please wait while data is being sent to the server.</p>
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

<?php
     $wax_status = "false";
     $engine_shine_status = "false";
     $freshener_status = "false";
     $watermark_status = "false";
     $engine_degrease_status = "false";

    $job_product_ID_link = $job_listing_id;
    $scheduled_date = $_POST["transaction_date"];
    $personnel = $_POST["workers"];
    $customer_name = $_POST["customer_name"];
    $customernumber = $_POST["contactnumber"];
    

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
    Product Commission ID (For EDITS): $edit_status_id<br>
    Sched Date: $scheduled_date<br>
    Personnel: $personnel<br>
    Customer Name: $customer_name<br>
    Customer Number: $customernumber<br>

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
    Subtotal: $subtotal<br>
    Total: $total<br>
    ";

    $promo_code_value = "none";
    $promo_reason_value = "none";
    $Edit_check = "false";

     //Create variable to Date Format MM/DD/YYYY
     $rawDate = explode('-',$scheduled_date,3);
     //Date is based on the ISO standard format of HTML5 (YYYY-MM-DD)
    // echo "<script>alert('Month: ".$rawDate[1]."/Day: ".$rawDate[2]."/Year: ".$rawDate[0]."');</script>";
     $final_date_string = $rawDate[1]."/".$rawDate[2]."/".$rawDate[0];

    //Checks if promo code is empty
    if($promo_code == ""){
        
    }else{
        $promo_code_value = $promo_code;
    }

    //checks if reason_promo is empty
    if($reason_promo == ""){

    }else{
        $promo_reason_value = $reason_promo;
    }

   
    // Checks if Default testing account is used.
    if($job_product_ID_link = "0" || $job_product_ID_link = 0){
        //$customer_name =  $customer_name;
    }else{
        
        $query_customer_name = "Select * from customer where customer_id = $job_listing_id";
        $query_run_customer_name = mysqli_query($connection,$query_customer_name);
        $query_rows = mysqli_num_rows($query_run_customer_name) > 0;
        
        if($query_rows){
                while($row = mysqli_fetch_array($query_run_customer_name)){
                  $customer_name =  $row['Name'];
                } // End of Loop
        }else{
          //$customer_name = $personnel;
        } //Ending of if statement if no existing customer_id exists
    }

    //Delete Existing Products ordered from the Database
    $query_product_cust_id = "Select * from product_commissions where cust_id = $job_listing_id";
    $query_run_product_cust_id = mysqli_query($connection,$query_product_cust_id);
    $query_rows = mysqli_num_rows($query_run_product_cust_id) > 0;
    $product_commission_id = "";

    //Checks if record Exists in database.
    /**Record does not exist in database. (New Record.) */
    if($query_rows == 0){
                //Creates a mew Product Order Record.
                $Edit_check = "false";
               
                $sql_product_commission_transaction = "INSERT INTO product_commissions (cust_id,date,personnel,note,customer_name,customer_contact_number,discount_percentage,promo_code,reason_promo,discount_value,vat,total) 
                VALUES ('$job_listing_id','$final_date_string', '$personnel','$note', '$customer_name','$customernumber','$discount_percent','$promo_code_value','$promo_reason_value','$discount_value','0', '$total')";

                  if ($connection->query($sql_product_commission_transaction) === TRUE) {
                              //Checks if customer has an exsiting product order in the database.
                              $query_product_customer_check = "Select * from product_commissions where cust_id = $job_listing_id;";
                              $query_run_product_customer_check = mysqli_query($connection, $query_product_customer_check);
                              $check_job_orders_date = mysqli_num_rows($query_run_product_customer_check) > 0;

                              while($row = mysqli_fetch_array($query_run_product_customer_check)){
                                //Gets the Product Commission ID
                                $product_commission_id = $row['product_commission_id'];
                              }
                  }else{
                            echo '<script>alert("Something went wrong in creating a new Product Order.");</script>';
                            echo "Error: " . $sql_product_commission_transaction . "<br>" . $connection->error;
                  }

    /**Record exists in database. (Old Record.) Required Record Editing */
    }else{

                //Gets the Product Commission ID
                while($row = mysqli_fetch_array($query_run_product_cust_id)){
                  $product_commission_id = $row['product_commission_id'];
                }

              //Check if Product Order id is '0'  (Independent Product Purchase) /** SHOULD NOE BE DELETED! */  
                if($job_listing_id == "0" || $job_listing_id == 0){
                          // DO NOT DELETE
                          echo "Unbinded Product Purchase.";
                          echo $Local_product_commission_id;
                          //Check if product commission id has a value for editing purposes.
                          if($Local_product_commission_id == 0){
                            echo "New Unbinded Product Purchase Order.";
                              //Product does not have a commission ID. Product will be auto added to datbase.
                              $sql_product_commission_transaction = "INSERT INTO product_commissions (cust_id,date,personnel,note,customer_name,customer_contact_number,discount_percentage,promo_code,reason_promo,discount_value,vat,total) 
                              VALUES ('$job_listing_id','$final_date_string', '$personnel','$note','$customer_name','$customernumber','$discount_percent','$promo_code_value','$promo_reason_value','$discount_value','0', '$total')";

                                if ($connection->query($sql_product_commission_transaction) === TRUE) {
                                    //Checks if customer has an exsiting product order in the database.
                                    $query_product_customer_check = "Select * from product_commissions where cust_id = $job_listing_id;";
                                    $query_run_product_customer_check = mysqli_query($connection, $query_product_customer_check);
                                    $check_job_orders_date = mysqli_num_rows($query_run_product_customer_check) > 0;

                                    while($row = mysqli_fetch_array($query_run_product_customer_check)){
                                      //Gets the Product Commission ID
                                      $product_commission_id = $row['product_commission_id'];
                                    }
                                }else{
                                  echo "Error: " . $query_product_customer_check . "<br>" . $connection->error;
                                }
                          }else{
                            echo "Existing Unbinded Product Purchase Order.";
                            //Product does have a commission ID. Product order will be updated based on the product commission id
                            $sql_product_commission_transaction = "update product_commissions set date='$final_date_string',personnel='$personnel',note='$note',customer_name='$customer_name',customer_contact_number='$customernumber',discount_percentage='$discount_percent',promo_code='$promo_code_value',reason_promo='$promo_reason_value',discount_value='$discount_value',vat='0',total='$total' where product_commission_id='$Local_product_commission_id'";

                                    if ($connection->query($sql_product_commission_transaction) === TRUE) {

                                        //echo '<script>alert("Deleting items!");</script>';
                                        $sql_delete_product_items = "DELETE FROM product_item_orders WHERE product_commission_id = '$Local_product_commission_id'";
                                        //$wax_status = "true";
                                        if ($connection->query($sql_delete_product_items) === TRUE) {
                                          
                                        } else {
                                            echo "Error: " . $sql_delete_product_items . "<br>" . $connection->error;
                                        } 

                                    } else {
                                        echo "Error: " . $sql_product_commission_transaction . "<br>" . $connection->error;
                                    }  
                          }
                          
                }else{      
                            $Edit_check = "true";
                           // echo '<script>alert("Deleted called!");</script>';
                            
                            if($Edit_check){
                                          //If custoemr has an existing product order. Update existing transaction order.
                                        
                                          $sql_wax_item = "update product_commissions set date='$final_date_string',personnel='$personnel',note='$note',customer_name='$customer_name',customer_contact_number='$customernumber',discount_percentage='$discount_percent',promo_code='$promo_code_value',reason_promo='$promo_reason_value',discount_value='$discount_value',vat='0',total='$total' where cust_id='$job_listing_id'";
                                        
                                          if ($connection->query($sql_wax_item) === TRUE) {

                                                  //echo '<script>alert("Deleting items!");</script>';
                                                  $sql_delete_product_items = "DELETE FROM product_item_orders WHERE product_commission_id = '$product_commission_id'";
                                                  //$wax_status = "true";
                                                  if ($connection->query($sql_delete_product_items) === TRUE) {
                                                     
                                                  } else {
                                                      echo "Error: " . $sql_delete_product_items . "<br>" . $connection->error;
                                                  } 

                                          } else {
                                          echo "Error: " . $sql_wax_item . "<br>" . $connection->error;
                                          }  
                                      
                              }
                  }
    } //Ending of if statement if product order with an existing customer_id exists

          
            if($wax_quantity != 0){
                  $subtotal_computed_value = 499 * $wax_quantity;
          
                  $sql_wax_item = "INSERT INTO product_item_orders (product_commission_id,product_name,quantity,subtotal) 
                                                  VALUES ('$product_commission_id', 'Wax', '$wax_quantity', '$subtotal_computed_value')";
          
                  if ($connection->query($sql_wax_item) === TRUE) {
                      //echo "Product successfully registered - Wax<br>";
                      $wax_status = "true";
                      proceed_to_next_page($edit_status_id,$watermark_status,$freshener_status, $engine_degrease_status,$engine_shine_status, $wax_status,$job_listing_id);
                  } else {
                      echo "Error: " . $sql_wax_item . "<br>" . $connection->error;
                  }                                 
              }else{
                  $wax_status = "true";
                  proceed_to_next_page($edit_status_id,$watermark_status,$freshener_status, $engine_degrease_status,$engine_shine_status, $wax_status,$job_listing_id);
              }
          
              if($engine_shine_quantity != 0){
                  $subtotal_computed_value = 499 * $engine_shine_quantity;
          
                  $sql_wax_item = "INSERT INTO product_item_orders (product_commission_id,product_name,quantity,subtotal) 
                                                      VALUES ('$product_commission_id', 'Engine Shine', '$engine_shine_quantity', '$subtotal_computed_value')";

                  if ($connection->query($sql_wax_item) === TRUE) {
                      //echo "Product successfully registered - Engine Shine<br>";
                      $engine_shine_status = "true";
                      proceed_to_next_page($edit_status_id,$watermark_status,$freshener_status, $engine_degrease_status,$engine_shine_status, $wax_status,$job_listing_id);
                  } else {
                      echo "Error: " . $sql_wax_item . "<br>" . $connection->error;
                  }
              }else{
                  $engine_shine_status = "true";
                  proceed_to_next_page($edit_status_id,$watermark_status,$freshener_status, $engine_degrease_status,$engine_shine_status, $wax_status,$job_listing_id);
              }
          
              if($engine_degreaser_quantity != 0){
                  $subtotal_computed_value = 499 * $engine_degreaser_quantity;
          
                  $sql_wax_item = "INSERT INTO product_item_orders (product_commission_id,product_name,quantity,subtotal) 
                                                              VALUES ('$product_commission_id', 'Engine Degreaser', '$engine_degreaser_quantity', '$subtotal_computed_value')";
                  if ($connection->query($sql_wax_item) === TRUE) {
                      //echo "Product successfully registered - Engine Degreaser<br>";
                      $engine_degrease_status = "true";
                      proceed_to_next_page($edit_status_id,$watermark_status,$freshener_status, $engine_degrease_status,$engine_shine_status, $wax_status,$job_listing_id);
                  } else {
                      echo "Error: " . $sql_wax_item . "<br>" . $connection->error;
                  }
                  
              }else{
                  $engine_degrease_status = "true";
                  proceed_to_next_page($edit_status_id,$watermark_status,$freshener_status, $engine_degrease_status,$engine_shine_status, $wax_status,$job_listing_id);
              }
          
              if($freshener_quantity != 0){
                  $subtotal_computed_value = 299 * $freshener_quantity;
          
                  $sql_wax_item = "INSERT INTO product_item_orders (product_commission_id,product_name,quantity,subtotal) 
                                                            VALUES ('$product_commission_id', 'Freshener', '$freshener_quantity', '$subtotal_computed_value')";

                  if ($connection->query($sql_wax_item) === TRUE) {
                      //echo "Product successfully registered - Freshener<br>";
                      $freshener_status = "true";
                      proceed_to_next_page($edit_status_id,$watermark_status,$freshener_status, $engine_degrease_status,$engine_shine_status, $wax_status,$job_listing_id);
                  } else {
                      echo "Error: " . $sql_wax_item . "<br>" . $conn->error;
                      ?>
              <script>alert("Something went wrong! Please check your internet connection. You will be returned to the dashboard.");</script>   
              <!-- <meta http-equiv="refresh" content="0;url=https://xoooomautospafleet.com/workerone/CC-client_dashboard.php"> -->
              <?php
                  }
          
              }else{
                  $freshener_status = "true"; 
                  proceed_to_next_page($edit_status_id,$watermark_status,$freshener_status, $engine_degrease_status,$engine_shine_status, $wax_status,$job_listing_id);
              }
          
              if($water_remover_quantity != 0){
                  $subtotal_computed_value = 299 * $water_remover_quantity;
          
                  $sql_wax_item = "INSERT INTO product_item_orders (product_commission_id,product_name,quantity,subtotal) 
                                                                  VALUES ('$product_commission_id', 'Watermarks Remover', '$water_remover_quantity', '$subtotal_computed_value')";

                  if ($connection->query($sql_wax_item) === TRUE) {
                      //echo "Product successfully registered - Watermark<br>";
                      $watermark_status = "true";
                      proceed_to_next_page($edit_status_id,$watermark_status,$freshener_status, $engine_degrease_status,$engine_shine_status, $wax_status,$job_listing_id);
                  } else {
                      echo "Error: " . $sql_wax_item . "<br>" . $conn->error;
                      ?>
              <script>alert("Something went wrong! Please check your internet connection. You will be returned to the dashboard.");</script>   
              <!-- <meta http-equiv="refresh" content="0;url=https://xoooomautospafleet.com/workerone/CC-client_dashboard.php"> -->
              <?php
                  }
              }else{
                  $watermark_status = "true";
                  proceed_to_next_page($edit_status_id,$watermark_status,$freshener_status, $engine_degrease_status,$engine_shine_status, $wax_status,$job_listing_id);
              }
             

    
    

    /*$sql = "INSERT INTO product_commissions (date,personnel,product_name,quantity,note,job_order_id,subtotal,discount_percentage,promo_code,reason_promo,discount_value,vat,total) 
                                    VALUES ('John', 'Doe', 'john@example.com')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }*/

    function proceed_to_next_page($edit_status_id,$watermark_status,$freshener_status, $engine_degrease_status,$engine_shine_status, $wax_status,$job_listing_id){
        if($watermark_status && $freshener_status && $engine_degrease_status && $engine_shine_status && $wax_status){
            //echo "Location: ../CC-TrackerForm.php?job_listing_id=$job_listing_id";
            if($job_listing_id == 0){
              if($edit_status_id == 0){    
                echo "Not Linked Order | From My Queue";
                echo "Successfuly Added!";
                //header("Location: ../CC-client_dashboard.php");
                //Goes to Dashboard (Independent Product Tracking Purchase)
                header("Location: ../CC-client_dashboard.php");
                ?>
        
        <!-- <meta http-equiv="refresh" content="0;url=https://xoooomautospafleet.com/workerone/CC-client_dashboard.php"> -->

                Clear all local storage data.
                <script>localStorage.clear();</script>

                <?php 
              }else{
                echo "Not Linked Order | From Product Dashboard";
         header("Location: ../CC-client_dashboard_all_products.php?job_listing_id=$job_listing_id&edit_status_id=$edit_status_id");
              }
            }else{
                  if($edit_status_id == 0){
                    echo "Linked with Job Order | From Tracker Form";
                    echo "Successfuly Added!";
                    //Goes to Commission/Service TrackerForm Page
                    //TEST IMPLEMENTATION:
                    //header("Location: test_storage.php");
                    ?>
                    
                    <!-- Uncomment when uploading to live servers -->
                    <!-- <meta http-equiv="refresh" content="0;url=https://xoooomautospafleet.com/workerone/CC-TrackerForm.php?job_listing_id=<?php echo $job_listing_id;?>"> -->
                    <?php
                     
           header("Location: ../CC-TrackerForm.php?job_listing_id=".$job_listing_id);
                  }else{
                    echo "Linked with Job Order | From Product Dashboard";
                 
           header("Location: ../CC-client_dashboard_all_products.php?job_listing_id=$job_listing_id&edit_status_id=$edit_status_id");
                  }
            }
          
        }
    }

    
?>
</html>