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
    <div class="breadcrumbs" data-aos="fade-in" >
      <div class="container">
        <h4>All Contact Info</h4>
      </div>
    </div><!-- End Breadcrumbs -->
    
    <table class="table" style="margin-bottom: 140px;" height="180px">
    <br />
  <thead class="thead-dark">
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Title</th>
      <th scope="col">Message</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
    <?php
     $data=mysqli_query($conn,"SELECT * FROM tbcontact");
     $sum=1;
     while($row = mysqli_fetch_array($data))
      {  
        echo "<tr>";

        echo "<td>" ;echo $sum; echo "</td>";
        echo "<td>" ;echo $row["subject"]; echo "</td>";
        echo "<td>" ;echo $row["message"]; echo "</td>";
        echo "<td>" ;echo $row["name"]; echo "</td>";
        echo "<td>" ;echo $row["email"]; echo "</td>";
        echo "<td>" ;echo $row["dateTime"]; echo "</td>";
        echo "</tr>";
        $sum= $sum+1;
      }
    
    ?>

  </tbody>
</table>





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