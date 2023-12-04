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
                <h1>Approve Validators</h1>
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
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title">Validator Details</strong>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr align="center">
                                                    <th scope="col">SL NO</th>
                                                    <th scope="col">validator Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">contact</th>
                                                    <th colspan="2" scope="col">SELECT</th>
                                                    <!-- <th scope="col">DELETE</th> -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $count = 0;
                                                $res = mysqli_query($link, "SELECT * FROM `validator_admin_registration` where approve_status='0'");
                                                while ($row = mysqli_fetch_array($res)) {
                                                    $count = $count + 1;
                                                ?>

                                                    <tr align="center">
                                                        <form method="post" action="">
                                                            <th scope="row"><?php echo $count; ?></th>
                                                            <td><?php echo $row["username"]; ?></td>
                                                            <td><?php echo $row["email"]; ?></td>
                                                            <td><?php echo $row["phone"]; ?></td>
                                                            <td><a href="approve.php?id=<?php echo $row["id"]; ?>"><?php echo "<font color='green'>" ?>
                                                                    <input type="button" value="Approve" class="btn btn-success">
                                                                    <?php "</font>"; ?></a>
                                                            </td>
                                                            <td> <a href="delete.php?id=<?php echo $row["id"]; ?>"><?php echo "<font color='red'>" ?><input type="button" value="Discard" class="btn btn-danger"><?php "</font>"; ?></a>
                                                            </td>
                                                        </form>
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


<script type="text/javascript">
    //window.location = "add_edit_questions.php?id=<?php echo $id1 ?>";
</script>


<?php
include "footer.php";
?>