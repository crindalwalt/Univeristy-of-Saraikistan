<!-- <?php
        $passwrodAlert = false;
        if (isset($_GET['pass']) == "noMatch") {
            $passwrodAlert = true;
        }

        $emailexsit = false;
        if (isset($_GET['email']) == "exist") {
            $emailexsit = true;
        }

        $emptyfield = false;
        if (isset($_GET['field']) == "empty") {
           $emptyfield = true;
        }

        ?> -->





<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "components/_links.php" ?>
    <title>Login to continue</title>
</head>

<body>


    <div class="mainBox">
        <!-- notification -->
        <?php
        if ($passwrodAlert) {
            echo '
            <div id="alerty" class="alert alert-warning alert-dismissible fade show" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
            <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
            <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
          </svg>
               <strong>Password does not match
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>';
        }

        if ($emailexsit) {
            echo '<div id="alerty" class="alert alert-warning alert-dismissible fade show" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
            <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
            <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
          </svg>
        <strong>This email already exist!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        }

        if ($emptyfield) {
            echo '<div id="alerty" class="alert alert-warning alert-dismissible fade show" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
            <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
            <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
          </svg>
        <strong>Empty field founds!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        }



        ?>



        <div class="innerBox">
            <div class="brand">
                <img src="assets/images/logo.png" alt="logo pic">
                <h1 class="py-5 px-3 ">University of Saraikistan</h1>
            </div>
            <div class="">
                <h2>Join Us Now</h2>

            </div>
            <form action="backend/signup-handler.php" method="POST" enctype="multipart/form-data">
                <span class="my-3">
                    <label for="fname">Full Name</label>
                    <input type="text" class="form-control" id="fname" name="fname">
                </span>
                <span class="my-3">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email">
                </span>
                <span class="my-3">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </span>
                <span class="my-3">
                    <label for="cpassword">Confirm Password</label>
                    <input type="password" class="form-control" id="cpassword" name="cpassword">
                </span>
                 <span class="my-3">
                    <label for="image">Upload Picture</label>
                    <input type="file" class="form-control" id="image" name="image">
                </span>
                <span class="my-3 ">
                    <input type="submit" class="btn my-2 btn-lg btn-danger px-5" id="password">
                </span>
                <div class="my-2">
                    <a class="unline" href="index.php">Already have an account <b>Login </b></a>
                </div>
            </form>
        </div>

    </div>


</body>
<?php include "components/_scripts.php" ?>

</html>