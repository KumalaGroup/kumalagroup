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
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
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
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WSN4ZX4');
    </script>
</head>
<style>
    #mainNav a {
        font-size: 11pt;
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
        width: 100%;
        height: 100%;
        float: left;
        overflow: hidden;
        position: relative;
        text-align: center;
        cursor: default;
    }

    .hovereffect .overlay {
        width: 100%;
        height: 100%;
        position: absolute;
        overflow: hidden;
        top: 0;
        left: 0;
    }

    .hovereffect img {
        display: block;
        position: relative;
        height: 120%;
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

    .hovereffect h2 {
        text-transform: uppercase;
        text-align: center;
        position: relative;
        font-size: 17px;
        padding: 10px;
        background: #FA0F0c;
    }

    .hovereffect a.info {
        display: inline-block;
        text-decoration: none;
        padding: 9px 18px;
        border: 1px solid #FA0F0c;
        margin: 50px 0 0 0;
        background-color: transparent;
    }

    .hovereffect a.info:hover {
        box-shadow: 0 0 5px #FA0F0c;
    }

    .hovereffect a.info,
    .hovereffect h2 {
        -webkit-transform: scale(0.7);
        -ms-transform: scale(0.7);
        transform: scale(0.7);
        -webkit-transition: all 0.4s ease-in;
        transition: all 0.4s ease-in;
        opacity: 0;
        filter: alpha(opacity=0);
        color: #fff;
        text-transform: uppercase;
    }

    .hovereffect:hover a.info,
    .hovereffect:hover h2 {
        opacity: 1;
        filter: alpha(opacity=100);
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1);
    }

    #partner img {
        width: 250px;
        height: 150px;
    }

    header .masthead {
        padding-top: calc(3rem + 52px) !important;
        margin-top: 50px !important;
    }

    @media (min-width: 992px) {
        #mainNav {
            padding-top: 0.8rem;
            padding-bottom: 0.8rem;
            -webkit-transition: padding-top 0.3s, padding-bottom 0.3s;
            transition: padding-top 0.3s, padding-bottom 0.3s;
        }

        .carousel-item img {
            height: 90vh;
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
    }

    .my-float {
        margin-top: 15px;
    }

    .error {
        padding-top: 5px;
        color: red;
    }

    /* end:: floating bottom */
</style>

<body id="page-top">
    <nav class="navbar navbar-expand-lg bg-secondary shadow fixed-top" id="mainNav"> <a href="<?= base_url() ?>"><img src="<?= base_url() ?>/assets/baru/img/logo.png" style="margin-left: 15px;" alt="Logo" width="160px" height="60px"></a> <button class="navbar-toggler navbar-toggler-right bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> Menu <i class="fas fa-bars"></i> </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-0 mx-lg-1"> <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger <?= ($index == 'index') ? 'active' : '' ?>" href="<?= ($index == 'index') ? '#home' : base_url() ?>">Beranda</a> </li>
                <li class="nav-item mx-0 mx-lg-1"> <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger <?= ($index == 'tentang') ? 'active' : '' ?>" href="<?= ($index == 'index') ? '#about' : base_url('tentang') ?>">Tentang Kami</a> </li><?php if ($index == 'index') : ?> <li class="nav-item mx-0 mx-lg-1"> <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#unitbisnis">Unit Bisnis</a> </li><?php else : ?>
                    <li class="nav-item mx-0 mx-lg-1 dropdown megamenu-li"> <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger dropdown-toggle <?= ($index == 'unit_bisnis') ? 'active' : '' ?>" href="javascript:void(0)" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Unit Bisnis</a>
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
                                        <li><a class="dropdown-item" href="<?= base_url() ?>/property/retail">Retail</a></li>
                                        <li><a class="dropdown-item" href="<?= base_url() ?>/property/primewood">Primewood</a></li>
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
                    </li><?php endif ?> <li class="nav-item mx-0 mx-lg-1"> <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger <?= ($index == 'berita') ? 'active' : '' ?>" href="<?= ($index == 'index') ? '#berita' : base_url('berita') ?>">Berita</a> </li>
                <li class="nav-item mx-0 mx-lg-1"> <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger <?= ($index == 'karir') ? 'active' : '' ?>" href="<?= ($index == 'index') ? '#karir' : base_url('karir') ?>">Karir</a> </li>
                <li class="nav-item mx-0 mx-lg-1"> <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger <?= ($index == 'kontak') ? 'active' : '' ?>" href="<?= base_url() ?>/kontak">Kontak</a> </li>
            </ul>
            <!-- <ul class="nav navbar-nav float-xs-right">
                <?php if (session()->logged_in) : ?>
                    <li class="dropdown dropdown-user nav-item"><a href="javascript:void(0)" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link px-0 px-lg-3">
                            <span class="avatar avatar-online"><img src="<?= base_url("assets/baru/img/profile.png") ?>" alt="avatar" class="rounded-circle" height="40"></span></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="javascript:void(0)" class="dropdown-item" data-toggle="modal" data-target="#ghedjdhddd"><i class="fas fa-cart-arrow-down"></i> Histori Transaksi</a>
                            <div class="dropdown-divider"></div>
                            <a href="<?= base_url("logout") ?>" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</a>
                        </div>
                    </li>
                <?php else : ?>
                    <li class="nav-item mx-0 mx-lg-1"> <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="javascript:void(0)" data-toggle="modal" data-target="#login">Login</a> </li>
                <?php endif ?>
            </ul> -->
        </div>
    </nav>
    <?= view("$content"); ?>
    <!-- <?php if (!session()->logged_in) : ?>
        <div class="modal fade" id="login">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Login</h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                    </div>
                    <div class="modal-body">
                        <form id="loginjsfjs">
                            <div class="form-group"> <label for="namalengkap">Email: </label>
                                <input type="email" name="lemail" class="form-control" id="lemail" placeholder="Email anda" required> </div>
                            <div class="form-group"> <label for="alamat">Password:</label>
                                <input type="password" name="lpassword" class="form-control" id="lpassword" placeholder="Password anda" required> </div>
                            <button id="ererer" class="btn btn-primary">Login</button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <div>Belum punya akun? Silahkan daftar <a href="javascript:void(0)" data-dismiss="modal" data-toggle="modal" data-target="#jwkjekwe">disini!</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="jwkjekwe">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Registrasi</h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                    </div>
                    <div class="modal-body">
                        <form id="formfdkjfkdf">
                            <div class="form-group"> <label for="d_namalengkap">Nama Lengkap: </label>
                                <input type="text" name="dnama" class="form-control" id="dnama" placeholder="Nama Lengkap anda" required> </div>
                            <div class="form-group"> <label for="namalengkap">Email: </label>
                                <input type="email" name="demail" class="form-control" id="demail" placeholder="Email anda" required> </div>
                            <div class="form-group"> <label for="alamat">Password:</label>
                                <input type="password" name="dpassword" class="form-control" id="dpassword" placeholder="Password anda" required> </div>
                            <button id="fdfffff" class="btn btn-primary">Daftar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $('#ererer').click(function(e) {
                e.preventDefault();
                var data = $('#loginjsfjs').serialize();
                if ($('#loginjsfjs').valid()) {
                    $.post("<?= base_url("login") ?>", data, function(r) {
                        if (r == "Maaf, Username atau password yang Anda masukkan salah!")
                            swal("", r, "error");
                        else location.reload();
                    });
                }
            });
            $('#fdfffff').click(function(e) {
                e.preventDefault();
                var data = $('#formfdkjfkdf').serialize();
                if ($('#formfdkjfkdf').valid()) {
                    $(this).prop('disabled', true);
                    $(this).html("Mengirim data...");
                    $.post("<?= base_url("registrasi") ?>", data, function(r) {
                        swal("", r, (r == "Maaf, Email yang Anda masukkan telah terdaftar!" ? "warning" : "success")).then(function() {
                            location.reload();
                        });
                    });
                }
            });
        </script>
    <?php else : ?>
        <div class="modal fade" id="ghedjdhddd">
            <div class="modal-dialog">
                <div class="modal-body">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Histori Transaksi</h4> <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row px-2">
                                        <div class="col-6 m-0"><small>Kode Checkout</small></div>
                                        <div class="text-right col-6 m-0 text-danger"><small><i class="fas fa-times"></i> Batalkan</small></div>
                                    </div>
                                    <hr class="m-1">
                                    <div class="row">
                                        <div class="col-3">
                                            <img src=" <?= base_url("assets/baru/img/profile.png") ?>" alt="avatar" class="img-fluid pl-2" height="auto" width="auto">
                                        </div>
                                        <div class="col-9 pl-0">
                                            <div class="row pl-0 pr-2">
                                                <div class="col-12 m-0">Nama Model<br>
                                                    <small>Nama Tipe</small></div>
                                                <div class="col-12 text-right m-0"><small>Rp. 100.000.000,00</small></div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="m-1">
                                    <div class="row px-2">
                                        <div class="col-6 m-0 text-info"><small><i class="fas fa-spinner"></i> Menunggu Verifikasi</small></div>
                                        <div class="text-right col-6 m-0 text-danger"><small><i class="fas fa-times"></i> Batalkan</small></div>
                                    </div>
                                    <hr class="m-1">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif ?> -->
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
                        <li class="list-inline-item"> <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://www.facebook.com/kumalagroup"> <i class="fab fa-fw fa-facebook-f"></i> </a> </li>
                        <li class="list-inline-item"> <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://www.instagram.com/kumalagroup/"> <i class="fab fa-fw fa-instagram"></i> </a> </li>
                        <li class="list-inline-item"> <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://www.youtube.com/channel/UC7R09sGLSsz-Ky1nQs1Qbiw"> <i class="fab fa-fw fa-youtube"></i> </a> </li>
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
            if ($.inArray(e.which, [8, 37, 39, 46, 190]) != -1) return;
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