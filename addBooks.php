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
  <!-- <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet"> -->
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="http://parsleyjs.org/dist/parsley.js"></script>


  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/parslay.css" rel="stylesheet">
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



 <main>
 
 <div class="modal-dialog bg-primary" style="margin-top: 120px;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Books</h5>
      </div>
      <div class="modal-body">
        <form method="POST" id="validate_form" enctype="multipart/form-data">
          <div class="form-group">
            <input type="text" name="title"  class="form-control" id="recipient-name" required="" data-parsley-trigger="keyup" placeholder="Book Title">
          </div>
          <div class="form-group">
            <input type="file" name="book" accept="application/pdf" class="form-control" id="book" required="" data-parsley-trigger="keyup">
          </div>
          <div class="form-group">
          <select class="form-control"  name="class" id="class"  required="" data-parsley-trigger="keyup" required="">
                <option selected value="">Book For</option>
                <option value="One">One</option>
                <option value="Two">Two</option>
                <option value="Two">Three</option>
                <option value="Four">Four</option>
                <option value="Five">Five</option>
                <option value="Six">Six</option>
                <option value="Seven">Seven</option>
                <option value="Eight">Eight</option>
                <option value="Nine">Nine</option>
                <option value="Ten">Ten</option>
                <option value="HSC">HSC</option>
        </select>
          </div>
          <div class="form-group">
          <?php
                    echo '<select name="year" data-component="date"  class="form-control" required="">';
                   echo '<option value="">select year</option>' ;
                    for($year=1900; $year<=date('Y'); $year++){
                    echo '<option value="'.$year.'">'.$year.'</option>';
                    }
                    ?>
          </div>
          
         
         <input type="submit" name="add" class="btn btn-primary mt-4 ml-4 col-md-10" value="Add"/>
        </form>

      
      </div>

    </div>
   
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





  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

<script>  

$('#validate_form').parsley();
</script>

<?php

if(isset($_POST['add'])){
     $year=$_POST['year'];
     $class=$_POST['class'];
     $title=$_POST['title'];


     $book= $_FILES['book']['name'];
     $dir = $_FILES['book']['tmp_name'];
	   $file_store = "./books";

     move_uploaded_file($dir , "./books/$book");

     $sql = "INSERT INTO tbbooks(bookTitile,class,bookpath,year)VALUES('$title','$class','$book','$year')";
     if ($conn->query($sql)){
        echo '<script>confirm("Book Uploaded Successfully")</script>';
       }
       else{
           echo "Error: ". $sql ."
       ". $conn->error;
       }
       $conn->close();
     
     
     
     
     


    }


?>