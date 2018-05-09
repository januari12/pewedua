<!DOCTYPE html>
<html>
<head>
	<title>latihan tabel</title>
</head>
<body>
	<h1>Ini Latihan Tabel</h1>
	<table border="1">
		<tr>
			<td>id</td>
			<td>Nama Prodi</td>
			<td>Kuota</td>
			<td>Kaprodi</td>
		</tr>
<?php 
	for ($i=1; $i <= 100; $i++) :
?>
		<tr>
			<td><?php echo $i ?></td>
			<td>Sisfo</td>
			<td><?php echo $i*3 ?></td>
			
<?php if ($i%2===0): ?>
<td>Ilhamsyah</td>
<?php else : ?>
<td>Renny</td>
<?php endif; ?>
		</tr>

<?php
	endfor;
?>

	</table>
	<h1><?php echo $nama ?></h1>
	</table>
</body>
</html>


