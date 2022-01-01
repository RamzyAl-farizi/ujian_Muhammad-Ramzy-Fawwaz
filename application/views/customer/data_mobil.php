<?= $this->session->flashdata('pesan') ?>
<section class="py-5">

    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <?php foreach ($mobil as $mb) : ?>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="<?= base_url('assets/upload/' . $mb->gambar) ?>" style="width: 220px; height: 130px" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h4 class="fw-bolder text-primary"><?= $mb->merk ?></h4>
                                <!-- Product price-->
                                <h5>Rp.<?= number_format($mb->harga, 0, ',', '.')  ?> / Hari</h5>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer ">
                            <?php
                            if ($mb->status == "0") {
                                echo "<span class='btn btn-danger' disable>Telah disewa</span>";
                            } else {
                                echo anchor('customer/rental/tambah_rental/' . $mb->id_mobil, '<button class="btn btn-success">Rental</button>');
                            }
                            ?>
                            <a class="btn btn-warning" href="<?= base_url('customer/Dashboard/detail_mobil/') . $mb->id_mobil ?>">Detail</a>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>