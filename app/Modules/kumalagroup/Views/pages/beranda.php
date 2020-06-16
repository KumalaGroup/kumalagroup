<!-- Header -->
<header class="masthead bg-primary text-white text-center" style="padding-top: calc(3rem + 25px) !important;" id="home">
    <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php foreach ($slider as $i => $v) : ?>
                    <li data-target="#carouselExampleCaptions" class="<?= ($i == 0) ? "active" : "" ?>" data-slide-to="<?= $i++ ?>"></li>
                <?php endforeach ?>
            </ol>
            <div class="carousel-inner">
                <?php foreach ($slider as $i => $v) : ?>
                    <div class="carousel-item <?= ($i == 0) ? "active" : "" ?>">
                        <a href="<?= $v->aksi ?>" target="_blank">
                            <img src="<?= "$base_img/slider/$v->gambar" ?>" class="d-block w-100" alt="..." style="background-size: cover !important;">
                            <div class="carousel-caption d-none d-md-block text-left">
                                <h2><?= $v->judul ?></h2>
                                <p><?= $v->deskripsi ?></p>
                            </div>
                        </a>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>

    <!--</div>-->
</header>

<!-- About Section -->
<section class="bg-primary text-white mb-0" id="about">
    <div class="container" style="padding-top:10%; padding-bottom:10%;">
        <h2 class="text-center text-white animated zoomIn delay-1s">Tentang Kami</h2>
        <!-- <hr class="star-light mb-5"> -->
        <br> <br>
        <div class="row">
            <div class="col-lg-12 ml-auto">
                <p class="lead animated zoomIn delay-1s" align="justify"><b>Kumala Group </b> didirikan pada tahun 1983. Saat ini Kumala Group semakin bertumbuh dan merupakan salah satu perusahaan bisnis terbesar di bagian tengah hingga ke timur Indonesia. Kumala Group membangun perusahaan yang kompetitif dengan mengembangkan kerjasama yang saling menguntungkan antara merek-merek terkemuka nasional dan internasional di berbagai bidang. <br>
                    <br> Mengusung tagline <i>“Your Best Partner” </i>Kumala Group berkomitmen tak pernah berhenti menawarkan beragam solusi yang menjawab kebutuhan pelanggan dari berbagai kalangan. Kumala Group akan terus berupaya menjaga kepercayaan pelanggan dan melangkah bersama di masa depan.</p>
            </div>
        </div>
        <div class="text-center mt-4 animated zoomIn delay-1s">
            <a class="btn btn-xl btn-outline-light" href="<?= base_url() ?>/tentang">
                Selengkapnya
            </a>
        </div>
    </div>
</section>

<!-- unitbisnis Grid Section -->
<section class="portfolio" id="unitbisnis">
    <div class="container">
        <br>
        <h2 class="text-center text-secondary mb-0 animated fadeIn delay-3s">Unit Bisnis</h2>

        <br><br>

        <div class="row">
            <div class="col-md-3  shadow-lg p-1 mb-1 bg-white rounded animated fadeInLeft delay-3s">
                <div class="card hovereffect">
                    <a href="<?= base_url() ?>/otomotif" style="margin-top:0 "><img src="<?= base_url() ?>/assets/baru/img/10.jpg" class="card-img-top" alt="..."></a>
                    <div class="card-body text-center" style="background-color: #FA0F0c;">
                        <a href="<?= base_url() ?>/otomotif" style="color: #fff !important;">Selengkapnya</a>
                    </div>

                    <div class="overlay">
                        <h2>OTOMOTIF</h2>
                        <a class="info" style="margin-top: 120%;" href="<?= base_url() ?>/otomotif">Selengkapnya</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3  shadow-lg p-1 mb-1 bg-white rounded animated fadeInLeft delay-3s">
                <div class="card hovereffect">
                    <a href="<?= base_url() ?>/property" style="margin-top:0 "><img src="<?= base_url() ?>/assets/baru/img/9.jpg" class="card-img-top" alt="..."></a>
                    <div class="card-body text-center" style="background-color: #FA0F0c;">
                        <a href="<?= base_url() ?>/property" style="color: #fff !important;">Selengkapnya</a>
                    </div>

                    <div class="overlay">
                        <h2>PROPERTI</h2>
                        <a class="info" style="margin-top: 120%;" href="<?= base_url() ?>/property">Selengkapnya</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 shadow-lg p-1 mb-1 bg-white rounded animated fadeInRight delay-3s">
                <div class="card hovereffect">
                    <a href="<?= base_url() ?>/trading" style="margin-top:0 "><img src="<?= base_url() ?>/assets/baru/img/7.jpg" class="card-img-top" alt="..."></a>
                    <div class="card-body text-center" style="background-color: #FA0F0c;">
                        <a href="<?= base_url() ?>/trading" style="color: #fff !important;">Selengkapnya</a>
                    </div>

                    <div class="overlay">
                        <h2>TRADING</h2>
                        <a class="info" style="margin-top: 120%;" href="<?= base_url() ?>/trading">Selengkapnya</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 shadow-lg p-1 mb-1 bg-white rounded animated fadeInRight delay-3s">
                <div class="card hovereffect">
                    <a href="<?= base_url() ?>/mining" style="margin-top:0 "><img src="<?= base_url() ?>/assets/baru/img/8.jpg" class="card-img-top" alt="..."></a>
                    <div class="card-body text-center" style="background-color: #FA0F0c;">
                        <a href="<?= base_url() ?>/mining" style="color: #fff !important;">Selengkapnya</a>
                    </div>

                    <div class="overlay">
                        <h2>MINING</h2>
                        <a class="info" style="margin-top: 120%;" href="<?= base_url() ?>/mining">Selengkapnya</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<div id="berita"></div>

<!-- berita dan promo Section -->
<section class="mb-0" style="background-color: #f5f5f5; padding-top:100px;">
    <div class="container">
        <h2 class="text-center animated zoomIn delay-4s">Berita & Promo</h2>
        <br><br>
        <?php
        foreach ($berita as $v) :
            $bulan = array(1 => "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
            $date = new DateTime($berita->updated_at);
            $date = $date->format('d') . " " . $bulan[$date->format('n')] . " " . $date->format('Y') ?>
            <div class="row animated zoomInLeft delay-4s">
                <div class="col-md-12">
                    <div class="card ">
                        <!-- <h5 class="card-header">Featured</h5> -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="card-text"><b><?= ucwords($v->type) ?> </b>| <?= $date ?></p>
                                    <a href="<?= base_url("/berita/detail/" . base64_encode($v->id)) ?>">
                                        <h5 class="card-title"><?= $v->judul ?></h5>
                                    </a>
                                    <p class=" card-text"><?= substr(strip_tags($v->deskripsi), 0, 200) ?>...</p>
                                    <a href="<?= base_url("/berita/detail/" . base64_encode($v->id)) ?>" class="primary">Selengkapnya</a>
                                </div>
                                <div class="col-md-6 text-center">
                                    <a href="<?= base_url("/berita/detail/" . base64_encode($v->id)) ?>"><img class="img-fluid" src="<?= "$base_img/berita/$v->gambar" ?>" alt="" width="400" height="100"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br>
        <?php endforeach ?>
        <br>

        <div class="row">
            <div class="col-md-12 text-center">
                <a href="<?= base_url() ?>/berita" class="btn btn-xl btn-outline-danger" style="border-color:#FA0F0c;font-weight: 500;"> Selengkapnya </a>
            </div>
        </div>

    </div>
</section>

<!-- karir Section -->
<section class="bg-third text-white mb-0" id="karir">
    <div class="container animated zoomIn delay-1s ">

        <br />
        <!--<h4 class="text-center text-white">Ayo Mulai Karir Anda bersama Kami</h4>-->
        <div class="text-center mt-4">
            <h2 class="text-center text-white">Karir</h2> <br>
            <a class="btn btn-xl btn-outline-light" href="<?= base_url() ?>/karir">
                Selengkapnya
            </a>
        </div>
    </div>
</section>

<!-- subscribe Section -->
<section class="bg-fourth text-white mb-0 animated zoomInUp delay-6s" id="subscribe">
    <div class="container ">
        <div class="row">
            <div class="col-md-4">
                <h4 class="text-white">Dapatkan Informasi Terkini</h4>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <!-- <label for="exampleFormControlInput1">Email address</label> -->
                    <input type="email" class="form-control" id="email" placeholder="Masukkan Email Anda">
                </div>
            </div>
            <div class="col-md-2">
                <button class="btn btn-xl btn-outline-light">
                    Subscribe
                </button>
            </div>
        </div>

        <!-- <div class="text-center mt-4">
          
        </div> -->
    </div>
</section>

<!-- Contact Section -->
<section class="mb-0" id="partner">
    <div class="container text-center animated zoomIn delay-7s">
        <h2 class="text-center text-secondary mb-0">Partner</h2>
        <br>

        <div class="row">
            <?php foreach ($partner as $v) : ?>
                <div class="col-md-3 text-center animated zoomIn delay-7s">

                    <img src="<?= "$base_img/partner/$v->gambar" ?>" alt="partner" width="250px !important" height="150px !important">
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>