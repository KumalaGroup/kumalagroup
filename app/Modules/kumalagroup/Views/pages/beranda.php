<header class="text-white text-center" style="padding-top: 82px" id="home">
    <div class="owl-carousel owl-theme">
        <?php foreach ($slider as $v) : ?>
            <div class="item">
                <a href="<?= $v->aksi ?>" target="_blank">
                    <img src="<?= base_url("assets/img_marketing/slider/$v->gambar") ?>" class="img-fluid" width="100%" alt="...">
                </a>
            </div>
        <?php endforeach ?>
    </div>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 5000,
            autoHeight: true,
            items: 1,
        })
    </script>
</header>
<section class="text-white" id="about">
    <div class="container" style="padding-top:5%; padding-bottom:5%;">
        <h2 class="text-center text-white animated zoomIn delay-1s">Tentang Kami</h2> <br><br>
        <div class="row">
            <div class="offset-md-1 col-md-10">
                <p class="animated zoomIn delay-1s" align="justify"><b>Kumala Group </b> didirikan pada tahun 1983. Saat ini Kumala Group semakin bertumbuh dan merupakan salah satu perusahaan bisnis terbesar di bagian tengah hingga ke timur Indonesia. Kumala Group membangun perusahaan yang kompetitif dengan mengembangkan kerjasama yang saling menguntungkan antara merek-merek terkemuka nasional dan internasional di berbagai bidang. <br><br>Mengusung tagline <i>“Your Best Partner” </i>Kumala Group berkomitmen tak pernah berhenti menawarkan beragam solusi yang menjawab kebutuhan pelanggan dari berbagai kalangan. Kumala Group akan terus berupaya menjaga kepercayaan pelanggan dan melangkah bersama di masa depan.</p>
            </div>
        </div>
        <div class="text-center mt-4 animated zoomIn delay-1s"> <a class="btn btn-xl btn-outline-light" href="<?= base_url() ?>/tentang"> Selengkapnya </a> </div>
    </div>
</section>
<section class="portfolio mb-0 pb-4" id="unitbisnis">
    <div class="container">
        <h2 class="text-center text-secondary mb-0 animated fadeIn delay-1s">Unit Bisnis</h2>
        <hr style="margin-left: 400px;margin-right: 400px;"> <br><br>
        <div class="row">
            <div class="col-lg-3 col-sm-6 mb-4 animated fadeIn delay-1s">
                <div class="card hovereffect">
                    <a href="<?= base_url("otomotif") ?>" class="m-0"><img src="<?= base_url() ?>/assets/baru/img/GLC-300.jpeg" class="card-img-top img" height="200" style="object-fit: cover;" alt="..."></a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-4 animated fadeIn delay-1s">
                <div class="card hovereffect">
                    <a href="<?= base_url("property") ?>" class="m-0"><img src="<?= base_url() ?>/assets/baru/img/property.jpeg" class="card-img-top img" height="200" style="object-fit: cover;" alt="..."></a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-4 animated fadeIn delay-1s">
                <div class="card hovereffect">
                    <a href="<?= base_url("trading") ?>" class="m-0"><img src="<?= base_url() ?>/assets/baru/img/7.jpg" class="card-img-top img" height="200" style="object-fit: cover;" alt="..."></a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-4 animated fadeIn delay-1s">
                <div class="card hovereffect">
                    <a href="<?= base_url("mining") ?>" class="m-0"><img src="<?= base_url() ?>/assets/baru/img/8.jpg" class="card-img-top img" height="200" style="object-fit: cover;" alt="..."></a>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <hr class="p-0">
</div>
<section class="p-2 m-0">
    <div class="container">
        <div class="owl-carousel owl-theme">
            <?php foreach ($promo as $v) : ?>
                <div class="item">
                    <?php $bulan = array(1 => "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
                    $date = new DateTime($v->created_at);
                    $date = $date->format('d') . " " . $bulan[$date->format('n')] . " " . $date->format('Y') ?>
                    <div class="animated zoomIn delay-1s">
                        <div class="card" style="border: 0;">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <a class="m-0" href="<?= base_url("/berita/detail/" . $v->id) ?>">
                                        <img src="
                                        <?= base_url(empty($v->thumb) ?
                                            "assets/img_marketing/berita/$v->gambar"
                                            : "assets/img_marketing/berita/thumb/$v->thumb") ?>" class="card-img-top" width="100%" alt="..."></a>
                                </div>
                                <div class="col-md-6 col-lg-8">
                                    <div class="card-body">
                                        <h5><a href="<?= base_url("/berita/detail/" . $v->id) ?>"><?= $v->judul ?></a></h5>
                                        <p class="card-text"><b><?= ucwords($v->type) ?> </b>| <?= $date ?></p>
                                        <p class="card-text"><?= substr(strip_tags($v->deskripsi), 0, 200) ?>...</p><a href="<?= base_url("/berita/detail/" . $v->id) ?>">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
        <script>
            $('.owl-carousel').owlCarousel({
                loop: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                autoHeight: true,
                items: 1,
                margin: 5,
            })
        </script>
    </div>
</section>
<div id="berita"></div>
<section class="mb-0" style="background-color: #f5f5f5;">
    <div class="container">
        <h2 class="text-center animated zoomIn delay-1s">Berita</h2>
        <hr style="margin-left: 400px;margin-right: 400px;"> <br><br>
        <div class="row">
            <?php foreach ($berita as $v) :
                $bulan = array(1 => "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
                $date = new DateTime($v->created_at);
                $date = $date->format('d') . " " . $bulan[$date->format('n')] . " " . $date->format('Y') ?>
                <div class="col-md-6 col-lg-4 mb-4 animated zoomIn delay-1s">
                    <div class="card">
                        <a class=" m-0" href="<?= base_url("/berita/detail/" . $v->id) ?>">
                            <img src="
                            <?= base_url(empty($v->thumb) ?
                                "assets/img_marketing/berita/$v->gambar"
                                : "assets/img_marketing/berita/thumb/$v->thumb") ?>" class="card-img-top" width="100%" alt="..."></a>
                        <div class="card-body">
                            <h5><a href="<?= base_url("/berita/detail/" . $v->id) ?>"><?= $v->judul ?></a></h5>
                            <p class="card-text"><b><?= ucwords($v->type) ?> </b>| <?= $date ?></p>
                            <p class="card-text"><?= substr(strip_tags($v->deskripsi), 0, 200) ?>...</p><a href="<?= base_url("/berita/detail/" . $v->id) ?>">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
        <div class="row">
            <div class="col-md-12 text-center"> <a href="<?= base_url() ?>/berita" class="btn btn-xl btn-outline-danger" style="border-color:#FA0F0c;font-weight: 500;"> Selengkapnya </a> </div>
        </div>
    </div>
</section>
<section class="mb-0" id="partner">
    <div class="container text-center animated zoomIn delay-1s">
        <h2 class="text-center text-secondary mb-0">Partner</h2> <br><br>
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel owl-theme">
                    <?php foreach ($partner as $v) : ?>
                        <div class="item">
                            <img src="<?= base_url("assets/img_marketing/partner/$v->gambar") ?>" alt="partner" width="auto" height="100" style="object-fit: contain;">
                        </div>
                    <?php endforeach ?>
                </div>
                <script>
                    $('.owl-carousel').owlCarousel({
                        loop: true,
                        autoplay: true,
                        autoplayTimeout: 2000,
                        autoplayHoverPause: true,
                        responsiveClass: true,
                        navs: false,
                        dots: false,
                        responsive: {

                            576: {
                                items: 3,
                                margin: 60
                            },
                            768: {
                                items: 4,
                                margin: 70
                            },
                            992: {
                                items: 5,
                                margin: 80
                            },
                            1200: {
                                items: 6,
                                margin: 90
                            }
                        }
                    })
                </script>
            </div>
        </div>
    </div>
</section>