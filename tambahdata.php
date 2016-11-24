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
?>
<html>
<head>
	<title>Koneksi ke MySQL</title>
</head>
<body bgcolor="pink">		
		//Performing SQL query
		<center>
		<form action="editdata.php" method="post">
		<a href='tambahdata.php'>Tambah Data</a><br>
		<input id="upload" name="upload" onblur='if (this.value == "") {this.value = "Pencarian...";}' onfocus='if (this.value == "Pencarian...") {this.value = "";}' value="Pencarian..." type="text">
		<input type="submit" value="Cari" />
		</center>
		</form>

		<?php
		echo "<table border='1' cellpadding='5'>\n";
		echo "<tr>";
		echo "<th>Id Mobil</th>";
		echo "<th>Merk</th>";
		echo "<th>Model</th>";
		echo "<th>Tipe</th>";
		echo "<th>Pintu</th>";
		echo "<th>Tahun Produksi</th>";
		echo "<th>Negara Pembuat</th>";
		echo "<th>Jenis Produksi</th>";
		echo "<th>Aksi</th>";
		echo "</tr>";
		while($line = mysqli_fetch_array($query))
		{
			echo "<tr>";
			echo "<td>".$line[0]."</td>";
			echo "<td>".$line[1]."</td>";
			echo "<td>".$line[2]."</td>";
			echo "<td>".$line[3]."</td>";
			echo "<td>".$line[4]."</td>";
			echo "<td>".$line[5]."</td>";
			echo "<td>".$line[6]."</td>";
			echo "<td>".$line[7]."</td>";
			echo '<td><a href="editdata.php?id='.$line[0].'">Rubah</a><a href="hapusdata.php?id='.$line[0].'" onclick="return confirm(\'Anda yakin akan menghapus data '.$line[0].'\');">Hapus</a></td>';
			echo "</tr>";
			}
		echo "</table>\n";
		
		//Free resultset
		mysqli_free_result($query);
		
		//Closing connection
		mysqli_close($conn);
	?>
</body>
</html>
