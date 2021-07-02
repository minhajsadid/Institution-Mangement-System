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
<header>
<?php include './navbar.php'; ?>
</header>
  <main id="main">
  <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Add Institutions</h2>
      </div>
    </div><!-- End Breadcrumbs -->


    <section id="contact" class="contact">
    <div class="col-lg-11 mt-5  ml-5 ">

<form  id="validate_form" class="php-email-form" method="POST" enctype="multipart/form-data">
  <div class="form-row">
  
   <div class="col-md-6 form-group">   
        <select class="form-control" name="dis" id="dis" required="" data-parsley-trigger="keyup">
        <option value="Chittagong">Chittagong</option>
        </select>
    </div>
    <div class="col-md-6 form-group">       
        <select class="form-control"  name="sub" id="sub"  required="" data-parsley-trigger="keyup">
        <option selected Value="">Please select area</option>          
            <?php  
            
             $sql="SELECT area FROM tbarea";
             $result = mysqli_query($conn, $sql);
             while ($row=mysqli_fetch_array($result)){
                 $name=$row['area'];
                echo '<option value="'.$name.'" >'.$name.'</option>';
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
    <div class="col-md-6 form-group">
      <input type="text" name="ename" class="form-control" id="ename"  placeholder="Enter Institutions Name" required="" data-parsley-trigger="keyup" />
      <div class="validate"></div>
    </div>
    <div class="col-md-6 form-group">
      <input type="text" name="eadetails" class="form-control" id="eadetails" placeholder="Enter short area details"  required="" data-parsley-trigger="keyup"/>
      <div class="validate"></div>
    </div>
    <div class="col-md-6 form-group">
      <input type="number" class="form-control" min="12" max="300"   required="" name="tsum" id="tsum" placeholder="Enter total number of teachers" data-parsley-trigger="keyup"/>
      <div class="validate"></div>
    </div>

    <div class="col-md-6 form-group">
      <input type="number" class="form-control" required="" name="number1" id="number" placeholder="Enter Contact Number of Instututions" data-parsley-trigger="keyup"/>
      <div class="validate"></div>
    </div>

    <div class="col-md-6 form-group">
      <input type="number" class="form-control"  min="100" max="10000"  required="" name="tstd" id="tstd" placeholder="Enter total number of Students" data-parsley-trigger="keyup"/>
      <div class="validate"></div>
    </div>
  
    <div class="section-title col-md-12 mt-2">
    <h2>Please provide previous 3 years result</h2>
        </div>



    <div class="col-md-3 form-group">
      <input type="number" placeholder="YYYY" required="" min="2017" max="2100" class="form-control date-own" name="y1" id="y1" placeholder="select year" data-parsley-trigger="keyup"/>
      <div class="validate"></div>
    </div> 
    <div class="col-md-3 form-group">
      <input type="number" class="form-control" required="" name="yp1" id="yp1" min="50" max="100" placeholder="Board exam passing percentage " data-parsley-trigger="keyup"/>
      <div class="validate"></div>
    </div>

    <div class="col-md-3 form-group">
      <input type="number" min="5" max="500"  required="" class="form-control" name="tA1" id="tA1" placeholder="Please provide the total A+ in that year" data-parsley-trigger="keyup"/>
      <div class="validate"></div>
    </div> 
    <div class="col-md-3 form-group">
      <input type="number" min="30" max="500"  required="" class="form-control" name="ts1" id="ts1" placeholder="Please total student" data-parsley-trigger="keyup"/>
      <div class="validate"></div>
    </div> 

  <div class="col-md-3 form-group">
      <input type="number" placeholder="YYYY"  required="" min="2017" max="2100" name="y2" id="y2" class="form-control date-own"  placeholder="select year" data-parsley-trigger="keyup"/>
      <div class="validate"></div>
    </div> 
    <div class="col-md-3 form-group">
      <input type="number" class="form-control"  required="" name="yp2" id="yp2" min="50" max="500" placeholder="Board exam passing percentage " data-parsley-trigger="keyup"/>
      <div class="validate"></div>
    </div>

    <div class="col-md-3 form-group">
      <input type="number" min="5" max="500" required=""  class="form-control" name="tA2" id="tA2"  placeholder="Please provide the total A+ in that year" data-parsley-trigger="keyup"/>
      <div class="validate"></div>
    </div> 
    <div class="col-md-3 form-group">
      <input type="number" min="30" max="500"  required="" class="form-control" name="ts2" id="ts2" placeholder="Please total student" data-parsley-trigger="keyup"/>
      <div class="validate"></div>
    </div> 


    <div class="col-md-3 form-group">
      <input type="number" placeholder="YYYY" min="2017" max="2100" name="y3" id="y3"  required="" class="form-control date-own"  placeholder="select year" data-parsley-trigger="keyup"/>
      <div class="validate"></div>
    </div> 
    <div class="col-md-3 form-group">
      <input type="number" class="form-control"  required="" name="yp3" id="yp3"  min="50" max="500" placeholder="Board exam passing percentage" data-parsley-trigger="keyup"/>
      <div class="validate"></div>
    </div>

    <div class="col-md-3 form-group">
      <input type="number" min="5" max="500" class="form-control" name="tA3" id="tA3" required="" placeholder="Please provide the total A+ in that year" data-parsley-trigger="keyup"/>
      <div class="validate"></div>
    </div> 
    <div class="col-md-3 form-group">
      <input type="number" min="30" max="500"  required="" class="form-control" name="ts3" id="ts3" placeholder="Please total student" data-parsley-trigger="keyup"/>
      <div class="validate"></div>
    </div> 

  
    <div class="col-md-6 form-group">
    <div class="section-title mt-2">
    <h2>Please select a institution image</h2>
    </div>
    <input type="file" class="form-control" accept="image/*" required="" name="image"  id="image">
    <div class="validate"></div>
  </div>

  <div class="col-md-6 form-group">
  <div class="section-title mt-2">
    <h2>Please enter shareable institution map url</h2>
  </div>
      <input type="text" class="form-control"id="website" name="website" data-parsley-type="url" data-parsley-trigger="keyup" required placeholder="http://"/>
      <div class="validate"></div>
    </div>
  <div class="form-group col-md-12">
    <textarea class="form-control" name="message" id="message" rows="5"   required="" data-parsley-trigger="keyup"s placeholder="Write something about institutions"></textarea>
    <div class="validate"></div>
  </div>
  <div class="mb-3">
    <div class="loading">Loading</div>
    <div class="error-message"></div>
    <div class="sent-message">Your message has been sent. Thank you!</div>
  </div>
  <div class="text-center col-md-12" ><input type="submit" id="submit" name="submit" value="Submit" class="btn btn-success w-25" /></div>
</form>

</div>
    </section>
  </main>



  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
  <div id="preloader"></div>





  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

    


<script>  

    $('#validate_form').parsley();

//  $('#validate_form').on('submit', function(event){
//   event.preventDefault();

//   if($('#validate_form').parsley().isValid())
//   {

//   }
//   else
//   {
//     alert("incomplete");
//   }
//  });




</script>

<?php 
if(isset($_POST['submit'])){
  
  $dis=$_POST['dis'];
  $sub=$_POST['sub'];
  $select=$_POST['select'];
  $ename=$_POST['ename'];
  $eadetails=$_POST['eadetails'];
  $tsum=$_POST['tsum'];

  $y1=$_POST['y1'];
  $yp1=$_POST['yp1'];
  $tA1=$_POST['tA1'];

  $y2=$_POST['y2'];
  $yp2=$_POST['yp2'];
  $tA2=$_POST['tA2'];

  $y3=$_POST['y3'];
  $yp3=$_POST['yp3'];
  $tA3=$_POST['tA3'];


  $image= $_FILES['image']['name'];
  $dir = $_FILES['image']['tmp_name'];
  $website=$_POST['website'];
  $message=$_POST['message'];
  $a=date("Y-m-d H:i:s");
  $number=$_POST['number1'];
  $tstd=$_POST['tstd'];

  $sql = "SELECT * FROM tbinstitutions  WHERE i_name= '$ename'";
  $result=mysqli_query($conn,$sql);
  $num =mysqli_num_rows($result);
  if ($num==0){
    $sql = "INSERT INTO tbinstitutions (district,AREA,institutionsTypes,i_name,totalTeachers,y1,yp1,
    yA1,y2,yp2,yA2,y3,yp3,yA3,image,mapUrl,areadetails,details,dateTime,number1,tstd)
    VALUES('$dis','$sub','$select','$ename','$tsum','$y1','$yp1','$tA1','$y2','$yp2',
    '$tA2','$y3','$yp3','$tA3','$image','$website','$eadetails',' $message','$a','$number','$tstd')";

    $sql2="INSERT into tbratings(i_name,tblocation,tbimage,tbratting,types,tbabout)
    values('$ename','$sub','$image','$yp3','$select','$message')";

     if ($conn->query($sql)){
      if ($conn->query($sql2)){
       
      move_uploaded_file($dir , "./upload/$image");
      echo '<script>confirm("all information save successfully")</script>';
      //header('location:loginPage.php');
  }
 }
  else{
      echo "Error: ". $sql ."
  ". $conn->error;
  }
  $conn->close();
    


  } 
  else{
    
     echo '<script>alert("Institution that you have entered is already exist!")</script>';
    $conn->close();
 }    

}




        ?>


<script>
       $('.date-own').datepicker({
         minViewMode: 2,
         format: 'yyyy'
       });
  </script>