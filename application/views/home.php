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
			<h6 id="text">Temperature Graph</h6>
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