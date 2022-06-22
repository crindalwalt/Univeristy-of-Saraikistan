<?php
if(!isset($_SESSION['loggedin']) && $_SESSION['loggedin']!="true" ){
    header("location: index.php");

}


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "components/_links.php" ?>
    <title>Read About Us</title>
</head>

<body>
    <?php include "components/_navbar3.php" ?>
    <div class="container my-5">
        <div class="landingPage">
            <div class="left side">
                <div class="imgHolder">
                    <img src="assets/images/logo_noborder.png" alt="landing page pic" class="img-fluid">
                </div>
            </div>
            <div class="right side">
                <div class="right-content">

                    <h1>UO SARAIKISTAN</h1>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae dolorum omnis suscipit inventore nihil dolores officiis aliquam labore culpa quidem ea alias, esse fugiat blanditiis quos sunt necessitatibus repudiandae. In.</p>
                    <button class="c-btn">Contact Us</button>
                </div>
            </div>
        </div>

    </div>




    <div class=" properties">
      <div class="banner-huge">
          <div class="propsBox">
              <div class="propBox">
              <img class="img-fluid" src="assets/svg/dollar.svg" alt="">
            </div>
                  <p class="lead">Financial aid available</p>
          </div>
          <div class="propsBox">
              <div class="propBox">
                  <img class="img-fluid" src="assets/svg/building.svg" alt="">
                  </div>
                  <p class="lead">Build 24 Campasus</p>
          </div>
          <div class="propsBox">
              <div class="propBox">
                  <img class="img-fluid" src="assets/svg/progress.svg" alt="">
                </div>
                <p class="lead">Ranked 2<sup>nd</sup> last year</p>
          </div>
          <div class="propsBox">
              <div class="propBox">
                  <img class="img-fluid" src="assets/svg/plugin.svg" alt="">
                </div>
                <p class="lead">
               Zero Carbon footprint
                </p>
          </div>
      </div>
  </div>
    <div class="container my-5">
        <h1 class="text-center">OUR GALLARY</h1>
        <div class="innerBanner">
            <div class="card1">
                <img src="assets/images/gallary1.jpg" alt="">
            </div>
            <div class="card1">
                <img src="assets/images/gallary2.jpg" alt="">
            </div>
            <div class="card1">
                <img src="assets/images/gallary3.jpg" alt="">
            </div>
            <div class="card1">
                <img src="assets/images/gallary4.jpg" alt="">
            </div>
            <div class="card1">
                <img src="assets/images/gallary5.jpg" alt="">
            </div>
            <div class="card1">
                <img src="assets/images/gallary6.jpg" alt="">
            </div>

        </div>

    </div>


    <?php include "components/_footer.php" ?>
</body>
<?php include "components/_scripts.php" ?>

</html>