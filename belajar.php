<!DOCTYPE html>
<html>
<head>
	<title>REGISTRASI</title>
</head>
<body>
	<center><h1>REGISTRASI</h1></center>
	<form method="POST" action="proses.php">
		<center><table>
			<tr>
				<td>username:</td>
				<td>
					<input type="text" name="username" placeholder="password" placeholder="your password">
				</td>
			</tr>
			<tr>
				<td>password :</td>
				<td>
					<input type="password" name="password" placeholder="your password">
				</td>
			</tr>
	
		<tr>
			<td>nama :</td>
			<td>
				<input type="text" name="name" placeholder="yourname">
			</td>
		</tr>
		<tr>
			<td>no. hp :</td>
			<td>
				<input type="number" name="telepon" placeholder="No. Hp">
			</td>
		</tr>
		<tr>
			<td>alamat :</td>
			<td>
				<textarea placeholder="isi dengan lengkap"></textarea>
			</td>
		</tr>
		<tr>
			<td>kabupaten :</td>
			<td>
				<select>
					<option>kota pontianak</option>
					<option>kubu raya</option>
					<option>mempawah</option>
					<option>singkawang</option>
					<option>sambas</option>
				</select>
			</td>
		</tr>	
		<tr>
			<td>jenis kelamin</td>
			<td>
				<input type="radio" name="jenis kelamin">Laki-laki
				<input type="radio" name="jenis kelamin">Perempuan
			</td>
		</tr>
		<tr>
			<td>prodi pilihan</td>
			<td>
				<option>
					<input type="checkbox" name="Prodi">sistem informasi <br>
					<input type="checkbox" name="Prodi">sistem komputer <br>
					<input type="checkbox" name="Prodi">matematika <br>
				</option>
			</td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Simpan"></td>
		</tr>
		</table><center>
	</form>

</body>
</html>