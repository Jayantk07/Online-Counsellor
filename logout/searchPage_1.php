<?php

include "../database.php";

    session_start();
    if(!isset($_SESSION['email'])){
    header('location: ../login.php');
    }


if(isset($_POST['search']))
{
    $courseToSearch = $_POST['courseToSearch'];
    $query = "SELECT * FROM `university` WHERE CONCAT(`course`) LIKE '%".$courseToSearch."%'";
    $search_course = courseFilter($query);

}

else{
   $query = "SELECT * FROM `university`";
   $search_course = courseFilter($query);
}

function courseFilter($query)
{
    $connect = mysqli_connect("localhost", "root", "", "build_tmrw_hackathon");
    $filter_course = mysqli_query($connect, $query);
    return $filter_course;
}

?> 


<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- google fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;500&display=swap" rel="stylesheet">

<!-- font awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">


<!-- owl carousel -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" />

<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" />


<link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon">
<link rel="stylesheet" href="../css/navstyle.css">
<link rel="stylesheet" href="../css/indexStyle.css">
<link rel="stylesheet" href="../css/footStyle.css">
<link rel="stylesheet" href="../css/searchPage.css">
<title>Home</title>
</head>

<body>
<section class="navbar">
    <div class="logo">
        <img src="../images/Logo.png" alt="Logo">
    </div>
    <div class="links-container">
        <ul class="links">
            <li><a href="index-logout.php">Home</a></li>
            <li><a href="searchPage-logout.php">Find Universities</a></li>
            <li><a href="../logout.php">Loout</a></li>
        </ul>
    </div>
    <button class="responsive-nav">
        <i class="fas fa-bars"></i>
    </button>
</section>

<div class="title" id="home">
    <img src="../images/Decorative-Border-Divider.svg" alt="Border">
    <h3>Find your dream Universities!!</h3>
    <img src="../images/Decorative-Border-Divider.svg" alt="Border">
</div>

<!-- Form  -->

<div class="search-form">
    <form action="#" method="POST" class="form">
        <div class="factors">
            <label for="">Course</label>
            <input type="text" name="courseToSearch">
        </div>

        <div class="search-container">
            <input type="submit" name="search" value="Search" class="searchBtn">
        </div>
    </form>

</div>

<!-- divider -->
<div class="divider">
    <img src="../images/Vintage-Decorative-Divider.svg" alt="divider" class="divider-img">
</div>

    <div class="database-cards show-cards">
        <?php while($row = mysqli_fetch_array($search_course)): ?>
            <div class="database-item">
                    <img class="img" src="<?php echo $row['image_url'] ?>" alt="">
                    <h3><?php echo $row['name'] ?></h3>
                    <p>Course Offered:</p>
                    <ul class="courses">
                        <li><?php echo $row['course'] ?></li>
                    </ul>
                    <div class="fees">
                        <p><?php echo $row['stream1'] ?></p>
                        <span>&#x20b9 <?php echo $row['fees'] ?></span>
                    </div>
                    <p class="ranking">Rating : <?php echo $row['rating'] ?> <i class="fas fa-star"></i></p>
                    <p class="college_website">For more details visit: <a href="<?php echo $row['clg_url'] ?>"><?php echo $row['clg_url'] ?></a></p>
            </div>
        <?php endwhile; ?>
    </div>




<footer class="footer">
    <div class="foot-container">
        <img src="../images/Logo.png" alt="Logo">
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus, quae!</p>
    </div>
    <hr>
    <div class="foot-container">
        <h3>Quick Links</h3>
        <hr>
        <ul class="foot-links">
            <li> <a href="index-logout.php"> Home</a></li>
            <li> <a href="searchPage-logout.php"> Find Universities</a></li>
            <li> <a href="#"> About Us</a></li>
            <li> <a href="#"> Team</a></li>
        </ul>
    </div>
</footer>
<a href="#home" class="top-btn">
    <i class="fas fa-arrow-up"></i>
</a>
<script src="../js/index.js"></script>
<!-- Jquery -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous"></script>

<!-- Owl carousel -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous"></script>

<script type="text/javascript">
    $('.owl-carousel').owlCarousel({
        loop: false,
        margin: 20,
        nav: true,
        dots: false,
        animateOut: 'fadeOut',
        responsive: {
            0: {
                items: 1,
                dots: true
            },
            700: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    })
</script>

<script>
    const searchBtn = document.querySelector(".searchBtn");
    const databaseCards = document.querySelector(".database-cards");
    const cards = document.querySelector(".cards");
    searchBtn.addEventListener("click", function(e){
        databaseCards.classList.add("show-cards");
        cards.classList.add("remove-cards");
    });
</script>
</body>

</html>