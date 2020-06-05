<section class="bg-primary text-white mb-0" id="about1">
    <div class="container">
        <h2 class="text-white" style="margin-top: 100px;">Sejarah Kumala Group</h2>
        <!-- <hr class="star-light mb-5"> -->
        <br> <br>
        <div class="row">
            <div class="col-md-12 ml-auto">
                <p class="lead" style="font-size: 15pt; line-height: 3rem;">Kumala Group didirikan pada tahun 1983. Saat ini Kumala Group semakin bertumbuh dan merupakan salah satu perusahaan bisnis terbesar di bagian tengah hingga ke timur Indonesia. Kumala Group membangun perusahaan yang kompetitif dengan mengembangkan kerjasama yang saling menguntungkan antara merek-merek terkemuka nasional dan internasional di berbagai bidang. Mengusung tagline <b>“Your Best Partner” </b>Kumala Group berkomitmen tak pernah berhenti menawarkan beragam solusi yang menjawab kebutuhan pelanggan dari berbagai kalangan. Kumala Group akan terus berupaya menjaga kepercayaan pelanggan dan melangkah bersama di masa depan.</p>
            </div>
        </div>
    </div>
</section>

<!-- unitbisnis Grid Section -->
<section class="bg-primary text-white mb-0" id="about">
    <div class="container">
        <!-- <h2 class="text-white">Sejarah Kumala Group</h2> -->
        <!-- <hr class="star-light mb-5"> -->
        <br> <br>
        <div class="row">
            <div class="col-md-1">
                <img src="<?= base_url() ?>/assets/baru/img/iconabout.png" style="margin-top: -20px;" width="100" height="100" alt="">
            </div>

            <div class="col-md-8">
                <h2>Visi : </h2>
                <br>
                <h4 style="line-height: 35px;">“Menjadi Group Perusahaan terbaik di Indonesia dengan nilai tambah terbaik bagi pelanggan melalui kombinasi Harga, Kualitas dan Kepuasan Layanan. ”</h4>
            </div>


        </div>

        <div class="row">

            <div class="col-md-1">
                <br>
                <img src="<?= base_url() ?>/assets/baru/img/iconabout.png" style="margin-top: -20px;" width="100" height="100" alt="">
            </div>
            <div class="col-md-8">
                <br>
                <h2>Misi : </h2>
                <br>
                <p style="font-size: 15pt;"><b>* Meningkatkan.</b> pertumbuhan perusahaan secara berkesinambungan untuk mencapai hasil terbaik.</p>
                <p style="font-size: 15pt;"><b>* Nilai.</b> Memberikan solusi terhadap kebutuhan pelanggan dan menciptakan hubungan baik untuk mencapai kepuasan pelanggan.</p>
                <p style="font-size: 15pt;"><b>* Pengalaman.</b> Tumbuh bersama dengan para Stakeholder kami (Karyawan & Pelanggan).</p>
            </div>
        </div>
    </div>
</section>

<section class="bg-primary text-white mb-0" id="about3">
    <div class="container text-center">
        <h2 class="text-white text-center">Board Of Director</h2>
        <br>
        <div class="row" align="center">

            <div class="col-md-2"></div>
            <?php foreach ($data as $v) : ?>
                <div class="col-md-4" style="margin-bottom:10px;">
                    <div class="card card_bods" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title"><?= $v->nama ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?= $v->job ?></h6>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
            <div class="col-md-2"></div>
        </div>
    </div>
</section>