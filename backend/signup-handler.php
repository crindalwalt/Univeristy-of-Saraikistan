<?php
include "dbcon.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $file = $_FILES['image'];
    echo "$fname <br> $email <br> $password <br> $cpassword <br>";
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

    if ($password === $cpassword) {
        $hashed = password_hash($password, PASSWORD_DEFAULT);

        $mysqli = "SELECT * FROM `students` WHERE `student_email` = '$email' ";
        $mysqli_run = mysqli_query($connection, $mysqli);
        $number = mysqli_num_rows($mysqli_run);
        if ($number < 1) {

            if ($file_error <= 0) {
                echo "Find no error when upload file";

                $file_name_split = explode(".", $file_name);
                $file_extension =  strtolower(end($file_name_split));

                $extension_allowed = array("svg", "png", "jpg", "jpeg");
                if (in_array($file_extension, $extension_allowed)) {
                    echo "<h2 style='color:green'>Extension matched</h2><br>";
                    $parmanent_file_name = uniqid("", true) . "." . $file_extension;
                    move_uploaded_file($file_tmp_name, "../assets/images/" . $parmanent_file_name);

                    $insertion_query = "INSERT INTO `students` ( `student_fname`, `student_email`, `student_password`, `student_pic`, `student_role`, `student_created`) VALUES ('$fname', '$email', '$hashed', '$parmanent_file_name', '0', current_timestamp());";
                    $insertion_query_run = mysqli_query($connection, $insertion_query);
                    // while($entry = mysqli_fetch_assoc($mysqli_run)){
                        
                        session_start();
                        $_SESSION['loggedin'] = true;
                        $_SESSION['username'] =$fname;
                        $_SESSION['useremail']  = $email;
                        $_SESSION['user_pic'] = $parmanent_file_name;

                        
                        // var_dump($_SESSION);
                        $sql_forid = "SELECT * FROM `students` WHERE `student_email` = '$email'";
                        $sql_forid_run = mysqli_query($connection,$sql_forid);
                        // }
                        header("location: ../home.php?acc=created"); 


                } else {
                    echo "<h2 style='color:red'>Extension not allowed</h2><br>";
                }
            } else {
                echo "<br>finding an error during file upload";
            }
        } else {
            echo "student already exist";
            header("location:../signup.php?email=exist");
        }
    } else {
        echo "password does not matched";
        header("location:../signup.php?pass=noMatch");

    }
}
