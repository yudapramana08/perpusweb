
<?php
include "../conn.php";
if (isset($_POST['edit'])) {
      	$id			= $_POST['id'];
		$nama 		= $_POST['nama'];
		$jk 		= $_POST['jk'];
        $kelas 		= $_POST['kelas'];
        $ttl 		= $_POST['ttl'];
        $alamat 	= $_POST['alamat'];	

		$sql="UPDATE data_anggota SET nama='$nama', jk='$jk', kelas='$kelas', ttl='$ttl', alamat='$alamat' WHERE id_anggota='$id'";


        $query = mysqli_query($conn , $sql);

        if ($query) {
        	echo "Edit Data Anggota Sukses";
        	echo "<h3><a href='input-anggota.php'> Input Lagi</a></h3>";
            echo "<h3><a href='anggota.php'> Data Anggota</a></h3>";
        }
        else{
        	echo "gagal";
        }
}
?>