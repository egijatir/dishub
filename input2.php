<?php 
include 'koneksi.php';
if(isset($_POST['kirim'])){
  $id_larangan       = $_POST['id_larangan'];
  $jenis_rambu       = $_POST['jenis_rambu'];
  $titik_kordinat    = $_POST['titik_kordinat'];
  $alamat            = $_POST['alamat'];
  $kondisi           = $_POST['kondisi'];
  $kirim             = mysqli_query($konek, "INSERT INTO rb_larangan (id_larangan, jenis_rambu, titik_kordinat, alamat, kondisi) VALUES ('$id_larangan','$jenis_rambu','$titik_kordinat','$alamat','$kondisi')");
  }
  header("location:larang.php");
  ?>
