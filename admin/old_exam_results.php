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
		<div class="page-header float-center">
			<div class="page-title">
				<h1>All Exam Results</h1>
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
						<center>
							<h1>Results</h1>
						</center>
						<?php
						$res = mysqli_query($link, "select * from examresults  order by id desc");
						$count = mysqli_num_rows($res);

						if ($count == 0) {
						?>
							<center>
								<h1>No Results Found</h1>
							</center>
						<?php

						} else {
							echo "<center>";

							echo "<table border=2 class='table border=2'>";
							echo "<tr align='center' style= 'background-color: #333; color:white'>";
							echo "<th>";
							echo "Username";
							echo "</th>";
							
							echo "<th>";
							echo "Subject";
							echo "</th>";
							echo "<th>";
							echo "Total Question";
							echo "</th>";
							echo "<th>";
							echo "Correct Answer";
							echo "</th>";
							echo "<th>";
							echo "Wrong Answer";
							echo "</th>";
							echo "<th>";
							echo "Exam Date";
							echo "</th>";

							echo "</tr>";
							while ($row = mysqli_fetch_array($res)) {
								echo "<tr align='center'>";
								echo "<th>";
								echo $row["username"];
								echo "</th>";
								
								echo "<th>";
								echo $row["Subject"];
								echo "</th>";
								
								echo "<th>";
								echo $row["totalquestion"];
								echo "</th>";
								echo "<th>";
								echo $row["correctanswer"];
								echo "</th>";
								echo "<th>";
								echo $row["wronganswer"];
								echo "</th>";
								echo "<th>";
								echo $row["examtime"];
								echo "</th>";

								echo "</tr>";
							}
							echo "</table>";
							echo "</center>";
						}
						?>



					</div>
				</div>

			</div>




		</div>
	</div>
</div>
<?php
include "footer.php";
?>