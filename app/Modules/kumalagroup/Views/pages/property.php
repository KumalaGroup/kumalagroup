<?php if ($mod == "list") : ?>
    <section class="bg-primary text-white mb-0" id="propertyretail">
        <div class="container">
            <br><br><br><br>
            <!--<p class="text-center text-white" style="font-size: 40pt;margin-top: 150px"> <b>Bisnis Property Retail</b></p>-->
            <h2 class="text-white text-center" style="margin-top: 300px;">Bisnis Property</h2>
        </div>
    </section>

    <!-- property Grid Section -->
    <section id="unitbisnis">
        <div class="container">
            <div class="row text-center">
                <?php foreach ($data as $v) : ?>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="<?= "$base_img/property/$v->gambar" ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h4><?= $v->nama ?></h4>
                                <p style="font-size: 11pt;"><?= ucwords($v->type) ?></p>
                            </div>
                            <div class="card-body text-center" style="background-color: #FA0F0c;">
                                <a href="<?= base_url("/property/$v->type/detail/$v->id") ?>" style="color: #fff !important;">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>
<?php elseif ($mod == "detail") : ?>
    <style>
        #detailp {
            background-image: url("<?= "$base_img/property/$data->gambar" ?>");
            background-repeat: no-repeat;
            background-size: cover;
            height: 80vh;
            /* filter: contrast(0.5) brightness(1) grayscale(0.5); */
        }
    </style>
    <section class="bg-primary text-white mb-0" id="detailp">
        <div class="container">
            <br><br><br><br>
            <!-- <h2 class="text-center text-white">Bisnis Property</h2> -->
            <!-- <hr class="star-light mb-5"> -->

            <!-- <div class="row">
                <div class="col-lg-12 ml-auto">
                    <p class="text-center" style="font-size: 16pt;"><i>Retail</i></p>
                </div>
            </div> -->
        </div>
    </section>

    <!-- property Grid Section -->
    <section class="portfolio" id="unitbisnis">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">Informasi</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <h4>Alamat</h4>
                    <p><?= $data->alamat ?></p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <h4>Telepon</h4>
                    <p><?= $data->telp ?></p>

                    <!-- Button trigger modal -->
                    <a href="<?= base_url() ?>/kontak" class="btn btn-l btn-outline-primary">
                        Kontak
                    </a>
                    <hr>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <h4 style="float:left; padding-right:10px;">Fitur Retail 1</h4>
                    <button type="button" class="btn btn-outline-secondary btn-sm"><?= $data->gap ?></button>
                </div>
            </div>
            <br>
            <?php $gambar = [$data->fg, $data->fg2, $data->fg3, $data->fg4, $data->fg5, $data->fg6, $data->fg7, $data->fg8, $data->fg9, $data->fg10, $data->fg11, $data->fg12, $data->fg13, $data->fg14, $data->fg15];
            $title = [$data->ft, $data->ft2, $data->ft3, $data->ft4, $data->ft5, $data->ft6, $data->ft7, $data->ft8, $data->ft9, $data->ft10, $data->ft11, $data->ft12, $data->ft13, $data->ft14, $data->ft15];
            $deskripsi = [$data->fd, $data->fd2, $data->fd3, $data->fd4, $data->fd5, $data->fd6, $data->fd7, $data->fd8, $data->fd9, $data->fd10, $data->fd11, $data->fd12, $data->fd13, $data->fd14, $data->fd15];
            foreach ($gambar as $i => $v) :
                if ($v) :
                    if ($i % 2) : ?>
                        <div class="row">
                            <div class="col-md-8">
                                <br>
                                <h5><?= $title[$i] ?></h5>
                                <br>
                                <p><?= $deskripsi[$i] ?>.</p>
                            </div>
                            <div class="col-md-4">

                                <img src="<?= "$base_img/property/$v" ?>" width="350" height="250" alt="">
                            </div>
                        </div>
                    <?php else : ?>
                        <div class="row">
                            <div class="col-md-4">
                                <img src="<?= "$base_img/property/$v" ?>" width="350" height="250" alt="">
                            </div>
                            <div class="col-md-8">
                                <br>
                                <h5><?= $title[$i] ?></h5>
                                <br>
                                <p><?= $deskripsi[$i] ?>.</p>
                            </div>
                        </div>
            <?php endif;
                endif;
            endforeach ?>
        </div>
    </section>
<?php else : ?>
    <section class="portfolio" style="margin-top: 80px !important; ">

        <div class="container">
            <h2 class="text-center text-secondary mb-0">Unit Bisnis Property</h2>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <a href="<?= base_url() ?>/property/retail" class="flex-item sidebar">
                        <img src="<?= base_url() ?>/assets/baru/img/retail.jpg" style="max-width: 100%;width:600px; height:500px; border-radius: 5px;" alt="">
                    </a>
                </div>
                <br>
                <div class="col-md-6">
                    <a href="<?= base_url() ?>/property/primewood" class="flex-item sidebar">
                        <img src="<?= base_url() ?>/assets/baru/img/primewood.jpg" style="max-width: 100%;width:600px; height:500px; border-radius: 5px;" alt="">
                    </a>
                </div>
            </div>
        </div>

    </section>
<?php endif ?>