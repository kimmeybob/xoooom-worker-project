
        <?php 
          require 'Admin/database_config.php';
          date_default_timezone_set('Asia/Manila');

          $current_date_now = date("m/d/Y");

          $query = "Select * from customer where status = 'waiting' and date = '$current_date_now' order by STR_TO_DATE(time, '%l:%i %p');";
          $query_run = mysqli_query($connection, $query);
          $check_job_orders = mysqli_num_rows($query_run) > 0;

            while($row = mysqli_fetch_array($query_run)){

        ?>
        <a onclick="display_page_Loading()" href="CC-Service_Worker_Job_Listing_Que.php?job_id=<?php echo $row['customer_id'];?>" style="text-decoration: none;">
        <div style="background: #0179F1;height: auto;border: 1px solid #D3D3D3;border-radius:10px;padding: 4%;">
            <div style="margin-bottom: 10%;">
                            <p style="float:left;width: auto;font-size: 18px;display: inline-block;margin:0;overflow: hidden;color: white;"><?php echo  "CUSTRK-".$row['customer_id'] ; ?></p>
                            <span style="padding-right:1%;float:right;width: auto;font-size: 14px;display: inline-block;margin:0;overflow: hidden;color: white;"> <i class="fa fa-unlock" aria-hidden="true" style="color: white;"></i></span>
            </div>
            <p style="font-size: 14px;display: inline-block;margin:0;overflow:hidden;color: white;font-weight: bold"><?php echo  $row['address'] ;?></p><br>
            <p style="font-size: 14px;display: inline-block;margin:0;overflow:hidden;color: white;font-weight: bold"><?php echo  $row['contactNum'] ; ?> | <?php echo  $row['Name'] ;?></p><br>
            <p style="font-size: 12px;display: inline-block;margin:0;overflow:hidden;color: white;font-weight: bold"><?php echo  $row['date'] ; ?> | <?php echo  $row['time'] ; ?></p>
        </div>
        </a>

        <?php } ?>