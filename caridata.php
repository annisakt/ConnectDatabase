<html>
<body bgcolor="pink">
<?php
include "13-1.php";

$Id_Mobil=$_GET["Id_Mobil"];

	//Ambil nilai id
	$search = $_POST['Edit'];
	$query = mysql_query("SELECT * FROM mobil WHERE Merk LIKE '%$search%' OR Model LIKE '%$search%' OR Tipe LIKE '%$search%'");
	echo "<table cellpadding='8'>\n";
	echo "<tr>";
	echo "<th>Id Mobil</th>";
	echo "<th>Merk</th>";
	echo "<th>Model</th>";
	echo "<th>Tipe</th>";
	echo "<th>Pintu</th>";
	echo "<th>Tahun Produksi</th>";
	echo "<th>Negara Pembuat</th>";
	echo "<th>Jenis Produksi</th>";
	echo "<th>Action</th>";
	echo "</tr>";
	while($line = mysql_fetch_array($query, MYSQL_NUM))
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
		echo '<td><a href="editdata.php?id='.$line[0].'">Edit</a><a href="hapusdata.php?id='.$line[0].'" onclick="return confirm(\'Anda yakin akan menghapus data '.$line[0].'\');">Delete</a></td>';
		echo "</tr>";
	}
	echo "<tr><td><a href='tambahdata.php'>Kembali</a></td></tr>";
	echo "</table>";
?>
</body>
</html>