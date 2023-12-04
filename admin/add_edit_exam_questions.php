<?php
session_start();
include "header.php";
include "../connection.php";
if (!isset($_SESSION["admin"])) {
?>
    <script type="text/javascript">
        window.location = "index.php";
    </script>
<?php
}
?>

<div class="breadcrumbs">
    <div class="col-sm-12">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Select Exam Subject For Add and Edit Questions</h1>
            </div>
        </div>
    </div>

</div>

<div class="content mt-3">
    <div class="animated fadeIn">

        <div class="row">
            <div class="col-lg-12">
                <div class="card">

                    <div class="card-body">
                        <table class="table table-`bordered">
                            <thead>
                                <tr>
                                    <th scope="col">SL NO</th>
                                    <th scope="col">EXAM NAME</th>
                                    <th scope="col">EXAM SUBJECT</th>
                                    <th scope="col">EXAM TIME</th>
                                    <th scope="col">EDIT</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $count = 0;
                                $res = mysqli_query($link, "select distinct category,Subject,exam_time_in_minutes from dummy_questions;");
                                while ($row = mysqli_fetch_array($res)) {
                                    $count = $count + 1;
                                ?>

                                    <tr>
                                        <th scope="row"><?php echo $count; ?></th>
                                        <td><?php echo $row["category"]; ?></td>
                                        <td><?php echo $row["Subject"]; ?></td>
                                        <td><?php echo $row["exam_time_in_minutes"]; ?></td>
                                        <td><a href="add_edit_questions.php?Subject=<?php echo $row["Subject"]; ?>"><?php echo "<font color='green'>" ?>SELECT<?php "</font>"; ?></a></td>

                                    </tr>

                                <?php
                                }


                                ?>

                            </tbody>
                        </table>

                    </div>
                </div> <!-- .card -->

            </div>
            <!--/.col-->



        </div>
    </div><!-- .animated -->
</div><!-- .content -->
<?php
include "footer.php";
?>