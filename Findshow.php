<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.checked{
color: orange;
}
</style>

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

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2 style="padding-top:7px;">Search result based on your location</h2>
      </div>
      </div>
      <section id="popular-courses" class="courses">
    <div class="container" data-aos="fade-up">
      <div class="row" data-aos="zoom-in" data-aos-delay="100">
    <!-- End Breadcrumbs -->
   

  
  

  <?php

if(isset($_POST['u_btn'])){
  
  
  $sub=$_POST['sub'];
  $select=$_POST['select'];
  

  $sql="SELECT * FROM tbratings where tblocation='$sub' AND types='$select' ORDER BY tbratting DESC";
  $result = mysqli_query($conn, $sql);
  if ($result->num_rows > 0) {    // output data of each row
  while ($row=mysqli_fetch_array($result)){
      $name=$row['i_name'];
    $area=$row['tblocation'];
     $type=$row['types'];
     $image = (!empty($row['tbimage'])) ? 'upload/'.$row['tbimage'] : 'upload/noimage.jpg';
      $percentage=$row["tbratting"];
     $about= $row["tbabout"];
     ?>
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="course-item">


     <?php
      
    echo " 
         
            
             <img src='".$image."' width='100%' height='230px' class='thumbnail'> ";


?>

            <div class="course-content">
              <div class="d-flex justify-content-between align-items-center mb-3">
              <h4>Rating</h4>
                <p class="price"> 
      <?php
                            
            
                            if($percentage >=50 && $percentage<60) {
                              ?>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star "></span>
                              <?php
                              }
                              ?>
                              
                              <?php
                              if($percentage>=60 && $percentage<70)
                              {
                              ?>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <?php
                              }
                              ?>
                              
                              <?php
                              if($percentage>=70 && $percentage<80)
                              {
                              ?>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <?php
                              }
                              ?>
                              <?php
                              if($percentage>=80 && $percentage<90)
                              
                              {
                              ?>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star"></span>
                              <?php
                              }
                              ?>
                              <?php
                              if($percentage>=90 && $percentage<100)
                              {
                              ?>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <?php
                              }
                              ?>
              </p>
              </div>
             
              <?php
             
            
  
              echo '<h3><a href="institution.php?title=' .$name.'"> ' .$name.'</a></h3>';
               
                  
              
              ?>

                      
            

              <p>
              <?php
            
                  echo $about. "<br> ";
          
              ?>
               </p>

               <div class="trainer d-flex justify-content-between align-items-center">
                <div class="trainer-profile d-flex align-items-center">
                  <!-- <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt=""> -->
                  <i class="icofont-google-map" style="color: #5fcf80;"></i>
                  <span style="color: #5fcf80;">Location</span>
                </div>
                <div class="trainer-rank d-flex align-items-center">
                  <!-- <i class="bx bx-user"></i>&nbsp;50
                  &nbsp;&nbsp;
                  <i class="bx bx-heart"></i> -->
                  <span>
                  <?php
             
                  echo  $area. "<br> ";
               
              ?>
                  </span>&nbsp;
                </div>
              </div>
            </div>
          </div>
        </div> 
                <!-- End Course Item -->

        <!-- End Popular Courses Section -->
      
<?php  
}
  }
else
{
  //$my_centered_word="Sorry! No Result Found";
  echo " </br> </br> </br> </br> <h1>Sorry! No Result Found</h1> </br> </br> </br> </br> </br></br>";
   //echo “<div align=’center’>Sorry! No Result Found</div>”; 
  // echo '<div align=”center”>' .$my_centered_word. '</div>';
}
}
else {
  echo " find error";
}

?>


</div>
    </div>
</section>



    

    <!-- ======= Cource Details Section ======= -->
   



    <footer id="footer">
    <div class="container d-md-flex py-4">

<div class="mr-md-auto text-center text-md-left pt-3">
  <div class="copyright">
    &copy; Copyright <strong><span>Institutions Information System</span></strong>. All Rights Reserved
  </div>

</div>
<div class="social-links text-center text-md-right pt-3 pt-md-0">
  <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
  <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
  <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
  <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
  <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
</div>
</div>
</footer><!-- End Footer -->




-  <!-- Vendor JS Files -->
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