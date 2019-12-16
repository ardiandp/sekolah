<!DOCTYPE html>
<html>
<head>
	<title>Data Guru</title>
</head>
<body>
	<table border="2">
		<tr>
			<td>No</td>
			<td>NIP</td>
			<td>Nama Guru</td>
			<td>Email</td>
			<td>Jenis Kelamin</td>
		</tr>
		<tr>
		<?php $no=1; foreach ($guru as $key => $value) { ?>
			<td><?php echo $no++; ?></td>
			<td><?php echo $value->nip ?></td>
			<td><?php echo $value->nama ?></td>
			<td><?php echo $value->email ?></td>
			<td><?php echo $value->jk ?></td>
		
				<?php } ?>
		</tr>
			
	</table>

</body>
</html>