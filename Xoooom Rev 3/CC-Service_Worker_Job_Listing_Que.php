<?php 
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    
    $customer_id_ticket = $_GET['job_id'];
    if(isset($_GET['return_link'])){
        $return_link = $_GET['return_link'];
    }else{
        $return_link = "dashboard";
    }
    //$Worker_name = "Carlsan Kim";

    if (empty($_GET)) {
        // no data passed by get
        echo "something went wrong please refresh page or return to the dashboard.";
    }

    ?>
<html>
    <head>
        <title>Xoom Customer Carwash Booking Service</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    </head>

    <style>
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
            font-family: 'Roboto';
            
        }

        .switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 24px;
}

.slider.round:before {
  border-radius: 50%;
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

    <?php 
           require 'Admin/database_config.php';

           
            $query = "Select * from customer where customer_id=$customer_id_ticket";
            $query_run = mysqli_query($connection, $query);
            $check_job_orders = mysqli_num_rows($query_run) > 0;

            //Variables
            $job_listing_id = "";
            $Customer_name = "";
            $Location = "";
            $Date = "";
            $time = "";
            $comment = "";
            $service = "";
            $contact_num = "";
            $job_status = "";


            while($row = mysqli_fetch_array($query_run)){
                $job_listing_id = $row['customer_id'];
                $Customer_name = $row['Name'];
                $Location = $row['address'];
                $Date = $row['date'];
                $time = $row['time'];
                $comment = $row['comment'];
                $service = $row['services'];
                $contact_num = $row['contactNum'];
                $job_status = $row['status'];
            }

        ?>

<!-- LOADER DIV -->
<div style=" display: block;background: black;top:0;left: 0; position:fixed;z-index: 10;width: 100%;height: 100%;margin: 0;opacity: 0.95;" id="loader_visuals" class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>


        <form action="CC-TrackerForm.php" >
        <div style="margin-top: 5%;margin-left: 5%;margin-right: 5%;">
            <div style="float:left; width: auto;position: relative;display: inline-block;margin:0;"><p style="font-weight: bold;background: white;margin:0;overflow: hidden;font-size: 22px;">Customer Job Order Details</p></div>
            
            <div style="float: right; width: auto;position: relative;display: inline-block;margin:0;margin-top: 0.5vh;"><p style="width: auto;background: white;margin:0;overflow: hidden;"><a onclick="display_page_Loading()" href="
            <?php 
            if($return_link == "all_dashboard"){
                echo "CC-client_dashboard_all_orders.php";
            }else{
                echo "CC-client_dashboard.php";
            }
            ?>" style="color: black;">Back</a></p></div><br>
            <!--<div style="float:left; width: auto;position: relative;display: inline-block;font-size:11px;margin:0;"><p style="font-weight: bold;color: #868686;">Please fill up all the necessary fields for this product order</p></div>-->
        </div>

        <div style="height: 1px; width: 100%; background: #D3D3D3;margin-top: 5%;position: relative;display: inline-block;"></div>
        
        <div style="color:black;margin-top: 5%;margin-left: 5%;font-size: 16px;font-weight: bold;">
        
            Job Order Details
        </div>

        <div style="color:#868686;margin-top: 5%;margin-left: 5%;font-size: 12px;">
            Job Order ID
        </div>

        <div>
            <div style="float:left; width: auto;position: relative;display: inline-block;margin:0;margin-left: 5%;font-size: 18px"><?php 
                echo "CUSTRK-".$job_listing_id;?>
            </div>
            <div style="float: right; width: auto;position: relative;display: inline-block;margin-right: 5%;">
                <p style="width: auto;background: white;margin:0;overflow: hidden;"><a href="#Disabled_Click" style="color: black;text-decoration: none;">Edit (Disabled)</a></p>
            </div>
        <div>

        <!-- FORM -->

        <div style="margin-top: 5%;margin-right: 5%;margin-left: 5%;width: 85%;position: relative;display: inline-block;border: 1px solid #D3D3D3;padding-bottom: 3.5%;padding-top: 2%;padding-right: 2.5%;padding-left: 2.5%;border-radius: 10px;">
            <div style="float:left; width: auto;position: relative;display: inline-block;margin:0;">
                <label style="color: #868686;font-size: 12px;">Customer Name</label>
            </div>
            <br>
            <div style=" width: auto;position: relative;display: inline-block;margin:0;padding-top: 1%"><?php 
                 echo $Customer_name;?>
            </div>
        </div>

        <div style="margin-top: 5%;margin-right: 5%;margin-left: 5%;width: 85%;position: relative;display: inline-block;border: 1px solid #D3D3D3;padding-bottom: 3.5%;padding-top: 2%;padding-right: 2.5%;padding-left: 2.5%;border-radius: 10px;">
            <div style="float:left; width: auto;position: relative;display: inline-block;margin:0;">
                <label style="color: #868686;font-size: 12px;">Customer Number</label>
            </div>
            <br>
            <div style=" width: auto;position: relative;display: inline-block;margin:0;padding-top: 1%"><?php 
                 echo $contact_num;?>
            </div>
        </div>

        <div style="margin-top: 5%;margin-right: 5%;margin-left: 5%;width: 85%;position: relative;display: inline-block;border: 1px solid #D3D3D3;padding-bottom: 3.5%;padding-top: 2%;padding-right: 2.5%;padding-left: 2.5%;border-radius: 10px;">
            <div style="float:left; width: auto;position: relative;display: inline-block;margin:0;">
                <label style="color: #868686;font-size: 12px;">Customer Location</label>
            </div>
            <br>
            <div style=" width: auto;position: relative;display: inline-block;margin:0;padding-top: 1%"><?php 
                echo $Location;?>
            </div>
        </div>

        <div style="margin-top: 5%;margin-right: 5%;margin-left: 5%;width: 85%;position: relative;display: inline-block;border: 1px solid #D3D3D3;padding-bottom: 3.5%;padding-top: 2%;padding-right: 2.5%;padding-left: 2.5%;border-radius: 10px;">
            <div style="float:left; width: auto;position: relative;display: inline-block;margin:0;">
                <label style="color: #868686;font-size: 12px;">Scheduled Date</label>
            </div>
            <br>
            <div style=" width: auto;position: relative;display: inline-block;margin:0;padding-top: 1%"><?php 
                echo $Date;?>
            </div>
        </div>

        <div style="margin-top: 5%;margin-right: 5%;margin-left: 5%;width: 85%;position: relative;display: inline-block;border: 1px solid #D3D3D3;padding-bottom: 3.5%;padding-top: 2%;padding-right: 2.5%;padding-left: 2.5%;border-radius: 10px;">
            <div style="float:left; width: auto;position: relative;display: inline-block;margin:0;">
                <label style="color: #868686;font-size: 12px;">Scheduled Time</label>
            </div>
            <br>
            <div style=" width: auto;position: relative;display: inline-block;margin:0;padding-top: 1%"><?php 
                echo $time;?>
            </div>
        </div>

        <div style="margin-top: 5%;margin-right: 5%;margin-left: 5%;width: 85%;position: relative;display: inline-block;border: 1px solid #D3D3D3;padding-bottom: 3.5%;padding-top: 2%;padding-right: 2.5%;padding-left: 2.5%;border-radius: 10px;">
            <div style="float:left; width: auto;position: relative;display: inline-block;margin:0;">
                <label style="color: #868686;font-size: 12px;">Service</label>
            </div>
            <br>
            <div style=" width: auto;position: relative;display: inline-block;margin:0;padding-top: 1%"><?php 
                echo $service;?>
            </div>
        </div>

        <div style="margin-bottom: 5%;margin-top: 5%;margin-right: 5%;margin-left: 5%;width: 85%;position: relative;display: inline-block;border: 1px solid #D3D3D3;padding-bottom: 3.5%;padding-top: 2%;padding-right: 2.5%;padding-left: 2.5%;border-radius: 10px;">
            <div style="float:left; width: auto;position: relative;display: inline-block;margin:0;">
                <label style="color: #868686;font-size: 12px;">Comment</label>
            </div>
            <br>
            <div style=" width: auto;position: relative;display: inline-block;margin:0;padding-top: 1%;margin-bottom: 10%;"><?php 
                echo $comment;?>
            </div>
        </div>

        

            <div id="sample_status">
            </div>
            
            <div style="float:left; width: auto;position: relative;display: inline-block;margin:0;margin-left: 0%;font-size: 20px;padding-top:2%;">
          
            </div>
            <div style="float: right; width: auto;position: relative;display: inline-block;margin-right: 0%;">
               <!-- <form id="worker-form" onsubmit="toggle_realtime(<?php echo $Worker_name;?>)"> -->
                    <!--<label class="switch">
                        <input id="toggle_btn" id="accept_status" type="checkbox">
                        <span class="slider round"></span>
                    </label>-->
               <!-- </form> -->
            </div>

            <?php
            
            $query_f = "Select * from job_list where worker_name=1 and customer_id =$job_listing_id";
            $query_run_f = mysqli_query($connection, $query_f);
            $check_job_orders_f = mysqli_num_rows($query_run_f) > 0; 
            $enable_proceed_to_trackerform = false;
            
            if(mysqli_num_rows($query_run_f) != 0){
                $enable_proceed_to_trackerform = true;
                ?>
        
                <div style="width: 50%;float: left;">
                <?php 
                    if($job_status == "cancelled"){
                ?> 
                <a href="#disabled_abort_appointment" style="pointer-event: none;cursor: default;text-decoration: none;color: darkgray;border-radius: 100px;text-align: center;margin-top: 0%;width: 85%; margin-left: 10%;margin-right: 0%;display: inline-block;background: white;height: auto;padding-left: 0%;padding-right: 0%;padding-top:10%;padding-bottom: 10%;border: 2px solid darkgray;"><b>Abort Appointment</b></a>
                <?php
                    }else{
                ?>
                <a onclick="display_page_Loading()" href="Php_Function/add_job_list_to_worker.php?job_id=<?php echo $job_listing_id;?>&worker_id=1&choice=<?php echo "decline"; ?>" style="text-decoration: none;color: white;border-radius: 100px;text-align: center;margin-top: 0%;width: 85%; margin-left: 10%;margin-right: 0%;display: inline-block;background: #FF4B4B;height: auto;padding-left: 0%;padding-right: 0%;padding-top:10%;padding-bottom: 10%;border: 2px solid #FF4B4B;"><b>Abort Appointment</b></a>
                <?php 
                    }
                ?>
                </div>
                  <?php
            }else{
                $enable_proceed_to_trackerform = false;
                ?>
                <div style="width: 50%;float: left;">
                <a onclick="display_page_Loading()" href="Php_Function/add_job_list_to_worker.php?job_id=<?php echo $job_listing_id;?>&worker_id=1&choice=<?php echo "accept"; ?>" style="text-decoration: none;color: #2AA965;border-radius: 100px;text-align: center;margin-top: 0%;width: 85%; margin-left: 10%;margin-right: 0%;display: inline-block;background: white;height: auto;padding-left: 0%;padding-right: 0%;padding-top:10%;padding-bottom: 10%;border: 2px solid #2AA965;"><b>I'm on the way</b></a>
              </div>
                 <?php
            }
       
            ?>
            
            
            <div style="width: 50%;float: left;">
            <?php 
                if($enable_proceed_to_trackerform){
                    if($job_status == "cancelled"){
            ?>
             <a onclick="display_page_Loading()" href="Php_Function/add_job_list_to_worker.php?job_id=<?php echo $job_listing_id;?>&worker_id=1&choice=<?php echo "relist"; ?>" style="text-decoration: none;color: #2AA965;border-radius: 100px;text-align: center;margin-top: 0%;width: 90%; margin-left: 0%;margin-right: 10%;display: inline-block;background: white;height: auto;padding-left: 0%;padding-right: 0%;padding-top:10%;padding-bottom: 10%;border: 2px solid #2AA965;"><b>Relist Order</b></a>
              <?php 
                    }else{
              ?>
                <a onclick="display_page_Loading()" href="Php_Function/add_job_list_to_worker.php?job_id=<?php echo $job_listing_id;?>&worker_id=1&choice=<?php echo "cancel"; ?>" style="text-decoration: none;color: #FF4B4B;border-radius: 100px;text-align: center;margin-top: 0%;width: 90%; margin-left: 0%;margin-right: 10%;display: inline-block;background: white;height: auto;padding-left: 0%;padding-right: 0%;padding-top:10%;padding-bottom: 10%;border: 2px solid #FF4B4B;"><b>Cancel Order</b></a>
                    <?php
                    }
                    ?>
            <?php
            }else{
            ?>
                <a href="#disabled_clicker" style="pointer-event: none;cursor: default;text-decoration: none;color: gray;border-radius: 100px;text-align: center;margin-top: 0%;width: 90%; margin-left: 0%;margin-right: 10%;display: inline-block;background: white;height: auto;padding-left: 0%;padding-right: 0%;padding-top:10%;padding-bottom: 10%;border: 2px solid lightgray;"><b>Cancel Order</b></a>
     
            <?php
            }  
            ?>
            </div>
        
            <div style="margin-top: 1%;margin-right: 0%;margin-left: 5%;width: 85%;position: relative;display: inline-block;border: 1px solid white;padding-bottom: 3.5%;padding-top: 2%;padding-right: 2.5%;padding-left: 2.5%;border-radius: 10px;">
            <div style="float:left; width: 100%;position: relative;display: inline-block;margin:0;">
                 <label style="color: #868686;font-size: 12px;">*Grabbing this job order makes this unavailable to other workers and allows you to cancel order upon the request of the client.</label> 
            </div>
            </div>

            <div style="background: #D3D3D3;height: 1px;width: 90%;margin-left: 5%;margin-right: 5%;margin-top: 2%;display: inline-block;">
     </div>

            <!-- <span style="font-size: 12px;color: #868686">*Feature is for cancelled Onsite Orders<span> -->
            <?php 
            if($enable_proceed_to_trackerform){
                if($job_status == "cancelled"){
            ?>  
                <a href="#disabled_clicker" style="pointer-event: none;cursor: default;text-decoration: none;color: gray;border-radius: 100px;text-align: center;margin-top: 10%;width: 90%;; margin-left: 5%;margin-right: 5%;display: inline-block;background: white;height: auto;padding-left: 0%;padding-right: 0%;padding-top:5%;padding-bottom: 5%;border: 2px solid lightgray;">Proceed To Service Form</a>
                <?php 
                }else{
                ?>
                <a onclick="display_page_Loading()" href="CC-TrackerForm.php?job_listing_id=<?php echo $job_listing_id;?>" style="text-decoration: none;color: white;border-radius: 100px;text-align: center;margin-top: 10%;width: 90%;; margin-left: 5%;margin-right: 5%;display: inline-block;background: black;height: auto;padding-left: 0%;padding-right: 0%;padding-top:5%;padding-bottom: 5%;">Proceed To Service Form</a>
                    
            <?php
                }
            }else{
            ?>
                <a href="#disabled_clicker" style="pointer-event: none;cursor: default;text-decoration: none;color: gray;border-radius: 100px;text-align: center;margin-top: 10%;width: 90%;; margin-left: 5%;margin-right: 5%;display: inline-block;background: white;height: auto;padding-left: 0%;padding-right: 0%;padding-top:5%;padding-bottom: 5%;border: 2px solid lightgray;">Proceed To Service Form</a>

            <?php
            }
            ?>
           <div style="margin-top: 0%;margin-right: 0%;margin-left: 5%;width: 85%;position: relative;display: inline-block;border: 1px solid white;padding-bottom: 3.5%;padding-top: 2%;padding-right: 2.5%;padding-left: 2.5%;border-radius: 10px;">
            <div style="float:left; width: 100%;position: relative;display: inline-block;margin:0;">
                 <label style="color: #868686;font-size: 12px;">*Service Form will be enabled when you grab the job order.</label> 
            </div>
            </div>

            <br>
            <br>
        <div>
            
       

       
        





        


        




    </body>    
    <script type="text/javascript">
        $(document).ready(function(){
            $('#toggle_btn').click(function(){
                $.ajax({
                    type: 'POST',
                    url:'service_page_helper.php',
                    data:{
                        toggle:$('#toggle_btn').val()
                      
                    },
                    success:function(data){
                        alert(data);
                    }
                });
            });
        });
    </script>

    <script>
    function display_page_Loading(){
  document.getElementById("loader_visuals").style.display = "block";
  setTimeout(() => { 
    document.getElementById("loader_visuals").style.display = "none";
    alert("You may be experiencing slow connections.");

  }, 15000);
}

window.onload = function(){
  document.getElementById("loader_visuals").style.display = "none";
  
}

         function toggle_realtime(worker){
             /*var toggle = new FormData();
             toggle.append();
             toggle.append("acceptance_status", document.getElementById("accept_status").value);*/
           

             var url = 'service_page_helper.php?worker='+worker;

            var xhr = new XMLHttpRequest();
            xhr.open('GET', url, false);
            xhr.send();

            var response = xhr.reponse;
            //alert(""+String(response));
            sample_status.innerhtml = response;

          

         }
    </script>
    <script>
        function display_package_benefits() {
            var package_select_value = document.getElementById("package_type").value;

            if(String(package_select_value) == "Basic Package"){
                document.getElementById("ul_text").innerHTML = "";
                document.getElementById("package_type_benefits").innerHTML = "<ul style='font-size: 14px;'><li>Exterior Car Wash</li><li>Glass Cleaning</li><li>Tire Shine</li><li>Premium Wax</li></ul>";
            
            }else if(String(package_select_value) == "Premium Package"){
                document.getElementById("ul_text").innerHTML = "";
                document.getElementById("package_type_benefits").innerHTML = "<ul style='font-size: 14px;'><li>Exterior Car Wash</li><li>Glass Cleaning</li><li>Tire Shine</li><li>Premium Wax</li><li>Interior Cleaning and Vacuum</li><li>Dashboard cleaning</li><li>Matting Cleaning</li><li>Side panels protection</li><li>Car Freshener</li></ul>";
            
            }else if(String(package_select_value) == "Ultimate Package"){
                document.getElementById("ul_text").innerHTML = "";
                document.getElementById("package_type_benefits").innerHTML = "<ul style='font-size: 14px;'><li>Exterior Car Wash</li><li>Glass Cleaning</li><li>Tire Shine</li><li>Premium Wax</li><li>Interior Cleaning and Vacuum</li><li>Dashboard cleaning</li><li>Matting Cleaning</li><li>Side panels protection</li><li>Car Freshener</li><li>Water-less Engine Cleaning</li></ul>";
            }else if(String(package_select_value) == "Free/NA Package"){
                document.getElementById("ul_text").innerHTML = "";
                document.getElementById("package_type_benefits").innerHTML = "<ul style='font-size: 14px;'><li>Car Fogging Sanitation - FREE</li></ul>";
            
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
</html>