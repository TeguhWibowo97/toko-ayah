
<form action="<?= base_url();?>admin/tambah" method="post">
    <!-- Modal Tambah Barang -->
    <div class="modal fade" id="ModalTambahBarang" tabindex="-1" aria-labelledby="ModalTambahBarangLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="ModalTambahBarangLabel">Form Tambah Produk</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <label>Nama Produk : </label>
            <input type="text" class="form-control" name="nama_produk">

            <label>Stok : </label>
            <input type="number" class="form-control" name="stok">

            <label>Harga : </label>
            <input type="number" class="form-control" name="harga">

            <label>Kondisi : </label>
            <input type="text" class="form-control" name="kondisi">

            <label>Deskripsi Produk : </label>
            <input type="text" class="form-control" name="deskripsi">

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
        </div>
    </div>
    </div>
</form>