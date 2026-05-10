<div class="modal fade" id="modalTambahProduk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold">Tambah Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/simaskir_1/crud/produk/proses_produk.php" method="POST">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Kode Produk</label>
                                <?php
                                include '../../koneksi.php';
                                /** @var mysqli $conn */ // Baris ini memberitahu VS Code bahwa $conn itu ada
                                // Ambil kode terbesar
                                $query = mysqli_query($conn, "SELECT MAX(kode_produk) AS kode_terbesar FROM produk");

                                $data = mysqli_fetch_array($query);

                                $kodeProduk = $data['kode_terbesar'];

                                // Jika belum ada data
                                if ($kodeProduk == NULL) {

                                    $urutan = 1;
                                } else {

                                    // Ambil angka dari PRD-001
                                    $urutan = (int) substr($kodeProduk, 4, 3);

                                    $urutan++;
                                }

                                // Format kode
                                $kode_produk = "PRD-" . sprintf("%03s", $urutan);
                                ?>
                                <input type="text" name="kode_produk" class="form-control" value="<?= $kode_produk; ?>"
                                    readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Produk *</label>
                                <input type="text" name="nama_produk" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Kategori *</label>
                                <select name="id_kategori" class="form-control" required>
                                    <option value="">-- Pilih Kategori --</option>
                                    <?php
                                    // Ambil data kategori dari database
                                    /** @var mysqli $conn */ // Baris ini memberitahu VS Code bahwa $conn itu ada
                                    $kat = mysqli_query($conn, "SELECT * FROM kategori");
                                    while ($k = mysqli_fetch_array($kat)) {
                                        echo "<option value='" . $k['id_kategori'] . "'>" . $k['nama_kategori'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Satuan *</label>
                                <select name="satuan" class="form-control" required>
                                    <option value="pcs">pcs</option>
                                    <option value="kg">kg</option>
                                    <option value="liter">liter</option>
                                    <option value="pack">pack</option>
                                    <option value="gantung">gantung</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Harga Beli *</label>
                                <input type="number" name="harga_beli" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Harga Jual *</label>
                                <input type="number" name="harga_jual" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Stok Awal *</label>
                                <input type="number" name="stok" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Stok Minimal *</label>
                                <input type="number" name="stok_minimal" class="form-control" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" name="simpan" class="btn btn-primary">Simpan Produk</button>
                </div>
            </form>
        </div>
    </div>
</div>