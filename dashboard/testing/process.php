<?php
// Retrieve the selected option value from the query string
$selectedOption = $_GET["option"];

// Do something with the selected option value
echo "Selected option: " . $selectedOption;
echo "<script>
  alert('$selectedOption');
</script>";
?>
<script>
  alert('$selectedOption');
</script>