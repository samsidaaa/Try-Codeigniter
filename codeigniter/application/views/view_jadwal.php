<!DOCTYPE >
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>CRUD CI</title>
</head>
<body>
	<div align="center">
		<table width="827" height="117" border="1">
			<tr>
				<td height="41" colspan="7"><?php echo anchor('Control_data/tambah2','Tambah Data Jadwal'); ?></td>
				<td height="41" colspan="7"><?php echo anchor('Control_data/index','Dosen'); ?></td>
			</tr>
			<tr align="center">
				<td height="32">No.</td>
				<td>Kode Jadwal</td>
				<td>Kelas</td>
				<td>Hari</td>
				<td>jam</td>
				<td>matkul</td>
				<td>Dosen</td>
				<td>Ruang</td>
				<td colspan="2"> AKSI</td>
				
			</tr>
			<?php $i=1;
			foreach ($data_jadwal as $row ) { ?>
				<tr align="center">
					<td><?php echo $i; ?></td>
					<td><?php echo $row['kode_jadwal']; ?></td>
					<td><?php echo $row['kelas']; ?></td>
					<td><?php echo $row['hari']; ?></td>
					<td><?php echo $row['jam']; ?></td>
					<td><?php echo $row['makul']; ?></td>
					<td><?php echo $row['dosen']; ?></td>
					<td><?php echo $row['ruang']; ?></td>
					<td><?php echo anchor('Control_data/edit2/'.$row['kode_jadwal'],'Edit'); ?></td>
					<td><?php echo anchor('Control_data/hapus2/'.$row['kode_jadwal'],'Hapus'); ?></td>

					
				</tr>
				<?php $i++; 				# code...
			}?>
		</table>
	</div>
</body>
</html>

