<?php
session_start();
include "../../connection.php";


$subname=$_GET["Subject"];
$DateOfPaper=$_GET["DateOfPaper"];
$_SESSION["subname"]=$subname;
$_SESSION["DateOfPaper"]=$DateOfPaper;

$res=mysqli_query($link,"select * from subject_time_setter where Subject='$subname' and DateOfPaper='$DateOfPaper'");
while($row=mysqli_fetch_array($res))
{
	$_SESSION["exam_time"]=$row["exam_time_in_minutes"];
	echo $_SESSION["exam_time"];
}
date_default_timezone_set('Asia/Kolkata');
$date=date("Y-m-d H:i:s");

$_SESSION["end_time"]=date("Y-m-d H:i:s",strtotime($date."$_SESSION[exam_time] minutes"));
$_SESSION["exam_start"]="yes";
	
?>
