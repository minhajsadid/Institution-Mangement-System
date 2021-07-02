<?php
    
    include_once('./config/dbConnection.php');
   $errormsg=$suggmsg="";
   if(isset($_POST['add'])){
    $area=$_POST['area'];
    $sql = "SELECT * FROM tbarea WHERE area = '$area'";
    $result=mysqli_query($conn,$sql);
    $num =mysqli_num_rows($result);
    if ($num==0){                         
       $sql = "INSERT INTO tbarea (AREA) VALUES ('$area')";
       if ($conn->query($sql)){
        $suggmsg = "Area added succesfully";
           //header('location:loginPage.php');
       }
       else{
           echo "Error: ". $sql ."
       ". $conn->error;
       }
       $conn->close();
   }
   else{
    //$errorsEmail = $sql;
    $errormsg = "Area that you have entered is already exist!";
    $conn->close();
} 
   }
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


  <?php include './navbar.php'; ?>
<div class="modal-dialog bg-primary" style="margin-top: 120px;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Area</h5>
       
        </button>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="form-group">
            <input type="text" name="area" class="form-control" id="recipient-name" required>
          </div>
          <label class="m-t-10" style="color: red"><?php echo $errormsg;?></label>
          <label class="alert-success" role="alert">
  <?php echo $suggmsg;?>
</label>
          
          <div class="modal-footer">
         <input type="submit" name="add" class="btn btn-primary" value="Add"/>
        </form>

      </div>
      </div>

    </div>
   
  </div>


  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>


  <script src="assets/js/main.js"></script>

</body>

</html>