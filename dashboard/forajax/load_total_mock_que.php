<?php
session_start();
include "../../connection.php";
$total_que=0;
$res1=mysqli_query($link,"select * from mock_questions where DateOfPaper='$_SESSION[DateOfPaper]'");
//echo $_SESSION['Subject'];
$total_que=mysqli_num_rows($res1);
echo $total_que;
?>