<?php
session_start();
ob_start();
if(isset($_SESSION['sid']) && $_SESSION['sid'] != '')
{
  include('admin-header.php');
  include("connect.php");
  ?>	

  <body>
    <div class="container-fluid">
      <section class="container">
        <div class="container-page">        
          <div class="col-md-12">

            <?php 
            $date = new DateTime();
            $date->add(DateInterval::createFromDateString('tomorrow'));
            $last= str_replace(',','-',$date->format('Y, m, d'));
            $notif = str_replace(' ','',$last);
            $datet = date('Y-m-d');
            //echo $datet;
            $sql= "SELECT * FROM `booking` WHERE `date` =\"".$notif."\" OR `date` =\"".$datet."\"";
            $countsql= "SELECT COUNT(date) AS count FROM `booking` WHERE `date` =\"".$notif."\" OR `date` =\"".$datet."\"";
            $count = $conn->query($countsql);
            $rows = $count->fetch_assoc();
            //print_r($rows['count']);
            $result = $conn->query($sql);
            //$row = $result->fetch_assoc();
            //echo $row['mobile']; 
            if(!empty($rows['count'])){
            ?>

            <center>              
              <a href="" class="badge1" style="text-decoration: none !important;" data-toggle="modal" data-target="#myModal">
                <i class="material-icons" style="font-size:38px;">sms</i>
                <div style="clear: both;"></div>
                <p style="background-color: red;color:white; width: 25px;border-radius: 100px;margin-right:-52px;margin-top:-58px;">
                 <?php echo $rows['count'];?></p>
               </a>
             </center>
             <br>
             <?php }?>

             <!-- Modal -->
             <div id="myModal" class="modal fade" role="dialog" style="z-index: 11111111100;">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Client Details</h4>
                  </div>
                  <div class="modal-body">
                    <table class="table">
                      <thead>
                        <tr style="text-align: center;">
                          <th scope="col" style="text-align: center;">SN</th>
                          <th scope="col" style="text-align: center;">PNR</th>
                          <th scope="col" style="text-align: center;">Name</th>
                          <th scope="col" style="text-align: center;">Phone</th>
                          <th scope="col" style="text-align: center;">Flight</th>
                          <th scope="col" style="text-align: center;">Flight Date</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        $i=1; 
                        while ($row = $result->fetch_assoc())
                        
                        {?>
                          <tr>
                            <th scope="row"><?php echo $i;?></th>
                            <th scope="row"><?php echo strtoupper($row['booking']);?></th>
                            <?php if(!empty($row['mname'])){?>
                              <td><?php echo ucfirst($row['fname'])."_".ucfirst($row['mname'])."_".ucfirst($row['lname']); ?></td>
                              <?php }else{?>
                                <td><?php echo ucfirst($row['fname'])."_".ucfirst($row['lname']); ?></td>
                                <?php }?>
                                <td><?php echo $row['mobile']; ?></td>
                                <td><?php echo $row['airline']; ?></td>
                                <?php if($datet==$row['date']){?>
                              <td ><?php echo "<p style=\"background-color: red;border-radius:3px;color:black;\">".$row['date']."</p>"; ?></td>
                              <?php }else{?>
                                <td><?php echo "<p style=\"background-color: #f5e103;color:black;border-radius: 3px;\">".$row['date']."</p>"; ?></td>
                                <?php }?>
                              </tr> 
                              <?php $i++; }?>   
                            </tbody>
                          </table>
                          <div class="modal-footer">
                            <p class="pull-left" style="word-spacing: 2px;"><b>Note*</b>  List of Clients  flying  <a href="_blank"style="color:red;text-decoration:none;">TODAY</a>  or  <a href="_blank"style="color: #f5e103;text-decoration:none;">TOMMOROW</a></p>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>

                  <form id="bookingform" method= "POST" action="upload.php" enctype="multipart/form-data">
                    <h3 class="dark-grey">Booking Details</h3>

                    <div class="form-group col-lg-6">
                      <input name="bookNum" value=""  style="text-transform: uppercase;" class="form-control" aria-required="true" aria-invalid="false" required placeholder="Booking Number/PNR*" type="text">
                    </div>

                    <div class="form-group col-lg-6">
                      <input name="tktNum" value=""  style="text-transform: uppercase;" class="form-control" aria-required="true" aria-invalid="false" required placeholder="Ticket Number*" type="text">
                    </div>

                    <div class="form-group col-lg-6">
                      <input name="fName" value="" class="form-control" aria-required="true" aria-invalid="false" style="text-transform: capitalize;" required placeholder="First Name*" type="text">
                    </div>

                    <div class="form-group col-lg-6">
                      <input name="mName" value="" class="form-control" aria-required="true" aria-invalid="false" style="text-transform: capitalize;" placeholder="Middle Name (if applicable)" type="text">
                    </div>

                    <div class="form-group col-lg-6">
                      <input name="lName" value="" class="form-control validates-as-required" aria-required="true" style="text-transform: capitalize;" required aria-invalid="false" placeholder="Last Name*" type="text">
                    </div>

                    <div class="form-group col-lg-6">
                      <input name="mobile" value="" class="form-control validates-as-required" aria-required="true" required aria-invalid="false" placeholder="Mobile*" type="tel">
                    </div>

                    <div class="form-group col-lg-6">
                      <input name="email" value=""  style="text-transform: lowercase;" class="form-control validates-as-required" aria-required="true" required aria-invalid="false" placeholder="Email*" type="email">
                    </div>

                    <div class="form-group col-lg-6">
                      <input name="airline" value="" class="form-control validates-as-required" aria-required="true" style="text-transform: uppercase;"  required aria-invalid="false" placeholder="Airline*" type="text">      
                    </div>

                    <div class="form-group col-lg-6">
                     <input type="text" class="form-control" name="datepicker2" data-date-format='yyyy-mm-dd' id="datepicker2" placeholder="Click to select issue date" aria-describedby="basic-addon1">
                   </div>

                   <div class="form-group col-lg-6">
                     <input type="text" class="form-control" name="datepicker" data-date-format='yyyy-mm-dd' id="datepicker" placeholder="Click to select Flight date" aria-describedby="basic-addon1">
                   </div>            

                   <div class="form-group col-lg-12">
                     <input type="text"  class="form-control" name="notes" placeholder="Notes">
                   </div>
                   <div style="clear: both;"></div>
                   <br>
                   <center><button id="bookingsubmit" name="bookingsubmit" type="submit" class="btn btn-md btn-primary" style="width: 30%;margin-top:30px;">Save</button></center><br>
                 </form>
               </div>
             </div>
           </section>
           <div style="clear: both"></div>
           <div>

            <center><a href='logout.php' style="position: absolute; top: 180px;right: 25px;"><button type="button" class="btn btn-danger">Log out</button></a></center>
            <center><a href='viewall.php' style="position: absolute; top: 180px;left: 25px;"><button type="button" class="btn btn-danger">View all</button></a></center>
          </div>
        </div>
<br>
      </body>



      <?php }
      else
      {
        header("location:index.php");
      }
      ?>
      <script type="text/javascript">
       $('#datepicker').datepicker({
        dateFormat: 'yy-mm-dd',
        changeMonth: true,
        changeYear: true
      }).on('changeDate', function(e){
        $(this).datepicker('hide');
      });

      $('#datepicker2').datepicker({
        dateFormat: 'yy-mm-dd',
        changeMonth: true,
        changeYear: true
      }).on('changeDate', function(e){
        $(this).datepicker('hide');
      });        
    </script>

