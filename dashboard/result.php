<!-- home page of user -->
<?php
include "header.php";
// $date = date("Y-m-d H:i:s");
// $_SESSION["end_time"] = date("Y-m-d H:i:s", strtotime($date . "$_SESSION[exam_time] minutes]"));
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
                <div class="row" style="padding-left: 60px ;">
                    <center>
                        <?php
                        $correct = 0;
                        $wrong = 0;
                       
                        if (isset($_SESSION["answer"])) {
                            for ($i = 1; $i <= sizeof($_SESSION["answer"]); $i++) {
                                $answer = "";
                                $res = mysqli_query($link, "select * from questions where Subject='$_SESSION[subname]' && DateOfPaper='$_SESSION[DateOfPaper]' && question_no=$i");

                                while ($row = mysqli_fetch_array($res)) {
                                    // --------new--------------------
                                    // $_SESSION['answer']=$row['answer'];
                                    // $answer = $_SESSION['answer'];
                                    // echo $answer;

                                    //these will show the answer
                                    // --------new--------------------
                                    $answer = $row["answer"]; //db ans 
                                    //echo "<b>Correct Ans   </b>".$answer;
                        ?>
                                    <?php
                                    //echo "<b>Your Ans   </b>".$_SESSION['answer'][$i]; //user ans  
                                    ?>
                        <?php
                                }

                                if (isset($_SESSION["answer"][$i])) {
                                    if ($answer == $_SESSION["answer"][$i]) {

                                        $correct = $correct + 1;
                                    } else {
                                        $wrong = $wrong + 1;
                                    }
                                } else {
                                    $wrong = $wrong + 1;
                                }
                            }
                        }
                        $count = 0;

                        $res = mysqli_query($link, "SELECT * from questions where Subject='$_SESSION[subname]' and DateOfPaper='$_SESSION[DateOfPaper]'");
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
                        echo "</center>";
                        echo "Click here to validate Results: <a href='validation.php'><input type='button' class='btn btn-success' value='Answers' /></a>";


                        ?>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
<?php

if (isset($_SESSION["exam_start"])) {
    // echo "im in";
    $date = date("Y-m-d");
    $username = $_SESSION['username'];
    $subject = $_SESSION['subname'];
    $DateOfPaper=$_SESSION['DateOfPaper'];
    // $examtype = $_SESSION['category'];
    $query = "INSERT INTO `examresults`(`username`,`Subject`,`DateOfPaper`, `totalquestion`, `correctanswer`, `wronganswer`, `examtime`) VALUES('$username ','$subject','$DateOfPaper','$count','$correct','$wrong',CURRENT_TIMESTAMP)";
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