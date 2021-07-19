<?php

$job_listing_id = $_GET['job_listing_id'];

if(isset($_GET['return_link'])){
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

    <title>Xoooom Autospa</title>

</head>
<script>

</script>

<style type="text/css">

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
   max-width: 80%;
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

<?php 
        require 'Admin/database_config.php';

        $query_date = "Select * from service_commissions where cust_id = $job_listing_id;";
        $query_run_date = mysqli_query($connection, $query_date);
        $check_job_orders_date = mysqli_num_rows($query_run_date) > 0;

        $job_order_date = "00/00/00";
        $job_order_time = "00:00";
        $name_of_personnel = "";
        $Plate_Number = "";
        $package_size = "";
        $package_type = "";
        $Discount_percentage = "";
        $Discount_reason = "";
        $additional_charges = "";
        $others_amount = "";
        $others_note = "";

        while($row = mysqli_fetch_array($query_run_date)){
          $job_order_date = $row['date'];
          $job_order_time = $row['time'];
          $name_of_personnel = $row['personnel'];
          $personnel_tag = $row['partner'];
          $Plate_Number = $row['plate'];
          $package_size = $row['size'];
          $package_type = $row['type'];
          $Discount_percentage = $row['discount'];
          $Discount_reason = $row['discount_notes'];
          $additional_charges = $row['additional_charge_type'];
          $others_amount = $row['others_amount'];
          $others_note = $row['additional_notes'];
        }

        // echo "<br> Job Order Date: $job_order_date
        //       <br> Job Order Time: $job_order_time
        //       <br>Name of Personnel: $name_of_personnel
        //       <br>Personnel Partner: $personnel_tag
        //       <br>Plate Number: $Plate_Number
        //       <br>Package Size: $package_size
        //       <br>Package Type: $package_type
        //       <br>Discount Percentage: $Discount_percentage
        //       <br>Discount Reason: $Discount_reason
        //       <br>Additional Charges: $additional_charges
        //       <br>Others Amount: $others_amount
        //       <br>Others Note: $others_note";

      ?>

    <body onload="set_pre_load_personnel('<?php echo $name_of_personnel;?>','<?php echo $personnel_tag;?>','<?php echo $package_size;?>','<?php echo $package_type;?>','<?php echo $Discount_percentage;?>','<?php echo $Discount_reason;?>', '<?php echo $additional_charges;?>', '<?php echo $others_amount;?>', '<?php echo $others_note;?>')">

        <div style="margin-top: 5%;margin-left: 5%;margin-right: 5%;">
            <div style="float:left; width: auto;position: relative;display: inline-block;margin:0;">
                <p style="font-weight: bold;background: white;margin:0;overflow: hidden;font-size: 18px;">Service & Commission Tracker</p>
                <p style="font-size: 12px;margin:0;color: #868686;">Edits/Changes are only available for 24hrs.     <br><b><?php echo "EDIT - SERVICE-FORM Rev 1.2-7.14.21";?></b></p>
            </div>
            <div style="float: right; width: auto;position: relative;display: inline-block;"><p style="width: auto;background: white;margin:0;margin-top: 10%;overflow: hidden">
                <?php 
                    if($return_link == "dashboard"){
                        ?>
                        <a href="CC-client_dashboard.php" style="color: black;font-size: 14px">Cancel</a></p></div><br>
                        <?php
                    }else if($return_link == "all_dashboard"){
                        ?>
                        <a href="CC-client_dashboard_all_orders.php" style="color: black;font-size: 14px">Cancel</a></p></div><br>
                        <?php
                    }
                ?>
                
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
                <p style="width: auto;background: white;margin:0;overflow: hidden;"><a href="#back" style="color: black;font-size: 14px">Edit (Disabled)</a></p>
            </div>
        <div>
        <br/>

    <div class="container">
    <div class="row">
    <div class="col-md-12">


      <br>

      <div >
        <!--<form action="hello.html">-->
        <!--<a href="CC-ProductPurchaseTrackerForm.php?job_listing_id=<?php echo $job_listing_id;?>">Add a Product </a>-->
     
        <input style="font-size: 14px;background: white;border:1px solid #0279F6;padding-bottom: 2.5%;padding-left: 2.5%;padding-right: 2.5%;padding-top: 2.5%;text-align: center;border-radius: 100px;color: #0279F6;font-weight: bold" type="submit" value="Add a Product Order" readonly></a>
        <div style="width: 100%;text-align:center;">
        <p style="font-size: 12px;margin-left:0%;color: gray;">*Add a product order to this tracker form.<p>
        </div>
        </form>
      </div>
      
      <form action="Php_Function/updatetrackerform.php?job_listing_id=<?php echo $job_listing_id;?>&return_link=<?php echo $return_link;?>" method="POST">
      <div class="form-group">
      
        <div style="width: 100%;display: inline-block;border: 1px solid #D3D3D3;padding-bottom: 1%;padding-top: 1%;padding-right: 2%;padding-left: 2%;border-radius: 15px;">
        <label style="color: #868686;font-size: 12px;" for="Time">Date</label>
        <input style="background:white;border-radius: 10px;border-color: none; border-style: none;font-size: 14px" class="form-control" type="text" value="<?php echo $job_order_date;?>" placeholder="mmmm" id="time_serviced" name="date_serviced" readonly>
        </div>
      </div>

      <div class="form-group">
        <div style="width: 100%;display: inline-block;border: 1px solid #D3D3D3;padding-bottom: 1%;padding-top: 1%;padding-right: 2%;padding-left: 2%;border-radius: 15px;">
        <label style="color: #868686;font-size: 12px;" for="Time">Scheduled Time</label>
        <input style="background:white;border-radius: 10px;border-color: none; border-style: none;font-size: 14px" class="form-control" type="text" value="<?php echo $job_order_time;?>" id="time_serviced" name="time_serviced" readonly>
        </div>
      </div>

      <div class="form-group">
        <div style="width: 100%;display: inline-block;border: 1px solid #D3D3D3;padding-bottom: 1%;padding-top: 1%;padding-right: 2%;padding-left: 2%;border-radius: 15px;">
        <label style="color: #868686;font-size: 12px;" for="worker">Name of Personnel</label>
        <select onchange="update_tag_personnel_options()" name="workers" id="workers" style="border-radius: 10px;border-color: none; border-style: none;font-size: 14px" class="form-control">
            
                <option id="rodel_macas" value="<?php echo "Rodel Macas";?>">
                    <?php echo "Rodel Macas";?>
                </option>
                <option id="jeck_sila" value="<?php echo "Jeck Sila";?>">
                    <?php echo "Jeck Sila";?>
                </option>
                <option id="michelle_bontong" value="<?php echo "Michelle Bontong";?>">
                    <?php echo "Michelle Bontong";?>
                </option>
            </select>
        </div>
      </div>

      <div class="form-group">
        <div style="width: 100%;display: inline-block;border: 1px solid #D3D3D3;padding-bottom: 1%;padding-top: 1%;padding-right: 2%;padding-left: 2%;border-radius: 15px;">
        <label style="color: #868686;font-size: 12px;" for="worker">Tag a Personnel</label>
        <select onchange="" name="tag_workers" id="tag_workers" style="border-radius: 10px;border-color: none; border-style: none;font-size: 14px" class="form-control">
                <option id="none_personnel" value="<?php echo "none";?>">
                    <?php echo "--- None ---";?>
                </option>
                <option disabled="true" id="tag_rodel_macas" value="<?php echo "Rodel Macas";?>">
                    <?php echo "Rodel Macas";?>
                </option>
                <option disabled="true" id="tag_jeck_sila" value="<?php echo "Jeck Sila";?>">
                    <?php echo "Jeck Sila";?>
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
        <input style="border-radius: 10px;border-color: none; border-style: none;font-size: 14px" class="form-control" type="text" id="platenumber" name="platenumber" placeholder="PLate Number." value="<?php echo $Plate_Number;?>" required>
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

    <label style="display: none;color: #868686;font-size: 12px;">*For Car Sizes please refer to your print outs.</label><br/>
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
    <div id="discount_reason_container" style="position: relative;display: none;" class="form-group" >
        <div style="float:left; width: 180%;position: relative;display: inline-block;margin:0;border: 1px solid #D3D3D3;padding-bottom: 1%;padding-top: 1%;padding-right: 5%;padding-left: 2%;border-radius: 15px;" >
        <label style="color: #868686;font-size: 12px;" for="discountreason"> &nbsp;&nbsp;Discount Reason</label>
        <input style="border-radius: 10px;border-color: none; border-style: none;font-size: 14px" class="form-control" type="text" id="promo_reason" name="promo_reason" placeholder="Enter discount reason here. (Disregard if none)">
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

    <div id="additionals_container" style="position: relative;display: none;" class="form-group">
        <div style="float:left; width: 180%;position: relative;display: inline-block;margin:0;border: 1px solid #D3D3D3;padding-bottom: 1%;padding-top: 1%;padding-right: 2%;padding-left: 2%;border-radius: 15px;">
        <label id="label_additionals" style="color: #868686;font-size: 12px;"></label>
       
        <input onkeyup="others_billing()" style="border-radius: 10px;border-color: none; border-style: none;font-size: 14px" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57" class="form-control" type="number" min="1" id="additional_amount" name="additional_amount" placeholder="Enter Amount here.">
        </div>
    </div>
    <br>
    <div style="display: none;position: relative;" id="other_notes_container">
    <label style="color: #868686;font-size: 12px;">Add Note</label>
    <div class="form-group">
        <div style="display:block;border: 1px solid #D3D3D3;padding-bottom: 1%;padding-top: 1%;padding-right: 2%;padding-left: 2%;border-radius: 15px;">
         <textarea style="border-radius: 10px;border-color: none; border-style: none;font-size: 14px;width: 100%;" id="note" name="note" placeholder="Note here" class="form-control" required></textarea>
        </div>
    </div>
    </div>

      <div style="width: 100%; height: 0.1vh; background: #DCDCDC;overflow:hidden;margin-top:10%;margin-bottom: 5%;"></div>

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
    <td id="others">Others</td>
    <td style="text-align: right;"><input id="other_amount" name="other_amount" type="number" style="border: none; font-size: 15px;text-align: right;outline:none;height:auto;padding: 0;background: #DDDDDD;" value="0" readonly></td>
  </tr>

  <tr>
    <td id="package_label_16">VAT</td>
    <td style="text-align: right;"><input name="package_vat_amount" id="package_vat_amount" type="number" style="border: none; font-size: 15px;text-align: right;outline:none;height:auto;padding: 0;background: white;" value="0" readonly></td>
  </tr>

  <tr>
    <td id="service_subtotal_label">SubTotal:</td>
    <td style="text-align: right;"><input id="service_subtotal" name="service_subtotal" type="number" style="border: none; font-size: 15px;text-align: right;outline:none;height:auto;padding: 0;background: #DDDDDD;" value="280" readonly></td>
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
echo "<br><font style='font-size: 12px;'>*Addition of Products and Product Billing is currently disabled.<font>";
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
    <td id="package_label_12">VAT</td>
    <td style="text-align: right;"><input id="additional_vat_amount" type="number" style="border: none; font-size: 15px;text-align: right;outline:none;height:auto;padding: 0;background: #DDDDDD;" value="<?php echo $vat_add_on_value;?>" readonly></td>
  </tr>

  <tr>
    <td id="package_label_13">Total:</td>
    <td style="text-align: right;"><input id="additional_sub_total" type="number" style="border: none; font-size: 15px;text-align: right;outline:none;height:auto;padding: 0;background: white;" value="<?php echo $total_product_price;?>" readonly></td>
  </tr>
  
</table>

<div style="background: white;padding-bottom: 2.5%;padding-top: 2.5%;text-align: right;border-radius: 10px;">
        <a href="" style=" pointer-events: none;cursor: default;" readonly>Edit Product Orders (Disabled)</a>
</div>

<br>

<table>
  <tr >
    <th>Total Amount:</th>
    <th style="text-align: right;"><input style="border: none; font-size: 18px;text-align: right;outline:none;height:auto;padding: 0;background: white;" type="number" id="total_billing_amount" value="280" readonly></th>
  </tr>
</table>
               
            </p>
            </div>
    
            <div style="width: 100%; height: 0.1vh; background: #DCDCDC;overflow:hidden;margin-top:5%;margin-bottom: 5%;"></div>

      <input class="btn btn-primary btn-lg btn-block" style="background-color:black;border-color:black;font-size:16px;border-radius: 200px;padding-top:13px;padding-bottom:13px;" type="submit" value="Submit"/>

     

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

<script>
window.onbeforeunload = function() {
  return "";
}

      var service_subtotal = 280;
      var service_discount = 0;
      var service_others = 0;
      var service_vat_amount = 0;
      var worker_added = [];
      var checkbox_id_added = [];
      worker_added.push(document.getElementById("workers").value);

      function Sample_Runner(){
          alert("Running");
      }

      function set_main_personnel(personnel_main){
          //alert("Running");
        var selected_personnel_main = personnel_main;
        var default_personnel_main = document.getElementById("workers").getElementsByTagName("option");
        //var selected_personnel_tag =  document.getElementById("tag_workers").getElementsByTagName("option");

        //alert("Worker: "+selected_personnel_main);

        for (var i = 0; i < default_personnel_main.length; i++) {
        // lowercase comparison for case-insensitivity
        //alert("Tag Value: "+selected_personnel_tag[i].value);

        if(selected_personnel_main == default_personnel_main[i].value){
         
          document.getElementById('workers').getElementsByTagName('option')[i].selected = 'selected';
          update_main_personnel_option();
          update_tag_personnel_options();

        }
      }
      }

      function set_tag_personnel(personnel_tag){
          //alert("Running");
        var selected_personnel_tag = personnel_tag;
        var default_personnel_tag = document.getElementById("tag_workers").getElementsByTagName("option");
        //var selected_personnel_tag =  document.getElementById("tag_workers").getElementsByTagName("option");

        //alert("Worker: "+selected_personnel_main);

        for (var i = 0; i < default_personnel_tag.length; i++) {
        // lowercase comparison for case-insensitivity
        //alert("Tag Value: "+selected_personnel_tag[i].value);

        if(selected_personnel_tag == default_personnel_tag[i].value){
         
          document.getElementById('tag_workers').getElementsByTagName('option')[i].selected = 'selected';
          update_main_personnel_option();
          update_tag_personnel_options();
          
        }
      }
      }

      function set_car_size(car_size){
        var selected_car_size = car_size;
        var default_car_size_selector = document.getElementById("car_size_details").getElementsByTagName("option");
        //var selected_personnel_tag =  document.getElementById("tag_workers").getElementsByTagName("option");

        //alert("Worker: "+selected_personnel_main);

        for (var i = 0; i < default_car_size_selector.length; i++) {
        // lowercase comparison for case-insensitivity
        //alert("Tag Value: "+selected_personnel_tag[i].value);

        if(selected_car_size == default_car_size_selector[i].value){
         
          document.getElementById('car_size_details').getElementsByTagName('option')[i].selected = 'selected';
          dusplay_car_size_and_billing_summary();
        }
      }
      }

      function set_package_type(package_type){
        var selected_package_type = package_type;
        var default_package_type_selector = document.getElementById("package_type").getElementsByTagName("option");
        //var selected_personnel_tag =  document.getElementById("tag_workers").getElementsByTagName("option");

        //alert("Worker: "+selected_personnel_main);

        for (var i = 0; i < default_package_type_selector.length; i++) {
        // lowercase comparison for case-insensitivity
        //alert("Tag Value: "+selected_personnel_tag[i].value);

        if(selected_package_type == default_package_type_selector[i].value){
         
          document.getElementById('package_type').getElementsByTagName('option')[i].selected = 'selected';
          dusplay_car_size_and_billing_summary();
        }
      }
      }

      function set_discount_percentage(discount_percentage){
        var selected_discount_percentage = discount_percentage;
        var default_discount_percentage = document.getElementById("discounts").getElementsByTagName("option");
        //var selected_personnel_tag =  document.getElementById("tag_workers").getElementsByTagName("option");

        //alert("Worker: "+selected_personnel_main);

        for (var i = 0; i < default_discount_percentage.length; i++) {
        // lowercase comparison for case-insensitivity
        //alert("Tag Value: "+selected_personnel_tag[i].value);

        if(selected_discount_percentage == default_discount_percentage[i].value){
         
          document.getElementById('discounts').getElementsByTagName('option')[i].selected = 'selected';
          discounts_pop_up_and_service_discounts();
        }
      }
      }

      function set_discount_reason(discount_reason){
        document.getElementById("promo_reason").value = discount_reason;
      }

      function set_extras_option(extras_option){
        var selected_extras_option = extras_option;
        var default_extras_option = document.getElementById("additionals").getElementsByTagName("option");
        //var selected_personnel_tag =  document.getElementById("tag_workers").getElementsByTagName("option");

        //alert("Worker: "+selected_personnel_main);

        for (var i = 0; i < default_extras_option.length; i++) {
        // lowercase comparison for case-insensitivity
        //alert("Tag Value: "+selected_personnel_tag[i].value);

        if(selected_extras_option == default_extras_option[i].value){
         
          document.getElementById('additionals').getElementsByTagName('option')[i].selected = 'selected';
          pop_up_additionals();
        }
      }
      }

      function set_others_amount(other_amount){
        document.getElementById("additional_amount").value = other_amount;
        others_billing();
      }

      function set_others_note(others_note){
        document.getElementById("note").innerHTML = others_note;
        
      }

      function set_pre_load_personnel(personnel_main,personnel_tag, car_size,package_type,discount_percentage,discount_reason,extras_option,other_amount,others_note){
        set_main_personnel(personnel_main);
        set_tag_personnel(personnel_tag);
        set_car_size(car_size);
        set_package_type(package_type);
        set_discount_percentage(discount_percentage);
        if(discount_percentage != "none"){
            //alert("Discount Percentage is not Zero");
            set_discount_reason(discount_reason);
        }
        set_extras_option(extras_option);
        if(extras_option == "others"){
            //alert("Others Options is none || "+extras_option);
            set_others_amount(other_amount);
            set_others_note(others_note);
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
        }
        subtotal_service_bill();
        
      }

      function subtotal_service_bill(){
        //service_discounts();
         
         service_vat_amount = ((service_subtotal + service_others)-service_discount);
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
        
         var additional_amount = document.getElementById("additional_amount").value;
         
         var package_additionals_value = document.getElementById("additionals").value;

         if(String(package_additionals_value) == "none"){
            //alert("Others Selected: None --- !"+additional_amount);
            document.getElementById("other_amount").value = 0;
            service_others = 0;
            subtotal_service_bill();   
          }else if(String(package_additionals_value) == "others"){
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

    }
}

    function update_main_personnel_option(){
        var selected_personnel_main = document.getElementById("tag_workers").value;
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
            document.getElementById("ul_text_size").innerHTML = "";
            document.getElementById("ul_text_size_two").innerHTML = "";
            //document.getElementById("display_car_size_details").innerHTML = " <ul id='ul_text_size' style='font-size: 12px;width: 50%;float: left;background: white;'><li style='List-style-type: none;'><b>TOYOTA</b></li><li>Wigo</li><li style='List-style-type: none;'><br></li><li style='List-style-type: none;'><br></li><li style='List-style-type: none;'><b>MITSUBISHI</b></li><li>Mirage (Hatccback)</li><li style='List-style-type: none;'><br></li><li style='List-style-type: none;'><b>NISSAN</b></li><li>March</li><li style='List-style-type: none;'><br></li><li style='List-style-type: none;'><b>SUZUKI</b></li><li>Calerio</li><li>Alto</li></ul><ul id='ul_text_size' style='font-size: 12px;width: 50%;float: left;background: white;'><li style='List-style-type: none;'><b>HYUNDAI</b></li><li>Eon</li><li>Getz</li><li style='List-style-type: none;'><br></li><li style='List-style-type: none;'><b>KIA</b></li><li>Picanto</li><li>Pride</li><li style='List-style-type: none;'><br></li><li style='List-style-type: none;'><b>CHEVROLET</b></li><li>Pride</li><li style='List-style-type: none;'><br></li><li style='List-style-type: none;'><b>CHEVROLET</b></li><li>Spark</li></ul>";
        
          }else if(String(car_size_select_value) == "Medium"){
            document.getElementById("ul_text_size").innerHTML = "";
            document.getElementById("ul_text_size_two").innerHTML = "";
            //document.getElementById("display_car_size_details").innerHTML = "<ul id='ul_text_size' style='font-size: 12px;width: 50%;float: left;background: white;'><li style='List-style-type: none;'><b>TOYOTA</b></li><li>Vios</li><li>86</li><li>Corolla</li><li>Altis</li><li>Camry</li><li>Bb</li><li style='List-style-type: none;'><br></li><li style='List-style-type: none;'><br></li><li style='List-style-type: none;'><b>MITSUBISHI</b></li><li>Lancer</li><li>Mirage G4 (Sedan)</li><li style='List-style-type: none;'><br></li><li style='List-style-type: none;'><b>NISSAN</b></li><li>GT-R</li><li>Skyline</li><li>Juke</li><li>Sentra</li><li>Almera</li><li>Silvia</li><li>350z/370z</li><li>Cube</li><li>Sylphy</li><li style='List-style-type: none;'><br></li><li style='List-style-type: none;'><b>SUZUKI</b></li><li>Jimny</li><li>Swift</li><li>Dzire</li><li>Ciaz</li><li>S-Presso</li><li style='List-style-type: none;'><br></li><li style='List-style-type: none;'><b>HONDA</b></li><li>Civic</li><li>Jazz/Fit</li><li>City</li><li>Accord</li><li>Brio Amaze</li><li>Integra</li><li style='List-style-type: none;'><br></li><li style='List-style-type: none;'><b>HYUNDAI</b></li><li>Accent</li><li>l10</li><li>Elantra</li><li>Veloster</li><li>Sonata</li><li>Genesis</li><li>Retina</li><li style='List-style-type: none;'><br></li><li style='List-style-type: none;'><b>KIA</b></li><li>Rio</li><li>Soul</li><li>Forte</li><li>Optima</li><li>Avella</li><li>Cerato</li><li>Soluto</li><li style='List-style-type: none;'><br></li><li style='List-style-type: none;'><b>CHEVROLET</b></li><li>Camaro</li><li>Corvette</li><li>Cruze</li><li>Sail</li><li>Sonic</li><li style='List-style-type: none;'><br></li><li style='List-style-type: none;'><b>BMW</b></li><li>BMW 2 Series</li><li>BMW 2 Series</li><li>BMW 4 Series</li><li>BMW 5 Series</li><li>BMW 6 Series</li><li>BMW 7 Series</li><li>M3</li><li>M4</li><li style='List-style-type: none;'><br></li><li style="List-style-type: none;"><b>FORD</b></li><li>Ecosport</li><li>Ford Fiesta</li><li>Focus</li><li>Mustang</li><li style='List-style-type: none;'><br></li><li style="List-style-type: none;"><b>MAZDA</b></li><li>Mazda 3</li><li>MX-3</li><li>Mazda 2 (hatch/sedan)</li><li>Mazda 6</li><li>Mazda 5</li><li style='List-style-type: none;'><br></li></ul><ul id='ul_text_size_two' style='font-size: 12px;width: 50%;float: left;background: white;'><li style='List-style-type: none;'><b>MERCEDES</b></li><li>A Class</li><li>AMG CT</li><li>C63 AMG</li><li>CLA/CLS Class</li><li>E Class</li><li>S Class</li><li style='List-style-type: none;'><br></li><li style='List-style-type: none;'><b>MG</b></li><li>MG 6</li><li style='List-style-type: none;'><br></li><li style='List-style-type: none;'><b>SUBARU</b></li><li>BRZ</li><li>impreza (sedan)</li><li>Legacy</li><li>WRX STI</li><li style='List-style-type: none;'><br></li><li style='List-style-type: none;'><b>VOLKSWAGEN</b></li><li>Lamando</li><li>Lavida</li><li>Passat</li><li>Santana</li><li style='List-style-type: none;'><br></li><li style='List-style-type: none;'><b>PEUGEOT</b></li><li>308 hatchback</li><li>508</li></ul>";
        
          }else if(String(car_size_select_value) == "Large"){
            document.getElementById("ul_text_size").innerHTML = "";
            document.getElementById("ul_text_size_two").innerHTML = "";
            //document.getElementById("display_car_size_details").innerHTML = "<ul style='font-size: 14px;'><li><b>TOYOTA</b> - Fortune<r/li> <li><b>TOYOTA</b> - Hillux/ Conquest</li> <li><b>TOYOTA</b> - Rush</li> <li><b>TOYOTA</b> - Innova</li> <li><b>TOYOTA</b> - Revo</li> <li><b>TOYOTA</b> - Rav4</li> <li><b>TOYOTA</b> - Land Cruiser/Prado</li> <li><b>TOYOTA</b> - Tamarraw FX </li> <li><b>TOYOTA</b> - CH-R </li> <li><b>TOYOTA</b> - FJ Cruiser </li> <li><b>TOYOTA</b> - Avanza </li> <li><b>MITSUBISHI</b> - Xpander</li> <li><b>MITSUBISHI</b> - Adventure</li> <li><b>MITSUBISHI</b> - Montero Sport</li> <li><b>MITSUBISHI</b> - Strada</li> <li><b>MITSUBISHI</b> - Pajero</li> <li><b>MITSUBISHI</b> - ASX</li> <li><b>NISSAN</b> - Navarra</li> <li><b>NISSAN</b> - Terra</li> <li><b>NISSAN</b> - Patrol</li> <li><b>NISSAN</b> - Frontier</li> <li><b>NISSAN</b> - X-Trail</li> </ul>";
            
          }else if(String(car_size_select_value) == "Extra Large"){
            document.getElementById("ul_text_size").innerHTML = "";
            document.getElementById("ul_text_size_two").innerHTML = "";
            //document.getElementById("display_car_size_details").innerHTML = "<ul style='font-size: 14px;'><li><b>TOYOTA</b> - Hi-Ace</li> <li><b>TOYOTA</b> - Commuter</li> <li><b>TOYOTA</b> - Alphard</li> <li><b>TOYOTA</b> - Super Granda</li> <li><b>MITSUBISHI</b> - L300</li> <li><b>NISSAN</b> - Urvan</li> </ul>";
        
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
                    document.getElementById("label_additionals").innerHTML = "";
                    document.getElementById("additionals_container").style.display = "none";
                    document.getElementById("label_additionals").innerHTML = "Product Name";

                    //Others Amount Input field Container
                    document.getElementById("other_notes_container").style.display = "none";
                    document.getElementById("note").required = false;

                    //Resets Others Value to 0
                    document.getElementById("other_amount").value = 0;
                    document.getElementById("additional_amount").value = 0;
                    service_others = 0;
                    subtotal_service_bill();  
                    
            
                }else if(String(package_additionals_value) == "others"){
                    document.getElementById("label_additionals").innerHTML = "";
                    document.getElementById("additionals_container").style.display = "inline-block";
                    document.getElementById("label_additionals").innerHTML = "Amount (Additional Charges)";

                     //Others Amount Input field container
                    document.getElementById("other_notes_container").style.display = "block";
                    document.getElementById("note").required = true;
                }

                //others_billing();

            }
</script> 

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

</html>