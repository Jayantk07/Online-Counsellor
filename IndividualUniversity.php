<?php 

    include "database.php";

    $name='';
    $course='';
    $stream1='';
    $fees='';
    $rating='';
    $clg_url='';
    $image_url='';

    $id=$_GET["id"];

    $res=mysqli_query($link, "select * from university where id=$id");
    while($row=mysqli_fetch_array($res))
    {
        $name=$row["name"];
        $course=$row["course"];
        $stream1=$row["stream1"];
        $fees=$row["fees"];
        $rating=$row["rating"];
        $clg_url=$row["clg_url"];
        $image_url=$row["image_url"];
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/navstyle.css">
    <link rel="stylesheet" href="./css/indexStyle.css">
    <link rel="stylesheet" href="./css/footStyle.css">
    <link rel="stylesheet" href="./css/IndividualUniversity.css">
    <title>College</title>
</head>

<body>
    <section class="navbar">
        <div class="logo">
            <img src="./images/Logo.png" alt="Logo">
        </div>
        <div class="links-container">
            <ul class="links">
                <li><a href="index.php">Home</a></li>
                <li><a href="searchPage.html">Find Universities</a></li>
                <li><a href="login.php">Login</a><span>|</span><a href="register.php">Register</a></li>
            </ul>
        </div>
        <button class="responsive-nav">
            <i class="fas fa-bars"></i>
        </button>
    </section>



    <section class="hero" id="home">
        <div class="hero-text">
            <h3><?php echo $name ?></h3>
        </div>
        <div class="hero-img">
            <img src="<?php echo $image_url ?>" alt="Counsellor">
        </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 150">
        <!-- f8f3eb -->
        <path fill="#262626" fill-opacity="1"
            d="M0,128L80,117.3C160,107,320,85,480,90.7C640,96,800,128,960,128C1120,128,1280,96,1360,80L1440,64L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z">
        </path>
    </svg>
    <section class="info">
        <div class="info-img">
            <img src="./images/info_img.svg" alt="Info">
        </div>
        <div class="info-text">
            <h3>Course Offered</h3>
            <p><?php echo $course ?></p>
        </div>
    </section>
    <section class="university">
        <div class="uni-text">
            <h3>Stream</h3>
            <p><?php echo $stream1 ?></p>
            <h3>Fees</h3>
            <p>&#x20b9 <?php echo $fees ?></p>
            <h3>Rating</h3>
            <p><?php echo $rating ?> / 10 <i class="fas fa-star"></i></p>
            <p class="college-link">For more details, please visit: <a href="<?php echo $clg_url ?>" target="_blank"><?php echo $clg_url ?></a></p>
        </div>
        <div class="uni-img">
            <img src="./images/stream.svg" alt="Search">
        </div>
    </section>

    
    <footer class="footer">
        <div class="foot-container">
            <img src="./images/Logo.png" alt="Logo">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus, quae!</p>
        </div>
        <hr>
        <div class="foot-container">
            <h3>Quick Links</h3>
            <hr>
            <ul class="foot-links">
                <li> <a href="index.html"> Home</a></li>
                <li> <a href="searchPage.html"> Find Universities</a></li>
                <li> <a href="#"> About Us</a></li>
                <li> <a href="#"> Team</a></li>
            </ul>
        </div>
    </footer>
    <a href="#home" class="top-btn">
        <i class="fas fa-arrow-up"></i>
    </a>
    <script src="./js/index.js"></script>
</body>

</html>