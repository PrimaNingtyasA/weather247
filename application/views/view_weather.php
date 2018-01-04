<!DOCTYPE html>
<html>
<head>
	<title>Weather</title>
</head>
<body>
<table border=2px>
	<tr>
		<td> ID </td>
		<td> Tanggal </td>
		<td> Judul </td>
		<td> Nama </td>
		<td> Isi </td>
	</tr>
	<?php
foreach ($weathers as $weather) {
	?>
<tr>
	<td> <?php echo $weather->id_note; ?> </td>
	<td> <?php echo $weather->tanggal; ?> </td>
	<td> <?php echo $weather->judul_note; ?> </td>
	<td> <?php echo $weather->admin; ?> </td>
	<td> <?php echo $weather->isi; ?> </td>
</tr>
	<?php
}
	?>
</table>
</body>
</html>