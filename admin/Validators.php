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
                <h1>check The Validators</h1>
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
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title">Validator Details</strong>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">SL NO</th>
                                                    <th scope="col">validator Name</th>
                                                
                                                    <th scope="col">Validated Full Mock/Subject</th>

                                                    <th scope="col">validated Date / time</th>
                                                    <!-- <th scope="col">DELETE</th> -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $slno = 0;
                                                $res = mysqli_query($link, "SELECT * FROM `validated_by` ORDER BY `validated_by`.`timestamp` DESC");
                                                $count = mysqli_num_rows($res);
                                                if ($count == 0) {
                                                echo "<tr align='center'><td colspan='3'>Validators have not validated any content yet..!</td></tr>";
                                                } else {
            
                                                while ($row = mysqli_fetch_array($res)) {
                                                    $slno = $slno + 1;
                                                ?>

                                                    <tr>
                                                        <th scope="row"><?php echo $slno; ?></th>
                                                        <td><?php echo $row["validatorname"]; ?></td>
                                                        <td><?php echo $row["validated_content"]; ?></td>
                                                        <td><?php echo $row["timestamp"]; ?></td>
                                                        
                                                        
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



        </div>
    </div><!-- .animated -->
</div><!-- .content -->

<?php
include "footer.php";
?>