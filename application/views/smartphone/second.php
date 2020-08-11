<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 mb-3">
                    <h1 class="text-dark"><i class="fas fa-mobile-alt"></i> Produk Smartphone Second</h1>
                </div>
            </div>
            <div class="row">
                <?php for($i=1;$i<15;$i++):?>
                <div class="col-4">
                    <div class="card">
                        <img src="<?=base_url();?>assetAdmin/foto/redmi.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5>Nama HP</h5>
                            <h1 class="card-text text-success">Rp 100</h1>
                            <p class="text-sm">Stok tersedia 1 pcs</p>
                        </div>
                    </div>                                    
                </div>
                <?php endfor;?>        
            </div>
        </div>
    </div>
</div>