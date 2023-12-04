<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<?php
include "./header.php";
include("../connection.php");

$Subject = "select distinct Subject from questions";
$subjectquery = mysqli_query($link, $Subject);

?>
<div id="content" style="min-height: 600px;">
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Circle Buttons -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="m-2 font-weight-bold text-primary">Select Subject and Particular month</div>
                <!-- <div class="font-weight-bold text-gray" style="text-align: center">Select Subject and particular month</div> -->
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <div class="container" style="min-height: 600px;">
                    <h1 class="text-center my-5">Select Subject and Month</h1>
                    <!-- <div class="card"> -->
                    <div class="d-flex justify-content-center align-items-center">
                        <form method="post" action="">
                            <div class="input-group mb-3">

                                <select class="form-select" id="Subject" name="Subject">
                                    <option selected disabled>Select Subject</option>
                                    <?php while ($row = mysqli_fetch_assoc($subjectquery)) : ?>
                                        <option value="<?php echo $row['Subject']; ?>"> <?php echo $row['Subject']; ?> </option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <select class="form-select" id="DateOfPaper" name="DateOfPaper">
                                    <option selected disabled>Select Month</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <a onclick=""><input type="submit" name="submit" value="Take Test" class="btn btn-success"></a>

                            </div>
                        </form>
                    </div>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Subject Month

    $('#Subject').on('change', function() {
        var subjectname = this.value;
        $.ajax({
            url: 'ajax/subname.php',
            type: "POST",
            data: {
                subname: subjectname
            },
            success: function(result) {
                $('#DateOfPaper').html(result);
            }
        })
    });
</script>

<?php
$subject = "";
$dateOfPaper = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the selected dropdown values
    $subject = $_POST["Subject"];
    $dateOfPaper = $_POST["DateOfPaper"];
}

$_SESSION['subject'] = $subject;
$_SESSION['dateofpaper'] = $dateOfPaper;

// echo $_SESSION['subject'];
// echo $_SESSION['dateofpaper'];