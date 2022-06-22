<?php
 session_start();
 include "dbcon.php";
 if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $course_id = $_POST['id'];
    $user_id = $_SESSION['userid'];
   //  echo $user_id;

   //  echo " course_id = $course_id<br> User_id=$user_id";

         if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']=='true'){


            $course_insertion = "INSERT INTO `enrollments` ( `enr_course_id`, `enr_user_id`, `enr_completed`, `enr_created`) VALUES ('$course_id', '$user_id', '0', 'current_timestamp()');";

            $course_insertion_run = mysqli_query($connection , $course_insertion);
            header("location:../course_detail.php?login=true&id=$course_id");
            echo $course_insertion;

         }else{
            echo "user is not logged in<br>";
         }

 }







?>