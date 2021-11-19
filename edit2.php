<?php
include 'koneksi.php';
$id_larangan = $_GET['id_larangan'];
$data   = "SELECT * from rb_larangan where id_larangan='$id_larangan'";
$data1  = mysqli_query($konek, $data);
$data2  = mysqli_fetch_array($data1);

?>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="images/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Dashboard </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link href="assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<style>
        .mx-auto {
            width: 800px;
        }

        .card {
            width: 850px;
            margin-top: 50px;
            margin-left: 290px;
            margin-right: 290px;
        }
    </style>    
<body>
<div class="card">
  <div class="card-header">
  Edit Data Rambu Larangan

  <div class="mx-50 mx-auto border p-3 mt-3">
        <form action="edit1.php" method="post" name="data" width="400">
            <div class="form-group">
                <label for="inputName"><b>Id lampu</label>
                <input type="text" name="id_larangan" class="form-control" required value="<?php echo $data2['id_larangan']; ?>">
            </div>
            <div class="form-group">
                <label for="inputName"><b>Jenis Rambu</label>
                <input type="text" name="jenis_rambu" class="form-control" required value="<?php echo $data2['jenis_rambu']; ?>">
            </div>
            <div class="form-group">
                <label for="inputEmail"><b>Titik Kordinat</label>
                <input type="text" name="titik_kordinat" class="form-control" required value="<?php echo $data2['titik_kordinat']; ?>">
            </div>
            <div class="form-group">
                <label for="inputMessage"><b>Alamat</label>
                <input type="" name="alamat" class="form-control" required value="<?php echo $data2['alamat']; ?>">
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <select class="form-control" name="Kondisi" required >
                        <option><?php echo $data2['kondisi']; ?></option>
                        <option value="Baik">Baik</option>
                        <option value="Buruk">Buruk</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <a href="dashboard.php" style="color: #000000"><button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <input type="submit" name="kirim" value="Masukan" class="btn btn-success">
            </div>
        </form>
        <?php
        if (isset($_POST['kirim'])) {
            $id_larangan       = $_POST['id_larangan'];
            $jenis_rambu       = $_POST['jenis_rambu'];
            $titik_kordinat    = $_POST['titik_kordinat'];
            $alamat            = $_POST['alamat'];
           
            $kirim          =  "  UPDATE rb_larangan
                                  SET id_larangan='$id_larangan',jenis_rambu='$jenis_rambu',titik_kordinat='$titik_kordinat',alamat='$alamat'
                                  WHERE id_larangan='$id_larangan'";
            $query            = mysqli_query($konek, $kirim);
            
            header("location:larang.php");
        }

        ?>
    </div>

</html>