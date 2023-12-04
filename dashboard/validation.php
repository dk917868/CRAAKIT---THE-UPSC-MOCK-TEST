<!-- home page of user -->
<?php
include "header.php";
$date = date("Y-m-d H:i:s");
?>
<!-- Main Content -->
<div id="content" style="min-height: 600px; max-width:1400px;">
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Circle Buttons -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"> Answer Log of Subject :  <?php echo $_SESSION['subname']."'s and Month : " . $_SESSION['DateOfPaper'] ?> </h6>
            </div>
            <div class="card-body">
                <div class="row" style="padding-left: 260px ;">
                    <!-- <center>
                        <h3 style="font-family: 'Courier New', Courier, monospace;">  </h3>
                    </center> -->
                </div>

                <?php
                $res = mysqli_query($link, "select question_no,question,opt1,opt2,opt3,opt4,answer from questions where Subject='$_SESSION[subname]' and DateOfPaper='$_SESSION[DateOfPaper]' order by `question_no` ASC") or die(mysqli_error($link));
                $count = mysqli_num_rows($res);
                if ($count == 0) {
                ?>
                    <h4 style="text-align: center ;"> Answers are not Updated..! </h4>

                <?php
                } else {
                    while ($row = mysqli_fetch_array($res)) {
                        echo "<b>";
                        echo $row["question_no"] . ". ";
                        echo $row["question"];
                        echo "</b>";
                        echo "<br>";
                        echo $row["opt1"];
                        echo "<br>";

                        echo $row["opt2"];
                        echo "<br>";

                        echo $row["opt3"];
                        echo "<br>";

                        echo $row["opt4"];
                        echo "<hr>";
                        echo "<b>";
                        echo "<font color='#008443' >Ans. ";

                        echo $row["answer"];
                        echo "</font>";
                        echo "</b>";
                        echo "<hr>";
                        
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>
</div>

<?php
include "./footer.php";
?>