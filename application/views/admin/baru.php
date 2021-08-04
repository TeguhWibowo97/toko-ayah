<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="mb-3">
                    <h1 class="text-dark"><i class="fas fa-mobile-alt"></i> Produk Smartphone Baru</h1>
                    <button class="btn btn-primary my-3" data-toggle="modal" data-target="#ModalTambahBarang">
                        <i class="fas fa-plus"></i> 
                        Tambah Produk                    
                    </button>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <?php foreach($produk as $p):?>
                    <div class="col-md-3 col-6">                
                        <div class="card">
                            <a href="<?=base_url() ;?>admin/detail/<?= $p['id_produk'];?>">
                                <img src="<?= base_url();?>assetAdmin/foto/redmi.jpg" class="card-img-top">
                            </a>
                            <div class="card-body">
                                <p class="card-text"><?= $p['nama_produk'];?></p>
                                <h5 class="text-success">Rp <?= number_format($p['harga']);?></h5>
                                <p class="card-text">kondisi : <?= $p['kondisi'];?></p>
                                <p class="card-text text-muted">Stok tersedia <?= $p['stok'];?> pcs</p>
                            </div>
                            <div class="card-footer text-center">
                                <a href="#" class="btn btn-danger btn-sm">Hapus</a>                            
                            </div>
                        </div>
                    </div>            
                <?php endforeach;?>
            </div>
        </div>
    </div>
</div>