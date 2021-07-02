<?php

include_once('./config/dbConnection.php');



$suggmsg="";
if(isset($_POST['delete'])){

  $bookPath=$_POST['deleteBook'];
    $sql="DELETE FROM tbbooks WHERE bookpath='$bookPath'";

    if ($conn->query($sql)){
        
      
      header('location:deleteBooks.php');
      echo '<script>confirm("Book Deleted Successfully")</script>';
          // 
          
    } 
    else{
        echo '<script>confirm("Book Deleted Failed")</script>';
        echo "Error: ". $sql ."
    ". $conn->error;
    }
    $conn->close();
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
  <link href="assets/css/all.min.css" rel="stylesheet">
  </head>
  <?php include './navbar.php'; ?>

<main>
<div class="modal-dialog bg-primary" style="margin-top: 120px;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Books</h5>
       
        </button>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="form-group">
            <select class="form-control" name="deleteBook">
              <option value="">Please Select book</option>
              <?php  
            
             $sql="SELECT * FROM tbbooks";
             $result = mysqli_query($conn, $sql);
             while ($row=mysqli_fetch_array($result)){
                 $name=$row['bookTitile'];
                 $class=$row['class'];
                 $year = $row['year'];
                 $books = $row['bookpath'];
                echo '<option value="'.$books.'" >'.$name.'('.$class.')'."------".$year.'</option>';
             }

            
            ?>
            </select>
          </div>
          
          <label class="alert-success" role="alert">
 
</label>
          
          <div class="modal-footer">
         <input type="submit" name="delete" class="btn btn-danger" value="Delete"/>
        </form>
        <label class="alert-success" role="alert">
  <?php echo $suggmsg;?>
</label>
      </div>
      </div>

    </div>
   
  </div>


</main>




  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>