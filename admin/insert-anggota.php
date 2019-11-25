<?php
include "../conn.php";
if (isset($_POST['tambah'])) {
      	$id			= $_POST['id'];
		$nama 		= $_POST['nama'];
		$jk 		= $_POST['jk'];
        $kelas 		= $_POST['kelas'];
        $ttl 		= $_POST['ttl'];
        $alamat 	= $_POST['alamat'];	

        $sql="INSERT INTO data_anggota(id_anggota,nama,jk,kelas,ttl,alamat) VALUES 
					('$id','$nama','$jk','$kelas','$ttl','$alamat')";

        $query = mysqli_query($conn , $sql);

        if ($query) {
        	echo "Input Data Buku Sukses";
        	echo "<h3><a href='input-anggota.php'> Input Lagi</a></h3>";
            echo "<h3><a href='anggota.php'> Data Anggota</a></h3>";
        }
        else{
        	echo "gagal";
        }
}
?>