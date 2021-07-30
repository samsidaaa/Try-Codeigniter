<!DOCTYPE>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<head>
	<title>CRUD CI</title>
</head>
<body>
	<div align="center">
		<form action="<?php echo site_url('control_data/insert2') ?>" method="post">
			<table width="345" border="1">
				<tr>
					<td colspan="2"><div align="center">Tambah Data Jadwal</div></td>
				</tr>
				<tr>
					<td width="93">Kode Jadwal:</td>
					<td width="249"><input type="text" name="kode_jadwal" / size="40"></td>
				</tr>
				<tr>
					<td>Kelas</td>
					<td><input type="text" name="kelas" / size="40"></td>
				</tr>
				<tr>
					<td>hari</td>
					<td><input type="text" name="hari" / size="40"></td>
				</tr>
				<tr>
					<td>Jam</td>
					<td><input type="text" name="jam" / size="40"></td>
				</tr>
					<tr>
					<td>MatKul</td>
					<td><input type="text" name="makul" / size="40"></td>
				</tr>
					<tr>
					<td>Dosen</td>
					<td><input type="text" name="dosen" / size="40"></td>
				</tr>
					<tr>
					<td>Ruang</td>
					<td><input type="text" name="ruang" / size="40"></td>
				</tr>
				<tr align="center">
					<td colspan="2"><input type="submit" value="simpan"/><input type="reset" value="reset" /></td>
				</tr>		
			</table>
		</form>
	</div>

</body>
</html>