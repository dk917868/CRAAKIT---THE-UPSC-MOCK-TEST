<?php
session_start();
include "../connection.php";
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <link rel="stylesheet" href="../admin-checker/assets/css/admin_style.css">
    <title>Craakit-validator-Admin-Login</title>
	<link href="../assets/img/craakit-icon.png" rel="icon">
    <link rel="apple-touch-icon" href="../assets/img/craakit-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
</head>

<body>
    <header>

        <h3 class="title">Validator Admin Login & Registration Form</h3>
    </header>

    <!-- container div -->
    <div class="container">

        <!-- upper button section to select
             the login or signup form -->
        <div class="slider"></div>
        <div class="btn">
            <button class="login">Login</button>
            <button class="signup">Signup</button>
        </div>

        <!-- Form section that contains the
             login and the signup form -->
        <form name="form1" action="" method="POST">
            <div class="form-section">

                <!-- login form -->
                <div class="login-box">
                    <input type="text" class="email ele" name="username" placeholder="Enter the username" required>
                    <input type="password" class="password ele" name="password" placeholder="password" required>
                    <button type="submit" name="login" class="clkbtn">Login</button>
                    <a class="small" href="../index.php" target="_blank">Click here to go for Home page!</a>
                    <div class="alert alert-danger" id="errormsg" style="margin-top:10px; display: none">
                        <center><strong>Warning!</strong>
                            <p>Invalid Username or Password or not approved by main admin</p>
                    </div>
                    </center> <br>
                </div>
        </form>
        <!-- signup form -->
        <form name="form2" action="" method="POST">
            <div class="signup-box">
                <input type="text" name="username" class="name ele" placeholder="Enter username name" required>
                <input type="email" class="email ele" name="email" placeholder="youremail@email.com" required>
                <input type="password" class="password ele" name="password" placeholder="password" required>
                <input type="number" class="Phone ele" name="phone" placeholder="Enter your contact" required>
                <button type="submit" name="register" class="clkbtn">Signup</button>
                <div class="alert alert-success" id="success" style="margin-top:10px; display: none">
                    <strong>Success!</strong> Account registered succesfully
                </div>
                <div class="alert alert-danger" id="failure" style="margin-top:10px; display: none">
                    <strong>Already Exist!</strong> This Username Already Exists
                </div>
            </div>
        </form>
    </div>

    </div>
    <script src="index.js"></script>

    <script>
        let signup = document.querySelector(".signup");
        let login = document.querySelector(".login");
        let slider = document.querySelector(".slider");
        let formSection = document.querySelector(".form-section");

        signup.addEventListener("click", () => {
            slider.classList.add("moveslider");
            formSection.classList.add("form-section-move");
        });

        login.addEventListener("click", () => {
            slider.classList.remove("moveslider");
            formSection.classList.remove("form-section-move");
        });
    </script>



    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>

    <?php
    if (isset($_POST["login"])) {
        $count = 0;
        $username = mysqli_real_escape_string($link, $_POST['username']);
        $password = mysqli_real_escape_string($link, $_POST['password']);

        $res = mysqli_query($link, "select * from validator_admin_registration where username='$username' && password='$password' && approve_status='1' ");
        $count = mysqli_num_rows($res);

        if ($count == 0) {
    ?>
            <script type="text/javascript">
                document.getElementById("errormsg").style.display = "block";
            </script>

        <?php
        } else {
            $_SESSION["valadmin"] = $username;
        ?>
            <script type="text/javascript">
                window.location = "questions_category.php";
            </script>



        <?php
        }
    }
    if (isset($_POST["register"])) {
        $count = 0;
        $Bytes = random_bytes(3);
        $UUID = bin2hex($Bytes);
        $res = mysqli_query($link, "select * from validator_admin_registration where username='$_POST[username]'") or die(mysqli_error($link));
        $count = mysqli_num_rows($res);

        if ($count > 0) {
        ?>
            <script type="text/javascript">
                document.getElementById("success").style.display = "none";
                document.getElementById("failure").style.display = "block";
            </script>
        <?php
        } else {
            mysqli_query($link, "INSERT INTO `validator_admin_registration`(`id`, `username`, `password`, `email`, `phone`, `approve_status`) VALUES ('','$_POST[username]','$_POST[password]','$_POST[email]','$_POST[phone]','')");
        ?>
            <script type="text/javascript">
                document.getElementById("success").style.display = "block";
                document.getElementById("failure").style.display = "none";
            </script>
    <?php
        }
    }

    ?>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>