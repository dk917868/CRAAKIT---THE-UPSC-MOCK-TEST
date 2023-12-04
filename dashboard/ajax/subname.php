<?php

include("../../connection.php");
$data= $_POST['subname'];

$query="SELECT distinct(DateOfPaper) from questions where Subject='$data'";

$selectqry= mysqli_query($link,$query);
// $output="";
$output= '<option value="">Select Month</option>';
while ($month_row= mysqli_fetch_assoc($selectqry)) {
    $output.= '<option value="' . $month_row['DateOfPaper'] . '">' . $month_row['DateOfPaper'] . '</option>';
}
echo $output;
?>