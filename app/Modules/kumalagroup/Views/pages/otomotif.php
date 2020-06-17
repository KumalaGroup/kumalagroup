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
            <div class="row">
                <?php foreach ($otomotif as $i => $v) : ?>
                    <div class="col-md-4 p-3 mb-5">
                        <h4 class="text-center"><?= $v->model ?></h4>
                        <img src="<?= "$base_img/otomotif/$v->gambar" ?>" width="100%" height="200" alt="" style="object-fit: cover;">
                        <br>
                        <h6 class="text-center" style="margin-top:10px;">Mulai Dari Rp. <?= number_format($v->harga, 0, '', '.') ?></h6>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <a class="btn btn-l btn-outline-primary mt-0 mb-1" href="<?= base_url("/otomotif/$head->jenis/detail/" . base64_encode($v->id)) ?>">
                                    Explore
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a class="btn btn-l btn-outline-primary mt-0 mb-1" onclick="$('#form_simulasi').trigger('reset');simulasi('<?= $v->model ?>','<?= number_format($v->harga, 0, '', '.') ?>');" data-toggle="modal" href="#simulasi">
                                    Simulasi Kredit
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
            <div class=" row">
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
    <div class="modal fade" id="simulasi" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-body">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="labelsumulasi"></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-4">
                                <form id="form_simulasi">
                                    <div class="form-group">
                                        <label>Harga OTR</label>
                                        <input type="text" class="form-control" onkeydown="return false" id="otr" name="otr" placeholder="Satuan dalam rupiah" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Uang Muka</label>
                                        <input type="text" class="form-control" onkeydown="input_number(event)" id="dp" name="dp" placeholder="Satuan dalam rupiah" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tenor</label>
                                        <input type="text" class="form-control" onkeyup="hitung_simulasi()" onkeydown="input_number(event)" id="tenor" name="tenor" placeholder="Satuan dalam tahun" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Bunga Pinjaman</label>
                                        <input type="text" class="form-control" onkeyup="hitung_simulasi()" onkeydown="input_number(event)" id="bunga" name="bunga" placeholder="Satuan dalam % / tahun" required>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-8">
                                <strong>Plafon pinjaman Anda</strong>
                                <table class="table table-sm">
                                    <tbody>
                                        <tr>
                                            <td width=250>Harga Mobil OTR</td>
                                            <td>:</td>
                                            <td align="right" id="table_otr"></td>
                                        </tr>
                                        <tr>
                                            <td width=250>Uang Muka (DP)</td>
                                            <td>:</td>
                                            <td align="right" id="table_dp"></td>
                                        </tr>
                                        <tr>
                                            <td width=250>Plafon Pinjaman</td>
                                            <td>:</td>
                                            <td align="right"><strong id="plafon"></strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <strong>Angsuran per bulan</strong>
                                <table class="table table-sm">
                                    <tbody>
                                        <tr>
                                            <td width=250>Angsuran Pokok</td>
                                            <td>:</td>
                                            <td align="right" id="a_pokok"></td>
                                        </tr>
                                        <tr>
                                            <td width=250>Angsuran Bunga</td>
                                            <td>:</td>
                                            <td align="right" id="a_bunga"></td>
                                        </tr>
                                        <tr>
                                            <td width=250>Total Angsuran</td>
                                            <td>:</td>
                                            <td align="right"><strong id="angsuran"></strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <strong>Pembayaran pertama kali</strong>
                                <table class="table table-sm">
                                    <tbody>
                                        <tr>
                                            <td width=250>Uang Muka (DP)</td>
                                            <td>:</td>
                                            <td align="right" id="tableDp"></td>
                                        </tr>
                                        <tr>
                                            <td width=250>Angsuran Pertama</td>
                                            <td>:</td>
                                            <td align="right" id="a_pertama"></td>
                                        </tr>
                                        <tr>
                                            <td width=250>Total Pembayaran Pertama</td>
                                            <td>:</td>
                                            <td align="right"><strong id="pembayaran"></strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p><strong>Note:*</strong> Syarat tiap bank bisa berbeda-beda Perhitungan ini sifatnya simulasi belaka. Untuk lebih jelasnya silakan hubungi pemberi kredit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#dp').keyup(function() {
            $(this).val(formatRupiah($(this).val()));
            $('#table_dp').html($(this).val() + ",00");
            $('#tableDp').html($(this).val() + ",00");
            hitung_simulasi();
        });

        function hitung_simulasi() {
            var data = $('#form_simulasi').serialize();
            if ($('#form_simulasi').valid()) $.post("<?= base_url("simulasi_kredit") ?>", data, function(r) {
                if (parseInt(r.plafon) < 1) swal("", "Uang muka melebihi harga otr!", "error").then(function() {
                    $('#dp').val("");
                    $('#table_dp').html("");
                    $('#tableDp').html("");
                    hitung_simulasi()
                });
                $('#plafon').html(r.plafon);
                $('#a_pokok').html(r.a_pokok);
                $('#a_bunga').html(r.a_bunga);
                $('#angsuran').html(r.angsuran);
                $('#a_pertama').html(r.angsuran);
                $('#pembayaran').html(r.pembayaran);
            }, "json");
            else {
                $('#plafon').html("");
                $('#a_pokok').html("");
                $('#a_bunga').html("");
                $('#angsuran').html("");
                $('#a_pertama').html("");
                $('#pembayaran').html("");
            }
        }

        function simulasi(data, harga) {
            $('#otr').val(harga)
            $('#table_otr').html(harga + ",00")
            $('#labelsumulasi').html("Simulasi Kredit " + data);
        }

        function load_dealer(area) {
            $.post("<?= base_url("dealer") ?>", {
                'brand': "<?= $head->jenis ?>",
                'area': area
            }, function(r) {
                $('#load_dealer').html(r);
            });
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
                <div class="col-md-2 text-center p-3 mb-5">
                    <h6>Pilih Warna</h6>
                    <?php foreach ($warna as $v) :
                        if ($v) : ?>
                            <img class="side mb-2" onmouseover="mOver('<?= $base_img . '/otomotif/warna/' . $v->gambar ?>')" width="100px" height="auto" class="img-fluid" src="<?= "$base_img/otomotif/warna/$v->gambar" ?>" alt="" data-animate="fadeInRight">
                    <?php endif;
                    endforeach ?>
                </div>
                <div class="col-md-7 p-3 mb-5">
                    <img id="main-color" src="<?= "$base_img/otomotif/$otomotif->gambar" ?>" width="100%" height="auto" class="img-fluid" alt="" data-animate="fadeInRight">
                </div>
                <div class="col-md-3 p-3 mb-5">
                    <h4><?= $otomotif->model ?></h4>
                    <!-- Download Brosue -->
                    <a download href="<?= "$base_img/otomotif/brosur/$otomotif->brosur" ?>" class="btn btn-xl btn-outline-danger btn-block" style="border-color:#FA0F0c; font-weight: 500;">Download Brosur</a>
                    <!-- test drive -->
                    <button type="button" class="btn btn-xl btn-outline-danger btn-block" style="border-color:#FA0F0c;font-weight: 500;" data-toggle="modal" data-target="#testdr">Layanan</button>
                    <!-- Modal -->
                    <!-- <button type="button" class="btn btn-xl btn-outline-danger btn-block" style="border-color:#FA0F0c;font-weight: 500;" data-toggle="modal" data-target="#komparasi">Bandingkan Mobil</button> -->

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
                                            <input name="telepon" type="text" class="form-control" onkeydown="input_number(event)" id="telepon" placeholder="No Telepon anda" required>
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
            <br><br>
            <div class="row">
                <div class="col-md-12">
                    <h4>Tentang <?= $otomotif->model ?></h4>
                    <br>
                    <p><?= $otomotif->deskripsi ?></p>

                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="offset-md-2 col-md-8">
                    <h2 class="text-center text-secondary mb-0">Video</h2>
                    <br><br>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="<?= str_replace("watch?v=", "embed/", $otomotif->video) ?>" allowfullscreen></iframe>
                    </div>
                    <br><br>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center text-secondary mb-0">Detail</h2>
                    <br><br>

                </div>
            </div>

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
    <div class="modal fade" id="komparasi" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-body">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Bandingkan dengan</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form id="form_ilj">
                                    <div class="form-group">
                                        <label for="brand">Brand: </label>
                                        <select id="brand" name="brand" class="form-control" required>
                                            <option value="" selected disabled>-- Silahkan Pilih Brand --</option>
                                            <?php foreach ($brand as $v) : ?>
                                                <option value="<?= $v->id ?>"><?= ucwords($v->jenis) ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="model">Model: </label>
                                        <select id="model" name="model" class="form-control" required>
                                            <option value="" selected disabled>-- Silahkan Pilih Model --</option>

                                        </select>
                                    </div>
                                    <input type="hidden" name="web" value="true">
                                    <button id="modelsdjd" class="btn btn-danger">Lihat Perbandingan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
            if ($('#form').valid()) {
                $('#submit').prop('disabled', true);
                $('#submit').html("Mengirim data...");
                $.post("<?= base_url("otomotif") ?>", data, function(r) {
                    swal("", "Data berhasil disimpan!", "success").then(function() {
                        location.reload();
                    });
                });
            }
        });
        $('#brand').change(function() {
            $.post("<?= base_url("model") ?>", {
                'brand': $(this).val()
            }, function(r) {
                $('#model').html(r);
            });
        });

        $('#modelsdjd').click(function(e) {
            e.preventDefault();
            var data = $('#form_ilj').serialize();
            if ($('#form_ilj').valid()) {
                $('#modelsdjd').prop('disabled', true);
                $('#modelsdjd').html("Loading data...");
                alert(data)
                // $.post("<?= base_url("otomotif") ?>", data, function(r) {
                //     swal("", "Data berhasil disimpan!", "success").then(function() {
                //         location.reload();
                //     });
                // });
            }
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
                        <a class="card-body text-center btn btn-l btn btn-danger text-uppercase" style="background:#fa0f0c; border-color:#fa0f0c; " href="<?= $v->url ?>" target="<?= in_array($v->jenis, ["honda", "mazda", "mercedes-benz"]) ? "_blank" : "" ?>">
                            <?= strtoupper($v->jenis) ?>
                        </a>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>
<?php endif ?>