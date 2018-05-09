<!DOCTYPE html>
<html>
<head>
	<title>latihan tabel</title>
</head>
<body>
<?php
$prodi =[
		[
		"id"=>0,
		"nama"=>"kimia",
		"kuota"=>12,
		"kaprodi"=>"Andi",
		],

		"id"=>1,
		"nama"=>"fisika",
		"kuota"=>14,
		"kaprodi"=>"nurhasanah",
		],
		[
		"id"=>2,
		"nama"=>"biologi",
		"kuota"=>12,
		"kaprodi"=>"rizalinda",
		],
		[
		"id"=>3,
		"nama"=>"sisfo",
		"kuota"=>32,
		"kaprodi"=>"ilham",
		],

		[
		"id"=>4,
		"nama"=>"kelautan",
		"kuota"=>11,
		"kaprodi"=>"nora",
		],

		[
		"id"=>5,
		"nama"=>"statistik",
		"kuota"=>15,
		"kaprodi"=>"naomi",
		],

		[
		"id"=>6,
		"nama"=>"matematika",
		"kuota"=>12,
		"kaprodi"=>"mariatul",
		],
];
?>

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


