<?php

  require 'main_links_config.php';


$job_listing_id = $_GET['job_listing_id'];

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

<?php
 include '../Admin/database_config.php';

    // Checks if Default testing account is used.
    if($job_product_ID_link = "0"){
        //$customer_name =  "0";
    }else{
        
        $query_customer_name = "Select * from customer where customer_id = $job_listing_id";
        $query_run_customer_name = mysqli_query($connection,$query_customer_name);
        $query_rows = mysqli_num_rows($query_run_customer_name) > 0;
        
        if($query_rows){
          //$customer_name = $personnel;
          echo "Product Order does not exist.";
        }else{
          while($row = mysqli_fetch_array($query_run_customer_name)){
            $customer_name =  $row['Name'];
          } // End of Loop
         
        } //Ending of if statement if no existing customer_id exists
        
    }

    //Delete Existing Products ordered from the Database
    $query_product_cust_id = "Select * from product_commissions where cust_id = $job_listing_id";
    $query_run_product_cust_id = mysqli_query($connection,$query_product_cust_id);
    $query_rows = mysqli_num_rows($query_run_product_cust_id) > 0;
    $product_commission_id = "";

    if($query_rows == 0){
      $Edit_check = "false";
          ?>
          <!-- LIVE META TAG-->
          <script>alert("Product Order does not exist or has been deleted.");</script>
          <meta http-equiv="refresh" content="0;url=<?php echo $tracker_form;?>job_listing_id=<?php echo $job_listing_id;?>">
         <?php
    }else{
      //Check if Product Order id is '0'  (Independent Product Purchase) /** SHOULD NOE BE DELETED! */  
        if($job_listing_id == "0" || $job_listing_id == 0){
          // DO NOT DELETE
          echo "Unbinded Product Purchase.";
          ?>
          <!-- LIVE META TAG-->
           <meta http-equiv="refresh" content="0;url=<?php echo $tracker_form;?>job_listing_id=<?php echo $job_listing_id;?>">
          <?php
        }else{      
              //Gets the Product Commission ID
              while($row = mysqli_fetch_array($query_run_product_cust_id)){
                $product_commission_id = $row['product_commission_id'];
              }

              $Edit_check = "true";
              echo "Deleted called!";
                if($Edit_check){
                  $sql_wax_item = "DELETE FROM product_commissions WHERE cust_id = '$job_listing_id'";

                      if ($connection->query($sql_wax_item) === TRUE) {

                        //<!-- LIVE META TAG-->
                        // <meta http-equiv="refresh" content="0;url=https://xoooomautospafleet.com/workerone/CC-TrackerForm.php?job_listing_id=<?php echo $job_listing_id; >">
                        
                      //echo "Product successfully registered - Wax<br>";
                      //echo '<script>alert("Deleting items!");</script>';
                            $sql_delete_product_items = "DELETE FROM product_item_orders WHERE product_commission_id = '$product_commission_id'";
                            //$wax_status = "true";
                            if ($connection->query($sql_delete_product_items) === TRUE) {
                            
                              ?>
                              <meta http-equiv="refresh" content="0;url=<?php echo $tracker_form;?>job_listing_id=<?php echo $job_listing_id;?>">
                              <?php 
                            } else {
                                echo "Error: " . $sql_delete_product_items . "<br>" . $connection->error;
                            } 
                      
                      
                      } else {
                      //<!-- LIVE META TAG-->
                      // <meta http-equiv="refresh" content="0;url=https://xoooomautospafleet.com/workerone/CC-TrackerForm.php?job_listing_id=<?php echo $job_listing_id; >">
                      ?>
                       <meta http-equiv="refresh" content="0;url=<?php echo $tracker_form;?>job_listing_id=<?php echo $job_listing_id;?>">
                      <?php 
                      echo "Error: " . $sql_wax_item . "<br>" . $connection->error;
                      }  
                 }
          }
    } //Ending of if statement if product order with an existing customer_id exists
    
    ?>
    
     
    
    <?php   
?>
</html>