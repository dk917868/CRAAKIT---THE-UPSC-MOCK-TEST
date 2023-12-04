<?php

include "./header.php";
?>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Previous Exam Results(Subject wise)</h6>
    </div>
    <div class="card-body" style="MIN-HEIGHT: 600PX;">
        <div class=" table-responsive">

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                <thead style="color:aliceblue; background-color: #4e73df;">
                    <tr>
                            <th>User Name</th>
                            <!-- <th>Exam Type</th> -->
                            <th>Subject</th>
                            <th>Month</th>
                            
                            <th>Total Question</th>
                            <th>Correct Answer</th>
                            <th>Wrong Answer</th>
                            <th>Exam Date</th>

                    </tr>
                </thead>

                <tbody>
                    <?php
                    $res = mysqli_query($link, "select * from examresults where username='$_SESSION[username]' order by id desc");
                    $count = mysqli_num_rows($res);

                    if ($count == 0) {
                    ?>

                        <h1 style="text-align: center ;">No Results Found Kindly take test</h1>

                    <?php

                    } else {


                        while ($row = mysqli_fetch_array($res)) {
                            echo "<tr align='center'>";
                            echo "<th>";
                            echo $row["username"];
                            echo "</th>";
                            
                            echo "<th>";
                            echo $row["Subject"];
                            echo "</th>";
                            echo "<th>";
                            echo $row["DateOfPaper"];
                            echo "</th>";
                            echo "<th>";
                            echo $row["totalquestion"];
                            echo "</th>";
                            echo "<th>";
                            echo $row["correctanswer"];
                            echo "</th>";
                            echo "<th>";
                            echo $row["wronganswer"];
                            echo "</th>";
                            echo "<th>";
                            echo $row["examtime"];
                            echo "</th>";

                            echo "</tr>";
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>





<?php
include "./footer.php";
?>