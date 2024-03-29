<section class="bg-primary text-white mb-0" style="margin-top:80px !important;" id="kontak">
    <div class="container"> <br>
        <h2 class="text-center text-white">Kontak</h2> <br>
        <h4 class="text-center text-white">info@kumalagroup.id | VIANA 081212100700(whatsapp only)</h4> <br><br>
    </div>
</section>
<section class="portfolio" id="unitbisnis">
    <div class="container"> <br>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form id="form">
                    <div class="form-group"> <label for="nama">Nama</label> <input name="nama" type="text" class="form-control" id="nama" placeholder="Masukkan nama anda" required> </div>
                    <div class="form-group"> <label for="email">Email</label> <input name="email" type="email" class="form-control" id="email" placeholder="Masukkan Email anda" required> </div>
                    <div class="form-group"> <label for="notelp">Telepon</label> <input name="telepon" type="text" class="form-control" onkeydown="input_number(event)" id="telepon" placeholder="Masukkan no telepon anda" required> </div>
                    <div class="form-group"> <label for="pesan">Pesan</label> <textarea name="pesan" class="form-control" id="pesan" rows="3" required></textarea> </div><button id="submit" class="btn btn-xl btn-outline-primary">Kirim</button>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</section>
<script>
    $('#submit').click(function(e) { 
        e.preventDefault();
        var data = $('#form').serialize();
        if ($('#form').valid()) {
            $('#submit').prop('disabled', true);
            $('#submit').html("Mengirim pesan...");
            $.post("<?= base_url("kontak") ?>", data, function(r) {
                swal("", "Terima Kasih Telah Menghubungi Kami!!", "success").then(function() {
                    location.reload();
                });
            });
        }
    });
</script>