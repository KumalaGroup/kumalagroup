<?php if ($mod == "list") : ?> <section class="bg-primary text-white mb-0" id="tradingoil">
        <div class="container"> <br><br><br><br><br>
            <p class="text-center text-white" style="font-size: 40pt;"> <b><?= strtoupper($data) ?></b></p>
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center text-white" style="font-size: 20pt;"> <b>PT. Kumala Putra Prima</b></p>
                </div>
            </div>
        </div>
    </section><?php else : ?> <section class="bg-primary text-white mb-0" id="trading" style="background-size: cover !important; margin-top: 80px !important; height: 80vh !important;">
        <div class="container">
            <p class="text-center text-white" style="font-size: 40pt;margin-top: 200px"> <b>Bisnis Trading</b></p>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 ml-auto">
                    <p class="lead" align="center">Oil & Trading berlokasi di Makassar, Kendari dan Manado. </p>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>
    <section class="portfolio" id="unitbisnis">
        <div class="container">
            <h4 class="text-center text-secondary mb-0">Oil</h4>
            <div class="row text-center">
                <div class="col-md-1"></div>
                    <div class="col-md-3">
                        <div class="oc-item col-md-3"> <a href="<?= base_url() ?>/trading/eni"> <img src="<?= base_url() ?>/assets/baru/img/partner/15.png" alt="partner" width="350" height="350"> </a> </div>
                    </div>
                    <div class="col-md-3">
                        <div class="oc-item col-md-3"> <a href="<?= base_url() ?>/trading/opartner"> <img src="<?= base_url() ?>/assets/baru/img/partner/7.png" alt="partner" width="350" height="350"> </a> </div>
                    </div>
                    <div class="col-md-3">
                        <!-- <div class="oc-item col-md-3"> <a href="<?= base_url() ?>/trading/henkel"> <img src="<?= base_url() ?>/assets/baru/img/partner/5.png" alt="partner" width="250" height="150"> </a> </div> -->
                    </div>
                    <!-- <div class="col-md-3">
                        <div class="oc-item col-md-3"> <a href="<?= base_url() ?>/trading/agip"> <img src="<?= base_url() ?>/assets/baru/img/partner/8.png" alt="partner" width="250" height="150"> </a> </div>
                    </div> -->
                    
                <div class="col-md-1"></div>
                
            </div>
            <br><br>
            <h4 class="text-center text-secondary mb-0">Tire</h4>
            <div class="row text-center">
                <div class="col-md-1"></div>
                <!-- <div class="col-md-3">
                    <div class="oc-item col-md-3"> <a href="<?= base_url() ?>/trading/maxxis"> <img src="<?= base_url() ?>/assets/baru/img/partner/11.jpeg" alt="partner" width="250" height="200"> </a> </div>
                </div> -->
                <div class="col-md-3">
                    <div class="oc-item col-md-3"> <a href="<?= base_url() ?>/trading/hubtrac"> <img src="<?= base_url() ?>/assets/baru/img/partner/12.png" alt="partner" width="300" height="300"> </a> </div>
                </div>
                <div class="col-md-3">
                    <div class="oc-item col-md-3"> <a href="<?= base_url() ?>/trading/doublecoin"> <img src="<?= base_url() ?>/assets/baru/img/partner/9.jpeg" alt="partner" width="300" height="300"> </a> </div>
                </div>
                <!-- <div class="col-md-3">
                    <div class="oc-item col-md-3"> <a href="<?= base_url() ?>/trading/continental"> <img src="<?= base_url() ?>/assets/baru/img/partner/10.jpeg" alt="partner" width="250" height="200"> </a> </div>
                </div> -->
                <div class="col-md-3">
                    <div class="oc-item col-md-3"> <a href="<?= base_url() ?>/trading/metro-tires"> <img src="<?= base_url() ?>/assets/baru/img/partner/13.png" alt="partner" width="300" height="300"> </a> </div>
                </div>
                <div class="col-md-1"></div>
            </div>
            <div class="row text-center">
                <div class="col-md-1"></div>
                <div class="col-md-3">
                    <div class="oc-item col-md-3"> <a href="<?= base_url() ?>/trading/ranger"> <img src="<?= base_url() ?>/assets/baru/img/partner/14.png" alt="partner" width="300" height="300"> </a> </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </section><?php endif ?>