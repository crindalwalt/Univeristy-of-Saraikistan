<?php
if(isset($_GET['id'])){
    include "backend/dbcon.php";
}else{
    header("location:home.php?id=notFound");
}





?>





<!DOCTYPE html>
<html lang="en">

<head>
<?php include "components/_links.php"?>

</head>

<body>
    <?php include "components/_navbar3.php"?>
    <!-- navbar starts here -->
    <!-- <nav class="navbar">
        <div class="nav-container">
            <div class="head-name">
                <a class="navbar-brand" href="#">TechSchool</a>

            </div>
            <div class="links">
                <ul class="navbar-nav">
                    <li class="nav-items">
                        <a class="nav-links" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-items">
                        <a class="nav-links" aria-current="page" href="#">Course</a>
                    </li>
                    <li class="nav-items">
                        <a class="nav-links" aria-current="page" href="#">About</a>
                    </li>
                    <li class="nav-items">
                        <a class="nav-links" aria-current="page" href="#">Dashboard</a>
                    </li>
                </ul>
            </div>
            <div class="btn">
                <a href="#" class="button">Join</a>
            </div>
        </div>
    </nav>
     -->
    <!------------------- detail-section---------------- -->

<?php
$course_id = $_GET['id'];
 
$course_sql = "SELECT * FROM `courses` WHERE `course_id`= '$course_id'";
$course_sql_run = mysqli_query($connection , $course_sql);
while($rows = mysqli_fetch_assoc($course_sql_run)){
    echo '<div class="container">
    <section class="body-content">
        <din class="course-image">
            <img class="course-img rounded" src="'.$rows['course_image'].'" alt="image not loading">
        </din>
        <div class="course-content ">
            <h3>TechSchool Exclusive</h3>
            <h1 class="d-1"><p class="custom-lead">  Bacholars of</p> '.$rows['course_name'].'</h1>
            <span class="rate-stars">
                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="rate-svg" viewBox="0 0 24 24">
                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                </svg>
                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="rate-svg" viewBox="0 0 24 24">
                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                </svg>
                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="rate-svg" viewBox="0 0 24 24">
                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                </svg> 
                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="rate-svg" viewBox="0 0 24 24">
                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                </svg>
                 <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="rate-svg" viewBox="0 0 24 24">
                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                </svg>
                <span class="review"> <b> 5 reviews </b></span>
            </span>
            <p class="description">
              '.$rows['course_desc'].'
            </p>
            <div class="m-1">
                <hr>
            </div>
            <div class="btn-body">
                <div class="pricing">'.$rows['course_price'].'</div>
                <form action="backend/enroll.php" method="POST">
                    <input name="id" type="hidden" value="'.$rows['course_id'].'">
                    <button class="course.btn pricing" type="submit"> Enroll Now

                    </button>

                </form>
            </div>
        </div>
    </section>
</div>';
}



?>


    
    
</body>
<?php include "components/_scripts.php"?>
<?php include "components/_footer.php"?>

</html>