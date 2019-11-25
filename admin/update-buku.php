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

        $sql="UPDATE data_buku SET judul='$judul',pengarang='$pengarang',th_terbit='$th_terbit',isbn='$isbn',kategori='$kategori',kode_klas='$kode_klas',jumlah_buku='$jumlah_buku',lokasi='$lokasi',asal='$asal',jum_temp='$jum_temp',tgl_input='$tgl_input' WHERE id_buku='$id'";

        $query = mysqli_query($conn , $sql);

        if ($query) {
        	echo "Update Data Buku Sukses";
        	echo "<h3><a href='input-buku.php'> Input Lagi</a></h3>";
            echo "<h3><a href='buku.php'> Data Buku</a></h3>";
        }
        else{
        	echo "gagal";
        }
}
?>