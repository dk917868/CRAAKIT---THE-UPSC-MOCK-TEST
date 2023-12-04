<?php
include "../connection.php";
session_start();
if (!isset($_SESSION["username"])) {
?>
    <script type="text/javascript">
        window.location = "login.php";
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
<?php
}
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="UPSC mock exams are practice tests designed to simulate the actual UPSC exam. They are meant to help candidates understand the exam pattern, the types of questions asked, and the level of difficulty., A subject-wise UPSC mock exam would have 100 questions, with each subject having a set number of questions. Candidates would be required to answer the questions within a stipulated time frame and get a score based on their performance. The mock exam would help candidates identify their strengths and weaknesses and work on their preparation accordingly., Mock exams are practice tests designed to simulate the actual UPSC civil services exam and help candidates prepare for it. Typically, mock exams consist of a series of multiple-choice questions that cover the topics and subjects that are included in the actual UPSC civil services exam.">
    <meta name="keywords" content="craakit, Craakit.com,UPSC civil services Mock Test, UPSC civil services mock exam, NEET mock exam, SAT Mock exam, JEE Mock test, JEE mains mock test, UPSC civil services subject wise mock test, UPSC civil services online preparation test">

    <meta name="author" content="">

    <title>Craakit-Mock-Exam</title>
    <link href="../assets/img/craakit-icon.png" rel="icon">
    <link rel="apple-touch-icon" href="../assets/img/craakit-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        /* important updates css */
        .marquee {
            width: 100%;
            background: transparent;
            text-transform: initial;
            white-space: nowrap;
            overflow: hidden;
        }

        .marquee div {
            font-size: 20px;
            font-family: verdana;
            padding-left: 100%;
            display: inline-block;
            animation: animate 25s linear infinite;
        }

        @keyframes animate {
            100% {
                transform: translate(-80%, 0);
            }
        }
    </style>



</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3"><?php echo $_SESSION["username"] ?></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="./fullmockdashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Full mock Dashboard</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./subjectdashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Subject Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                UPSC civil Services Prelims(GS-1)
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa fa-list-ul" aria-hidden="true"></i><!-- <i class="fas fa-fw fa-cog"></i> -->
                    <span>Full Mock Test </span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white collapse-inner rounded">
                        <h6 class="collapse-header">Select here</h6>
                        <!-- <a class="collapse-item" href="#">UPSC-MAY-2022</a>-->

                        <?php
                        $result = mysqli_query($link, "select distinct(DateOfPaper) from mock_questions order by DateOfPaper desc");
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <a class="collapse-item text-center"><input type="button" class="btn" value="<?php echo $row["DateOfPaper"]; ?>" style="font-size: 12px; color:black" onclick="set_mock_exam_type_session(this.value);"></a>
                        <?php
                        }
                        ?>

                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                Subject Wise (UPSC Civil Services)
            </div>



            <!-- subject wise starts -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#SubjectWise" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Subject Wise</span>
                </a>
                <form method="post">
                    <div class="collapse" id="SubjectWise" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-primary py-2 collapse-inner rounded">

                            <a class="nav-link collapsed " data-toggle="collapse" data-target="#Economy" aria-expanded="false" aria-controls="pagesCollapseError">
                                <i class="fas fa-book-open"></i> &emsp; <input type="submit" value="ECONOMY" name="ECONOMY" style="background-color: transparent; border-color: transparent; color: #fff;">
                            </a>

                            <div class="collapse" id="Economy" aria-labelledby="headingOne" data-parent="#SubjectWise">
                                <div class="bg-white py-2 collapse-inner rounded">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <?php
                                        $subname="ECONOMY";
                                        $res1 = mysqli_query($link, "select distinct(DateOfPaper) from questions where Subject='$subname' group by Subject,DateOfPaper");
                                        while ($row = mysqli_fetch_array($res1)) {
                                        ?>
                                        <a class="collapse-item text-center"><input type="submit" class="btn" value="<?php echo $row["DateOfPaper"]; ?>" style="font-size: 12px; color:black" onclick="set_exam_type_session('<?php echo $subname; ?>',this.value);"></a>
                                        <?php
                                        }
                                        ?>
                                        <!-- <a class="nav-link text-dark text-center" href="#">jan</a>
                                        <a class="nav-link text-dark text-center" href="#">feb</a>
                                        <a class="nav-link text-dark text-center" href="#">mar</a> -->
                                    </nav>
                                </div>
                            </div>


                            <a class="nav-link collapsed" data-toggle="collapse" data-target="#Ethics" aria-expanded="false" aria-controls="pagesCollapseError">
                                <i class="fas fa-book-open"></i> &emsp; <input type="button" value="ETHICS" name="ETHICS" style="background-color: transparent; border-color: transparent; color: #fff;">
                            </a>
                            <div class="collapse" id="Ethics" aria-labelledby="headingOne" data-parent="#SubjectWise">
                                <div class="bg-white py-2 collapse-inner rounded">
                                    <nav class="sb-sidenav-menu-nested nav">
                                    <?php
                                    $subname="ETHICS";

                                    $res2 = mysqli_query($link, "select distinct(DateOfPaper) from questions where Subject='$subname' group by Subject,DateOfPaper  ");
                                    while ($row = mysqli_fetch_array($res2)) {
                                    ?>
                                    <a class="collapse-item text-center"><input type="submit" class="btn" value="<?php echo $row["DateOfPaper"]; ?>" style="font-size: 12px; color:black" onclick="set_exam_type_session('<?php echo $subname; ?>',this.value);"></a>
                                    <?php
                                    }
                                    ?>
                                        
                                    </nav>
                                </div>
                            </div>


                            <a class="nav-link collapsed" data-toggle="collapse" data-target="#PolityAndGovernance" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                <span><i class="fas fa-book-open"></i> &emsp; <input type="button" value="POLITY AND GOVERNANCE" name="POLITTYANDGOVERNANACE" style="background-color: transparent; border-color: transparent; color: #fff;"></span>
                            </a>
                            <div class="collapse" id="PolityAndGovernance" aria-labelledby="headingOne" data-parent="#SubjectWise">
                                <div class="bg-white py-2 collapse-inner rounded">
                                    <nav class="sb-sidenav-menu-nested nav">
                                    <?php
                                    $subname="POLITY AND GOVERNANCE";

                                        $res3 = mysqli_query($link, "select distinct(DateOfPaper) from questions where Subject='$subname' group by Subject,DateOfPaper  ");
                                        while ($row = mysqli_fetch_array($res3)) {
                                        ?>
                                        <a class="collapse-item"><input type="submit" class="btn" value="<?php echo $row["DateOfPaper"]; ?>" style="font-size: 12px; color:black" onclick="set_exam_type_session('<?php echo $subname; ?>', this.value);"></a>
                                        <?php
                                        }
                                        ?>
                                    </nav>
                                </div>
                            </div>
                            <a class="nav-link collapsed " data-toggle="collapse" data-target="#SocialIssues" aria-expanded="false" aria-controls="pagesCollapseError">
                                <i class="fas fa-book-open"></i> &emsp; <input type="button" value="SOCIAL ISSUES" name="SOCIALISSUES" style="background-color: transparent; border-color: transparent; color: #fff;">
                            </a>
                            <div class="collapse" id="SocialIssues" aria-labelledby="headingOne" data-parent="#SubjectWise">
                                <div class="bg-white py-2 collapse-inner rounded">
                                    <nav class="sb-sidenav-menu-nested nav">
                                    <?php
                                    $subname="SOCIAL ISSUES";

                                        $res4 = mysqli_query($link, "select distinct(DateOfPaper) from questions where Subject='$subname' group by Subject,DateOfPaper  ");
                                        while ($row = mysqli_fetch_array($res4)) {
                                        ?>
                                        <a class="collapse-item text-center"> <input type="submit" class="btn" value="<?php echo $row["DateOfPaper"]; ?>" style="font-size: 12px; color:black" onclick="set_exam_type_session('<?php echo $subname; ?>', this.value);"></a>
                                        <?php
                                        }
                                        ?>
                                    </nav>
                                </div>
                            </div>
                            <a class="nav-link collapsed " data-toggle="collapse" data-target="#Culture" aria-expanded="false" aria-controls="pagesCollapseError">
                                <i class="fas fa-book-open"></i> &emsp; <input type="button" value="CULTURE" name="CULTURE" style="background-color: transparent; border-color: transparent; color: #fff;">
                            </a>
                            <div class="collapse" id="Culture" aria-labelledby="headingOne" data-parent="#SubjectWise">
                                <div class="bg-white py-2 collapse-inner rounded">
                                    <nav class="sb-sidenav-menu-nested nav">
                                    <?php
                                    $subname="CULTURE";

                                    $res5 = mysqli_query($link, "select distinct(DateOfPaper) from questions where Subject='$subname' group by Subject,DateOfPaper  ");
                                    while ($row = mysqli_fetch_array($res5)) {
                                    ?>
                                    <a class="collapse-item text-center"> <input type="submit" class="btn" value="<?php echo $row["DateOfPaper"]; ?>" style="font-size: 12px; color:black" onclick="set_exam_type_session('<?php echo $subname; ?>', this.value);"></a>
                                    <?php
                                    }
                                    ?>
                                    </nav>
                                </div>
                            </div>
                            <a class="nav-link collapsed " data-toggle="collapse" data-target="#Security" aria-expanded="false" aria-controls="pagesCollapseError">
                                <i class="fas fa-book-open"></i> &emsp; <input type="button" value="SECURITY" name="SECURITY" style="background-color: transparent; border-color: transparent; color: #fff;">
                            </a>
                            <div class="collapse" id="Security" aria-labelledby="headingOne" data-parent="#SubjectWise">
                                <div class="bg-white py-2 collapse-inner rounded">
                                    <nav class="sb-sidenav-menu-nested nav">
                                    <?php
                                    $subname="SECURITY";

                                    $res6 = mysqli_query($link, "select distinct(DateOfPaper) from questions where Subject='$subname' group by Subject,DateOfPaper  ");
                                    while ($row = mysqli_fetch_array($res6)) {
                                    ?>
                                    <a class="collapse-item text-center"> <input type="submit" class="btn" value="<?php echo $row["DateOfPaper"]; ?>" style="font-size: 12px; color:black" onclick="set_exam_type_session('<?php echo $subname; ?>', this.value);"></a>
                                    <?php
                                    }
                                    ?>
                                    </nav>
                                </div>
                            </div>
                             <a class="nav-link collapsed " data-toggle="collapse" data-target="#SchemesInNews" aria-expanded="false" aria-controls="pagesCollapseError">
                                <i class="fas fa-book-open"></i> &emsp; <input type="button" value="SCHEMES IN NEWS" name="SCEMESINNEWS" style="background-color: transparent; border-color: transparent; color: #fff;">
                            </a>
                            <div class="collapse" id="SchemesInNews" aria-labelledby="headingOne" data-parent="#SubjectWise">
                                <div class="bg-white py-2 collapse-inner rounded">
                                    <nav class="sb-sidenav-menu-nested nav">
                                    <?php
                                    $subname="SCHEMES IN NEWS";

                                    $res7 = mysqli_query($link, "select distinct(DateOfPaper) from questions where Subject='$subname' group by Subject,DateOfPaper  ");
                                    while ($row = mysqli_fetch_array($res7)) {
                                    ?>
                                    <a class="collapse-item text-center"> <input type="submit" class="btn" value="<?php echo $row["DateOfPaper"]; ?>" style="font-size: 12px; color:black" onclick="set_exam_type_session('<?php echo $subname; ?>',this.value);"></a>
                                    <?php
                                    }
                                    ?>
                                    </nav>
                                </div>
                            </div>
                            <a class="nav-link collapsed " data-toggle="collapse" data-target="#ScienceAndTechnology" aria-expanded="false" aria-controls="pagesCollapseError">
                                <i class="fas fa-book-open"></i> &emsp; <input type="button" value="SCIENCE AND TECHNOLOGY" name="SCIENCEANDTECHNOLOGY" style="background-color: transparent; border-color: transparent; color: #fff;">
                            </a>
                            <div class="collapse" id="ScienceAndTechnology" aria-labelledby="headingOne" data-parent="#SubjectWise">
                                <div class="bg-white py-2 collapse-inner rounded">
                                    <nav class="sb-sidenav-menu-nested nav">
                                    <?php
                                    $subname="SCIENCE AND TECHNOLOGY";

                                        $res8 = mysqli_query($link, "select distinct(DateOfPaper) from questions where Subject='$subname' group by Subject,DateOfPaper  ");
                                        while ($row = mysqli_fetch_array($res8)) {
                                        ?>
                                        <a class="collapse-item text-center"> <input type="submit" class="btn" value="<?php echo $row["DateOfPaper"]; ?>" style="font-size: 12px; color:black" onclick="set_exam_type_session('<?php echo $subname; ?>',this.value);"></a>
                                        <?php
                                        }
                                        ?>
                                    </nav>
                                </div>
                            </div>
                            <a class="nav-link collapsed " data-toggle="collapse" data-target="#Environment" aria-expanded="false" aria-controls="pagesCollapseError">
                                <i class="fas fa-book-open"></i> &emsp; <input type="button" value="ENVIRONMENT" name="ENVIRONMENT" style="background-color: transparent; border-color: transparent; color: #fff;">
                            </a>
                            <div class="collapse" id="Environment" aria-labelledby="headingOne" data-toggle="collapse" data-parent="#SubjectWise">
                                <div class="bg-white py-2 collapse-inner rounded">
                                    <nav class="sb-sidenav-menu-nested nav">
                                    <?php
                                    $subname="ENVIRONMENT";

                                        $res9 = mysqli_query($link, "select distinct(DateOfPaper) from questions where Subject='$subname' group by Subject,DateOfPaper  ");
                                        while ($row = mysqli_fetch_array($res9)) {
                                        ?>
                                        <a class="collapse-item text-center"> <input type="submit" class="btn" value="<?php echo $row["DateOfPaper"]; ?>" style="font-size: 12px; color:black" onclick="set_exam_type_session('<?php echo $subname; ?>',this.value);"></a>
                                        <?php
                                        }
                                        ?>
                                    </nav>
                                </div>
                            </div>
                            <a class="nav-link collapsed " data-toggle="collapse" data-target="#InternationalRelations" aria-expanded="false" aria-controls="pagesCollapseError">
                                <i class="fas fa-book-open"></i> &emsp; <input type="button" value="INTERNATIONAL RELATIONS" name="INTERNATIONALRELATIONS" style="background-color: transparent; border-color: transparent; color: #fff; ">
                                 <!-- <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>  -->
                            </a>
                            <div class="collapse" id="InternationalRelations" data-toggle="collapse" aria-labelledby="headingOne" data-parent="#SubjectWise">
                                <div class="bg-white py-2 collapse-inner rounded">
                                    <nav class="sb-sidenav-menu-nested nav">
                                    <?php
                                    $subname="INTERNATIONAL RELATIONS";

                                    $res10 = mysqli_query($link, "select distinct(DateOfPaper) from questions where Subject='$subname' group by Subject,DateOfPaper  ");
                                    while ($row = mysqli_fetch_array($res10)) {
                                    ?>
                                    <a class="collapse-item text-center"> <input type="submit" class="btn" value="<?php echo $row["DateOfPaper"]; ?>" style="font-size: 12px; color:black" onclick="set_exam_type_session('<?php echo $subname; ?>',this.value);"></a>
                                    <?php
                                    }
                                    ?>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                
            </li>



            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Results
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Previous results</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Select here</h6>
                        <!-- <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a> -->
                        <a class="collapse-item" href="mock_prev_results.php">Mock Results</a>
                        <a class="collapse-item" href="prev_results.php">Subject Results</a>
                        <div class="collapse-divider"></div>



                        <!-- <a class="collapse-item" href="404.html">404 Page</a> -->


                    </div>
                </div>

            </li>

            <!-- Nav Item - Charts -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li> -->

            <!-- Nav Item - Tables -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>-->
            <li class="nav-item">
                <hr class="sidebar-divider d-none d-md-block">
                <div class="sidebar-heading">
                    Other
                </div>
                <a class="nav-link" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    <span>Logout</span></a>
            </li>
            <!-- Divider -->

            <hr class="sidebar-divider d-none d-md-block">
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                <img src="../assets/img/craakit-white-icon1.png" height="60px" width="150px">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block">
                       
                        </div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    <?php
                                    $res = mysqli_query($link, "select `uuid` from registration where `username`='$_SESSION[username]'");
                                    while ($row = mysqli_fetch_array($res)) {
                                        echo "<strong>UUID : " . $row['uuid'];
                                        echo "</strong>";
                                    }
                                    ?></span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="./profile.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400" aria-hidden="true"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                <script type="text/javascript">
                    function set_exam_type_session(Subject, DateOfPaper) {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

                                window.location = "./dashboard.php";
                            }

                        };
                        // xmlhttp.open("GET", "forajax/set_exam_type_session.php?DateOfPaper=" + DateOfPaper, true);
                        xmlhttp.open("GET", "forajax/set_exam_type_session.php?DateOfPaper=" + DateOfPaper + "&Subject=" + Subject, true);

                        xmlhttp.send(null);
                    }
                </script>

                <script type="text/javascript">
                    function set_mock_exam_type_session(DateOfPaper) {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

                                window.location = "./mock_dashboard.php";
                            }

                        };
                        xmlhttp.open("GET", "forajax/set_mock_exam_type_session.php?DateOfPaper=" + DateOfPaper, true);
                        xmlhttp.send(null);
                    }
                </script>