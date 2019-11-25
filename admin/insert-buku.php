<?php
include "../conn.php";
if (isset($_POST['tambah'])) {
        $id 		= $_POST['id_buku'];
        $judul		= $_POST['judul'];
		$pengarang 	= $_POST['pengarang'];
		$th_terbit 	= $_POST['th_terbit'];
        $penerbit 	= $_POST['penerbit'];
        $isbn 		= $_POST['isbn'];
        $kategori 	= $_POST['kategori'];
        $kode_klas 	= $_POST['kode_klas'];
        $jumlah_buku= $_POST['jumlah_buku'];
        $lokasi 	= $_POST['lokasi'];
        $asal 		= $_POST['asal'];
        $jum_temp 	= $_POST['jum_temp'];
        $tgl_input 	= $_POST['tgl_input'];	

        $sql="INSERT INTO data_buku(id_buku,judul,pengarang,th_terbit,penerbit,isbn,kategori,kode_klas,jumlah_buku,lokasi,asal,jum_temp,tgl_input) VALUES 
        	('$id','$judul','$pengarang','$th_terbit','$penerbit','$isbn','$kategori','$kode_klas','$jumlah_buku','$lokasi','$asal','$jum_temp','$tgl_input')";

        $query = mysqli_query($conn , $sql);

        if ($query) {
        	echo "Input Data Buku Sukses";
        	echo "<h3><a href='input-buku.php'> Input Lagi</a></h3>";
            echo "<h3><a href='buku.php'> Data Anggota</a></h3>";
        }
        else{
        	echo "gagal";
        }
}
?>