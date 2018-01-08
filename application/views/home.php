<!DOCTYPE html>
<html>
<head>
	<title>Weather</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/weather.css')?>">
</head>
<body>
<div class="logo">
	<img src="<?php echo base_url('assets/images/weather247e.png')?>" height="70px">
</div>
<div class="nav">
	<ul class="menu">
		<li class="menu-item active"><a href="<?php echo site_url('weather') ?>">Home</a></li>
		<li class="menu-item"><a href="<?php echo site_url('weather/history') ?>">History</a></li>
	</ul>
</div>		
<div class="container">
	<div class="forecast-container">
		<div class="forecast-header">
			<h6 id="text">Friday, 29 December 2017</h6>
		</div>
		<div class="forecast-content">
			<center>
				<img src="<?php echo base_url('assets/images/awan.png') ?>" height="100px" style="margin-top: 50px;">
				<h3>Cloudy</h3>
			</center><br><br><br><br>
			<table style="margin-left: 25px;">
				<tr>
					<td><img src="<?php echo base_url('assets/images/termometer-white2.png') ?>" height="30px"></td>
					<td width="60px">30 <sup>o</sup>C</td>
					<td><img src="<?php echo base_url('assets/images/kelembaban-white2.png') ?>" height="30px"></td>
					<td width="50px">30 %</td>
					<td><img src="<?php echo base_url('assets/images/tekanan-udara-white2.png') ?>" height="30px"></td>
					<td width="50px">30 Pa</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="graphic-container float-right">
		<div class="graphic-header float-right">
		
		<?php
        foreach($data as $datab){
            $jam[] = $datab->jam;
            $temp[] = (float) $datab->temp;
			}
    ?>
			<h6 id="text">Temperature Graph</h6>
			<center>
			<canvas id="canvas" width="700" height="180"></canvas>

	<!--Load chart js-->
	<script type="text/javascript" src="<?php echo base_url().'assets/chartjs/chart.min.js'?>"></script>
	<script>

            var lineChartData = {
                labels : <?php echo json_encode($jam);?>,
                datasets : [
                    
                    {
                        fillColor: "rgba(60,141,188,0.9)",
                        strokeColor: "rgba(60,141,188,0.8)",
                        pointColor: "#3b8bba",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(152,235,239,1)",
                        data : <?php echo json_encode($temp);?>
                    }

                ]
                
            }

        var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);
        
   	</script>
			</center>
		</div>
		<div class="graphic-content float-right">
		</div>
	</div>
</div>
<center>
<div class="card">
<center>
	<h2>Weather Prediction</h2>
	<table id="tabel" border="2">
		<tr>
			<th width="180px"><center>Date</center></th>
			<th width="180px"><center>Time</center></th>
			<th width="180px"><center>Temperature</center></th>
			<th width="180px"><center>Humidity</center></th>
			<th width="180px"><center>Air Pressure</center></th>
			<th width="180px"><center>Weather</center></th>
		</tr>
		<tr>
			<td>29-12-2017</td>
			<td>12:34</td>
			<td>30 <sup>o</sup>C</td>
			<td>30 %</td>
			<td>30 Pa</td>
			<td>Cloudy</td>
		</tr>
		<tr>
			<td>29-12-2017</td>
			<td>12:34</td>
			<td>30 <sup>o</sup>C</td>
			<td>30 %</td>
			<td>30 Pa</td>
			<td>Cloudy</td>
		</tr>
		<tr>
			<td>29-12-2017</td>
			<td>12:34</td>
			<td>30 <sup>o</sup>C</td>
			<td>30 %</td>
			<td>30 Pa</td>
			<td>Cloudy</td>
		</tr>
		<tr>
			<td>29-12-2017</td>
			<td>12:34</td>
			<td>30 <sup>o</sup>C</td>
			<td>30 %</td>
			<td>30 Pa</td>
			<td>Cloudy</td>
		</tr>
		<tr>
			<td>29-12-2017</td>
			<td>12:34</td>
			<td>30 <sup>o</sup>C</td>
			<td>30 %</td>
			<td>30 Pa</td>
			<td>Cloudy</td>
		</tr>
	</table>
</center>
</div>
</center>
</body>
</html>