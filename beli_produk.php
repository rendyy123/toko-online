<div class="row">
    <?php
    include "header.php";
    include "koneksi.php";
    $qry_produk=mysqli_query($conn,"select * from produk");
    while($dt_produk=mysqli_fetch_array($qry_produk)){
        ?>
        <div class="col-md-3">
            <p>
            <div class="card">
                <img src="batik.jpg" class="card-img-top">
                <div class="card-body">
                    <b><p class="card-text"><?=$dt_produk['nama_produk']?></p></b>
                    <p class="card-text"><?=$dt_produk['deskripsi']?></p>
                    <p class="card-text"><?=$dt_produk['harga']?></p>
                    <a href="checkout.php?id_produk=<?$dt_produk['id_produk']?>" class="btn btn-primary">BELI</a>
                    <a href="keranjang.php?id_produk=<?$dt_produk['id_produk']?>" class="btn btn-outline-primary">+ Keranjang</a>
                </div>
            </div>
            </p>
        </div>
        <?php
    }
    ?>
</div>
