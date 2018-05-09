<!DOCTYPE html>
<html>
<head>
	<title>proses registrasi</title>
</head>
<body>
	<h2>Selamat Anda Terdaftar Dengan Identitas</h2>
	<table>
		<tr>
			<td>nama </td>
			<td>:</td>
			<td>
				<?= $_POST['nama']
			</td>
		</tr>

	</table>
</body>
</html>

<?php
	echo $_POST["Selamat Anda Terdaftar Dengan Identitas"];
	echo "<br>";
	echo "<br>";

	echo "username	:";
	echo $_POST["username"];
	echo "<br>";
	echo "nama	:";
	echo $_POST["nama"];
	echo "<br>";
	echo "no. hp	:";
	echo $_POST["no. hp"];
	echo "<br>";
	echo "alamat	:";
	echo $_POST["alamat"];
?>