
<?php
// $delet = false;
// if(isset($_GET['delet']) == "done");
// $delet = true;



?>




<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "components/_links.php"; ?>
    <title>Document</title>
</head>

<body>
    <?php include "components/_navbar3.php"; ?>

    <!-- <?php
    if($delet){
        echo '<div class="container ">
        <div id="alertx" class="alert alert-warning alert-dismissible fade show" role="alert">
                <svg class="bi flex-shrink-0 me-2" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                </svg>
           <strong> Student Deleted Succesfully
           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
    </div>';
    }
    
    
    
    
    ?> -->

    <div class="container1 ">
        <div class="D_image_box">
            <img class="D_image" src="assets/images/logo_noborder.png" alt="dashboard image">
        </div>
    </div>

    <div class="container D_boxes_flex">
        <div class="D_boxes">
            <div class="inner-d-box">
                <div class="inner-d-box-left d-box-side">
                     <?php
                        include "backend/dbcon.php";
                        $students = "SELECT  * FROM `students` ";
                        $students_run = mysqli_query($connection , $students);
                        $numbers = mysqli_num_rows($students_run);
                        echo $numbers;
                    ?> 
                </div>
                <div class="inner-d-box-right d-box-side">
                    Students Enrolled
                </div>
            </div>
            
        </div>
        <div class="D_boxes">
        <div class="inner-d-box">
                <div class="inner-d-box-left d-box-side">
                     <?php
                        include "backend/dbcon.php";
                        $students = "SELECT  * FROM `courses` ";
                        $students_run = mysqli_query($connection , $students);
                        $numbers = mysqli_num_rows($students_run);
                        echo $numbers;
                    ?> 
                </div>
                <div class="inner-d-box-right d-box-side">
                    Courses taught
                </div>
            </div>
        </div>
        <div class="D_boxes">
        <div class="inner-d-box">
                <div class="inner-d-box-left d-box-side">
                     <?php
                        include "backend/dbcon.php";
                        $students = "SELECT  * FROM `courses` ";
                        $students_run = mysqli_query($connection , $students);
                        $numbers = mysqli_num_rows($students_run);
                        echo $numbers;
                    ?> 
                </div>
                <div class="inner-d-box-right d-box-side">
                    Classes Active
                </div>
            </div>
        </div>
    </div>

    <!--------------table starts here/--------- -->
    <div class="container">
        <h1 class="heading-name">Students</h1>
        <div class="my-3">
            <hr>
        </div>
        <table class="table">
            <thead class="table_head">
                <tr>
                    <th>Roll No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Course Name</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                <?php
                include "backend/dbcon.php";
                $index = 1;
                $query = "SELECT * FROM `students`";
                // $query = "SELECT * FROM `courses`";
                $query_run = mysqli_query($connection , $query);
                while($entry = mysqli_fetch_assoc($query_run)){
                    echo ' <tr class="table_row">
                    <td class="table_data"> '. $index.'</td>
                    <td class="table_data">'.$entry['student_fname'].' </td>
                    <td class="table_data">'.$entry['student_email'].'</td>
                    <td class="table_data"> BS software Engineering</td>
                    <td>
                        <form action="backend/delstudent.php" method="POST">
                            <input type="hidden" value="'.$entry['student_id'].'" name="delet">
                            <input type="submit" value="DELET" class="D_btn">
                        </form>
                    </td>
                <tr>';
                $index++;
                }
                
                
                ?>
            </tbody>
        </table>
    </div>

    <!------------- dashboard form starts here--------------- -->
    <div class="container D_flex">
        <h1 class="heading-name">Add new Courses</h1>
        <div class="my-3">
            <hr>
        </div>
        <div class="D_form">
            <form class="form" action="backend/course_insertion.php" method="POST">
                <div class="my-3">
                    <label class="D_name" for="C-name">Course Name</label>
                    <input type="text" class="form-control length D_transparent" id="C-name" name="C-name">
                </div>
                <div class="my-3">
                    <h4 class="D_name" for="desc">Course Description</h4>
                    <textarea class="D_transparent" name="Description" id="desc" cols="90" rows="8"></textarea>
                </div>
                <div class="my-3">
                    <label class="D_name" for="price">Course price</label>
                    <input type="number" class="form-control length2 D_transparent" id="price" name="price">
                </div>
                <div class="my-3">
                    <label class="D_name" for="image">Course Image</label>
                    <input type="file" class="form-control length2 D_transparent" id="image" name="image">
                </div>
                <input name="id" type="hidden" value="id">
                <button class="course.btn pricing2" type="submit"> Add New

                </button>

            </form>

        </div>
    </div>







    <?php include "components/_footer.php"; ?>
</body>
<?php include "components/_scripts.php"; ?>

</html>