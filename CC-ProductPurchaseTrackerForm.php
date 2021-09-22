<?php

$job_listing_id = $_GET['job_listing_id'];
date_default_timezone_set('Asia/Manila');

$edit_status_id = 0;
$return_link = "dashboard";

if(isset($_GET['edit_status_id'])) {
  // id index exists
  if($_GET['edit_status_id'] == 1){
    $edit_status_id = 1;
  }else if($_GET['edit_status_id'] == 2){
    $edit_status_id = 2;
  }
  

}else{
  $edit_status_id = 0;
}

if(isset($_GET['return_link'])) {
  // id index exists
  $return_link = $_GET['return_link'];

}else{
  $return_link = "dashboard";
}

?>
<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"  href="assets/css/timedropper.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="icon" href="images/logo.png">
    
    <title>Xoooom Autospa</title>

</head>

<style type="text/css">

body {
  width: 500px;
  margin: 0 auto;
  padding: 50px;
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

    <body onload="<?php 
                if($job_listing_id == 0){
                  echo "set_Edit_data()";
                }else{
                  echo "set_main_personnel()";
                }?>">
    
    <script>
      //For debugging display

      // check_local_storage_values();

      // function check_local_storage_values(){
      //   alert("Date: "+localStorage.getItem("date_serviced")+"\n Time: "+localStorage.getItem("time_serviced")+"\n Worker: "+localStorage.getItem("workers")+"\n Partner: "+localStorage.getItem("tag_workers")+"\n Plate Number: "+localStorage.getItem("platenumber")+"\n Size: "+localStorage.getItem("car_size_details")+"\n Type: "+localStorage.getItem("package_type")+"\n Discount: "+localStorage.getItem("discounts")+"\n Discount Reason: "+localStorage.getItem("promo_reason")+"\n Additional Charge Type: "+localStorage.getItem("additionals")+"\n Others Amount: "+localStorage.getItem("additional_amount")+"\n Others Note: "+localStorage.getItem("note"));
      // }
    </script>
        <div style="margin-top: 5%;margin-left: 5%;margin-right: 5%;">
            <div style="float:left; width: auto;position: relative;display: inline-block;margin:0;">
                <p style="font-weight: bold;background: white;margin:0;overflow: hidden;font-size: 20px;">Product Purchase Tracker</p>
                <p style="font-size: 10px;margin:0;color: #868686;">Please fill up all the necessary fields for this product order</p>
            </div>
            <div style="float: right; width: auto;position: relative;display: inline-block;"><p style="width: auto;background: white;margin:0;overflow: hidden">
              
                <a onclick="" href="<?php 
                if($edit_status_id == 0){
                    if($job_listing_id == 0){
                        echo "CC-client_dashboard.php";
                    }else{
                        echo "CC-TrackerForm.php?job_listing_id=".$job_listing_id;
                    }
                }else if($edit_status_id == 1){
                    echo "CC-Edittable-TrackerForm.php?job_listing_id=".$job_listing_id."&return_link=".$return_link;
                }else{
                    echo "CC-client_dashboard_all_products.php?job_listing_id=$job_listing_id&edit_status_id=$edit_status_id";
                }
                ?>" style="color: #0279F6;text-decoration: none;font-size: 14px">Cancel</a></p></div><br> 
        </div>

        <div style="height: 1px; width: 100%; background: #D3D3D3;margin-top: 5%;position: relative;display: inline-block;">        
        </div>
        
        <div style="color:#868686;margin-top: 5%;margin-left: 5%;font-size: 12px;"> 
            Product Order ID
        </div>
        <!-- LINK:  -->
        <form onsubmit="return submission_check()" action="Php_Function/send_product_tracker.php?job_listing_id=<?php echo $job_listing_id;?>&edit_status_id=<?php echo $edit_status_id;?>&return_link=<?php echo $return_link;?>" method="post">
        <div>
            <div style="float:left; width: auto;position: relative;display: inline-block;margin:0;margin-left: 5%;">
           
            <input style="background: white;border: none;padding:0;" type="text"  class="form-control" name="job_order_id" value="<?php 
                if ($job_listing_id == "0"){
                  echo "PROTRK-$job_listing_id";
                }else{
                  echo "PROTRK-$job_listing_id";
                }
                 ?>" readonly>  
            </div>
            <div style="float: right; width: auto;position: relative;display: inline-block;margin-right: 5%;">
                <p style="width: auto;background: white;margin:0;overflow: hidden;"><a href="#back" style="color: black;font-size: 14px"></a></p>
            </div>
        <div>
        <br>
        <br>

    <div class="container">
    <div class="row">
    <div class="col-md-12">
   
      <div class="form-group">
        <label style="color: #868686;font-size: 12px;">Order Details</label><br/>
        <div style="width: 100%;display: inline-block;border: 1px solid #D3D3D3;padding-bottom: 1%;padding-top: 1%;padding-right: 2%;padding-left: 2%;border-radius: 15px;">
        <label style="color: #868686;font-size: 12px;" for="checkin-date">Date</label>
        <input style="border-radius: 10px;border-color: none; border-style: none;font-size: 14px" type="date" id="date"  class="form-control" name="transaction_date" date-date-format="mm/dd/yyyy" value="<?php echo date('Y-m-d');?>" required>
      </div>

      <div class="form-group">
        <br/>
        <div style="width: 100%;display: inline-block;border: 1px solid #D3D3D3;padding-bottom: 1%;padding-top: 1%;padding-right: 2%;padding-left: 2%;border-radius: 15px;">
        <label style="color: #868686;font-size: 12px;" for="checkin-date">Customer's Name</label>
        <input style="border-radius: 10px;border-color: none; border-style: none;font-size: 14px" type="name" id="customer_name"  class="form-control" name="customer_name" placeholder="e.g Christopher Lim" value="<?php echo "";?>" required>
      </div>

      <div class="form-group">
        <br/>
        <div style="width: 100%;display: inline-block;border: 1px solid #D3D3D3;padding-bottom: 1%;padding-top: 1%;padding-right: 2%;padding-left: 2%;border-radius: 15px;">
        <label style="color: #868686;font-size: 12px;" for="checkin-date">Contact No.</label>
        <input style="border-radius: 10px;border-color: none; border-style: none;font-size: 14px" type="number" id="contactnumber"  class="form-control" name="contactnumber" placeholder="09XX-XXXX-XXX" value="<?php echo "";?>" required>
      </div>

    </div>

      <div class="form-group">
        <div style="width: 100%;display: inline-block;border: 1px solid #D3D3D3;padding-bottom: 1%;padding-top: 1%;padding-right: 2%;padding-left: 2%;border-radius: 15px;">
        <label style="color: #868686;font-size: 12px;" for="worker">Name of Personnel</label>
        <select name="workers" id="workers" style="border-radius: 10px;border-color: none; border-style: none;font-size: 14px" class="form-control">
                <option id="rodel_macas" value="<?php echo "default_personnel";?>">
                    <?php echo "<i>--- Select personnel here ---</i>";?>
                </option>
                <option value="<?php echo "Michelle Bontong";?>">
                    <?php echo "Michelle Bontong";?>
                </option>
                <option value="<?php echo "Rodel Macas";?>">
                    <?php echo "Rodel Macas";?>
                </option>
                <option value="<?php echo "Ruben Macas Jr";?>">
                    <?php echo "Ruben Macas Jr";?>
                </option>
                
            </select>
        </div>
        <label style="color: #868686;font-size: 12px;" for="email">If you’re name is not found please contact your admin.</label>
      </div>
      
      <div style="height: 1px; width: 100%; background: #D3D3D3;margin-top: 2.5%;margin-bottom: 2.5%;position: relative;display: inline-block;"></div>

      <label style="color: black;font-size: 18px;font-weight: bold;">Products</label><br/>
<div style="background: white;height: 60%;">
 
    <div style="background: white;height: 100px;border: 1px solid #F0F0F0;padding: 3%;padding-bottom: 5%;">
      <div style="background: white;float: left;display: inline-block;width:20%;text-align: center;height: 100%;">
          <!-- Insert Image here #0179F1; -->
          <p style="background: white;color: #0179F1;font-weight: bold;font-size: 16px;margin-top: 20%;padding-bottom: 5px;border: 1.5px solid #0179F1;border-radius: 5px;">₱499</p>
          
      </div> 
      <div style="background: white;float: left;display: block;height: 100%;width:60%;display: inline-block;margin-left: 5%;">
          <span style="padding-left: 4%;font-weight: normal;background: white;font-weight: normal;font-size: 14px;">Wax - (500ml)</span>
          
          <div style="margin-left: 2%;background:#F0F0F0;width: 40%;display: block;text-align: center;margin-top: 2%;">
         
          <span onclick="minus_wax()" style="padding-left: 3%;padding-right: 3%;padding-top: 2%;padding-bottom: 2%;border-radius: 0px;font-weight: normal;background: #F0F0F0;border: 1px solid #F0F0F0;display: inline-block;"><span style="font-size: 12px;margin:0;color: white;"> <i class="fa fa-minus" aria-hidden="true" style="color: #A0A0A0;"></i></span></span>
          <script>
          
          var final_wax_value = 0;
          if(localStorage.getItem("products_wax_quantity") === null){
            final_wax_value = 0;
          }else{
            final_wax_value = localStorage.getItem("products_wax_quantity");
          }
        
            function minus_wax(){
                var wax_value = document.getElementById("wax_quantity").value ;
                if(final_wax_value == 0){

                }else{
                  --final_wax_value;
                }
                document.getElementById("wax_quantity").value = "";
                document.getElementById("wax_quantity").value = final_wax_value;
                wax_compute_price();
              }
          </script>

          <input type="number" name="wax_quantity" value="0" maxlength="2" min="0" id="wax_quantity" style="border: none;text-align: center;font-size:16px;width:25%;height:;padding: 0%;font-weight: normal;background: #F0F0F0;display: inline-block;" readonly/>
          <script>
            if(localStorage.getItem("products_wax_quantity") === null){
              
            }else{
              document.getElementById("wax_quantity").value = "";
              document.getElementById("wax_quantity").value = final_wax_value;
              
            }
          </script>

          <span onclick="add_wax()" style="padding-left: 3%;padding-right: 3%;padding-top: 2%;padding-bottom: 2%;border-radius: 0px;font-weight: normal;background: #F0F0F0;border: 1px solid #F0F0F0;display: inline-block;"><span style="font-size: 12px;margin:0;color: white;"> <i class="fa fa-plus" aria-hidden="true" style="color: #A0A0A0;"></i></span></span>
          <script>
              function add_wax(){
                var wax_value = document.getElementById("wax_quantity").value ;
                if(final_wax_value == 99){

                }else{
                  ++final_wax_value;
                }
                document.getElementById("wax_quantity").value = "";
                document.getElementById("wax_quantity").value = final_wax_value;
                wax_compute_price();
              }
          </script>
      </div>
    </div>
    <div style="background: white;float: left;display: block;height: 100%;width:12%;">
          <!-- Insert Image here -->
          <p id="wax_quantity_output">₱0</p>
      </div>  
    </div>



    <div style="background: white;height: 100px;border: 1px solid #F0F0F0;padding: 3%;padding-bottom: 5%;">
      <div style="background: white;float: left;display: inline-block;width:20%;text-align: center;height: 100%;">
          <!-- Insert Image here -->
          <p style="background: white;color: #0179F1;font-weight: bold;font-size: 16px;margin-top: 20%;padding-bottom: 5px;border: 1.5px solid #0179F1;border-radius: 5px;">₱499</p>

      </div> 
      <div style="background: white;float: left;display: block;height: 100%;width:60%;display: inline-block;margin-left: 5%;">
          <span style="padding-left: 4%;font-weight: normal;background: white;font-weight: normal;font-size: 14px;">Engine Shine - (500ml)</span>
          
          <div style="margin-left: 2%;background:#F0F0F0;width: 40%;display: block;text-align: center;margin-top: 2%;">
         
          <span onclick="minus_engine_shine()" style="3%;padding-right: 3%;padding-top: 2%;padding-bottom: 2%;border-radius: 0px;font-weight: normal;background: #F0F0F0;border: 1px solid #F0F0F0;display: inline-block;"><span style="font-size: 12px;margin:0;color: white;"> <i class="fa fa-minus" aria-hidden="true" style="color: #A0A0A0;"></i></span></span>
          <script>
          var final_engine_shine_value = 0;
          if(localStorage.getItem("products_engine_shine_quantity") === null){
            final_engine_shine_value = 0;
          }else{
            final_engine_shine_value = localStorage.getItem("products_engine_shine_quantity");
          }

              function minus_engine_shine(){
                var wax_value = document.getElementById("engine_shine_quantity").value ;
                if(final_engine_shine_value == 0){

                }else{
                  --final_engine_shine_value;
                }
                document.getElementById("engine_shine_quantity").value = "";
                document.getElementById("engine_shine_quantity").value = final_engine_shine_value;
                engine_shine_compute();
              }
          </script>
          
          
          <input type="number" name="engine_shine_quantity" value="0" maxlength="2" min="0" id="engine_shine_quantity" style="border: none;text-align: center;font-size:16px;width:25%;height:;padding: 0%;font-weight: normal;background: #F0F0F0;display: inline-block;" readonly/>
          <script>
            if(localStorage.getItem("products_engine_shine_quantity") === null){
              
            }else{
              document.getElementById("engine_shine_quantity").value = "";
              document.getElementById("engine_shine_quantity").value = final_engine_shine_value;
              
            }
          </script>

          <span onclick="add_engine_shine()" style="3%;padding-right: 3%;padding-top: 2%;padding-bottom: 2%;border-radius: 0px;font-weight: normal;background: #F0F0F0;border: 1px solid #F0F0F0;display: inline-block;"><span style="font-size: 12px;margin:0;color: white;"> <i class="fa fa-plus" aria-hidden="true" style="color: #A0A0A0;"></i></span></span>
          <script>
         
              function add_engine_shine(){
                var wax_value = document.getElementById("engine_shine_quantity").value ;
                if(final_engine_shine_value == 99){

                }else{
                  ++final_engine_shine_value;
                }
                document.getElementById("engine_shine_quantity").value = "";
                document.getElementById("engine_shine_quantity").value = final_engine_shine_value;
                engine_shine_compute();
              }
          </script>
      </div>
    </div>
    <div style="background: white;float: left;display: block;height: 100%;width:12%;">
          <!-- Insert Image here -->
          <p id="engine_quantity_output">₱0</p>
      </div>  
    </div>


    <div style="background: white;height: 100px;border: 1px solid #F0F0F0;padding: 3%;padding-bottom: 5%;">
      <div style="background: white;float: left;display: inline-block;width:20%;text-align: center;height: 100%;">
          <!-- Insert Image here -->
          <p style="background: white;color: #0179F1;font-weight: bold;font-size: 16px;margin-top: 20%;padding-bottom: 5px;border: 1.5px solid #0179F1;border-radius: 5px;">₱499</p>

      </div> 
      <div style="background: white;float: left;display: block;height: 100%;width:60%;display: inline-block;margin-left: 5%;">
          <span style="padding-left: 4%;font-weight: normal;background: white;font-weight: normal;font-size: 14px;">Engine Degreaser - (500ml)</span>
          
          <div style="margin-left: 2%;background:#F0F0F0;width: 40%;display: block;text-align: center;margin-top: 2%;">
         
          <span onclick="minus_egd()" style="padding-left: 3%;padding-right: 3%;padding-top: 2%;padding-bottom: 2%;border-radius: 0px;font-weight: normal;background: #F0F0F0;border: 1px solid #F0F0F0;display: inline-block;"><span style="font-size: 12px;margin:0;color: white;"> <i class="fa fa-minus" aria-hidden="true" style="color: #A0A0A0;"></i></span></span>
          <script>
          var final_egd_value = 0;
          if(localStorage.getItem("products_engine_degreaser_quantity") === null){
            final_egd_value = 0;
          }else{
            final_egd_value = localStorage.getItem("products_engine_degreaser_quantity");
          }

              function minus_egd(){
                var wax_value = document.getElementById("wax_quantity").value;
                if(final_egd_value == 0){

                }else{
                  --final_egd_value;
                }
                document.getElementById("engine_degreaser_quantity").value = "";
                document.getElementById("engine_degreaser_quantity").value = final_egd_value;
                engine_degreaser_compute();
              }
          </script>

          <input type="number" name="engine_degreaser_quantity" value="0" min="0" id="engine_degreaser_quantity" style="border: none;text-align: center;font-size:16px;width:25%;height:;padding: 0%;font-weight: normal;background: #F0F0F0;display: inline-block;" readonly/>
          <script>
            if(localStorage.getItem("products_engine_degreaser_quantity") === null){
              
            }else{
              document.getElementById("engine_degreaser_quantity").value = "";
              document.getElementById("engine_degreaser_quantity").value = final_egd_value;
              
            }
          </script>

          <span onclick="add_egd()" style="padding-left: 3%;padding-right: 3%;padding-top: 2%;padding-bottom: 2%;border-radius: 0px;font-weight: normal;background: #F0F0F0;border: 1px solid #F0F0F0;display: inline-block;"><span style="font-size: 12px;margin:0;color: white;"> <i class="fa fa-plus" aria-hidden="true" style="color: #A0A0A0;"></i></span></span>
          <script>
          
              function add_egd(){
                var wax_value = document.getElementById("wax_quantity").value ;
                if(final_egd_value == 99){

                }else{
                  ++final_egd_value;
                }
                document.getElementById("engine_degreaser_quantity").value = "";
                document.getElementById("engine_degreaser_quantity").value = final_egd_value;
                engine_degreaser_compute();
              }
          </script>
      </div>
    </div>
    <div style="background: white;float: left;display: block;height: 100%;width:12%;">
          <!-- Insert Image here -->
          <p id="engine_degreaser_output">₱0</p>
      </div>  
    </div>


    <div style="background: white;height: 100px;border: 1px solid #F0F0F0;padding: 3%;padding-bottom: 5%;">
      <div style="background: white;float: left;display: inline-block;width:20%;text-align: center;height: 100%;">
          <!-- Insert Image here -->
          <p style="background: white;color: #0179F1;font-weight: bold;font-size: 16px;margin-top: 20%;padding-bottom: 5px;border: 1.5px solid #0179F1;border-radius: 5px;">₱299</p>

          
      </div> 
      <div style="background: white;float: left;display: block;height: 100%;width:60%;display: inline-block;margin-left: 5%;">
          <span style="padding-left: 4%;font-weight: normal;background: white;font-weight: normal;font-size: 14px;">Freshener - (250ml)</span>
          
          <div style="margin-left: 2%;background:#F0F0F0;width: 40%;display: block;text-align: center;margin-top: 2%;">
         
          <span onclick="minus_freshener()" style="padding-left: 3%;padding-right: 3%;padding-top: 2%;padding-bottom: 2%;border-radius: 0px;font-weight: normal;background: #F0F0F0;border: 1px solid #F0F0F0;display: inline-block;"><span style="font-size: 12px;margin:0;color: white;"> <i class="fa fa-minus" aria-hidden="true" style="color: #A0A0A0;"></i></span></span>
          <script>
          var final_freshener_value = 0;
          if(localStorage.getItem("products_freshener_quantity") === null){
            final_freshener_value = 0;
          }else{
            final_freshener_value = localStorage.getItem("products_freshener_quantity");
          }

              function minus_freshener(){
                var wax_value = document.getElementById("wax_quantity").value ;
                if(final_freshener_value == 0){

                }else{
                  --final_freshener_value;
                }
                document.getElementById("freshener_quantity").value = "";
                document.getElementById("freshener_quantity").value = final_freshener_value;
                freshener_compute();
              }
          </script>
          <input type="number" name="freshener_quantity" value="0" maxlength="2" min="0" id="freshener_quantity" style="border: none;text-align: center;font-size:16px;width:25%;height:;padding: 0%;font-weight: normal;background: #F0F0F0;display: inline-block;"  value="0" readonly/>
          <script>
            if(localStorage.getItem("products_freshener_quantity") === null){
              
            }else{
              document.getElementById("freshener_quantity").value = "";
              document.getElementById("freshener_quantity").value = final_freshener_value;
              
            }
          </script>
          
          <span onclick="add_freshener()" style="padding-left: 3%;padding-right: 3%;padding-top: 2%;padding-bottom: 2%;border-radius: 0px;font-weight: normal;background: #F0F0F0;border: 1px solid #F0F0F0;display: inline-block;"><span style="font-size: 12px;margin:0;color: white;"> <i class="fa fa-plus" aria-hidden="true" style="color: #A0A0A0;"></i></span></span>
          <script>
         
              function add_freshener(){
                var wax_value = document.getElementById("wax_quantity").value ;
                if(final_freshener_value == 99){

                }else{
                  ++final_freshener_value;
                }
                document.getElementById("freshener_quantity").value = "";
                document.getElementById("freshener_quantity").value = final_freshener_value;
                freshener_compute();
              }
          </script>
      </div>
    </div>
    <div style="background: white;float: left;display: block;height: 100%;width:12%;">
          <!-- Insert Image here -->
          <p id="freshener_output">₱0</p>
      </div>  
    </div>


    <div style="background: white;height: 100px;border: 1px solid #F0F0F0;padding: 3%;padding-bottom: 5%;">
      <div style="background: white;float: left;display: inline-block;width:20%;text-align: center;height: 100%;">
          <!-- Insert Image here -->
          <p style="background: white;color: #0179F1;font-weight: bold;font-size: 16px;margin-top: 20%;padding-bottom: 5px;border: 1.5px solid #0179F1;border-radius: 5px;">₱299</p>

          
      </div> 
      <div style="background: white;float: left;display: block;height: 100%;width:60%;display: inline-block;margin-left: 5%;">
          <span style="padding-left: 4%;font-weight: normal;background: white;font-weight: normal;font-size: 14px;">WM Remover - (250ml)<br><empty style="padding-left:4%;font-size: 12px;margin:0;overflow:hidden;color: gray;">*Watermark Remover</empty></span>
          
          <div style="margin-left: 2%;background:#F0F0F0;width: 40%;display: block;text-align: center;margin-top: 2%;">
         
          <span onclick="minus_wmremove()" style="padding-left: 3%;padding-right: 3%;padding-top: 2%;padding-bottom: 2%;border-radius: 0px;font-weight: normal;background: #F0F0F0;border: 1px solid #F0F0F0;display: inline-block;"><span style="font-size: 12px;margin:0;color: white;"> <i class="fa fa-minus" aria-hidden="true" style="color: #A0A0A0;"></i></span></span>
          <script>
          var final_wmremove_value = 0;
          if(localStorage.getItem("products_water_remover_quantity") === null){
            final_wmremove_value = 0;
          }else{
            final_wmremove_value = localStorage.getItem("products_water_remover_quantity");
          }

              function minus_wmremove(){
                var wax_value = document.getElementById("wax_quantity").value ;
                if(final_wmremove_value == 0){

                }else{
                  --final_wmremove_value;
                }
                document.getElementById("water_remover_quantity").value = "";
                document.getElementById("water_remover_quantity").value = final_wmremove_value;
                water_remover_compute();
              }
          </script>
          <input type="number" name="water_remover_quantity" value="0" maxlength="2" min="0" id="water_remover_quantity" style="border: none;text-align: center;font-size:16px;width:25%;height:;padding: 0%;font-weight: normal;background: #F0F0F0;display: inline-block;"  value="0" readonly/>
          <script>
            if(localStorage.getItem("products_water_remover_quantity") === null){
              
            }else{
              document.getElementById("water_remover_quantity").value = "";
              document.getElementById("water_remover_quantity").value = final_wmremove_value;
              
            }
          </script>

          <span onclick="add_wmremove()" style="padding-left: 3%;padding-right: 3%;padding-top: 2%;padding-bottom: 2%;border-radius: 0px;font-weight: normal;background: #F0F0F0;border: 1px solid #F0F0F0;display: inline-block;"><span style="font-size: 12px;margin:0;color: white;"> <i class="fa fa-plus" aria-hidden="true" style="color: #A0A0A0;"></i></span></span>
          <script>
          var final_wmremove_value = 0;
              function add_wmremove(){
                var wax_value = document.getElementById("wax_quantity").value ;
                if(final_wmremove_value == 99){

                }else{
                  ++final_wmremove_value;
                }
                document.getElementById("water_remover_quantity").value = "";
                document.getElementById("water_remover_quantity").value = final_wmremove_value;
                water_remover_compute();
              }
          </script>
      </div>
    </div>
    <div style="background: white;float: left;display: block;height: 100%;width:12%;">
          <!-- Insert Image here -->
          <p id="water_remover_output">₱0</p>
      </div>  
    </div>
    

    

    

<!-- <div class="form-group">
  <div style="width: 100%;display: inline-block;border: 1px solid #D3D3D3;padding-bottom: 1%;padding-top: 1%;padding-right: 2%;padding-left: 2%;border-radius: 15px;">
    <table style=" display: inline-block;border-collapse: separate;
  border-spacing: 5px 0px;border-color: #868686;background:white;
  border-radius:10px;width:100%;margin:0 auto;font-size:12px;text-align:left;">
      <thead>
        <tr>
          <th>Product Name</th>
          <th>Volume</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Total</th>
         
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Wax</td>
          <td>500ml</td>
          <td>₱499</td>
          <td>
            <button style=""></button>
            <input onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57" onkeyup="wax_compute_price()" type="number" name="wax_quantity" value="0" maxlength="2" min="0" id="wax_quantity" style="width:40%;border-style: none;font-size: 12px"/></td>
          <td id="wax_quantity_output">₱0</td>
              
        </tr>
           <tr>
          <td>Engine Shine</td>
          <td>500ml</td>
          <td>₱499</td>
           <td>
            <input type="number" onchange="engine_shine_compute()" name="engine_shine_quantity" value="0" maxlength="2" min="0" id="engine_shine_quantity" style="border-style: none;font-size: 12px"/></td>
          <td id="engine_quantity_output">₱0</td>
        </tr>
           <tr>
          <td>Engine Degreaser</td>
          <td>500ml</td>
          <td>₱499</td>
           <td>
            <input onchange="engine_degreaser_compute()" type="number" name="engine_degreaser_quantity" value="0" maxlength="2" min="0" id="engine_degreaser_quantity" style="border-style: none;font-size: 12px"/></td>
            <td id="engine_degreaser_output">₱0</td>
        </tr>
           <tr>
          <td>Freshener </td>
          <td>250ml</td>
          <td>₱299</td>
          <td>
            <input onchange="freshener_compute()" type="number" name="freshener_quantity" value="0" maxlength="2" min="0" id="freshener_quantity" style="border-style: none;font-size: 12px"/></td>
            <td id="freshener_output">₱0</td>
        </tr>
         <tr>
          <td>Watermarks Remover </td>
          <td>250ml</td>
          <td>₱299</td>
           <td>
            <input onchange="water_remover_compute()" id="water_remover_quantity" type="number" name="water_remover_quantity" value="0" maxlength="2" min="0" id="number" style="border-style: none;font-size: 12px"/></td>
            <td id="water_remover_output">₱0</td>
        </tr>
      </tbody>
    </table>
  </div>
  
 </div> -->

<label style="color: #868686;font-size: 12px;">Discounts</label>
    <div class="form-group" >
        <div style="width: 100%;display: inline-block;border: 1px solid #D3D3D3;padding-bottom: 1%;padding-top: 1%;padding-right: 2%;padding-left: 2%;border-radius: 15px;">
        <label style="color: #868686;font-size: 12px;" for="discounts">Discount Percentage</label>
         <select onchange="discounts_pop_up()" name="discounts" id="discounts" style="border-radius: 10px;border-color: none; border-style: none;font-size: 14px" class="form-control">
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

    <div id="discount_promo_code" style="position: relative;display: none;height:0px;" class="form-group">
        <div style="float:left; width: 200%;position: relative;display: none;margin:0;border: 1px solid #D3D3D3;padding-bottom: 1%;padding-top: 1%;padding-right: 2%;padding-left: 2%;border-radius: 15px;">
        <label style="color: #868686;font-size: 12px;" for="promocode">Promo Code</label>
        <input style="border-radius: 10px;border-color: none; border-style: none;font-size: 14px" class="form-control" type="text" id="promo_code" name="promo" placeholder="Enter promo code here. (Disregard if none)" value="none">
        </div>
    </div>

    <div id="discount_reason_container" style="position: relative;display: none;width: 100%;" class="form-group" >
        <div style="float:left; width: 100%;position: relative;display: inline-block;margin:0;border: 1px solid #D3D3D3;padding-bottom: 1%;padding-top: 0%;padding-right: 2%;padding-left: 2%;border-radius: 15px;" >
        <label style="color: #868686;font-size: 12px;" for="discountreason">Discount Reason</label>
        <input style="border-radius: 10px;border-color: none; border-style: none;font-size: 14px" class="form-control" type="text" id="promo" name="promo_reason" placeholder="Enter discount reason here. (Required)">
        </div>
    </div>

    <br/><label style="color: #868686;font-size: 12px;">Add Note</label>
    <div class="form-group">
        <div style="width: 100%;display: inline-block;border: 1px solid #D3D3D3;padding-bottom: 1%;padding-top: 1%;padding-right: 2%;padding-left: 2%;border-radius: 15px;">
         <textarea style="border-radius: 10px;border-color: none; border-style: none;font-size: 14px" id="note" name="note" placeholder="Note here" class="form-control" required></textarea>
        </div>
    </div>

      <div style="width: 100%; height: 0.1vh; background: #DCDCDC;overflow:hidden;margin-bottom: 5%;"></div>

<table style="width: 95%;">
  <tr>
    <th style="color: black;">Product Billing</th>
    <th style="text-align: right;color: black;">(PHP) Amount</th>
    
  </tr>
  
  <tr>
    <td id="package_label_14">Subtotal Amount </td>
    <td  style="text-align: right;"><input id="additional_other_amount" name="additional_other_amount" style="padding:0;border: none; font-size: 16px;text-align: right;outline:none;" type="number" value="0" readonly/></td>
  </tr>

  <tr>
    <td id="additional_discount_label">Discount  (0%)</td>
    <td><input style="border: none; font-size: 16px;text-align: right;outline:none;height:auto;padding: 0;" id="additional_discount_amount" type="number" name="additional_discount_amount" style="text-align: right;" value="0" readonly/></td>
  </tr>

  <tr>
    <td id="additional_discount_label">Manager's Discount</td>
    <td><input style="border: none; font-size: 16px;text-align: right;outline:none;height:auto;padding: 0;" id="product_managers_discount" type="number" name="product_managers_discount" style="text-align: right;" value="0" readonly/></td>
  </tr>

  <tr>
    <td id="package_label_12">VAT</td>
    <td><input style="border: none; font-size: 16px;text-align: right;outline:none;height:auto;padding: 0;" type="number" id="additional_vat_amount" name="additional_vat_amount" style="text-align: right;" value="0" readonly/></td>
  </tr>

  <tr>
    <td id="package_label_13" style="font-weight: bold;color: #0279F6">Product Total:</td>
    <td><input style="font-weight: bold;color: #0279F6;border: none; font-size: 16px;text-align: right;outline:none;height:auto;padding: 0;" type="number" id="additional_sub_total" name="additional_sub_total" style="text-align: right;" value="0" readonly/></td>
  </tr>
  
</table>

    <br>
    <div style="width: 100%; height: 0.1vh; background: #DCDCDC;overflow:hidden;margin-bottom: 10%;"></div>
      <input class="btn btn-primary btn-lg btn-block" style="background-color:black;border-color:black;font-size:16px;border-radius: 100px;" type="submit" value="Submit"/>
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
     <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery-migrate-3.0.0.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        ></script>

<script type="text/javascript">
    

    var currentDateTime = new Date();
    var year = currentDateTime.getFullYear();
    var month = (currentDateTime.getMonth() + 1);
    var date = (currentDateTime.getDate() + 1);

    if(date < 10) {
      date = '0' + date;
    }
    if(month < 10) {
      month = '0' + month;
    }

    var dateTomorrow = year + "-" + month + "-" + date;
    var checkinElem = document.querySelector("#checkin-date");
    var checkoutElem = document.querySelector("#checkout-date");

    checkinElem.setAttribute("min", dateTomorrow);

    checkinElem.onchange = function () {
        checkoutElem.setAttribute("min", this.value);
    }
    </script>
<script src="assets/js/timedropper.js"></script>
<script type="text/javascript">
    $( "#hour" ).timeDropper();
</script>

<script>
  $(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
   
    var x = 1; //initlal text box count
  
  
   $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
  
         //text box increment
            $(wrapper).append(' <div><a href="#" class="remove_field">Remove</a><div class="form-group"><div style="width: 100%;display: inline-block;border: 1px solid #D3D3D3;padding-bottom: 1%;padding-top: 1%;padding-right: 2%;padding-left: 2%;border-radius: 15px;"><label style="color: #868686;font-size: 12px;" for="productname">Product Name</label><input style="border-radius: 10px;border-color: none; border-style: none;font-size: 14px" class="form-control" type="text" id="productname" name="productname" placeholder="Product" pattern=[A-Z\sa-z]{3,20} required></div></div><div class="form-group"><div style="width: 100%;display: inline-block;border: 1px solid #D3D3D3;padding-bottom: 1%;padding-top: 1%;padding-right: 2%;padding-left: 2%;border-radius: 15px;"><label style="color: #868686;font-size: 12px;" for="productquantity">Product Quantity</label><input style="border-radius: 10px;border-color: none; border-style: none;font-size: 14px" class="form-control" type="text" id="productquantity" name="productquantity" placeholder="pcs" pattern=[A-Z\sa-z]{3,20} required></div></div></div>'); //add input box
            x++; 
    }
    });
   
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
       
    e.preventDefault(); 
    $(this).parent('div').remove(); 
    x--;
    })
});
  </script>
<script>
                  
  var local_storage_tag_worker = localStorage.getItem("tag_workers");
  //alert(local_storage_worker, local_storage_tag_worker);

  function set_Edit_data(){
    // Checks if job_listing = 0 is called for editing or creating a new single purchase product order.
    if (localStorage.getItem("local_product_commission_id") === null) {
      
    }else{
      set_main_personnel();
    }

  }

  function set_main_personnel(){
    
      /** Customer Name */
      var local_storage_customer_name = localStorage.getItem("customer_name");
      

     /** Customer Contact Number */
     var local_storage_contactnumber = localStorage.getItem("contactnumber");

      /**  Personnel Variables */
      var local_storage_worker = localStorage.getItem("workers");
      //alert("Running");
      var selected_personnel_main = local_storage_worker;
      var default_personnel_main = document.getElementById("workers").getElementsByTagName("option");
      /** --------------------------------------------------------------------------------------- */

      /** Discount Vars */
      var local_storage_discounts = localStorage.getItem("products_discounts");
      var default_discount_percentage = document.getElementById("discounts").getElementsByTagName("option");
      /** --------------------------------------------------------------------------------------- */

      /** Discount Reason */
      var local_storage_promo_reason = localStorage.getItem("products_promo");
      /** --------------------------------------------------------------------------------------- */

      /** Notes */
      var local_storage_notes = localStorage.getItem("products_note");
      /** --------------------------------------------------------------------------------------- */


      /**------------ Sets Contact Name ------------------------------------------------------ */
      document.getElementById("customer_name").value = local_storage_customer_name;
      /**---------------------------------------------------------------------------------------- */

      /**------------ Sets Contact Number ------------------------------------------------------ */
      document.getElementById("contactnumber").value = local_storage_contactnumber;
      /**---------------------------------------------------------------------------------------- */


      //Sets Personnel from the Service/Commission Tracker form.
      for (var i = 0; i < default_personnel_main.length; i++) {

          if(selected_personnel_main == default_personnel_main[i].value){
          
            document.getElementById('workers').getElementsByTagName('option')[i].selected = 'selected';
          }else{
              //default_personnel_main[i].disabled = true;
              
          }
      }

      //Sets Discount, Discount Reason, Note
      if (localStorage.getItem("products_discounts") === null) {
        //Products Tracker form has an existing data.
      }else{
        //alert("Products has an existing data.");

              /**------------ Sets Discount Percentage ------------------------------------------------------ */
              for (var i = 0; i < default_discount_percentage.length; i++) {

                if(local_storage_discounts == default_discount_percentage[i].value){
                
                  document.getElementById('discounts').getElementsByTagName('option')[i].selected = 'selected';
                  discounts_pop_up();
                }
              }
              /** ---------------------------------------------------------------------------------------------*/

              /**------------ Sets Discount Reason ------------------------------------------------------ */
              document.getElementById("promo").value = local_storage_promo_reason;
              /**---------------------------------------------------------------------------------------- */

              /**------------ Sets Note ------------------------------------------------------ */
              document.getElementById("note").innerHTML = local_storage_notes;
              /**---------------------------------------------------------------------------------------- */

      }
  }
</script>
<script type="text/javascript">
var wax_subtotal = 0;
var engine_shine_subtotal = 0;
var engine_degreaser_subtotal = 0;
var freshener_subtotal = 0;
var watermark_remover_subtotal = 0;

var subtotal_amount = 0;
var discount_amount = 0;

function submission_check(){
        var personnel_main = document.getElementById("workers").value;
        
        if(personnel_main == "default_personnel"){
          alert("Please select a personnel.");
          return false;
        }else if(document.getElementById("additional_sub_total").value == "0"){
          alert("Please add a product.");
          return false;
        }else{
         
            if (typeof(Storage) !== "undefined") {
              // data storage Set Data

              //ID
              localStorage.setItem("products_order_bind_id", <?php echo json_encode($job_listing_id);?>);

              //date
              var mDateProducts = document.getElementById("date").value;
              //alert("Date: "+mDate);
              localStorage.setItem("products_date", mDateProducts);
              //Customer Name
              var mCustomerName = document.getElementById("customer_name").value;
              //alert("Date: "+mDate);
              localStorage.setItem("customer_name", mCustomerName);
              //Customer Contact Number
              var mContactNumber = document.getElementById("contactnumber").value;
              //alert("Date: "+mDate);
              localStorage.setItem("contactnumber", mContactNumber);
              //Personnel
              var mWorkerProducts = document.getElementById("workers").value;
              //alert("Date: "+mDate);
              localStorage.setItem("products_workers", mWorkerProducts);
              //Wax Quantity
              var mWax = document.getElementById("wax_quantity").value;
              //alert("Date: "+mDate);
              localStorage.setItem("products_wax_quantity", mWax);
              //Engine Shine Quantity
              var mEngineShine = document.getElementById("engine_shine_quantity").value;
              //alert("Date: "+mDate);
              localStorage.setItem("products_engine_shine_quantity", mEngineShine);
              //Engine Degreaser Quantity
              var mEngine_Degreaser = document.getElementById("engine_degreaser_quantity").value;
              //alert("Date: "+mDate);
              localStorage.setItem("products_engine_degreaser_quantity", mEngine_Degreaser);
              //Freshener Quantity
              var mFreshener = document.getElementById("freshener_quantity").value;
              //alert("Date: "+mDate);
              localStorage.setItem("products_freshener_quantity", mFreshener);
              //Watermark Remover Quantity
              var mWatermarkRemover = document.getElementById("water_remover_quantity").value;
              //alert("Date: "+mDate);
              localStorage.setItem("products_water_remover_quantity", mWatermarkRemover);
              //Discount Percentage
              var mDiscount = document.getElementById("discounts").value;
              //alert("Date: "+mDate);
              localStorage.setItem("products_discounts", mDiscount);
              //Discount Reason
              var mDiscountReason = document.getElementById("promo").value;
              //alert("Date: "+mDate);
              localStorage.setItem("products_promo", mDiscountReason);
              //Note
              var mNote = document.getElementById("note").value;
              //alert("Date: "+mDate);
              localStorage.setItem("products_note", mNote);
              
             
              //Subtotal Amount
              var mSubtotalAmount = document.getElementById("additional_other_amount").value;
              localStorage.setItem("products_subtotal_amount", mSubtotalAmount);
              //For Discount Percentage use the discount var above.
              //Discount Amount
              var mDiscountAmount = document.getElementById("additional_discount_amount").value;
              localStorage.setItem("products_additional_discount_amount", mDiscountAmount);
              //VAT
              var mVat = document.getElementById("additional_vat_amount").value;
              localStorage.setItem("products_additional_vat_amount", mVat);
              //Total
              var mTotal = document.getElementById("additional_sub_total").value;
              localStorage.setItem("products_additional_sub_total", mTotal);

              return true;
            } else {
              alert("Sorry, your browser does not support Web Storage.");
              alert("Please update your current browser in order to use this web app.");
              return true;
            }  
            
        }
       
}

water_remover_compute();
function water_remover_compute(){
  var water_remover_quantity = parseInt(document.getElementById("water_remover_quantity").value);
  var total_price = water_remover_quantity * 299;

  
  document.getElementById("water_remover_output").innerHTML = "";
  document.getElementById("water_remover_output").innerHTML = "₱"+total_price;
  watermark_remover_subtotal = total_price;
  subtotal_compute();
}

freshener_compute();
function freshener_compute(){
  var freshener_quantity = parseInt(document.getElementById("freshener_quantity").value);
  var total_price = freshener_quantity * 299;

  
  document.getElementById("freshener_output").innerHTML = "";
  document.getElementById("freshener_output").innerHTML = "₱"+total_price;
  freshener_subtotal = total_price;
  subtotal_compute();
}

engine_degreaser_compute();
function engine_degreaser_compute(){
  var engine_degreaser_quantity = parseInt(document.getElementById("engine_degreaser_quantity").value);
  var total_price = engine_degreaser_quantity * 499;

  
  document.getElementById("engine_degreaser_output").innerHTML = "";
  document.getElementById("engine_degreaser_output").innerHTML = "₱"+total_price;
  engine_degreaser_subtotal = total_price;
  subtotal_compute();
}

engine_shine_compute();
function engine_shine_compute(){
  var engine_shine_quantity = parseInt(document.getElementById("engine_shine_quantity").value);
  var total_price = engine_shine_quantity * 499;

  
  document.getElementById("engine_quantity_output").innerHTML = "";
  document.getElementById("engine_quantity_output").innerHTML = "₱"+total_price;
  engine_shine_subtotal = total_price;
  subtotal_compute();

}

function total_price_compute(){
  document.getElementById("additional_sub_total").value = "";
  document.getElementById("additional_sub_total").value = (parseInt(subtotal_amount-discount_amount));
  
}

function subtotal_compute(){
  subtotal_amount = (parseInt(wax_subtotal+engine_shine_subtotal+engine_degreaser_subtotal+freshener_subtotal+watermark_remover_subtotal));
  document.getElementById("additional_other_amount").value = "";
  document.getElementById("additional_other_amount").value = (parseInt(wax_subtotal+engine_shine_subtotal+engine_degreaser_subtotal+freshener_subtotal+watermark_remover_subtotal));
  discounts_pop_up();
}


function incrementValue()
{
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    if(value<10){
        value++;
            document.getElementById('number').value = value;
    }
}
function decrementValue()
{
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    if(value>1){
        value--;
            document.getElementById('number').value = value;
    }

}

//Calls the function on load to compute automatically.
wax_compute_price();
function wax_compute_price(){
  
  var wax_quantity = parseInt(document.getElementById("wax_quantity").value);
  var final_wax_qty = 0;
  if(wax_quantity == "" || wax_quantity == null){

  }
  var total_price = wax_quantity * 499;

  
  document.getElementById("wax_quantity_output").innerHTML = "";
  document.getElementById("wax_quantity_output").innerHTML = "₱"+total_price;
  wax_subtotal = total_price;
  subtotal_compute();

}



 function discounts_pop_up() {
            var discounts_value = document.getElementById("discounts").value;

            if(String(discounts_value) == "none"){
                document.getElementById("discount_promo_code").style.display = "none";
                document.getElementById("discount_reason_container").style.display = "none";

                document.getElementById("additional_discount_label").innerHTML = "";
                document.getElementById("additional_discount_label").innerHTML = "Discount (0%)";

                document.getElementById("additional_discount_amount").value = "";
                document.getElementById("additional_discount_amount").value = parseInt(subtotal_amount*0);
                discount_amount = parseInt(subtotal_amount*0);
            }else{
                document.getElementById("discount_promo_code").style.display = "inline-block";
                document.getElementById("discount_reason_container").style.display = "inline-block";
                
                if(String(discounts_value) == "ten"){
                  
                  document.getElementById("additional_discount_label").innerHTML = "";
                  document.getElementById("additional_discount_label").innerHTML = "Discount (10%)";

                  var raw_decimal_amount_holder = 0.0;
                  raw_decimal_amount_holder = subtotal_amount*0.10;
                  
                  if((raw_decimal_amount_holder%1)>0){
                     discount_amount = parseInt(raw_decimal_amount_holder+1.00);
                     //Display discount amount.
                     document.getElementById("additional_discount_amount").value = "";
                     document.getElementById("additional_discount_amount").value = discount_amount;
                   
                  }else{
                     discount_amount = parseInt(raw_decimal_amount_holder);
                     //Display discount amount.
                     document.getElementById("additional_discount_amount").value = "";
                     document.getElementById("additional_discount_amount").value = parseInt(subtotal_amount*0.10);
                  }

                }else if(String(discounts_value) == "twenty"){
                  document.getElementById("additional_discount_label").innerHTML = "";
                  document.getElementById("additional_discount_label").innerHTML = "Discount (20%)";

                  var raw_decimal_amount_holder = 0.0;
                  raw_decimal_amount_holder = subtotal_amount*0.20;
                  
                  if((raw_decimal_amount_holder%1)>0){
                     discount_amount = parseInt(raw_decimal_amount_holder+1.00);
                     //Display discount amount.
                     document.getElementById("additional_discount_amount").value = "";
                     document.getElementById("additional_discount_amount").value = discount_amount;
                   
                  }else{
                     discount_amount = parseInt(raw_decimal_amount_holder);
                     //Display discount amount.
                     document.getElementById("additional_discount_amount").value = "";
                     document.getElementById("additional_discount_amount").value = parseInt(subtotal_amount*0.20);
                  }
                  

                }else if(String(discounts_value) == "thirty"){
                  document.getElementById("additional_discount_label").innerHTML = "";
                  document.getElementById("additional_discount_label").innerHTML = "Discount (30%)";

                  var raw_decimal_amount_holder = 0.0;
                  raw_decimal_amount_holder = subtotal_amount*0.30;
                  
                  if((raw_decimal_amount_holder%1)>0){
                     discount_amount = parseInt(raw_decimal_amount_holder+1.00);
                     //Display discount amount.
                     document.getElementById("additional_discount_amount").value = "";
                     document.getElementById("additional_discount_amount").value = discount_amount;
                   
                  }else{
                     discount_amount = parseInt(raw_decimal_amount_holder);
                     //Display discount amount.
                     document.getElementById("additional_discount_amount").value = "";
                     document.getElementById("additional_discount_amount").value = parseInt(subtotal_amount*0.30);
                  }
                  
                }else if(String(discounts_value) == "forty"){
                  document.getElementById("additional_discount_label").innerHTML = "";
                  document.getElementById("additional_discount_label").innerHTML = "Discount (40%)";

                  var raw_decimal_amount_holder = 0.0;
                  raw_decimal_amount_holder = subtotal_amount*0.40;
                  
                  if((raw_decimal_amount_holder%1)>0){
                     discount_amount = parseInt(raw_decimal_amount_holder+1.00);
                     //Display discount amount.
                     document.getElementById("additional_discount_amount").value = "";
                     document.getElementById("additional_discount_amount").value = discount_amount;
                   
                  }else{
                     discount_amount = parseInt(raw_decimal_amount_holder);
                     //Display discount amount.
                     document.getElementById("additional_discount_amount").value = "";
                     document.getElementById("additional_discount_amount").value = parseInt(subtotal_amount*0.40);
                  }
                  
                }else if(String(discounts_value) == "fifty"){
                  document.getElementById("additional_discount_label").innerHTML = "";
                  document.getElementById("additional_discount_label").innerHTML = "Discount (50%)";

                  var raw_decimal_amount_holder = 0.0;
                  raw_decimal_amount_holder = subtotal_amount*0.50;
                  
                  if((raw_decimal_amount_holder%1)>0){
                     discount_amount = parseInt(raw_decimal_amount_holder+1.00);
                     //Display discount amount.
                     document.getElementById("additional_discount_amount").value = "";
                     document.getElementById("additional_discount_amount").value = discount_amount;
                   
                  }else{
                     discount_amount = parseInt(raw_decimal_amount_holder);
                     //Display discount amount.
                     document.getElementById("additional_discount_amount").value = "";
                     document.getElementById("additional_discount_amount").value = parseInt(subtotal_amount*0.50);
                  }
                  
                }else if(String(discounts_value) == "sixty"){
                  document.getElementById("additional_discount_label").innerHTML = "";
                  document.getElementById("additional_discount_label").innerHTML = "Discount (60%)";

                  var raw_decimal_amount_holder = 0.0;
                  raw_decimal_amount_holder = subtotal_amount*0.60;
                  
                  if((raw_decimal_amount_holder%1)>0){
                     discount_amount = parseInt(raw_decimal_amount_holder+1.00);
                     //Display discount amount.
                     document.getElementById("additional_discount_amount").value = "";
                     document.getElementById("additional_discount_amount").value = discount_amount;
                   
                  }else{
                     discount_amount = parseInt(raw_decimal_amount_holder);
                     //Display discount amount.
                     document.getElementById("additional_discount_amount").value = "";
                     document.getElementById("additional_discount_amount").value = parseInt(subtotal_amount*0.60);
                  }
                  
                }else if(String(discounts_value) == "seventy"){
                  document.getElementById("additional_discount_label").innerHTML = "";
                  document.getElementById("additional_discount_label").innerHTML = "Discount (70%)";

                  var raw_decimal_amount_holder = 0.0;
                  raw_decimal_amount_holder = subtotal_amount*0.70;
                  
                  if((raw_decimal_amount_holder%1)>0){
                     discount_amount = parseInt(raw_decimal_amount_holder+1.00);
                     //Display discount amount.
                     document.getElementById("additional_discount_amount").value = "";
                     document.getElementById("additional_discount_amount").value = discount_amount;
                   
                  }else{
                     discount_amount = parseInt(raw_decimal_amount_holder);
                     //Display discount amount.
                     document.getElementById("additional_discount_amount").value = "";
                     document.getElementById("additional_discount_amount").value = parseInt(subtotal_amount*0.70);
                  }
                  
                }else if(String(discounts_value) == "eighty"){
                  document.getElementById("additional_discount_label").innerHTML = "";
                  document.getElementById("additional_discount_label").innerHTML = "Discount (80%)";

                  var raw_decimal_amount_holder = 0.0;
                  raw_decimal_amount_holder = subtotal_amount*0.80;
                  
                  if((raw_decimal_amount_holder%1)>0){
                     discount_amount = parseInt(raw_decimal_amount_holder+1.00);
                     //Display discount amount.
                     document.getElementById("additional_discount_amount").value = "";
                     document.getElementById("additional_discount_amount").value = discount_amount;
                   
                  }else{
                     discount_amount = parseInt(raw_decimal_amount_holder);
                     //Display discount amount.
                     document.getElementById("additional_discount_amount").value = "";
                     document.getElementById("additional_discount_amount").value = parseInt(subtotal_amount*0.80);
                  }
                  
                }else if(String(discounts_value) == "ninety"){
                  document.getElementById("additional_discount_label").innerHTML = "";
                  document.getElementById("additional_discount_label").innerHTML = "Discount (90%)";

                  var raw_decimal_amount_holder = 0.0;
                  raw_decimal_amount_holder = subtotal_amount*0.90;
                  
                  if((raw_decimal_amount_holder%1)>0){
                     discount_amount = parseInt(raw_decimal_amount_holder+1.00);
                     //Display discount amount.
                     document.getElementById("additional_discount_amount").value = "";
                     document.getElementById("additional_discount_amount").value = discount_amount;
                   
                  }else{
                     discount_amount = parseInt(raw_decimal_amount_holder);
                     //Display discount amount.
                     document.getElementById("additional_discount_amount").value = "";
                     document.getElementById("additional_discount_amount").value = parseInt(subtotal_amount*0.90);
                  }
                  
                }else if(String(discounts_value) == "onehundred"){
                  document.getElementById("additional_discount_label").innerHTML = "";
                  document.getElementById("additional_discount_label").innerHTML = "Discount (100%)";

                  var raw_decimal_amount_holder = 0.0;
                  raw_decimal_amount_holder = subtotal_amount*1;
                  
                  if((raw_decimal_amount_holder%1)>0){
                     discount_amount = parseInt(raw_decimal_amount_holder+1.00);
                     //Display discount amount.
                     document.getElementById("additional_discount_amount").value = "";
                     document.getElementById("additional_discount_amount").value = discount_amount;
                   
                  }else{
                     discount_amount = parseInt(raw_decimal_amount_holder);
                     //Display discount amount.
                     document.getElementById("additional_discount_amount").value = "";
                     document.getElementById("additional_discount_amount").value = parseInt(subtotal_amount*1);
                  }
                  
                }
            }

            //Discount total and output details
            total_price_compute();
        }

            function pop_up_additionals(){
                var package_additionals_value = document.getElementById("additionals").value;
                
                if(String(package_additionals_value) == "none"){
                    document.getElementById("label_additionals").innerHTML = "";
                    document.getElementById("additionals_container").style.display = "none";
                    document.getElementById("label_additionals").innerHTML = "Product Name";
            
                }else if(String(package_additionals_value) == "product"){
                    document.getElementById("label_additionals").innerHTML = "";
                    document.getElementById("additionals_container").style.display = "inline-block";
                    document.getElementById("label_additionals").innerHTML = "Product Name";
                    


               }else if(String(package_additionals_value) == "others"){
                    document.getElementById("label_additionals").innerHTML = "";
                    document.getElementById("additionals_container").style.display = "inline-block";
                    document.getElementById("label_additionals").innerHTML = "Others";
                }

            }
</script>
</script>


</html>