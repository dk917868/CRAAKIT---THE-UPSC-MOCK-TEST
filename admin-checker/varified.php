<?php
session_start();
include "../connection.php";
if(!isset($_SESSION["admin"]))
{
	?>
	<script type="text/javascript">
	window.location="index.php";
	</script>
	<?php
}
$id=$_GET["question_no"];
$DateOfPaper=$_GET["DateOfPaper"];
mysqli_query($link,"UPDATE `mock_questions_dummy` SET `status`=1 where question_no=$id && DateOfPaper='$DateOfPaper'");

?>

<script type="text/javascript">
    alert('Questions Updated as Verified');
	history.back();

</script>