<!-- home page of user -->
<?php
include "header.php";

$date = date("Y-m-d H:i:s");
$_SESSION["end_time"] = date("Y-m-d H:i:s", strtotime($date . "$_SESSION[exam_time] minutes]"));
?>
<!-- Main Content -->
<div id="content" style="min-height: 600px;">
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Circle Buttons -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"> Result : </h6>
            </div>
            <div class="card-body">
                <div class="row">

                    <?php
                    $correct = 0;
                    $wrong = 0;
                    if (isset($_SESSION["exam_start"])) {
                        // echo "im in";
                        $date = date("Y-m-d");
                        $username = $_SESSION['username'];
                        $DateOfPaper = $_SESSION['DateOfPaper'];
                        $query = "DELETE FROM `subjectpartition_wrong` WHERE username='$_SESSION[username]'";
                        $result = mysqli_query($link, $query);
                    }
                    if (isset($_SESSION["exam_start"])) {
                        // echo "im in";
                        $date = date("Y-m-d");
                        $username = $_SESSION['username'];
                        $DateOfPaper = $_SESSION['DateOfPaper'];
                        $query = "DELETE FROM `subjectpartition_results` WHERE username='$_SESSION[username]'";
                        $result = mysqli_query($link, $query);
                    }
                    if (isset($_SESSION["answer"])) {
                        for ($i = 1; $i <= sizeof($_SESSION["answer"]); $i++) {
                            $answer = "";
                            $res = mysqli_query($link, "select * from mock_questions where DateOfPaper='$_SESSION[DateOfPaper]' && question_no=$i");

                            while ($row = mysqli_fetch_array($res)) {
                                // --------new--------------------
                                // $_SESSION['answer']=$row['answer'];
                                // $answer = $_SESSION['answer'];
                                // echo $answer;

                                //these will show the answer
                                // --------new--------------------
                                $answer = $row["answer"]; //db ans 
                                $Sub = $row["Subject"];
                                //echo "<b>Correct Ans   </b>".$answer;
                    ?>
                                <?php
                                //echo "<b>Your Ans   </b>".$_SESSION['answer'][$i]; //user ans  
                                ?>
                    <?php
                            }

                            if (isset($_SESSION["answer"][$i])) {
                                if ($answer == $_SESSION["answer"][$i]) {
                                    //echo $i . " " . $Sub;

                                    if (isset($_SESSION["exam_start"])) {
                                        // echo "im in";
                                        $date = date("Y-m-d");
                                        $username = $_SESSION['username'];
                                        $DateOfPaper = $_SESSION['DateOfPaper'];
                                        $query = "INSERT INTO `subjectpartition_results`(`question_no`,`username`,`DateOfPaper`,`correctsubject`,`examtime`) VALUES('$i','$username ','$DateOfPaper','$Sub','$date')";
                                        $result = mysqli_query($link, $query);
                                    }


                                    $correct = $correct + 1;
                                } else {
                                    //echo $i." ".$Sub;
                                   
                                    if (isset($_SESSION["exam_start"])) {
                                        
                                    $date = date("Y-m-d");
                                    $username = $_SESSION['username'];
                                    $DateOfPaper = $_SESSION['DateOfPaper'];
                                    $query = "INSERT INTO `subjectpartition_wrong`(`question_no`,`username`,`DateOfPaper`,`wrongsubject`,`timestamp`) VALUES('$i','$username','$DateOfPaper','$Sub','$date')";
                                    $result = mysqli_query($link, $query);
                                }$wrong = $wrong + 1;
            
                                }
                            } else {
                                $wrong = $wrong + 1;
                                
                               
                            }
                        }
                    }
                    ?>
                    <div class="col-xl-3 col-lg-10">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Your Score : <?php echo $correct ?></h6>
                                <div class="dropdown no-arrow">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                        <div class="dropdown-header">Dropdown Header:</div>
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body" style="min-height: 360px;">

                                <div class="chart-pie pt-8 pb-2">
                                    <?php
                                    $count = 0;

                                    $res = mysqli_query($link, "SELECT * from mock_questions where DateOfPaper='$_SESSION[DateOfPaper]'");
                                    $count = mysqli_num_rows($res);
                                    $wrong = $count - $correct;
                                    echo "<br>";
                                    echo "<br>";
                                    echo "<center>";
                                    echo "Total Questions=" . $count;
                                    echo "<br>";
                                    echo "Correct Answer=" . $correct;
                                    echo "<br>";
                                    echo "Wrong Answer=" . $wrong;
                                    echo "<br>";
                                    echo "<br>";
                                    echo "<br>";
                                    echo "Click here to validate Results: <a href='mock_validation.php'><input type='button' class='btn btn-success' value='Answers' /></a>";
                                    echo "</center>";
                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Pie Chart -->
                    <div class="col-xl-5 col-lg-10">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Subject wise Analysis Correct Answer <?php  ?>
                                 </h6>
                                <div class="dropdown no-arrow">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                        <div class="dropdown-header">Dropdown Header:</div>
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body" style="min-height: 360px;">

                                <div class="chart-pie pt-8 pb-2">
                                    <canvas id="myDonutChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-10">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Subject wise Analysis wrong answer</h6>
                                <div class="dropdown no-arrow">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                        <div class="dropdown-header">Dropdown Header:</div>
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body" style="min-height: 360px;">

                                <div class="chart-pie pt-8 pb-2">
                                    <canvas id="SubjectWrongChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<?php

if (isset($_SESSION["exam_start"])) {
    // echo "im in";
    // $date = date("Y-m-d");
    $username = $_SESSION['username'];
    $DateOfPaper = $_SESSION['DateOfPaper'];
    $query = "INSERT INTO `mockresults`(`username`, `DateOfPaper`,`totalquestion`, `correctanswer`, `wronganswer`, `examtime`) VALUES('$username ','$DateOfPaper','$count','$correct','$wrong',CURRENT_TIMESTAMP)";
    $result = mysqli_query($link, $query);
}



if (isset($_SESSION["exam_start"])) {
    unset($_SESSION["exam_start"]);
?>
    <script type="text/javascript">
        window.location.href = window.location.href;
    </script>
<?php

}
?>

<?php
include "./footer.php";
?>