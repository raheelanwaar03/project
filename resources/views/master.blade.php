<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> @yield('tittle')</title>
    <meta natme="description" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">

    <!-- CSS here -->

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/cssflaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/progressbar_barfiller.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animated-headline.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body>

    <header>
        <x-alert/>

        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header ">
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <!-- <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                                </div>
                            </div> -->
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li><a href="{{ url('/') }}">Home</a></li>
                                                <li><a href="{{ url('packages') }}">Packages</a></li>
                                                <li><a href="{{ url('about ') }}">About US</a></li>
                                                @if (Route::has('login'))
                                                    @auth
                                                        <li><a href="{{ url('account ') }}">Account</a></li>
                                                        <li>
                                                            <x-app-layout>
                                                            </x-app-layout>
                                                        </li>
                                                    @else
                                                        <li class="button-header"><a
                                                                class="btn"href="{{ route('login') }}">Sign In</a></li>
                                                        <li class="button-header margin-left "><a
                                                                href="{{ 'register' }}" class="btn3">Sign Up</a></li>
                                                    @endauth
                                                @endif
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="ticker">
                                        <div class="tittle">
                                            <h5 class="break" style="color: white;"> Alert</h5>
                                        </div>
                                        <div class="news">
                                            <marquee>
                                                <p class="info" style="color: white; ">Lorem ipsum dolor, sit amet
                                                    consectetur adipisicing elit. Omnis ipsam laborum suscipit blanditiis,
                                                    voluptate est molestiae architecto soluta? Perferendis nobis, aspernatur
                                                    recusandae a nisi enim excepturi consequuntur optio provident
                                                    omnis qui neque amet. Maiores, a! Quibusdam corporis adipisci dicta
                                                    doloremque, consequatur quae nisi magni, obcaecati natus quisquam
                                                    reiciendis, dolore neque?</p>
                                            </marquee>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @section('banner')
                            @show()
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        <!-- Header End -->
    </header>


    @section('content')
    @show

    <footer>
        <div class="footer-wrappr " data-background="{{ asset('assets/img/gallery/footer-bg.png') }}">
            <div class="footer-area footer-padding ">
                <div class="container">
                    <div class="row d-flex justify-content-between">
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <!-- logo -->
                                <!-- <div class="footer-logo mb-25">
                                <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                            </div> -->
                                <div class="footer-tittle mb-50">
                                    <p>Subscribe our newsletter to get updates about our services</p>
                                </div>
                                <!-- Form -->
                                <div class="footer-form">
                                    <div id="mc_embed_signup">
                                        <form target="_blank"
                                            action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                            method="get" class="subscribe_form relative mail_part" novalidate="true">
                                            <input type="email" name="EMAIL" id="newsletter-form-email"
                                                placeholder=" Email Address " class="placeholder hide-on-focus"
                                                onfocus="this.placeholder = ''"
                                                onblur="this.placeholder = 'Your email address'">
                                            <div class="form-icon">
                                                <button type="submit" name="submit" id="newsletter-submit"
                                                    class="email_icon newsletter-submit button-contactForm">
                                                    Subscribe
                                                </button>
                                            </div>
                                            <div class="mt-10 info"></div>
                                        </form>
                                    </div>
                                </div>
                                <!-- social -->

                            </div>
                        </div>
                        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1"></div>
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Company</h4>
                                    <ul>
                                        <li><a href="{{ url('/') }}">HOME</a></li>
                                        <li><a href="{{ url('packages') }}">PACKAGES</a></li>
                                        <li><a href="{{ url('about ') }}">ABOUT US</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <!-- <h4>Quick Links</h4>
                                <ul>
                                <li>
                                    <a href="{{ route('login') }}"> Sign In</a></li>
                                    <li><a href="{{ 'register' }}">Sign Up</a></li>

                                </ul> -->
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </footer>
    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

    <script src="{{ asset('assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{ asset('assets/js/jquery.slicknav.min.js') }}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/animated.headline.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.js') }}"></script>

    <!-- Date Picker -->
    <script src="{{ asset('assets/js/gijgo.min.js') }}"></script>

    <!-- Video bg -->
    <script src="{{ asset('assets/js/jquery.vide.js') }}"></script>

    <!-- Nice-select, sticky -->
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
    <!-- Progress -->
    <script src="{{ asset('assets/js/jquery.barfiller.js') }}"></script>

    <!-- counter , waypoint,Hover Direction -->
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets/js/hover-direction-snake.min.js') }}"></script>

    <!-- contact js -->
    <script src="{{ asset('assets/js/contact.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.form.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/mail-script.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        "{{ asset('assets/uikit/js/uikit.js') }}"
    </script>
    <script>
        "{{ asset('assets/uikit/js/uikit.min.js') }}"
    </script>
    <script>
        "{{ asset('assets/uikit/js/uikit-icons.js') }}"
    </script>
    <script>
        "{{ asset('assets/uikit/js/uikit-icons.min.js') }}"
    </script>
</body>

</html>
