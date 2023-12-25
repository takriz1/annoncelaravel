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

        <!-- Topbar --->
        @include('inc.topbar')
        <nav class="navbar navbar-expand-lg bg-white fixed-top scrolling-navbar">
            <div class="container">

                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar"
                        aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        <span class="lni-menu"></span>
                        <span class="lni-menu"></span>
                        <span class="lni-menu"></span>
                    </button>
                    <a href="/user/home" class="navbar-brand"><img src="{{ asset('mainassets/img/logo.png') }}"
                            alt=""></a>
                </div>
                <div class="collapse navbar-collapse" id="main-navbar">
                    <ul class="navbar-nav mr-auto w-100 justify-content-center">
                        <li class="nav-item dropdown active">
                            <a class="nav-link dropdown-toggle" href="/user/home" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/categories">
                                Categories
                            </a>
                        </li>
                        @if (Auth::check())
                            <li class="nav-item">
                                <a class="nav-link" href="/user/account">
                                    MyAccount
                                </a>
                            </li>.
                        @endif
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">
                                Contact
                            </a>
                        </li>
                    </ul>-
                    @if (Auth::check())
                        <div class="post-btn">
                            <a class="btn btn-common" href="/user/post/getAddPostForm"><i class="lni-pencil-alt"></i>
                                Post an
                                Ad</a>
                        </div>
                    @endif
                </div>
            </div>


        </nav>

    </header>
    <div class="page-header" style="background: url(assets/img/banner1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Details</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">Home /</a></li>
                            <li class="current">Details</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-padding">
        <div class="container">

            <div class="product-info row">
                <div class="col-lg-8 col-md-12 col-xs-12">
                    <div class="ads-details-wrapper">
                        <div id="owl-demo" class="owl-carousel owl-theme owl-loaded owl-drag">



                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                    style="transform: translate3d(-1520px, 0px, 0px); transition: all 0.35s ease 0s; width: 5320px;">
                                    <div class="owl-item cloned" style="width: 730px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="product-img">
                                                <img class="img-fluid"
                                                    src="{{ asset('uploads/products') }}/{{ $product->image }}"
                                                    alt="">
                                            </div>
                                            <span class="price">{{ $product->price }} TND</span>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 730px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="product-img">
                                                <img class="img-fluid"
                                                    src="{{ asset('uploads/products') }}/{{ $product->image }}"
                                                    alt="">
                                            </div>
                                            <span class="price">{{ $product->price }} TND</span>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 730px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="product-img">
                                                <img class="img-fluid"
                                                    src="{{ asset('uploads/products') }}/{{ $product->image }}"
                                                    alt="">
                                            </div>
                                            <span class="price">{{ $product->price }} TND</span>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 730px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="product-img">
                                                <img class="img-fluid"
                                                    src="{{ asset('uploads/products') }}/{{ $product->image }}"
                                                    alt="">
                                            </div>
                                            <span class="price">{{ $product->price }} TND</span>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 730px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="product-img">
                                                <img class="img-fluid"
                                                    src="{{ asset('uploads/products') }}/{{ $product->image }}"
                                                    alt="">
                                            </div>
                                            <span class="price">{{ $product->price }} TND</span>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 730px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="product-img">
                                                <img class="img-fluid"
                                                    src="{{ asset('uploads/products') }}/{{ $product->image }}"
                                                    alt="">
                                            </div>
                                            <span class="price">{{ $product->price }} TND</span>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 730px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="product-img">
                                                <img class="img-fluid"
                                                    src="{{ asset('uploads/products') }}/{{ $product->image }}"
                                                    alt="">
                                            </div>
                                            <span class="price">{{ $product->price }} TND</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-nav disabled">
                                <div class="owl-prev"><i class="lni-chevron-left"></i></div>
                                <div class="owl-next"><i class="lni-chevron-right"></i></div>
                            </div>
                            <div class="owl-dots">
                                <div class="owl-dot active"><span></span></div>
                                <div class="owl-dot"><span></span></div>
                                <div class="owl-dot"><span></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="details-box">
                        <div class="ads-details-info">
                            <h2>{{ $product->name }}</h2>
                            <div class="details-meta">
                                <span><a href="#"><i class="lni-alarm-clock"></i>
                                        {{ $product->created_at }}</a></span>

                            </div>
                            <p class="mb-4">{{ $product->description }}.</p>
                            <h4 class="title-small mb-3">Specification:</h4>
                            <ul class="list-specification">
                                <li><i class="lni-check-mark-circle"></i> 256GB PCIe flash storage</li>
                                <li><i class="lni-check-mark-circle"></i> 2.7 GHz dual-core Intel Core i5</li>
                                <li><i class="lni-check-mark-circle"></i> Turbo Boost up to 3.1GHz</li>
                                <li><i class="lni-check-mark-circle"></i> Intel Iris Graphics 6100</li>
                                <li><i class="lni-check-mark-circle"></i> 8GB memory</li>
                                <li><i class="lni-check-mark-circle"></i> 10 hour battery life</li>
                                <li><i class="lni-check-mark-circle"></i> 13.3" Retina Display</li>
                                <li><i class="lni-check-mark-circle"></i> 1 Year international warranty</li>
                            </ul>
                            <p class="mb-4">
                                Up for sale we have a vintage Raleigh Sport Men’s Bicycle. This bike does have some
                                general wear and surface corrosion on some of the parts but is overall in good shape. It
                                has been checked out and does work. Brakes and gears work. Seat is fully intact. Frame
                                and fenders are in nice shape with minimal wear. A few minor dents in the fenders but
                                most of the paint is intact.
                            </p>
                        </div>
                        <div class="tag-bottom">
                            <div class="float-left">
                                <ul class="advertisement">
                                    <li>
                                        <p><strong><i class="lni-folder"></i> Categories:</strong> <a
                                                href="#">{{ $product->category->libelle_c }}</a></p>
                                    </li>

                                </ul>
                            </div>
                            <div class="float-right">
                                <div class="share">
                                    <div class="social-link">
                                        <a class="facebook" data-toggle="tooltip" data-placement="top"
                                            title="" href="#" data-original-title="facebook"><i
                                                class="lni-facebook-filled"></i></a>
                                        <a class="twitter" data-toggle="tooltip" data-placement="top" title=""
                                            href="#" data-original-title="twitter"><i
                                                class="lni-twitter-filled"></i></a>
                                        <a class="linkedin" data-toggle="tooltip" data-placement="top"
                                            title="" href="#" data-original-title="linkedin"><i
                                                class="lni-linkedin-fill"></i></a>
                                        <a class="google" data-toggle="tooltip" data-placement="top" title=""
                                            href="#" data-original-title="google plus"><i
                                                class="lni-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>



    <footer>

        <section class="footer-Content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
                        <div class="widget">
                            <div class="footer-logo"><img src="{{ asset('mainassets/img/logo.png') }}"
                                    alt="">
                            </div>
                            <div class="textwidget">
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed
                                    quia
                                    consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt
                                    consectetur,
                                    adipisci velit.</p>
                            </div>
                            <ul class="mt-3 footer-social">
                                <li><a class="facebook" href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a class="twitter" href="#"><i class="lni-twitter-filled"></i></a></li>
                                <li><a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a></li>
                                <li><a class="google-plus" href="#"><i class="lni-google-plus"></i></a></li>
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
                                            data-cfemail="cdaea2a3b9acaeb98da0aca4a1e3aea2a0">[email&#160;protected]</a>
                                        <br> <a href="http://preview.uideck.com/cdn-cgi/l/email-protection"
                                            class="__cf_email__"
                                            data-cfemail="1f6c6a6f6f706d6b5f727e7673317c7072">[email&#160;protected]</a></span>
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


    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
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


    <script>
        $(document).ready(function() {






        });
    </script>


</body>

</html>
