<?php
session_start();
include "../connection.php";
if(!isset($_SESSION["valadmin"]))
{
	?>
	<script type="text/javascript">
	window.location="index.php";
	</script>
	<?php
}
$id=$_GET["question_no"];
$Subject=$_GET["Subject"];
mysqli_query($link,"UPDATE `dummy_questions` SET `status`=1 where question_no=$id && Subject='$Subject'");

?>

<script type="text/javascript">
    alert('Questions Updated as Verified');
	history.back();
</script>