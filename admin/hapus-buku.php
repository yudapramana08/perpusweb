<?php
include "../conn.php";
$id = $_GET['kd'];

$query = $conn->query("DELETE FROM data_buku WHERE id_buku='$id'");
if ($query){
	echo "<script>alert('Data Berhasil dihapus!'); window.location = 'buku.php'</script>";	
} else {
	echo "<script>alert('Data Gagal dihapus!'); window.location = 'buku.php'</script>";	
}
?>