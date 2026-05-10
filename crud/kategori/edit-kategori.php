<?php
/** @var array $data */
?>
<!-- Modal Edit -->
<div class="modal fade"
    id="editKategori<?= $data['id_kategori']; ?>"
    tabindex="-1"
    role="dialog">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title font-weight-bold">
                    Edit Kategori
                </h5>

                <button type="button"
                    class="close"
                    data-dismiss="modal">

                    <span>&times;</span>

                </button>

            </div>

            <form action="proses_kategori.php" method="POST">

                <div class="modal-body">

                    <input type="hidden"
                        name="id_kategori"
                        value="<?= $data['id_kategori']; ?>">

                    <div class="form-group">

                        <label>Nama Kategori *</label>

                        <input type="text"
                            name="nama_kategori"
                            class="form-control"
                            value="<?= $data['nama_kategori']; ?>"
                            required>

                    </div>

                </div>

                <div class="modal-footer">

                    <button type="button"
                        class="btn btn-secondary"
                        data-dismiss="modal">

                        Batal

                    </button>

                    <button type="submit"
                        name="update"
                        class="btn btn-primary">

                        Simpan Perubahan

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>