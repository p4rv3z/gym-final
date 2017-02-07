<!DOCTYPE html>
<html>
	<head>
		<title>ChartJS - Pie Chart</title>
		<script src="../assets/jquery/jquery-3.1.1.min.js"></script>
		<script src="../assets/javascript/chart.js"></script>
		<script src="../assets/javascript/chart.min.js"></script>
	</head>
	<body>

	<canvas id="myChart" width="200" height="150"></canvas>
		<script>
			var canvas = document.getElementById('myChart');
var data = {
    labels: ["January", "February", "March", "April", "May", "June", "July"],
    datasets: [
        {
            label: "My First dataset",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgba(75,192,192,0.4)",
            borderColor: "rgba(75,192,192,1)",
            borderCapStyle: 'butt',
            borderDash: [],
            borderDashOffset: 0.0,
            borderJoinStyle: 'miter',
            pointBorderColor: "rgba(75,192,192,1)",
            pointBackgroundColor: "#fff",
            pointBorderWidth: 1,
            pointHoverRadius: 5,
            pointHoverBackgroundColor: "rgba(75,192,192,1)",
            pointHoverBorderColor: "rgba(220,220,220,1)",
            pointHoverBorderWidth: 2,
            pointRadius: 5,
            pointHitRadius: 10,
            data: [65, 59, 80, 0, 56, 55, 40],
        }
    ]
};

var option = {
	showLines: true
};
var myLineChart = Chart.Line(canvas,{
	data:data,
  options:option
});
		</script>
	</body>
</html>