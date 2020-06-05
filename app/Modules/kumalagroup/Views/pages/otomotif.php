<?php if ($mod == "list") : ?>
    <style>
        #listotomotifmas {
            background-image: url('<?= "$base_img/head/$head->foto" ?>');
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
        }

        #mainNav a {
            font-size: 11pt;
        }
    </style>
    <section class="bg-primary text-white mb-0" id="listotomotifmas">
        <div class="container">
            <br> <br> <br> <br>
            <!-- <h1 class="text-center text-white">MAZDA</h1>
             -->
            <p class="text-center text-white" style="font-size: 40pt;margin-top: 50px"> <b><?= strtoupper($head->jenis) ?></b></p>

            <!-- <hr class="star-light mb-5"> -->
            <br> <br>
        </div>
        </div>
    </section>
    <!-- unitbisnis Grid Section -->
    <section class="portfolio" id="unitbisnis">
        <div id="dealer" class="container">
            <div class="row text-center mb-5">
                <div class="col-8 offset-2 ">
                    <button class="btn btn-l btn-outline-primary text-center" data-toggle="modal" data-target=".bs-example-modal-lg">Cek Dealer </button>
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-body">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel">Pilih Lokasi Dealer di kota anda: </h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <ul id="myTab" class="nav nav-tabs boot-tabs">
                                            <!-- <li class="nav-item"><a class="nav-link active" href="#home" data-toggle="tab">Pilih Lokasi Dealer</a></li> -->
                                            <!-- <li class="nav-item"><a class="nav-link" href="#profile" data-toggle="tab">Profile</a></li> -->
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" id="myTabDrop1" data-toggle="dropdown">Pilih Kota anda</a>
                                                <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
                                                    <a class="dropdown-item dealer" onclick="load_dealer('Makassar');" href="#makassar" tabindex="-1" data-toggle="tab">Makassar</a>
                                                    <a class="dropdown-item dealer" onclick="load_dealer('Gorontalo');" href="#makassar" tabindex="-1" data-toggle="tab">Gorontalo</a>
                                                    <a class="dropdown-item dealer" onclick="load_dealer('Ternate');" href="#makassar" tabindex="-1" data-toggle="tab">Ternate</a>
                                                    <a class="dropdown-item dealer" onclick="load_dealer('Mamuju');" href="#makassar" tabindex="-1" data-toggle="tab">Mamuju</a>
                                                    <a class="dropdown-item dealer" onclick="load_dealer('Palu');" href="#makassar" tabindex="-1" data-toggle="tab">Palu</a>
                                                    <a class="dropdown-item dealer" onclick="load_dealer('Pare-pare');" href="#makassar" tabindex="-1" data-toggle="tab">Pare-pare</a>
                                                    <a class="dropdown-item dealer" onclick="load_dealer('Manado');" href="#makassar" tabindex="-1" data-toggle="tab">Manado</a>
                                                    <a class="dropdown-item dealer" onclick="load_dealer('Kendari');" href="#makassar" tabindex="-1" data-toggle="tab">Kendari</a>
                                                    <a class="dropdown-item dealer" onclick="load_dealer('Kolaka');" href="#makassar" tabindex="-1" data-toggle="tab">Kolaka</a>
                                                    <a class="dropdown-item dealer" onclick="load_dealer('Bali');" href="#makassar" tabindex="-1" data-toggle="tab">Bali</a>
                                                    <a class="dropdown-item dealer" onclick="load_dealer('Tomohon');" href="#makassar" tabindex="-1" data-toggle="tab">Tomohon</a>
                                                    <a class="dropdown-item dealer" onclick="load_dealer('Palopo');" href="#makassar" tabindex="-1" data-toggle="tab">Palopo</a>
                                                    <a class="dropdown-item dealer" onclick="load_dealer('Bone');" href="#makassar" tabindex="-1" data-toggle="tab">Bone</a>
                                                </ul>
                                            </li>
                                        </ul>
                                        <div id="myTabContent" class="tab-content">
                                            <!-- <div class="tab-pane fade show active" id="home">
                                  <h4>Pilih Lokasi Dealer dikota anda</h4>
                                </div>
                                -->
                                            <div class="tab-pane fade" id="makassar">
                                                <h4 style="margin-bottom:15px;">Dealer Terdekat: </h4>
                                                <div class="row justify-content-center" id="load_dealer"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <?php foreach ($otomotif as $i => $v) : ?>
                    <div class="col-md-4 shadow p-3 mb-5 bg-white">
                        <h4><?= $v->model ?></h4>
                        <img src="<?= "$base_img/otomotif/$v->gambar" ?>" width="350px" height="200px" alt="">
                        <br>
                        <h6 class="text-center" style="margin-top:10px;">Mulai Dari Rp. <?= number_format($v->harga, 0, '', '.') ?></h6>
                        <br>
                        <a class="btn btn-l btn-outline-primary text-center" href="<?= base_url("/otomotif/$head->jenis/detail/$v->id") ?>">
                            Explore
                        </a>
                    </div>
                <?php endforeach ?>
            </div>
            <div class="row">
                <div class="col-12">
                    <nav aria-label="Page-link navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" <?= ($page != 1) ? 'href="' . base_url() . '/otomotif/' . $head->jenis . '/page/' . ($page - 1) . '"' : '' ?>>‹</a>
                            </li>
                            <?php for ($i = 1; $i <= $pages; $i++) : ?>
                                <li class="page-item <?= ($i == $page) ? 'active' : '' ?>"><a class="page-link" <?= ($i != $page) ? 'href="' . base_url() . '/otomotif/' . $head->jenis . '/page/' . $i . '"' : '' ?>><?= $i ?></a></li>
                            <?php endfor ?>
                            <li class="page-item">
                                <a class="page-link" <?= ($page != $pages) ? 'href="' . base_url() . '/otomotif/' . $head->jenis . '/page/' . ($page + 1) . '"' : '' ?>>›</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <script>
        function load_dealer(area) {
            $('#load_dealer').load("<?= base_url() ?>/dealer/<?= $head->jenis ?>/" + area);
        }
    </script>
<?php elseif ($mod == "detail") : ?>
    <!-- unitbisnis Grid Section -->
    <section class="portfolio" id="unitbisnis" style="margin-top:80px;">
        <!-- <div class="container mb-3">
        <div class="content-wrap">
            @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br />
            @endif
        </div>
    </div> -->

        <div class="container">
            <br>
            <div class="row">
                <div class="col-md-2 text-center shadow p-3 mb-5 bg-white">
                    <h6>Pilih Warna</h6>
                    <?php foreach ($warna as $v) :
                        if ($v) : ?>
                            <img class="side" onmouseover="mOver('<?= $base_img . '/otomotif/warna/' . $v->gambar ?>')" style="margin-top: 10px;" src="<?= "$base_img/otomotif/warna/$v->gambar" ?>" alt="" data-animate="fadeInRight" width="100px" height="50px"> </br>
                    <?php endif;
                    endforeach ?>
                </div>
                <div class="col-md-7 shadow p-3 mb-5 bg-white">
                    <img id="main-color" src="<?= "$base_img/otomotif/$otomotif->gambar" ?>" style="width: 100%;" alt="" data-animate="fadeInRight">
                </div>
                <div class="col-md-3 shadow p-3 mb-5 bg-white">
                    <h4><?= $data->nama ?></h4>
                    <!-- Download Brosue -->
                    <a download href="<?= "$base_img/otomotif/brosur/$otomotif->brosur" ?>" class="btn btn-xl btn-outline-danger btn-block" style="border-color:#FA0F0c; font-weight: 500;">Download Brosur</a>
                    <br>
                    <!-- test drive -->
                    <button type="button" class="btn btn-xl btn-outline-danger btn-block" style="border-color:#FA0F0c;font-weight: 500;padding-left: 72px;padding-right: 58px;" data-toggle="modal" data-target="#testdr">Layanan</button>
                    <!-- Modal -->
                    <div class="modal fade" id="testdr" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel">Layanan</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <form id="form">
                                        <div class="form-group">
                                            <label for="layanan">Jenis Layanan: </label>
                                            <select id="layanan" name="layanan" class="form-control" required>
                                                <option value="" selected disabled>-- Silahkan Pilih Layanan --</option>
                                                <option value="Test Drive">Test Drive</option>
                                                <option value="Penawaran">Penawaran</option>
                                            </select>
                                        </div>
                                        <div class="form-group" style="display: none;">
                                            <label for="nama">Tanggal Test Drive: </label>
                                            <input type="text" name="tanggalTestDrive" class="form-control" id="tanggalTestDrive" placeholder="Masukkan tanggal Test Drive" autocomplete="off" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="nama">Nama: </label>
                                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap anda" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="telepon">No Telepon: </label>
                                            <input name="telepon" type="text" class="form-control" id="telepon" placeholder="No Telepon anda" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="dealer">Dealer: </label>
                                            <select id="idDealer" name="idDealer" class="form-control" required>
                                                <option value="" selected disabled>-- Silahkan Pilih Dealer --</option>
                                                <?php foreach ($dealer as $v) : ?>
                                                    <option value="<?= $v->id ?>"><?= ucwords($v->judul) ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="kota">Asal Kota: </label>
                                            <input name="asalKota" type="text" class="form-control" id="asalKota" placeholder="Asal Kota anda" required>
                                        </div>
                                        <input type="hidden" name="web" value="true">
                                        <button id="submit" class="btn btn-danger">Kirim</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
            </div>

            <br><br><br><br>
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center text-secondary mb-0">Detail</h2>
                    <br><br>

                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <h4>Tentang <?= $otomotif->model ?></h4>
                    <br>
                    <p><?= $otomotif->deskripsi ?></p>

                </div>
            </div>

            <br><br>
            <h4>Fitur <?= $otomotif->model ?></h4>
            <br>
            <?php foreach ($detail as $i => $v) :
                if ($v) :
                    if ($i % 2) : ?>
                        <div class="row">
                            <div class="col-md-8">
                                <br>
                                <h5><?= $v->nama_detail ?></h5>
                                <br>
                                <p><?= $v->deskripsi ?>.</p>
                            </div>
                            <div class="col-md-4">
                                <img src="<?= "$base_img/otomotif/detail/$v->gambar" ?>" width="350" height="250" alt="">
                            </div>
                        </div>
                    <?php else : ?>
                        <div class="row">
                            <div class="col-md-4">
                                <img src="<?= "$base_img/otomotif/detail/$v->gambar" ?>" width="350" height="250" alt="">
                            </div>
                            <div class="col-md-8">
                                <br>
                                <h5><?= $v->nama_detail  ?></h5>
                                <br>
                                <p><?= $v->deskripsi ?>.</p>
                            </div>
                        </div>
            <?php endif;
                endif;
            endforeach ?>
            <br>
        </div>
    </section>

    <script>
        $('#layanan').change(function() {
            if ($(this).val() == "Test Drive") $('#form').find('.form-group').eq(1).removeAttr('style');
            else $('#form').find('.form-group').eq(1).css('display', 'none');
        });
        $('#tanggalTestDrive').datepicker({
            'format': 'dd-mm-yyyy'
        });
        $('#submit').click(function(e) {
            e.preventDefault();
            var data = $('#form').serialize();
            if ($('#form').valid()) $.post("<?= base_url("otomotif") ?>", data, function(r) {
                swal("", "Data berhasil disimpan!", "success").then(function() {
                    location.reload();
                });
            });
        });

        function mOver(src) {
            var a = document.getElementById("main-color");
            a.src = src;
            a.css("transition-timing-function", "ease-in");
        }
    </script>
<?php else : ?>
    <section class="bg-primary text-white mb-0" id="otomotif">
        <div class="container">
            <br>
            <h2 class="text-center text-white" style="margin-top: 200px;">Tentang Bisnis Otomotif</h2>
            <!-- <hr class="star-light mb-5"> -->
            <br> <br>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 ml-auto">
                    <p class="lead" align="center">Kumala Group menjadi Partner Resmi Brand Otomotif ternama meliputi
                        Hino, Honda, Mazda, dan Wuling.
                        Saat ini Kumala Group memiliki 35 Jaringan Dealer
                        Resmi yang tersebar di Seluruh Indonesia Tengah dan Timur.
                    </p>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>

    <!-- unitbisnis Grid Section -->
    <section class="portfolio" id="Partnership">
        <div class="container-fluid text-center">
            <h4 class="text-center text-secondary mb-0">Our Partnership</h4>
            <br><br>
            <div class="row justify-content-center text-center">
                <?php foreach ($data as $v) : ?>
                    <div class="card flex-child text-center my-2 ml-2" style="width: 15rem;float:left !important;">
                        <img src="<?= "$base_img/head/$v->foto" ?>" height="150px" width="250px" class="card-img-top" alt="...">
                        <a class="card-body text-center btn btn-l btn btn-danger text-uppercase" style="background:#fa0f0c; border-color:#fa0f0c; " href="<?= (in_array($v->jenis, ["mazda", "mercedes benz", "honda"])) ? $v->url : base_url("$v->url") ?>">
                            <?= strtoupper($v->jenis) ?>
                        </a>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>
<?php endif ?>