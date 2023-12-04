<?php
// echo $_SESSION['username'];

$query = "SELECT count(*) as score,Subject FROM `subjectpartition_results` where username='$_SESSION[username]' group by subject;";
$result = mysqli_query($link, $query);
$data = array();
while ($row = mysqli_fetch_array($result)) {
    $Subject[]  = $row['Subject'];
    $score[] = $row['score'];
}
$data = json_encode($data);
?>

<script>
    // Set new default font family and font color to mimic Bootstrap's default styling

    Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Pie Chart Example

    var ctx = document.getElementById("myPieChart");
    var myPieChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            // labels: ["UPSC", "JEE", "CET"],
            labels: <?php echo json_encode($Subject); ?>,
            datasets: [{
                // data: [20, 50, 15],
                data: <?php echo json_encode($score); ?>,
                backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc', '#e74a3b', '#f6c23e','#959618','#a23c0f','#73cef6','#1b2d50','#dceb3b'],
                hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
                hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: true,
                caretPadding: 10,
            },
            legend: {
                display: false
            },
            //cutoutPercentage: 20,
        },
    });
    // 
</script>

