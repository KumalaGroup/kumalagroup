<?php if ($mod == "list") : ?>
    <style>
        .portfolio {
            margin-top: 125px !important;
        }
    </style>
    <!-- beritadanpromo Grid Section -->
    <section class="portfolio" id="unitbisnis">
        <div class="container">
            <!-- <h2 class="text-center text-uppercase text-secondary mb-0">Berita Dan Promo</h2>
        <br><br> -->
            <div class="row">
                <!-- <div class="col-md-2"></div> -->
                <div class="col-md-4">
                    <img src="<?= "$base_img/mining/$data->gambar" ?>" alt="" width="350" height="250">
                </div>

                <div class="col-md-8">

                    <h4><?= $data->nama ?></h4>

                    <h6>Info : </h6>
                    <p><?= $data->deskripsi ?></p>


                    <!-- Button trigger modal -->
                    <a href="<?= base_url() ?>/kontak" class="btn btn-l btn-outline-primary">
                        Hubungi Kami
                    </a>

                </div>
            </div>

        </div>
    </section>
<?php else : ?>
    <section class="bg-primary text-white mb-0" id="mining">
        <div class="container">
            <h2 class="text-white text-center" style="margin-top: 300px;">Tentang Bisnis Mining</h2>
            <!-- <hr class="star-light mb-5"> -->
            <br>
            <div class="row text-center">
                <div class="col-lg-12 ml-auto">
                    <p class="lead">Kumala Group</p>
                </div>
            </div>
        </div>
    </section>

    <!-- mining Grid Section -->
    <section class="portfolio" id="unitbisnis">
        <div class="container">
            <h4 class="text-center text-secondary mb-0">Contractor & Heavy Machineries Rent</h4>
            <br><br>
            <div class="row">
                <?php foreach ($data as $v) : ?>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="<?= "$base_img/mining/$v->gambar" ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h4><?= $v->nama ?></h4>
                                <p style="font-size: 11pt;"><?= $v->type ?></p>
                            </div>
                            <div class="card-body text-center" style="background-color: #FA0F0c;">
                                <a href="<?= base_url("/mining/detail/$v->id") ?>" style="color: #fff !important;">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>

            </div>
            <!-- <div class="row">
                <div class="col-md-6 offset-3">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            {{$data->links()}}
                        </ul>
                    </nav>
                </div>
            </div> -->
        </div>
    </section>
<?php endif ?>