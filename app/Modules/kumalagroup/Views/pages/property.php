<?php if ($mod == "list") : ?>
    <section class="portfolio" id="beritadanpromo" style="margin-top:100px !important;">
        <div class="container">
            <h2 class="text-center text-secondary mb-0">Property (<?= ucwords($jenis) ?>)</h2>
            <hr style="margin-left: 400px;margin-right: 400px;"> <br><br>
            <div class="row">
                <?php if (!empty($data)) {
                    foreach ($data as $i => $v) { ?>
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="card">
                                <a class="m-0" href="<?= base_url("/property/$v->jenis/detail/" . $v->id) ?>">
                                    <img src="<?= base_url("assets/img_marketing/property/$v->gambar") ?>" width="100%" height="200" alt="" style="object-fit: cover;"></a>
                                <div class="card-body text-center">
                                    <h5><a href="<?= base_url("/property/$v->jenis/detail/" . $v->id) ?>"><?= $v->nama ?></a></h5>
                                    <?php if ($v->harga_sewa != 0) { ?>
                                        <p class="m-0">Harga Sewa Mulai dari</p>
                                        <p class="card-text"><b>Rp. <?= number_format($v->harga_sewa, 0, '', '.') ?>/Tahun</b></p>
                                    <?php } ?>
                                    <?php if ($v->harga_jual != 0) { ?>
                                        <p class="m-0">Harga Jual Mulai dari</p>
                                        <p class="card-text"><b>Rp. <?= number_format($v->harga_jual, 0, '', '.') ?></b></p>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    <?php }
                } else { ?>

                <?php } ?>
            </div>
        </div>
    </section>
<?php elseif ($mod == "detail") : ?>
    <section class="portfolio" id="unitbisnis" style="margin-top:82px;">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 mb-3">
                    <div class="col-12 mb-2">
                        <img id="main-color" src="<?= base_url("assets/img_marketing/property/galeri/" . $galeri[0]->img) ?>" width="100%" height="auto" alt="" data-animate="fadeInRight" class="img-fluid">
                    </div>
                    <br>
                    <div class="col-12">
                        <div class="owl-carousel owl-theme">
                            <?php foreach ($galeri as $v) : if ($v) : ?>
                                    <div class="item">
                                        <img onclick="mOver('<?= base_url('assets/img_marketing/property/galeri/' . $v->img) ?>')" width="100px" height="70" style="object-fit: cover;" src="<?= base_url("assets/img_marketing/property/galeri/$v->img") ?>" alt="" data-animate="fadeInRight">
                                    </div>
                            <?php endif;
                            endforeach ?>
                        </div>
                        <script>
                            $('.owl-carousel').owlCarousel({
                                // loop: true,
                                margin: 10,
                                responsiveClass: true,
                                responsive: {
                                    0: {
                                        items: 3,
                                        nav: false
                                    },
                                    500: {
                                        items: 4,
                                        nav: false
                                    },
                                    1000: {
                                        items: 5,
                                        nav: false
                                    }
                                }
                            })
                        </script>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-9 mb-2">
                    <h4><?= $data->nama ?></h4>
                    <br>
                    <?php if ($data->harga_sewa != 0) { ?>
                        <h6 class="m-0">Harga Sewa Mulai dari <strong>Rp. <?= number_format($data->harga_sewa, 0, '', '.') ?>/Tahun</strong></h6>
                    <?php } ?>
                    <?php if ($data->harga_jual != 0) { ?>
                        <h6 class="m-0">Harga Jual Mulai dari <strong>Rp. <?= number_format($data->harga_jual, 0, '', '.') ?></strong></h6>
                    <?php } ?>
                </div>
                <div class="col-md-3">
                    <button type="button" class="btn btn-xl btn-outline-danger btn-block" style="border-color:#FA0F0c;font-weight: 500;" data-toggle="modal" data-target="#testdr">Penawaran</button>
                </div>
                <div class="col-md-12">
                    <br>
                    <table>
                        <tr>
                            <td width="150">Ukuran</td>
                            <td width="20">:</td>
                            <td><?= $data->ukuran ?></td>
                        </tr>
                        <tr>
                            <td>Jumlah Lantai</td>
                            <td>:</td>
                            <td><?= $data->jumlah_lantai ?></td>
                        </tr>
                        <tr>
                            <td>Listrik</td>
                            <td>:</td>
                            <td><?= $data->listrik ?> Watt</td>
                        </tr>
                        <tr>
                            <td>Sumber Air</td>
                            <td>:</td>
                            <td><?= $data->sumber_air ?></td>
                        </tr>
                        <tr>
                            <td>Daerah</td>
                            <td>:</td>
                            <td><?= $data->daerah ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td><?= $data->alamat ?></td>
                        </tr>
                    </table>
                    <br>
                    <p><?= $data->keterangan ?></p>
                    <br><br>
                    <div class="text-center">
                        <h5 class="text-center">Denah</h5>
                        <br>
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <img src="<?= base_url("assets/img_marketing/property/denah/$data->denah") ?>" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="text-center">
                        <h5 class="text-center">Lokasi</h5>
                        <br>
                        <?= htmlspecialchars_decode($data->map_url) ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function mOver(src) {
            var a = document.getElementById("main-color");
            a.src = src;
            a.css("transition-timing-function", "ease-in");
        }
    </script>
<?php else : ?>
    <section class="portfolio" style="margin-top: 80px !important; ">
        <div class="container">
            <h2 class="text-center text-secondary mb-0">Unit Bisnis Property</h2>
            <hr style="margin-left: 400px;margin-right: 400px;"> <br><br>
            <div class="row">
                <div class="col-md-4">
                    <a href="<?= base_url() ?>/property/ruko" class="flex-item sidebar"> <img src="<?= base_url() ?>/assets/baru/img/retail.png" class="img-fluid" style="max-width: 100%; border-radius: 5px;" alt=""> </a>
                    <div style="position: absolute; bottom: 0; padding-bottom: 40px; padding-left: 40px;">
                        <h2 class="text-white" style="font-weight: 700;"><strong><i>RUKO</i></strong></h2>
                    </div>
                </div><br>
                <div class="col-md-4"> <a href="<?= base_url() ?>/property/perumahan" class="flex-item sidebar"> <img src="<?= base_url() ?>/assets/baru/img/bod.jpg" class="img-fluid" style="max-width: 100%; border-radius: 5px;" alt=""> </a>
                    <div style="position: absolute; bottom: 0; padding-bottom: 40px; padding-left: 40px;">
                        <h2 class="text-white" style="font-weight: 700;"><strong><i>PERUMAHAN</i></strong></h2>
                    </div>
                </div>
                <div class="col-md-4"> <a href="<?= base_url() ?>/property/kavling" class="flex-item sidebar"> <img src="<?= base_url() ?>/assets/baru/img/primewood.png" class="img-fluid" style="max-width: 100%; border-radius: 5px;" alt=""> </a>
                    <div style="position: absolute; bottom: 0; padding-bottom: 40px; padding-left: 40px;">
                        <h2 class="text-white" style="font-weight: 700;"><strong><i>KAVLING</i></strong></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif ?>
<div class="modal fade" id="testdr" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Layanan</h4> <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form id="form">
                    <input type="hidden" value="" name="unit">
                    <div class="form-group"> <label for="layanan">Jenis Layanan: </label> <select id="layanan" name="layanan" class="form-control" required>
                            <option value="Penawaran" selected>Penawaran</option>
                        </select> </div>
                    <div class="form-group"> <label for="nama">Nama: </label> <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap anda" required> </div>
                    <div class="form-group"> <label for="telepon">No Telepon: </label> <input name="telepon" type="text" class="form-control" onkeydown="input_number(event)" id="telepon" placeholder="No Telepon anda" required> </div>
                    <div class="form-group"> <label for="kota">Kota Domisili: </label> <input name="asalKota" type="text" class="form-control" id="asalKota" placeholder="Kota Domisili anda" required> </div><input type="hidden" name="web" value="true"> <button id="submit" class="btn btn-danger">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $('#submit').click(function(e) {
        e.preventDefault();
        var data = $('#form').serialize();
        if ($('#form').valid()) {
            $('#submit').prop('disabled', true);
            $('#submit').html("Mengirim data...");
            $.post("<?= base_url("otomotif") ?>", data, function(r) {
                swal("", "Terima kasih, Wiraniaga kami akan segera menghubungi Anda!", "success").then(function() {
                    location.reload();
                });
            });
        }
    });
</script>