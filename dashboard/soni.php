<?php
include '../connection.php';
if (isset($_POST['ECONOMY'])) {
    // Store the value of the text input element in a PHP variable
    $mytext = $_POST['ECONOMY'];
   // Prepare the SQL statement
   echo 'You entered: ' . $mytext;
   $query="INSERT INTO `soni`(`sub`) VALUES ('$mytext')";
   $run=mysqli_query($link,$query);
   if(!$run){
    header("refresh:0; url=http://localhost/mock_exam/dashboard.php");
   }else
    header("refresh:0; url=http://localhost/mock_exam/dashboard/index.php");
    // echo 'You entered: ' . $mytext;
}

?>
