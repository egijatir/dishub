<?php include 'koneksi.php';

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
<!-- fungsi penmpiln -->
<br>
<table border="0" width="1000" align="center">
    <thead>
        <th>
            <center>
                <table border="0">
                    <thead>
                        <tr>
                            <center>
                                <th><img src="images/logo.png" class="circle" width="150"></th>
                            </center>
                            <th colspan="2">
                                <h2>Pemerintah Kota Samarinda</h2>
                                <b>
                                    <h2>Dinas Perhubungan </h2>
                                </b>
                            </th>
                        </tr>
                    <tbody>
                        <tr>
                            <th>
                                <h5>Jl. MT. Haryono, Samarinda |</h5>
                            </th>
                            <th>
                                <center>
                                    <h5>Tlpn : 0541-732072 | </h5>
                                </center>
                            </th>
                            <th>
                                <h5>Email : dishub@samarindakota.go.id</h5>
                            </th>
                        </tr>
                        <tr>
                            <th colspan="3">
                               <center>________________________________________________________________________________________________________</center> 
                            </th>
                        </tr>
                    </tbody>

    </thead>
</table>
</center>

</th>
<tr>
    <th>
        <br>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th> <b>No</th></b>
                    <th><b>ID</th>
                    <th><b>Titik Kordinat</th>
                    <th><b>Alamat</th>
                    <th><b>Kondisi</th>
                </tr>
            </thead>
            <?php   // ini but tmpilkn dt
            $sql2   = "select * from lampu_jalan order by id_lampu desc";
            $q2     = mysqli_query($konek, $sql2);
            $urut   = 1;
            while ($r2 = mysqli_fetch_array($q2)) {
                $id_lampu          = $r2['id_lampu'];
                $titik_kordinat    = $r2['titik_kordinat'];
                $alamat            = $r2['alamat'];
                $kondisi           = $r2['kondisi'];
            ?>

                <tbody>
                    <tr>
                        <td>
                            <h5> <?php echo $urut++ ?>
                        </td>
                        <td>
                            <h5><?php echo $id_lampu ?>
                        </td>
                        <td>
                            <h5> <?php echo $titik_kordinat ?>
                        </td>
                        <td>
                            <h5><?php echo $alamat ?>
                        </td>
                        <td>
                            <h5><?php echo $kondisi ?>
                        </td>

                    </tr>
                <?php } ?>
        </table><a href="#" onclick="window.print()" value="Print Table" / style="color: #000000" title="print"> <i class="large material-icons" width="90"> local_printshop </i></a>
        </tbody>
    </th>
<tr>
</tr>
</tr>
</thead>
</table>
</table>