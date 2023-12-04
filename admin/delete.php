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
$id=$_GET["id"];

mysqli_query($link,"delete from validator_admin_registration where id=$id");

?>

<script type="text/javascript">
alert('Validator Deleted');
window.location="sub_admin_approval.php";
</script>