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
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Welecome To,<br>Institutions Information System</h1>
      <h2>We provies the Information about school, madrasha and college</h2>
      <a href="findout.php" class="btn-get-started">Find Out</a>
    </div>
  </section><!-- End Hero -->


<!-- ======= Best School Section  ======= -->
<section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Schools</h2>
          <p>Best Schools</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">

            <?php
                $query="SELECT tbimage FROM tbratings where types='School' ORDER BY tbratting DESC LIMIT 1 OFFSET 0";
                $result=mysqli_query($conn,$query);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    $image=$row["tbimage"];
                  
                
                    
                  }
                } else {
                  echo "0 results";
                }
                ?>
                  <img src="./upload/<?php echo $image ?>" class="img-fluid" alt="">
            



              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Rating</h4>
                  <p class="price">
                  <?php
                $query="SELECT tbratting FROM tbratings where types='School' ORDER BY tbratting DESC LIMIT 1 OFFSET 0";
                $result=mysqli_query($conn,$query);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    $percentage=$row["tbratting"];


                  }
                } else {
                  echo "0 results";
                }
                ?>

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
                $query="SELECT i_name FROM tbratings where types='School' ORDER BY tbratting DESC LIMIT 1 OFFSET 0";
                $result=mysqli_query($conn,$query);
                
               

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
    
                echo '<h3><a href="institution.php?title=' . $row['i_name'] . '"> ' . $row['i_name'] . '</a></h3>';
                 
                    
                  }
                } else {
                  echo "0 results";
                }
                ?>

                        
              

                <p>
                <?php
                $query="SELECT tbabout FROM tbratings where types='School' ORDER BY tbratting DESC LIMIT 1 OFFSET 0";
                $result=mysqli_query($conn,$query);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    echo $row["tbabout"]. "<br> ";
                    
                  }
                } else {
                  echo "0 results";
                }
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
                $query="SELECT tblocation FROM tbratings where types='School' ORDER BY tbratting DESC LIMIT 1 OFFSET 0";
                $result=mysqli_query($conn,$query);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    echo $row["tblocation"]. "<br> ";
                  }
                } else {
                  echo "0 results";
                }
                ?>
                    </span>&nbsp;
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="course-item">
            <?php
                $query="SELECT tbimage FROM tbratings where types='School' ORDER BY tbratting DESC LIMIT 1 OFFSET 1";
                $result=mysqli_query($conn,$query);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    $image=$row["tbimage"];
                  
                
                    
                  }
                } else {
                  echo "0 results";
                }
                ?>
                <img src="./upload/<?php echo $image ?>" class="img-fluid" alt="">

               



            
             
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                <h4>Rating</h4>
                <p class="price">
                  <?php
                $query="SELECT tbratting FROM tbratings where types='School' ORDER BY tbratting DESC LIMIT 1 OFFSET 1";
                $result=mysqli_query($conn,$query);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    $percentage=$row["tbratting"];


                  }
                } else {
                  echo "0 results";
                }
                ?>

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

                <h3><a href="D:\xammp\htdocs\Mentor\institution.php">
                <?php
                $query="SELECT i_name FROM tbratings where types='School' ORDER BY tbratting DESC LIMIT 1 OFFSET 1";
                $result=mysqli_query($conn,$query);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {

                    echo '<h3><a href="institution.php?title=' . $row['i_name'] . '"> ' . $row['i_name'] . '</a></h3>';
                  }
                } else {
                  echo "0 results";
                }
                ?>
                </a></h3>
                
                <p>
                <?php
                $query="SELECT tbabout FROM tbratings where types='School' ORDER BY tbratting DESC LIMIT 1 OFFSET 1";
                $result=mysqli_query($conn,$query);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    echo $row["tbabout"]. "<br> ";
                  }
                } else {
                  echo "0 results";
                }
                ?>
                 </p>

                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <!-- <img src="assets/img/trainers/trainer-2.jpg" class="img-fluid" alt=""> -->
                    <i class="icofont-google-map" style="color: #5fcf80;"></i>
                    <span style="color: #5fcf80;">Location</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                   <!-- <i class="bx bx-user"></i>&nbsp;50
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i> -->
                    <span>
                    <?php
                $query="SELECT tblocation FROM tbratings where types='School' ORDER BY tbratting DESC LIMIT 1 OFFSET 1";
                $result=mysqli_query($conn,$query);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    echo $row["tblocation"]. "<br> ";
                  }
                } else {
                  echo "0 results";
                }
                ?>
                    </span>&nbsp;
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="course-item">
            <?php
                $query="SELECT tbimage FROM tbratings where types='School' ORDER BY tbratting DESC LIMIT 1 OFFSET 2";
                $result=mysqli_query($conn,$query);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    $image=$row["tbimage"];
                  echo "<img src='./upload/$image' width='100%' height='230px' class='thumbnail'>" ;
                    
                  }
                } else {
                  echo "0 results";
                }
                ?>


              
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                <h4>Rating</h4>
                <p class="price">
                  <?php
                $query="SELECT tbratting FROM tbratings where types='School' ORDER BY tbratting DESC LIMIT 1 OFFSET 2";
                $result=mysqli_query($conn,$query);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    $percentage=$row["tbratting"];


                  }
                } else {
                  echo "0 results";
                }
                ?>

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

                <h3><a href="D:\xammp\htdocs\Mentor\institution.php">
                <?php
                $query="SELECT i_name FROM tbratings where types='School' ORDER BY tbratting DESC LIMIT 1 OFFSET 2";
                $result=mysqli_query($conn,$query);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                     echo '<h3><a href="institution.php?title=' . $row['i_name'] . '"> ' . $row['i_name'] . '</a></h3>';
                  }
                } else {
                  echo "0 results";
                }
                ?>
                </a></h3>
                
                <p>
                <?php
                $query="SELECT tbabout FROM tbratings where types='School' ORDER BY tbratting DESC LIMIT 1 OFFSET 2";
                $result=mysqli_query($conn,$query);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    echo $row["tbabout"]. "<br> ";
                  }
                } else {
                  echo "0 results";
                }
                ?>
                 </p>




                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <!-- <img src="assets/img/trainers/trainer-3.jpg" class="img-fluid" alt=""> -->
                    <i class="icofont-google-map" style="color: #5fcf80;"></i>
                    <span style="color: #5fcf80;">Location</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                      <!-- <i class="bx bx-user"></i>&nbsp;50
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i> -->
                    <span> <?php
                $query="SELECT * FROM tbratings where types='School' ORDER BY tbratting DESC LIMIT 1 OFFSET 2";
                $result=mysqli_query($conn,$query);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                     $type= $row["types"];
                    echo $row["tblocation"]. "<br> ";
                  }
                } else {
                  echo "0 results";
                }
                ?>
                    </span>&nbsp;
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

        </div>

      </div>
    </section><!-- End Popular Courses Section -->
   <?php //<a href="view all.php?title=' .$type . '"> class="learn-more-btn"><p style="text-align:center"><font size="+3">Get Top 12 School Details</font></a>
    echo '<h3><a href="view school.php?type=' .$type. '">  <p style="text-align:center"><font size="+3">View all school</font></a> </a></h3>';
?>


<!-- ======= Best College Section  ======= -->
<section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Colleges</h2>
          <p>Best Colleges</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">

            <?php
                $query="SELECT tbimage FROM tbratings where types='College' ORDER BY tbratting DESC LIMIT 1 OFFSET 0";
                $result=mysqli_query($conn,$query);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    $image=$row["tbimage"];
                  echo "<img src='./upload/$image' weight='150' height='200'>" ;
                
                    
                  }
                } else {
                  echo "0 results";
                }
                ?>
            



              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Rating</h4>
                  <p class="price">
                  <?php
                $query="SELECT tbratting FROM tbratings where types='College' ORDER BY tbratting DESC LIMIT 1 OFFSET 0";
                $result=mysqli_query($conn,$query);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    $percentage=$row["tbratting"];


                  }
                } else {
                  echo "0 results";
                }
                ?>

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

                <h3><a href="D:\xammp\htdocs\Mentor\institution.php">
                <?php
                $query="SELECT i_name FROM tbratings where types='College' ORDER BY tbratting DESC LIMIT 1 OFFSET 0";
                $result=mysqli_query($conn,$query);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    echo '<h3><a href="institution.php?title=' . $row['i_name'] . '"> ' . $row['i_name'] . '</a></h3>';
                  }
                } else {
                  echo "0 results";
                }
                ?>
                </a></h3>

                <p>
                <?php
                $query="SELECT tbabout FROM tbratings where types='College' ORDER BY tbratting DESC LIMIT 1 OFFSET 0";
                $result=mysqli_query($conn,$query);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    echo $row["tbabout"]. "<br> ";
                  }
                } else {
                  echo "0 results";
                }
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
                $query="SELECT tblocation FROM tbratings where types='College' ORDER BY tbratting DESC LIMIT 1 OFFSET 0";
                $result=mysqli_query($conn,$query);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    echo $row["tblocation"]. "<br> ";
                  }
                } else {
                  echo "0 results";
                }
                ?>
                    </span>&nbsp;
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="course-item">
            <?php
                $query="SELECT tbimage FROM tbratings where types='College' ORDER BY tbratting DESC LIMIT 1 OFFSET 1";
                $result=mysqli_query($conn,$query);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    $image=$row["tbimage"];
                  echo "<img src='./upload/$image' weight='150' height='200'>" ;
                
                    
                  }
                } else {
                  echo "0 results";
                }
                ?>

               



            
             
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                <h4>Rating</h4>
                <p class="price">
                  <?php
                $query="SELECT tbratting FROM tbratings where types='College' ORDER BY tbratting DESC LIMIT 1 OFFSET 1";
                $result=mysqli_query($conn,$query);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    $percentage=$row["tbratting"];


                  }
                } else {
                  echo "0 results";
                }
                ?>

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

                <h3><a href="D:\xammp\htdocs\Mentor\institution.php">
                <?php
                $query="SELECT i_name FROM tbratings where types='College' ORDER BY tbratting DESC LIMIT 1 OFFSET 1";
                $result=mysqli_query($conn,$query);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    echo '<h3><a href="institution.php?title=' . $row['i_name'] . '"> ' . $row['i_name'] . '</a></h3>';
                  }
                } else {
                  echo "0 results";
                }
                ?>
                </a></h3>
                
                <p>
                <?php
                $query="SELECT tbabout FROM tbratings where types='College' ORDER BY tbratting DESC LIMIT 1 OFFSET 1";
                $result=mysqli_query($conn,$query);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    echo $row["tbabout"]. "<br> ";
                  }
                } else {
                  echo "0 results";
                }
                ?>
                 </p>

                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <!-- <img src="assets/img/trainers/trainer-2.jpg" class="img-fluid" alt=""> -->
                    <i class="icofont-google-map" style="color: #5fcf80;"></i>
                    <span style="color: #5fcf80;">Location</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                   <!-- <i class="bx bx-user"></i>&nbsp;50
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i> -->
                    <span>
                    <?php
                $query="SELECT tblocation FROM tbratings where types='College' ORDER BY tbratting DESC LIMIT 1 OFFSET 1";
                $result=mysqli_query($conn,$query);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    echo $row["tblocation"]. "<br> ";
                  }
                } else {
                  echo "0 results";
                }
                ?>
                    </span>&nbsp;
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="course-item">
            <?php
                $query="SELECT tbimage FROM tbratings where types='College' ORDER BY tbratting DESC LIMIT 1 OFFSET 2";
                $result=mysqli_query($conn,$query);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    $image=$row["tbimage"];
                  echo "<img src='./upload/$image' weight='150' height='200'>" ;
                    
                  }
                } else {
                  echo "0 results";
                }
                ?>


              
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                <h4>Rating</h4>
                <p class="price">
                  <?php
                $query="SELECT tbratting FROM tbratings where types='College' ORDER BY tbratting DESC LIMIT 1 OFFSET 2";
                $result=mysqli_query($conn,$query);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    $percentage=$row["tbratting"];


                  }
                } else {
                  echo "0 results";
                }
                ?>

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

                <h3><a href="D:\xammp\htdocs\Mentor\institution.php">
                <?php
                $query="SELECT i_name FROM tbratings where types='College' ORDER BY tbratting DESC LIMIT 1 OFFSET 2";
                $result=mysqli_query($conn,$query);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    echo '<h3><a href="institution.php?title=' . $row['i_name'] . '"> ' . $row['i_name'] . '</a></h3>';
                  }
                } else {
                  echo "0 results";
                }
                ?>
                </a></h3>
                
                <p>
                <?php
                $query="SELECT tbabout FROM tbratings where types='College' ORDER BY tbratting DESC LIMIT 1 OFFSET 2";
                $result=mysqli_query($conn,$query);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    echo $row["tbabout"]. "<br> ";
                  }
                } else {
                  echo "0 results";
                }

                ?>
                 </p>




                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <!-- <img src="assets/img/trainers/trainer-3.jpg" class="img-fluid" alt=""> -->
                    <i class="icofont-google-map" style="color: #5fcf80;"></i>
                    <span style="color: #5fcf80;">Location</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                      <!-- <i class="bx bx-user"></i>&nbsp;50
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i> -->
                    <span> <?php
                $query="SELECT * FROM tbratings where types='College' ORDER BY tbratting DESC LIMIT 1 OFFSET 2";
                $result=mysqli_query($conn,$query);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                     $type1= $row['types'];
                    echo $row["tblocation"]. "<br> ";
                  }
                } else {
                  echo "0 results";
                }
                ?>
                    </span>&nbsp;
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

        </div>

      </div>
    </section><!-- End Popular Courses Section -->

   
    <a href="view college.php" class="learn-more-btn"><h2 style="text-align:center"><font size="+3">View all College</h2></font></a>


<!-- ======= Best Madrasha Section  ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Madrashas</h2>
          <p>Best Madrashas</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="course-item">

            <?php
                $query="SELECT tbimage FROM tbratings where types='Madrasha' ORDER BY tbratting DESC LIMIT 1 OFFSET 0";
                $result=mysqli_query($conn,$query);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    $image=$row["tbimage"];
                  echo "<img src='./upload/$image' width='100%' height='230px' class='thumbnail'>" ;
                    
                  }
                } else {
                  echo "0 results";
                }
                ?>
            



              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Rating</h4>
                  <p class="price">
                  <?php
                $query="SELECT tbratting FROM tbratings where types='Madrasha' ORDER BY tbratting DESC LIMIT 1 OFFSET 0";
                $result=mysqli_query($conn,$query);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    $percentage=$row["tbratting"];


                  }
                } else {
                  echo "0 results";
                }
                ?>

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

                <h3><a href="D:\xammp\htdocs\Mentor\institution.php">
                <?php
                $query="SELECT i_name FROM tbratings where types='Madrasha' ORDER BY tbratting DESC LIMIT 1 OFFSET 0";
                $result=mysqli_query($conn,$query);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    echo '<h3><a href="institution.php?title=' . $row['i_name'] . '"> ' . $row['i_name'] . '</a></h3>';
                  }
                } else {
                  echo "0 results";
                }
                ?>
                </a></h3>

                <p>
                <?php
                $query="SELECT tbabout FROM tbratings where types='Madrasha' ORDER BY tbratting DESC LIMIT 1 OFFSET 0";
                $result=mysqli_query($conn,$query);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    echo $row["tbabout"]. "<br> ";
                  }
                } else {
                  echo "0 results";
                }
                ?>
                 </p>

                
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <!-- <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt=""> -->
                    <i class="icofont-google-map" style="color: #5fcf80;"></i>
                    <span style="color: #5fcf80;">Location</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                  
                    <span>
                    <?php
                $query="SELECT tblocation FROM tbratings where types='Madrasha' ORDER BY tbratting DESC LIMIT 1 OFFSET 0";
                $result=mysqli_query($conn,$query);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    echo $row["tblocation"]. "<br> ";
                  }
                } else {
                  echo "0 results";
                }
                ?>
                    </span>&nbsp;
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="course-item">
            <?php
                $query="SELECT tbimage FROM tbratings where types='Madrasha' ORDER BY tbratting DESC LIMIT 1 OFFSET 1";
                $result=mysqli_query($conn,$query);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    $image=$row["tbimage"];
                  echo "<img src='./upload/$image' width='100%' height='230px' class='thumbnail'>" ;
                
                    
                  }
                } else {
                  echo "0 results";
                }
                ?>

               



            
             
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                <h4>Rating</h4>
                <p class="price">
                  <?php
                $query="SELECT tbratting FROM tbratings where types='Madrasha' ORDER BY tbratting DESC LIMIT 1 OFFSET 1";
                $result=mysqli_query($conn,$query);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    $percentage=$row["tbratting"];


                  }
                } else {
                  echo "0 results";
                }
                ?>

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

                <h3><a href="D:\xammp\htdocs\Mentor\institution.php">
                <?php
                $query="SELECT i_name FROM tbratings where types='Madrasha' ORDER BY tbratting DESC LIMIT 1 OFFSET 1";
                $result=mysqli_query($conn,$query);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    echo '<h3><a href="institution.php?title=' . $row['i_name'] . '"> ' . $row['i_name'] . '</a></h3>';
                  }
                } else {
                  echo "0 results";
                }
                ?>
                </a></h3>
                
                <p>
                <?php
                $query="SELECT tbabout FROM tbratings where types='Madrasha' ORDER BY tbratting DESC LIMIT 1 OFFSET 1";
                $result=mysqli_query($conn,$query);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    echo $row["tbabout"]. "<br> ";
                  }
                } else {
                  echo "0 results";
                }
                ?>
                 </p>

                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <!-- <img src="assets/img/trainers/trainer-2.jpg" class="img-fluid" alt=""> -->
                    <i class="icofont-google-map" style="color: #5fcf80;"></i>
                    <span style="color: #5fcf80;">Location</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                   <!-- <i class="bx bx-user"></i>&nbsp;50
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i> -->
                    <span>
                    <?php
                $query="SELECT tblocation FROM tbratings where types='Madrasha' ORDER BY tbratting DESC LIMIT 1 OFFSET 1";
                $result=mysqli_query($conn,$query);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    echo $row["tblocation"]. "<br> ";
                  }
                } else {
                  echo "0 results";
                }
                ?>
                    </span>&nbsp;
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="course-item">
            <?php
                $query="SELECT tbimage FROM tbratings where types='Madrasha' ORDER BY tbratting DESC LIMIT 1 OFFSET 2";
                $result=mysqli_query($conn,$query);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    $image=$row["tbimage"];
                  
                  echo "<img src='./upload/$image' width='100%' height='230px' class='thumbnail'> ";
                    
                  }
                } else {
                  echo "0 results";
                }
                ?>


              
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                <h4>Rating</h4>
                <p class="price">
                  <?php
                $query="SELECT tbratting FROM tbratings where types='Madrasha' ORDER BY tbratting DESC LIMIT 1 OFFSET 2";
                $result=mysqli_query($conn,$query);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    $percentage=$row["tbratting"];


                  }
                } else {
                  echo "0 results";
                }
                ?>

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

                <h3><a href="D:\xammp\htdocs\Mentor\institution.php">
                <?php
                $query="SELECT i_name FROM tbratings where types='Madrasha' ORDER BY tbratting DESC LIMIT 1 OFFSET 2";
                $result=mysqli_query($conn,$query);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    echo '<h3><a href="institution.php?title=' . $row['i_name'] . '"> ' . $row['i_name'] . '</a></h3>';
                  }
                } else {
                  echo "0 results";
                }
                ?>
                </a></h3>
                
                <p>
                <?php
                $query="SELECT tbabout FROM tbratings where types='Madrasha' ORDER BY tbratting DESC LIMIT 1 OFFSET 2";
                $result=mysqli_query($conn,$query);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    echo $row["tbabout"]. "<br> ";
                  }
                } else {
                  echo "0 results";
                }
                ?>
                 </p>




                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <!-- <img src="assets/img/trainers/trainer-3.jpg" class="img-fluid" alt=""> -->
                    <i class="icofont-google-map" style="color: #5fcf80;"></i>
                    <span style="color: #5fcf80;">Location</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                      <!-- <i class="bx bx-user"></i>&nbsp;50
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i> -->
                    <span> <?php
                $query="SELECT * FROM tbratings where types='Madrasha' ORDER BY tbratting DESC LIMIT 1 OFFSET 2";
                $result=mysqli_query($conn,$query);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                   
                    echo $row["tblocation"]. "<br> ";
                    $type2= $row['types'];
                  }
                } else {
                  echo "0 results";
                }
                ?>
                    </span>&nbsp;
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

        </div>

      </div>
    </section><!-- End Popular Courses Section -->


    <a href="view madrasha.php" class="learn-more-btn"><h2 style="text-align:center">View all Madrasha</h2></a>

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
</footer>
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



