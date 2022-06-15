<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "components/_links.php" ?>
    <title>Login to continue</title>
</head>

<body>
    <div class="mainBox">
        <div class="innerBox">
            <div class="brand">
                <img src="assets/images/logo.png" alt="logo pic">
                <h1 class="py-5 px-3 ">University of Saraikistan</h1>
            </div>
            <div class="">
                <h2>Login to Continue</h2>    
            
            </div>
             <div class="my-3">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
             <div class="my-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div> 
            <div class="my-3 ">
                <input type="submit" class="btn btn-lg btn-danger px-5"  id="password">
            </div>
            <div class="my-2">
                <a class="unline" href="signup.php">Don't have an account <b>Create one</b></a>
            </div>
        </div>

    </div>


</body>
<?php include "components/_scripts.php" ?>

</html>