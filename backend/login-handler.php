<?php
include "dbcon.php";
if($_SERVER['REQUEST_METHOD']== 'POST'){
    $email = $_POST['email'];
    $password = $_POST['password'];
    echo " $email <br> $password";


    $email_verify = "SELECT * FROM `students`WHERE `student_email` = '$email'";
    $email_verify_run = mysqli_query($connection , $email_verify);
    $num_email = mysqli_num_rows($email_verify_run);
    while($entry = mysqli_fetch_assoc($email_verify_run)){
        $student_password_in_db = $entry['student_password'];
        echo $student_password_in_db;
        // $check = password_verify($password , $student_password_in_db );
        // var_dump($check);
        if(password_verify($password , $student_password_in_db )){
            echo"password matched";

            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $entry['student_fname'];
            $_SESSION['useremail'] = $entry['student_email'];
            $_SESSION['userid'] = $entry['student_id'];
            $_SESSION['user_pic'] = $entry['student_pic'];

            echo $_SESSION['username'] ;
            echo $_SESSION['useremail'] ;
            $_SESSION['role'] =  $entry['student_role'];
            echo $role;
            if($role == 0){
                header("location:../home.php?acc=created");
                
            }else if ($role == 1){
                header("location:../dashboard.php?acc=created");
                
            }else{
                header("location:../login.php?acc=created");
                
            }

        }else{
            echo"Wrong password";
            header("location:../index.php?pass=wrong");
        }
    }
}






?>