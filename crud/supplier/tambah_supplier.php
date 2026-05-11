<!-- Modal Tambah Supplier -->
<div class="modal fade" id="modalTambahSupplier" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <!-- Modal Dialog -->
    <div class="modal-dialog" role="document">

        <!-- Modal Content -->
        <div class="modal-content">

            <!-- Header Modal -->
            <div class="modal-header">

                <!-- Judul Modal -->
                <h5 class="modal-title font-weight-bold">
                    Tambah Supplier Baru
                </h5>

                <!-- Tombol Close -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true">&times;</span>

                </button>

            </div>

            <!-- Form Tambah Supplier -->
            <form action="proses_supplier.php" method="POST">

                <!-- Body Modal -->
                <div class="modal-body">

                    <!-- Input Nama Supplier -->
                    <div class="form-group">

                        <label>Nama Supplier *</label>

                        <input type="text"
                            name="nama_supplier"
                            class="form-control"
                            placeholder="Masukkan nama supplier"
                            required>

                    </div>

                    <!-- Input Nomor Telepon -->
                    <div class="form-group">

                        <label>No. Telepon *</label>

                        <input type="text"
                            name="telepon"
                            class="form-control"
                            placeholder="Masukkan nomor telepon"
                            required>

                    </div>

                    <!-- Input Alamat -->
                    <div class="form-group">

                        <label>Alamat *</label>

                        <textarea name="alamat"class="form-control"rows="3"placeholder="Masukkan alamat supplier"required>
                        </textarea>
                    </div>
                </div>

                <!-- Footer Modal -->
                <div class="modal-footer">

                    <!-- Tombol Batal -->
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Batal
                    </button>

                    <!-- Tombol Simpan -->
                    <button type="submit" name="simpan" class="btn btn-primary">
                        Simpan
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>