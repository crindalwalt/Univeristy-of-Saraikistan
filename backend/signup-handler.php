<?php


include "dbcon.php";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $image = $_FILES['image'];

    echo "$fname <br> $email <br> $password <br> $cpassword";
    echo "<pre>";
    print_r($image);
    echo "</pre>";

    $file_name = $image['name'];
    $file_path = $image['full_path'];
    $file_type = $image['type'];
    $file_tmp_name = $image['tmp_name'];
    $file_size = $image['size'];
    $file_error = $image['error'];

    echo "$file_name <br> $file_path <br> $file_type <br> $file_error <br> $file_size <br> $file_tmp_name";




    //    empty fields check
    if (empty($fname) && empty($email) && empty($password) && empty($cpassword)) {
        echo "epmty fields found";
        header("location:../signup.php?field=empty");
    } else {

        // password check
        if ($password === $cpassword) {

            $sql = "SELECT * FROM`students` WHERE `student_email` = '$email'";
            $sql_run = mysqli_query($connection, $sql);
            $num = mysqli_num_rows($sql_run);

            if ($num < 1) {

                $hashed = password_hash($password, PASSWORD_DEFAULT);

                if ($file_error <= 0) {
                    echo " <br> no error during file upload";

                    $file_name_split = explode(".", $file_name);
                    $file_ext = strtolower(end($file_name_split));

                    $extension_allowed  = array("jpg", "png", "jpeg", "svg");
                    if (in_array($file_ext, $extension_allowed)) {
                        echo "<h2 style='color:green'>Extension matched</h2><br>";

                        $parmanent_file_name = uniqid("", true) . "." . $file_ext;
                        move_uploaded_file($file_tmp_name, "../assets/" . $parmanent_file_name);


                        $insertion_query = "INSERT INTO `students` ( `student_fname`, `student_email`, `student_password`, `student_pic`, `student_role`, `student_created`) VALUES ( '$fname', '$email', '$hashed', '$parmanent_file_name', '0', current_timestamp());";
                        // echo $user_query;
                        // $user_query_run = mysqli_query($connection, $insertion_query);

                        // while ($entry = mysqli_fetch_assoc($sql_run)) {
                            echo " \n inside the loop \n";



                            session_start();
                            $_SESSION['loggedin'] = true;
                            $_SESSION['username'] = $fname;
                            $_SESSION['useremail'] = $email;
                            $_SESSION['user_pic'] = $parmanent_file_name;


                            $sql_forid = "SELECT * FROM `students` WHERE `student_email` = '$email'";
                            $sql_forid_run = mysqli_query($connection,$sql_forid);
                            // while($id  = mysqli_fetch_assoc($sql_forid_run)){
                            //     echo $id['student_id'];
                            //     $_SESSION['userid'] =$id['student_id'] ;
                            // }
                            // var_dump($sql_forid_run);
                            echo "\n";
                            var_dump($_SESSION);
                        // }
                        // header("location:../home.php?acc=created");ech\\\

                        echo "at the end of the program";



                    } else {
                        echo "<h2 style='color:red'>Extension not allowed</h2><br>";
                    }
                } else {
                    echo "find error during file upload<br>";
                }







                

            } else {
                echo "student already exist";
                header("location:../signup.php?email=exits");
            }
        } else {
            echo "password does not match";
            header("location:../signup.php?pass=noMatch");
        }
    }
}
