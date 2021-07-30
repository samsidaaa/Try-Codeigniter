
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
		<form action="<?php echo site_url('control_data/update')?>" method="post">
			<table width="349" border="1">
				<tr>
					<td colspan="2"><div align="center">Edit Data Dosen</div></td>
					<input type="hidden" value="<?php echo $data_edit->nidn; ?>" name="nidn">
				</tr>
				<tr>
				<td width="93">NIDN:</td>
				<td width="240"><input type="text" name="nidn" value="<?php echo $data_edit->nidn ?>" / size="40"> </td> 
				</tr>
				<tr>
					<td>Nama Dosen:</td>
					<td><input type="text" name="nama" / size="40" value="<?php echo $data_edit->nama; ?>"></td>
				</tr>
				<tr>
					<td>Bidang Ilmuu</td>
					<td><input type="text" name="bidang_ilmu" / size="40" value="<?php echo $data_edit->bidang_ilmu; ?>"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat" / size="40" value="<?php echo $data_edit->alamat; ?> "></td>
				</tr>
				<tr align="center">
					<td colspan="2"><input type="submit" value="update"/><input type="reset" value="reset" /></td>
				</tr>
			</table>
		</form>
	</div>

</body>
</html>