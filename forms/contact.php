<?php
include_once('../config/dbConnection.php');
session_start();

$image= $_SESSION['image'];
$image_dir = $_SESSION['dir'];
$image1=$_FILES['image']['name'];
$image_dir1 = $_FILES['image']['tmp_name'];
echo $image;
echo $image_dir;
echo $image1;
echo $image_dir1;


sleep(5);
if(isset($_POST['message']))
{
  move_uploaded_file($image_dir1 , "./upload/$image1");
  move_uploaded_file($image_dir , "./upload/$image");
  $_SESSION['image']="";
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

   $website=$_POST['website'];
   $message=$_POST['message'];



  echo 'Registration Completed Successfully...';
}
else {
  echo 'Registration cannot ';
}


?>


<!-- INSERT INTO tbinstitutions (district,AREA,institutionsTypes,i_name,totalTeachers,y1,yp1,yA1,y2,yp2,yA2,y3,yp3,yA3,image,mapUrl,areadetails,details,DATETIME)
VALUES('','','','i','',0,0,0,0,0,0,0,0,0,'','','','','') -->