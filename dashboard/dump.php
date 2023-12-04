<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities">
        <i class="fa fa-book" aria-hidden="true"></i>
        <span>Subject Wise</span>
    </a>

    <div id="collapseUtilities" class="collapse" data-target="#collapseUtilities">
        <div class="bg-dark py-2 rounded">
            <?php

            $res = mysqli_query($link, "select distinct Subject from questions");
            foreach ($res as $row) {

            ?>

                <form method="Post">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse">

                        <i class="fa fa-book" aria-hidden="true"><input type="button" class="btn" name="soniya" value="<?php echo $row["Subject"]; ?>" style="font-size: 12px; color:white"></i>
                    </a>
                </form>

                <?php
                if (array_key_exists('soniya', $_POST)) {
                    $soniya = $_POST['soniya'];
                    echo $soniya;
                }
                ?>

                <!-- if (isset($_POST[ $row["Subject"]])) {
                                $query="select distinct(DateOfPaper) from questions where Subject='$row[Subject]' group by Subject,DateOfPaper ";
                                $result = mysqli_query($conn, $query);
                                while ($row = mysqli_fetch_array($result)) {
                                    echo $row['DateOfPaper'];
                                }

                            }
                            ?> -->
                <!-- <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                                <div class="bg-white py-2  rounded">

                                    <?php

                                    // $res = mysqli_query($link, "select distinct(DateOfPaper) from questions where Subject='$row[Subject]' group by Subject,DateOfPaper  ");
                                    // while ($row = mysqli_fetch_array($res)) {
                                    ?>
                                        <a class="collapse-item"> <input type="button" class="btn" value="<?php echo $row["DateOfPaper"]; ?>" style="font-size: 12px; color:black" onclick="set_exam_type_session(this.value);"></a>
                                    <?php
                                    // }
                                    ?>

                                </div>
                            </div> -->

            <?php

            }
            ?>

            <!-- <a class="collapse-item" href="#">Select</a> -->

        </div>
    </div>
</li>

<!-- subject wise dynamic tried  -->

<li class="nav-item">
    <!-- <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities">
                    <i class="fa fa-book" aria-hidden="true"></i>
                    <span>Subject Wise</span>
                </a>

                <div id="collapseUtilities" class="collapse">
                    <div class="bg-dark py-2 rounded"> -->
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fa fa-book" aria-hidden="true"></i><!-- <i class="fas fa-fw fa-cog"></i> -->
        <span>Subject Wise</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-dark collapse-inner rounded">

            <?php

            $res = mysqli_query($link, "select distinct Subject from questions");
            foreach ($res as $row) {

            ?>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#sub1" aria-expanded="true" aria-controls="collapseTwo">

                    <i class="fa fa-book-open" aria-hidden="true"></i><input type="button" class="btn" name="soniya" value="<?php echo $row["Subject"]; ?>" style="font-size: 12px; color:white">
                </a>
                <?php
                $subNumber = 1;
                $newSubNumber = $subNumber + 1;
                ?>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#sub<?php echo $newSubNumber; ?>" aria-expanded="true" aria-controls="collapseTwo">

                    <i class="fa fa-book-open" aria-hidden="true"></i><input type="button" class="btn" name="soniya" value="<?php echo $row["Subject"]; ?>" style="font-size: 12px; color:white">
                </a>


                <div id="sub1" class="collapse" aria-labelledby="headingSubjects" data-target="" data-parent="#accordionSidebar">
                    <div class="bg-white collapse-inner rounded">



                        <?php

                        $res = mysqli_query($link, "select distinct(DateOfPaper) from questions where Subject='$row[Subject]' group by Subject,DateOfPaper  ");
                        while ($row = mysqli_fetch_array($res)) {
                        ?>

                            <span> <a class="collapse-item"><input type="button" class="btn" value="<?php echo $row["DateOfPaper"]; ?>" style="font-size: 12px; color:black" onclick="set_exam_type_session(this.value);"></a></span>
                        <?php
                        }
                        ?>

                    </div>
                </div>

            <?php

            }
            ?>

            <!-- <a class="collapse-item" href="#">Select</a> -->

        </div>
    </div>
</li>


<!-- Divider -->
<hr class="sidebar-divider">



<?php

$conn = mysqli_connect('localhost', 'zyrotech_cdr123', 'sdlcdr123***', 'zyrotech_cdr');
if (array_key_exists('ECONOMY', $_POST)) {
    $_SESSION['subname'] = $_POST["ECONOMY"];
    // button1();
} else if (array_key_exists('security', $_POST)) {
    // button2();
}


?>
<?php
function button1()
{
?>
    <form method="post">
        <div class="dropdown">
            <button type="submit" name="routemap" class="shadow btn btn-primary m-4">
                <i class="ti-map"></i>

            </button>

            <button type="submit" name="interval" class="shadow btn btn-primary m-4">
                <i class="ti-map-alt"></i>
            </button>

            <button type="submit" name="morning" class="shadow btn btn-primary m-4">
                <i class="ti-shine"></i>
            </button>
            <button type="submit" name="night" class="shadow btn btn-primary m-4">
                <i class="fa fa-moon-o"></i>
            </button>
        </div>
    </form>
<?php
}
?>

<a class="nav-link collapsed" id="my-dropdown" href="#" data-toggle="collapse" data-target="#Ethics" aria-expanded="false" aria-controls="pagesCollapseError">
    <i class="fas fa-book-open"></i> &emsp; <input type="button" value="ETHICS" name="ETHICS" style="background-color: transparent; border-color: transparent; color: #fff;">
</a>
<div class="collapse" id="Ethics" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
    <div class="bg-white py-2 collapse-inner rounded">
        <nav class="sb-sidenav-menu-nested nav">
            <a class="nav-link text-dark text-center" href="#">APR</a>
            <a class="nav-link text-dark text-center" href="#">MAY</a>
            <a class="nav-link text-dark text-center" href="#">JUN</a>
        </nav>
    </div>
</div>
</nav>
<nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#PolityAndGovernance" aria-expanded="false" aria-controls="pagesCollapseAuth">
        <span><i class="fas fa-book-open"></i> &emsp; <input type="button" value="POLITY AND GOVERNANCE" name="POLITTYANDGOVERNANACE" style="background-color: transparent; border-color: transparent; color: #fff;"></span>
    </a>
    <div class="collapse" id="PolityAndGovernance" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
        <div class="bg-white py-2 collapse-inner rounded">
            <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link text-dark text-center" href="#">JUL</a>
                <a class="nav-link text-dark text-center" href="#">AUG</a>
                <a class="nav-link text-dark text-center" href="#">SEP</a>
            </nav>
        </div>
    </div>
    <a class="nav-link collapsed " href="#" data-toggle="collapse" data-target="#SocialIssues" aria-expanded="false" aria-controls="pagesCollapseError">
        <i class="fas fa-book-open"></i> &emsp; <input type="button" value="SOCIAL ISSUES" name="SOCIALISSUES" style="background-color: transparent; border-color: transparent; color: #fff;">
    </a>
    <div class="collapse" id="SocialIssues" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
        <div class="bg-white py-2 collapse-inner rounded">
            <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link text-dark text-center" href="#">OCT</a>
                <a class="nav-link text-dark text-center" href="#">NOV</a>
                <a class="nav-link text-dark text-center" href="#">DEC</a>
            </nav>
        </div>
    </div>
    <a class="nav-link collapsed " href="#" data-toggle="collapse" data-target="#Culture" aria-expanded="false" aria-controls="pagesCollapseError">
        <i class="fas fa-book-open"></i> &emsp; <input type="button" value="CULTURE" name="CULTURE" style="background-color: transparent; border-color: transparent; color: #fff;">
    </a>
    <div class="collapse" id="Culture" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
        <div class="bg-white py-2 collapse-inner rounded">
            <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link text-dark text-center" href="#">OCT</a>
                <a class="nav-link text-dark text-center" href="#">NOV</a>
                <a class="nav-link text-dark text-center" href="#">DEC</a>
            </nav>
        </div>
    </div>
    <a class="nav-link collapsed " href="#" data-toggle="collapse" data-target="#Security" aria-expanded="false" aria-controls="pagesCollapseError">
        <i class="fas fa-book-open"></i> &emsp; <input type="button" value="SECURITY" name="SECURITY" style="background-color: transparent; border-color: transparent; color: #fff;">
    </a>
    <div class="collapse" id="Security" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
        <div class="bg-white py-2 collapse-inner rounded">
            <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link text-dark text-center" href="#">OCT</a>
                <a class="nav-link text-dark text-center" href="#">NOV</a>
                <a class="nav-link text-dark text-center" href="#">DEC</a>
            </nav>
        </div>
    </div>
    <a class="nav-link collapsed " href="#" data-toggle="collapse" data-target="#SchemesInNews" aria-expanded="false" aria-controls="pagesCollapseError">
        <i class="fas fa-book-open"></i> &emsp; <input type="button" value="SCHEMES IN NEWS" name="SCEMESINNEWS" style="background-color: transparent; border-color: transparent; color: #fff;">
    </a>
    <div class="collapse" id="SchemesInNews" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
        <div class="bg-white py-2 collapse-inner rounded">
            <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link text-dark text-center" href="#">OCT</a>
                <a class="nav-link text-dark text-center" href="#">NOV</a>
                <a class="nav-link text-dark text-center" href="#">DEC</a>
            </nav>
        </div>
    </div>
    <a class="nav-link collapsed " href="#" data-toggle="collapse" data-target="#ScienceAndTechnology" aria-expanded="false" aria-controls="pagesCollapseError">
        <i class="fas fa-book-open"></i> &emsp; <input type="button" value="SCIENCE AND TECHNOLOGY" name="SCIENCEANDTECHNOLOGY" style="background-color: transparent; border-color: transparent; color: #fff;">
    </a>
    <div class="collapse" id="ScienceAndTechnology" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
        <div class="bg-white py-2 collapse-inner rounded">
            <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link text-dark text-center" href="#">OCT</a>
                <a class="nav-link text-dark text-center" href="#">NOV</a>
                <a class="nav-link text-dark text-center" href="#">DEC</a>
            </nav>
        </div>
    </div>
    <a class="nav-link collapsed " href="#" data-toggle="collapse" data-target="#Environment" aria-expanded="false" aria-controls="pagesCollapseError">
        <i class="fas fa-book-open"></i> &emsp; <input type="button" value="ENVIRONMENT" name="ENVIRONMENT" style="background-color: transparent; border-color: transparent; color: #fff;">
    </a>
    <div class="collapse" id="Environment" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
        <div class="bg-white py-2 collapse-inner rounded">
            <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link text-dark text-center" href="#">OCT</a>
                <a class="nav-link text-dark text-center" href="#">NOV</a>
                <a class="nav-link text-dark text-center" href="#">DEC</a>
            </nav>
        </div>
    </div>
    <a class="nav-link collapsed " href="#" data-toggle="collapse" data-target="#InternationalRelations" aria-expanded="false" aria-controls="pagesCollapseError">
        <i class="fas fa-book-open"></i> &emsp; <input type="button" value="INTERNATIONAL RELATIONS" name="INTERNATIONALRELATIONS" style="background-color: transparent; border-color: transparent; color: #fff; ">
        <!-- <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div> -->
    </a>
    <div class="collapse" id="InternationalRelations" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
        <div class="bg-white py-2 collapse-inner rounded">
            <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link text-dark text-center" href="#">OCT</a>
                <a class="nav-link text-dark text-center" href="#">NOV</a>
                <a class="nav-link text-dark text-center" href="#">DEC</a>
            </nav>
        </div>
    </div>





    <!-- fasfff dummy -->
    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Subject Wise (UPSC Civil Services)
    </div>
    <?php
    // include '../connection.php';
    if (isset($_POST['dfd'])) {
        $query = "truncate table soni";
        $run = mysqli_query($link, $query);

        // Store the value of the text input element in a PHP variable
        $mytext = $_POST['dfd'];
        // Prepare the SQL statement
        echo 'You entered: ' . $mytext;
        $query1 = "INSERT INTO `soni`(`sub`) VALUES ('$mytext')";
        $run = mysqli_query($link, $query1);
        $query2 = "select * from soni";
        $result = mysqli_query($link, $query2);
        if ($row = mysqli_fetch_assoc($result)) {
            $ravi = $row["sub"];
            echo 'You entered: ' . $ravi;
            $res = mysqli_query($link, "select distinct(DateOfPaper) from questions where Subject='$ravi' group by Subject,DateOfPaper");

    ?>



            <!-- subject wise starts -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#SubjectWise" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Subject Wise</span>
                </a>
                <!-- <div class="collapse" id="SubjectWise" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion"> -->

                <form method="post">

                    <div id="SubjectWise" class="collapse text-center" aria-labelledby="headingSubjects" data-parent="#accordionSidebar">
                        <div class="bg-primary py-3 collapse-inner rounded " id="my-dropdown">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <div class="nav-link collapsed " data-toggle="collapse" data-target="#Economy" aria-expanded="true" aria-controls="pagesCollapseError">
                                    <i class="fas fa-book-open"></i> &emsp; <input type="submit" value="shalini" name="dfd" style="background-color: transparent; border-color: transparent; color: #fff;">
                                </div>

                                <div class="collapse" id="Economy" aria-labelledby="headingOne">
                                    <div class="bg-white py-2 collapse-inner rounded">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <?php
                                            while ($row3 = mysqli_fetch_array($res)) {
                                            ?>
                                                <span> <a class="collapse-item"><input type="button" class="btn" value="<?php echo $row3["DateOfPaper"]; ?>" style="font-size: 12px; color:black" onclick="set_exam_type_session(this.value);"></a></span>
                                    <?php
                                            }
                                        }
                                    }
                                    ?>
                                        </nav>
                                    </div>
                                </div>

                            </nav>
                        </div>
                    </div>
                </form>


                <!-- registration page validation -->1
                <?php
                if (isset($_POST["submit1"])) {
                    $count = 0;
                    $Bytes = random_bytes(3);
                    $UUID = bin2hex($Bytes);
                    $res = mysqli_query($link, "select * from registration where username='$_POST[username]'") or die(mysqli_error($link));
                    $count = mysqli_num_rows($res);

                    if ($count > 0) {
                ?>
                        <script type="text/javascript">
                            document.getElementById("success").style.display = "none";
                            document.getElementById("failure").style.display = "block";
                        </script>
                    <?php
                    } else {
                        mysqli_query($link, "insert into registration values('$UUID','$_POST[firstname]','$_POST[lastname]','$_POST[username]','$_POST[password]','$_POST[email]','$_POST[rollno]','$_POST[contact]','$_POST[course]')");
                    ?>
                        <script type="text/javascript">
                            document.getElementById("success").style.display = "block";
                            document.getElementById("failure").style.display = "none";
                            //window.location = "../subscription.php";
                        </script>
                <?php
                    }
                }
                ?>

                <!-- second register -->

                <?php
                if (isset($_POST["submit1"])) {
                    $count = 0;
                    $Bytes = random_bytes(3);
                    $UUID = bin2hex($Bytes);
                    $res = mysqli_query($link, "select * from registration where username='$_POST[username]'") or die(mysqli_error($link));
                    $count = mysqli_num_rows($res);
                    $rollno = $_POST['rollno'];
                    $phone = $_POST['phone'];
                    $email = $_POST['email'];
                    $emailpattern = "/^[^\s@]+@[^\s@]+\.[^\s@]+$/"; // regex pattern for email address
                    $phonepattern = "/^[0-9]{10}$/"; // regex pattern for a 10-digit phone number

                    if ($count > 0) {
                        // Roll number is valid
                        if (preg_match("/^[0-9]{7}$/", $rollno)) {
                            if (preg_match($phonepattern, $phone)) {
                                if (preg_match($emailpattern, $email)) {
                                    // echo "Email address is valid";
                                    mysqli_query($link, "insert into registration values('$UUID','$_POST[firstname]','$_POST[lastname]','$_POST[username]','$_POST[password]','$_POST[email]','$_POST[rollno]','$_POST[phone]','$_POST[course]')");
                ?>
                                    <script type="text/javascript">
                                        document.getElementById("success").style.display = "block";
                                        document.getElementById("failure").style.display = "none";
                                        //window.location = "../subscription.php";
                                    </script>
                        <?php
                                } else {
                                    echo "Invalid email address";
                                }
                            } else {
                                echo "<script>alert('Phone no should be 10 digit')</script>";
                            }
                        } else {
                            echo "<script>alert('roll no should be & digit')</script>";
                        }


                        ?>
                        <script type="text/javascript">
                            document.getElementById("success").style.display = "block";
                            document.getElementById("failure").style.display = "none";
                            //window.location = "../subscription.php";
                        </script>
                    <?php
                    } else {
                        // mysqli_query($link, "insert into registration values('$UUID','$_POST[firstname]','$_POST[lastname]','$_POST[username]','$_POST[password]','$_POST[email]','$_POST[rollno]','$_POST[phone]','$_POST[course]')");
                        echo "<script>alert('Enter correct and unique details')</script>";
                    ?>
                        <script type="text/javascript">
                            document.getElementById("success").style.display = "none";
                            document.getElementById("failure").style.display = "block";
                        </script>
                <?php
                    }
                }
                ?>

----------------------------------------------soniya's codes for subject---------------------------------------

<div class="sidebar-heading">
                Subject Wise (UPSC Civil Services)
            </div>



            <!-- subject wise starts -->
            <form method="post">
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#SubjectWise" aria-expanded="true" aria-controls="collapsePages">
                        <i class="fas fa-fw fa-book"></i>
                        <span>Subject Wise</span>
                    </a>

                    <div class="collapse" id="SubjectWise" aria-labelledby="headingTwo" data-bs-parent="#">



                        <div id="SubjectWise" class="collapse text-center" aria-labelledby="headingSubjects" data-parent="#accordionSidebar">
                            <div class="bg-primary py-3 collapse-inner rounded " id="my-dropdown">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <div class="nav-link collapsed " data-toggle="collapse" data-target="#Economy" aria-expanded="true" aria-controls="pagesCollapseError">
                                        <i class="fas fa-book-open"></i> &emsp; <input type="submit" value="ECONOMY" name="dfd" style="background-color: transparent; border-color: transparent; color: #fff;">
                                    </div>

                                    <div class="collapse" id="Economy" aria-labelledby="headingOne">
                                        <div class="bg-white py-2 collapse-inner rounded">
                                            <nav class="sb-sidenav-menu-nested nav">
            </form>
            <?php
            // include '../connection.php';
            if (isset($_POST['dfd'])) {
                $query = "truncate table soni";
                $run = mysqli_query($link, $query);

                // Store the value of the text input element in a PHP variable
                $mytext = $_POST['dfd'];
                // Prepare the SQL statement
                // echo 'You entered: ' . $mytext;
                $query1 = "INSERT INTO `soni`(`sub`) VALUES ('$mytext')";
                $run = mysqli_query($link, $query1);
                $query2 = "select * from soni";
                $result = mysqli_query($link, $query2);
                if ($row = mysqli_fetch_assoc($result)) {
                    $ravi = $row["sub"];
                    $res = mysqli_query($link, "select distinct(DateOfPaper) from questions where Subject='$ravi' group by Subject,DateOfPaper");
                    while ($rowZ = mysqli_fetch_array($res)) {

            ?>
                        <span> <a class="collapse-item"><input type="button" class="btn" value="<?php echo $rowZ['DateOfPaper'] ?>" style="font-size: 12px; color:black" onclick="set_exam_type_session(this.value);"></a></span>
            <?php
                    }
                }
            }
            ?>
            </nav>
    </div>
    </div>

    </nav>
    </div>
    </div>


    </li>
-----------------------------------end -------------------