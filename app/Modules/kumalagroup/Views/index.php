<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Kumala Group</title>
    <link href="<?= base_url() ?>/assets/baru/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/baru/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link rel="apple-touch-icon" sizes="57x57" href="<?= base_url() ?>/assets/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?= base_url() ?>/assets/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= base_url() ?>/assets/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>/assets/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= base_url() ?>/assets/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= base_url() ?>/assets/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url() ?>/assets/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= base_url() ?>/assets/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>/assets/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?= base_url() ?>/assets/images/favicon/logo.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>/assets/images/favicon/logo.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= base_url() ?>/assets/images/logo.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>/assets/images/favicon/logo.png">
    <link rel="manifest" href="<?= base_url() ?>/assets/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?= base_url() ?>/assets/images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link href="<?= base_url() ?>/assets/baru/vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/animate.css">
    <link href="<?= base_url() ?>/assets/baru/css/freelancer.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url() ?>/assets/baru/owlcarousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/baru/owlcarousel/dist/assets/owl.theme.default.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="<?= base_url() ?>/assets/baru/datepicker.css" rel="stylesheet">
    <script src="<?= base_url() ?>/assets/baru/bootstrap-datepicker.js"></script>
    <script src="<?= base_url() ?>/assets/baru/owlcarousel/dist/owl.carousel.min.js"></script>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WSN4ZX4');
    </script>
    <!-- End Google Tag Manager -->
</head>
<style>
    #mainNav a {
        font-size: 10pt;
    }

    /* tambahan */
    #top-search {
        float: left;
        margin: -13px 0 0 15px;
    }

    #top-search a {
        text-decoration: none;
    }

    #top-search .lang-button span {
        display: block;
        float: left;
        width: 30px;
        text-align: center;
        color: #FA0F0c;
        height: 28px;
    }

    #top-search .lang-button span {
        height: 30px !important;
        line-height: 30px !important;
        border: 1px solid #FA0F0c;
        margin-top: 15px;
        display: block;
    }

    #top-search .lang-button span.active {
        background: #FA0F0c;
        color: #fff;
    }

    #top-search .clear {
        clear: both;
    }

    .card_bods {
        border-left: 1px solid rgba(0, 0, 0, .125) !important;
        border-bottom: 1px solid rgba(0, 0, 0, .125) !important;
        border-right: 1px solid rgba(0, 0, 0, .125) !important;
        border-top: 5px solid #FA0F0c !important;
    }

    #berita .card {
        border-top: 1px solid rgba(0, 0, 0, .125) !important;
        border-bottom: 1px solid rgba(0, 0, 0, .125) !important;
        border-right: 1px solid rgba(0, 0, 0, .125) !important;
        border-left: 5px solid #FA0F0c !important;
    }

    .hovereffect {
        float: left;
        overflow: hidden;
        position: relative;
        text-align: center;
        cursor: default;
    }

    .hovereffect img {
        display: block;
        position: relative;
        -webkit-transition: all 0.4s ease-in;
        transition: all 0.4s ease-in;
    }

    .hovereffect:hover img {
        filter: url('data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg"><filter id="filter"><feColorMatrix type="matrix" color-interpolation-filters="sRGB" values="0.2126 0.7152 0.0722 0 0 0.2126 0.7152 0.0722 0 0 0.2126 0.7152 0.0722 0 0 0 0 0 1 0"/><feGaussianBlur stdDeviation="3"/></filter></svg>#filter');
        filter: grayscale(1) blur(3px);
        -webkit-filter: grayscale(1) blur(3px);
        -webkit-transform: scale(1.2);
        -ms-transform: scale(1.2);
        transform: scale(1.2);
    }

    header .masthead {
        padding-top: calc(3rem + 52px) !important;
        margin-top: 50px !important;
    }

    #partner img {
        height: 100px;
    }

    @media (min-width: 300px) {

        #partner img {
            height: 40px;
        }
    }

    @media (min-width: 576px) {

        #partner img {
            height: 60px;
        }
    }

    @media (min-width: 768px) {

        #partner img {
            height: 80px;
        }
    }

    @media (min-width: 992px) {
        #mainNav {
            padding-top: 0.8rem;
            padding-bottom: 0.8rem;
            -webkit-transition: padding-top 0.3s, padding-bottom 0.3s;
            transition: padding-top 0.3s, padding-bottom 0.3s;
        }

        #partner img {
            height: 100px;
        }
    }

    /* begin:: floating bottom */
    #toppp {
        position: fixed;
        width: 60px;
        height: 60px;
        bottom: 170px;
        right: 20px;
    }

    .float {
        position: fixed;
        width: 60px;
        height: 60px;
        bottom: 95px;
        right: 20px;
        background-color: #0C9;
        color: #FFF;
        border-radius: 50px;
        text-align: center;
        box-shadow: 2px 2px 3px #999;
        font-size: 30px;
        z-index: 20;
    }

    .my-float {
        margin-top: 15px;
    }

    .error {
        padding-top: 5px;
        color: red;
    }

    h2 {
        font-size: 25pt !important;
    }

    p {
        font-size: 11pt !important;
    }

    header .owl-dots {
        bottom: 0;
        position: absolute;
        padding-bottom: 20px;
        width: 100%;
    }

    /* end:: floating bottom */
</style>

<body id="page-top">
    <nav class="navbar navbar-expand-lg bg-secondary shadow fixed-top" id="mainNav" style="padding-top: 16px !important; padding-bottom: 16px !important;"> <a href="<?= base_url() ?>" class="mx-lg-2"><img src="<?= base_url() ?>/assets/baru/img/logo.png" alt="Logo" width="auto" height="50"></a> <button class="navbar-toggler navbar-toggler-right bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> Menu <i class="fas fa-bars"></i> </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-lg-2"> <a class="nav-link rounded js-scroll-trigger <?= ($index == 'index') ? 'active' : '' ?>" href="<?= ($index == 'index') ? '#home' : base_url() ?>"><strong>Beranda</strong></a> </li>
                <li class="nav-item mx-lg-2"> <a class="nav-link rounded js-scroll-trigger <?= ($index == 'tentang') ? 'active' : '' ?>" href="<?= ($index == 'index') ? '#about' : base_url('tentang') ?>"><strong>Tentang Kami</strong></a> </li><?php if ($index == 'index') : ?> <li class="nav-item mx-lg-2"> <a class="nav-link rounded js-scroll-trigger" href="#unitbisnis"><strong>Unit Bisnis</strong></a> </li><?php else : ?>
                    <li class="nav-item mx-lg-2 dropdown megamenu-li"> <a class="nav-link rounded js-scroll-trigger dropdown-toggle <?= ($index == 'unit_bisnis') ? 'active' : '' ?>" href="javascript:void(0)" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><strong>Unit Bisnis</strong></a>
                        <div class="dropdown-menu megamenu" aria-labelledby="dropdown01">
                            <div class="row">
                                <div class="col-sm-6 col-lg-3">
                                    <h4 class=""> <a href="<?= base_url() ?>/otomotif">OTOMOTIF</a></h4>
                                    <ul type="square">
                                        <li><a class="dropdown-item" href="https://mazda-makassar.com" target="_blank">Mazda</a></li>
                                        <li><a class="dropdown-item" href="https://honda-kmg.com/" target="_blank">Honda</a></li>
                                        <li><a class="dropdown-item" href="<?= base_url() ?>/otomotif/hino">Hino</a></li>
                                        <li><a class="dropdown-item" href="<?= base_url() ?>/otomotif/wuling">Wuling</a></li>
                                        <li><a class="dropdown-item" href="https://www.kumala.mercedes-benz.co.id/en/desktop/passenger-cars.html" target="_blank">Mercedes-Benz</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <h4 class=""> <a href="<?= base_url() ?>/property">PROPERTY</a></h4>
                                    <ul type="square">
                                        <li><a class="dropdown-item" href="<?= base_url() ?>/property/ruko">Ruko</a></li>
                                        <li><a class="dropdown-item" href="<?= base_url() ?>/property/perumahan">Perumahan</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <h4 class=""><a href="<?= base_url() ?>/trading">TRADING</a></h4>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <h4 class=""><a href="<?= base_url() ?>/mining">MINING</a></h4>
                                </div>
                            </div>
                        </div>
                    </li><?php endif ?> <li class="nav-item mx-lg-2"> <a class="nav-link rounded js-scroll-trigger <?= ($index == 'berita') ? 'active' : '' ?>" href="<?= ($index == 'index') ? '#berita' : base_url('berita') ?>"><strong>Berita</strong></a> </li>
                <li class="nav-item mx-lg-2"> <a class="nav-link rounded js-scroll-trigger <?= ($index == 'karir') ? 'active' : '' ?>" href="<?= base_url('karir') ?>"><strong>Karir</strong></a> </li>
                <li class="nav-item mx-lg-2"> <a class="nav-link rounded js-scroll-trigger <?= ($index == 'kontak') ? 'active' : '' ?>" href="<?= base_url('kontak') ?>"><strong>Kontak</strong></a> </li>
            </ul>

            <div id="top-search"> <a href="javascript:void(0)" class="lang-button"> <span class="active">ID</span> <span>EN</span> <i class="clear"></i> </a> </div>
        </div>
    </nav>
    <?= view("$content"); ?>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-5 mb-lg-0">
                    <h4 class="mb-4">KUMALA GROUP</h4>
                    <p class="lead mb-0" align="justify">Didirikan pada tahun 1983, Kumala Group adalah salah satu perusahaan bisnis terbesar di sisi timur Indonesia. Kumala Group membangun perusahaan yang kompetitif dengan mengembangkan kerjasama yang saling menguntungkan antara merek-merek terkemuka nasional dan internasional di berbagai bidang.</p>
                </div>
                <div class="col-md-4 mb-5 mb-lg-0">
                    <h4 class="mb-4">IKUTI KAMI</h4>
                    <p class="lead mb-0" align="left">Ayo Ikuti Sosial Media Kami</p>
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"> <a class="btn btn-outline-light btn-social text-center rounded-circle" target="_blank" href="https://www.facebook.com/kumalagroup1/"> <i class="fab fa-fw fa-facebook-f"></i> </a> </li>
                        <li class="list-inline-item"> <a class="btn btn-outline-light btn-social text-center rounded-circle" target="_blank" href="https://www.instagram.com/kumalagroup/"> <i class="fab fa-fw fa-instagram"></i> </a> </li>
                        <li class="list-inline-item"> <a class="btn btn-outline-light btn-social text-center rounded-circle" target="_blank" href="https://www.youtube.com/channel/UC7R09sGLSsz-Ky1nQs1Qbiw"> <i class="fab fa-fw fa-youtube"></i> </a> </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4 class="mb-4">KIRIM PESAN</h4>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="control-group">
                            <div class="form-group"> <input type="nama" class="form-control" id="nama" placeholder="Masukkan nama Anda"> </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group"> <input type="email" class="form-control" id="email" placeholder="Masukkan Email Anda"> </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group"> <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div><br>
                        <div id="success"></div>
                        <div class="form-group"> <button type="submit" class="btn btn-xl btn-outline-light" id="sendMessageButton">Kirim</button> </div>
                    </form>
                </div>
            </div>
        </div>
    </footer>
    <div class="scroll-to-top d-lg-none" id="toppp"> <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"> <i class="fa fa-chevron-up"></i> </a> </div><a href="https://api.whatsapp.com/send?phone=62081212100700" class="float" target="_blank"> <i class="fab fa-whatsapp my-float"></i> </a>
    <script src="<?= base_url() ?>/assets/baru/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>/assets/baru/vendor/bootstrap/js/bootstrap.js"></script>
    <script src="<?= base_url() ?>/assets/baru/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?= base_url() ?>/assets/baru/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url() ?>/assets/baru/js/jqBootstrapValidation.js"></script>
    <script src="<?= base_url() ?>/assets/baru/js/contact_me.js"></script>
    <script src="<?= base_url() ?>/assets/baru/js/freelancer.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
        function input_number(e) {
            if ($.inArray(e.which, [187, 107, 8, 37, 39, 46, 190]) != -1) return;
            else if ((e.which < 48 || e.which > 57) && (e.which < 96 || e.which > 105)) e.preventDefault();
        } /* Fungsi formatRupiah */
        function formatRupiah(angka) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);
            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }
            return rupiah;
        }
    </script>
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5ee1bcf84a7c6258179a5e68/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
</body>

</html>