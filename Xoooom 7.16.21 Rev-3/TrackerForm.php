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

@media screen and (max-width: 767px) {
 body #logo {
   max-width: 90%;
   display: block;
 }
}

</style>

<body>
    <body>
        <div style="margin-top: 5%;margin-left: 5%;margin-right: 5%;">
            <div style="float:left; width: auto;position: relative;display: inline-block;margin:0;">
                <p style="font-weight: bold;background: white;margin:0;overflow: hidden;font-size: 20px;">Service & Commission Tracker</p>
                <p style="font-size: 10px;margin:0;color: #868686;">Please fill up all the necessary fields for this job order</p>
            </div>
            <div style="float: right; width: auto;position: relative;display: inline-block;"><p style="width: auto;background: white;margin:0;overflow: hidden">
                <a href="#back" style="color: black;font-size: 14px">Cancel</a></p></div><br>
            <!--<div style="float:left; width: auto;position: relative;display: inline-block;font-size:11px;margin:0;"><p style="font-weight: bold;color: #868686;">Please fill up all the necessary fields for this product order</p></div>-->
        </div>

        <div style="height: 1px; width: 100%; background: #D3D3D3;margin-top: 5%;position: relative;display: inline-block;">        
        </div>
        
        <div style="color:#868686;margin-top: 5%;margin-left: 5%;font-size: 12px;">
            Job Order ID
        </div>

        <div>
            <div style="float:left; width: auto;position: relative;display: inline-block;margin:0;margin-left: 5%;"><?php 
                echo "IASDLMASD-238-IASDP";?>
            </div>
            <div style="float: right; width: auto;position: relative;display: inline-block;margin-right: 5%;">
                <p style="width: auto;background: white;margin:0;overflow: hidden;"><a href="#back" style="color: black;font-size: 14px">Edit</a></p>
            </div>
        <div>
        <br/>

    <div class="container">
    <div class="row">
    <div class="col-md-12">

    <form action="submitbooking" method="POST">
      <div class="form-group">
        <label style="color: #868686;font-size: 12px;">Job Order Details</label><br/>
        
        <div style="width: 100%;display: inline-block;border: 1px solid #D3D3D3;padding-bottom: 1%;padding-top: 1%;padding-right: 2%;padding-left: 2%;border-radius: 15px;">
        <label style="color: #868686;font-size: 12px;" for="name">Job Order Type</label>
        <input style="border-radius: 10px;border-color: none; border-style: none;font-size: 14px" class="form-control" type="text" id="jobtype" name="jobtype" placeholder="Home service" pattern=[A-Z\sa-z]{3,20} required>
        </div>
      </div>

      <label style="color: #868686;font-size: 12px;">Schedule</label><br/>
      <div class="form-group">
      <div style="width: 100%;display: inline-block;border: 1px solid #D3D3D3;padding-bottom: 1%;padding-top: 1%;padding-right: 2%;padding-left: 2%;border-radius: 15px;">
        <label style="color: #868686;font-size: 12px;" for="checkin-date">Date</label>
        <input style="border-radius: 10px;border-color: none; border-style: none;font-size: 14px" type="date" id="date"  class="form-control" name="date" value="mm/dd/yyyy" required>
      </div>
    </div>

      <div class="form-group">
        <div style="width: 100%;display: inline-block;border: 1px solid #D3D3D3;padding-bottom: 1%;padding-top: 1%;padding-right: 2%;padding-left: 2%;border-radius: 15px;">
        <label style="color: #868686;font-size: 12px;" for="Time">Time</label>
        <select style="border-radius: 10px;border-color: none; border-style: none;font-size: 14px" class="form-control" id="time" name="Time" required>
            <option value="">Choose Time</option>
            <option value="9am">9:00 am</option>
            <option value="11am">11:00 am</option>
            <option value="1pm">1:30 pm</option>
            <option value="3pm">3:30 pm</option>
        </select>
      </div>
    </div>

      <div class="form-group">
        <div style="width: 100%;display: inline-block;border: 1px solid #D3D3D3;padding-bottom: 1%;padding-top: 1%;padding-right: 2%;padding-left: 2%;border-radius: 15px;">
        <label style="color: #868686;font-size: 12px;" for="worker">Name of Personnel</label>
        <select name="workers" id="workers" style="border-radius: 10px;border-color: none; border-style: none;font-size: 14px" class="form-control">
                <option value="<?php echo "Rodel Macas";?>">
                    <?php echo "Rodel Macas";?>
                </option>
                <option value="<?php echo "Jeck Sila";?>">
                    <?php echo "Jeck Sila";?>
                </option>
            </select>
        </div>
        <label style="color: #868686;font-size: 12px;" for="email">If you’re name is not found please contact your admin.</label>
      </div>
      
      <label style="color: #868686;font-size: 12px;">Service Package</label><br/>
      
      <div class="form-group">
        <div style="width: 100%;display: inline-block;border: 1px solid #D3D3D3;padding-bottom: 1%;padding-top: 1%;padding-right: 2%;padding-left: 2%;border-radius: 15px;">
        <label style="color: #868686;font-size: 12px;" for="size">Size</label>
         <select style="border-radius: 10px;border-color: none; border-style: none;font-size: 14px" name="size" id="size" onchange="display_package_benefits()"  class="form-control">
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

      <div class="form-group">
        <div style="width: 100%;display: inline-block;border: 1px solid #D3D3D3;padding-bottom: 1%;padding-top: 1%;padding-right: 2%;padding-left: 2%;border-radius: 15px;">
        <label style="color: #868686;font-size: 12px;" for="package">Type</label>
         <select style="border-radius: 10px;border-color: none; border-style: none;font-size: 14px" name="package_type" id="package_type" onchange="display_package_benefits()"  class="form-control">
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
     <div class="form-group">
        <div style="width: 100%;display: inline-block;border: 1px solid #D3D3D3;padding-bottom: 1%;padding-top: 1%;padding-right: 2%;padding-left: 2%;border-radius: 15px;">
        <label style="color: #868686;font-size: 12px;" for="platenumber">Plate Number</label>
        <input style="border-radius: 10px;border-color: none; border-style: none;font-size: 14px" class="form-control" type="text" id="platenumber" name="platenumber" placeholder="AAA-1111" pattern=[A-Z\sa-z]{3,20} required>
        </div>
    </div>


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
            </select>
      </div>
    </div>

    <div id="discount_promo_code" style="position: relative;display: none;" class="form-group">
        <div style="float:left; width: 200%;position: relative;display: inline-block;margin:0;border: 1px solid #D3D3D3;padding-bottom: 1%;padding-top: 1%;padding-right: 2%;padding-left: 2%;border-radius: 15px;">
        <label style="color: #868686;font-size: 12px;" for="promocode">Promo Code</label>
        <input style="border-radius: 10px;border-color: none; border-style: none;font-size: 14px" class="form-control" type="text" id="promo" name="promo" placeholder="Enter promo code here. (Disregard if none)" required>
        </div>
    </div>

    <div id="discount_reason_container" style="position: relative;display: none;" class="form-group" >
        <div style="float:left; width: 200%;position: relative;display: inline-block;margin:0;border: 1px solid #D3D3D3;padding-bottom: 1%;padding-top: 1%;padding-right: 2%;padding-left: 2%;border-radius: 15px;" >
        <label style="color: #868686;font-size: 12px;" for="discountreason">Discount Reason Code</label>
        <input style="border-radius: 10px;border-color: none; border-style: none;font-size: 14px" class="form-control" type="text" id="promo" name="promo" placeholder="Enter discount reason here. (Disregard if none)" required>
        </div>
    </div>
    <br/>
    <label style="color: #868686;font-size: 12px;">Extras</label>
     <div class="form-group" >
        <div style="width: 100%;display: inline-block;border: 1px solid #D3D3D3;padding-bottom: 1%;padding-top: 1%;padding-right: 2%;padding-left: 2%;border-radius: 15px;">
        <label style="color: #868686;font-size: 12px;" for="discounts">Additional Charges</label>
         <select onchange="pop_up_additionals()" name="additinals" id="additionals" style="border-radius: 10px;border-color: none; border-style: none;font-size: 14px" class="form-control">
                 <option value="<?php echo "none";?>">
                    <?php echo "None";?>
                </option>
                <option value="<?php echo "product";?>">
                    <?php echo "Product";?>
                </option>
                <option value="<?php echo "others";?>">
                    <?php echo "Others";?>
                </option>
            </select>
      </div>
    </div>

    <div id="additionals_container" style="position: relative;display: none;" class="form-group">
        <div style="float:left; width: 200%;position: relative;display: inline-block;margin:0;border: 1px solid #D3D3D3;padding-bottom: 1%;padding-top: 1%;padding-right: 2%;padding-left: 2%;border-radius: 15px;">
        <label id="label_additionals" style="color: #868686;font-size: 12px;"></label>
        <input style="border-radius: 10px;border-color: none; border-style: none;font-size: 14px" class="form-control" type="text" id="additionals_name" name="additionals_name" placeholder="Input here.">
        </div>
    </div>

      <div style="width: 100%; height: 0.1vh; background: #DCDCDC;overflow:hidden;margin-bottom: 10%;">
    </div>
    
      <button  class="btn btn-primary btn-lg btn-block" style="background-color:black;border-color:black;font-size:16px;border-radius: 10px;" type="submit">Submit</button>

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
        function display_package_benefits() {
            var package_select_value = document.getElementById("package_type").value;

            if(String(package_select_value) == "Basic"){
                document.getElementById("ul_text").innerHTML = "";
                document.getElementById("package_type_benefits").innerHTML = "<ul style='font-size: 14px;'><li>Exterior Car Wash</li><li>Glass Cleaning</li><li>Tire Shine</li><li>Premium Wax</li></ul>";
            
            }else if(String(package_select_value) == "Premium"){
                document.getElementById("ul_text").innerHTML = "";
                document.getElementById("package_type_benefits").innerHTML = "<ul style='font-size: 14px;'><li>Exterior Car Wash</li><li>Glass Cleaning</li><li>Tire Shine</li><li>Premium Wax</li><li>Interior Cleaning and Vacuum</li><li>Dashboard cleaning</li><li>Matting Cleaning</li><li>Side panels protection</li><li>Car Freshener</li><li>Car Fogging Sanitation - FREE</li></ul>";
            
            }else if(String(package_select_value) == "Ultimate"){
                document.getElementById("ul_text").innerHTML = "";
                document.getElementById("package_type_benefits").innerHTML = "<ul style='font-size: 14px;'><li>Exterior Car Wash</li><li>Glass Cleaning</li><li>Tire Shine</li><li>Premium Wax</li><li>Interior Cleaning and Vacuum</li><li>Dashboard cleaning</li><li>Matting Cleaning</li><li>Side panels protection</li><li>Car Freshener</li><li>Water-less Engine Cleaning</li><li>Car Fogging Sanitation - FREE</li></ul>";
            }
        }
         function discounts_pop_up() {
            var discounts_value = document.getElementById("discounts").value;

            if(String(discounts_value) == "none"){
                document.getElementById("discount_promo_code").style.display = "none";
                document.getElementById("discount_reason_container").style.display = "none";
            }else{
                document.getElementById("discount_promo_code").style.display = "inline-block";
                document.getElementById("discount_reason_container").style.display = "inline-block";
            }
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
                    document.getElementById("label_additionals").innerHTML = "Note";
                }

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