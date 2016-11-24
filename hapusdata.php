<html>
<body bgcolor="pink">
<?php
	//Connecting, selecting database
	include "13-1.php";

	//Ambil nilai id
	$Id_Mobil=$_GET["id"];

	$query = "DELETE FROM mobil WHERE Id_Mobil = '$Id_Mobil'";
$hasil = mysqli_query($query);
 
echo '<script language="javascript">alert("Anda berhasil menghapus data !"); document.location="tambahdata.php";</script>';

?>
</body>
</html>