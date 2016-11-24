<html>
<body bgcolor="pink">
<?php
$db_host = 'localhost'; // Nama Server
$db_user = 'root'; // User Server
$db_pass = ''; // Password Server
$db_name = 'ShowRoomMobil'; // Nama Database

include "13-1.php";

	//Ambil nilai id
	$Id_Mobil=$_POST['Id_Mobil'];
	
	//Ambil Query
	$query = mysql_query("SELECT * FROM mobil WHERE Id_Mobil = '$Id_Mobil'");
	$baris = mysqli_fetch_array($query);
?>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
<table cellpadding="8">
	<tr><td>Id Mobil</td><td>:</td><td><input type="text" name="Id_Mobil" value="<?php echo $baris['Id_Mobil']; ?>" /></td></tr>
	<tr><td>Merk</td><td>:</td><td><input type="text" name="merk" value="<?php echo $baris['Merk']; ?>" /></td></tr>
	<tr><td>Model</td><td>:</td><td><input type="text" name="model" value="<?php echo $baris['Model']; ?>" /></td></tr>
	<tr><td>Tipe</td><td>:</td><td><input type="text" name="tipe" value="<?php echo $baris['Tipe']; ?>" /></td></tr>
	<tr><td>Pintu</td><td>:</td><td><input type="text" name="pintu" value="<?php echo $baris['Pintu']; ?>" /></td></tr>
	<tr><td>Tahun Produksi</td><td>:</td><td><input type="text" name="tahun" value="<?php echo $baris['Tahun_Produksi']; ?>" /></td></tr>
	<tr><td>Negara Pembuat</td><td>:</td><td><input type="text" name="negara" value="<?php echo $baris['negara_Pembuat']; ?>" /></td></tr>
	<tr><td>Jenis Produksi</td><td>:</td><td><input type="text" name="jenis" value="<?php echo $baris['Jenis_Produksi']; ?>" /></td></tr>
	<tr><td></td><td></td><td><input type="submit" value="Simpan" name="simpan" /><input type="reset" value="Reset" /></td></tr>
</table>
</form>

<?php
	if(isset($_POST["simpan"]))
	{
		$Id_Mobil = isset($_POST['Id_Mobil']);
		$Merk = $_POST['Merk'];
		$Model = $_POST['Model'];
		$Tipe = $_POST['Tipe'];
		$Pintu = $_POST['Pintu'];
		$Tahun_Produksi = $_POST['Tahun'];
		$negara_Pembuat = $_POST['Negara'];
		$Jenis_Produksi = $_POST['Jenis'];
		$query2 = "UPDATE mobil SET Merk='$Merk', Model='$Model', Tipe='$Tipe', Pintu='$Pintu', Tahun_Produksi='$Tahun', negara_Pembuat='$Negara', Jenis_Produksi='$Jenis' WHERE Id_Mobil='$Id_Mobil'";
		if (!mysql_query($query))
	    {
			echo "query  gagal disimpan";
		}
		else
		{
		echo "Data Berhasil Disimpan <a href='tambahdaya.php'>Kembali</a>";
	}
	}
?>
</body>
</html>