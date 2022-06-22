<?php
$alert = false;
if(isset($_GET['acc'])=="created"){
    $alert = true;
}

$signup = false;
if(isset($_GET['account'])=="created"){
    $signup = true;
}


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "components/_links.php"; ?>
    <title>Home page</title>
</head>

<body>
    <?php include "components/_navbar3.php"; ?>
    <?php 
        var_dump($_SESSION);
    
    ?>
        <!-- notification------- -->
        <?php
        if($alert){
        echo '<div class="container ">
        <div id="alertx" class="alert alert-warning alert-dismissible fade show" role="alert">
                <svg class="bi flex-shrink-0 me-2" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                </svg>
           <strong>You have now logged in as '. $_SESSION['username'] . '
           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
    </div>';
        }
        
        if($signup){
            echo '<div class="container ">
            <div id="alertx" class="alert alert-warning alert-dismissible fade show" role="alert">
                    <svg class="bi flex-shrink-0 me-2" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                    </svg>
               <strong>You have now logged in as '.$_SESSION['username'].'
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>
        </div>';
            }
        ?>
        

    <!-- Landing page -->
    <div class="container my-5">
        <div class="landingPage">
            <div class="left side">
                <div class="imgHolder">
                    <img src="assets/svg/landingPage2.svg" alt="landing page pic" class="img-fluid">
                </div>
            </div>
            <div class="right side">
                <div class="right-content">
                    <img src="assets/images/logo_noborder.png" alt="" class="uniName img-fluid">
                    <h1>Education Matters</h1>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae dolorum omnis suscipit inventore nihil dolores officiis aliquam labore culpa quidem ea alias, esse fugiat blanditiis quos sunt necessitatibus repudiandae. In.</p>
                    <a href="courses.php" class="c-btn">Discover our courses</a>
                </div>
            </div>
        </div>



    </div>

    <!-- About us banner -->
    <div class="banner df">
        <h2>How its going for us </h2>
        <a href="about.php" class="c-btn2 deco_none">About Us</a>
    </div>


    <!-- Categories -->
    <div class="categories container">
        <div class="div-heading">
            <h2>We got you covered in various Disipline </h2>

        </div>
        <div class="cat-container">
            <div class="cat-card grad-1">
                <div class="circle">
                    <img src="assets/svg/finance.svg" alt="cat-img">
                </div>
                <h3> Finance </h3>
            </div>
            <div class="cat-card grad-2">
                <div class="circle">
                    <img src="assets/svg/computing.svg" alt="cat-img">
                </div>
                <h3> Computing </h3>
            </div>
            <div class="cat-card grad-3">
                <div class="circle">
                    <img src="assets/svg/engineering.svg" alt="cat-img">
                </div>
                <h3> Engineering </h3>
            </div> 
            <div class="cat-card grad-4">
                <div class="circle">
                    <img src="assets/svg/medical.svg" alt="cat-img">
                </div>
                <h3> Medical </h3>
            </div>
            <div class="cat-card grad-5">
                <div class="circle">
                    <img src="assets/svg/social.svg" alt="cat-img">
                </div>
                <h3> Social Studies </h3>
            </div>
            <div class="cat-card grad-6">
                <div class="circle">
                    <img src="assets/svg/buisness.svg" alt="cat-img">
                </div>
                <h3> Buisness </h3>
            </div>
        </div>
    </div>
















    <?php include "components/_footer.php"; ?>
    <?php include "components/_scripts.php"; ?>


</body>

</html>