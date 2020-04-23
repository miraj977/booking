<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Calligraffitti' rel='stylesheet'>
<style>
  body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
  .w3-row-padding img {margin-bottom: 12px}
  /* Set the width of the sidebar to 120px */
  .w3-sidebar {width: 80px;background: #21201800; position: relative;}
  /* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
  #main {margin-left: 120px}
  /* Remove margins from "page content" on small screens */
  @media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css"> 
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
<link rel="icon" type="image/png" href="favicon.png">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css"> 
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script> 
  $(document).ready(function(){
    $("#flip").click(function(){
      $("#panel").slideToggle("fast");
      $("#panel2").hide();
      $("#panel3").hide();
    });
    $("#flip2").click(function(){
      $("#panel2").slideToggle("fast");
      $("#panel").hide();
      $("#panel3").hide();
    });
    $("#flip3").click(function(){
      $("#panel3").slideToggle("fast");
      $("#panel2").hide();
      $("#panel").hide();
    });
  });
</script>



<title>Everest Manage Booking</title>
<?php include 'header.php'; ?>
<body>
<?php
  $term= "<p style=\"text-align: justify;\"><strong>E</strong>verest View Travel and Tours encourages you to read the terms and conditions. By submitting the booking form you are agreeing to be bound by the conditions of the terms and agreement between you and Everest View Travel and Tours.</p>
<p><strong>A: Definitions:</strong> Everest View Travel and Tours shall be referred to as us / The Company / We or Tour Company. You the client shall be referred to as you or Client.</p>
<p><strong>B: To book Everest View Travel and Tours Trip: </strong>You are required to make the 20% payment for Nepal Trips and 100% payment for Tibet and Bhutan Trips with a copy of your passport for reservation of the flight Ticket, Hotel Accommodation and trekking permit process. The rest of the payment should be made before 30 days of the trip departure or after your arrival in Nepal (Depending the Trip): visit our payment method page for the payment detail.</p>
<p><strong>C: Prices: </strong>Prices are correct at time of publish however the company reserves the right to alter the price if there significant change on local exchange rates, internal flights, TAX etc</p>
<p style=\"text-align: justify;\">D: <strong>Check in</strong>: You should check in a minimum of 2 hours before your flights scheduled departure except in North America where 3 hours is required. Some Airlines and Airports may require earlier check-in.</p>
<p style=\"text-align: justify;\">E:<strong>Re-confirmations</strong>: Whilst not all airlines require passengers to reconfirm flights 72 hours prior to each departure, it is our recommendation that you check your flight departures and arrivals from the airlines directly while going out and coming in to Australia, as the airlines Schedule may change any moment..<br />
F:Re-confirmations: Whilst not all airlines require passengers to reconfirm flights 72 hours prior to each departure, it is our recommendation that you check your flight departures and arrivals from the airlines directly while going out and coming in to Australia, as the airlines Schedule may change any moment.</p>
<p style=\"text-align: justify;\"><strong>G:Passports:</strong> Please ensure your passport has at least six months validity from date of return to Australia as a valid passport is required to travel internationally.</p>
<p style=\"text-align: justify;\"><strong>H: Visa and Documentations:</strong> It is the passenger’s responsibility to ensure they have the appropriate documentations including visas. Please ensure all visa requirements have been met for your journey. Baggage Allowance: Please be informed about the baggage allowance applicable for your class of service and your chosen carrier. You can contact your consultant or the airlines direct.</p>
<p style=\"text-align: justify;\"><strong>I:Cancellations and Amendments:</strong> A refund/re-issue admin fee will applies for all bookings in addition to any airlines/wholesalers fees. All tickets have restrictions and limitations regarding validity. Many discounted airfares are NON REFUNDABLE. Please check with your consultant for further details.</p>
<p style=\"text-align: justify;\"><strong>J:Conditions:</strong> All arrangements are subject to the supplier’s (transport/accommodation/tour provider) regulations and conditions detailed on tickets, vouchers, travel brochures, at accommodation premises, on transport vehicles, or as advised at the time of booking.</p>
<p style=\"text-align: justify;\"><strong>K:Travel Insurance:</strong> Travel Insurance is strongly recommended by the department of foreign affairs and trade for all overseas travel. You can go to our website www.everestviewtravels.com.au and click on Insurance to get a quote.</p>
<p style=\"text-align: justify;\"><strong>L:Refund / cancellation / date change policy of ticket:</strong> Before you get the ticket issued please make sure that you have checked refund and date change policy of the ticket because every airline has different set of rules and regulation for different set of fares. If you did not check the rules agent will not be responsible.</p>
<p style=\"text-align: justify;\">
<strong>M: Amendments on Booking: </strong>You can make an amendment to any trip. We do our best to accommodate your amendments but you will be responsible for any additional costs that need for the amendments.</p>
<p><strong>N: Transfer of booking to another trip: </strong>You can transfer the Confirmed trips to a different trip subject to availability. We do our best to accommodate your transfers, but you will be responsible for any additional costs need for the transfers.</p>
<p><strong>O: Cancellation and Refunds: </strong>If you cancel your booking after you have paid or deposited for booking, the following percentage will be charged for cancellation.<br />
1.If you cancel the trip 31 days before the trip departure date 20% (Deposit non-refundable).<br />
2.If you cancel the trip 16 &#8211; 30 Days before the trip departure date- 45%<br />
3.If you cancel the trip 08 -15 Days before the trip departure 75%<br />
4.If you cancel the trip 07 or less Days before the trip departure &#8211; 100%</p>
<p><strong>Notes:</strong><br />
1.There are different rates for the calculations of Tibet and Bhutan Trips- please contact us for the Detail.<br />
2.You may extend your trip without cancellation and charge till one year but we need to be informed through mail at least 2 weeks before the trip departure &amp; you will have to pay the increased amount if the cost of the trip increased due to increment on the Local stuff; flight, TAX used in the Trip.<br />
3. the tours/packages booked through vouchers like through Scoopon, Our Deal, Groupon, wowcher etc are not refundable once the tours are booked:</p>
<p><strong>P: Trip cancels by the Company: </strong>If we cancel your trip, your deposit and any other payments made will be refunded in full. However, if our cancellation is due to civil war, political unrest or from any other unpredictable circumstances beyond our control, the reasonable expenses that we have already paid for the process of the trip will be deducted from your deposited amount.<br />
<strong>Q: Health &amp; Fitness:</strong> Good health and physical fitness is required for all Everest View Travel and Tours trips, so we strongly advise you to check your physical condition and Health before you book the trip..</p>
<p><strong>R: Guide/ Leader: </strong>The trekking/tour/expedition leader/guide or any local staffs who represent Everest View Travel and Tours Treks &amp; Expedition Pvt. Ltd has given authority on our trips. If you commit any illegal act in the trips or if in the opinion of them, your behavior is unfavorable to the safety and welfare of the group or locals. You may be asked to leave the trip without any right to refund.
</p>
<p style=\"text-align: justify;\"><strong>S: Complaints: </strong>If you have complaints about the trip, you can tell to operator/leader/guide at the earliest opportunity then he will take the appropriate action.</p>
<p><strong>Q: Acceptance of risk and Liabilities:</strong> We are committed to provide the best services by performing our duties honestly &amp; seriously to make your journey very smooth &amp; successful. However, Everest View Travel and Tours and its related organization shall not be responsible for any changes in the itinerary due to unavoidable circumstance beyond our control such as govt. restriction, Land slide, road blockage, flood, snow political unrest, cancellation of flight, delay, sickness or accident and The nature of some of our trips is adventurous and risky as well, therefore may involve a personal risk. We would like to inform you that you have to take all risk on yourself such as damages or injuries or death resulting from these inherent risks.</p>";

  $notice= "<p style=\"font-size:15px;\">Dear Passenger,<br>
If your flight is within 24 hrs and you need some assistance, please Call on ‎<b>1300 886 761</b> , Text on ‎<b>+61 0449913133</b> or Email on <a href=\"mailto:info@everestviewtravels.com.au\">info@everestviewtravels.com.au</a></p>";?>

  <!-- Start -->

  <div class="col-md-4" style="margin:0 auto; float: none;">
    <div id="flip" class="btna btn-primary" style="width: 100%; margin-top: 120px;border-top-left-radius: 25px;">Flight change</div>
  </div>
  <div id="panel" class="col-md-12" style="padding-bottom: 0px">

    <div class="container-fluid">
      <section class="container">
        <div class="container-page">        
          <div class="col-md-6">
            <form id="bookingform" method= "POST" action="query.php" enctype="multipart/form-data">
              <h3 class="dark-grey">Booking Details</h3>

              <div class="form-group col-lg-6">
                <input name="bookNum" value="" id="bookNum1" class="form-control" aria-required="true" aria-invalid="false" style="text-transform: uppercase;" required placeholder="Booking Number/PNR*" type="text">
              </div>

              <div class="form-group col-lg-6">
                <input name="tktNum" id="tktNum1" value="" class="form-control" aria-required="true" aria-invalid="false" style="text-transform: uppercase;" required placeholder="Ticket Number*" type="text">
              </div>

              <div class="form-group col-lg-6">
                <input name="fName" id="fName1" value="" class="form-control" aria-required="true" aria-invalid="false" style="text-transform: capitalize;" required placeholder="First Name*" type="text">
              </div>

              <div class="form-group col-lg-6">
                <input name="mName" id="mName1" value="" class="form-control" aria-required="true" aria-invalid="false" style="text-transform: capitalize;" placeholder="Middle Name (if applicable)" type="text">
              </div>

              <div class="form-group col-lg-6">
                <input name="lName" id="lName1" value="" class="form-control validates-as-required" aria-required="true" style="text-transform: capitalize;" required aria-invalid="false" placeholder="Last Name*" type="text">
              </div>

              <div class="form-group col-lg-6">
                <input name="mobile" id="mobile1" value="" class="form-control validates-as-required" aria-required="true" required aria-invalid="false" placeholder="Mobile*" type="tel">
              </div>

              <div class="form-group col-lg-6">
                <input name="email" id="email1" value="" class="form-control validates-as-required" aria-required="true" style="text-transform: lowercase;" required aria-invalid="false" placeholder="Email*" type="email">
              </div>

              <div class="form-group col-lg-6">
                <input name="airline" id="airline1" value="" class="form-control validates-as-required" aria-required="true" style="text-transform: uppercase;" required aria-invalid="false" placeholder="Airline*" type="text">      
              </div>

              <div class="w3-hide-small col-sm-6 form-check" style="margin-bottom: 12px;">
               Flight * <br><input name="international" value="International" type="checkbox">&nbsp;&nbsp;International &nbsp;&nbsp; <input name="domestic" value="Domestic" type="checkbox">&nbsp;Domestic
              </div>

              <div class="w3-hide-small col-sm-6 form-check">
               Travel Type * <br><input name="oneway" value="One way" type="checkbox">&nbsp;&nbsp;One way  &nbsp;&nbsp;<input name="return" value="Return" type="checkbox">&nbsp;&nbsp;Return
              </div> 
            <br>
            <div class="w3-hide-large w3-hide-medium col-sm-6 form-check" style="margin-bottom: 12px;text-align: left;">
               Flight * <br><input name="international" value="International" type="checkbox">&nbsp;&nbsp;International<br><input name="domestic" value="Domestic" type="checkbox">&nbsp;&nbsp;Domestic
              </div>

              <div class="w3-hide-large w3-hide-medium col-sm-6 form-check" style="margin-bottom: 12px;text-align: left;">
               Travel Type * <br><input name="oneway" value="One way" type="checkbox">&nbsp;&nbsp;One way<br><input name="return" value="Return" type="checkbox">&nbsp;&nbsp;Return
              </div> 


             <div class="col-md-12" style="margin-bottom: 12px;text-indent:10px;text-transform: capitalize;">
              <textarea name="message" cols="30" rows="10" class="form-control" placeholder="Request Details*" required></textarea>
            </div>

            <div class="col-md-12" style="margin-bottom: 12px;">
              <input type="file" name="my_file" id="my_file" required>
              <smalltext>*Upload your passport or photoID</smalltext>
            </div>
            <br>
            <div class="col-md-12" style="margin-bottom: 12px;">
            <input id="agreement" name="agreement" value="1" type="checkbox">&nbsp;I have read and agree to the<br>
            <a href="#" data-toggle="modal" data-target="#terms">Terms and Conditions</a>*</div>
            <br>
            <br>

            <div id="terms" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="text-align-last: center">Terms and Conditions</h4>
                  </div>
                  <div class="modal-body" >
                    <p>
                      <?php echo $term;?>
                    </p>

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
            <input type="hidden" name="show" value="change">
            <button id="bookingsubmit" name="bookingsubmit" disabled="disabled" type="submit" class="btn btn-md btn-default">Send</button>      
          </form>
        </div>

        <div class="col-md-6">
          <h3 class="dark-grey">Notice</h3>
          <p>
            <?php echo $notice;?>
          </p>

        </div>

      </div>

    </section>
  </div>
  <hr class="style14">
</div>

<div style="clear: both;"></div>

<div class="col-md-4" style="margin:0 auto; float: none;">
  <div id="flip2" class="btna btn-primary" style="width: 100%;">Flight Cancellation</div>
</div>
<div id="panel2"class="col-md-12">    
  <div class="container-fluid">
    <section class="container">
      <div class="container-page">        
        <div class="col-md-6">
          <form id="bookingform" method= "POST" action="query.php" enctype="multipart/form-data">
            <h3 class="dark-grey">Booking Details</h3>

            <div class="form-group col-lg-6 col-sm-12">
                <input name="bookNum" value="" id="bookNum2" style="text-transform: uppercase;"  class="form-control" aria-required="true" aria-invalid="false" required placeholder="Booking Number/PNR*" type="text">
              </div>

              <div class="form-group col-lg-6 col-sm-12">
                <input name="tktNum" id="tktNum2" style="text-transform: uppercase;"  value="" class="form-control" aria-required="true" aria-invalid="false" required placeholder="Ticket Number*" type="text">
              </div>

              <div class="form-group col-lg-6 col-sm-12">
                <input name="fName" id="fName2" value="" class="form-control" aria-required="true" aria-invalid="false" style="text-transform: capitalize;" required placeholder="First Name*" type="text">
              </div>

              <div class="form-group col-lg-6 col-sm-12">
                <input name="mName" id="mName2" value="" class="form-control" aria-required="true" aria-invalid="false" style="text-transform: capitalize;" placeholder="Middle Name (if applicable)" type="text">
              </div>

              <div class="form-group col-lg-6 col-sm-12">
                <input name="lName" id="lName2" value="" class="form-control validates-as-required" aria-required="true" style="text-transform: capitalize;" required aria-invalid="false" placeholder="Last Name*" type="text">
              </div>

              <div class="form-group col-lg-6 col-sm-12">
                <input name="mobile" id="mobile2" value="" class="form-control validates-as-required" aria-required="true" required aria-invalid="false" placeholder="Mobile*" type="tel">
              </div>

              <div class="form-group col-lg-6 col-sm-12">
                <input name="email" id="email2" style="text-transform: lowercase;" value="" class="form-control validates-as-required" aria-required="true" required aria-invalid="false" placeholder="Email*" type="email">
              </div>

              <div class="form-group col-lg-6 col-sm-12">
                <input name="airline" id="airline2" value="" class="form-control validates-as-required" aria-required="true" required aria-invalid="false" placeholder="Airline*" type="text">      
              </div>

            <div class="w3-hide-small col-sm-6 form-check" style="margin-bottom: 12px;">
               Flight * <br><input name="international" value="International" type="checkbox">&nbsp;&nbsp;International &nbsp;&nbsp; <input name="domestic" value="Domestic" type="checkbox">&nbsp;Domestic
              </div>

              <div class="w3-hide-small col-sm-6 form-check">
               Travel Type * <br><input name="oneway" value="One way" type="checkbox">&nbsp;&nbsp;One way  &nbsp;&nbsp;<input name="return" value="Return" type="checkbox">&nbsp;&nbsp;Return
              </div> 
            <br>
            <div class="w3-hide-large w3-hide-medium col-sm-6 form-check" style="margin-bottom: 12px;text-align: left;">
               Flight * <br><input name="international" value="International" type="checkbox">&nbsp;&nbsp;International<br><input name="domestic" value="Domestic" type="checkbox">&nbsp;&nbsp;Domestic
              </div>

              <div class="w3-hide-large w3-hide-medium col-sm-6 form-check" style="margin-bottom: 12px;text-align: left;">
               Travel Type * <br><input name="oneway" value="One way" type="checkbox">&nbsp;&nbsp;One way<br><input name="return" value="Return" type="checkbox">&nbsp;&nbsp;Return
              </div> 


             <div class="col-md-12 col-sm-12" style="margin-bottom: 12px;text-indent:10px;text-transform: capitalize;">
              <textarea name="message" cols="30" rows="10" class="form-control" placeholder="Request Details*" required></textarea>
            </div>

            <div class="col-md-12" style="margin-bottom: 12px;">
              <input type="file" name="my_file" id="my_file" required>
              <smalltext>*Upload your passport or photoID</smalltext>
            </div>
            <br>
            <div class="col-md-12" style="margin-bottom: 12px;">
            <input id="agreement2" name="agreement" value="1" type="checkbox">&nbsp;I have read and agree to the<br>
            <a href="#" data-toggle="modal" data-target="#terms">Terms and Conditions</a>*</div>
            <br>
            <br>

          <div id="terms" class="modal fade" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title" style="text-align-last: center">Terms and Conditions</h4>
                </div>
                <div class="modal-body">
                  <p>
                   <?php echo $term;?>
                  </p>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>

          <input type="hidden" name="show" value="cancel">

          <button id="bookingsubmit2" name="bookingsubmit" disabled="disabled" type="submit" class="btn btn-md btn-default">Send</button>      
        </form>
      </div>

      <div class="col-md-6">
        <h3 class="dark-grey">Notice</h3>
        <p>
          <?php echo $notice;?>
        </p>

      </div>

    </div>

  </section>
</div>
<hr class="style14">
</div>
<div style="clear: both;"></div>

<div class="col-md-4" style="margin:0 auto; float: none;">
  <div id="flip3" class="btna btn-primary" style="width: 100%;border-bottom-right-radius: 25px;">Refund</div>
</div>
<div id="panel3"class="col-md-12">    
  <div class="container-fluid">
    <section class="container">
      <div class="container-page">        
        <div class="col-md-6">
          <form id="bookingform" method= "POST" action="query.php" enctype="multipart/form-data">
            <h3 class="dark-grey">Booking Details</h3>

            <div class="form-group col-lg-6">
                <input name="bookNum" value="" style="text-transform: uppercase;" id="bookNum3" class="form-control" aria-required="true" aria-invalid="false" required placeholder="Booking Number/PNR*" type="text">
              </div>

              <div class="form-group col-lg-6">
                <input name="tktNum" id="tktNum3" style="text-transform: uppercase;" value="" class="form-control" aria-required="true" aria-invalid="false" required placeholder="Ticket Number*" type="text">
              </div>

              <div class="form-group col-lg-6">
                <input name="fName" id="fName3" value="" class="form-control" aria-required="true" aria-invalid="false" style="text-transform: capitalize;" required placeholder="First Name*" type="text">
              </div>

              <div class="form-group col-lg-6">
                <input name="mName" id="mName3" value="" class="form-control" aria-required="true" aria-invalid="false" style="text-transform: capitalize;" placeholder="Middle Name (if applicable)" type="text">
              </div>

              <div class="form-group col-lg-6">
                <input name="lName" id="lName3" value="" class="form-control validates-as-required" aria-required="true" style="text-transform: capitalize;" required aria-invalid="false" placeholder="Last Name*" type="text">
              </div>

              <div class="form-group col-lg-6">
                <input name="mobile" id="mobile3" value="" class="form-control validates-as-required" aria-required="true" required aria-invalid="false" placeholder="Mobile*" type="tel">
              </div>

              <div class="form-group col-lg-6">
                <input name="email" id="email3" style="text-transform: lowercase;" value="" class="form-control validates-as-required" aria-required="true" required aria-invalid="false" placeholder="Email*" type="email">
              </div>

              <div class="form-group col-lg-6">
                <input name="airline" id="airline3" value="" class="form-control validates-as-required" aria-required="true" required aria-invalid="false" placeholder="Airline*" type="text">      
              </div>

            <div class="w3-hide-small col-sm-6 form-check" style="margin-bottom: 12px;">
               Flight * <br><input name="international" value="International" type="checkbox">&nbsp;&nbsp;International &nbsp;&nbsp; <input name="domestic" value="Domestic" type="checkbox">&nbsp;Domestic
              </div>

              <div class="w3-hide-small col-sm-6 form-check">
               Travel Type * <br><input name="oneway" value="One way" type="checkbox">&nbsp;&nbsp;One way  &nbsp;&nbsp;<input name="return" value="Return" type="checkbox">&nbsp;&nbsp;Return
              </div> 
            <br>
            <div class="w3-hide-large w3-hide-medium col-sm-6 form-check" style="margin-bottom: 12px;text-align: left;">
               Flight * <br><input name="international" value="International" type="checkbox">&nbsp;&nbsp;International<br><input name="domestic" value="Domestic" type="checkbox">&nbsp;&nbsp;Domestic
              </div>

              <div class="w3-hide-large w3-hide-medium col-sm-6 form-check" style="margin-bottom: 12px;text-align: left;">
               Travel Type * <br><input name="oneway" value="One way" type="checkbox">&nbsp;&nbsp;One way<br><input name="return" value="Return" type="checkbox">&nbsp;&nbsp;Return
              </div> 


             <div class="col-md-12" style="margin-bottom: 12px;text-indent:10px;text-transform: capitalize;">
              <textarea name="message" cols="30" rows="10" class="form-control" placeholder="Request Details*" required></textarea>
            </div>

            <div class="col-md-12" style="margin-bottom: 12px;">
              <input type="file" name="my_file" id="my_file" required>
              <smalltext>*Upload your passport or photoID</smalltext>
            </div>
            <br>
            <div class="col-md-12" style="margin-bottom: 12px;">
            <input id="agreement3" name="agreement" value="1" type="checkbox">&nbsp;I have read and agree to the<br>
            <a href="#" data-toggle="modal" data-target="#terms">Terms and Conditions</a>*</div>
            <br>
            <br>

          <div id="terms" class="modal fade" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title" style="text-align-last: center">Terms and Conditions</h4>
                </div>
                <div class="modal-body">
                  <p>
                    <?php echo $term;?>
                  </p>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          <input type="hidden" name="show" value="refund">
          <button id="bookingsubmit3" name="bookingsubmit" disabled="disabled" type="submit" class="btn btn-md btn-default">Send</button>      
        </form>
      </div>

      <div class="col-md-6">
        <h3 class="dark-grey">Notice</h3>
        <p>
          <?php echo $notice;?>
        </p>

      </div>

    </div>

  </section>
</div>
</div>
<!-- <br><div style="clear: both;"></div> -->

<!--  End -->

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center" style="width: 95px !important;z-index: 99 !important; top:39%;background-color: transparent;">
  <!-- Avatar image in top left corner -->
  <!-- <img src="everestlogo.png" style="width:100%;padding:3px;"> -->
  <a href="#wheel" class="btn-primary w3-hover-white btnaa" style="height: auto;margin-bottom: 0px;border-top-left-radius: 25px;padding-bottom: 0;padding-left: 45px;" data-toggle="modal" data-target="#wheel">
    <i class="fa fa-wheelchair w3-xlarge" aria-hidden="true"></i>
    <p>Wheel Chair</p>
  </a>
  <a href="#meal" class="btn-primary w3-hover-white btnaa" style="height: auto; margin-bottom: 0px;margin-top: 1px;padding-bottom: 12px;padding-left: 45px;" data-toggle="modal" data-target="#meal">
    <i class="fa fa-cutlery w3-xlarge"></i>
    <p>&nbsp;Meal</p>
  </a>
  <a href="#infant" class="btn-primary btnaa w3-hover-white" style="height: auto;margin-bottom: 0px; margin-top: 1px;padding-bottom: 12px;padding-left: 45px;" data-toggle="modal" data-target="#infant">
    <i class="fa fa-odnoklassniki w3-xlarge"></i>
    <p>&nbsp;Infant</p>
  </a>
  <a href="#seat" class="btn-primary btnaa w3-hover-white" style="height: auto;margin-top: 1px;border-bottom-right-radius: 55px;padding-bottom: 12px;padding-left: 45px;" data-toggle="modal" data-target="#seat">
    <i class="fa fa-user-circle w3-xlarge"></i>
    <p>&nbsp;Seat</p>
  </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar" style="top:165px; position: absolute !important;font-weight: bold;background-color: transparent !important;">
  <div class="w3-bar w3-white w3-opacity w3-center w3-small">
    <a href="#wheel" class="w3-bar-item w3-button" style="width:25% !important; text-decoration-line: none; color: black !important;" data-toggle="modal" data-target="#wheel">Wheel Chair</a>
    <a href="#meal" class="w3-bar-item w3-button" style="width:25% !important;text-decoration-line: none; color: black !important" data-toggle="modal" data-target="#meal">Meal Request</a>
    <a href="#infant" class="w3-bar-item w3-button" style="width:25% !important;text-decoration-line: none; color: black !important" data-toggle="modal" data-target="#infant">Infant Bassinet</a>
    <a href="#seat" class="w3-bar-item w3-button" style="width:25% !important;text-decoration-line: none; color: black !important" data-toggle="modal" data-target="#seat">Seat Allocate</a>
  </div>
</div>

<!-- Page Content -->


<div id="wheel" class="modal fade" role="dialog" tabindex="-1" aria-hidden="false" style="overflow: scroll;">
  <div class="modal-dialog" style=" width: 90%; padding:1%">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h2 class="modal-title">Wheel Chair Request</h2>
      </div>
      <div class="modal-body">
       <div class="col-md-6">
        <form id="bookingform" method= "POST" action="query.php" enctype="multipart/form-data">
          <h3 class="dark-grey">Booking Details</h3>

          <div class="form-group col-lg-6">
                <input name="bookNum" value="" id="bookNum4" style="text-transform: uppercase;" class="form-control" aria-required="true" aria-invalid="false" required placeholder="Booking Number/PNR*" type="text">
              </div>

              <div class="form-group col-lg-6">
                <input name="tktNum" id="tktNum4" value="" style="text-transform: uppercase;" class="form-control" aria-required="true" aria-invalid="false" required placeholder="Ticket Number*" type="text">
              </div>

              <div class="form-group col-lg-6">
                <input name="fName" id="fName4" value="" class="form-control" aria-required="true" aria-invalid="false" style="text-transform: capitalize;" required placeholder="First Name*" type="text">
              </div>

              <div class="form-group col-lg-6">
                <input name="mName" id="mName4" value="" class="form-control" aria-required="true" aria-invalid="false" style="text-transform: capitalize;" placeholder="Middle Name (if applicable)" type="text">
              </div>

              <div class="form-group col-lg-6">
                <input name="lName" id="lName4" value="" class="form-control validates-as-required" aria-required="true" style="text-transform: capitalize;" required aria-invalid="false" placeholder="Last Name*" type="text">
              </div>

              <div class="form-group col-lg-6">
                <input name="mobile" id="mobile4" value="" class="form-control validates-as-required" aria-required="true" required aria-invalid="false" placeholder="Mobile*" type="tel">
              </div>

              <div class="form-group col-lg-6">
                <input name="email" id="email4" value="" style="text-transform: lowercase;" class="form-control validates-as-required" aria-required="true" required aria-invalid="false" placeholder="Email*" type="email">
              </div>

              <div class="form-group col-lg-6">
                <input name="airline" id="airline4" value="" class="form-control validates-as-required" aria-required="true" required aria-invalid="false" placeholder="Airline*" type="text">      
              </div>

          <div class="col-sm-6 form-check" style="margin-bottom: 12px;">
               Flight * <br><input name="international" value="International" type="checkbox">&nbsp;&nbsp;International &nbsp;&nbsp; <input name="domestic" value="Domestic" type="checkbox">&nbsp;Domestic
              </div>

              <div class="col-sm-6 form-check">
               Travel Type * <br><input name="oneway" value="One way" type="checkbox">&nbsp;&nbsp;One way  &nbsp;&nbsp;<input name="return" value="Return" type="checkbox">&nbsp;Return
              </div> 


             <div class="col-md-12" style="margin-bottom: 12px;text-indent:10px;text-transform: capitalize;">
              <textarea name="message" cols="30" rows="10" class="form-control" placeholder="Request Details*" required></textarea>
            </div>

            <div class="col-md-12" style="margin-bottom: 12px;">
              <input type="file" name="my_file" id="my_file" required>
              <smalltext>*Upload your passport or photoID</smalltext>
            </div>
            <br>
            <center>
            <div class="col-md-12" style="margin-bottom: 12px;">
            <input id="agreement4" name="agreement" value="1" type="checkbox">&nbsp;I have read and agree to the<br>
            <a href="#" data-toggle="modal" data-target="#term">Terms and Conditions</a>*</div>
            <br>
            <br>

          <input type="hidden" name="show" value="wheel">

          <button id="bookingsubmit4" name="bookingsubmit" disabled="disabled" type="submit" class="btn btn-md btn-default">Send</button>
        </center>
        <br>      
      </form>
    </div>

    <div class="col-md-6">
      <h3 class="dark-grey">Notice</h3>
      <p>
        <?php echo $notice."<br><p style=\"font-size:16px;\">Everest view Travel is dedicated to providing a pleasant travel
experience for our customers requiring special assistance. If you need
wheelchair assistance, please let us know at the time of booking to
ensure we can assist you in the best way possible.
If you are requesting a wheelchair 48 hrs prior to the flight , we will
pass that across to the carrier. However it will be subjected to
availability as each flight has limited number of wheel chair and they
usually work on First in First serve basis.
Some wheelchair categories have eligibility requirements. Please make
sure you meet the eligibility criteria prior to booking your flight.
Please be notified that the decision to grant or deny Wheelchair service
is vendor&#39;s sole decision. Everest view Travels will add your request on
to the booking once confirmed but can&#39;t guarantee for any request.</p>";?>
      </p>
    </div>         
  </div>
  <div style="clear: both;"></div>
  <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  </div>
</div>
</div>
</div>


<!-- Meal Section -->

<div id="meal" class="modal fade" role="dialog" tabindex="-1" aria-hidden="false" style="overflow: scroll;">
  <div class="modal-dialog" style=" width: 90%; padding:1%">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h2 class="modal-title">Special Meal Request</h2>
      </div>
      <div class="modal-body">
       <div class="col-md-6">
        <form id="bookingform" method= "POST" action="query.php" enctype="multipart/form-data">
          <h3 class="dark-grey">Booking Details</h3>

          <div class="form-group col-lg-6">
                <input name="bookNum" value="" id="bookNum5" style="text-transform: uppercase;" class="form-control" aria-required="true" aria-invalid="false" required placeholder="Booking Number/PNR*" type="text">
              </div>

              <div class="form-group col-lg-6">
                <input name="tktNum" id="tktNum5" value="" style="text-transform: uppercase;" class="form-control" aria-required="true" aria-invalid="false" required placeholder="Ticket Number*" type="text">
              </div>

              <div class="form-group col-lg-6">
                <input name="fName" id="fName5" value="" class="form-control" aria-required="true" aria-invalid="false" style="text-transform: capitalize;" required placeholder="First Name*" type="text">
              </div>

              <div class="form-group col-lg-6">
                <input name="mName" id="mName5" value="" class="form-control" aria-required="true" aria-invalid="false" style="text-transform: capitalize;" placeholder="Middle Name (if applicable)" type="text">
              </div>

              <div class="form-group col-lg-6">
                <input name="lName" id="lName5" value="" class="form-control validates-as-required" aria-required="true" style="text-transform: capitalize;" required aria-invalid="false" placeholder="Last Name*" type="text">
              </div>

              <div class="form-group col-lg-6">
                <input name="mobile" id="mobile5" value="" class="form-control validates-as-required" aria-required="true" required aria-invalid="false" placeholder="Mobile*" type="tel">
              </div>

              <div class="form-group col-lg-6">
                <input name="email" id="email5" value="" style="text-transform: lowercase;" class="form-control validates-as-required" aria-required="true" required aria-invalid="false" placeholder="Email*" type="email">
              </div>

              <div class="form-group col-lg-6">
                <input name="airline" id="airline5" value="" class="form-control validates-as-required" aria-required="true" required aria-invalid="false" placeholder="Airline*" type="text">      
              </div>

          <div class="form-group col-lg-6">
            <select name="special-meal" class="form-control" required aria-required="true" aria-invalid="false">
              <option value="">Select Meal*</option>
              <option value="Asian Vegetarian Meal">Asian Vegetarian Meal</option>
              <option value="Baby Meal">Baby Meal</option>
              <option value="Child’s Meal">Child’s Meal</option>
              <option value="Diabetic Meal">Diabetic Meal</option>
              <option value="Low Fat Meal">Low Fat Meal</option>
              <option value="Muslim Meal (Halal)">Muslim Meal (Halal)</option>
              <option value="Hindu Meal (Vegetarian)">Hindu Meal (Vegetarian)</option>
              <option value="Kosher Meal">Kosher Meal</option>
              <option value="Other">Other</option>
            </select>
          </div>

          <div class="form-group col-lg-6">
            <select name="select-trip" class="form-control" aria-required="true" aria-invalid="false" required>
              <option value="">Select Trip*</option>
              <option value="For outbound trip">For outbound trip</option>
              <option value="For inbound trip">For inbound trip</option>
              <option value="For round trip">For round trip</option>
            </select>
          </div>

          <div class="col-sm-6 form-check" style="margin-bottom: 12px;">
               Flight * <br><input name="international" value="International" type="checkbox">&nbsp;&nbsp;International &nbsp;&nbsp; <input name="domestic" value="Domestic" type="checkbox">&nbsp;Domestic
              </div>

              <div class="col-sm-6 form-check">
               Travel Type * <br><input name="oneway" value="One way" type="checkbox">&nbsp;&nbsp;One way  &nbsp;&nbsp;<input name="return" value="Return" type="checkbox">&nbsp;Return
              </div> 


             <div class="col-md-12" style="margin-bottom: 12px;text-indent:10px;">
              <textarea name="message" cols="30" rows="10" class="form-control" placeholder="Request Details*" required></textarea>
            </div>

            <div class="col-md-12" style="margin-bottom: 12px;">
              <input type="file" name="my_file" id="my_file" required>
              <smalltext>*Upload your passport or photoID</smalltext>
            </div>
            <br>
            <center>
            <div class="col-md-12" style="margin-bottom: 12px;">
            <input id="agreement5" name="agreement" value="1" type="checkbox">&nbsp;I have read and agree to the<br>
            <a href="#" data-toggle="modal" data-target="#term">Terms and Conditions</a>*</div>
            <br>
            <br>

          <input type="hidden" name="show" value="meal">

          <button id="bookingsubmit5" name="bookingsubmit" disabled="disabled" type="submit" class="btn btn-md btn-default">Send</button>
        </center>
        <br>      
      </form>
    </div>

    <div class="col-md-6">
      <h3 class="dark-grey">Notice</h3>
      <p>
        <?php echo $notice."<br><p style=\"font-size:16px;\">Airlines offer a selection of special meals to cater for special medical,
dietary, and religious requirements for travellers. which may include
Hindu, vegetarian, kosher, halal, diabetic, low fat, low sodium,
carbohydrate-free, lactose-free, gluten-free and peanut-free meals etc.
As food is the most important part of travel, Everest view Travel is
committed to fulfil the meal requirements of our customers.
Different carriers offer different selections of meals, and passenger
can find out about the special meals that are offered by your airline by
communicating with us or by visiting airlines website.
Usually these special meals must be booked at least 24 hours in advance
of your flight. Requests made after that may not guarentee the meal
you desire. It’s the passenger’s obligation to let us know about any
allergies or meal requirements.

Please be notified that the decision to grant or deny meal service is
vendor&#39;s sole decision. Everest view Travels will add your request on to
the booking once confirmed but can&#39;t guarantee for any request.</p>";?>
      </p>
    </div>         
  </div>
  <div style="clear: both;"></div>
  <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  </div>
</div>
</div>
</div>

<!-- End of Meal Section -->

<!-- Infant Bassinet Section -->  

<div id="infant" class="modal fade" role="dialog" tabindex="-1" aria-hidden="false" style="overflow: scroll;">
  <div class="modal-dialog" style=" width: 90%; padding:1%">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h2 class="modal-title">Infant Bassinet Request</h2>
      </div>
      <div class="modal-body">
       <div class="col-md-6">
        <form id="bookingform" method= "POST" action="query.php" enctype="multipart/form-data">
          <h3 class="dark-grey">Booking Details</h3>

          <div class="form-group col-lg-6">
                <input name="bookNum" value="" id="bookNum6" style="text-transform: uppercase;" class="form-control" aria-required="true" aria-invalid="false" required placeholder="Booking Number/PNR*" type="text">
              </div>

              <div class="form-group col-lg-6">
                <input name="tktNum" id="tktNum6" value="" style="text-transform: uppercase;" class="form-control" aria-required="true" aria-invalid="false" required placeholder="Ticket Number*" type="text">
              </div>

              <div class="form-group col-lg-6">
                <input name="fName" id="fName6" value="" class="form-control" aria-required="true" aria-invalid="false" style="text-transform: capitalize;" required placeholder="First Name*" type="text">
              </div>

              <div class="form-group col-lg-6">
                <input name="mName" id="mName6" value="" class="form-control" aria-required="true" aria-invalid="false" style="text-transform: capitalize;" placeholder="Middle Name (if applicable)" type="text">
              </div>

              <div class="form-group col-lg-6">
                <input name="lName" id="lName6" value="" class="form-control validates-as-required" aria-required="true" style="text-transform: capitalize;" required aria-invalid="false" placeholder="Last Name*" type="text">
              </div>

              <div class="form-group col-lg-6">
                <input name="mobile" id="mobile6" value="" class="form-control validates-as-required" aria-required="true" required aria-invalid="false" placeholder="Mobile*" type="tel">
              </div>

              <div class="form-group col-lg-6">
                <input name="email" id="email6" value="" style="text-transform: lowercase;" class="form-control validates-as-required" aria-required="true" required aria-invalid="false" placeholder="Email*" type="email">
              </div>

              <div class="form-group col-lg-6">
                <input name="airline" id="airline6" value="" class="form-control validates-as-required" aria-required="true" required aria-invalid="false" placeholder="Airline*" type="text">      
              </div>

          <div class="col-sm-6 form-check" style="margin-bottom: 12px;">
               Flight * <br><input name="international" value="International" type="checkbox">&nbsp;&nbsp;International &nbsp;&nbsp; <input name="domestic" value="Domestic" type="checkbox">&nbsp;Domestic
              </div>

              <div class="col-sm-6 form-check">
               Travel Type * <br><input name="oneway" value="One way" type="checkbox">&nbsp;&nbsp;One way  &nbsp;&nbsp;<input name="return" value="Return" type="checkbox">&nbsp;Return
              </div> 


             <div class="col-md-12" style="margin-bottom: 12px;text-indent:10px;text-transform: capitalize;">
              <textarea name="message" cols="30" rows="10" class="form-control" placeholder="Request Details*" required></textarea>
            </div>

            <div class="col-md-12" style="margin-bottom: 12px;">
              <input type="file" name="my_file" id="my_file" required>
              <smalltext>*Upload your passport or photoID</smalltext>
            </div>
            <br>
            <center>
            <div class="col-md-12" style="margin-bottom: 12px;">
            <input id="agreement6" name="agreement" value="1" type="checkbox">&nbsp;I have read and agree to the<br>
            <a href="#" data-toggle="modal" data-target="#term">Terms and Conditions</a>*</div>
            <br>
            <br>

          <input type="hidden" name="show" value="infant">

          <button id="bookingsubmit6" name="bookingsubmit" disabled="disabled" type="submit" class="btn btn-md btn-default">Send</button>
        </center>
        <br>      
      </form>
    </div>

    <div class="col-md-6">
      <h3 class="dark-grey">Notice</h3>
      <p>
       <?php echo $notice."<br><p style=\"font-size:16px;\">Children below two years, on the date of travel, are classified as
infants. Infants who do not occupy a separate seat are offered a baby
bassinet . Different Airlines have their criteria on the size of the baby
and it is also subject to availability before the request is confirmed.  If
infant gets a bassinet then the adult accompanying the infant will also
have to get a bassinet seat. Bassinet seats are usually ‘bulkhead seats’
and come with extra legroom. If bassinet seats are not available, then
the passenger will be given a choice to select other seats.<p><b>
You also have a choice to pay child fare for an infant if you wish
to reserve a separate seat for an infant.</b></p>
Please be notified that the decision to grant or deny your bassinet is
vendor&#39;s sole decision. Everest view Travels will add your request on to
the booking once confirmed but can&#39;t guarantee for any request.</p>";?>
      </p>
    </div>         
  </div>
  <div style="clear: both;"></div>
  <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  </div>
</div>
</div>
</div>
<!-- End of Infant Bassinet Section -->

<!-- Seat Allocate Section -->
<div id="seat" class="modal fade" role="dialog" tabindex="-1" aria-hidden="false" style="overflow: scroll;">
  <div class="modal-dialog" style=" width: 90%; padding:1%">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h2 class="modal-title">Seat Allocation Request</h2>
      </div>
      <div class="modal-body">
       <div class="col-md-6">
        <form id="bookingform" method= "POST" action="query.php" enctype="multipart/form-data">
          <h3 class="dark-grey">Booking Details</h3>

              <div class="form-group col-lg-6">
                <input name="bookNum" value="" id="bookNum7" style="text-transform: uppercase;" class="form-control" aria-required="true" aria-invalid="false" required placeholder="Booking Number/PNR*" type="text">
              </div>

              <div class="form-group col-lg-6">
                <input name="tktNum" id="tktNum7" value="" style="text-transform: uppercase;" class="form-control" aria-required="true" aria-invalid="false" required placeholder="Ticket Number*" type="text">
              </div>

              <div class="form-group col-lg-6">
                <input name="fName" id="fName7" value="" class="form-control" aria-required="true" aria-invalid="false" style="text-transform: capitalize;" required placeholder="First Name*" type="text">
              </div>

              <div class="form-group col-lg-6">
                <input name="mName" id="mName7" value="" class="form-control" aria-required="true" aria-invalid="false" style="text-transform: capitalize;" placeholder="Middle Name (if applicable)" type="text">
              </div>

              <div class="form-group col-lg-6">
                <input name="lName" id="lName7" value="" class="form-control validates-as-required" aria-required="true" style="text-transform: capitalize;" required aria-invalid="false" placeholder="Last Name*" type="text">
              </div>

              <div class="form-group col-lg-6">
                <input name="mobile" id="mobile7" value="" class="form-control validates-as-required" aria-required="true" required aria-invalid="false" placeholder="Mobile*" type="tel">
              </div>

              <div class="form-group col-lg-6">
                <input name="email" id="email7" value="" style="text-transform: lowercase;" class="form-control validates-as-required" aria-required="true" required aria-invalid="false" placeholder="Email*" type="email">
              </div>

              <div class="form-group col-lg-6">
                <input name="airline" id="airline7" value="" class="form-control validates-as-required" aria-required="true" required aria-invalid="false" placeholder="Airline*" type="text">      
              </div>

          <div class="form-group col-lg-6">
            <select name="special-seat" class="form-control" aria-required="true" aria-invalid="false" required>
              <option value="">Select Seat*</option>
              <option value="Aisle Seat">Aisle Seat</option>
              <option value="Window Seat">Window Seat</option>
            </select>
          </div>

          <div class="form-group col-lg-6">
            <select name="select-trip" class="form-control" aria-required="true" aria-invalid="false" required>
              <option value="">Select Trip*</option>
              <option value="For outbound trip">For outbound trip</option>
              <option value="For inbound trip">For inbound trip</option>
              <option value="For round trip">For round trip</option>
            </select>
          </div>

          <div class="col-sm-6 form-check" style="margin-bottom: 12px;">
               Flight * <br><input name="international" value="International" type="checkbox">&nbsp;&nbsp;International &nbsp;&nbsp; <input name="domestic" value="Domestic" type="checkbox">&nbsp;Domestic
              </div>

              <div class="col-sm-6 form-check">
               Travel Type * <br><input name="oneway" value="One way" type="checkbox">&nbsp;&nbsp;One way  &nbsp;&nbsp;<input name="return" value="Return" type="checkbox">&nbsp;Return
              </div> 


             <div class="col-md-12" style="margin-bottom: 12px;text-indent:10px;text-transform: capitalize;">
              <textarea name="message" cols="30" rows="10" class="form-control" placeholder="Request Details*" required></textarea>
            </div>

            <div class="col-md-12" style="margin-bottom: 12px;">
              <input type="file" name="my_file" id="my_file" required>
              <smalltext>*Upload your passport or photoID</smalltext>
            </div>
            <br>
            <center>
            <div class="col-md-12" style="margin-bottom: 12px;">
            <input id="agreement7" name="agreement" value="1" type="checkbox">&nbsp;I have read and agree to the<br>
            <a href="#" data-toggle="modal" data-target="#term">Terms and Conditions</a>*</div>
            <br>
            <br>

          <input type="hidden" name="show" value="seat">

          <button id="bookingsubmit7" name="bookingsubmit" disabled="disabled" type="submit" class="btn btn-md btn-default">Send</button>
        </center>
        <br>      
      </form>
    </div>

    <div class="col-md-6">
      <h3 class="dark-grey">Notice</h3>
      <p>
        <?php echo $notice."<br><p style=\"font-size:16px;\">Different airlines have different seat allocation policies. Depending on
the airline you are travelling with , you may be given a choice for
generic seat selection such as aisle , window or you may also be able to
request specific seats. Everest view Travel&#39;s consultants are always
prepared to help customers with seating requests.
But in some cases you may not be offered a seat you desire due to
variety of , this is likely due to one of several reasons:
* Airline does not offer pre-reserved seating.
* Some seats are chargeable . Additional fees must be paid to the
vendor if specific seats are needed.
* After certain number seats have been assigned, the remaining
seats are restricted to airport check-in on the day of the flight.
* Some airlines do not let you book seats until 90 days before the
flight or except on the day of the flight.
* If you are not offered a seat map during booking, please visit your
airline’s website for seat selection or call them directly</p>";?>
      </p>
    </div>         
  </div>
  <div style="clear: both;"></div>
  <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  </div>
</div>
</div>
</div>
<!-- End of Seat Allocate Section -->
<div id="term" class="modal fade" role="dialog" style="z-index: 1000000000000000000 !important;"  aria-hidden="true">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="text-align-last: center">Terms and Conditions</h4>
      </div>
      <div class="modal-body">
          <?php echo $term;?>
        </p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> 


<!-- END PAGE CONTENT -->
</div>
<!-- Footer -->
<center>
  <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge"  style="cursor: pointer; color: white !important">
    <a href="https://www.facebook.com/everestviewtravel/"><i class="fa fa-facebook-official w3-hover-opacity" style="color: orange"></i></a>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <p class="w3-medium" style="background-image: url('dev.png');">Developed by <i><a href="http://www.fb.com/miraj977" class="w3-hover-text-white dev">Miraj</a></i></p>
    <!-- End footer -->
  </footer>
</center>
</body>
</html>

<script type="text/javascript">
 // alert('hi');
 $(function() {
  $('#agreement').click(function() {
    if ($(this).is(':checked')) {
      $('#bookingsubmit').removeAttr('disabled'); 
    } else {
     $('#bookingsubmit').attr('disabled', 'disabled');
   }
 });
});

 $(function() {
  $('#agreement2').click(function() {
    if ($(this).is(':checked')) {
      $('#bookingsubmit2').removeAttr('disabled'); 
    } else {
     $('#bookingsubmit2').attr('disabled', 'disabled');
   }
 });
});

 $(function() {
  $('#agreement4').click(function() {
    if ($(this).is(':checked')) {
      $('#bookingsubmit4').removeAttr('disabled'); 
    } else {
     $('#bookingsubmit4').attr('disabled', 'disabled');
   }
 });
});
 $(function() {
  $('#agreement5').click(function() {
    if ($(this).is(':checked')) {
      $('#bookingsubmit5').removeAttr('disabled'); 
    } else {
     $('#bookingsubmit5').attr('disabled', 'disabled');
   }
 });
});
 $(function() {
  $('#agreement6').click(function() {
    if ($(this).is(':checked')) {
      $('#bookingsubmit6').removeAttr('disabled'); 
    } else {
     $('#bookingsubmit6').attr('disabled', 'disabled');
   }
 });
});
 $(function() {
  $('#agreement7').click(function() {
    if ($(this).is(':checked')) {
      $('#bookingsubmit7').removeAttr('disabled'); 
    } else {
     $('#bookingsubmit7').attr('disabled', 'disabled');
   }
 });
});
 $(function() {
  $('#agreement3').click(function() {
    if ($(this).is(':checked')) {
      $('#bookingsubmit3').removeAttr('disabled'); 
    } else {
     $('#bookingsubmit3').attr('disabled', 'disabled');
   }
 });
});

</script>

<script type="text/javascript">
    $("#tktNum1").change(function() {
        var str= $('#tktNum1').val();
        var ticket = str.toUpperCase();
        //alert(ticket);
        $.ajax({
            type: "POST",
            dataType: 'json',
            data: "ticket=" + ticket,
            url: "fill.php",
            success: function(response) {

                //json = $.parseJSON(response);
                $('#bookNum1').val(response.booking);
                $("#email1").val(response.email);
                $("#mobile1").val(response.mobile);
                $("#fName1").val(response.fname);
                $("#lName1").val(response.lname);
                $("#mName1").val(response.mname);
                $("#airline1").val(response.airline);
            },
            error: function(ts) { alert(ts.responseText)
            }
        });
    });

    $("#tktNum2").change(function() {
        var str= $('#tktNum2').val();
        var ticket = str.toUpperCase();
        $.ajax({
            type: "POST",
            dataType: 'json',
            data: "ticket=" + ticket,
            url: "fill.php",
            success: function(response) {

                //json = $.parseJSON(response);
                $('#bookNum2').val(response.booking);
                $("#email2").val(response.email);
                $("#mobile2").val(response.mobile);
                $("#fName2").val(response.fname);
                $("#lName2").val(response.lname);
                $("#mName2").val(response.mname);
                $("#airline2").val(response.airline);
            },
            error: function(ts) { alert(ts.responseText)
            }
        });
    });
    
    $("#tktNum3").change(function() {
        var str= $('#tktNum3').val();
        var ticket = str.toUpperCase();
        $.ajax({
            type: "POST",
            dataType: 'json',
            data: "ticket=" + ticket,
            url: "fill.php",
            success: function(response) {

                //json = $.parseJSON(response);
                $('#bookNum3').val(response.booking);
                $("#email3").val(response.email);
                $("#mobile3").val(response.mobile);
                $("#fName3").val(response.fname);
                $("#lName3").val(response.lname);
                $("#mName3").val(response.mname);
                $("#airline3").val(response.airline);
            },
            error: function(ts) { alert(ts.responseText)
            }
        });
    });

    $("#tktNum4").change(function() {
      
        var str= $('#tktNum4').val();
        var ticket = str.toUpperCase();
        $.ajax({
            type: "POST",
            dataType: 'json',
            data: "ticket=" + ticket,
            url: "fill.php",
            success: function(response) {

                //json = $.parseJSON(response);
                $('#bookNum4').val(response.booking);
                $("#email4").val(response.email);
                $("#mobile4").val(response.mobile);
                $("#fName4").val(response.fname);
                $("#lName4").val(response.lname);
                $("#mName4").val(response.mname);
                $("#airline4").val(response.airline);
            },
            error: function(ts) { alert(ts.responseText)
            }
        });
    });


    $("#tktNum5").change(function() {
        var str= $('#tktNum5').val();
        var ticket = str.toUpperCase();
        $.ajax({
            type: "POST",
            dataType: 'json',
            data: "ticket=" + ticket,
            url: "fill.php",
            success: function(response) {

                //json = $.parseJSON(response);
                $('#bookNum5').val(response.booking);
                $("#email5").val(response.email);
                $("#mobile5").val(response.mobile);
                $("#fName5").val(response.fname);
                $("#lName5").val(response.lname);
                $("#mName5").val(response.mname);
                $("#airline5").val(response.airline);
            },
            error: function(ts) { alert(ts.responseText)
            }
        });
    });

    $("#tktNum6").change(function() {
        var str= $('#tktNum6').val();
        var ticket = str.toUpperCase();
        $.ajax({
            type: "POST",
            dataType: 'json',
            data: "ticket=" + ticket,
            url: "fill.php",
            success: function(response) {

                //json = $.parseJSON(response);
                $('#bookNum6').val(response.booking);
                $("#email6").val(response.email);
                $("#mobile6").val(response.mobile);
                $("#fName6").val(response.fname);
                $("#lName6").val(response.lname);
                $("#mName6").val(response.mname);
                $("#airline6").val(response.airline);
            },
            error: function(ts) { alert(ts.responseText)
            }
        });
    });

    $("#tktNum7").change(function() {
        var str= $('#tktNum7').val();
        var ticket = str.toUpperCase();
        $.ajax({
            type: "POST",
            dataType: 'json',
            data: "ticket=" + ticket,
            url: "fill.php",
            success: function(response) {

                //json = $.parseJSON(response);
                $('#bookNum7').val(response.booking);
                $("#email7").val(response.email);
                $("#mobile7").val(response.mobile);
                $("#fName7").val(response.fname);
                $("#lName7").val(response.lname);
                $("#mName7").val(response.mname);
                $("#airline7").val(response.airline);
            },
            error: function(ts) { alert(ts.responseText)
            }
        });
    });


</script>