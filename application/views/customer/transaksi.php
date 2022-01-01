<div class="container">
    <div class="card mx-auto" style="margin-top: 100px; width: 80%">
        <div class="card-header">
            Data Transaksi Anda
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tr>
                    <th>No</th>
                    <th>Nama Mobil</th>
                    <th>Merk Mobil</th>
                    <th>No Plat</th>
                    <th>Harga Sewa</th>
                    <th>action</th>
                </tr>

                <?php $no = 1;
                foreach ($transaksi as $tr) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $tr->nama ?></td>
                        <td><?= $tr->merk ?></td>
                        <td><?= $tr->no_plat ?></td>
                        <td>Rp. <?= number_format($tr->harga, 0, ',', '.')  ?></td>
                        <td>
                            <?php if ($tr->status_rental == "Selesai") { ?>
                                <button class="btn btn-sm btn-danger">Rental Selesai</button>
                            <?php } else { ?>
                                <a href="<?= base_url('customer/transaksi/pembayaran/' . $tr->id_rental) ?>" class="btn btn-sm btn-success">Cek Pembayaran</a>
                            <?php } ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>