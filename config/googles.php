
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
		$name = $userData->name;
		$picture = $userData->picture;
		
		
		echo "<h1>$picture</h1>";
		echo "<h1>$name</h1>";
		echo "<h1>$email</h1>";
		
	} else {
		# code...
		$login_url = $client->createAuthUrl();
	

	// login URL
  
?>