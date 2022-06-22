<?php
include "dbcon.php";

if($_SERVER['REQUEST_METHOD']== 'POST'){
    $C_name = $_POST['C-name'];
    $Description = $_POST['Description'];
    $price = $_POST['price'];

    // echo "$C_name <br> $Description <br> $price";
    $Course_sql = "INSERT INTO `courses` ( `course_name`, `course_desc`, `course_price`, `course_image`) VALUES ( '$C_name', '$Description', '$price', 'assets/images/5.jpg');";
    $Course_sql_run= mysqli_query($connection , $Course_sql);
    header("location:../dashboard.php?course=add");




}





?>