<?php
    include "database.php";

    session_start();
    if(!isset($_SESSION['ad_email'])){
    header('location:ad_login.php');
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
    <link rel="stylesheet" href="./css/adminStyle.css">
    <title>Add Universities</title>
</head>

<body>
    <section class="navbar">
        <div class="logo">
            <img src="./images/Logo.png" alt="Logo">
        </div>
        <div class="links-container">
            <ul class="links">
                <li><a href="ad_logout/index-logout.php">Home</a></li>
                <li><a href="ad_logout/searchPage-logout.php">Find Universities</a></li>
                <li><a href="#" style="padding: 0 0;">Add Universities</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
        <button class="responsive-nav">
            <i class="fas fa-bars"></i>
        </button>
    </section>
    <section class="hero" id="home">
        <div class="hero-text">


            <form method="POST" action="#">
                <div class="entry">


                    <div class="entries">
                        <label for="collegename">College Name:</label>
                        <input type="text" id="formtext" name="name" class="input-entries">

                        <label for="courses">Courses Offered:</label>
                        <select id="course" name="course">
                            <option value="Science">Science</option>
                            <option value="Arts">Arts</option>
                            <option value="Commerce">Commerce</option>
                        </select>
                        <label for="stream">Stream:</label>
                        <input id="formtext" name="stream" class="input-entries">
                        <label for="fees">Fees:</label>
                        <input id="formtext" name="fees" class="input-entries">
                        <label for="rating">Rating:</label>
                        <input id="formtext" name="rating" class="input-entries">
                        <label for="collegeurl">College Link:</label>
                        <input id="formtext" name="clg_url" class="input-entries">
                        <label for="imageurl">Image Link:</label>
                        <input id="formtext" name="image_url" class="input-entries">
                        <div class="form-group">
                            <input type="submit" name="Submit" value="Submit" class="btn btn-success">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="hero-img">
            <img src="./images/header_img.svg" alt="Counsellor">
        </div>
    </section>

    <?php
            
            if(isset($_POST["Submit"]))
            {
                $courseName=$_POST["course"];
                mysqli_query($link,"insert into university values (NULL, '$_POST[name]' , '$_POST[course]', '$_POST[stream]', '$_POST[fees]', '$_POST[rating]', '$_POST[clg_url]', '$_POST[image_url]')") or die(mysqli_error($link));

                $loop=0;
                    $count=0;
                    $res=mysqli_query($link, "select * from university order by id asc") or die(mysqli_error($link));
                    $count=mysqli_num_rows($res);

                    if($count==0)
                    {

                    }
                    else{
                        while($row=mysqli_fetch_array($res))
                        {
                            $loop=$loop+1;
                            mysqli_query($link,"update university set id='$loop' where id=$row[id]");
                        }
                    }

                    $loop=$loop+1;

                ?>
                <script type="text/javascript">
                    alert("University added SUCCESSFULLY!");
                    window.location="add_university.php";
                </script>
                <?php

            }

        ?>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 150">
        <!-- f8f3eb -->
        <path fill="#262626" fill-opacity="1"
            d="M0,128L80,117.3C160,107,320,85,480,90.7C640,96,800,128,960,128C1120,128,1280,96,1360,80L1440,64L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z">
        </path>
    </svg>

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