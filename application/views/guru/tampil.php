<!DOCTYPE html>
<html>
<head>
	<title>Data Guru</title>
</head>
<body>
	<?php echo anchor('guru/input','Tambah Guru'); ?>
	<table border="2">
		<tr>
			<td>No</td>
			<td>NIP</td>
			<td>Nama Guru</td>
			<td>Email</td>
			<td>Jenis Kelamin</td>
			<td>Aksi</td>
		</tr>
		<?php $no=1; foreach ($guru as $key => $value) { ?>
		<tr>		
			<td><?php echo $no++; ?></td>
			<td><?php echo $value->nip ?></td>
			<td><?php echo $value->nama ?></td>
			<td><?php echo $value->email ?></td>
			<td><?php echo $value->jk ?></td>		
		</tr>

				<?php } ?>
			
	</table>

</body>
</html>