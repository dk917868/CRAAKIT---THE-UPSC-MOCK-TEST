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

<title>Craakit-Main-Admin-Login</title>
	<link href="../assets/img/craakit-icon.png" rel="icon">
    <link rel="apple-touch-icon" href="../assets/img/craakit-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" type="text/css">

    <style type="text/css">
        body {
            width: 100%;
            background: url(images/sk.jpg);
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>


</head>

<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo" style="color:white">
                    ADMIN LOGIN
                </div>
                <div class="login-form">
                    <form name="form1" action="" method="POST">
                        <div class="form-group">
                            <label>USERNAME:</label>
                            <input type="text" name="username" class="form-control" placeholder="username" required>
                        </div>
                        <div class="form-group">
                            <label>PASSWORD:</label>
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                        </div>

                        <button type="submit" name="submit1" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                        <i>
                            <center>
                                <p><a class="user-login" href="../../Mock_exam/" target="_blank" style="background-color: transparent; padding-left: 250px;"> click here to login as USER</a></p>
                            </center>
                        </i>

                        <div class="alert alert-danger" id="errormsg" style="margin-top:10px; display: none">
                            <strong>Warning!</strong> Invalid Username or Password
                        </div><br>

                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


</body>

</html>
<?php
if (isset($_POST["submit1"])) {
    $count = 0;
    $username = mysqli_real_escape_string($link, $_POST['username']);
    $password = mysqli_real_escape_string($link, $_POST['password']);

    $res = mysqli_query($link, "select * from admin_login where username='$username' && password='$password'");
    $count = mysqli_num_rows($res);

    if ($count == 0) {
?>
        <script type="text/javascript">
            document.getElementById("errormsg").style.display = "block";
        </script>

    <?php
    } else {
        $_SESSION["admin"] = $username;
    ?>
        <script type="text/javascript">
            window.location = "sub_admin_approval.php";
        </script>



<?php
    }
}
?>