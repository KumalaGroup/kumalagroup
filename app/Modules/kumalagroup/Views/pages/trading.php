<?php if ($mod == "list") : ?>
    <section class="bg-primary text-white mb-0" id="tradingoil">
        <div class="container">
            <br> <br> <br> <br> <br>
            <!-- <h1 class="text-center text-white">AGIP</h1> -->
            <p class="text-center text-white" style="font-size: 40pt;"> <b><?= strtoupper($data) ?></b></p>
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center text-white" style="font-size: 20pt;"> <b>PT. Kumala Putra Prima</b></p>
                </div>
            </div>
        </div>
    </section>

    <!-- unitbisnis Grid Section -->
    <!-- <section class="portfolio" id="unitbisnis">
    <div class="container">
        <div class="row">

            @foreach ($data as $item)
            <div class="col-md-4">
                <div class="card">
                    <img src="{{asset('img/trading/'.$item->gambar)}}" class="card-img-top" width="350px" height="250" alt="...">
                    <div class="card-body">
                        <h4>@if(app()->getLocale()=='id') {{$item->nama}} @else {{$item->name}} @endif</h4>
                        <p style="font-size: 11pt;">{{$item->type}}</p>
                    </div>
                    <div class="card-body text-center" style="background-color: #FA0F0c;">
                        <a href="{{route('dtrade',$item->id )}}" style="color: #fff !important;">Selengkapnya</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-md-6 offset-3">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        {{$data->links()}}
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section> -->
<?php else : ?>
    <section class="bg-primary text-white mb-0" id="trading" style="background-size: cover !important; margin-top: 80px !important; height: 80vh !important;">
        <div class="container">
            <!-- <br> <br> <br> <br> <br> -->
            <!-- <h2 class="text-center text-white" style="margin-top: 100px;">Bisnis Trading</h2> -->
            <p class="text-center text-white" style="font-size: 40pt;margin-top: 200px"> <b>Bisnis Trading</b></p>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 ml-auto">
                    <p class="lead" align="center">Oil & Trading berlokasi di Makassar, Kendari dan Manado.
                    </p>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>

    <!-- unitbisnis Grid Section -->
    <section class="portfolio" id="unitbisnis">
        <div class="container">
            <h4 class="text-center text-secondary mb-0">Oil</h4>

            <br>

            <div class="row text-center">
                <div class="col-md-1"></div>

                <div class="col-md-3">
                    <div class="oc-item col-md-3">
                        <a href="<?= base_url() ?>/trading/fuchs">
                            <img src="<?= base_url() ?>/assets/baru/img/partner/6.png" alt="partner" width="250" height="150">
                        </a>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="oc-item col-md-3">
                        <a href="<?= base_url() ?>/trading/henkel">
                            <img src="<?= base_url() ?>/assets/baru/img/partner/5.png" alt="partner" width="250" height="150">
                        </a>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="oc-item col-md-3">
                        <a href="<?= base_url() ?>/trading/agip">
                            <img src="<?= base_url() ?>/assets/baru/img/partner/8.png" alt="partner" width="250" height="150">
                        </a>
                    </div>
                </div>

                <div class="col-md-1"></div>
            </div>

            <br><br>
            <h4 class="text-center text-secondary mb-0">Tire</h4>


            <div class="row text-center">
                <div class="col-md-1"></div>

                <div class="col-md-3">
                    <div class="oc-item col-md-3">
                        <a href="<?= base_url() ?>/trading/maxxis">
                            <img src="<?= base_url() ?>/assets/baru/img/partner/11.jpeg" alt="partner" width="250" height="200">
                        </a>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="oc-item col-md-3">
                        <a href="<?= base_url() ?>/trading/doublecoin">
                            <img src="<?= base_url() ?>/assets/baru/img/partner/9.jpeg" alt="partner" width="250" height="200">
                        </a>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="oc-item col-md-3">
                        <a href="<?= base_url() ?>/trading/continental">
                            <img src="<?= base_url() ?>/assets/baru/img/partner/10.jpeg" alt="partner" width="250" height="200">
                        </a>
                    </div>
                </div>

                <div class="col-md-1"></div>
            </div>
        </div>
    </section>
<?php endif ?>