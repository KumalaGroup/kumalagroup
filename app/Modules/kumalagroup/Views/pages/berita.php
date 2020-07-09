<?php if ($mod == "detail") : ?> <style>
        @media (min-width: 1024px) {
            #detailb {
                /*margin-top: 100px;*/
                height: 87vh !important;
            }

            #header {
                margin-top: 6% !important;
            }
        }

        @media (min-width: 992px) {
            #detailb {
                /*margin-top: 100px;*/
                height: 87vh !important;
            }

            #header {
                margin-top: 6% !important;
            }

            #mainNav {
                padding-top: 0.8rem;
                padding-bottom: 0.8rem;
                -webkit-transition: padding-top 0.3s, padding-bottom 0.3s;
                transition: padding-top 0.3s, padding-bottom 0.3s;
            }
        }

        @media (max-width: 400px) {
            #detailb {
                /*margin-top: 100px;*/
                height: 37vh;
            }

            #header {
                margin-top: 15%;
            }
        }

        @media (min-width: 350px) {
            #detailb {
                /*margin-top: 100px;*/
                height: 37vh;
            }

            #header {
                margin-top: 15%;
            }
        }

        @media (max-width: 520px) {
            #detailb {
                /*margin-top: 100px;*/
                height: 37vh;
            }

            #header {
                margin-top: 15%;
            }
        }
    </style>
    <section id="header" class="portfolio">
        <div class="container">
            <h4 class="text-center text-secondary mb-0"> <?= $data->judul ?> </h4> <br>
            <h6 class="text-center text-secondary mb-0" style="color: grey !important;"><?= ucwords($data->type) . " - $date" ?></h6>
        </div>
    </section>
    <div class="container">
        <img src="<?= base_url("assets/img_marketing/berita/$data->gambar") ?>" alt="" width="100%" height="auto" class="img-fluid">
    </div>
    <section class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p align="center" style="line-height: 1.6;"><?= $data->deskripsi ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p align="right">Share : <a href="https://www.facebook.com/sharer/sharer.php?u=<?= base_url("/berita/detail/" . base64_encode($data->id)) ?>" target="_blank"> <i class="fab fa-facebook-square fa-2x"></i></a> <a href="https://twitter.com/intent/tweet?text=<?= base_url("/berita/detail/" . base64_encode($data->id)) ?>" target="_blank"> <i class="fab fa-twitter-square fa-2x"></i></a> <a href="https://www.instagram.com/?url=https://www.drdrop.co/" target="_blank" rel="noopener"> <i class="fab fa-instagram fa-2x"></i></a> </p>
                </div>
            </div>
        </div>
    </section><?php else : ?>
    <section class="portfolio" id="beritadanpromo" style="margin-top:100px !important;">
        <div class="container">
            <h2 class="text-center text-secondary mb-0">Berita</h2>
            <hr style="margin-left: 400px;margin-right: 400px;"> <br><br>
            <div class="row">
                <?php foreach ($data as $v) :
                    $bulan = array(1 => "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
                    $date = new DateTime($v->updated_at);
                    $date = $date->format('d') . " " . $bulan[$date->format('n')] . " " . $date->format('Y') ?>
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card">
                            <a class="m-0" href="<?= base_url("/berita/detail/" . base64_encode($v->id)) ?>">
                                <img src="<?= base_url("assets/img_marketing/berita/$v->gambar") ?>" class="card-img-top" width="100%" alt="..."></a>
                            <div class="card-body">
                                <h5><a href="<?= base_url("/berita/detail/" . base64_encode($v->id)) ?>"><?= $v->judul ?></a></h5>
                                <p class="card-text"><b><?= ucwords($v->type) ?> </b>| <?= $date ?></p>
                                <p class="card-text"><?= substr(strip_tags($v->deskripsi), 0, 200) ?>...</p><a href="<?= base_url("/berita/detail/" . base64_encode($v->id)) ?>">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
            <?php if ($pages > 1) : ?>
                <div class="row">
                    <div class="col-12">
                        <nav aria-label="Page-link navigation example">
                            <ul class="pagination justify-content-center">
                                <li class="page-item"> <a class="page-link" <?= ($page != 1) ? 'href="' . base_url() . '/berita/page/' . ($page - 1) . '"' : '' ?>>‹</a> </li><?php for ($i = 1; $i <= $pages; $i++) : ?> <li class="page-item <?= ($i == $page) ? 'active' : '' ?>"><a class="page-link" <?= ($i != $page) ? 'href="' . base_url() . '/berita/page/' . $i . '"' : '' ?>><?= $i ?></a></li><?php endfor ?> <li class="page-item"> <a class="page-link" <?= ($page != $pages) ? 'href="' . base_url() . '/berita/page/' . ($page + 1) . '"' : '' ?>>›</a> </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            <?php endif ?>
    </section><?php endif ?>