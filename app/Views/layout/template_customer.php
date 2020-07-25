<!doctype html>
<html lang="en">

<head>
    <title><?= $judul; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link rel="stylesheet" href="<?= base_url() ?>/public/assets/marketplace/fonts/icomoon/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/assets/marketplace/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/assets/marketplace/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/assets/marketplace/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/assets/marketplace/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/assets/marketplace/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/assets/marketplace/css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/assets/marketplace/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/assets/marketplace/css/mystyle.css">
</head>

<body>


    <div class="site-wrap" id="home-section">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>



        <header class="site-navbar fixed-top site-navbar-target pt-0 pb-1 shadow-sm bg-white rounded" role="banner" style="position: fixed; top: 0; z-index: 20; background-color: white;">

            <div class="container">
                <div class="row align-items-center position-relative">

                    <div class="col-3">
                        <div class="site-logo">
                            <a href="index.html"><strong>Alvita</strong></a>
                        </div>
                    </div>

                    <div class="col-9 md-none text-right">

                        <span class="d-inline-block d-lg-none"><a href="#" class=" site-menu-toggle js-menu-toggle py-5 "><span class="icon-menu h3 text-black"></span></a></span>

                        <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav ml-auto ">
                                <li class=""><a class="font-hitam-400 <?php if ($judul == 'Home') {
                                                                            echo 'activeOK';
                                                                        } ?>" href="<?= base_url('home'); ?>" class="nav-link ">Home</a></li>

                                <li class=""><a class="<?php if ($judul == 'Katalog') {
                                                            echo 'activeOK';
                                                        } ?> font-hitam-400" href="<?= base_url('katalog'); ?>" class="nav-link">Katalog</a></li>
                                <li><a href="about.html" class="nav-link font-hitam-400">About</a></li>
                                <li><a href="contact.html" class="nav-link font-hitam-400">Contact</a></li>

                                <?php if ($user['role_id'] == 3) : ?>
                                    <li><a href="contact.html" class="nav-link font-hitam-400">My Profile</a></li>

                                    <li><a href="<?= base_url('cart'); ?>" class="nav-link font-hitam-400"><i class="fas fa-shopping-cart" style="font-size: 20px;"></i><span class="badge badge-pill badge-info"><?= empty($numrows_cart['numrows']) ? '' : $numrows_cart['numrows'] ?></span></a></li>


                                    <a class="btn btn-outline-danger btn-sm tombol-confirm" href="<?= base_url('admin/auth/logout') ?>" role="button">Logout</a>

                                <?php elseif ($user['role_id'] == 1 and 2) : ?>
                                    <li><a href="<?= base_url('admin/dashboard'); ?>" class="nav-link font-hitam-400">Admin</a></li>
                                    <a class="btn btn-outline-danger btn-sm tombol-confirm" href="<?= base_url('admin/auth/logout') ?>" role="button">Logout</a>
                                <?php else : ?>
                                    <a class="btn btn-outline-info" href="<?= base_url('auth') ?>" role="button">Login/Register</a>
                                <?php endif; ?>

                            </ul>
                        </nav>
                    </div>

                    <!-- tanpilan mobile -->
                    <div class="col-9 md-v text-right">
                        <nav class="navbar navbar-expand-lg navbar-light justify-content-end">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                    <li><a class="font-hitam-400 nav-link<?php if ($judul == 'Home') {
                                                                                echo 'activeOK';
                                                                            } ?>" href="<?= base_url('home'); ?> ">Home</a></li>

                                    <li><a class="nav-link <?php if ($judul == 'Katalog') {
                                                                echo 'activeOK';
                                                            } ?> font-hitam-400" href="<?= base_url('katalog'); ?> ">Katalog</a></li>
                                    <li><a href="about.html" class="nav-link font-hitam-400">About</a></li>
                                    <li><a href="contact.html" class="nav-link font-hitam-400">Contact</a></li>

                                    <?php if ($user['role_id'] == 3) : ?>
                                        <li><a href="contact.html" class="nav-link font-hitam-400">My Profile</a></li>

                                        <li><a href="<?= base_url('cart'); ?>" class="nav-link font-hitam-400"><i class="fas fa-shopping-cart" style="font-size: 20px;"></i><span class="badge badge-pill badge-info"><?= empty($numrows_cart['numrows']) ? '' : $numrows_cart['numrows'] ?></span></a></li>
                                        <a class="text-danger font-weight-bold tombol-confirm" href="<?= base_url('admin/auth/logout') ?>" role="button">Logout</a>

                                    <?php elseif ($user['role_id'] == 1 and 2) : ?>
                                        <li><a href="<?= base_url('admin/dashboard'); ?>" class="nav-link font-hitam-400">Admin</a></li>
                                        <a class="text-danger font-weight-bold tombol-confirm" href="<?= base_url('admin/auth/logout') ?>" role="button">Logout</a>

                                    <?php else : ?>
                                        <a class="font-weight-bold text-info" href="<?= base_url('auth') ?>" role="button">Login</a>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </nav>
                    </div>

                </div>
            </div>

        </header>

        <?php $this->rendersection('isi'); ?>

        <div class="site-section bg-primary py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 mb-4 mb-md-0">
                        <h2 class="mb-0 text-white">What are you waiting for?</h2>
                        <p class="mb-0 opa-7">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
                    </div>
                    <div class="col-lg-5 text-md-right">
                        <a href="#" class="btn btn-primary btn-white">Rent a car now</a>
                    </div>
                </div>
            </div>
        </div>


        <footer class="site-footer pb-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <h2 class="footer-heading mb-4">About Us</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                        <ul class="list-unstyled social">
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-linkedin"></span></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-8 ml-auto">
                        <div class="row">
                            <div class="col-lg-3">
                                <h2 class="footer-heading mb-4">Quick Links</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3">
                                <h2 class="footer-heading mb-4">Resources</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3">
                                <h2 class="footer-heading mb-4">Support</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3">
                                <h2 class="footer-heading mb-4">Company</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row py-0 my-0 text-center">
                    <div class="col-md-12">
                        <div class="border-top pt-4">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </footer>

    </div>
    <script src="<?= base_url('/public/assets/marketplace/'); ?>js/owl.carousel.min.js"></script>
    <script src="<?= base_url('/public/assets/marketplace/'); ?>js/jquery.sticky.js"></script>
    <script src="<?= base_url('/public/assets/marketplace/'); ?>js/jquery.waypoints.min.js"></script>
    <script src="<?= base_url('/public/assets/marketplace/'); ?>js/jquery.animateNumber.min.js"></script>
    <script src="<?= base_url('/public/assets/marketplace/'); ?>js/jquery.fancybox.min.js"></script>
    <script src="<?= base_url('/public/assets/marketplace/'); ?>js/jquery.easing.1.3.js"></script>
    <script src="<?= base_url('/public/assets/marketplace/'); ?>js/bootstrap-datepicker.min.js"></script>
    <script src="<?= base_url('/public/assets/marketplace/'); ?>js/aos.js"></script>

    <script src="<?= base_url('/public/assets/marketplace/'); ?>js/main.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!-- Flash data notiflix -->
    <script src="<?= base_url('public/assets/'); ?>/js/notiflix-aio-2.1.3.min.js"></script>
    <script src="<?= base_url('public/assets/'); ?>/js/myscript.js"></script>

</body>

</html>