<?php 
include 'koneksi.php';
$id_lampu = $_GET['id_lampu'];
$id         = $_GET['id'];
$sql1       = "DELETE FROM lampu_jalan WHERE id_lampu='$id_lampu'";
$q1         = mysqli_query($konek,$sql1);
if($q1){
    $sukses = "Berhasil hapus data";
}else{
    $error  = "Gagal melakukan delete data";
}

header("location:dashboard.php?pesan=hapus");
?>