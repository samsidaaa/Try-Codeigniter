
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
		<form action="<?php echo site_url('control_data/update2')?>" method="post">
			<table width="349" border="1">
				<tr>
					<td colspan="2"><div align="center">Edit Data Jadwal</div></td>
					<input type="hidden" value="<?php echo $data_edit2->kode_jadwal; ?>" name="kode_jadwal">
				</tr>
				<tr>
				<td width="93">Kode Jadwal:</td>
				<td width="240"><input type="text" name="kode_jadwal" value="<?php echo $data_edit2->kode_jadwal ?>" / size="40"> </td> 
				</tr>
				<tr>
					<td>Kelas:</td>
					<td><input type="text" name="kelas" / size="40" value="<?php echo $data_edit2->kelas; ?>"></td>
				</tr>
				<tr>
					<td>Hari :</td>
					<td><input type="text" name="hari" / size="40" value="<?php echo $data_edit2->hari; ?>"></td>
				</tr>
				<tr>
					<td>Jam :</td>
					<td><input type="text" name="jam" / size="40" value="<?php echo $data_edit2->jam; ?> "></td>
				</tr>
				<tr>
					<td>MatKul :</td>
					<td><input type="text" name="makul" / size="40" value="<?php echo $data_edit2->makul; ?> "></td>
				</tr>
				<tr>
					<td>Dosen :</td>
					<td><input type="text" name="dosen" / size="40" value="<?php echo $data_edit2->dosen; ?> "></td>
				</tr>
				<tr>
					<td>Ruang :</td>
					<td><input type="text" name="ruang" / size="40" value="<?php echo $data_edit2->ruang; ?> "></td>
				</tr>
				<tr align="center">
					<td colspan="2"><input type="submit" value="update"/><input type="reset" value="reset" /></td>
				</tr>
			</table>
		</form>
	</div>

</body>
</html>