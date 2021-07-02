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
  <style>
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
        color: white;
    }
    
    
    </style>
    
</head>

<body>
<header>
  <?php include './navbar.php'; ?>
  </header>
<main>
<div class="boxtwo" style="border-radius: 10px;width:73.5%; height:900px; margin-left:13%;margin-top:100px;background-color:white">
      
      
      
      
      <div class="box-cnt">
        <h3 class="box-cnt-h">HSC</h3>
           <table class="table box-table">
                  <tr class="thead-dark">
                      <th scope="col">Book Title</th>
                      <th scope="col">Year</th>
                       <th scope="col">Download Link</th>
                  </tr>
                 
              <?php  $data=mysqli_query($conn,"SELECT * FROM tbbooks");
                    while($row = mysqli_fetch_array($data))
                     {   
                        if($row["class"]=="HSC"){
                          $bookid_tt= $row["bookpath"];
                          $lg2="<a href='./books/$bookid_tt'>";
                          echo "<tr>";
                          echo "<td>" ;echo $row["bookTitile"]; echo "</td>";
                          echo "<td>"; echo $row["year"]; echo "</td>";
                          echo "<td>"; echo "$lg2";echo $row["bookpath"]; echo "</a>"; echo "</td>";
                          echo "</tr>";
                            $bookid_cse=NULL;
                        }
                      }
  
                  ?>
                  </table>
            
  
      </div>
  
      <div class="box-cnt">
        <h3 class="box-cnt-h">SSC</h3>
          
          <table class="box-table table">
                <tr class="thead-dark">
                      <th scope="col">Book Title</th>
                      <th scope="col">Year</th>
                       <th scope="col">Download Link</th>
                  </tr>
                 
                  <?php  $data=mysqli_query($conn,"SELECT * FROM tbbooks");
                    while($row = mysqli_fetch_array($data))
                     {   
                        if($row["class"]=="Ten"){
                          $bookid_tt= $row["bookpath"];
                          $lg2="<a href='./books/$bookid_tt'>";
                          echo "<tr>";
                          echo "<td>" ;echo $row["bookTitile"]; echo "</td>";
                          echo "<td>"; echo $row["year"]; echo "</td>";
                          echo "<td>"; echo "$lg2";echo $row["bookpath"]; echo "</a>"; echo "</td>";
                          echo "</tr>";
                            $bookid_cse=NULL;
                        }
                      }
  
                  ?>
                  </table>
  
  
      </div>

      
        <br/clear="all">
  
      <div class="box-cnt">
        <h3 class="box-cnt-h">JSC</h3>
          
          <table class="table box-table">
          <tr class="thead-dark">
                      <th scope="col">Book Title</th>
                      <th scope="col">Year</th>
                       <th scope="col">Download Link</th>
                  </tr>
                 
                  <?php  $data=mysqli_query($conn,"SELECT * FROM tbbooks");
                    while($row = mysqli_fetch_array($data))
                     {   
                        if($row["class"]=="Eight"){
                          $bookid_tt= $row["bookpath"];
                          $lg2="<a href='./books/$bookid_tt'>";
                          echo "<tr>";
                          echo "<td>" ;echo $row["bookTitile"]; echo "</td>";
                          echo "<td>"; echo $row["year"]; echo "</td>";
                          echo "<td>"; echo "$lg2";echo $row["bookpath"]; echo "</a>"; echo "</td>";
                          echo "</tr>";
                            $bookid_cse=NULL;
                        }
                      }
  
                  ?>
                  </table>
  
  
      </div>
  
      <div class="box-cnt">
        <h3 class="box-cnt-h">PSC</h3>
          
          
          <table class="table box-table">
                  <tr class="thead-dark">
                      <th scope="col">Book Title</th>
                      <th scope="col">Year</th>
                       <th scope="col">Download Link</th>
                  </tr>
                 
                  <?php  $data=mysqli_query($conn,"SELECT * FROM tbbooks");
                    while($row = mysqli_fetch_array($data))
                     {   
                        if($row["class"]=="Five"){
                          $bookid_tt= $row["bookpath"];
                          $lg2="<a href='./books/$bookid_tt'>";
                          echo "<tr>";
                          echo "<td>" ;echo $row["bookTitile"]; echo "</td>";
                          echo "<td>"; echo $row["year"]; echo "</td>";
                          echo "<td>"; echo "$lg2";echo $row["bookpath"]; echo "</a>"; echo "</td>";
                          echo "</tr>";
                            $bookid_cse=NULL;
                        }
                      }
  
                  ?>
                  </table>
  
  
      </div>
      </br/clear>
  
  
    </div>
  
        <div class="boxthree" style="background-color: #5fcf80; border:solid 2px orange;border-radius: 10px; width:73.5%; height:40px; margin-left:13%; margin-top:15px" >
          <marquee behavior="alternate" direction="right" loop="1" style="margin-right:38%;"><h6 class="mt-2">Thank You For Using This System.</h6></marquee>
  
  
        </div>
  

</main>




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