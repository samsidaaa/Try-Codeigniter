<!DOCTYPE html>
<html>
<head>
		<title>CodeIgniter</title>
</head>
<body>
	<table border="1px" align="center" cellpadding="2" cellspacing="2">
		<h2 align="center">Data Siswa</h2>
		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>Kelas</th>
			
		</tr>
		<?php
			$no=1;
			for ($i=0; $i <count($data_mhs) ; $i++) { 
				echo "<tr>";
				echo "<td>".$no."</td>";
				echo "<td>".$data_mhs[$i]['nama']."</td>";
				echo "<td>".$data_mhs[$i]['kelas']."</td>";
				echo "</tr>";
				$no++;
				# code...
			}
		?>
	</table>
</body>
</html>