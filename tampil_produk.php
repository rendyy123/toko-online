<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" 
    crossorigin="anonymous">
    <title></title>
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <div class="container-fluid">
                <b><a class="navbar-brand">Griya Batik RENDY</a></b>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mynavbar">
                    <ul class="navbar-nav me-auto">

                        <li class="nav-item">
                            <a class="nav-link" href="header.php">Back to Home</a>
                        </li>

                        
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    <h3>Tampil Produk</h3>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA PRODUK</th>
                <th>DESKRIPSI</th>
                <th>HARGA</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "koneksi.php";
            $qry_produk=mysqli_query($conn,"select * from produk");
            $no=0;
            while($data_produk=mysqli_fetch_array($qry_produk)){
            $no++;?>
            <tr>
                <td><?=$no?></td>
                <td><?=$data_produk['nama_produk']?></td>
                <td><?=$data_produk['deskripsi']?></td>
                <td><?=$data_produk['harga']?></td></td>
                <td><a href="ubah_produk.php?id=<?=$data_produk['id']?>" class="btn btn-success">Checkout</a> | <a href="hapus_produk.php?id=<?=$data_produk['id']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
            </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
