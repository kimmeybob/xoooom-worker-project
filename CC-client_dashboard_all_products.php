<?php 
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    
    if($_POST){
        date_default_timezone_set('Asia/Manila');
        $raw_date = $_POST['filter_date'];
        $date = $raw_date;
        $date = explode('-', $date);
        $month = $date[1];
        $day   = $date[2];
        $year  = $date[0];

        $final_date = $year."/".$month."/".$day;
        echo $final_date;
        // echo "Date Set: ".$raw_date;
        // echo "<br>Month: ".$month;
        // echo "<br>Day: ".$day;
        // echo "<br>Year: ".$year;
    }else{
        date_default_timezone_set('Asia/Manila');
        //echo "Date not Set";
        $final_date = date("Y/m/d");
         
    }

    ?>
<html>
    <head>
        <title>Xoom Customer Carwash Booking Service</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
       <!-- <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <script type='text/javascript' src='script.js'></script> -->  
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
        
        .sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 18px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
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

    <body onload="Preload_Functions()">
    <div style="margin-top: 5%;margin-left: 2.5%;margin-right: 0%;width:100%;">
   
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  <a href="#" style="font-size: 12px;">Welcome <br><span style="font-size: 18px;color: white;">WORKER-1<span></a>
  <br>
  <br>
 
  <a onclick="display_page_Loading()" style="color: white;" href="CC-client_dashboard.php">My Queue</a>
  <a onclick="display_page_Loading()" style="color: white;" href="CC-client_dashboard_all_orders.php">All Orders</a>
  <a style="color: #282828;pointer-event: none;cursor: default;" href="#">All Products</a>
  <a style="color: #282828;pointer-event: none;cursor: default;" href="#">Logout (Disabled)</a>
  <br>
  <br><a href="#" style="color: #818181;font-size: 12px;">C-Dash Rev 1.2-7.9.21</a>
</div>


<div style=" display: block;background: black;top:0;left: 0; position:fixed;z-index: 10;width: 100%;height: 100%;margin: 0;opacity: 0.95;" id="loader_visuals" class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>

<span style="font-size:26px;cursor:pointer;background: white;" onclick="openNav()">&#9776;&nbsp&nbsp <span style="font-size: 22px;font-weight: bold;background: white;">Xoooom Service Client</span></span>
           
     </div>

     <div style="background: #D3D3D3;height: 1px;width: 100%;margin-top: 5%;">
     </div>

<div style="display: none;">
     <div>
        <p  style="margin:0;overflow: hidden;margin-left: 5%;margin-top: 5%;display: inline-block;" id="weekday_holder"></p>
     </div>

     <div>
        <span style="display: inline-block;margin:0;overflow: hidden;margin-top: 1%;margin-left: 5%;font-size: 22px;font-weight: bold;" id="fulld_date_holder">Today</span>
     </div>

     <div style="margin-top: 5%;margin-left: 5%;font-size: 18px;">
        <span>Service Worker Dashboard</span>
     </div>

     <div style="margin-top: 2%;margin-left: 5%;font-size: 12px;color: #868686;display: inline-block;">
        <span >Manage Products Orders here.</span>
     </div>


     <div style="background: #D3D3D3;height: 1px;width: 100%;margin-top: 5%;display: inline-block">
     </div>

</div>

     <div style="margin-top: 5%;margin-left: 5%;color: black">
        <span style="font-weight: bold;font-size: 22px;">Product Orders</span>
     </div>


     <div style="margin-top: 2%;margin-left: 5%;font-size: 12px;color: #868686">
        <span>
        (Page is still under development).</span>
     </div>

     <div style="margin-top: 5%;margin-left: 5%;margin-right: 5%;color: #868686;width: 90%;background: white;padding-bottom: 0%;">
        <span>
        <form onsubmit="display_page_Loading()" action="CC-client_dashboard_all_orders.php" method="POST">
        <input onchange="enable_submit_button()" style="background:white;padding-left: 3%;padding-right: 3%;width: 70%;height: 5%;border: 1px solid lightgray;border-radius: 100px;" type="date" id="filter_date" name="filter_date" disabled="true">
        <input id="subtmit_btn" style="width: 28%;background: darkgray;border:1px solid darkgray;height: 5%;border-radius: 100px;color: white;font-weight: bold;" disabled="true" type="submit" value="Disabled">
        </form>
     </div>

     <div style="margin-top: 0%;margin-left: 5%;margin-right: 5%;color: #868686;width: 90%;background: white;padding-bottom: 1%;font-size: 14px;padding-bottom: 1%;">
        <p>view product orders based on the scheduled dates.</p>
     </div>

     <div style="background: #D3D3D3;height: 1px;width: 100%;margin-top: 2%;">
     </div>

  
     <div style="margin-top: 5%;margin-left: 5%;color: black">
        <span style="font-weight: bold;font-size: 22px;">All Results</span>
     </div>
     
<?php

/** LOGIC for listing here */

?>
     <div style="background: white; margin-left: 5%; margin-right: 5%;width: auto;margin-top: 2%;padding-bottom: 2%;">

        <!-- Recycleable Layout Cards --->
        <?php 
           require 'Admin/database_config.php';
           
            $query_s = "Select * from product_commissions;";
            $query_run_s = mysqli_query($connection, $query_s);
            $check_job_orders_s = mysqli_num_rows($query_run_s) > 0;  
            $card_color = "#282828"; //card color is green

            if(mysqli_num_rows($query_run_s) == 0){
                echo "<p style='color: #656565;font-size: 14px;'>No Job Orders found on $final_date.</p>";
            }else{
            ?>

        <div style="margin-top: 1%;margin-left: 0%;margin-right: 0%;color: #868686;width: 90%;background: white;padding-bottom: 1%;font-size: 14px;padding-bottom: 1%;">
            <p><?php echo mysqli_num_rows($query_run_s);?> Results for All Product Orders.</p>
        </div>
                <?php 

                while($row = mysqli_fetch_array($query_run_s)){
                ?>
                <a href="#click_disabled" style="text-decoration: none;pointer-events: none;cursor: dafault;">
                            <div style="background: <?php echo $card_color;?>;height: auto;border: 1px solid white;border-radius:10px;padding: 4%;display: block;margin-top:1%;">
                            <div style="margin-bottom: 10%;">
                            <p style="float:left;width: auto;font-size: 18px;display: inline-block;margin:0;overflow: hidden;color: white;"><?php echo  "PROTRK-".$row['product_commission_id'] ; ?></p>
                            <span style="padding-right:1%;float:right;width: auto;font-size: 14px;display: inline-block;margin:0;overflow: hidden;color: white;"> <i class="fa fa-lock" aria-hidden="true" style="color: white;"></i></span>
                            </div>
                            <p style="font-size: 14px;display: inline-block;margin:0;overflow:hidden;color: white;"><?php echo  $row['personnel'] ;?></p><br>
                            <p style="font-size: 12px;display: inline-block;margin:0;overflow:hidden;color: white;">Date: <?php echo  $row['date'] ;?> | <?php echo  $row['product_name'] ; ?> | Qty: <?php echo  $row['quantity'] ;?> | Total: ₱<?php echo  $row['total'] ;?>.00</p><br>
                            <!-- <p style="font-size: 12px;display: inline-block;margin:0;overflow:hidden;color: white;"><?php echo  $row['date'] ; ?> | <?php echo  $row['time'] ;?> | Available</p> -->
                            </div>
                        </a>

           <?php }
        }?>

     </div>


    </body>
    <script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>



<!-- FOR DATE -->

<script>
    function enable_submit_button(){
        document.getElementById("subtmit_btn").disabled = false;
        document.getElementById("subtmit_btn").style.borderColor = "#0179F1"; 
        document.getElementById("subtmit_btn").style.background = "#0179F1"; 
        document.getElementById("subtmit_btn").style.color = "white";
    }

function display_page_Loading(){
  document.getElementById("loader_visuals").style.display = "block";
  Preload_Functions();
  setTimeout(() => { 
    document.getElementById("loader_visuals").style.display = "none";
    alert("You may be experiencing slow connections.");

  }, 15000);
}

window.onload = function(){
  document.getElementById("loader_visuals").style.display = "none";
  Preload_Functions();
}
function Preload_Functions(){
    loadWeekDay();
    loadDate();
}


function loadWeekDay() {
  var d = new Date();
  var n = d.getUTCDay();
  var weekday = "Today"

  if(n == 0){
    weekday = "Sunday";
  }else if(n == 1){
    weekday = "Monday";
  }else if(n == 2){
    weekday = "Tuesday";
  }else if(n == 3){
    weekday = "Wednesday";
  }else if(n == 4){
    weekday = "Thursday";
  }else if(n == 5){
    weekday = "Friday";
  }else if(n == 6){
    weekday = "Saturday";
  }
  document.getElementById("weekday_holder").innerHTML = weekday;
}

function loadDate(){
    var d = new Date();
  var n = d.getMonth();
  var day = d.getUTCDate();
  var year = d.getFullYear();
  var m = "MMMM";
  var completed_date = "MMMMM/DD/YYYYY";

  if(n == 0){
    m = "January";
  }else if(n == 1){
    m = "February";
  }else if(n == 2){
    m = "March";
  }else if(n == 3){
    m = "April";
  }else if(n == 4){
    m = "May";
  }else if(n == 5){
    m = "June";
  }else if(n == 6){
    m = "July";
  }else if(n == 7){
    m = "August";
  }else if(n == 8){
    m = "September";
  }else if(n == 9){
    m = "October";
  }else if(n == 10){
    m = "November";
  }else if(n == 11){
    m = "December";
  }

  completed_date = String(m)+" "+String(day)+", "+String(year);
  document.getElementById("fulld_date_holder").innerHTML = completed_date;
}
</script>
</html>