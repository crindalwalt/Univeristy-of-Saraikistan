<?php
include "dbcon.php";

if($_SERVER['REQUEST_METHOD']== 'POST'){
    $C_name = $_POST['C-name'];
    $Description = $_POST['Description'];
    $price = $_POST['price'];
    $file = $_FILES['image'];

    echo "$C_name <br> $Description <br> $price <br> ";
    echo "<pre>";
    print_r($file);
    echo "</pre>";


    $file_name = $file['name'];
    $file_path = $file['full_path'];
    $file_type = $file['type'];
    $file_tmp_name = $file['tmp_name'];
    $file_size = $file['size'];
    $file_error = $file['error'];

    echo "$file_name <br> $file_path <br> $file_type <br> $file_error <br> $file_size <br> $file_tmp_name";

    if($file_error<=0){
        echo "no error during file upload<br><br>";
       $file_name_split = explode(".",$file_name);
       $file_actual_extension = strtolower(end($file_name_split));
        // echo $file_actual_extension;
        $extension_allowed = array("svg" , "png" , "jpg" , "jpeg");
        if(in_array($file_actual_extension , $extension_allowed)){
            echo "<h2 style='color:green'>Extension matched</h2><br>";

            $parmanent_file_name = uniqid("",true) .".". $file_actual_extension;
            move_uploaded_file($file_tmp_name, "../assets/course_images/".$parmanent_file_name);
            
            $course_insertion = "INSERT INTO `courses` ( `course_name`, `course_desc`, `course_price`, `course_image`) VALUES ('$C_name', '$Description', '$price', '$parmanent_file_name');";
            
            $course_insertion_run = mysqli_query($connection , $course_insertion);
            
            header("location:../dashboard.php?course=add");

        }else{
            echo "<h2 style='color:red'>Extension not allowed</h2><br>";

        }









    }else{
        echo "error occured during file upload<br>";

    }

  



}





?>