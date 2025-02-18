<?= $this->extend('admin/template/template'); ?>
<?= $this->Section('content'); ?>

<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <h1 class="app-page-title">Edit Kontak</h1>
        <hr class="mb-4">
        <div class="row g-4 settings-section">
            <div class="app-card app-card-settings shadow-sm p-4">
                <div class="card-body">

                    <?php if (!empty(session()->getFlashdata('error'))) : ?>
                        <div class="alert alert-danger" role="alert">
                            <h4>Error</h4>
                            <p><?php echo session()->getFlashdata('error'); ?></p>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty(session()->getFlashdata('success'))) : ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo session()->getFlashdata('success') ?>
                        </div>
                    <?php endif; ?>

                    <form action="<?= base_url('admin/kontak/update/' . $kontak['id_kontak']) ?>" method="POST">
                        <?= csrf_field(); ?>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">Deskripsi Kontak (ID)</label>
                                    <input type="text" class="form-control" id="deskripsi_kontak_id" name="deskripsi_kontak_id" placeholder="Masukkan Deskripsi Kontak" value="<?= old('deskripsi_kontak_id', $kontak['deskripsi_kontak_id']) ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Deskripsi Kontak (EN)</label>
                                    <input type="text" class="form-control" id="deskripsi_kontak_en" name="deskripsi_kontak_en" placeholder="Masukkan Deskripsi Kontak" value="<?= old('deskripsi_kontak_en', $kontak['deskripsi_kontak_en']) ?>">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">No WhatsApp</label>
                                    <input type="text" class="form-control" id="link_wa" name="link_wa" placeholder="Masukkan Nama Kategori" value="<?= old('link_wa', $kontak['link_wa']) ?>">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div><!--//app-card-->
        </div><!--//row-->

        <hr class="my-4">
    </div><!--//container-fluid-->
</div><!--//app-content-->

<?= $this->endSection('content'); ?>