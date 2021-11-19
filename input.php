<?php 
include 'koneksi.php';
if(isset($_POST['kirim'])){
    $id_lampu       = $_POST['id_lampu'];
    $titik_kordinat = $_POST['titik_kordinat'];
    $alamat         = $_POST['alamat'];
    $Kondisi        = $_POST['Kondisi'];
    $kirim          = mysqli_query($konek, "INSERT INTO lampu_jalan (id_lampu, titik_kordinat, alamat, kondisi) VALUES ('$id_lampu','$titik_kordinat','$alamat','$Kondisi')");
  }
  header("location:dashboard.php");
  ?>
