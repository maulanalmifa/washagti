<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Washagti - @yield('judul')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/themify-icons.css">
    <link rel="stylesheet" href="/css/nice-select.css">
    <link rel="stylesheet" href="/css/flaticon.css">
    <link rel="stylesheet" href="/css/gijgo.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/slicknav.css">
    <link rel="stylesheet" href="/css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div class="header-top_area">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-md-6 ">
                            <div class="social_media_links">
                                <a href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="short_contact_list">
                                <ul>
                                    <li><a href="#"> <i class="fa fa-envelope"></i> info@washagti.com</a></li>
                                    <li><a href="#"> <i class="fa fa-phone"></i> 081359XXX</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-4 col-lg-5">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="/">Home</a></li>
                                        <li><a href="/estimasi">Estimasi</a></li>
                                        <li><a href="/blog">Blog</a></li>
                                        <li><a href="/tentang">Tentang</a></li>
                                        <!-- <li><a href="/login">Login</a></li> -->
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 d-none d-lg-block">
                        <form action="pesanan/cek" method="get">
                            <div class="input-group-icon mt-7">
							    <div class="icon"><i class="fa fa-search" aria-hidden="true"></i></div>
								    <input type="text" name="cek" placeholder="Cek Pesanan" onfocus="this.placeholder = ''"
									onblur="this.placeholder = 'Cek Pesanan'" class="single-input">
							    </div>
                                <input type="submit" value="Cek" class="genric-btn info radius">
                            </div>
                        </form>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="Appointment">
                                <div class="book_btn d-none d-lg-block">
                                    <a class="popup-with-form" href="#test-form">Laundry Sekarang!</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- content start -->
    @yield('konten')
    <!-- content end -->

<!-- footer start -->
    <footer class="footer">
            <div class="footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-md-6 col-lg-4">
                            <div class="footer_widget">
                                <div class="footer_logo">
                                    <a href="#">
                                        <img src="/img/footer_logo.png" alt="">
                                    </a>
                                </div>
                                <p>
                                        Laundry paling sakti se-Malang Raya
                                        Ada 16 cabang yang tersebar di seluruh Malang Raya
                                </p>
                                <div class="socail_links">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="ti-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ti-twitter-alt"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
    
                            </div>
                        </div>
                        <div class="col-xl-2 offset-xl-1 col-md-6 col-lg-3">
                            <div class="footer_widget">
                                <h3 class="footer_title">
                                     Layanan   
                                </h3>
                                <ul>
                                    <li><a href="#">Cuci Basah</a></li>
                                    <li><a href="#">Cuci Kering</a></li>
                                    <li><a href="#">Cuci Kering Setrika</a></li>
                                    <li><a href="#">Cuci Sepatu</a></li>
                                    <li><a href="#">Setrika</a></li>
                                </ul>
    
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-6 col-lg-2">
                            <div class="footer_widget">
                                <h3 class="footer_title">
                                        Useful Links
                                </h3>
                                <ul>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#"> Contact</a></li>
                                    <li><a href="#"> Appointment</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-lg-3">
                            <div class="footer_widget">
                                <h3 class="footer_title">
                                        Address
                                </h3>
                                <p>
                                    Jl. Semarang No. 5 Malang <br>
                                    081359XXXX <br>
                                    info@washagti.com
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy-right_text">
                <div class="container">
                    <div class="footer_border"></div>
                    <div class="row">
                        <div class="col-xl-12">
                            <p class="copy_right text-center">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
<!-- footer end  -->
    <!-- link that opens popup -->

    <!-- form itself end-->
    <form id="test-form" class="white-popup-block mfp-hide" action="pesanan/tambah" method="post">
        <div class="popup_box ">
            <div class="popup_inner">
                <h3>Laundry Sekarang!</h3>
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-xl-6">
                            <input type="text"  placeholder="Nama" name="nama">
                        </div>
                        <div class="col-xl-6">
                            <input type="tel"  placeholder="Nomor Telepon" name="telpon">
                        </div>
                        <div class="col-xl-12">
                            <input type="text"  placeholder="Alamat" name="alamat">
                        </div>
                        <div class="col-xl-6">
                            <select class="form-select wide" id="default-select" class="" name="jenis">
                            
                                <option data-display="Pilih Layanan">Layanan</option>
                                <option value="Cuci Basah">Cuci Basah</option>
                                <option value="Cuci Kering">Cuci Kering</option>
                                <option value="Cuci Kering Setrika">Cuci Kering Setrika</option>
                                <option value="Cuci Sepatu">Cuci Sepatu</option>
                                <option value="Setrika">Setrika</option>
                            </select>
                        </div>
                        <div class="col-xl-6">
                            <select class="form-select wide" id="default-select" class="" name="kecepatan">
                                <option data-display="Jenis Laundry">Jenis</option>
                                <option value="Standar">Standar</option>
                                <option value="Kilat">Kilat</option>
                            </select>
                        </div>
                        <div class="col-xl-12">
                            <button type="submit" class="boxed-btn3">Laundry Sekarang</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </form>
    <!-- form itself end -->

    <!-- JS here -->
    <script src="/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/isotope.pkgd.min.js"></script>
    <script src="/js/ajax-form.js"></script>
    <script src="/js/waypoints.min.js"></script>
    <script src="/js/jquery.counterup.min.js"></script>
    <script src="/js/imagesloaded.pkgd.min.js"></script>
    <script src="/js/scrollIt.js"></script>
    <script src="/js/jquery.scrollUp.min.js"></script>
    <script src="/js/wow.min.js"></script>
    <script src="/js/nice-select.min.js"></script>
    <script src="/js/jquery.slicknav.min.js"></script>
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <script src="/js/plugins.js"></script>
    <script src="/js/gijgo.min.js"></script>
    <!--contact js-->
    <script src="/js/contact.js"></script>
    <script src="/js/jquery.ajaxchimp.min.js"></script>
    <script src="/js/jquery.form.js"></script>
    <script src="/js/jquery.validate.min.js"></script>
    <script src="/js/mail-script.js"></script>

    <script src="/js/main.js"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>'
            }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>'
            }

        });
    $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
    </script>
</body>

</html>