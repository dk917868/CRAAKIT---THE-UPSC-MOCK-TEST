<?php
session_start();
include "header.php";
include "../connection.php";
if (!isset($_SESSION["valadmin"])) {
?>
    <script type="text/javascript">
        window.location = "index.php";
    </script>
<?php
}

?>

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Select the Paper to check the Questions</h1>
            </div>
        </div>
    </div>

</div>

<div class="content mt-3">
    <div class="animated fadeIn">
        <form name="form1" action="" method="POST">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title">Mock EXAM Months</strong>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">SL NO</th>
                                                    <th scope="col">DateOfPaper</th>
                                                    <th scope="col">SELECT</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $slno = 0;
                                                
                                                $res = mysqli_query($link, "select distinct(DateOfPaper) from mock_questions_dummy");
                                                $count = mysqli_num_rows($res);
                                                if ($count == 0) {
                                                echo "<tr align='center'><td colspan='3'>Main Admin Has Not Uploaded any Paper</td></tr>";
                                                } else {
                                                while ($row = mysqli_fetch_array($res)) {
                                                    $slno = $slno + 1;
                                                ?>

                                                    <tr>
                                                        <th scope="row"><?php echo $slno; ?></th>
                                                        <td><a><?php echo $row["DateOfPaper"]; ?></a></td>

                                                        <td><a href="varifyquestions.php?DateOfPaper=<?php echo $row['DateOfPaper'] ?>"><?php echo "<font color='green'>" ?>SELECT<?php "</font>"; ?></a></td>
                                                    </tr>

                                                <?php
                                                }
                                            }

                                                ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title">Subject wise Questions</strong>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">SL NO</th>
                                                    <th scope="col">Subject</th>
                                                    <th scope="col">SELECT</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $slno = 0;
                                                $res = mysqli_query($link, "select distinct(Subject) from dummy_questions");
                                                $count = mysqli_num_rows($res);
                                                if ($count == 0) {
                                                echo "<tr align='center'><td colspan='3'>Main Admin Has Not Uploaded any Paper</td></tr>";
                                                } else {
                                                while ($row = mysqli_fetch_array($res)) {
                                                    $slno = $slno + 1;
                                                ?>

                                                    <tr>
                                                        <th scope="row"><?php echo $slno; ?></th>
                                                        <td><a><?php echo $row["Subject"]; ?></a></td>

                                                        <td><a href="varifysubjectquestions.php?Subject=<?php echo $row['Subject'] ?>"><?php echo "<font color='green'>" ?>SELECT<?php "</font>"; ?></a></td>
                                                    </tr>

                                                <?php
                                                }
                                            }
                                                ?>





                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>



                        </div>

        </form>
    </div> <!-- .card -->

</div>



<!--/.col-->
<?php
include "./footer.php";
?>