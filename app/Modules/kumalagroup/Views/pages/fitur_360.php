<style>
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
        <h2 class="text-center text-secondary mb-0"> Fitur 360&deg; </h2>
        <hr style="margin-left: 400px;margin-right: 400px;">
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h4 class="">Interior</h4>
            <br>
            <?php if ($fitur['interior'] !== "" && trim($fitur['interior']) !== "") { ?>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="<?= trim($fitur['interior']) ?>" allowfullscreen></iframe>
                </div>
            <?php } else { ?>
                <p>Belum ada gambar</p>
            <?php } ?>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-lg-12">
            <h4>Exterior</h4>
            <br>
            <?php if ($fitur['exterior'] != "") { ?>
                <div class="cloudimage-360" data-folder="<?= base_url() ?>/assets/img_marketing/otomotif/360ex/" data-image-list='<?= htmlspecialchars_decode($fitur['exterior']) ?>' data-bottom-circle data-bottom-circle-offset="2" data-full-screen="true"></div>
            <?php } else { ?>
                <p>Belum ada gambar</p>
            <?php } ?>
            <script src="https://cdn.scaleflex.it/plugins/js-cloudimage-360-view/2/js-cloudimage-360-view.min.js"></script>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-lg-12">
            <h4 class="">Video Test Drive</h4>
            <br>
            <?php if ($fitur['video'] !== "" && trim($fitur['video']) != '') { ?>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="<?= trim($fitur['video']) ?>" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            <?php } else { ?>
                <p>Belum ada video</p>
            <?php } ?>
        </div>
    </div>
    <br><br>
</div>