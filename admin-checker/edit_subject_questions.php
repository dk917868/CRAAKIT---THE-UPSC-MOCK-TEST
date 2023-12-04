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
$qno = $_GET["question_no"];
$Subject= $_GET["Subject"];

$res = mysqli_query($link, "select * from dummy_questions where `question_no`='$qno' and `Subject`='$Subject'");
while ($row = mysqli_fetch_array($res)) {
	$question = $row["question"];
	$opt1 = $row["opt1"];
	$opt2 = $row["opt2"];
	$opt3 = $row["opt3"];
	$opt4 = $row["opt4"];
	$answer = $row["answer"];
}

?>

<div class="breadcrumbs">
	<div class="col-sm-4">
		<div class="page-header float-left">
			<div class="page-title">
				<h1>Update Question</h1>
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
						<div class="col-lg-12">
							<form action="" name="form1" method="POST">

								<div class="card">
									<div class="card-header"><strong>Update Question with Text</strong></div>
									<div class="card-body card-block">
										<div class="form-group"><label for="company" class=" form-control-label">Update Question</label>
											<input type="text" name="question" placeholder="Add Question" class="form-control" value="<?php echo $question; ?>">

										</div>
										<div class="form-group"><label for="company" class=" form-control-label">Update Opt1</label>
											<input type="text" name="opt1" placeholder="Add Opt1" class="form-control" value="<?php echo $opt1; ?>">

										</div>
										<div class="form-group"><label for="company" class=" form-control-label">Update Opt2</label>
											<input type="text" name="opt2" placeholder="Add Opt2" class="form-control" value="<?php echo $opt2; ?>">

										</div>
										<div class="form-group"><label for="company" class=" form-control-label">Update Opt3</label>
											<input type="text" name="opt3" placeholder="Add Opt3" class="form-control" value="<?php echo $opt3; ?>">

										</div>
										<div class="form-group"><label for="company" class=" form-control-label">Update Opt4</label>
											<input type="text" name="opt4" placeholder="Add Opt4" class="form-control" value="<?php echo $opt4; ?>">

										</div>
										<div class="form-group"><label for="company" class=" form-control-label">Update Answer</label>
											<input type="text" name="answer" placeholder="Add Answer" class="form-control" value="<?php echo $answer; ?>">

										</div>

										<div class="form-group">

											<input type="submit" name="submit1" value="Update Question" class="btn btn-success">

										</div>

									</div>
								</div>
							</form>
						</div>


					</div>
				</div> <!-- .card -->

			</div>
			<!--/.col-->



		</div>
	</div><!-- .animated -->
</div><!-- .content -->

<?php

if (isset($_POST["submit1"])) {
	
	mysqli_query($link, "UPDATE dummy_questions SET `question`='$_POST[question]',`opt1`='$_POST[opt1]',`opt2`='$_POST[opt2]',`opt3`='$_POST[opt3]',`opt4`='$_POST[opt4]',`answer`='$_POST[answer]' WHERE Subject='$Subject' and question_no=$qno;" ) or die(mysqli_error($link));
	// UPDATE dummy_questions SET question = 'whats ur name', opt1 = 'rock', opt2 = 'john', opt3 = 'anu',opt4='aoop',answer='rock' WHERE Subject='social issues' and question_no=20;
	
?>
	<script type="text/javascript">
		alert("Question updated SUCCESFULLY");
		window.location = "varifysubjectquestions.php?Subject=<?php echo $Subject ?>";
		//history.back();
</script>
<?php

}
?>
<?php
include "footer.php";
?>