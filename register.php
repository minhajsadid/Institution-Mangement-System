<?php
include_once('./config/dbConnection.php');
session_start();
$fnameErr=$lnameErr=$passErr=$cpassErr=$emailErr=$pErr= $pnumber=$errorsEmail="";
if(isset($_POST['register'])){
    //checkFName();
    $fname=$_POST['first_name'];
    $lname=$_POST['last_name'];
    $email=$_POST['email'];
    $password=$_POST['password'];  
    $cpassword=$_POST['cpassword'];
    $pnumber = $_POST['phone'];
      
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
      }
    else{
      if($cpassword==$password){
            $uppercase = preg_match('@[A-Z]@', $password);
            $lowercase = preg_match('@[a-z]@', $password);
            $number    = preg_match('@[0-9]@', $password);
            $specialChars = preg_match('@[^\w]@', $password);
            
            if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
                $passErr = "use a strong password";    
            }
            else{
                $phnumber=  preg_match('@[0-9]@', $pnumber);
                if(!$phnumber || strlen($phnumber)> 10){
                    $pErr = "Enter Valid phone number"; 
                }
                else{
                    
                     $sql = "SELECT * FROM tbuser WHERE email = '$email'";
                     $result=mysqli_query($conn,$sql);
                     $num =mysqli_num_rows($result);
                     if ($num==0){                         
                        $password =md5($password);
                        $sql = "INSERT INTO tbuser (fname,lname,email,pass,mobile) VALUES ('$fname','$lname','$email','$password',$pnumber)";
                        if ($conn->query($sql)){
                            echo '<script>confirm("all information save successfully")</script>';
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
                         $errorsEmail = "Email that you have entered is already exist!";
                        $conn->close();
                    }     
                }
                
                $cpassErr = "use a strong password"; 
            }          
        
      
    }
    else{
        $passErr="Password does not match";
      }
    }
    

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Register</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Registration Form</h2>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="form-row m-b-45">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="first_name" placeholder="First Name" required>
                                            <label class="label--desc"></label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="last_name" placeholder="Last Name" required>
                                            <label class="label--desc"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Password</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="password" placeholder="password" required>
                                            <label class="m-t-20" style="color: red"><?php echo $passErr;?></label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="cpassword" placeholder="Confirm Password" required>
                                            <label class="label--desc"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="email" placeholder="abc@gmail.com" required>
                                    <label class="m-t-20" style="color: red"><?php echo $errorsEmail;?></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Phone</div>
                            <div class="value">
                                <div class="row row-refine">
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="phone" placeholder="Phone Number" required>
                                            <label class="m-t-20" style="color: red"><?php echo  $pErr;?></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit" name="register">Register</button>
                        </div>
                    </form>
                    <div class="m-t-10 footer">
                        <div class="w-full text-center p-t-55">
                            <span class="txt2">
                            Already have an account?
                            </span>

                            <a href="loginPage.php" class="txt2 bo1">
                                Login
                            </a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
<!-- end document-->