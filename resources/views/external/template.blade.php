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
    <header class="header header_style_01">
        <nav class="navbar header-nav navbar-expand-lg">
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

    <div id="insight" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Insight</h3>
                <p class="lead">Artikel tentang Desa Wisata</p>
            </div><!-- end title -->

            <div id="default" class="row clearfix zenith_slider">
                  
				<!--The First row-->  
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 left-row">
					<ul class="insight-left">
						<li class="highlight lhgh" data-index="0">
							<i class="flaticon-wordpress-logo effect-1" ></i>
							<div class="fl-inner">
								<h4>Kenapa Desa?</h4>
								<p>Apa yang kita dapatkan dari desa?</p>
                                <img src="{{ asset('assets/template/uploads/Artkel 1.png') }}" alt="">
							</div>
						</li><!-- .highlight .left-row -->					
					</ul>
				</div><!-- .row .left-row -->

				<!--The Second row-->
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 right-row">
					<ul class="insight-right">
						<li class="highlight rhgh" data-index="4">
							<i class="flaticon-pantone effect-1"></i>							 
							<div class="fr-inner">
								<h4>Desa Wisata Samirono?</h4>
								<p>Apa itu desa wisata?</p>
							</div>
						</li><!-- .highlight .left-row -->
					</ul>
				</div><!-- .row .left-row -->
			  
			</div><!--Highlights close-->
        </div><!-- end container -->
    </div><!-- end section -->

    <div id="edukasi" class="section wb">
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

    <div class="parallax section noover" style="background-image:url('assets/template/uploads/bg_img.jpg');">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-7 col-sm-12">
                    <div class="customwidget text-left">
                        <h1>Download our app</h1>
                        <p>Pellentesque imperdiet molestie erat ac placerat. Nulla consectetur posuere odio. Sed ac ultricies felis. Duis iaculis sem id ante semper posuere. Maecenas vitae mi blandit, tempor libero a, molestie dolor. Pellentesque rutrum sapien vitae ornare aliquet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras id felis rhoncus, ultrices dolor quis, faucibus velit. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                        <ul class="list-inline">
                            <li class="list-inline-item"><i class="flaticon-apple"></i> Available on Apple</li>
                            <li class="list-inline-item"><i class="flaticon-android"></i> Available on Android</li>
                            <li class="list-inline-item"><i class="flaticon-amazon-logo"></i> Available on Amazon</li>
                        </ul><!-- end list -->
                        <a href="#insight" data-scroll class="btn btn-light btn-radius btn-brd">Learn More</a>
                    </div>
                </div><!-- end col -->
                <div class="col-md-6 iphones hidden-sm">
                    <div class="text-center move image-center hidden-sm hidden-xs">
                        <img src="{{ asset('assets/template/uploads/iphones.png') }}" alt="" class="img-fluid wow fadeInUp">
                    </div>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div id="produk" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Produk Olahan</h3>
                <p class="lead">Produk olahan yang ditawarkan oleh Desa Wisata Samirono<br>Produk UMKM dengan menggunakan bahan 100% tanpa pengawet</p>
            </div><!-- end title -->

            <div class="row dev-list text-center">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                    <div class="widget clearfix">
                        <img src="{{ asset('assets/template/uploads/1.jpg') }}" alt="" class="img-fluid rounded-circle">
                        <div class="widget-title">
                            <h3>Snack</h3>
                            <small>Handmade and Crunchy</small>
                        </div>
                        <!-- end title -->
                        <p>Hello guys, I am Soren from Sirbistana. I am senior art director and founder of Violetta.</p>

                        <div class="footer-social">
                            <a href="#" class="btn global-radius"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="btn global-radius"><i class="fa fa-github"></i></a>
                            <a href="#" class="btn global-radius"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="btn global-radius"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div><!--widget -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                    <div class="widget clearfix">
                        <img src="{{ asset('assets/template/uploads/2.jpg') }}" alt="" class="img-fluid rounded-circle">
                        <div class="widget-title">
                            <h3>Cookies</h3>
                            <small>Handmade and Sweet</small>
                        </div>
                        <!-- end title -->
                        <p>I am Soren from Sirbistana. I am senior art director and founder of Violetta.</p>

                        <div class="footer-social">
                            <a href="#" class="btn global-radius"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="btn global-radius"><i class="fa fa-github"></i></a>
                            <a href="#" class="btn global-radius"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="btn global-radius"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div><!--widget -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                    <div class="widget clearfix">
                        <img src="{{ asset('assets/template/uploads/3.jpg') }}" alt="" class="img-fluid rounded-circle">
                        <div class="widget-title">
                            <h3>Minuman</h3>
                            <small>Handmade and Fresh</small>
                        </div>
                        <!-- end title -->
                        <p>Hello guys, I am Soren from Sirbistana. I am senior art director and founder of Violetta.</p>

                        <div class="footer-social">
                            <a href="#" class="btn global-radius"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="btn global-radius"><i class="fa fa-github"></i></a>
                            <a href="#" class="btn global-radius"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="btn global-radius"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div><!--widget -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
    
    <div class="parallax section" style="background-image:url('assets/template/uploads/bg_img_2.jpg');">
        <div class="container">
            <div class="row text-left stat-wrap">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="fa fa-users" aria-hidden="true"></i></span>
                    <p class="stat_count_download">15000</p>
                    <h3>Orang berkunjung</h3>
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="fa fa-usd" aria-hidden="true"></i></span>
                    <p class="stat_count_download">50000000</p>
                    <h3>Pendapatan</h3>
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
                    <p class="stat_count_download">2018</p>
                    <h3>Memulai</h3>
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-windows"></i></span>
                    <p class="stat_count_download">21000</p>
                    <h3>Windows App</h3>
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
                                        <div class="pricing-table-header grd1">
                                            <h2>Paket Pilih Sendiri</h2>
                                            <h3>Dimulai dari <strong>Rp 10.000</strong></h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-insight">
                                            <p>Menawarkan edukasi yang dapat dipilih sendiri dengan harga yang sangat  terjangkau</p>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="#" class="btn btn-dark btn-radius btn-brd grd1 effect-1">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <h2>Paket Harian</h2>
                                            <h3>Dimulai dari <strong>Rp 60.000</strong></h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-insight">
                                            <p>Menawarkan edukasi di Desa Wisata Samirono dengan paket harian yang tentunya menambah ilmu dan dimulai dengan harga terjangkau</p>
                                         </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="#" class="btn btn-dark btn-radius btn-brd grd1 effect-1">Learn More</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <h2>Paket Live-in</h2>
                                            <h3>Dimulai dari <strong>Rp 350.000</strong></h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-insight">
                                            <p>Menawarkan edukasi bersifat menginap. Mendapatkan ilmu yang berguna dan pastinya <strong>akan sangat berguna ilmu tersebut</strong></p>
                                          </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="#" class="btn btn-dark btn-radius btn-brd grd1 effect-1">Learn More</a>
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

    <div id="testimonials" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Happy Clients</h3>
                <p class="lead">We thanks for all our awesome testimonials! There are hundreds of our happy customers! <br>Let's see what others say about Appfast website template!</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="testi-carousel owl-carousel owl-theme">
                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Wonderful kesenian!</h3>Kesenian
                                <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                            </div>
                            <div class="testi-meta">
                                <img src="{{ asset('assets/template/uploads/testi_01.png') }}" alt="" class="img-fluid alignleft">
                                <h4>James Fernando <small>- Manager of Racer</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
                                <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you completed.</p>
                            </div>
                            <div class="testi-meta">
                                <img src="{{ asset('assets/template/uploads/testi_02.png') }}" alt="" class="img-fluid alignleft">
                                <h4>Jacques Philips <small>- Designer</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
                                <p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
                            </div>
                            <div class="testi-meta">
                                <img src="{{ asset('assets/template/uploads/testi_03.png') }}" alt="" class="img-fluid alignleft">
                                <h4>Venanda Mercy <small>- Newyork City</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->
                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Wonderful kesenian!</h3>Kesenian
                                <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                            </div>
                            <div class="testi-meta">
                                <img src="{{ asset('assets/template/uploads/testi_01.png') }}" alt="" class="img-fluid alignleft">
                                <h4>James Fernando <small>- Manager of Racer</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
                                <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you completed.</p>
                            </div>
                            <div class="testi-meta">
                                <img src="{{ asset('assets/template/uploads/testi_02.png') }}" alt="" class="img-fluid alignleft">
                                <h4>Jacques Philips <small>- Designer</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
                                <p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
                            </div>
                            <div class="testi-meta">
                                <img src="{{ asset('assets/template/uploads/testi_03.png') }}" alt="" class="img-fluid alignleft">
                                <h4>Venanda Mercy <small>- Newyork City</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div><!-- end testimonial -->
                    </div><!-- end carousel -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div id="edukasi" class="parallax section db" style="background-image:url('assets/template/uploads/PR.jpg');">
        <div class="container">
            <div class="section-title text-center">
                <h3>Datang aja dulu!</h3>
            </div><!-- end title -->

            <div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="btn-buy apple-button">
                        <a href="#"><i class="flaticon-android alignleft"></i> Download on the <strong>Google Play</strong></a>
                    </div>
                </div><!-- end col --> 
				
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="btn-buy apple-button">
                        <a href="#"><i class="flaticon-apple alignleft"></i> Download on the <strong>App Store</strong></a>
                    </div>
                </div><!-- end col -->  

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="btn-buy apple-button">
                        <a href="#"><i class="flaticon-windows alignleft"></i> Download on the <strong>Windows</strong></a>
                    </div>
                </div><!-- end col -->  
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section --> 
    
    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">                    
                    <p class="footer-company-name">The Team. &copy; 2024 <a href="#">Desa Wisata Samirono </a> Design By : 
					<a href="https://html.design/">Angelo Arasy Buana</a></p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="{{ asset('assets/template/js/all.js') }}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{ asset('assets/template/js/custom.js') }}"></script>
	<script src="{{ asset('assets/template/js/zenith.js') }}"></script>
	<script>
		$('#default').zenith({
			layout: 'default' , 
			slideSpeed: 450, 
			autoplaySpeed: 2000
		});
	</script>

</body>
</html>
