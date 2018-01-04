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
		<li class="menu-item"><a href="<?php echo site_url('weather'); ?>">Home</a></li>
		<li class="menu-item active"><a href="<?php echo site_url('weather/history'); ?>">History</a></li>
	</ul>
</div>		
<div class="container">
	<center>
	<h2>Last 10 Weather Info</h2>
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
</body>
</html>