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

$Subject = $_GET["Subject"];
$exam_subject = '';

$res = mysqli_query($link, "select * from dummy_questions where Subject='$Subject'");
while ($row = mysqli_fetch_array($res)) {
	$exam_subject = $row["Subject"];
	$category = $row["category"];
	$DateWePosting = $row["DateWePosting"];
	$DateOfPaper = $row["DateOfPaper"];
}
?>

<div class="breadcrumbs">
	<div class="col-sm-8">
		<div class="page-header float-left">
			<div class="page-title">
				<h1>Add Question inside <?php echo "<font color='green'>" . $exam_subject . "</font>"; ?></h1>
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
						<div class="col-lg-8">
							<form action="" name="form1" method="POST">

								<div class="card">
									<div class="card-header"><strong>Add New Questions</strong></div>
									<div class="card-body card-block">
										<div class="form-group"><label for="company" class=" form-control-label">Question Number</label>
											<input type="text" name="question_no" placeholder="Add Question Number" class="form-control">

										</div>
										<div class="form-group"><label for="company" class=" form-control-label">Add Question</label>
											<input type="text" name="question" placeholder="Add Question" class="form-control">

										</div>
										<div class="form-group"><label for="company" class=" form-control-label">Add Opt1</label>
											<input type="text" name="opt1" placeholder="Add Opt1" class="form-control">

										</div>
										<div class="form-group"><label for="company" class=" form-control-label">Add Opt2</label>
											<input type="text" name="opt2" placeholder="Add Opt2" class="form-control">

										</div>
										<div class="form-group"><label for="company" class=" form-control-label">Add Opt3</label>
											<input type="text" name="opt3" placeholder="Add Opt3" class="form-control">

										</div>
										<div class="form-group"><label for="company" class=" form-control-label">Add Opt4</label>
											<input type="text" name="opt4" placeholder="Add Opt4" class="form-control">

										</div>
										<div class="form-group"><label for="company" class=" form-control-label">Add Answer</label>
											<input type="text" name="answer" placeholder="Add Answer" class="form-control">

										</div>
										<div class="form-group"><label for="company" class=" form-control-label">Add Category</label>
											<input type="text" name="category" placeholder="Enter the Category" class="form-control" value="<?php echo $category; ?>">

										</div>
										<div class="form-group"><label for="company" class=" form-control-label">Posting week/Date</label>
											<input type="text" name="DateWePosting" placeholder="Enter the paper posting date" class="form-control" value="<?php echo $DateWePosting; ?>">

										</div>
										<div class="form-group"><label for="company" class=" form-control-label">Paper released month/date</label>
											<input type="text" name="DateOfPaper" placeholder="Enter the paper released date/month" class="form-control" value="<?php echo $DateOfPaper; ?>">

										</div>
										<div class="form-group"><label for="company" class=" form-control-label">Enter the Subject</label>
											<input type="text" name="Subject" placeholder="Enter the Subject" class="form-control" value="<?php echo $Subject; ?>">

										</div>
										<div class="form-group"><label for="company" class=" form-control-label">Enter the time in minutes</label>
											<input type="text" name="exam_time_in_minutes" placeholder="Enter the time for particular subject " class="form-control">

										</div>
										<div class="form-group">

											<input type="submit" name="submit1" value="Add Question" class="btn btn-success">

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
		<div class="row">
			<div class="col-lg-12">
				<div class="card">

					<div class="card-body">
						<table class="table table-bordered">
							<tr>
								<th>Q.NO</th>
								<th>QUESTIONS</th>
								<th>Opt1</th>
								<th>Opt2</th>
								<th>Opt3</th>
								<th>Opt4</th>
								<th>ANSWER</th>
								<th>Category</th>
								<th>DateWePosting</th>
								<th>DateOfPaper</th>
								<th>Subject</th>
								<th>Quiz time</th>
								<th>Edit</th>
								<th>Delete</th>
							</tr>


							<?php

							$res = mysqli_query($link, "select * from dummy_questions where Subject='$exam_subject' order by question_no asc");
							while ($row = mysqli_fetch_array($res)) {
								echo "<tr>";
								echo "<td>";
								echo $row["question_no"];
								echo "</td>";
								echo "<td>";
								echo $row["question"];
								echo "</td>";
								echo "<td>";
								echo $row["opt1"];
								echo "</td>";
								echo "<td>";
								echo $row["opt2"];
								echo "</td>";
								echo "<td>";
								echo $row["opt3"];
								echo "</td>";
								echo "<td>";
								echo $row["opt4"];
								echo "</td>";
								echo "<td>";
								echo $row["answer"];
								echo "</td>";
								echo "<td>";
								echo $row["category"];
								echo "</td>";
								echo "<td>";
								echo $row["DateWePosting"];
								echo "</td>";
								echo "<td>";
								echo $row["DateOfPaper"];
								echo "</td>";
								echo "<td>";
								echo $row["Subject"];
								echo "</td>";
								echo "<td>";
								echo $row["exam_time_in_minutes"];
								echo "</td>";
								echo "<td>";
							?>

								<a href="edit_option.php?question_no=<?php echo $row["question_no"]; ?>& Subject=<?php echo $Subject; ?>"><?php echo "<font color='blue'>" ?>Edit <?php "</font>"; ?></a>
								<?php

								echo "<td>";
								?>

								<a href="delete_option.php?question_no=<?php echo $row["question_no"]; ?>& Subject=<?php echo $Subject; ?>"><?php echo "<font color='red'>" ?>Delete <?php "</font>"; ?></a>
							<?php



								echo "</td>";

								echo "</td>";



								echo "</tr>";
							}


							?>

					</div>

				</div>

			</div>
		</div>


	</div><!-- .animated -->
</div><!-- .content -->

<?php
if (isset($_POST["submit1"])) {
	//$loop = 0;

	$count = 0;

	$res = mysqli_query($link, " select * from dummy_questions where Subject='$exam_subject' order by question_no asc") or die(mysqli_error($link));
	$count = mysqli_num_rows($res);

	// if ($count == 0) {
	// } else {
	// 	while ($row = mysqli_fetch_array($res)) {
	// 		//$loop = $loop + 1;
	// 		mysqli_query($link, "update questions set question_no='$' where id=$row[id]");
	// 	}
	// }

	//$loop = $loop + 1;
	mysqli_query($link, "insert into dummy_questions values(NULL,'$_POST[question_no]','$_POST[question]','$_POST[opt1]','$_POST[opt2]','$_POST[opt3]','$_POST[opt4]','$_POST[answer]','$_POST[category]','$_POST[DateWePosting]','$_POST[DateOfPaper]','$_POST[Subject]','$_POST[exam_time_in_minutes]')") or die(mysqli_error($link));

?>
	<script type="text/javascript">
		alert("QUESTION ADDED SUCCESFULLY");
		window.location.href = window.location.href;
	</script>

<?php


}
?>


<?php
include "footer.php";
?>