<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>NexusPlus - Classified Ads and Listing Template</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('mainassets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('mainassets/fonts/line-icons.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('mainassets/css/slicknav.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('mainassets/css/color-switcher.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('mainassets/css/animate.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('mainassets/css/owl.carousel.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('mainassets/css/main.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('mainassets/css/responsive.css') }}">
</head>

<body>

    <header id="header-wrap">


        {{-- Include top bar --}}

        @include('inc.topbar')


        {{-- Include nav bar --}}

        @include('inc.navbar')

        <h1> List Post Client </h1>

        <footer>

            <section class="footer-Content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
                            <div class="widget">
                                <div class="footer-logo"><img src="{{ asset('mainassets/img/logo.png') }}"
                                        alt=""></div>
                                <div class="textwidget">
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed
                                        quia
                                        consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt
                                        consectetur,
                                        adipisci velit.</p>
                                </div>
                                <ul class="mt-3 footer-social">
                                    <li><a class="facebook" href="#"><i class="lni-facebook-filled"></i></a>
                                    </li>
                                    <li><a class="twitter" href="#"><i class="lni-twitter-filled"></i></a></li>
                                    <li><a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a></li>
                                    <li><a class="google-plus" href="#"><i class="lni-google-plus"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
                            <div class="widget">
                                <h3 class="block-title">Quick Link</h3>
                                <ul class="menu">
                                    <li><a href="#">- About Us</a></li>
                                    <li><a href="#">- Blog</a></li>
                                    <li><a href="#">- Events</a></li>
                                    <li><a href="#">- Shop</a></li>
                                    <li><a href="#">- FAQ's</a></li>
                                    <li><a href="#">- About Us</a></li>
                                    <li><a href="#">- Blog</a></li>
                                    <li><a href="#">- Events</a></li>
                                    <li><a href="#">- Shop</a></li>
                                    <li><a href="#">- FAQ's</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
                            <div class="widget">
                                <h3 class="block-title">Contact Info</h3>
                                <ul class="contact-footer">
                                    <li>
                                        <strong><i class="lni-phone"></i></strong><span>+1 555 444 66647 <br> +1 555
                                            444
                                            66647</span>
                                    </li>
                                    <li>
                                        <strong><i class="lni-envelope"></i></strong><span><a
                                                href="http://preview.uideck.com/cdn-cgi/l/email-protection"
                                                class="__cf_email__"
                                                data-cfemail="9efdf1f0eafffdeadef3fff7f2b0fdf1f3">[email&#160;protected]</a>
                                            <br> <a href="http://preview.uideck.com/cdn-cgi/l/email-protection"
                                                class="__cf_email__"
                                                data-cfemail="e4979194948b9690a489858d88ca878b89">[email&#160;protected]</a></span>
                                    </li>
                                    <li>
                                        <strong><i class="lni-map-marker"></i></strong><span><a href="#">9870 St
                                                Vincent Place, Glasgow, DC 45 <br>Fr 45</a></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <div id="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="site-info text-center">
                                <p><a target="_blank" href="https://templateshub.net">Templates Hub</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </footer>


        <a href="#" class="back-to-top">
            <i class="lni-chevron-up"></i>
        </a>

        <div id="preloader">
            <div class="loader" id="loader-1"></div>
        </div>



        <script data-cfasync="false"
            src="{{ asset('mainassets/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script>
        <script src="{{ asset('mainassets/js/jquery-min.js') }}"></script>
        <script src="{{ asset('mainassets/js/popper.min.js') }}"></script>
        <script src="{{ asset('mainassets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('mainassets/js/color-switcher.js') }}"></script>
        <script src="{{ asset('mainassets/js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('mainassets/js/waypoints.min.js') }}"></script>
        <script src="{{ asset('mainassets/js/wow.js') }}"></script>
        <script src="{{ asset('mainassets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('mainassets/js/jquery.slicknav.js') }}"></script>
        <script src="{{ asset('mainassets/js/main.js') }}"></script>
        <script src="{{ asset('mainassets/js/form-validator.min.js') }}"></script>
        <script src="{{ asset('mainassets/js/contact-form-script.min.js') }}"></script>
        <script src="{{ asset('mainassets/js/summernote.js') }}"></script>
</body>


</html>
