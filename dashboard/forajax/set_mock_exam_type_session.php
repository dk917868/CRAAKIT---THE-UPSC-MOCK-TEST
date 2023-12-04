<?php
session_start();
include "../../connection.php";
$DateOfPaper=$_GET["DateOfPaper"];
$_SESSION["DateOfPaper"]=$DateOfPaper;
$res=mysqli_query($link,"select * from exam_time_setter where DateOfPaper='$DateOfPaper'");
while($row=mysqli_fetch_array($res))
{
	$_SESSION["exam_time"]=$row["exam_time_in_minutes"];
	echo $_SESSION["exam_time"];
}
date_default_timezone_set('Asia/Kolkata');
$date=date("Y-m-d H:i:s");

$_SESSION["end_time"]=date("Y-m-d H:i:s",strtotime($date."$_SESSION[exam_time] minutes"));
$_SESSION["exam_start"]="yes";



	// or
        // document.getElementById('accordionSidebar').style.display = 'none';
?>
