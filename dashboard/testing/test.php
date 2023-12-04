<h1>hello</h1>
<canvas id="lineChart">fgg</canvas>


<script>
const subjects = ['Math', 'Science', 'English', 'History'];
const months = ['January', 'February', 'March', 'April'];
const scores = [
  [75, 80, 90, 85],
  [85, 75, 70, 80],
  [70, 80, 75, 85],
  [90, 85, 80, 75]
];

function createLineChart() {
  const ctx = document.getElementById('lineChart').getContext('2d');
  new Chart(ctx, {
    type: 'line',
    data: {
      labels: months,
      datasets: subjects.map((subject, index) => ({
        label: subject,
        data: scores[index],
        borderColor: getRandomColor(),
        fill: false
      }))
    },
    options: {
      responsive: true,
      scales: {
        x: {
          display: true,
          title: {
            display: true,
            text: 'Month'
          }
        },
        y: {
          display: true,
          title: {
            display: true,
            text: 'Score'
          }
        }
      }
    }
  });
}

function getRandomColor() {
  const letters = '0123456789ABCDEF';
  let color = '#';
  for (let i = 0; i < 6; i++) {
    color += letters[Math.floor(Math.random() * 16)];
  }
  return color;
}

// Call the function to generate the line chart
createLineChart();



</script>

