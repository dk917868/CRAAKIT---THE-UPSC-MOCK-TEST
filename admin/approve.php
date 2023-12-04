<?php
session_start();
include "../connection.php";
if (!isset($_SESSION["admin"])) {
?>
	<script type="text/javascript">
		window.location = "index.php";
	</script>
<?php
}
$id = $_GET["id"];

mysqli_query($link, "UPDATE `validator_admin_registration` SET `approve_status`=1 where id=$id");

?>

<script type="text/javascript">
	alert('Validator Approved');
	window.location = "sub_admin_approval.php";
</script>