<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header alert alert-success">
                    Invoice Pembayaran Anda
                </div>
                <div class="card-body">
                    <table class="table">
                        <?php foreach ($transaksi as $tr) : ?>
                            <tr>
                                <th>Merk Mobil</th>
                                <td>:</td>
                                <td><?= $tr->merk ?></td>
                            </tr>

                            <tr>
                                <th>Tanggal Rental</th>
                                <td>:</td>
                                <td><?= $tr->tanggal_rental ?></td>
                            </tr>

                            <tr>
                                <th>Tanggal Kembali</th>
                                <td>:</td>
                                <td><?= $tr->tanggal_kembali ?></td>
                            </tr>

                            <tr>
                                <th>Biaya Sewa/Hari</th>
                                <td>:</td>
                                <td>Rp. <?= number_format($tr->harga, 0, ',', '.')  ?></td>
                            </tr>

                            <tr>
                                <?php
                                $x = strtotime($tr->tanggal_kembali);
                                $y = strtotime($tr->tanggal_rental);
                                $jmlhari = abs(($x - $y) / (60 * 60 * 24));
                                ?>
                                <th>Jumlah hari sewa</th>
                                <td>:</td>
                                <td><?= $jmlhari ?> Hari</td>
                            </tr>

                            <tr class="text-success">
                                <th>Jumlah Pembayaran</th>
                                <td>:</td>
                                <td><button class="btn btn-sm btn-success">Rp. <?= number_format($tr->harga * $jmlhari, 0, ',', '.') ?></button></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td><a href="" class="btn btn-sm btn-secondary">Print Invoice</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header alert alert-warning">
                    Informasi Pembayaran
                </div>
                <div class="card-body">
                    <p class="text-success">Silahkan Melakukan Pembayaran Melalui Rekening di Bawah ini:</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">BANK Mandiri 1204563</li>
                        <li class="list-group-item">BANK BCA 4578969</li>
                        <li class="list-group-item">BANK BNI 1245879</li>
                    </ul>

                    <?php

                    if (empty($tr->bukti_pembayaran)) { ?>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                            Upload Bukti Pembayaran
                        </button>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>