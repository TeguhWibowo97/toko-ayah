
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
            <input type="text" class="form-control" name="nama_produk" required>

            <label>Stok : </label>
            <input type="number" class="form-control" name="stok" required>

            <label>Harga : </label>
            <input type="number" class="form-control" name="harga" required>

            <label>Kondisi : </label>
            <select name="kondisi" id="" class="form-control">
                <option value="Baru">Baru</option>
                <option value="Second">Second</option>
            </select>

            <label>Kategori : </label>
            <select name="kategori" id="" class="form-control">
                <option value="Smartphone">Smartphone</option>
                <option value="Aksesoris">Aksesoris</option>
            </select>

            <label>Deskripsi Produk : </label>
            <textarea class="form-control" name="deskripsi" rows="5" required></textarea>
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
        </div>
    </div>
    </div>
</form>