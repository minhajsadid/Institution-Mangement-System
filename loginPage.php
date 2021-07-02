<?php
session_start();

include_once('./config/dbConnection.php');
// session_start();
$login_button ='';
$passErr="";
if(isset($_POST['submit'])){
$email=$_POST['email'];
$password=$_POST['pass'];
$password= md5($password);
    $sql = "SELECT * FROM tbuser WHERE email = '$email' AND pass='$password'";
    $result=mysqli_query($conn,$sql);
    $num =mysqli_num_rows($result);
	while($row = mysqli_fetch_array($result))
	{  
		$_SESSION["name"] = $row ['fname'].' '.$row ['lname'] ;
		$_SESSION['email']=$row ['email'];
	}
	
    if ($num==1){
        header('location:home.php');
    }
    // else{
		
    //    echo "Error";
    // }
  /*  if ($conn->query($sql)){
       header('location:Home.php');
    }
	544253180947-hlqh7cv3oj1kg875rle3n5beeo9ju3qu.apps.googleusercontent.com
	hu5aVHk4vqkeHlWBFLTnR3C2
    else{
        echo "Error: ". $sql ."
    ". $conn->error;
    }
    $conn->close();*/
	$passErr="Enter Valid Email and password";
	$conn->close();
}?>


<?php
require_once './vendor/autoload.php';
     
    $clientId="544253180947-hlqh7cv3oj1kg875rle3n5beeo9ju3qu.apps.googleusercontent.com";
	$clientSecret="hu5aVHk4vqkeHlWBFLTnR3C2";
	$redirectUri="http://localhost:8877/FinalNi/loginPage.php";
    
	$client = new Google_Client();
	$client ->setClientId($clientId);
	$client ->setClientSecret($clientSecret);
	$client ->setRedirectUri($redirectUri);
	$client -> addScope('email');
	$client -> addScope('profile');
	
	if (isset($_GET['code'])) {
		$token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
		$client -> setAccessToken($token['access_token']);
		$oAuth = new Google_Service_Oauth2($client);
		$userData = $oAuth->userinfo->get();

		 
		$email = $userData->email;
		$_SESSION['email']=$email;
		$name = $userData->name;
		$picture = $userData->picture;
		$_SESSION['name']=$name;
		$_SESSION['pic']=$picture;
		
		header('location:home.php');
		// echo "<h1>$picture</h1>";
		// echo "<h1>$name</h1>";
		// echo "<h1>$email</h1>";
		
	} else {
		# code...
		$login_url = $client->createAuthUrl();
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V5</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="CSSLogin/util.css">
	<link rel="stylesheet" type="text/css" href="CSSLogin/main.css">
<!--===============================================================================================-->

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				<form class="login100-form validate-form flex-sb flex-w" action="#" method="post">
					<span class="login100-form-title p-b-53">
						Sign In With
					</span>

					<a href="<?php echo $facebook_login_url; ?>" class="btn-face m-b-20">
						<i class="fa fa-facebook-official"></i>
						Facebook
					</a>

					<a href="<?php echo $login_url; ?> " class="btn-google m-b-20">
						<img src="images/icons/icon-google.png" alt="GOOGLE">
						Google
					</a>
					
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Email
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "email is required">
						<input class="input100" type="email" name="email" >
						<span class="focus-input100"></span>
					</div>
					
					<div class="p-t-13 p-b-9">
						<span class="txt1">
							Password
						</span>

						<a href="password-changed.php" class="txt2 bo1 m-l-5">
							Forgot?
						</a>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" >
						<span class="focus-input100"></span>
					</div>
					<label class="m-t-20" style="color: red"><?php echo $passErr;?></label>
					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" name="submit" type="submit">
							Sign In
						</button>
					</div>

					<div class="w-full text-center p-t-55">
						<span class="txt2">
							Not a member?
						</span>

						<a href="register.php" class="txt2 bo1">
							Sign up now
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
   
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
<?php } ?>
