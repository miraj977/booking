<?php 
include 'admin-header.php';
include 'connect.php';
?>
<?php
ob_start();
if(isset($_GET['id']))
{
  $delete= "DELETE FROM `booking` WHERE id= ".$_GET['id'].";";  
  $delete_qurey= mysqli_query($conn,$delete);
  ?>
  <script type="text/javascript">
    window.location='viewall.php';
  </script> 
  <?php
}

if(isset($_GET['edit']))
{  
  $edit= "SELECT * FROM `booking` WHERE id='".$_GET['edit']."';";  
  $edit_qurey= mysqli_query($conn,$edit);
  while ($rows = $edit_qurey->fetch_assoc()) 
  {
    ?>


    <div class="container-fluid">
      <section class="container">
        <div class="container-page">        
          <div class="col-md-12">
            <form id="bookingform" method= "POST" action="upload.php" enctype="multipart/form-data">
              <h3 class="dark-grey">Booking Details Edit</h3>

              <div class="form-group col-lg-6">
                <input name="bookNum"  style="text-transform: uppercase;" value="<?php echo $rows['booking'];?>" class="form-control" aria-required="true" aria-invalid="false" required placeholder="Booking Number/PNR*" type="text">
              </div>

              <div class="form-group col-lg-6">
                <input name="tktNum"  style="text-transform: uppercase;" value="<?php echo $rows['ticket'];?>" class="form-control" aria-required="true" aria-invalid="false" required placeholder="Ticket Number*" type="text">
              </div>

              <div class="form-group col-lg-6">
                <input name="fName" value="<?php echo $rows['fname'];?>" class="form-control" aria-required="true" aria-invalid="false" style="text-transform: capitalize;" required placeholder="First Name*" type="text">
              </div>

              <div class="form-group col-lg-6">
                <input name="mName" value="<?php echo $rows['mname'];?>" class="form-control" aria-required="true" aria-invalid="false" style="text-transform: capitalize;" placeholder="Middle Name (if applicable)" type="text">
              </div>

              <div class="form-group col-lg-6">
                <input name="lName" value="<?php echo $rows['lname'];?>" class="form-control validates-as-required" aria-required="true" style="text-transform: capitalize;" required aria-invalid="false" placeholder="Last Name*" type="text">
              </div>

              <div class="form-group col-lg-6">
                <input name="mobile" value="<?php echo $rows['mobile'];?>" class="form-control validates-as-required" aria-required="true" required aria-invalid="false" placeholder="Mobile*" type="tel">
              </div>

              <div class="form-group col-lg-6">
                <input name="email" value="<?php echo $rows['email'];?>" class="form-control validates-as-required" style="text-transform: lowercase;" aria-required="true" required aria-invalid="false" placeholder="Email*" type="email">
              </div>

              <div class="form-group col-lg-6">
                <input name="airline" value="<?php echo $rows['airline'];?>" class="form-control validates-as-required" style="text-transform: uppercase;"  aria-required="true" required aria-invalid="false" placeholder="Airline*" type="text">      
              </div>

              <div class="form-group col-lg-6">
               <input type="text" class="form-control" name="datepicker2" data-date-format='yyyy-mm-dd' value="<?php echo $rows['issue'];?>" id="datepicker2" placeholder="Click to select issue date" aria-describedby="basic-addon1">
             </div>

             <div class="form-group col-lg-6">
               <input type="text" class="form-control" name="datepicker" data-date-format='yyyy-mm-dd' value="<?php echo $rows['date'];?>" id="datepicker" placeholder="Click to select Flight date" aria-describedby="basic-addon1">
             </div>

             <div class="form-group col-lg-12">
               <input type="text"  class="form-control" value="<?php echo $rows['notes'];?>" name="notes" placeholder="Notes">
             </div>
             <input type="hidden" value="<?php echo $rows['id']?>" name="id">
             <br>
             <center><button id="editsubmit" name="editsubmit" type="submit" class="btn btn-md btn-primary" style="width: 30%;margin-top:30px;">Save</button></center>
           </form>
         </div>
       </div>
     </section>
   </div>


<?php //die(0);
}  
}
else{
  ?>
  <div class="panel panel-default panel-table">
    <div class="panel-heading">
      <div class="row">
        <div class="col col-xs-6">
          <div class="panel-title" style="color:green;padding-left: 30px;font-family: arial"><strong><span class="glyphicon glyphicon-ok"></span> Listing All</strong></div>
        </div>
        <div class="col col-xs-6 text-right">
          <a href="dashboard.php"><button type="button" class="btn btn-md btn-primary btn-create" onclick="gohome()"><span class="glyphicon glyphicon-home"></span> Home</button></a>
          <a href='logout.php'><button type="button" class="btn btn-danger">Log out</button></a></div>
        </div>
      </div>

      <div class="panel-body">
        <table class="table table-striped table-bordered table-list" style="color: black !important; border-bottom: none !important; width:100%;table-layout:fixed;word-wrap: break-word;" id="myTable">
          <thead style="width: 100%">
            <tr>
              <th style="text-align: center;"><em class="fa fa-cog"></em></th>
              <th style="text-align: center;width: 23px;">S.N</th>
              <th>PNR</th>
              <th>Ticket No.</th>
              <th>Name</th>
              <th>Email</th>
              <th>Mobile</th>
              <th>Airline</th>
              <th>Issue Date</th>
              <th>Flight Date</th>
              <th>Notes</th>
            </tr> 
          </thead>
          <tbody><?php
          $results="SELECT * FROM `booking`";
          $result = $conn->query($results);
          $i=1;
          while ($row = $result->fetch_assoc()) 
            {?><tr>
              <td align="center">
                <a class="btn btn-default" id="edit" href="viewall.php?edit=<?php echo $row['id'];?>" data-toggle="modal" data-value=<?php echo $row['id'];?>><em class="fa fa-pencil"></em></a>


                <a class="btn btn-danger" href="viewall.php?id=<?php echo $row['id'];?>" ><em class="fa fa-trash"></em></a>
              </td>
              <td style="padding-left:2%;"><?php echo $i;?></td>
              <td><?php echo strtoupper($row['booking']);?></td>
              <td><?php echo strtoupper($row['ticket']);?></td>
              <td><?php 
              if(!empty($row['mname']))
                  echo ucfirst($row['fname'])." _ ".ucfirst($row['mname'])." _ ".ucfirst($row['lname']);
              else
                  echo ucfirst($row['fname'])." _ ".ucfirst($row['lname']);
                ?></td>              
              <td><?php echo strtolower($row['email']);?></td>
              <td><?php echo $row['mobile'];?></td>
              <td><?php echo strtoupper($row['airline']);?></td>
              <td><?php if($row['issue']=='0000-00-00'){echo"NA";}else{echo $row['issue'];}?></td>
              <td><?php if($row['date']=='0000-00-00'){echo"NA";}else{echo $row['date'];}?></td>   
              <td><?php echo ucfirst($row['notes']);?></td>
            </tr>

            <?php $i++;}
            ?>
          </tbody>
        </table>
      </div>  
    </div>
  </div>
  <?php }?>


  <script type="text/javascript">
    function gohome()
    {
      window.location ="dashboard.php";
    }

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

  <script type="text/javascript">


   $(document).ready(function(){
    $.noConflict();
    $('#myTable').DataTable({
      responsive: true
    } );
  });
</script>