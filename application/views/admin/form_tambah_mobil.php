<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Data Mobil</h1>
        </div>
        <div class="card">
            <div class="card-body">

                <form method="POST" action="<?= base_url('admin/Data_mobil/tambah_mobil_aksi') ?>" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-gorup">
                                <label>Type Mobil</label>
                                <select name="kode_type" class="form-control">
                                    <option value="">--Pilih Type Mobil--</option>
                                    <?php foreach ($type as $tp) : ?>
                                        <option value="<?= $tp->kode_type ?>"><?= $tp->nama_type ?> </option>
                                    <?php endforeach; ?>
                                </select>
                                <?= form_error('kode_type', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label>Merk</label>
                                <input type="text" name="merk" class="form-control">
                                <?= form_error('merk', '<div class="text-small text-danger">', '</div>') ?>
                            </div>

                            <div class="form-group">
                                <label>no plat</label>
                                <input type="text" name="no plat" class="form-control">
                                <?= form_error('no_plat', '<div class="text-small text-danger">', '</div>') ?>
                            </div>

                            <div class="form-group">
                                <label>warna</label>
                                <input type="text" name="warna" class="form-control">
                                <?= form_error('warna', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label>Harga Sewa/Hari</label>
                                <input type="number" name="harga" class="form-control">
                                <?= form_error('harga', '<div class="text-small text-danger">', '</div>') ?>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Denda</label>
                                <input type="number" name="denda" class="form-control">
                                <?= form_error('denda', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label>tahun</label>
                                <input type="text" name="tahun" class="form-control">
                                <?= form_error('tahun', '<div class="text-small text-danger">', '</div>') ?>
                            </div>

                            <div class="form-group">
                                <label>status</label>
                                <select name="status" class="form-control">
                                    <option value="">--Pilih Status--</option>
                                    <option value="1">--tersedia--</option>
                                    <option value="0">--tidak tersedia--</option>
                                </select>
                                <?= form_error('status', '<div class="text-small text-danger">', '</div>') ?>
                            </div>

                            <div class="form-group">
                                <label>gambar</label>
                                <input type="file" name="gambar" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-primary">simpan</button>
                            <button type="reset" class="btn btn-danger">reset</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </section>
</div>