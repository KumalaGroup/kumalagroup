<section class="bg-primary text-white mb-0" style=" padding:100px !important;" id="about1">
    <div class="container">
        <h2 class="text-center text-white" style="margin-top: 130px !important;">Ayo Bergabung Bersama Kami</h2> <br>
    </div>
</section>
<section class="portfolio" id="Lowongan">
    <div class="container">
        <h3 class="text-uppercase text-secondary mb-0">Daftar Lowongan</h3> <br><br>
        <?php if ($data) { ?>
            <div class="row">
                <?php foreach ($data as $v) : ?>
                    <div class="col-md-12 col-lg-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5><?= $v->posisi ?></h5>
                                <p><?= htmlspecialchars_decode($v->deskripsi) ?></p>
                                <a class="btn btn-l btn-outline-primary btn-sm" href="javascript:void(0)" data-toggle="modal" onclick="apply_data('<?= $v->posisi ?>');" data-target="#modal">Apply</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        <?php } else { ?>
            <div class="row">
                <div class="col-md-12">
                    <ul style="color: #000 !important;">
                        <li>
                            <h6>Pengumuman</h6>
                            <p>Untuk saat ini belum ada posisi yang dibuka, mohon pantau terus atau kunjungi kembali website Kami!</p>
                        </li>
                    </ul>
                </div>
                <br>
            </div>
        <?php } ?>
    </div>
</section>
<?php if ($data) : ?>
    <div class="modal fade" id="modal" tabindex="-1" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apply Karir</h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                </div>
                <div class="modal-body">
                    <form id="form"> <input type="hidden" name="posisi" class="form-control" id="posisi">
                        <div class="form-group"> <label for="namalengkap">Nama Lengkap: </label> <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap anda" required> </div>
                        <div class="form-group"> <label for="alamat">Alamat :</label> <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat anda" required> </div>
                        <div class="form-group"> <label for="email">Email :</label> <input type="email" name="email" class="form-control" id="email" placeholder="Email anda" required> </div>
                        <div class="form-group"> <label for="nohp">No Telepon: </label> <input type="text" name="hp" class="form-control" onkeydown="input_number(event)" id="telepon" placeholder="No Telepon anda" required> </div>
                        <!-- <div class="form-group"> <label for="pendakhir">Pendidikan terakhir: </label> <input name="pendidikan" type="text" class="form-control" id="pendidikan" placeholder="Pendidikan Terakhir" required> </div> -->
                        <!-- <div class="form-group"> <label for="pengkerja">Pengalaman Kerja terakhir: </label> <input name="pengalaman" type="text" class="form-control" id="pengalaman" placeholder="Pengalaman Kerja Terakhir" required> </div> -->
                        <!-- <div class="form-group"> <label for="training">Training/Kursus yang pernah diikuti: </label> <input name="extra" type="text" class="form-control" id="training" placeholder="Training/Kursus yang pernah diikuti" required> </div> -->
                        <div class="form-group"> <label for="alasan">Berikan kami alasan untuk merekrut anda: </label> <textarea name="penguat" class="form-control" id="alasan" rows="3" placeholder="Masukkan alasan disini" required></textarea> </div>
                        <div class="form-group"> <label for="foto">Masukkan Foto anda <li style="font-size: small; color:red" class="red">*max 500kb</li></label> <input type="file" name="foto" id="foto" class="form-control-file" required> </div>
                        <div class="form-group"> <label for="cv">Masukkan CV anda <li style="font-size: small; color:red" class="red">*max 500kb</li></label> <input type="file" name="cv" id="cv" class="form-control-file" required> </div>
                        <div class="form-group"> <label for="lamarankerja">Masukkan Surat Lamaran Kerja anda <li style="font-size: small; color:red" class="red">*max 500kb</li></label> <input type="file" name="surat_lamaran" id="surat_lamaran" class="form-control-file" required> </div>
                        <div class="form-group"> <label for="cat">Catatan</label>
                            <ul>
                                <li>Hanya kandidat yang sesuai syarat yang kami panggil</li>
                                <li>Data yang Anda masukkan dalam form ini kami jamin kerahasiaannya.</li>
                            </ul>
                        </div><button id="submit" class="btn btn-primary">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#submit').click(function(e) {
            e.preventDefault();
            if ($('#form').valid()) {
               
                var form_data = new FormData();
                form_data.append('posisi', $('#posisi').val());
                form_data.append('nama', $('#nama').val());
                form_data.append('alamat', $('#alamat').val());
                form_data.append('email', $('#email').val());
                form_data.append('telepon', $('#telepon').val());
                // form_data.append('pendidikan', $('#pendidikan').val());
                // form_data.append('pengalaman', $('#pengalaman').val());
                // form_data.append('training', $('#training').val());
                form_data.append('alasan', $('#alasan').val());
                var foto = $('#foto')[0].files[0];
                var allowed_types = ["jpg", "jpeg", "png"];
                var ext = foto.name.split(".").pop().toLowerCase();
                form_data.append('foto', foto);
                if ($.inArray(ext, allowed_types) == -1) {
                    swal("", "Ekstensi file Foto tidak diperbolehkan!", "warning");
                    return false;
                } else if (foto.size/1048576 > 0.5) {
                    swal("", "Ukuran file Foto terlalu besar!", "warning");
                    return false;
                }
                var cv = $('#cv')[0].files[0];
                var allowed_types = ["pdf", "jpg", "jpeg", "png"];
                var ext = cv.name.split(".").pop().toLowerCase();
                form_data.append('cv', cv);
                if ($.inArray(ext, allowed_types) == -1) {
                    swal("", "Ekstensi file CV tidak diperbolehkan!", "warning");
                    return false;
                } else if (cv.size/1048576 > 0.5) {
                    swal("", "Ukuran file CV terlalu besar!", "warning");
                    return false;
                }
                var surat_lamaran = $('#surat_lamaran')[0].files[0];
                var allowed_types = ["docx", "doc", "pdf"];
                var ext = surat_lamaran.name.split(".").pop().toLowerCase();
                form_data.append('surat_lamaran', surat_lamaran);
                if ($.inArray(ext, allowed_types) == -1) {
                    swal("", "Ekstensi file Surat Lamaran tidak diperbolehkan!", "warning");
                    return false;
                } else if (surat_lamaran.size/1048576 > 0.5) {
                    swal("", "Ukuran file Surat Lamaran terlalu besar!", "warning");
                    return false;
                }
                $.ajax({
                    type: 'post',
                    url: "<?= base_url("karir") ?>",
                    data: form_data,
                    processData: false,
                    contentType: false,
                    beforeSend : function(){
                        $('#submit').prop('disabled', true);
                        $('#submit').html("Mengirim data...");
                    },
                    success: function(r) {
                        if (r == 1) swal("", "Data berhasil disimpan!", "success").then(function() {
                            location.reload();
                        });
                    }
                });
            }
        });

        function apply_data(data) {
            $('#form').trigger('reset');
            $('#posisi').val(data);
        }
    </script>
<?php endif ?>