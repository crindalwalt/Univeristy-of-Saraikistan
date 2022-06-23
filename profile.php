<!DOCTYPE html>
<html lang="en">
<head>
<?php include "components/_links.php"; ?>
<title>Profile</title>
</head>
<body>
    <?php include "components/_navbar3.php"; ?>
    
<div class="banner">
    <h2>Your Profile</h2>
</div>


<div class="container">
    <?php
    if($_SESSION['loggedin'] && $_SESSION['loggedin']==true){
        echo' <div class="profile">
        <div class="profile_image ">
            <img class="user-img rounded-circle" src="assets/images/'.$_SESSION['user_pic'].'" alt="profile image">
        </div>
        <div class="liner"></div>

        <div class="profile_content"> 
            <h2>'.$_SESSION['username'].'<br> <span class="profile_email">'.$_SESSION['useremail'].'</span></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A explicabo dignissimos quia vitae earum aliquid ut, eligendi, praesentium, iusto minus obcaecati qui quidem Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae omnis nulla distinctio voluptatem dolore ratione.</p>
            <div class="mb-3">
              <label for="interest" class="form-label D_name"><h2>Interest</h2></label>
              <select name="interest" id="interest" class="form-control">
                  <option value="Web Development">Web Development</option>
                  <option value="Graphic Design">Graphic Design</option>
                  <option value="Digital Marketing">Digital Marketing</option>
                  <option value="E-commerecer">E-commerece</option>
                  <option value="Data Entry">Data Entry</option>
                  
              </select>
            </div>
        </div>
    </div>';



    }
    
    
    ?>
   
</div>
<div class="banner df">
        <h2>How its going for us </h2>
        <a href="about.php" class="c-btn2 deco_none">Add New</a>
    </div>








    <?php include "components/_footer.php"; ?>
</body>
<?php include "components/_scripts.php"; ?>
</html>