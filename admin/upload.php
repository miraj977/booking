<?php
require('connect.php');
include('admin-header.php');

if(isset($_POST['bookingsubmit']))
{

  $notes='';
  $mname='';
  $email = $_POST['email']; 
  $fname = $_POST['fName'];
  $mname=$_POST['mName'];
  $lname = $_POST['lName'];
  $mobile= $_POST['mobile'];
  $airline= $_POST['airline'];
  $date= $_POST['datepicker'];
  $date2= $_POST['datepicker2'];
  $notes=$_POST['notes'];
  $booking=$_POST['bookNum'];
  $ticket=$_POST['tktNum'];
  //print_r($_POST);
// exit();

  $sql = "INSERT INTO `booking` (`email`,`fname`,`mname`,`lname`,`mobile`,`airline`,`date`,`issue`,`ticket`,`booking`,`notes`) VALUES 
  ('".$email."',
  '".$fname."',
  '".$mname."',
  '".$lname."',
  '".$mobile."',
  '".$airline."',
  '".$date."',
  '".$date2."',
  '".$ticket."',
  '".$booking."',
  '".$notes."')";

  $insert=mysqli_query($conn,$sql);
}

elseif(isset($_POST['editsubmit']))
{
  $id=$_POST['id'];
  $notes='';
  $mname='';
  $email = $_POST['email']; 
  $fname = $_POST['fName'];
  $mname=$_POST['mName'];
  $lname = $_POST['lName'];
  $mobile= $_POST['mobile'];
  $airline= $_POST['airline'];
  $date= $_POST['datepicker'];
  $date2= $_POST['datepicker2'];
  $notes=$_POST['notes'];
  $booking=$_POST['bookNum'];
  $ticket=$_POST['tktNum'];
//print_r($_POST);

  $sql = "UPDATE `booking` SET email ='".$email."',date =
  '".$date."',issue =
  '".$date2."', fname=
  '".$fname."',airline=
  '".$airline."', mname=
  '".$mname."', lname=
  '".$lname."', mobile=
  '".$mobile."', ticket=
  '".$ticket."', booking=
  '".$booking."', notes=
  '".$notes."' WHERE `id`='".$id."';";

  $insert=mysqli_query($conn,$sql);



}

?>
<div class="col-md-10 col-md-offset-1">

  <div class="panel panel-default panel-table">
    <div class="panel-heading">
      <div class="row">
        <div class="col col-xs-6">
          <div class="panel-title" style="color:green;"><strong><span class="glyphicon glyphicon-ok"></span> Success!!!</strong></div>
        </div>
        <div class="col col-xs-6 text-right">
          <button type="button" class="btn btn-md btn-primary btn-create" onclick="gohome()"><span class="glyphicon glyphicon-home"></span> Home</button>   <a href="viewall.php"><button class="btn btn-primary">View all</button></a> <a href='logout.php'><button type="button" class="btn btn-danger">Log out</button></a>
        </div>
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
        if(!empty($_POST['tktNum']))
        {
          $results="SELECT * FROM `booking` WHERE `ticket`='".$_POST['tktNum']."'";
        }else{
          $results="SELECT * FROM `booking` WHERE `ticket`";
        }

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

<script type="text/javascript">
  function gohome()
  {
    window.location ="dashboard.php";
  }
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $.noConflict();
    $('#myTable').DataTable({
      responsive: true
    } );
  });
</script>