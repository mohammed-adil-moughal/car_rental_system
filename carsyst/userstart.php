<html>
    <head>
                <link rel="stylesheet" href="css/bootstrap.min.css">

        <?php
        session_start();
        $link = mysqli_connect("localhost", "root", "", "phpgang");
        if ($link->connect_error) {
            die("connection failed" . $link->connect_error);
        }
        
        if($_SESSION['useremail']==NULL)
            {
            echo "<script>location.assign('errorhandler.php')</script>";
            }
            else
            {
                $client = $_SESSION['useremail'];
        $sqlfetch1 = "select fname from clients where email='$client'";
        $resultfetch1 = $link->query($sqlfetch1);
        for ($i = 0; $i = $resultfetch1->fetch_assoc(); $i++) {
            $clientname = $i["fname"];
        }
        ?>
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>-->
        <link rel="stylesheet" href="css/bootstrap.min.css">
            <script src="js/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="css/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/dist/sweetalert.css">
    <script>
      
$(document).ready(function(){

$(".slidingDiv").hide();
$(".show_hide").show();

$('.show_hide').click(function(){
$(".slidingDiv").slideToggle();
});

});

        </script>
            <script >

                function show() {
                    var id = $("select[name=box1]").val();
                    $.ajax({
                        url: 'carajax.php',
                        type: 'POST',
                        data: {box1: id},
                        success: function (data) {
                            $("#model").html(data);
                        }
                    });
                }

                function show2() {
                    var id = $("select[name=comp]").val();

                    $.ajax({
                        url: 'carajax.php',
                        type: 'POST',
                        data: {comp: id},
                        success: function (data) {
                            $("#number").html(data);

                        }
                    });
                }
                 function show3() {
                    var id = $("select[name=brandad]").val();
                    $.ajax({
                        url: 'addcarajax.php',
                        type: 'POST',
                        data: {brandad: id},
                        success: function (data) {
                            $("#admodel").html(data);
                        }
                    });
                }


 function readText (form) {
    
     date1 =form.pick.value;
   
    date2 =form.drop.value;
    
    var dat1=new Date(date1);
     var dat2=new Date(date2);
    
  var oneDay = 24 * 60 * 60 * 1000;
       
        var diffDays = Math.abs((dat1.getTime() - dat2.getTime()) / (oneDay));
               
                
                 var today = new Date();
                if(today>dat1){
                    swal ("wrong pick up dates");
                    document.getElementById('pick').focus();
                    return false;
                }
               else  if(dat1>dat2) { swal("pick up is less than drop off");
               document.getElementById('drop').focus();
              return false;}
        
           
              else {
                  if(diffDays==0)
                  { swal("You have selected"+" 1 "+"days","success");
                      return true;
                  }
                  else
                  {swal("You have selected"+" "+diffDays+" "+"days","success");
                      return true;
                  }
              }
               
}

 function checkCheckBox(f){
if (f.agree.checked == false )
{
    swal("Warning", "'Please accept our terms and conditions to proceed.'", "error");

return false;
}else
return true;
}
    
    function SwapDivsWithClick(div1,div2)
{
   d1 = document.getElementById(div1);
   d2 = document.getElementById(div2);
   if( d2.style.display == "none" )
   {
      d1.style.display = "none";
      d2.style.display = "block";
   }
   else
   {
      d1.style.display = "block";
      d2.style.display = "none";
   }
}
function alert1(){alert("fucn");}

            </script>
            <style type="text/css">
                .s
                {
                    color:white;
                    font-size:0px;
                    display:none;


                }
                .left{float:left;
                      margin-left: 5px;
                      width: 400px;
                      text-align: center;
                      margin-bottom: 20px;
                      border-style: ridge;
                      
                     color: white;
                      background-color:#191919;
                       opacity: 0.90;
    filter: alpha(opacity=50);
      
                }
               #right{
                    width:700px;
                    float: right;
                    margin-right: 1%;
                    font-size: large;
                   // display: none;
                    opacity: 0.80;
                    color: white;
                    background-color: #000000;
                     
                         
                       
                }
                #scrollable {
    height:77.4%; /* or any value */
    overflow-y: auto;
    border-style: ridge;
    border-color: #8f8e8e;
    width:60%;
    margin-left: 20px;
    float: right;
    display:block;
    background-color:#191919;
    color: white;
          
               filter: alpha(opacity=60);
              // background-image: url(images/terms.png);
               background-repeat: no-repeat;
               background-size: cover;
                                 
   
}


            </style>

    </head>
    <body style="background-image: url(stylimage/grey.jpg);">
        <html xmlns="http://www.w3.org/1999/xhtml">
                <link rel="stylesheet" href="css/bootstrap.min.css">
                    <style type="text/css">
                        #client
                        {
                            border-color: red;
                            border-style: solid;
                            margin-top: 10px;
                            margin-left: 10px;
                            width: 40%;
                            text-align: center;
                            background-color: #e8e8e8


                        }
                    </style>
                    <title>Sheikh motors Bookings</title>
                    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
                    <link rel="stylesheet" href="modular-business/layout/styles/layout.css" type="text/css" />
                    <script type="text/javascript" src="modular-business/layout/scripts/jquery.min.js"></script>
                    <script type="text/javascript" src="modular-business/layout/scripts/jquery.easing.1.3.js"></script>
                    <script type="text/javascript" src="modular-business/layout/scripts/jquery.jcarousel.pack.js"></script>
                    <script type="text/javascript" src="modular-business/layout/scripts/jquery.jcarousel.setup.js"></script>



    

                <!-- ####################################################################################################### -->
                <div class="wrapper col3" style="background-color: black">
                    <div id="topnav" style="background-color: black">
                        <ul style="background-color: black">
                            <li class="active" style="background-color: black"><a href="logout.php" style="background-color: black">Log Out</a><span style="background-color: black">sheikh motors home</span></li>
                    <!--      <li><a href="pages/style-demo.html">client</a><span>Test Text Here</span></li>
                          <li><a href="pages/full-width.html">Advertise</a><span>Test Text Here</span></li>-->



                            <li ><a href="clientrecords.php" style="background-color: black">RECORDS</a><span style="background-color: black">Your booking record</span></li>
                            
                            <li ><a href="clientprofile.php" style="background-color: black">PROFILE</a><span style="background-color: black">Edit your profile</span></li>
                               <li>  <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal" style="background-color: red;"><i>Post Advert</i></button>
                                   </li>
                                  <li ><a href="manageposts.php" style="background-color: black">MANAGE</a><span style="background-color: black">Manage ads</span></li>
                        </ul> 
                        <br class="clear" />
                       
                    </div>
                  
                </div>

                <div class="wrapper col7" style="margin-bottom: 0%;background-image: url( images/ferrari.jpg);background-repeat: no-repeat;background-size: 100%" >
                  

                   
                    <div class="container" style="text-align: center;" >

                                            <h3 style="text-align: center;"><?php echo"<h6  style='font-style: oblique;border-color:black;color:whitesmoke;background-image: url(stylimage/.jpg);background-color:#191919;'><b style='margin-left:10px'>MAKE A BOOKING</b><b style='margin-left:200px'>PLEASE READ OUR TERMS AND CONDITIONS BELOW</p></h6>"?></h3>

                        <p style="color:#ccffcc ">
<div id="back">
                        <div class="left"  >


                            <form id="myform" action="#" method="post" name="myform" onsubmit="return !!( readText(this)& checkCheckBox(this))">
                                <br><strong> Category:</strong><br>
 <?php
     $link=  mysqli_connect("localhost", "root", "", "phpgang");
      $sqlw = "select * FROM categories";
         $resultw = $link->query($sqlw);
         
         echo"<select required name='box1' onchange='show()' class='form-control' style='width: 300px;text-indent: 45px;margin-left:45px' >";
          echo '<option value="">Choose category</option>';
            for ($i = 0; $i = $resultw->fetch_assoc(); $i++) {

                echo '<option style="color:black" value="' . $i["cat_id"] . '">' . $i["cat"] . '</option>';
                   }
             echo "</select>"
    ?>
<!--                                <br><strong> Category:</strong><br><select required name="box1" onchange="show()" class="form-control" style="width: 300px;text-indent: 45px;margin-left:45px" >
                                                                                        <option value="">Choose model</option>';
                                                                                        <option value="none">---select a category---</option>>
                                                                                        <option  value="sport">Sport</option>
                                                                                        <option value="luxury">Luxury</option>
                                                                                        <option value="heavy commercial">Heavy Commercial</option>
                                                                                        <option value="budget">budget</option>

                                                                                    </select><br>-->
                                                                                        <br> 
                                                                                            <label for="dept">Model:</label>
                                                                                            <div id="model"><select id="number" class="form-control" style="margin-top:0%; width: 300px;text-indent: 45px;margin-left:45px"><option disabled="">select model</select></div><br>
                                                                                                <label for="dept">Vehicle ID:</label>
                                                                                                <div id="number"><select id="number"  style="text-align: center;background-color: #C0C0C0;height:30px;width: 300px;text-indent: 45px;margin-left:45px;margin-right: 50%"><option disabled="" style="text-align: center">CLICK to SELECT</option></select></div><br>


                                <strong> Pick_up date:</strong><br><input id="pick" type="date" name="pick" placeholder="mm/dd/yy" style="width: 300px ;height: 30px;color:black" required><br><br>
                                                <strong> Pick_up location:</strong><br>
                                                    <?php
                                                    $link = mysqli_connect("localhost", "root", "", "phpgang");
                                                    if ($link->connect_error) {
                                                        die("connection failed" . $link->connect_error);
                                                    }

                                                    $sql2 = "select * FROM pick";
                                                    $result1 = $link->query($sql2);

                                                    echo'<select required ;id="pickup" name="pickup" class="form-control" style="width: 300px; text-indent: 45px;margin-left:45px">';
                                                    echo '<option value="">Choose location</option>';
                                                    for ($i = 0; $i = $result1->fetch_assoc(); $i++) {

                                                        echo '<option value="' . $i["id"] . '">' . $i["pick"] . '</option>';
                                                    }
                                                    echo "</select>"
                                                    ?>

                                                    <br> <strong>Drop Date:</strong><br><input id="drop" required type="date" name="drop" onblur="readText(this.form)" placeholder="mm/dd/yy" style="width: 300px;height: 30px;color: black"><br><br>
                                                                        <strong>Drop location:</strong><br>  
                                                                            <?php
                                                                            $sqlw = "select * FROM drop_off";
                                                                            $resultw = $link->query($sqlw);
                                                                            echo"<select required id='dropoff' name='dropoff' class='form-control' style='width: 300px;text-indent: 45px;margin-left:45px'  >";
                                                                            echo '<option value="">Choose location</option>';
                                                                            for ($i = 0; $i = $resultw->fetch_assoc(); $i++) {

                                                                                echo '<option value="' . $i["id"] . '">' . $i["drop_o"] . '</option>';
                                                                            }
                                                                            echo "</select>"
                                                                            ?>
                                                                            I have read and accept all terms and conditions: <input type="checkbox" value="0" name="agree" id="agree">

                                                                            <br>

                                                                                <input style="background-color: #999999"type="submit" name="submit" id="submit"  class="show_hide">
<!--                                                                                    <input type="submit" onclick="SwapDivsWithClick('scrollable','right')">-->
                                                                                                        </form>

  
                                                                                                        </div>


                                                                                                  </div>      
                                                                                                        <?php
                                                                                                        
                                                                                                        if (isset($_POST['submit'])) {
                                                                                                            $cat = $_POST['box1'];
                                                                                                            $pick = $_POST['pick'];
                                                                                                            $pickup = $_POST['pickup'];
                                                                                                            $drop = $_POST['drop'];
                                                                                                            $dropoff = $_POST['dropoff'];

                                                                                                            $model = $_POST['comp'];
                                                                                                            $v_id = $_POST['id'];


                                                                                                            echo"<br>";

                                                                                                            $date = date('Y-m-d ');
                                                                                                            $day = strtotime($date);
                                                                                                            $pi = strtotime($pick);
                                                                                                            $dr = strtotime($drop);
                                                                                                            echo"<br>";
                                                                                                            //  echo $date;
                                                                                                            // echo"<br>";
                                                                                                            // echo $pick;
                                                                                                            // echo"<br>";
                                                                                                            // echo $day;
                                                                                                            // echo"<br>";
                                                                                                            //  echo $pi;
//        $days_between = ceil(abs($end - $start) / 86400)
                                                                                                            $good = $pi - $day;
                                                                                                            $great = $dr - $pi;
                                                                                                            echo"<br>";
                                                                                                            // echo $good;
                                                                                                            // echo"<br>";
                                                                                                            //  echo $great;
                                                                                                            if ($good < 0) {
                                                                                                                echo"<p style='color:red;'>error select correct pick up date</p>";
                                                                                                            } elseif ($great < 0) {
                                                                                                                echo "<p style='color:red;'>error problem with drop off date</p>";
                                                                                                            } else {


                                                                                                                $diff = abs(strtotime($pick) - strtotime($drop));

                                                                                                                $years = floor($diff / (365 * 60 * 60 * 24));
                                                                                                                $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
                                                                                                                $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));

                                                                                                                $diffday = (strtotime($drop) - strtotime($pick)) / 24 / 3600;

                                                                                                                $link = mysqli_connect("localhost", "root", "", "phpgang");
                                                                                                                if ($link->connect_error) {
                                                                                                                    die("connection failed" . $link->connect_error);
                                                                                                                }

                                                                                                                $sqlrate = "select rate FROM cars WHERE model='$model' and v_id='$v_id'";
                                                                                                                $resultrate = $link->query($sqlrate);
                                                                                                                for ($i = 0; $i = $resultrate->fetch_assoc(); $i++) {
                                                                                                                    $rate = $i["rate"];
                                                                                                                }

                                                                                                                $sqllocation1 = "select pickcost FROM pick WHERE id='$pickup'";
                                                                                                                $resultlocation1 = $link->query($sqllocation1);
                                                                                                                for ($i = 0; $i = $resultlocation1->fetch_assoc(); $i++) {
                                                                                                                    $ratelocation = $i["pickcost"];
                                                                                                                }


                                                                                                                $sqllocation2 = "select dropcost FROM drop_off WHERE id='$dropoff'";
                                                                                                                $resultlocation2 = $link->query($sqllocation2);

                                                                                                                for ($i = 0; $i = $resultlocation2->fetch_assoc(); $i++) {
                                                                                                                    $ratel = $i["dropcost"];
                                                                                                                }




                                                                                                                $sqlve = "select plate FROM cars WHERE v_id='$v_id'";
                                                                                                                $resultve = $link->query($sqlve);

                                                                                                                for ($i = 0; $i = $resultve->fetch_assoc(); $i++) {
                                                                                                                    $vplate = $i["plate"];
                                                                                                                }
                                                                                                                if ($diffday == 0) {
                                                                                                                    $diffday = 1;
                                                                                                                    $days = 1;
                                                                                                                } else {
                                                                                                                    $days = $days + 1;
                                                                                                                }

                                                                                                                $cash = $rate * $diffday;
                                                                                                                $cash = $cash + $ratelocation + $ratel;

                                                                                                                ;


                                                                                                                $emailclient = $_SESSION['useremail'];
                                                                                                                $sqlfetch = "select id from clients where email='$emailclient'";
                                                                                                                $resultfetch = $link->query($sqlfetch);
                                                                                                                for ($i = 0; $i = $resultfetch->fetch_assoc(); $i++) {
                                                                                                                    $userid = $i["id"];
                                                                                                                }
                                                                                                                echo"<fieldset>";
                                                                                                                //  echo $userid;echo $v_id;echo $pick;echo $pickup;echo $drop;echo $dropoff;
                                                                                                                /////
                                                                                                                //
                                                                                                                //
                                                                                                                //
                                                                                                               //
                                                                                                              //
                                                                                                               echo "<input data-toggle='modal' data-target='#yourmodal' style='color:red' type='button' value='VIEW QUOTATION'class='show_hide' >";
                                                                                                           
                                                                                                                echo"<div  id='right' class='slidingDiv'>";

//   echo"<button onclick='document.write(' add()')'>Proceed with Booking</button>";
                                                                                                echo"<br>";

                                                                                                                $_SESSION['userid'] = $userid;
                                                                                                                $_SESSION['v_id'] = $v_id;
                                                                                                                $_SESSION['pick'] = $pick;
                                                                                                                $_SESSION['pickup'] = $pickup;
                                                                                                                $_SESSION['drop'] = $drop;
                                                                                                                $_SESSION['dropoff'] = $dropoff;
                                                                                                                $_SESSION['cash'] = $cash;
                                                                                                                $_SESSION['time'] = time();
                                                                                                                echo"Renting the vehicle for $years years,$months months,$days days will cost you.$cash Ksh only. ";
                                                                                                                echo"<p>A deposit will be required to secure your booking to paid within an hour of confirmation.</p>";
                                                                                                                echo"<p>All payments to be made via Mpesa to this number 0727768794.</p>";
                                                                                                                echo"<p>After making the payments please Call to confirm reception of the money.</p>";
                                                                                                               // echo"<br>";
                                                                                                               // echo "<strong>Vehicle category:</strong>" . $cat;
                                                                                                               // echo"<br>";
                                                                                                               // echo "<strong>Model:</strong>" . $model;
                                                                                                                echo"<br>";
                                                                                                                echo "<strong>Vehicle id:</strong>" . $v_id;
                                                                                                                echo"<br>";
                                                                                                                echo "<strong>Vehicle Number Plate:</strong>" . $vplate;
                                                                                                                echo"<br>";
                                                                                                                echo "<strong>TOTAL DAYS :</strong>" . $diffday;
                                                                                                                echo"<br>";
                                                                                                                echo "<strong>TOTAL COST :</strong>" . $cash . "KSh";

                                                                                                                echo '<br ><a href="rough.php" class="btn" style="background-color: lightgray;color:blue">Confirm </a>';

                                                                                                                      echo '&nbsp<a href="userstart.php" class="btn" style="background-color: lightgray;color:red">Cancel </a>';
                                                                                                                      
                                                                                                                echo"</div>";
                                                                                                                echo"</fieldset>";
// Or maybe pass along the session id, if needed
                                                                                                            
                                                                                                                echo '<br /><a href="rough.php?' . SID . '"></a>';
                                                                                                            }
                                                                                                        }
                                                                                                        ?>

<!--onhashchange ="SwapDivsWithClick('scrollable','right')"-->


                                                                                                        
                                                                                                      <div id="scrollable" >
                                                                                                          <I style="font-size: large"><u>TERMS AND CONDITIONS</u></I>
                           <br><br> <strong>1 DEFINITIONS AND GENERAL PRINCIPLES</strong><br>

"You" are the customer (main driver) who signed the rental agreement and who is entitled to drive the vehicle.

"Europcar" is the EUROPCAR subsidiary or franchisee named in the rental agreement.

"Vehicle" is the car or truck that Europcar is renting to you for the agreed duration of the rental agreement and will include all parts and accessories fitted to it at the commencement of the rental.

"Damage" is any damage occurring to the Vehicle (including glass, lights and mirrors) and any damage occurring to third party property where applicable.
General Rental Terms

THE FOLLOWING GENERAL RENTAL TERMS APPLY TO THE RENTAL. DEPENDING ON THE COUNTRY WHERE THE RENTAL TAKES PLACE THESE GENERAL RENTAL TERMS MAY BE SUPPLEMENTED BY CERTAIN RENTAL TERMS SPECIFIC TO THE COUNTRY. PLEASE NOTE THAT THE SPECIFIC RENTAL TERMS THAT MAY APPLY TO THE RENTAL ARE AVAILABLE IN THE SECTION SPECIFIC RENTAL TERMS PER COUNTRY. EUROPCAR STRONGLY RECOMMENDS THAT YOU CAREFULLY READ THE GENERAL RENTAL TERMS AS WELL AS THE SPECIFIC RENTAL TERMS APPLICABLE TO THE RENTAL. EUROPCAR ALSO STRONGLY RECOMMENDS THAT YOU CAREFULLY READ THE TERMS AND CONDITIONS MENTIONED ON THE RENTAL AGREEMENT THAT YOU SIGNED AT THE EUROPCAR STATION BEFORE THE CHECK-OUT. IN ORDER TO FACILITATE THE RENTAL PROCESS THE EUROPCAR TERMS AND CONDITIONS ARE AVAILABLE IN THE LOCAL LANGUAGE AND IN ENGLISH.
<br><strong>2 PREREQUISITES: WHAT DO YOU NEED IN ORDER TO RENT A VEHICLE?</strong><br>

You must hold and produce a driving licence valid in the country where the rental takes place. The driving licence must have been issued by authorised authorities at least 12 months before the date of the commencement of the rental. In addition to the normal driving licence, an international driving licence is also mandatory if the driving licence is written in a language different to the one of the renting country and/or in characters that can not be read in the renting country. Please note that the international driving licence is valid only if accompanied by the normal driving licence.

When the rental is made outside your country of residence you must also present a valid identity card or a valid passport. These identification documents are generally not requested if you are a resident of a country belonging to the European Union and the rental takes place in another European Union country, except in some specific cases such as certain special or luxury vehicles.

In most countries, you must be aged 21 or over to rent a car and have held a driving licence for at least one year. However, the age requirements may vary according to the country and to the vehicle category considered (see section ‘Specific Terms'). A young driver surcharge may be applicable in some instances (see section 3 YOUNG DRIVER SURCHARGE). The above requirements are also applicable to all additional drivers if any.

You must produce a valid credit card with an expiry date after the due check-in date or a valid Europcar charge card at pick up time. If you use a Europcar prepaid voucher as means of payment (with a specified value or the mention 'Group & Days apply'), you must also present your own credit card for those charges that have not been prepaid (such as extras, refuelling charge, excess due in the event of damage to or loss of the rented vehicle).

In some countries, for luxury and special models two credit cards (including at least one major credit card: Visa, MasterCard, American Express, Diners Club) are required and an authorisation will be requested on each. Details are available at a Reservation Service Centre or by selecting your country of destination in the " Specific Rental Terms".

Please note that Europcar accepts major credit cards such as American Express, Diners Club, Mastercard, and Visa. As certain credit card companies may not be represented in all countries, it is advisable to verify in advance the acceptance of a given card in a small or remote country (see section ‘Specific Rental Terms'). Credit cards are accepted to the limits authorised by the credit card company.

Only the lowest vehicle categories may be rented against cash or cheque payment (see section ‘Specific Rental Terms')

Please refer to the section "Prepayment Terms & Conditions" for additional information.
<br><strong>3 YOUNG DRIVER SURCHARGE</strong><br>


When renting a vehicle, a driver qualified as a "young driver" pays a specific charge (according to the Terms and Conditions of the country of rental) -  the "Young Driver Surcharge".

Terms and conditions of the applicable Young Driver Surcharge may vary from one country to another: it is therefore strongly recommended to consult the relevant terms and conditions either at time of booking online, via your local Europcar Reservation Office or at time of rental.
<br><strong>4 THE VEHICLE: CONDITION, USE, BREAKDOWN ASSISTANCE AND MAINTENANCE/MECHANICAL PROBLEMS</strong><br>

<strong> Condition of the Vehicle.</strong>

A description of the condition of the Vehicle will be given to you at the same time as the rental agreement.

Before leaving the rental location, you are required to check the condition of the Vehicle. Where an apparent defect is found which is not already listed in the document, you must immediately inform the Europcar employee at the counter in order to proceed with a joint-examination of the Vehicle.

In such a case, amendments must be made to the document and duly countersigned by both parties.

If the amended document is not countersigned by both parties, the condition of the Vehicle will be as set out in the document given to you with the rental agreement and it will be considered that you received the Vehicle in proper working condition.

You will return the Vehicle in the same condition as it was provided at the start of the rental.  You are responsible for any repair or refurbishment costs and these will be added to the cost of the rental, subject to the conditions of the section "Summary of Optional Guarantees" as set out below.


<strong> Use of the Vehicle</strong>

The Vehicle must not be driven by anyone other than you and then only under the condition that your ability to drive is not in any way impaired by mental or physical incapacity or restricted by the Law.

If you wish to take the Vehicle outside the country of rental, you must check that the Europcar Country's Terms & Conditions so permit you and, where necessary, obtain Europcar's prior written consent.

Depending on the country of rental, some restrictions may apply with respect to:
- loading the vehicle on trains, boats, ferries or similar means of transportation; - taking the vehicle from the mainland onto an island; - taking certain types of vehicles across borders. You are advised to check at the time of reservation.

Details of the restrictions which currently apply are displayed in the section ‘Specific Rental Terms' and will be given to you at the same time as the rental agreement.

You must take care of the Vehicle, keep it in good repair and condition, pay any fines for which you may be liable, reimburse Europcar for any damage to the Vehicle, and refund Europcar for any costs it incurs.

The Vehicle will be provided to you with a full fuel tank. You must only refuel the Vehicle with the correct type of fuel. Costs of fuel and for the refuelling service will be at your expense if the Vehicle is not returned with a full tank.


<strong> Maintenance / Mechanical Problems</strong>


The Vehicle has been provided to you with a full set of ties in good condition. In the event that any of them is damaged for any reason other than normal wear and tear, you undertake to replace it immediately at your own expense with a tire of the same dimensions, type and wear characteristics.

You must stop the Vehicle if any of the instrument panel warning lights, which are intended to indicate the existence of a mechanical problem, light up, or if you become aware of anything else which may indicate the presence of a mechanical problem with the Vehicle.

If the odometer has stopped functioning for any reason other than a technical failure, you will be required to pay a distance charge according to the rates in force in the country of rental.

When the rental starts, the Vehicle will be roadworthy and fit for normal use. If it is not, or if it becomes un-roadworthy or unfit for normal use during the rental because of mechanical breakdown or accident, you must inform a Europcar station or telephone the emergency number shown on the wallet of the rental agreement.

Europcar will have the choice between replacing the Vehicle or accepting repairs to be done to the Vehicle. In the latter case, repairs can only be made after written or oral confirmation from and instructions given by Europcar as well as prior acceptation by Europcar of the estimation of costs. You must be able to provide the name and station name of Europcar accepting the repairs. Without prejudice to any question of liability, the expenses for the repairs may be charged directly to Europcar. If not, Europcar reserves the right to request from you the remittance of the defective pieces and the paid invoice.

The fees and expenses of any repair undertaken without the order of Europcar will not be reimbursed to you.

You must inform Europcar, or one of its agents, of all accidents, damage to or breakdowns of the car, even those which may already have been repaired, when you return the Vehicle. You will remain liable for any damages to Europcar.

In any case, neither Europcar nor its directors, officers or employees will be liable to you for any loss or damage (including but not limited to loss of profit or earnings...) nor, to the extent permitted by the Law, for indirect consequential damages whether your action is based on contract or in tort.


<strong> Breakdown Assistance</strong>


For the length of the rental, as agreed with Europcar, you have the benefit, at no extra cost, of a Breakdown and Assistance Service. If required, this service can be contacted by calling the telephone number indicated on the wallet of the rental agreement or on the windscreen or on the key holder.

In order to benefit from this cover, you must make contact with the Breakdown and Assistance Service immediately after the occurrence of the incident. If you do not contact the Breakdown and Assistance Service and if you initiate steps or make any disbursements without the prior consent of Europcar, you will not be able to claim for reimbursement of the expenses. The rule of prior approval does not apply in the event of breakdown on motorways and solely in this case. Consequently, the roadside repair or towing expenses will be reimbursed to you.
5 RENTAL PERIOD

<strong>  Principle and Calculation<strong>


You undertake to return the Vehicle to Europcar at the agreed place, on the date and at the time indicated on the rental agreement.

The maximum duration of a rental agreement may vary from one country to another. The rental duration is calculated on the basis of indivisible periods of 24 hours, starting from the time the Vehicle is made available. However, a 30 minute grace period is applied at the end of the rental before the start of a new 24-Hour period.

If you return the Vehicle to any other Europcar rental location than the agreed location, repatriation costs will be charged to you.
  Europcar strongly recommends that you carefully read this information available at counter


<strong>  Extension of the Original Duration of the Rental</strong>



Should you wish to keep the Vehicle for a period longer than that originally set out in the rental agreement, you are must first contact by phone the nearest Europcar location in order to extend the duration of the rental agreement (depending upon the country of rental this may require you to come in person to a Europcar location).

The Vehicle is insured for the period mentioned on the rental agreement. Unless otherwise agreed in writing by Europcar, once this period is passed, the contracting party remains liable for any damages to Europcar.


<strong>Delivery and Collection Terms</strong>


Where you ask Europcar and Europcar agrees in writing to deliver the Vehicle or to collect the Vehicle, you may have to pay additional charges and follow additional instructions. You must check at the time of reservation.

When you return the Vehicle, or if Europcar has agreed you will do so, when you leave the Vehicle for collection by Europcar, you must complete the details of the date and time of return, the mileage and fuel gauge reading and other information shown on the rental document wallet. You must also do anything else, which Europcar requests as a condition of agreeing to collect the Vehicle.

You must return the Vehicle immediately if Europcar asks you to do so. In the event that the Vehicle is not delivered to Europcar upon request you hereby authorise Europcar to enter your premises and to do any and all other things necessary to repossess the Vehicle. You will be liable for any costs associated with such repossession. Europcar may repossess any vehicle without notice or liability where Europcar deems that such repossession is necessary for its own protection.


5.4 End of Rental


The end of the rental is defined by the return of the Vehicle and of its keys to the rental counter at the agreed Europcar location. This must be done to a uniformed Europcar employee and under no circumstances should you give the keys to any person present at the Europcar location and who you assume or who purports to be a Europcar employee. If explicitly mentioned in writing in the rental agreement the keys may be returned to the reception desk of a hotel.

If the Vehicle is returned without its keys, you will be invoiced for the cost of the replacement keys. Europcar strongly recommends that you carefully read this information available at counter
Under no circumstances will Europcar accept any liability for articles that may have been left in the Vehicle at the end of the rental.

IMPORTANT NOTE:
Outside the normal opening hours, depositing the keys and documents in a letter box does not constitute the end of the rental. You remain liable for any damages until a Europcar employee takes possession of the Vehicle, documents and keys when the Europcar location opens.

5.4.1  In the event of confiscation, theft or accident


In the event of measures by third parties, including attachment, confiscation or impounding of the Vehicle, you must immediately inform Europcar in writing. Europcar will then be entitled to take all measures which it deems necessary to protect its rights. You will be liable for all damage, cost and/or expenses associated with the above measures and for any direct, indirect, consequential damages (such as loss...) to the Vehicle unless it is demonstrated that Europcar is directly responsible for such confiscation or impounding of the Vehicle.

Furthermore, the rental agreement may be automatically terminated as soon as Europcar is informed of such action by the legal authorities or by you.

Any use of the Vehicle which may be detrimental to Europcar will entitle Europcar to automatically terminate the rental agreement with immediate effect. You will then return the Vehicle immediately as soon as Europcar so requests.

In the event of theft of the Vehicle, the rental agreement will be terminated as soon as Europcar has received a copy of the theft declaration made by you to the police authorities.

In the event of an accident, the rental agreement will be terminated as soon as Europcar has received a copy of the accident report completed by you and, where applicable, the third party. If Europcar provides a new vehicle, the rental agreement will be amended accordingly.

Furthermore Europcar will have no responsibility for loss, theft, robbery or damage of whatever nature relating to objects and/or utensils transported or which are found in the Vehicle including, in particular, baggage and/or goods.
6 RATES / TERMS OF PAYMENT

6.1 Rates


The total charges for each rental will be determined according to the price list applicable at the time of rental. If you do not meet the preconditions for a contractual rate, then the standard rate is to be paid.

In the event of one-way rental, the one-way rate is applicable.


6.2 Terms of Payment


When payment is made by means of a credit card, an authorisation will be requested prior to the start of the rental.

The minimum amount of the authorisation will be determined by multiplying the rate by the rental period reserved by you and other relevant charges. This amount is not debited. It is held on cardholder's bank account until the final rental charge amount is debited.

When the Vehicle is returned, the invoiced amount will be charged to the credit card provided, unless you present another means of payment.

In some countries and for some credit card types, Europcar offers a dynamic currency conversion (DCC) option to be selected at pick up time only. In such a case, you have the choice at the start date of rental to elect to pay either in the currency of the country of rental (Rental Currency) or to pay in your own credit card billing currency.
If the payment is made in the Cardholder's Billing Currency the invoiced amount will be converted by Europcar, from the Rental Currency, to the Cardholder's Billing Currency.

If for whatever reason the conversion cannot be processed by Europcar, or is declined by the cardholder at time of rental or when this DCC option is not available in the country, the transaction will be submitted in the Rental Currency and then converted afterwards according to the cardholder's bank conditions.

When payment is tendered by means of a Europcar Privilege charge card it will be accepted on and subject to the terms on which Europcar issued such card.

In the event of non-payment by the due date shown on the invoice, you will be liable, for payment of interest on the due amount in accordance with the details on the invoice, if any.

Non-payment by due date of any invoice or any other non-payment will render all outstanding invoices due immediately and will authorise Europcar to require immediate return of any vehicles still on rent and to terminate the agreements relating to such rentals.

The tariffs applicable to the rental, to the additional services and to the optional covers or insurances are those which are in force on the date of issue of the rental agreement, and correspond to the characteristics you originally indicated at the time of reservation (Vehicle type rental, duration, return station...). Any modification in the characteristics will entail the use of an appropriate alternative tariff.

Should the Vehicle not be returned with a full fuel tank, you will be charged for the missing quantity of fuel and for the refuelling service according to the tariffs in force in the country of rental, unless you have subscribed to the full tank option.

Europcar strongly recommends that you carefully read this information available at counter
7 INSURANCE

All the vehicles in Europcar's fleet are insured against Bodily Injury and/or Property Damage that you might inflict on a third party as a result of an accident involving the Vehicle. The amounts for such liability cover are available on request in the country of rental.
In particular, you must comply with the rule concerning permitted destinations, as set out in Article "use of the vehicle" above, in order to have the full benefit of the insurance provisions.

IMPORTANT NOTE:
Damage to the under body-work and/or roof due to collision with bridges, tunnels, overhanging structures etc., is excluded from the damage cover, unless force majeure can be proved. Exceptions to this regulation may apply in some countries.

7.1  Liability in the Event of Damage to the Rental Vehicle or Theft or Conversion thereof

7.1.1 You will be liable for any damages to Europcar when renting a Vehicle that has been entrusted to you.
Therefore, in the event of theft of the Vehicle or damages caused to it, you must fully indemnify Europcar (the indemnification will include the amounts corresponding to the repair costs, resale value of the Vehicle, loss of use, administration charges...).

The amount will not exceed the market value of the rented vehicle at the time of the event.

This liability may be reduced if you opted for the "reduced liability" plan as defined in Article above.

Therefore, at the end of the Rental, IN THE EVENT OF DAMAGE OR THEFT, YOU WILL BE DEBITED with an amount equal to the non-waivable excess charge according to the tariffs in force in the rental country. IN THE EVENT OF LIGHT DAMAGE, YOU WILL BE DEBITED according to the provisions of section 7.1.2.

You are advised that any waivers you may have chosen will be invalidated if you fail to take reasonable measures for the safety of the Vehicle, its parts or accessories, or fail to comply with all restrictions on the use of the Vehicle or otherwise abuse or misuse it.

You will not be exempt from liability towards Europcar in the case of breach of contract. Therefore, you will be responsible for any financial loss Europcar suffers as a result of such breach and for any relevant claims made by other people. You agree to pay any amounts Europcar spends in enforcing these terms.

THEREFORE IN ANY CASE, NEITHER EUROPCAR NOR ITS OFFICERS, DIRECTORS, EMPLOYEES WILL BE LIABLE TO THE CONTRACTING PARTY FOR ANY AMOUNTS NOR FOR ANY ACTIONS, LAW SUITS OR CLAIMS RELATED TO ANY DIRECT, INDIRECT, CONSEQUENTIAL, PUNITIVE DAMAGES (SUCH AS LOSS OF BUSINESS, LOSS OF PROFIT) ARISING OUT OF OR IN CONNECTION WITH THE RENTAL OR THE USE OF ANY VEHICLE WHEHER THE ACTION IS BASED ON CONTRACT OR IN TORT. YOU WILL INDEMNIFY AND HOLD EUROPCAR HARMLESS FROM ALL CLAIMS, LIABILITIES, DAMAGES, LOSSES OR EXPENSES ARISING OUT OF THE RENTAL AND/OR THE USE OF THE VEHICLE.

If the loss suffered by Europcar is subsequently reduced (recovery of the Vehicle within 60 days, partial or total liability on the part of the Third party), you will receive the corresponding reimbursement.

7.1.2 Light damage (valid only if applicable)

Both at check-out and check-in Europcar will, together with you, record in the rental agreement all visible light damage to a vehicle in compliance with the detailed list of light damages and repair costs displayed at the counter which you hereby acknowledge.

At check-out unrepaired damage must appear on the rental agreement with the appropriate signatures by you and Europcar. At the end of the rental i.e., at check-in, the identification of any new light damage must be added to the rental agreement. Any new light damage will be immediately pointed out to Europcar, mentioned in the rental agreement, and signed by you and Europcar. This damage will be charged to you at the repair price mentioned in the list displayed at the counter. Where this option is available, you will approve by signing electronically or by signing the relevant paper document.

These repair costs will be directly billed to you by Europcar and will include the cost of the damage repair as well as administration charges, immobilisation costs, spare parts and labour costs. The above-mentioned invoiced repair costs are payable under the same conditions as for the payment of the rental agreement.

Europcar strongly recommends that you carefully read this information available at counter


7.2 Summary of the Optional Contractual Guarantees Offered by Europcar

ALL THE FOLLOWING GUARANTEES ARE ONLY APPLICABLE FOR THE DURATION OF THE RENTAL AGREEMENT AND SUBJECT TO COMPLIANCE WITH THE REQUIREMENTS OF THE TERMS OF SECTION 4.

You acknowledge that you have read and understood the following summary of the terms relating to optional Exoneration and/or Limitation of Liability ("ELL") guarantees and that you may elect to choose any of the optional ELL guarantees by so indicating on the rental agreement.

CDW (Collision / Damage Waiver):
If chosen and indicated in the rental agreement or if included in the rate, this facility will limit your liability for any damage to the Vehicle which is not otherwise recovered from a third party, subject to the Non-Waivable Charge. Exceptions to this regulation may apply in some countries.

NWC (Non-Waivable Charge):
Fixed amount charged for every rental for which CDW has been taken out and where the Vehicle is returned damaged and the repair costs are not recovered from a third party. The amount of Non-Waivable charge may vary from time to time. Details are available at time of rental.

P.A.I (PERSONAL ACCIDENT INSURANCE):
If chosen and indicated in the rental agreement or if included in the rate, this option provides a financial indemnity for you and passengers (subject to permitted number of occupants in the vehicle) in the event of death or permanent disability. The amounts vary from country to country and may also vary depending on whether an adult or a child is involved. Similarly, Partial Disability may lead to lower payment or to no payment at all if disability percentage is below a certain threshold.

Some countries may also provide reimbursement of medical costs under this option.

The PAI coverage is provided by Insurance Company. The terms and conditions of this coverage are contained in a master policy, a copy of which is available upon request. By accepting the PAI coverage you agree to the terms and conditions of the master policy.

TW / TP (Theft Waiver / Theft Protection):
If chosen and indicated in the enrollment form or if included in the rate, this relieves you of your financial liability in the event of the Vehicle being stolen, except where incurred through negligence and/or breach of contract.

Subscribing to the CDW option alone does not necessarily provide this cover. TW may be mandatory in some countries and is strongly recommended in many countries. It may be subject to a non-waivable charge.
8 DATA PROTECTION LAW

Please note that in the course of the performance of the booking as well as the rental process, Europcar collects some personal data. It is mandatory to provide all the information requested; in the absence of such information, Europcar will not be able to correctly ensure the booking and/or the rental.

Under the French Data Protection Act, you have the right to access, update, correct or delete personal data collected by us. You may correct factual errors in that data by sending a request to us pointing out the error. You should contact our main office in the country in which you reside for information about how to exercise these rights.

In order to allow us to provide you with effective services, Europcar may from time to time transfer data collected to other companies in the EU or outside the EU. This transfer does not imply any restriction and our privacy policy will be fully applicable. By accepting these General Rental Terms, you hereby authorize Europcar International to proceed with such a transfer. 
<br>
</div>
                      
                          
                        </div>
                                                                                                    </div>
                                                                                                        </div>
 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="text-align: center;color: black">Advertisement Submission Form</h4>
        </div>
        <div class="modal-body" >
            <div id="form1" >
            
        <form action="" method="post" enctype="multipart/form-data" >
         
          
                   
                    <hr>
           
            
            <h3 style="color:black"> Make:<i style="color: red">*</i></h3>
            
            <?php
   $sqlmodeli = "select * FROM brands";
         $resultmodeli = $link->query($sqlmodeli);
         echo"<select onchange='show3()'name='brandad' required class='form-control' style='width:50%' name='make' >";
          echo '<option value="">Choose Brand</option>';
            for ($i = 0; $i = $resultmodeli->fetch_assoc(); $i++) {

                echo '<option style=color:black" value="' . $i["brand_id"] . '">' . $i["brandn"] . '</option>';
                   }
             echo "</select>"
  ?>
            <hr>
                <h3 style="color:black"> Model:<i style="color: red">*</i></h3>
            <div id="admodel"><select  required class='form-control' style='width:50%' name="title"  ><option value="">Select model</option></select></div>
             <hr>
        <h3 style="color:black"> Type of car:<i style="color: red">*</i></h3>

        <?php
        $sqltype = "select * FROM categories";
         $resulttype = $link->query($sqltype);
         
         echo"<select  required class='form-control' style='width:50%' name='type' >";
          echo '<option value="">Choose category</option>';
            for ($i = 0; $i = $resulttype->fetch_assoc(); $i++) {

                echo '<option style="color:black" value="' . $i["cat_id"] . '">' . $i["cat"] . '</option>';
                   }
             echo "</select>"?>
        <hr>
        <h3 style="color:black"> Transmission:<i style="color: red">*</i></h3><select required class="form-control" style="width:50%" name="transm" >
             <option disabled selected>select an option</option>
             <option value="Automatic">Automatic</option>
             <option value="Manual">Manual</option>
             </select>
         <hr>
                
              <h3 style="color:black"> Description:<i style="color: red">*</i></h3><textarea class="form-control" rows="5" name="description" size="50%" required ></textarea><br>
        <hr>
        <h3 style="color:black">Rate:<i style="color: red">*</i></h3><select required class="form-control" style="width:50%" name="rate"  >
            <option value="">select option</option>
            <option value="KSH/DAY">KSH/DAY</option>
            <option value="KSH/HOUR">KSH/HOUR</option>
        </select>
            <br>
         <div class="input-group">
        <div class="input-group-addon">Ksh <i style="color: red">*</i></div>
        <input class="form-control" type="text" name="shs" style="width:50%" placeholder="00.00/=" required>
        </div>
         <h3 style="color:black">Image :<i style="color: red">*</i></h3><br><input required class="form-control" type="file" name="advert" size="30">
         <br>
         <hr>
         <input type="submit" class="btn btn-default" value="POST" name="adil" style="background-color: red;color: white">
        </form>
            </div>
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
                                                                                                        </body>
                                                                                                        </html
                                                                                                        <?php

if(isset($_POST['adil']))
{ $folder = "advertcars/";
  $a=$_FILES['advert']['name'];
   $title= $_POST['title'];
   $description=$_POST['description'];
   $rate=$_POST['rate'];
   $shs=$_POST['shs'];
   $brandad=$_POST['brandad'];
   //$make=$_POST['make'];
   $type=$_POST['type'];
  $transm=$_POST['transm'];
    
  
    $link=  mysqli_connect("localhost", "root", "", "phpgang");
    $client = $_SESSION['useremail'];
$sql1="SELECT id FROM `clients` WHERE email='$client' ";
$result1=$link->query($sql1);
for($i=0;$i=$result1->fetch_assoc();$i++)
{
    $client_id=$i['id'];
}
 echo "$a";
//echo $client_id;
 if (  move_uploaded_file($_FILES["advert"]["tmp_name"] , "$folder".$_FILES["advert"]["name"]))
 { echo "<p align=center>File ".$_FILES["advert"]["name"]."_uploaded...";}
 else {echo "no uploading";}
 
$sql="INSERT INTO addetails(client_id,model,description,make,rate,shs,type,trans,image) VALUES('$client_id','$title','$description','$brandad','$rate','$shs','$type','$transm','$a')";
         if(mysqli_query($link, $sql))
            {  echo"<script>alert('Your advert has been posted')</script>";
            echo '<script language="javascript">';
echo 'alert("Your advert has been posted")';
echo '</script>';
//             echo"<script> window.location.href = 'advaddcar.php';</script>";
         
            mysqli_close($link);
            }
 else {//echo"<script>alert( 'Sorry, there was a posting your advert')</script>";
  // alert( "Sorry, there was a posting your advert'");
   echo '<script language="javascript">';
echo 'alert("Your advert has not been posted")';
echo '</script>';
 mysqli_close($link);
 } 

}

            }

?>
