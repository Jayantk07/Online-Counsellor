<?php

session_start();



$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'build_tmrw_hackathon');

$uname = $_POST["uname"];
$number = $_POST["number"];
$email = $_POST["email"];
$password = $_POST["password"];
$cpassword = $_POST["cpassword"];


$s = "select * from signup where email = '$email'";

$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1){
    echo '<script type="text/javascript">
    alert("User with this Email already Exists!");
    window.location="login.php";
</script>';
}else{
    $reg = "insert into signup (uname, number, email, password, cpassword) values ('$uname' , '$number' , '$email' , '$password' , '$cpassword')";
    mysqli_query($con, $reg);
    echo '<script type="text/javascript">
    alert("Registration Successful!");
    window.location="login.php";
    
</script>';
}

?>