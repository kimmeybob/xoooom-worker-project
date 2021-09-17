
     <?php
     require 'Admin/database_config.php';

     date_default_timezone_set('Asia/Manila');

           $current_date_now = date("m/d/Y");

     //$query = "Select * from job_list where worker_name = 1;";
     $query = "select customer.customer_id, customer.Name, customer.email, customer.contactNum, customer.address, customer.services, customer.time, customer.date, customer.comment, customer.status, job_list.worker_name, job_list.customer_id, service_commissions.total as 'service_total', product_commissions.product_commission_id, product_commissions.total as 'product_total' from customer inner join service_commissions on customer.customer_id = service_commissions.cust_id left outer join product_commissions on customer.customer_id = product_commissions.cust_id inner join job_list on customer.customer_id=job_list.customer_id order by STR_TO_DATE(customer.time, '%l:%i %p');";
     $query_run = mysqli_query($connection, $query);
     $check_job_orders = mysqli_num_rows($query_run) > 0;
     $customer_ID = "";
     
      //Variables for Service COmmissions Order details and Product Order details
      $customer_id_temp_holder = 0;
      $Service_ordered = "";
      $Service_subtotal = 0;
      $service_discount_percentage = "";
      $service_discount_amount = 0;
      $service_others_amount = 0;
      $service_vat = 0;
      $service_total = 0;
      $service_personnel = "";
      $service_partner = "";
      $service_date = "";

      //Collapseable data for products charges and summary
      $items_ordered = "";
      $product_commission_id = 0;
      $products_subtotal = 0;
      $products_discount_percentage = "";
      $products_discount_amount = 0;
      $products_vat = 0;
      $products_total = 0;


     //array holder for worker job list ids
     $worker_joblist_customer_id = array(); 

     if($check_job_orders == 0){
         echo "No completed work in the moment.";
     }else{
       //Worker has joblists.
       while($row = mysqli_fetch_array($query_run)){
        $customer_id_temp_holder = $row['customer_id'];

       if($row['status'] == "complete" && $row['date'] == $current_date_now){
         

     ?>
     <!-- LINK: CC-Service_Worker_Job_Listing_Que.php?job_id=<?php echo  $row['customer_id'];?>-->
      <a onclick="display_page_Loading()" href="CC-Edittable-TrackerForm.php?job_listing_id=<?php echo $row['customer_id'];?>&return_link=dashboard" style="text-decoration: none;">
        <div style="background: #2B2B2B;height: auto;border: 1px solid black;border-radius: 10px 10px 0 0;padding: 4%;display: block;margin-top:0.5%;">
                          <div style="margin-bottom: 10%;">
                            <p style="float:left;width: auto;font-size: 18px;display: inline-block;margin:0;overflow: hidden;color: white;"><?php echo  "CUSTRK-".$row['customer_id'] ; ?></p>
                            <span style="padding-right:1%;float:right;width: auto;font-size: 14px;display: inline-block;margin:0;overflow: hidden;color: white;"> <i class="fa fa-unlock" aria-hidden="true" style="color: white;"></i></span>
                            <?php
                                  if($row['product_total'] == "NULL" || $row['product_total'] == null){
                                  }else{
                              ?>
                                   <span style="padding-right:2%;float:right;width: auto;font-size: 14px;display: inline-block;margin:0;overflow: hidden;color: white;"> <i class="fa fa-flask" aria-hidden="true" style="display: block;color: white;"></i></span>
                              <?php
                                   }
                              ?>
                            <span style="padding-right:2%;float:right;width: auto;font-size: 14px;display: inline-block;margin:0;overflow: hidden;color: white;"> <i class="fa fa-user" aria-hidden="true" style="display: block;color: white;"></i></span>
                              
                          </div>
                          <p style="font-size: 14px;display: inline-block;margin:0;overflow:hidden;color: white;font-weight: bold"><?php echo  $row['address'] ;?></p><br>
                          <p style="font-size: 14px;display: inline-block;margin:0;overflow:hidden;color: white;font-weight: bold"><?php echo  $row['contactNum'] ; ?> | <?php echo  $row['Name'] ;?></p><br>
                          <p style="font-size: 12px;display: inline-block;margin:0;overflow:hidden;color: white;font-weight: bold"><?php echo  $row['date'] ; ?> | <?php echo  $row['time'] ; ?></p>
            
        </div>
        </a> <!-- <--- Closing for the achor link tag.-->
        
        <?php 
            //Get Service Commission Details and Product details if has a linked product order.
            $query_service_and_product_details = "select customer.customer_id,sc.commission_id, sc.date as sc_date, sc.personnel as sc_personnel, sc.partner, sc.size, sc.type, sc.plate, sc.discount as sc_discount,sc.discount_notes as sc_discount_notes, sc.additional_charge_type, sc.additional_notes, sc.discount_amount as sc_discount_amount, sc.others_amount, sc.vat as sc_vat, sc.total as sc_total, sc.time as sc_time,pc.product_commission_id, pc.date as pc_date, pc.personnel as pc_personnel, pc.note as pc_note, pc.customer_name as pc_customer,pc.customer_contact_number, pc.discount_percentage as pc_discount_percentage,pc.reason_promo as pc_reason_promo, pc.discount_value as pc_discount_value, pc.vat as pc_vat, pc.total as pc_total,pio.product_item_order_id, pio.product_name, pio.quantity, pio.subtotal as pio_subtotal from customer inner join service_commissions as sc on sc.cust_id = customer.customer_id left outer join product_commissions as pc on pc.cust_id = customer.customer_id left outer join product_item_orders as pio on pio.product_commission_id = pc.product_commission_id;";
            $query_run_service_and_product_details = mysqli_query($connection, $query_service_and_product_details);
            $check_service_and_product_details = mysqli_num_rows($query_run_service_and_product_details) > 0;  

            while($sub_row = mysqli_fetch_array($query_run_service_and_product_details)){
                //echo $sub_row["customer_id"];
                if($row['customer_id'] == $sub_row["customer_id"]){
                    //Service Ordered
                    $Service_ordered = $sub_row["size"]." - ".$sub_row['type']." Package";
                    $service_discount_percentage = $sub_row["sc_discount"];
                    $service_discount_amount = $sub_row['sc_discount_amount'];
                    $service_others_amount = $sub_row['others_amount'];
                    $service_vat = $sub_row['sc_vat'];
                    $service_total = $sub_row['sc_total'];
                    $service_personnel = $sub_row['sc_personnel'];
                    $service_partner = $sub_row['partner'];
                    $service_date = $sub_row['sc_date'];


                      if($sub_row['product_commission_id'] == "NULL" || $sub_row['product_commission_id'] == null){
                        $items_ordered = "";
                        $products_subtotal = 0;
                        $products_discount_percentage = "";
                        $products_discount_amount = 0;
                        $products_vat = 0;
                        $products_total = 0;
                        $product_commission_id = 0;
            
                      }else{
                        $items_ordered = $sub_row['pio_subtotal']." Php - ".$sub_row['product_name']." x".$sub_row['quantity']."<br>".$items_ordered;
                        $products_subtotal = $products_subtotal + $sub_row['pio_subtotal'];
                        $products_discount_percentage = $sub_row['pc_discount_percentage'];;
                        $products_discount_amount = $sub_row['pc_discount_value'];;
                        $products_vat = $sub_row['pc_vat'];
                        $products_total = $sub_row['pc_total'];
                        $product_commission_id = $sub_row['product_commission_id'];
                      }

                }
            }

        ?>

        <a id="myBtn" onclick="setDataToModal('<?php echo $customer_id_temp_holder;?>','<?php echo $Service_ordered;?>','<?php echo $service_discount_percentage;?>','<?php echo $service_discount_amount;?>','<?php echo $service_others_amount;?>', '<?php echo $service_vat;?>','<?php echo $service_total;?>','<?php echo $service_date;?>','<?php echo $items_ordered;?>', '<?php echo $products_subtotal;?>','<?php echo $products_discount_percentage;?>','<?php echo $products_discount_amount;?>','<?php echo $products_vat;?>','<?php echo $products_total;?>')" >
                                <?php
                                  if($product_commission_id == 0 ){
                                ?> 
                                <div style="width: 91.5%; background: black;padding:0;border:1px solid #656565;border-radius: 0 0 10px 10px;margin-bottom: 2%;height: 30px;padding-left:4%;padding-right:4%;padding-top:3%;">
                                   <p style="display: inline-block;margin:0;overflow:hidden;color: white"><div style="font-weight: bold;font-size: 14px;float: left;display: block;width: 4\50%;color: white;"><i class="fa fa-info-circle" style="font-size: 14px;"></i> | No add-on products.</div> <div style="font-weight: bold;font-size: 14px;float: right;display: block;width: 50%;text-align: right;color: white;">Service Total: ₱<?php echo  $service_total;?></div></p><br>
                                <?php 
                                }else{
                                ?> 
                                 <div style="width: 91.35%; background: #0179F1;padding:0;border:1px solid #0A84FF;border-radius: 0 0 10px 10px;margin-bottom: 2%;height: 30px;padding-left:4%;padding-right:4%;padding-top:3%;">
                                   <p style="display: inline-block;margin:0;overflow:hidden;color: white"><div style="font-weight: bold;font-size: 14px;float: left;display: block;width: 4\50%;color: white;"><i class="fa fa-info-circle" style="font-size: 14px;"></i> | PROTRK ID: <?php echo  $product_commission_id ;?></div> <div style="font-weight: bold;font-size: 14px;float: right;display: block;width: 50%;text-align: right;color: white;">Service Total: ₱<?php echo $service_total;?></div></p><br>
                             
                                <?php 
                                }
                                ?>
                              </div> 
                        </a>

        <?php 
        
              }//if closing for displaying completed
              else{
                  //Display nothing
              }
      }
      }//closing of else ?>