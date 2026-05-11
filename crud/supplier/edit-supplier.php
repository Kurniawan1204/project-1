<!-- Modal Edit Supplier -->
<?php
/** @var array $data */

?>
<div class="modal fade"
    id="editSupplier<?= $data['id_supplier']; ?>"
    tabindex="-1"
    role="dialog"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true">

    <!-- Modal Dialog -->
    <div class="modal-dialog" role="document">

        <!-- Modal Content -->
        <div class="modal-content">

            <!-- Header Modal -->
            <div class="modal-header">

                <!-- Judul Modal -->
                <h5 class="modal-title font-weight-bold">
                    Edit Data Supplier
                </h5>

                <!-- Tombol Close -->
                <button type="button"
                    class="close"
                    data-dismiss="modal"
                    aria-label="Close">

                    <span aria-hidden="true">&times;</span>

                </button>

            </div>

            <!-- Form Edit Supplier -->
            <form action="proses_supplier.php" method="POST">

                <!-- Input Hidden ID Supplier -->
                <input type="hidden"
                    name="id_supplier"
                    value="<?= $data['id_supplier']; ?>">

                <!-- Body Modal -->
                <div class="modal-body">

                    <!-- Input Nama Supplier -->
                    <div class="form-group">

                        <label>Nama Supplier *</label>

                        <input type="text"
                            name="nama_supplier"
                            class="form-control"
                            value="<?= $data['nama_supplier']; ?>"
                            required>

                    </div>

                    <!-- Input Telepon -->
                    <div class="form-group">

                        <label>No. Telepon *</label>

                        <input type="text"
                            name="telepon"
                            class="form-control"
                            value="<?= $data['telepon']; ?>"
                            required>

                    </div>

                    <!-- Input Alamat -->
                    <div class="form-group">

                        <label>Alamat *</label>

                        <textarea name="alamat"
                            class="form-control"
                            rows="3"
                            required><?= $data['alamat']; ?></textarea>

                    </div>

                </div>

                <!-- Footer Modal -->
                <div class="modal-footer">

                    <!-- Tombol Batal -->
                    <button type="button"
                        class="btn btn-secondary"
                        data-dismiss="modal">

                        Batal

                    </button>

                    <!-- Tombol Update -->
                    <button type="submit"
                        name="update"
                        class="btn btn-warning">

                        Update

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>