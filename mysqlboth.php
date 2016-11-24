<html>
	<head>
	<title>Koneksi ke MySQL</title>
	</head>
	
	<body bgcolor="pink">
<?php
$db_host = 'localhost'; // Nama Server
$db_user = 'root'; // User Server
$db_pass = ''; // Password Server
$db_name = 'ShowRoomMobil'; // Nama Database

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Gagal terhubung MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT Id_mobil, Merk, Model, Tipe, Pintu, Tahun_Produksi, negara_Pembuat, Jenis_Produksi
	FROM mobil';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}

echo '<table>
		<thead>
			<tr>
			<th>ID MOBIL</th>
			<th>MERK</th>
			<th>MODEL</th>
			<th>TIPE</th>
			<th>PINTU</th>
			<th>Tahun Produksi</th>
			<th>Negara Pembuat</th>
			<th>Jenis Produksi</th>
			</tr>
		</thead>
		<tbody>';
		
while ($row = mysqli_fetch_row($query))
{
	echo '<tr>
			<td>'.$row[0].'</td>
			<td>'.$row[1].'</td>
			<td>'.$row[2].'</td>
			<td>'.$row[3].'</td>
			<td>'.number_format($row[4], 0, ',', '.').'</td>
			<td>'.$row[5].'</td>
			<td>'.$row[6].'</td>
			<td class="right">'.$row[7].'</td>
		</tr>';
}
echo '
	</tbody>
</table>';

// Apakah kita perlu menjalankan fungsi mysqli_free_result() ini? baca bagian VII
mysqli_free_result($query);

// Apakah kita perlu menjalankan fungsi mysqli_close() ini? baca bagian VII
mysqli_close($conn);
?>
</body>
</html>