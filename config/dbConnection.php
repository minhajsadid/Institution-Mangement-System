<?php



$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "nishat";
$conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
    die('Connect Error ('. mysqli_connect_errno() .') '
        . mysqli_connect_error());
}

/* make sure the url end with a trailing slash */
define("SITE_URL", "http://127.0.0.1/lsg/");
/* the page where you will be redirected for authorzation */
define("REDIRECT_URL", SITE_URL."http://localhost:8877/Nishat/loginPage.php");

/* * ***** Google related activities start ** */
define("CLIENT_ID", "745298378554-4rq4m9u4msm8nbq0gg4ackfr090vbni5.apps.googleusercontent.com");
define("CLIENT_SECRET", "gTrAkHLdHHy1SShC6tgSOYgJ");

/* permission */
define("SCOPE", 'https://www.googleapis.com/auth/userinfo.email '.
		'https://www.googleapis.com/auth/userinfo.profile' );

// function display_doc(){
//     global $conn;
//     $sql="SELECT NAME,expert FROM tbdoctorinfo";
//     $result = mysqli_query($conn, $sql);
//     while ($row=mysqli_fetch_array($result)){
//         $name=$row['NAME'];
//         $expart=$row['expert'];
//        echo '<option value="'.$name.'" >'.$name.' ('.$expart.')</option>';
//     }
// }

// function display_serial(){
//     global $conn;
//     $sql="select ifnull(max(cast(subString(serialId,locate('-',serialId)+1,length(serialId)-locate('-',serialId)) as UNSIGNED)),0)+1 as id FROM tbappointment";
//     $result = mysqli_query($conn, $sql);
//     while ($row=mysqli_fetch_array($result)){
//         $id=$row['id'];

//         echo '<option value=" Serial-'.$id.'" >'.Serial.'-'.$id.'</option>';
//     }
// }

?>



