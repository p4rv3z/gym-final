<?php

?>
<h2 class="content-subhead" style="text-align: center;">User Activities</h2>
<div style="text-align: right;">
<a href="add_activities.php" class="btn btn-info btn-md">
   <span class="glyphicon glyphicon-plus"></span> Add Activities
</a>	
</div>	
<hr style="border-style: inset;border-width: 1px;">
<div>
	<div class="row">
		<div class="col-lg-6" style="text-align: center;">
			<canvas id="total_bmi" width="400" height="400"></canvas>
		</div>
		<div class="col-lg-6" style="text-align: center;">
			<table class="table table-bordered">
				BMI Table for Adults
    			<thead>
      				<tr>
        				<th>Category</th>
        				<th>BMI range (kg/m<sup>2</sup>)</th>
      				</tr>
    		</thead>
    		<tbody>
      			<tr>
        			<td>Severe Thinness</td>
        			<td>< 16</td>
      			</tr>
      			<tr>
        			<td>Moderate Thinness</td>
        			<td>16 - 17</td>
      			</tr>
      			<tr>
        			<td>Mild Thinness</td>
        			<td>17 - 18.5</td>
      			</tr>
      			<tr class="success">
        			<td>Normal</td>
        			<td>18.5 - 25</td>
      			</tr>
      			<tr>
        			<td>Overweight</td>
        			<td>25 - 30</td>
      			</tr>
      			<tr>
        			<td>Obese Class I</td>
        			<td>30 - 35</td>
      			</tr>
      			<tr>
        			<td>Obese Class II</td>
        			<td>35 - 40</td>
      			</tr>
      			<tr>
        			<td>Obese Class III</td>
        			<td>> 40</td>
      			</tr>
    		</tbody>
  			</table>
		</div>
	</div>
	<div class="row">
		
	</div>
</div>













<!--Graph Script-->
<script>
var canvas = document.getElementById('total_bmi');
var data = {
    labels: ["January", "February", "March", "April", "May", "June", "July"],
    datasets: [
        {
            label: "IBM Rating",
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
            data: [65, 59, 80, 0, 56, 55, <?php echo 40;?>],
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