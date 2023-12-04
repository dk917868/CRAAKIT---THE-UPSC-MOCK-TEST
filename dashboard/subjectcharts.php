<?php
// echo $_SESSION['username'];

$query = "SELECT Subject,DateOfPaper,correctanswer,examtime from examresults where username='$_SESSION[username]' GROUP by DateOfPaper order by examtime desc;";
$result = mysqli_query($link, $query);
$data = array();
while ($row = mysqli_fetch_array($result)) {
    $Subject_1[]  = $row['DateOfPaper'];
    $correct_ans1[] = $row['correctanswer'];
}
$data = json_encode($data);
?>

<script>
    // Set new default font family and font color to mimic Bootstrap's default styling

    Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Pie Chart Example

    var ctx = document.getElementById("mySubDonutChart");
    var myPieChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            // labels: ["UPSC", "JEE", "CET"],
            labels: <?php echo json_encode($Subject_1); ?>,
            datasets: [{
                // data: [20, 50, 15],
                data: <?php echo json_encode($correct_ans1); ?>,
                backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc', '#e74a3b', '#f6c23e', '#959618', '#a23c0f', '#73cef6', '#1b2d50', '#dceb3b'],
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
                display: true,
                position:'right',
            },
            //cutoutPercentage: 20,
        },
    });
    // 
</script>

<?php
// echo $_SESSION['username'];

$query = "SELECT Subject, round(avg(correctanswer),2) as avg, count(*) as total FROM examresults where username='$_SESSION[username]' GROUP BY Subject order by examtime asc";
$result = mysqli_query($link, $query);
$data = array();
while ($row = mysqli_fetch_array($result)) {
    $Subject_2[]  = $row['Subject'];
    $avg_2[] = $row['avg'];
}
$data = json_encode($data);
?>

<script>
    // Set new default font family and font color to mimic Bootstrap's default styling

    Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Pie Chart Example

    var ctx = document.getElementById("mySubDonutChart1");
    var myPieChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            // labels: ["UPSC", "JEE", "CET"],
            labels: <?php echo json_encode($Subject_2); ?>,
            datasets: [{
                // data: [20, 50, 15],
                data: <?php echo json_encode($avg_2); ?>,
                backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc', '#e74a3b', '#f6c23e', '#959618', '#a23c0f', '#73cef6', '#1b2d50', '#dceb3b'],
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
                display: true,
                position:'right',
            },
            //cutoutPercentage: 20,
        },
    });
    // 
</script>

<!-- line chart -->
<?php
//echo $_SESSION['username'];


$sql = "SELECT Subject,DateOfPaper,correctanswer,examtime FROM examresults where `username`='$_SESSION[username]' order by `examtime` asc;";
$result = mysqli_query($link, $sql);
$data = array();
while ($row = mysqli_fetch_array($result)) {

    $Subject_L1[]  = $row['Subject'];
    $DateOfPaper_L1[] = $row['DateOfPaper'];
    $subcorrectanswer_L1[] = $row['correctanswer'];
    
}

$data = json_encode($data);
?>

<script>
    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    function number_format(number, decimals, dec_point, thousands_sep) {
        // *     example: number_format(1234.56, 2, ',', ' ');
        // *     return: '1 234,56'
        number = (number + '').replace(',', '').replace(' ', ' ');
        var n = !isFinite(+number) ? 0 : +number,
            prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
            sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
            dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
            s = '',
            toFixedFix = function(n, prec) {
                var k = Math.pow(10, prec);
                return '' + Math.round(n * k) / k;
            };
        // Fix for IE parseFloat(0.55).toFixed(0) = 0;
        s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
        if (s[0].length > 3) {
            s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
        }
        if ((s[1] || '').length < prec) {
            s[1] = s[1] || '';
            s[1] += new Array(prec - s[1].length + 1).join('0');
        }
        return s.join(dec);
    }



    // Area Chart Example
    var ctx = document.getElementById("mySubLineChart");
    var myLineChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: <?php echo json_encode($Subject_L1); ?>,
            datasets: [{
                label: '',
                lineTension: 0.3,
                backgroundColor: "rgba(78, 115, 223, 0.05)",
                borderColor: "rgba(78, 115, 223, 1)",
                pointRadius: 3,
                pointBackgroundColor: "rgba(78, 115, 223, 1)",
                pointBorderColor: "rgba(78, 115, 223, 1)",
                pointHoverRadius: 3,
                pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                pointHitRadius: 10,
                pointBorderWidth: 2,
                data: <?php echo json_encode($subcorrectanswer_L1); ?>,
            }],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'date'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 7
                    }
                }],
                yAxes: [{
                    ticks: {
                        maxTicksLimit: 5,
                        padding: 10,
                        // Include a dollar sign in the ticks
                        callback: function(value, index, values) {
                            return +number_format(value);
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                titleMarginBottom: 10,
                titleFontColor: '#6e707e',
                titleFontSize: 14,
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                intersect: false,
                mode: 'index',
                caretPadding: 10,
                callbacks: {
                    label: function(tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                        return datasetLabel + number_format(tooltipItem.yLabel);
                    }
                }
            }
        }
    });
</script>

