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
    <div class="container">
        <section class="body-content">
            <din class="course-image">
                <img class="course-img rounded" src="assets/images/1.jpg" alt="image not loading">
            </din>
            <div class="course-content ">
                <h3>TechSchool Exclusive</h3>
                <h1 class="d-1">BS Software Engineering</h1>
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
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure autem esse earum et similique officia perferendis quas voluptate odio, unde reiciendis ut porro itaque, est natus nihil architecto placeat nulla distinctio animi error, facilis commodi? Est natus, ut excepturi ipsam repellendus voluptatum ipsa perspiciatis, velit sed sint, eius molestias harum?
                </p>
                <div class="m-1">
                    <hr>
                </div>
                <div class="btn-body">
                    <div class="pricing">$450</div>
                    <form action="backend/enroll_course.php" method="POST">
                        <input name="id" type="hidden" value="Emroll Now">
                        <button class="course.btn pricing" type="submit"> Enroll Now

                        </button>

                    </form>
                </div>
            </div>
        </section>
    </div>
    
</body>
<?php include "components/_scripts.php"?>
<?php include "components/_footer.php"?>

</html>