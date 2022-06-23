<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "components/_links.php"; ?>
    <title>Document</title>
</head>

<body>
    <?php include "components/_navbar3.php"; ?>
    <div class="banner">
        <div class="innerBanner"></div>
        <h2>Find your Career Options here</h2>

    </div>

    <div class="temparea">
        <!-- <div class="flyer">
            <div class="flyer-head">
                <div class="f-head-uniLogo-holder">
                    <img src="assets/images/logo_noborder.png" alt="uni logo">
                </div>

            </div>
            <div class="flyer-body">
                <div class="f-body-content">
                    <p class="custom-lead">
                        Bacholars of
                    </p>
                    <p class="custom-h-2"> Computer Science</p>
                    <div class="rating-div" title="Rating">
                        <img src="assets/svg/star.svg" alt="" class="img-fluid">
                        <img src="assets/svg/star.svg" alt="" class="img-fluid">
                        <img src="assets/svg/star.svg" alt="" class="img-fluid">
                        <img src="assets/svg/star.svg" alt="" class="img-fluid">
                        <img src="assets/svg/star.svg" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="callOfAction">


                    <div class="tagsContainer">
                        <div class="tag">
                            <img class="tagimage img-fluid" src="assets/svg/tag.svg" alt=""> Tech
                        </div>
                        <div class="tag">
                            <img class="tagimage img-fluid" src="assets/svg/tag.svg" alt=""> Computers
                        </div>
                        <div class="tag">
                            <img class="tagimage img-fluid" src="assets/svg/tag.svg" alt=""> coding
                        </div>

                    </div>
                    <div class="btn-div">
                        <button class="custom-btn">Learn More</button>
                    </div>
                </div>

            </div>
        </div> -->
            <?php
                include "backend/dbcon.php";

                $course_fetch = "SELECT * FROM `courses`";
                $course_fetch_run = mysqli_query($connection , $course_fetch);
                // $number =mysqli_num_rows($course_fetch_run);
               
                while($rows = mysqli_fetch_assoc($course_fetch_run)){
                    echo '<div class="flyer">
                    <div class="flyer-head">
                        <div class="f-head-uniLogo-holder">
                            <img src="assets/images/logo_noborder.png" alt="uni logo">
                        </div>
        
                    </div>
                    <div class="flyer-body">
                        <div class="f-body-content">
                            <p class="custom-lead">
                                Bacholars of
                            </p>
                            <p class="custom-h-2"> '.$rows['course_name'].'</p>
                            <div class="rating-div" title="Rating">
                                <img src="assets/svg/star.svg" alt="" class="img-fluid">
                                <img src="assets/svg/star.svg" alt="" class="img-fluid">
                                <img src="assets/svg/star.svg" alt="" class="img-fluid">
                                <img src="assets/svg/star.svg" alt="" class="img-fluid">
                                <img src="assets/svg/star.svg" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="callOfAction">
        
        
                            <div class="tagsContainer">
                                <div class="tag">
                                    <img class="tagimage img-fluid" src="assets/svg/tag.svg" alt=""> Tech
                                </div>
                                <div class="tag">
                                    <img class="tagimage img-fluid" src="assets/svg/tag.svg" alt=""> Computers
                                </div>
                                <div class="tag">
                                    <img class="tagimage img-fluid" src="assets/svg/tag.svg" alt=""> coding
                                </div>
        
                            </div>
                            <div class="btn-div">
                            
                                <a type="hidden" href="course_detail.php?id='.$rows['course_id'].'" class=" deco_none custom-btn">Learn More</a>
                            </div>
                        </div>
        
                    </div>
                </div>';
                }

            ?>






     



    </div>














    <?php include "components/_footer.php"; ?>
    <?php include "components/_scripts.php"; ?>


</body>

</html>