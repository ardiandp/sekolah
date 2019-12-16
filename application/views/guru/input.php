<!DOCTYPE html>
<html>
<head>
	<title>Input Data Guru</title>
</head>
<body>
	<?php echo form_open('guru/input'); ?>
	<table border="2">
		<tr>
			<tr><td>NIP</td><td><input type="text" name="nip"></td></tr>
			<tr><td>Nama</td><td><input type="text" name="nama"></td></tr>
			<tr><td>Email</td><td><input type="text" name="email"></td></tr>
			<tr><td>Jenis Kelamin</td><td><input type="radio" name="jk" value="L">Laki-laki
			                          <input type="radio" name="jk" value="P">Perempuan</td></tr>
		<tr><td><input type="submit" name="simpan" value="Simpan"></td></tr>
		</tr>
	
	</table>

</body>
</html>