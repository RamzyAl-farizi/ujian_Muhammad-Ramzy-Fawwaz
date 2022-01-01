<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Data Mobil</h1>
        </div>
        <div class="card">
            <div class="card-body">

                <?php foreach ($mobil as $mb) : ?>

                    <form method="POST" action="<?= base_url('admin/Data_mobil/update_mobil_aksi') ?>" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-gorup">
                                    <label>Type Mobil</label>
                                    <input type="hidden" name="id_mobil" value="<?= $mb->id_mobil ?>">
                                    <select name="kode_type" class="form-control">
                                        <option value="<?= $mb->kode_type ?>"><?= $mb->kode_type ?></option>
                                        <?php foreach ($type as $tp) : ?>
                                            <option value="<?= $tp->kode_type ?>"><?= $tp->nama_type ?> </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('kode_type', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Merk</label>
                                    <input type="text" name="merk" class="form-control" value="<?= $mb->merk ?>">
                                    <?= form_error('merk', '<div class="text-small text-danger">', '</div>') ?>
                                </div>

                                <div class="form-group">
                                    <label>no plat</label>
                                    <input type="text" name="no plat" class="form-control" value="<?= $mb->no_plat ?>">
                                    <?= form_error('no_plat', '<div class="text-small text-danger">', '</div>') ?>
                                </div>

                                <div class="form-group">
                                    <label>warna</label>
                                    <input type="text" name="warna" class="form-control" value="<?= $mb->warna ?>">
                                    <?= form_error('warna', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>tahun</label>
                                    <input type="text" name="tahun" class="form-control" value="<?= $mb->tahun ?>">
                                    <?= form_error('tahun', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label>Harga</label>
                                    <input type="text" name="harga" class="form-control" value="<?= $mb->harga ?>">
                                    <?= form_error('harga', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Denda</label>
                                    <input type="text" name="denda" class="form-control" value="<?= $mb->denda ?>">
                                    <?= form_error('denda', '<div class="text-small text-danger">', '</div>') ?>
                                </div>

                                <div class="form-group">
                                    <label>status</label>
                                    <select name="status" class="form-control">
                                        <option value="1" <?php if ($mb->status == "1")
                                                                echo 'selected="selected"'; ?>>Tersedia</option>
                                        <option value="0" <?php if ($mb->status == "0")
                                                                echo 'selected="selected"'; ?>>Tidak Tersedia</option>
                                    </select>

                                    <div class="form-group">
                                        <label>gambar</label>
                                        <input type="file" name="gambar" class="form-control">
                                    </div>

                                    <button type="submit" class="btn btn-primary">simpan</button>
                                    <button type="reset" class="btn btn-danger">reset</button>
                                </div>

                            </div>
                    </form>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</div>