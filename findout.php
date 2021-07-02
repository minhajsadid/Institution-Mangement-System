<?php

include_once('./config/dbConnection.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>IIS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

<header>
  <?php include './navbar.php'; ?>
  </header>
  <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2 style="padding-top:7px;">Find out institution based on your location</h2>
      </div>
      </div>


      <section id="contact" class="contact mb-5">
    <div class="col-lg-11 mt-5  ml-5 ">

<form action="Findshow.php" method="POST" >
  <div class="form-row">
  <div class="col-md-6 form-group">       
        <select class="form-control"  name="sub" id="sub"  required="" data-parsley-trigger="keyup">
        <option selected Value="">Please select area</option>          
            <?php  
            
             $sql="SELECT area FROM tbarea";
             $result = mysqli_query($conn, $sql);
             while ($row=mysqli_fetch_array($result)){
                 $name=$row['area'];
                echo '<option value="'.$name.'" >'.$name.' </option>';
                
             }

            
            ?>
        </select>
        <div class="validate"></div>
    </div>
    <div class="col-md-6 form-group">       
        <select class="form-control" required="" data-parsley-trigger="keyup" name="select" id="select" data-parsley-message="Please select institution">
            <option value="">Select institution Types</option>
            <option value="School">School</option>
            <option value="Madrasha">Madrasha</option>
            <option value="College">College</option>  
        </select>
        <div class="validate"></div>
    </div>
    <div class="text-center col-md-12" ><input type="submit" id="submit" name="u_btn" value="Find" class="btn btn-success w-25" /></div>
    </form>

</div>
    </section>




    </div><!-- End Breadcrumbs -->
  





  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>






