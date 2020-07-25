<?= $this->extend('layout/template_customer'); ?>
<?= $this->section('isi'); ?>

<div class="hero" style="background-color:white;">

    <div class="container" style="padding-top: 50px;">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6">
                <h1 style="font-size: 55px;" class="justify-content-top">Platform Sewa Elektronik B2B Pertama di Indonesia</h1>
                <p style="padding-top: 20px;font-size: 17px;">Alvita merupakan marketplace berbasis teknologi yang bertindak untuk menghubungkan Lessor (pemilik aset) dengan Lessee (penyewa aset). Temukan solusi sewa modern untuk kebutuhan elektronik perusahaan Anda hanya di Alvita!<p>
                        <!-- <button class="btn btn-info mt-2 btn-lg">Coba sekarang!</button> -->
                        <a class="btn btn-info mt-2 btn-lg" href="<?= base_url('customer/katalog') ?>">Coba sekarang!</a>
            </div>
            <div class="col-lg-6 md-none" style="padding-left: 150px;">
                <img class="optionalstuff" src="<?= base_url('/public/assets/marketplace/'); ?>/images/asani.png" alt="" width="425">
            </div>
        </div>
    </div>
</div>



<div class="site-section">
    <div class="container">
        <h2 class="section-heading"><strong>How it works?</strong></h2>
        <p class="mb-5">Easy steps to get you started</p>

        <div class="row mb-5">
            <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="step">
                    <span>1</span>
                    <div class="step-inner">
                        <span class="number text-primary">01.</span>
                        <h3>Select a car</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, laboriosam!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="step">
                    <span>2</span>
                    <div class="step-inner">
                        <span class="number text-primary">02.</span>
                        <h3>Fill up form</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, laboriosam!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="step">
                    <span>3</span>
                    <div class="step-inner">
                        <span class="number text-primary">03.</span>
                        <h3>Payment</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, laboriosam!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 mx-auto">
                <a href="#" class="d-flex align-items-center play-now mx-auto">
                    <span class="icon">
                        <span class="icon-play"></span>
                    </span>
                    <span class="caption">Video how it works</span>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 text-center order-lg-2">
                <div class="img-wrap-1 mb-5">
                    <img src="<?= base_url('/public/assets/marketplace/'); ?>/images/feature_01.png" alt="Image" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-4 ml-auto order-lg-1">
                <h3 class="mb-4 section-heading"><strong>You can easily avail our promo for renting a car.</strong></h3>
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae, explicabo iste a labore id est quas, doloremque veritatis! Provident odit pariatur dolorem quisquam, voluptatibus voluptates optio accusamus, vel quasi quidem!</p>

                <p><a href="#" class="btn btn-primary">Meet them now</a></p>
            </div>
        </div>
    </div>
</div>
<div class="site-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <h2 class="section-heading"><strong>Testimonials</strong></h2>
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="testimonial-2">
                    <blockquote class="mb-4">
                        <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
                    </blockquote>
                    <div class="d-flex v-card align-items-center">
                        <img src="images/person_1.jpg" alt="Image" class="img-fluid mr-3">
                        <div class="author-name">
                            <span class="d-block">Mike Fisher</span>
                            <span>Owner, Ford</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="testimonial-2">
                    <blockquote class="mb-4">
                        <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
                    </blockquote>
                    <div class="d-flex v-card align-items-center">
                        <img src="images/person_2.jpg" alt="Image" class="img-fluid mr-3">
                        <div class="author-name">
                            <span class="d-block">Jean Stanley</span>
                            <span>Traveler</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="testimonial-2">
                    <blockquote class="mb-4">
                        <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
                    </blockquote>
                    <div class="d-flex v-card align-items-center">
                        <img src="images/person_3.jpg" alt="Image" class="img-fluid mr-3">
                        <div class="author-name">
                            <span class="d-block">Katie Rose</span>
                            <span>Customer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endsection('isi'); ?>