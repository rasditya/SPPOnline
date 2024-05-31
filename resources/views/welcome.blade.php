<!DOCTYPE html>
<html lang="en">
<head >
    <!-- Meta tags dan link CSS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <title>SPP - Online</title>
    <link rel="stylesheet" type="text/css" href="{{asset('tempalate_homepage/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('tempalate_homepage/assets/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('tempalate_homepage/assets/css/templatemo-hexashop.css')}}">
    <link rel="stylesheet" href="{{asset('tempalate_homepage/assets/css/owl-carousel.css')}}">
    <link rel="stylesheet" href="{{asset('tempalate_homepage/assets/css/lightbox.css')}}">
    <style>
        .logo img {
            max-width: 200px; /* Ubah nilai ini sesuai kebutuhan */
            height: auto;
        }
        #dec{
            color: white;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 15px;
        }
        #preloader {
            position: fixed;
            left: 0;
            top: 0;
            z-index: 9999;
            width: 100%;
            height: 100%;
            overflow: visible;
            background: #fff url('path/to/loader.gif') no-repeat center center;
        }
        #preloader.hidden {
            visibility: hidden;
            opacity: 0;
            transition: visibility 0s 2s, opacity 2s linear;
        }
        .team-wrapper {
            position: relative;
            overflow: hidden;
            width: 100%;
        }
        .team-scroll {
            display: flex;
            overflow-x: auto;
            scroll-behavior: smooth;
            -webkit-overflow-scrolling: touch;
        }
        .team-item {
            min-width: 300px; /* Adjust the width as necessary */
            flex: 0 0 auto;
            margin-right: 10px;
        }
        .team-scroll::-webkit-scrollbar {
            height: 10px;
        }
        .team-scroll::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 5px;
        }
        .team-scroll::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
    </style>
</head>
<body>
    <!-- Konten halaman -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky" >
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Menu Start ***** -->
                        <div class="logo">
                            <a href="#"><img src="\tempalate_homepage\assets\images\logog.png" alt="Logo"></a>
                        </div>
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="http://127.0.0.1:8000/" >Home</a></li>
                            <li class="scroll-to-section"><a href="#our-team" class="active">Developer</a></li>
                            <li class="scroll-to-section"><a href="#about" class="active">Abous</a></li>
                            <li class="scroll-to-section"><a href="/sesi"class="active">Login</a></li>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading about-page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>SPP Online</h2>
                        <span>Bayar SPP Mudah &amp; Tanpa Harus Kesekolah</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <div class="about-us" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-image">
                        <img src="\tempalate_homepage\assets\images\about.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <h4>SPP &amp; Online</h4>
                        <div class="quote">
                            <i class="fa fa-quote-left"></i><p>Bayar SPP kini lebih praktis dengan sistem pembayaran online kami. Aman, cepat, dan tanpa ribet.</p>
                        </div>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** About Area Ends ***** -->

    <!-- ***** Our Team Area Starts ***** -->
    <section class="our-team" id="our-team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Tim Pembuat</h2>
                        <span>Berikut merupakan anggota pendiri dari SPP Online yang terdiri dari Ketua, Front & Back end, Proposal Report </span>
                    </div>
                </div>
                <div class="team-wrapper">
                    <div class="team-scroll">
                        <div class="col-lg-4 team-item">
                            <div class="thumb">
                                <div class="hover-effect">
                                    <div class="inner-content">
                                        <ul>
                                            <h5 id="dec">"Rasya Aditya Absen 26"</h5>
                                        </ul>
                                    </div>
                                </div>
                                <img src="\tempalate_homepage\assets\images\rasyaimg.jpg" alt="Rasya Aditya">
                            </div>
                            <div class="down-content">
                                <h4>Rasya Aditya</h4>
                                <span>Front End & Back end</span>
                            </div>
                        </div>
                        <div class="col-lg-4 team-item">
                            <div class="thumb">
                                <div class="hover-effect">
                                    <div class="inner-content">
                                        <ul>
                                            <h5 id="dec">"Argya Lukman Absen 4"</h5>
                                        </ul>
                                    </div>
                                </div>
                                <img src="\tempalate_homepage\assets\images\argyaimg.jpg" alt="Argya Lukman">
                            </div>
                            <div class="down-content">
                                <h4>Argya Lukman</h4>
                                <span>Team Leader</span>
                            </div>
                        </div>
                        <div class="col-lg-4 team-item">
                            <div class="thumb">
                                <div class="hover-effect">
                                    <div class="inner-content">
                                        <ul>
                                            <h5 id="dec">"Ammar Habibie Absen 2"</h5>
                                        </ul>
                                    </div>
                                </div>
                                <img src="\tempalate_homepage\assets\images\ammarimg.jpg" alt="Ammar Habibi">
                            </div>
                            <div class="down-content">
                                <h4>Ammar Habibi</h4>
                                <span>Front end</span>
                            </div>
                        </div>
                        <div class="col-lg-4 team-item">
                            <div class="thumb">
                                <div class="hover-effect">
                                    <div class="inner-content">
                                        <ul>
                                            <h5 id="dec">"Zahra Sabrina Absen 32"</h5>
                                        </ul>
                                    </div>
                                </div>
                                <img src="\tempalate_homepage\assets\images\zaraimg.jpg" alt="Zahra Sabrina Alghanita">
                            </div>
                            <div class="down-content">
                                <h4>Zahra Sabrina Alghanita</h4>
                                <span>Report Proposal</span>
                            </div>
                        </div>
                        <div class="col-lg-4 team-item">
                            <div class="thumb">
                                <div class="hover-effect">
                                    <div class="inner-content">
                                        <ul>
                                            <h5 id="dec">"Aluna Anandita Absen 1"</h5>
                                        </ul>
                                    </div>
                                </div>
                                <img src="\tempalate_homepage\assets\images\alunaimg.jpg" alt="Aluna Anandita">
                            </div>
                            <div class="down-content">
                                <h4>Aluna Anandita</h4>
                                <span>Report Proposal</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Our Team Area Ends ***** -->

    <!-- ***** Services Area Starts ***** -->
    <section class="our-services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Pelayanan Kami</h2>
                        <span>Kami menyediakan pelayanan pembayaran SPP online, Anda tidak perlu keluar rumah untuk membayar hanya dengan internet SPP <b>Lunas!!</b></span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-item">
                        <h4>Spp Onlinee</h4>
                        <p>Lorem ipsum dolor sit amet, consecteturti adipiscing elit, sed do eiusmod temp incididunt ut labore, et dolore quis ipsum suspend.</b></p>
                        
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-item">
                        <h4>Pengecekan Data</h4>
                        <p>Lorem ipsum dolor sit amet, consecteturti adipiscing elit, sed do eiusmod temp incididunt ut labore, et dolore quis ipsum suspend.</p>
                        
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-item">
                        <h4>Absen & Media Belajar</h4>
                        <p>Lorem ipsum dolor sit amet, consecteturti adipiscing elit, sed do eiusmod temp incididunt ut labore, et dolore quis ipsum suspend.</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Services Area Ends ***** -->

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="first-item">
                        <ul>
                            <li><a href="#">Indonesia SMK Telkom Purwokerto</a></li>
                            <li><a href="#">SPPOnline@company.com</a></li>
                            <li><a href="#">010-020-0340</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h4>Menu Categories</h4>
                    <ul>
                        <li><a href="#top">Home</a></li>
                        <li><a href="/dashboard">Dashboard</a></li>
                        <li><a href="/sesi">Login</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#top">Homepage</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#our-team">Developer</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Help &amp; Information</h4>
                    <ul>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">FAQ's</a></li>
                    </ul>
                </div>
               
                <div class="col-lg-12">
                    <div class="under-footer">
                        <p>Copyright © 2022 SPPOnline Co., Ltd. All Rights Reserved. 
                        
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
 <!-- JavaScript -->
 <script src="{{asset('tempalate_homepage/assets/js/jquery-2.1.0.min.js')}}"></script>
 <script src="{{asset('tempalate_homepage/assets/js/popper.js')}}"></script>
 <script src="{{asset('tempalate_homepage/assets/js/bootstrap.min.js')}}"></script>
 <script src="{{asset('tempalate_homepage/assets/js/owl-carousel.js')}}"></script>
 <script src="{{asset('tempalate_homepage/assets/js/accordions.js')}}"></script>
 <script src="{{asset('tempalate_homepage/assets/js/datepicker.js')}}"></script>
 <script src="{{asset('tempalate_homepage/assets/js/scrollreveal.min.js')}}"></script>
 <script src="{{asset('tempalate_homepage/assets/js/waypoints.min.js')}}"></script>
 <script src="{{asset('tempalate_homepage/assets/js/jquery.counterup.min.js')}}"></script>
 <script src="{{asset('tempalate_homepage/assets/js/imgfix.min.js')}}"></script>
 <script src="{{asset('tempalate_homepage/assets/js/slick.js')}}"></script>
 <script src="{{asset('tempalate_homepage/assets/js/lightbox.js')}}"></script>
 <script src="{{asset('tempalate_homepage/assets/js/isotope.js')}}"></script>
 <script src="{{asset('tempalate_homepage/assets/js/custom.js')}}"></script>

 <script>
     // Menambahkan console log untuk debugging
     $(window).on('load', function() {
         console.log("Window loaded");
         $('#preloader').addClass('hidden');
         $('#main-content').fadeIn(200);
         console.log("Preloader should be hidden now");
     });
 </script>
</body>
</html>