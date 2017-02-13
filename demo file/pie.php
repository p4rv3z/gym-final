<!DOCTYPE html>
<html>
<head>
	<title></title>
		<script src="../assets/jquery/jquery-3.1.1.min.js"></script>
		<script src="../assets/javascript/chart.js"></script>
</head>
<body>
<canvas id="mycanvas" width="500" height="500">

</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
	$.ajax({
		url : "http://localhost/project/gym-final/php/gender_api.php",
		type : "json",
		success : function(data){
			console.log(data);
			var total = data[0].total;
			var male = data[1].male;
			var female = data[2].female;
			var other = data[3].other;

				var ctx = $("#mycanvas").get(0).getContext("2d");

				//pie chart data
				//sum of values = 360
				var data = [
					{
						value: (male*(360/100)),
						color: "lightgreen",
						highlight: "yellowgreen",
						label: "Male User"
					},
					{
						value: (female*(360/100)),
						color: "cornflowerblue",
						highlight: "lightskyblue",
						label: "Female User"
					},
					{
						value: (other*(360/100)),
						color: "orange",
						highlight: "darkorange",
						label: "Other User"
					}

				];

				//draw
				var piechart = new Chart(ctx).Pie(data);
		},
		error : function(data) {

		}
	});
	document.getElementById("demo").innerHTML = 5 + 6;
				
});

</script>