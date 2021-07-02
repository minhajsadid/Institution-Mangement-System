<?php

include_once('./config/dbConnection.php');

?>
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
  <style>
table {
  border-collapse: collapse;
  border-radius: 1em;
  overflow: hidden;
}

th, td {
  padding: 1em;
  border-bottom: 2px solid white; 
}

.css-mine {
  margin-top: 2em;
  clear: both;
}

body {
  margin: 1.5em;
}
.box{
  width:74%;
  height:160px;
  background-size: cover;
  margin-left: 13%;
  opacity: .9;
  box-shadow:0px 0px 15px lightgreen;
  border-radius:12px;
   border:solid 1px #CF0403;
}
.boxtwo{
  background-size: cover;
  box-shadow:0px 0px 15px lightgreen;
   border:solid 1px #CF0403;

}
.box-cnt{

  box-shadow: 0px 0px 15px lightgreen;
  background:rgba(0,0,0,0.38);
  float:left;
  border-radius:12px;
  overflow: auto;
  height:400px;
  width:45%;
  margin: 2% 2%;
    float: left;

}
    .box-cnt-h{
        color:white;
       text-align: center;
        padding-top:2px;
        padding-bottom: 2px;
        background:#660000;
        border-radius:12px;
        
    }

    .box-table{
        color: white;
        border-collapse: collapse;
        
        box-shadow: 0px 0px 10px white;
        height: auto;
        
    }
    .box-table td,tr{
        border: 1px solid white;
    }
    
    a{
        color: black;
    }
    


  </style>
</head>
<body>
<header>
<?php include './navbar.php'; ?>
</header>

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in" >
      <div class="container">
        <h2>Government Notice</h2>
        <p>Here you get all updated government notice</p>
      </div>
    </div><!-- End Breadcrumbs -->
    
    <table class="table" style="margin-bottom: 140px;" height="180px">
    <br />
  <thead class="thead-dark">
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Title</th>
      <th scope="col">Date</th>
      <th scope="col">Download link</th>
    </tr>
  </thead>
  <tbody>
    <?php
     $data=mysqli_query($conn,"SELECT * FROM tbnotice");
     $sum=1;
     while($row = mysqli_fetch_array($data))
      {  
        echo "<tr>";
        $file= $row["filepath"];
        $lg2="<a href='./notice/$file'>";
        echo "<td>" ;echo $sum; echo "</td>";
        echo "<td>" ;echo $row["titile"]; echo "</td>";
        echo "<td>" ;echo $row["date"]; echo "</td>";
        echo "<td>"; echo "$lg2";echo $row["filepath"]; echo "</a>"; echo "</td>";
        echo "</tr>";
        $sum= $sum+1;
      }
    
    ?>

  </tbody>
</table>



  <footer id="footer">
    <div class="container d-md-flex py-3">

<div class="mr-md-auto text-center text-md-left ">
  <div class="copyright">
    &copy; Copyright <strong><span>Institutions Information System</span></strong>. All Rights Reserved
  </div>

</div>
<div class="social-links text-center text-md-right">
  <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
  <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
  <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
  <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
  <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
</div>
</div>
</footer><!-- End Footer -->




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