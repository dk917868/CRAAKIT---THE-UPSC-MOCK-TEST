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
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>ADD FULL MOCK TEST </h1>
            </div>
        </div>
    </div>

</div>

<div class="content mt-3">
    <div class="animated fadeIn">

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <form name="form1" action="" method="POST">

                        <div class="card-body">

                            <div class="col-lg-5">
                                <div class="card">
                                    <div class="card-header"><strong>ADD TEST NAME</strong></div>
                                    <div class="card-body card-block">
                                        <div class="form-group"><label for="company" class=" form-control-label">NEW TEST NAME</label><input type="text" name="examname" placeholder="Add Exam category" class="form-control"></div>
                                        <div class="form-group"><label for="vat" class=" form-control-label">TEST DURATION IN MINUTES</label><input type="text" name="examtime" placeholder="Exam Time In Minutes" class="form-control"></div>

                                        <div class="form-group">

                                            <input type="submit" name="submit1" value="ADD EXAM" class="btn btn-success">

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title">EXISITING FULL MOCK TESTS</strong>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">SL NO</th>
                                                    <th scope="col">MOCK TEST NAME</th>
                                                
                                                    <th scope="col">MOCK TEST DURATION</th>

                                                    <th scope="col">EDIT</th>
                                                    <!-- <th scope="col">DELETE</th> -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $count = 0;
                                                $res = mysqli_query($link, "select * from exam_time_setter");
                                                while ($row = mysqli_fetch_array($res)) {
                                                    $count = $count + 1;
                                                ?>

                                                    <tr>
                                                        <th scope="row"><?php echo $count; ?></th>
                                                        <td><?php echo $row["DateOfPaper"]; ?></td>
                                                        <td><?php echo $row["exam_time_in_minutes"]; ?></td>
                                                        <td><a href="edit_mock_exam.php?id=<?php  echo $row["id"]; ?>"><?php echo "<font color='blue'>" ?>EDIT<?php "</font>"; ?></a></td>
                                                        <!-- <td><a href="delete.php?id= <?php //echo $row["id"]; ?>"><?php echo "<font color='red'>" ?>DELETE<?php "</font>"; ?></a></td> -->
                                                    </tr>

                                                <?php
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



        </div>
    </div><!-- .animated -->
</div><!-- .content -->
<?php
if (isset($_POST["submit1"])) {

    mysqli_query($link, "insert into exam_time_setter values(NULL,'$_POST[examname]','$_POST[examtime]')") or die(mysqli_error($link));


?>
    <script type="text/javascript">
        alert("exam added successfully");
        window.location.href = window.location.href;
    </script>
<?php



}

?>


<?php
include "footer.php";
?>