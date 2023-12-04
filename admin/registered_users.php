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
                <h1>Registered users</h1>
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
                                        <strong class="card-title">Registered Users</strong>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">SL NO</th>
                                                    <th scope="col">First Name</th>
                                                    <th scope="col">Last Name</th>
                                                    <th scope="col">User Name</th>
                                                    <th scope="col">UPSC Roll No.</th>
                                                    <th scope="col">Email Id</th>
                                                    <th scope="col">Contact</th>

                                                    
                                                    <!-- <th scope="col">DELETE</th> -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $slno = 0;
                                                $res = mysqli_query($link, "SELECT * FROM `registration` ORDER BY `registration`.`timestamp` DESC ");
                                                $count = mysqli_num_rows($res);
                                                if ($count == 0) {
                                                echo "<tr align='center'><td colspan='10'>No one is registered yet</td></tr>";
                                                } else {
            
                                                while ($row = mysqli_fetch_array($res)) {
                                                    $slno = $slno + 1;
                                                ?>

                                                    <tr>
                                                        <th scope="row"><?php echo $slno; ?></th>
                                                        <td><?php echo $row["firstname"]; ?></td>
                                                        <td><?php echo $row["lastname"]; ?></td>
                                                        <td><?php echo $row["username"]; ?></td>
                                                        <td><?php echo $row["rollno"]; ?></td>
                                                        <td><?php echo $row["email"]; ?></td>
                                                        <td><?php echo $row["contact"]; ?></td>
                                                        
                                                        
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