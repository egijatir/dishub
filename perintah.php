<?php include 'koneksi.php';
$sukses     = "";
$error      = "";
error_reporting(0);
session_start();

?>
<!DOCTYPE html>
<html lang="en">

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

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="green" data-background-color="white" data-image="assets/img/sidebar-1.jpg">
      <div class="logo"><a href="#" class="simple-text logo-normal">
          <img src="images/favicon.png" class="circle" width="30"> &nbsp;Dashboard
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item  ">
            <a class="nav-link" href="dashboard.php ">
              <i class="material-icons">airport_shuttle</i>
              <p>Lampu Merah</p>
            </a>
          </li>
          <li class="nav-item  ">
            <a class="nav-link" href="larang.php">
              <i class="material-icons">do_not_disturb_on</i>
              <p>Rambu Larangan</p>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="./perintah.php">
              <i class="material-icons">content_paste</i>
              <p>Rambu Perintah</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="petunjuk.php">
              <i class="material-icons">transfer_within_a_station</i>
              <p>Rambu Petunjuk</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="peringatan.php">
              <i class="material-icons">warning</i>
              <p>Rambu Peringatan</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="index.php">
              <i class="material-icons">exit_to_app</i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Data Rambu Perintah</a>
          </div>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form" method="post">
              <div class="input-group no-border">
                <!-- ini buat cari data -->
                <input type="text" class="form-control" placeholder="Search..." name="query">
                <button type="submit" name="cari" class="btn btn-white btn-round btn-just-icon"> <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            </ul>
          </div>
        </div>
      </nav>
      <section>
        <br><br><br>
        <?php
        if ($error) {
        ?>
          <div class="alert alert-danger" role="alert">
            <?php echo $error ?>
          </div>
        <?php
        }
        ?>
        <?php
        if ($sukses) {
        ?>
          <div class="alert alert-success" role="alert">
            <?php echo $sukses ?>
          </div>
        <?php

        }
        ?>
        <!-- fungsi penmpiln -->
        <table border="0" width="1000" align="center">
          <thead>
            <tr>
              <th><a href="#" data-toggle="modal" data-target="#modalForm" style="color: #000000" title="Masukan Data"><button class="btn btn-success"> <i class="material-icons"> control_point</i>Tambah</button></a> </th>
            </tr>
            <tr>
              <th>
                <table class="table table-striped">
                  <thead class="bg-success">
                    <tr>
                      <th> <b>No</th></b>
                      <th><b>ID</th>
                      <th><b>Jenis Rambu</th>
                      <th><b>Titik Kordinat</th>
                      <th><b>Alamat</th>
                      <th><b>Kondisi</th>
                      <th colspan="2"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aksi</th>
                    </tr>
                  </thead>
                  <?php
                  $query = $_POST['query'];
                  if ($query != '') {
                    $sql2   = "select * from rb_perintah WHERE id_perintah LIKE '" . $query . "'";
                  } else {
                    $sql2   = "select * from rb_perintah order by id_perintah desc";
                  }


                  $q2     = mysqli_query($konek, $sql2);
                  $urut   = 1;
                  while ($r2 = mysqli_fetch_array($q2)) {
                    $id_perintah          = $r2['id_perintah'];
                    $jenis_rambu        = $r2['jenis_rambu'];
                    $titik_kordinat    = $r2['titik_kordinat'];
                    $alamat            = $r2['alamat'];
                    $kondisi           = $r2['kondisi'];
                  ?>

                    <tbody>
                      <tr>
                        <td>
                          <h5>
                            <?php echo $urut++ ?>
                        </td>
                        <td>
                          <h5><?php echo $id_perintah ?>
                        </td>
                        <td>
                          <h5><?php echo $jenis_rambu ?>
                        </td>
                        <td>
                          <h5><?php echo $titik_kordinat ?>
                        </td>
                        <td>
                          <h5><?php echo $alamat ?>
                        </td>
                        <td>
                          <h5><?php echo $kondisi ?>
                        </td>
                        <td>
                          <h5><a href="edit1.php?id_larangan=<?php echo $r2['id_larangan']; ?>" style="color: #000000"> <i class="material-icons">edit</i></a>
                        </td>
                        <td>
                          <h5><a href="hapus1.php?id_larangan=<?php echo $r2['id_larangan']; ?>" style="color: #f5330c" title="Hapus Data" onclick="return confirm('Anda yakin mau menghapus item ini ?')"><i class="material-icons">delete_forever</i></a>
                        </td>
                      </tr>
                    <?php } ?>
                </table><a href="#" onclick="window.print()" value="Print Table" / style="color: #000000" title="print"> <i class="large material-icons" width="90"> local_printshop </i></a>
                </tbody>
              </th>
            <tr>
              <th> </th>
            </tr>
            </tr>
          </thead>
        </table>
        </table>
        <!-- Modal buat masukan data-->
        <div class="modal fade" id="modalForm" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Memasukan Data Lampu Merah</h5>
                <button type="button" class="close" data-dismiss="modal">
                  <span aria-hidden="true">&times;</span>
                  <span class="sr-only">Close</span>
                </button>
              </div>
              <div class="modal-body">
                <p class="statusMsg"></p>
                <form action="input1.php" method="post" name="data">
                  <div class="form-group">
                    <label for="inputName"><b>Id_larangan</label>
                    <input type="text" name="id_larangan" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail"><b>Jenis Rambu</label>
                    <input type="text" name="jenis_rambu" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail"><b>Titik Kordinat</label>
                    <input type="text" name="titik_kordinat" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="inputMessage"><b>Alamat</label>
                    <input type="" name="alamat" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="inputMessage"><b>Kondisi</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="kondisi" required>
                        <option value="">- Pilih kondisi -</option>
                        <option value="Baik" <?php if ($kondisi == "Baik") echo "selected" ?>>Baik</option>
                        <option value="Buruk" <?php if ($kondisi == "Buruk") echo "selected" ?>>Buruk</option>
                      </select>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <input type="submit" name="kirim" value="Masukan" class="btn btn-success">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        </table>
        <footer class="footer">
          <div class="container-fluid">
            <div class="copyright float-right">
              &copy;UMKT
              <script>
                document.write(new Date().getFullYear())
              </script>
            </div>
          </div>
        </footer>
</body>

</html>