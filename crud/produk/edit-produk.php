<!-- Modal Edit Produk -->
<?php
/** @var array $data */
/** @var mysqli $conn */
?>

<div class="modal fade"
    id="editProduk<?= $data['id_produk']; ?>"
    tabindex="-1"
    role="dialog"
    aria-labelledby="modalEditLabel<?= $data['id_produk']; ?>"
    aria-hidden="true">

    <div class="modal-dialog modal-lg" role="document">

        <div class="modal-content border-0 shadow">

            <!-- Header -->
            <div class="modal-header bg-light">

                <h4 class="modal-title font-weight-bold text-secondary"
                    id="modalEditLabel<?= $data['id_produk']; ?>">

                    Edit Produk

                </h4>

                <button type="button"
                    class="close"
                    data-dismiss="modal">

                    <span>&times;</span>

                </button>

            </div>

            <!-- Form -->
            <form action="proses_produk.php" method="POST">

                <div class="modal-body">

                    <input type="hidden"
                        name="id_produk"
                        value="<?= $data['id_produk']; ?>">

                    <div class="row">

                        <!-- Kode Produk -->
                        <div class="col-md-6">

                            <div class="form-group">

                                <label>Kode Produk</label>

                                <input type="text"
                                    class="form-control"
                                    value="<?= $data['kode_produk']; ?>"
                                    readonly>

                                <!-- Hidden Input -->
                                <input type="hidden"
                                    name="kode_produk"
                                    value="<?= $data['kode_produk']; ?>">

                            </div>

                        </div>

                        <!-- Nama Produk -->
                        <div class="col-md-6">

                            <div class="form-group">

                                <label>Nama Produk *</label>

                                <input type="text"
                                    name="nama_produk"
                                    class="form-control"
                                    value="<?= $data['nama_produk']; ?>"
                                    required>

                            </div>

                        </div>

                        <!-- Kategori -->
                        <div class="col-md-6">

                            <div class="form-group">

                                <label>Kategori *</label>

                                <select name="id_kategori"
                                    class="form-control"
                                    required>

                                    <option value="">
                                        -- Pilih Kategori --
                                    </option>

                                    <?php
                                    $kategori = mysqli_query($conn, "SELECT * FROM kategori");

                                    while ($k = mysqli_fetch_assoc($kategori)) :
                                    ?>

                                        <option value="<?= $k['id_kategori']; ?>"
                                            <?= ($data['id_kategori'] == $k['id_kategori']) ? 'selected' : ''; ?>>

                                            <?= $k['nama_kategori']; ?>

                                        </option>

                                    <?php endwhile; ?>

                                </select>

                            </div>

                        </div>

                        <!-- Satuan -->
                        <div class="col-md-6">

                            <div class="form-group">

                                <label>Satuan *</label>

                                <select name="satuan"
                                    class="form-control"
                                    required>

                                    <option value="pcs" <?= ($data['satuan'] == 'pcs') ? 'selected' : ''; ?>>
                                        pcs
                                    </option>

                                    <option value="pack" <?= ($data['satuan'] == 'pack') ? 'selected' : ''; ?>>
                                        pack
                                    </option>

                                    <option value="box" <?= ($data['satuan'] == 'box') ? 'selected' : ''; ?>>
                                        box
                                    </option>

                                    <option value="kg" <?= ($data['satuan'] == 'kg') ? 'selected' : ''; ?>>
                                        kg
                                    </option>

                                </select>

                            </div>

                        </div>

                        <!-- Harga Beli -->
                        <div class="col-md-6">

                            <div class="form-group">

                                <label>Harga Beli *</label>

                                <input type="number"
                                    name="harga_beli"
                                    class="form-control"
                                    value="<?= $data['harga_beli']; ?>"
                                    required>

                            </div>

                        </div>

                        <!-- Harga Jual -->
                        <div class="col-md-6">

                            <div class="form-group">

                                <label>Harga Jual *</label>

                                <input type="number"
                                    name="harga_jual"
                                    class="form-control"
                                    value="<?= $data['harga_jual']; ?>"
                                    required>

                            </div>

                        </div>

                        <!-- Stok -->
                        <div class="col-md-6">

                            <div class="form-group">

                                <label>Stok *</label>

                                <input type="number"
                                    name="stok"
                                    class="form-control"
                                    value="<?= $data['stok']; ?>"
                                    required>

                            </div>

                        </div>

                        <!-- Stok Minimal -->
                        <div class="col-md-6">

                            <div class="form-group">

                                <label>Stok Minimal *</label>

                                <input type="number"
                                    name="stok_minimal"
                                    class="form-control"
                                    value="<?= $data['stok_minimal']; ?>"
                                    required>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Footer -->
                <div class="modal-footer bg-light">

                    <button type="button"
                        class="btn btn-secondary"
                        data-dismiss="modal">

                        Batal

                    </button>

                    <button type="submit"
                        name="update"
                        class="btn btn-primary">

                        Simpan Produk

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>