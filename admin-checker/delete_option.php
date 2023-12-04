<?php
session_start();

include "../connection.php";
if (!isset($_SESSION["valadmin"])) {
?>
	<script type="text/javascript">
		window.location = "index.php";
	</script>
<?php
}
$id = $_GET["question_no"];
$Subject = $_GET["Subject"];


mysqli_query($link, "delete from dummy_questions where `question_no`='$id' and `Subject`='$Subject'");

?>

<script type="text/javascript">
	alert("Data Deleted SUCCESFULLY")
	//window.location="add_edit_exam_questions.php";
	window.location = "add_edit_questions.php?Subject=<?php echo $Subject ?>";
</script>