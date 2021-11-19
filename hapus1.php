<!-- ini buat page larang.php -->
<?php 
include 'koneksi.php';
$id_larangan = $_GET['id_larangan'];
$id         = $_GET['id'];
$sql1       = "DELETE FROM rb_larangan WHERE id_larangan='$id_larangan'";
$q1         = mysqli_query($konek,$sql1);
if($q1){
    $sukses = "Berhasil hapus data";
}else{
    $error  = "Gagal melakukan delete data";
}

header("location:larang.php?pesan=hapus");
?>