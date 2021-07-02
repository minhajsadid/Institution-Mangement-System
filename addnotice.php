
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="http://parsleyjs.org/dist/parsley.js"></script>
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <style>

.box
{
 width:100%;
 max-width:600px;
 background-color:#f9f9f9;
 border:1px solid #ccc;
 border-radius:5px;
 padding:16px;
 margin:0 auto;
}
input.parsley-success,
select.parsley-success,
textarea.parsley-success {
  color: #468847;
  background-color: #DFF0D8;
  border: 1px solid #D6E9C6;
}

input.parsley-error,
select.parsley-error,
textarea.parsley-error {
  color: #B94A48;
  background-color: #F2DEDE;
  border: 1px solid #EED3D7;
}

.parsley-errors-list {
  margin: 2px 0 3px;
  padding: 0;
  list-style-type: none;
  font-size: 0.9em;
  line-height: 0.9em;
  opacity: 0;

  transition: all .3s ease-in;
  -o-transition: all .3s ease-in;
  -moz-transition: all .3s ease-in;
  -webkit-transition: all .3s ease-in;
}

.parsley-errors-list.filled {
  opacity: 1;
}

.parsley-type, .parsley-required, .parsley-equalto{
 color:#ff0000;
}

 </style>
  
</head>

<body>


  <?php include './navbar.php'; ?>


  <div class="modal-dialog bg-primary" style="margin-top: 120px;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Notice</h5>
       
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" id="validate_form" enctype="multipart/form-data">
          <div class="form-group">
            <input type="text" name="title" class="form-control" placeholder="Enter Title" required="">
          </div>
          <div class="form-group">
            <input type="date" name="date" class="form-control"  required="">
          </div>
          <div class="form-group">
            <input type="file" name="file" class="form-control" placeholder="provide notice document" required="">
          </div>
          <!-- <label class="m-t-10" style="color: red"><?php echo $errormsg;?></label> -->
          <label class="alert-success" role="alert">

</label>
          
          <div class="modal-footer">
         <input type="submit" name="add" class="btn btn-primary" value="Add"/>
        </form>

      </div>
      </div>

    </div>
   
  </div>
  



  <script src="assets/js/main.js"></script>

</body>

</html>

<script>
    $('#validate_form').parsley();
</script>

<?php
if(isset($_POST['add'])){

  $title =$_POST['title'];
  $date = $_POST['date'];
  $file= $_FILES['file']['name'];
  $dir = $_FILES['file']['tmp_name'];
    

  $sql="INSERT INTO tbnotice (titile,DATE,filepath) VALUES ('$title','$date','$file')";
  if ($conn->query($sql)){
     
    move_uploaded_file($dir , "./notice/$file");
    echo '<script>confirm("all information save successfully")</script>';
    //header('location:loginPage.php');
    
}
else{
    echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();

  
}



?>