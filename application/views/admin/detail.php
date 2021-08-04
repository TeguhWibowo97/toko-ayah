<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                    <img src="<?= base_url();?>assetAdmin/foto/redmi.jpg" class="card-img">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-text"><?= $produk['nama_produk'];?></h5>
                        <h1 class="text-success">Rp <?= number_format($produk['harga']);?></h1>
                        <p class="card-text">Kondisi : <?= $produk['kondisi'];?></p>
                        <p class="card-text">Kategori : <?= $produk['kategori'];?></p>
                        <p class="card-text"><small class="text-muted">Stok tersedia <?= $produk['stok'];?></small></p>
                    </div>
                    </div>
                </div>
            </div>
            <div class="card border-primary">
                <div class="card-header">
                    Deskripsi Produk
                </div>
                <div class="card-body">
                    <?= $produk['deskripsi'];?>
                </div>
            </div>
        </div>
    </div>
</div>
