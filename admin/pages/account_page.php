<h2 class="content-subhead" style="text-align: center;">Account Information</h2>
<hr style="border-style: inset;border-width: 1px;">
<div>
	<script type="text/javascript">
		google.charts.load('current', {'packages':['corechart']});
      	google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     <?php echo rand(5,20);?>],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2]
        ]);

        var options = {
          title: 'My Daily Activities'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
	</script>
</div>
<div class="row">
	<div class="col-md-6">
	<div id="piechart" style="width: 100%;"></div>
	</div>
</div>