<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Site Metas -->
<title>Desa Wisata Samirono</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- Site Icons -->
<link rel="shortcut icon" href="{{ asset('assets/template/images/logos/Logo Samirono Grafis (No BG).png') }}" type="image/x-icon" />
<link rel="apple-touch-icon" href="{{ asset('assets/template/images/apple-touch-icon.png') }}">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ asset('assets/template/css/bootstrap.min.css') }}">
<!-- Site CSS -->
<link rel="stylesheet" href="{{ asset('assets/template/style.css') }}">
<!-- ALL VERSION CSS -->
<link rel="stylesheet" href="{{ asset('assets/template/css/versions.css') }}">
<!-- Responsive CSS -->
<link rel="stylesheet" href="{{ asset('assets/template/css/responsive.css') }}">
<!-- Custom CSS -->
<link rel="stylesheet" href="{{ asset('assets/template/css/custom.css') }}">

<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="app_version" data-spy="scroll" data-target="#navbarApp" data-offset="98">

    <!-- LOADER -->
    <!-- <div id="preloader">
        <img class="preloader" src="{{ asset('assets/template/images/loaders/loader-app.gif') }}" alt="">
    </div> end loader -->
    <!-- END LOADER -->
    <header class="header ">
        <nav class="navbar header-nav navbar-expand-lg ">
            <div class="container">
                <a class="navbar-brand" href="index.html"><img src="{{ asset('assets/template/images/logo samirono teks.png') }}" alt="image"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarApp" aria-controls="navbarApp" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarApp">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active" href="#home">Home</a></li>
                        <li><a class="nav-link" href="#insight">Insight</a></li>
                        <li><a class="nav-link" href="#edukasi">Edukasi</a></li>
                        <li><a class="nav-link" href="#kesenian">Kesenian</a></li>
                        <li><a class="nav-link" href="#produk">Produk Olahan</a></li>
                        <li><a class="nav-link" href="#paket">Paket Wisata</a></li>
                        <li><a class="nav-link" href="#about">About Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div id="home" class="parallax first-section" style="background-image:url('assets/template/uploads/Gambar.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="big-tagline">
                        <h2>Desa Wisata Samirono</h2>
                        <p class="lead">
                            Adalah Desa Sentra Peternakan Sapi Perah Rakyat di Kecamatan Getasan Kabupaten Semarang Provinsi Jawa Tengah.
                        </p>
                    </div>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div id="insight" class="section wb" style="padding: 20px !important;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h3>Insight</h3>
                        <p class="lead">Artikel tentang Desa Wisata</p>
                    </div><!-- end title -->
                </div>
            </div>

            <div id="default" class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12">
                            <h5 style="color: #12372A;" class="font-weight-bold text-center ">
                                New Article
                            </h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="row" id="blog_space">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h5 style="color: #12372A;" class="font-weight-bold text-center ">
                                New Infographic
                            </h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-12 mx-auto">
                                    <div class="row">
                                        <div class="col-12">
                                            <img src="{{asset('assets/template/uploads/Artikel 1.png')}}" alt="" class="infographic rounded shadow-sm" width="100%">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-12 mx-auto">
                                    <div class="row">
                                        <div class="col-12">
                                            <img src="{{asset('assets/template/uploads/Artikel 2.png')}}" alt="" class="infographic rounded shadow-sm" width="100%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!--Highlights close-->
        </div><!-- end container -->
    </div><!-- end section -->

    <div id="edukasi" class="section wb" style="padding: 20px !important;">
        <div class="container">
            <div class="section-title text-center">
                <h3>Edukasi</h3>
                <p class="lead">Edukasi dari Desa Wisata Samirono ini merupakan ciri khas/nilai jual yang ada di desa ini.</p>
            </div><!-- end title -->

            <div class="owl-screenshots owl-carousel owl-theme">
                <div class="owl-screen">
                    <div class="service-widget">
                        <div class="post-media entry wow fadeIn">
                            <a href="uploads/edukasi1.jpg') }}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img src="{{ asset('assets/template/uploads/edukasi1.jpg') }}" alt="" class="img-fluid img-rounded">
                            <div class="magnifier"></div>
                        </div>
                    </div><!-- end service -->
                </div><!-- end col -->

                <div class="owl-screen">
                    <div class="service-widget">
                        <div class="post-media entry wow fadeIn">
                            <a href="uploads/edukasi2.jpg') }}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img src="{{ asset('assets/template/uploads/edukasi2.jpg') }}" alt="" class="img-fluid img-rounded">
                            <div class="magnifier"></div>
                        </div>
                    </div><!-- end service -->
                </div><!-- end col -->

                <div class="owl-screen">
                    <div class="service-widget">
                        <div class="post-media entry wow fadeIn">
                            <a href="uploads/edukasi3.jpg') }}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img src="{{ asset('assets/template/uploads/edukasi3.jpg') }}" alt="" class="img-fluid img-rounded">
                            <div class="magnifier"></div>
                        </div>
                    </div><!-- end service -->
                </div><!-- end col -->

                <div class="owl-screen">
                    <div class="service-widget">
                        <div class="post-media entry wow fadeIn">
                            <a href="uploads/edukasi4.jpg') }}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img src="{{ asset('assets/template/uploads/edukasi4.jpg') }}" alt="" class="img-fluid img-rounded">
                            <div class="magnifier"></div>
                        </div>
                    </div><!-- end service -->
                </div><!-- end col -->

                <div class="owl-screen">
                    <div class="service-widget">
                        <div class="post-media entry wow fadeIn">
                            <a href="uploads/edukasi5.jpg') }}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img src="{{ asset('assets/template/uploads/edukasi5.jpg') }}" alt="" class="img-fluid img-rounded">
                            <div class="magnifier"></div>
                        </div>
                    </div><!-- end service -->
                </div><!-- end col -->

                <div class="owl-screen">
                    <div class="service-widget">
                        <div class="post-media entry wow fadeIn">
                            <a href="uploads/edukasi6.jpg') }}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img src="{{ asset('assets/template/uploads/edukasi6.jpg') }}" alt="" class="img-fluid img-rounded">
                            <div class="magnifier"></div>
                        </div>
                    </div><!-- end service -->
                </div><!-- end col -->

                <div class="owl-screen">
                    <div class="service-widget">
                        <div class="post-media entry wow fadeIn">
                            <a href="uploads/edukasi1.jpg') }}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img src="{{ asset('assets/template/uploads/edukasi1.jpg') }}" alt="" class="img-fluid img-rounded">
                            <div class="magnifier"></div>
                        </div>
                    </div><!-- end service -->
                </div><!-- end col -->

                <div class="owl-screen">
                    <div class="service-widget">
                        <div class="post-media entry wow fadeIn">
                            <a href="uploads/edukasi2.jpg') }}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img src="{{ asset('assets/template/uploads/edukasi2.jpg') }}" alt="" class="img-fluid img-rounded">
                            <div class="magnifier"></div>
                        </div>
                    </div><!-- end service -->
                </div><!-- end col -->

                <div class="owl-screen">
                    <div class="service-widget">
                        <div class="post-media entry wow fadeIn">
                            <a href="uploads/edukasi3.jpg') }}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img src="{{ asset('assets/template/uploads/edukasi3.jpg') }}" alt="" class="img-fluid img-rounded">
                            <div class="magnifier"></div>
                        </div>
                    </div><!-- end service -->
                </div><!-- end col -->

                <div class="owl-screen">
                    <div class="service-widget">
                        <div class="post-media entry wow fadeIn">
                            <a href="uploads/edukasi4.jpg') }}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img src="{{ asset('assets/template/uploads/edukasi4.jpg') }}" alt="" class="img-fluid img-rounded">
                            <div class="magnifier"></div>
                        </div>
                    </div><!-- end service -->
                </div><!-- end col -->

                <div class="owl-screen">
                    <div class="service-widget">
                        <div class="post-media entry wow fadeIn">
                            <a href="uploads/edukasi5.jpg') }}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img src="{{ asset('assets/template/uploads/edukasi5.jpg') }}" alt="" class="img-fluid img-rounded">
                            <div class="magnifier"></div>
                        </div>
                    </div><!-- end service -->
                </div><!-- end col -->

                <div class="owl-screen">
                    <div class="service-widget">
                        <div class="post-media entry wow fadeIn">
                            <a href="uploads/edukasi6.jpg') }}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img src="{{ asset('assets/template/uploads/edukasi6.jpg') }}" alt="" class="img-fluid img-rounded">
                            <div class="magnifier"></div>
                        </div>
                    </div><!-- end service -->
                </div><!-- end col -->

            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div class="how-its-work clearfix" id="">
        <div class="container">

            <div class="section-title text-center">
                <h3>Kesenian</h3>
                <p class="lead">Kesenian yang ada di dalam Desa Wisata Samirono</p>
            </div><!-- end title -->
            <div class="hc colon1">
                <h2>1</h2>
                <h4 class="text-white">
                    <class="badge" style="background-color: #12372A;">Kesenian Kuda Luping</class=>
                </h4>
            </div><!-- end col -->

            <div class="hc colon2">
                <h2>2</h2>
                <h4 class="text-white">

                    <class="badge" style="background-color: #12372A;">Kesenian Topeng Ireng</class=>
                </h4>
            </div><!-- end col -->

            <div class="hc colon3">
                <h2>3</h2>
                <h4 class="text-white">
                    <class="badge" style="background-color: #12372A;">Kesenian Prajuritan</class=>
                </h4>
            </div><!-- end col -->

            <div class="hc colon4">
                <h2>4</h2>
                <h4 class="text-white">
                    <class="badge" style="background-color: #12372A;">Kesenian Kuda Lumping</class=>
                </h4>
            </div><!-- end col -->
        </div>
    </div>

    <div id="produk" class="">
        <div class="container">
            <div class="section-title text-center">
                <h3>Produk Olahan</h3>
                <p class="lead">Produk olahan yang ditawarkan oleh Desa Wisata Samirono<br>Produk UMKM dengan menggunakan bahan 100% tanpa pengawet</p>
            </div><!-- end title -->
            <div class="row dev-list text-center">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                    <div class="post-media entry wow fadeIn">
                        <a href"" class="hoverbutton global-radius"><i class="fa fa-link" aria-hidden="true"></i></a>
                        <img src="{{ asset('assets/template/uploads/1.jpg') }}" alt="" class="img-fluid rounded-circle">
                        <h3>Snack</h3>
                        <small>Handmade and Crunchy</small>
                        <div class="magnifier" id="snack">
                        </div>
                    </div><!--widget -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                    <div class="post-media entry wow fadeIn">
                        <a href="URL_TUJUAN" class="hoverbutton global-radius"><i class=""></i></a>
                        <img src="{{ asset('assets/template/uploads/2.jpg') }}" alt="" class="img-fluid rounded-circle">
                        <h3>Cookies</h3>
                        <small>Handmade and Sweet</small>
                        <div class="magnifier">
                        </div>
                    </div><!--widget -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                    <div class="post-media entry wow fadeIn">
                        <a href="URL_TUJUAN" class="hoverbutton global-radius"><i class=""></i></a>
                        <img src="{{ asset('assets/template/uploads/3.jpg') }}" alt="" class="img-fluid rounded-circle">
                        <div class="widget-title">
                            <h3>Minuman</h3>
                            <small>Handmade and Fresh</small>
                            <div class="magnifier">

                            </div>
                        </div><!--widget -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end section -->

        <div class="parallax section" style="background-image:url('assets/template/uploads/bg_img_2.jpg');">
            <div class="container">
                <div class="row text-left stat-wrap">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <span data-scroll class="global-radius icon_wrap effect-1 alignleft latarijo"><i class="fa fa-users" aria-hidden="true"></i></span>
                        <p class="stat_total_revenue">15000</p>
                        <h3>Orang berkunjung</h3>
                    </div><!-- end col -->

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <span data-scroll class="global-radius icon_wrap effect-1 alignleft latarijo"><i class="fa fa-usd" aria-hidden="true"></i></span>
                        <p class="" id="counter"></p>
                        <h3>Pendapatan</h3>
                    </div><!-- end col -->

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <span data-scroll class="global-radius icon_wrap effect-1 alignleft latarijo"><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
                        <p class="stat_count_download">2018</p>
                        <h3>Memulai</h3>
                    </div><!-- end col -->

                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end section -->

        <div id="paket" class="section lb">
            <div class="container">
                <div class="section-title text-center">
                    <h3>Siap Berkunjung?</h3>
                    <p class="lead">Desa Wisata Samirono memberikan paket wisata yang beragam dan tentunya<strong> ramah dikantong!</strong><br> <strong>Silahkan pilih sesukamu!</strong></p>
                </div><!-- end title -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="tab-content">
                            <div class="tab-pane active fade show" id="tab1">
                                <div class="row text-center">
                                    <div class="col-md-4">
                                        <div class="pricing-table pricing-table-highlighted">
                                            <div class="pricing-table-header grd1" style="background-color: #12372A; border:none;">
                                                <h2>Paket Pilih Sendiri</h2>
                                                <h3>Dimulai dari <strong class="text-white">Rp 10.000</strong></h3>
                                            </div>
                                            <div class="pricing-table-space"></div>
                                            <div class="pricing-table-insight">
                                                <p class="px-2">Menawarkan edukasi yang dapat dipilih sendiri dengan harga yang sangat terjangkau</p>
                                            </div>
                                            <div class="pricing-table-sign-up">
                                                <a href="https://drive.google.com/drive/folders/10v4sWiQqibGttAMhBY9EBno96FeG_2nK?usp=sharing" class="btn btn-dark btn-radius btn-brd grd1 ijo" target="_blank" style="background-color: #3F2305;">Visit Here</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="pricing-table pricing-table-highlighted">
                                            <div class="pricing-table-header grd1" style="background-color: #12372A; border:none;">
                                                <h2>Paket Harian</h2>
                                                <h3>Dimulai dari <strong class="text-white">Rp 60.000</strong></h3>
                                            </div>
                                            <div class="pricing-table-space"></div>
                                            <div class="pricing-table-insight">
                                                <p class="px-2">Menawarkan edukasi di Desa Wisata Samirono dengan paket harian yang tentunya menambah ilmu dan dimulai dengan harga terjangkau</p>
                                            </div>
                                            <div class="pricing-table-sign-up">
                                                <a href="#" class="btn btn-dark btn-radius btn-brd grd1  ijo" style="background-color: #3F2305; border:none;">Visit Here</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="pricing-table pricing-table-highlighted">
                                            <div class="pricing-table-header grd1" style="background-color: #12372A;border:none;">
                                                <h2>Paket Live-in</h2>
                                                <h3>Dimulai dari <strong class="text-white">Rp 350.000</strong></h3>
                                            </div>
                                            <div class="pricing-table-space"></div>
                                            <div class="pricing-table-insight">
                                                <p class="px-2">Menawarkan edukasi bersifat menginap. Mendapatkan ilmu yang berguna dan pastinya <strong>akan sangat berguna ilmu tersebut</strong></p>
                                            </div>
                                            <div class="pricing-table-sign-up">
                                                <a href="#" class="btn btn-dark btn-radius btn-brd grd1  ijo" style="background-color: #3F2305;" target="_blank">Visit Here</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end row -->
                            </div><!-- end pane -->
                        </div><!-- end content -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end section -->

        <div id="about" class="section wb" style="padding: 20px !important;">
            <div class="container">
                <div class="section-title text-center">
                    <h3>About Us</h3>
                    <p class="lead">Let Know Us in Youtube!</p>
                </div><!-- end title -->

                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="testi-carousel owl-carousel owl-theme">
                            <div class="testimonial clearfix">
                                <div class="desc">
                                    <h3><i class="fa fa-quote-left"></i> HEALING KE PONGANGAN SAMIRONO LERENG MERBABU <br><br>
                                    </h3>
                                    <p class="lead">Dusun Pongangan Desa Wisata Samiro...</p>
                                </div>
                                <div class="testi-meta">
                                    <iframe width="100%" height="auto" src="https://www.youtube.com/embed/eJT6JtgzEKE?si=vz-IlCzDtcFqaUnZ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                                <!-- end testi-meta -->
                            </div>
                            <div class="testimonial clearfix">
                                <div class="desc">
                                    <h3><i class="fa fa-quote-left"></i> Spesial Perform Tari Gambyong Desa Wisata Samirono Kabupaten Semarang

                                    </h3>
                                    <p class="lead">Nguri-nguri Kesenian dan Kebuda...</p>
                                </div>
                                <div class="testi-meta">
                                    <iframe width="100%" height="auto" src="https://www.youtube.com/embed/R0acswwjDt0?si=zwrYT1KpRll6Fqgi" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                                <!-- end testi-meta -->
                            </div>
                            <div class="testimonial clearfix">
                                <div class="desc">
                                    <h3><i class="fa fa-quote-left"></i> DAHSYAT, SAMBUTAN SPESIAL WARGA WATULAWANG DESA WISATA SAMIRONO

                                    </h3>
                                    <p class="lead">Dengan semangat dan kekompakan ...</p>
                                </div>
                                <div class="testi-meta">
                                    <iframe width="100%" height="auto" src="https://www.youtube.com/embed/3V-9zMiydM8?si=4Qx6NH5aXqdoqivy" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                                <!-- end testi-meta -->
                            </div>
                            <!-- end testimonial -->
                        </div><!-- end carousel -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end section -->

        <div id="edukasi" class="parallax section db" style="background-image:url('assets/template/uploads/PR.jpg');">
            <div class="container">
                <div class="section-title text-center">
                    <h3>Datang aja dulu!</h3>
                    <div class="row">
                        <div class="col-12">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31653.972358257353!2d110.43038127247465!3d-7.382275923129093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a7bd672594bdd%3A0x8117b5e373e2447f!2sSamirono%2C%20Kec.%20Getasan%2C%20Kabupaten%20Semarang%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1708435866951!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div><!-- end title -->
            </div><!-- end container -->
        </div><!-- end section -->

        <div class="copyrights">
            <div class="container">
                <div class="footer-distributed">
                    <div class="footer-left">
                        <p class="footer-company-name">The Team. &copy; 2024 <a href="#">Desa Wisata Samirono </a> Design By :
                            <a href="https://html.design/">Angelo Arasy Buana</a>
                        </p>
                    </div>
                </div>
            </div><!-- end container -->
        </div><!-- end copyrights -->


        <div class="zoomin">
            <div class="row">
                <div class="col-12 pt-2">
                    <i class="fa fa-times" id="close"></i>
                </div>
            </div>
            <img alt="" class="rounded" src="{{asset('assets/template/uploads/Artikel 1.png')}}">
        </div>

        <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

        <!-- ALL JS FILES -->
        <script src="{{ asset('assets/template/js/all.js') }}"></script>
        <!-- ALL PLUGINS -->
        <script src="{{ asset('assets/template/js/custom.js') }}"></script>
        <script src="{{ asset('assets/template/js/zenith.js') }}"></script>

        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            .zoomin {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: 9999;
                background-color: rgba(0, 0, 0, 0.8);
                display: none;
            }

            .zoomin img {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                max-width: 100%;
                max-height: 100%;

            }

            .colon1 {
                background: url("/assets/template/uploads/K1.jpg") !important;
                background-size: contain !important;
                background-position: left !important;
                background-repeat: no-repeat !important;
                width: 25% !important;
                height: 200px !important;
                max-height: 200px !important;
            }

            .colon2 {
                background: url("/assets/template/uploads/K2.jpg") !important;
                background-size: contain !important;
                background-position: left !important;
                background-repeat: no-repeat !important;
                width: 25% !important;
                height: 200px !important;
                max-height: 200px !important;
            }

            .colon3 {
                background: url("/assets/template/uploads/K3.jpg") !important;
                background-size: contain !important;
                background-position: left !important;
                background-repeat: no-repeat !important;
                width: 25% !important;
                height: 200px !important;
                max-height: 200px !important;
            }

            .colon4 {
                background: url("/assets/template/uploads/K4.jpg") !important;
                background-size: contain !important;
                background-position: left !important;
                background-repeat: no-repeat !important;
                width: 25% !important;
                height: 200px !important;
                max-height: 200px !important;
            }

            .latarijo,
            .owl-next i,
            .owl-prev i {
                background-color: #12372A !important;
            }

            .desc h3 i {
                color: #3F2305 !important;
            }

            .leads {
                background-color: #12372A !important;
            }

            ::-webkit-scrollbar {
                width: 0px;
            }

            .effect-1:after {
                box-shadow: 0 0 0 2px white !important;
            }
        </style>
        <script>
            $('#default').zenith({
                layout: 'default',
                slideSpeed: 450,
                autoplaySpeed: 2000
            });
        </script>

        <script>
            $(document).ready(function() {
                blogger();

                var count = 0;
                var maxCount = 50000000;
                var step = 1000000;

                function doCount() {
                    if (count <= maxCount) {
                        $('#counter').text(formatNumber(count));
                        count += step;
                        setTimeout(doCount, 100);
                    }
                }

                function formatNumber(number) {
                    return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                }

                doCount();
            });

            $(document).on("click", ".infographic", function() {
                $(".zoomin").css({
                    display: "flex",
                });
            });

            $(document).on("click", "#close", function() {
                $(".zoomin").css({
                    display: "none",
                });
            });

            $(document).on("click", ".zoomin", function() {
                $(".zoomin").css({
                    display: "none",
                });
            });

            $(document).on("click", "#snack", function() {
                location.href = "https://drive.google.com/drive/folders/1vbw8U9g2GI6Lm7Sx_AZ8SOXom_p2_mYc?usp=sharing";
            });

            function blogger() {
                $.ajax({
                    url: 'https://www.googleapis.com/blogger/v3/blogs/1737403564948905376/posts?key=AIzaSyD5XHtATGcOqc09is2J51v1Le_MKk2MuX4',
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        $('#blog_space').empty();
                        $.each(data.items, function(index, value) {
                            var published = new Date(value.published).toLocaleDateString();
                            $('#blog_space').append(
                                `<div class="col-lg-3 col-md-4 col-12 mx-auto">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title font-weight-bold">${value.title}</h4>
                                            <p class="card-text">
                                                <b>${published}</b> - ${value.author.displayName}
                                            </p>
                                            <a href="${value.url}" class="btn btn-primary"  style="background-color: #12372A;">Read More</a>
                                        </div>
                                    </div>
                                </div>`
                            );
                        });

                    }
                })
            }
        </script>

</body>

</html>