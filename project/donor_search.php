<?php

session_start();
$host = 'localhost';
$user = 'root';
$password = '';
$errors=array();
$db = 'project';

$doctor_name = "";


if(isset ($_POST['bloodGroupSearch']))
{
$location=($_POST['location']);
$blood_group=($_POST['blood_group']);
$link = mysqli_connect($host, $user, $password, $db);


$sql = "select* from donor where adress='$location'and blood_group='$blood_group'";
$result=mysqli_query($link, $sql);
  while($row=mysqli_fetch_row($result))
 {
	$d_name=$row[1];
    $blood_group=$row[2];
    $contact=$row[3];
   $adress=$row[4];
    $gender=$row[5];
    // $email=$row[7];
    // // $password=$row[9];
    // // $Fees=$row[10];

 }
 if(mysqli_num_rows($result)!=1)
 {
	 die("This donor could not be found for this location");
 }




}
else die("You need to specify loaction and blood_group");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Doctors 24/7</title>
  <link rel = "icon" type="image/png" href="images/icon.png" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

 <link rel="stylesheet" href="css/donor.css" />
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
  <?php include'header.php'  ?>

  <div class = "container">
 <div class="col-lg-12 col-sm-12 doctor_result_div">
   <div class="row">
    <div class="col-lg-4 col-sm-4 doctor_search_left_block">
   <!-----doc pic block-------->
     <img class="img-circle search_page_doctor_image" src="images/donor.png" alt="profile pic">
     </div>
  <div class="col-lg-4 col-sm-4 doctor_search_mid_block">
        <!-----doc mid block-------->
       <p class="search_page_donor_name" style="font-size: 22px; font-weight : bold;"> <label><?php echo $d_name; ?></label></p>
       <p class="search_page_donor_blood_group" style="font-size: 16px;"> Blood Group : <?php echo $blood_group; ?></p>
   <!-- <ul style="margin-bottom: 0px !important; padding-left: 12px;">
       <li title="'.$row['spec1'].'" style="font-size: 14px;">
      '.$row['spec1'].' </li> ';
      <li title="'.$row['spec2'].'" style="font-size: 14px;">
       '.$row['spec2'].'</li> ';
      <li title="'.$row['spec3'].'" style="font-size: 14px;">
        '.$row['spec3'].'</li>
           </ul> -->
            </div>
          <div class="col-lg-4 col-sm-4 doctor_search_right_block">
             <!-----doc right block-------->
               <div class="row right_block_row">
                 <div class="col-lg-9 col-sm-9">
                   <p class="para">
                     <i class="fa fa-map-marker" aria-hidden="true">
                     </i>&nbsp;&nbsp; Address</p>
                     <p class="para1"> <?php echo $adress; ?></p>
                     <p class="para">
                       <i class="fa fa-phone" aria-hidden="true">
                       </i>&nbsp;&nbsp; Contact No. </p>
                       <p class="para1"> <?php echo $contact; ?></p>

                    </div>
                         </div>
                      </div>
                         </div>
          </div>

       </div>


  <?php include 'footer.php' ?>
  </body>
  </html>
