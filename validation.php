<?php

session_start();

$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'build_tmrw_hackathon');

$email = $_POST["email"];
$pass = $_POST["password"];


$s = "select * from signup where email = '$email' && password = '$pass'";

$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['email'] = $email;
    echo '<script type="text/javascript">
    alert("Login Succesfull");
    window.location="./logout/index-logout.php";
 </script>';
    // header('location: ./logout/index-logout.php');
}
else{
    echo '<script type="text/javascript">
    alert("Wrong Credentials! Please try again");
    window.location="login.php";
 </script>';
}

?>