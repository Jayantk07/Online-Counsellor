<?php

session_start();

$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'build_tmrw_hackathon');

$ad_email = $_POST["ad_email"];
$pass = $_POST["password"];


$s = "select * from admin_login where ad_email = '$ad_email' && password = '$pass'";

$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['ad_email'] = $ad_email;
    header('location:admin.php');
}
else{
    echo '<script type="text/javascript">
    alert("Wrong Credentials! Please try again");
    window.location="ad_login.php";
 </script>';
}

?>s