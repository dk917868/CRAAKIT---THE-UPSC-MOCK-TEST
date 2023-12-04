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
$Subject = $_GET["Subject"];
?>

<div id="content" style="min-height: 600px; max-width:1400px;">
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Circle Buttons -->
        <div class="card shadow mb-4">
            <div class="card-header py-2">
                <h6 class="m-0 font-weight-bold text-success"> Questions of <?php echo $Subject ?> </h6>
            </div>
            <div class="card-body">
                <div class="row" style="padding-left: 260px ;">
                    <center>
                        <h3 style="font-family: 'Courier New', Courier, monospace;"></h3>
                    </center>
                </div>

                <?php
                //$DateOfPaper = $_GET["DateOfPaper"];
                $res = mysqli_query($link, "select question_no,question,opt1,opt2,opt3,opt4,answer,status from dummy_questions where Subject='$Subject' order by `question_no` ASC") or die(mysqli_error($link));
                $count = mysqli_num_rows($res);
                if ($count == 0) {
                ?>
                    <h4 style="text-align: center ;"> Questions are not added </h4>

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
                        echo "<br>";
                        echo "<br>";
                    ?>
                        <a href="edit_subject_questions.php?question_no=<?php echo $row["question_no"]; ?>& Subject=<?php echo $Subject; ?>"><input type="submit" value="Edit" class="btn btn-danger"></a>&emsp;
                        <a href="varified_sub.php?question_no=<?php echo $row["question_no"]; ?>& Subject=<?php echo $Subject; ?>"><input type="submit" value="Submit" class="btn btn-success"></a>
                        <?php if ($row['status'] == 1) { ?><input type="button" value="✅" class="btn bg-transparent"> <?php } ?>
                    <?php
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
                <div class="form-group">
                    <form method="post">
                        <input type="submit" name="validate" value="Validate the Paper" class="btn btn-success">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php
if (isset($_POST['validate'])) {
    //Select the questions to validate from the questions table
    $sql = "SELECT * FROM dummy_questions where Subject='$Subject' and status=1";
    $result = $link->query($sql);

    //Validate each question and store it in the validated questions table
    if ($result->num_rows == 100) {
        while ($row = $result->fetch_assoc()) {

            $question_no = $row["question_no"];
            $question = $row["question"];
            $opt1 = $row["opt1"];
            $opt2 = $row["opt2"];
            $opt3 = $row["opt3"];
            $opt4 = $row["opt4"];
            $answer = $row["answer"];
            $category = $row["category"];
            $DateWePosting = $row["DateWePosting"];
            $DateOfPaper = $row["DateOfPaper"];
            $Subject = $row["Subject"];

            $insert_sql = "INSERT INTO `validated_subject_questions`(`id`, `question_no`, `question`, `opt1`, `opt2`, `opt3`, `opt4`, `answer`, `category`, `DateWePosting`, `DateOfPaper`, `Subject`) VALUES ('','$question_no', '$question', '$opt1', '$opt2', '$opt3', '$opt4','$answer', '$category', '$DateWePosting', '$DateOfPaper', '$Subject')";
            if ($link->query($insert_sql) === TRUE) {
                echo "<script>alert('All questions Of $Subject is validated and stored in the validated questions table.')</script>";
                $delete_sql = "DELETE FROM dummy_questions WHERE Subject='$Subject'";
                if ($link->query($delete_sql) === TRUE) {
                    echo "<script>alert('The $Subject Questions validated and removed from the validation')</script>";
?>
                    <script type='text/javascript'>
                        window.location = 'questions_category.php';
                    </script>
<?php

                } else {
                    echo "Error: " . $delete_sql . "<br>";
                }
            } else {
                //echo "Error: " . $insert_sql . "<br>";
                echo "<script>alert('No questions to validate.')</script>";
            }
        }
    } else {
        echo "<script> alert('All questions are not verified');</script>";
    }
    $query = "INSERT INTO `validated_by`(`id`,`validatorname`,`validated_content`,`timestamp`) values ('','$_SESSION[valadmin]','$Subject',current_timestamp)";
    if ($link->query($query) === true) {
    }
}

//Close the database connection
$link->close();

?>
<?php
include "./footer.php";
?>