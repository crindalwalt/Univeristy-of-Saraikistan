<?php
include "dbcon.php";
if($_SERVER['REQUEST_METHOD']=='POST'){
    $delet = $_POST['delet'];

    $del_entry = "DELETE FROM `students` WHERE `students`.`student_id` = $delet";

    $del_entry = mysqli_query($connection , $del_entry);

    header("location:../dashboard.php?delet=done");

}


?>