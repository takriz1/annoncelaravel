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
        <!-- Navbar -->
        @include('inc.navbar')




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

                @foreach ($product as $p)
                    <div class="product-info row">
                        <div class="col-lg-8 col-md-12 col-xs-12">
                            <div class="ads-details-wrapper">
                                <div class="item">
                                    <div class="product-img">
                                        <img class="" src="{{ asset('uploads/products/') }}/{{ $p->image }}"
                                            alt="" width="250">
                                    </div>
                                    <span class="price">{{ $p->price }}TND</span>
                                </div>
                            </div>
                            <div class="details-box">
                                <div class="ads-details-info">
                                    <h2>{{ $p->name }}</h2>
                                    <p class="mb-8">{{ $p->description }}.</p>
                                </div>
                                <div class="tag-bottom">
                                    <div class="float-left">
                                        <ul class="advertisement">
                                            <li>
                                                <p><strong><i class="lni-folder"></i> Categories:</strong> <a
                                                        href="#">{{ $p->category->libelle_c }}</a></p>
                                            </li>
                                            <li>
                                                <p><strong><i class="lni-archive"></i> Condition:</strong> New</p>
                                            </li>
                                            <li>
                                                <p><strong><i class="lni-package"></i> Brand:</strong> <a
                                                        href="#">Apple</a></p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="float-right">
                                        <div class="share">
                                            <div class="social-link">
                                                <a class="facebook" data-toggle="tooltip" data-placement="top"
                                                    title="facebook" href="#"><i
                                                        class="lni-facebook-filled"></i></a>
                                                <a class="twitter" data-toggle="tooltip" data-placement="top"
                                                    title="twitter" href="#"><i
                                                        class="lni-twitter-filled"></i></a>
                                                <a class="linkedin" data-toggle="tooltip" data-placement="top"
                                                    title="linkedin" href="#"><i
                                                        class="lni-linkedin-fill"></i></a>
                                                <a class="google" data-toggle="tooltip" data-placement="top"
                                                    title="google plus" href="#"><i
                                                        class="lni-google-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-xs-12">

                            <aside class="details-sidebar">
                                <div class="widget">
                                    <h4 class="widget-title">Ad Posted By</h4>
                                    <div class="agent-inner">
                                        <div class="agent-title">
                                            <div class="agent-photo">
                                                <a href="#"><img src="assets/img/productinfo/agent.jpg"
                                                        alt=""></a>
                                            </div>
                                            <div class="agent-details">
                                                <h3><a href="#">Tahmina Anny</a></h3>
                                                <span><i class="lni-phone-handset"></i>(123) 123-456</span>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Your Email">
                                        <input type="text" class="form-control" placeholder="Your Phone">
                                        <p>I'm interested in this property [ID 123456] and I'd like to know more
                                            details.
                                        </p>
                                        <button class="btn btn-common fullwidth mt-4">Send Message</button>
                                    </div>
                                </div>

                                <div class="widget">
                                    <h4 class="widget-title">More Ads From Seller</h4>
                                    <ul class="posts-list">
                                        <li>
                                            <div class="widget-thumb">
                                                <a href="#"><img src="assets/img/details/img1.jpg"
                                                        alt="" /></a>
                                            </div>
                                            <div class="widget-content">
                                                <h4><a href="#">Little Harbor Yacht 38</a></h4>
                                                <div class="meta-tag">
                                                    <span>
                                                        <a href="#"><i class="lni-user"></i> Smith</a>
                                                    </span>
                                                    <span>
                                                        <a href="#"><i class="lni-map-marker"></i> New Your</a>
                                                    </span>
                                                    <span>
                                                        <a href="#"><i class="lni-tag"></i> Radio</a>
                                                    </span>
                                                </div>
                                                <h4 class="price">$480.00</h4>
                                            </div>
                                            <div class="clearfix"></div>
                                        </li>
                                        <li>
                                            <div class="widget-thumb">
                                                <a href="#"><img src="assets/img/details/img2.jpg"
                                                        alt="" /></a>
                                            </div>
                                            <div class="widget-content">
                                                <h4><a href="#">Little Harbor Yacht 38</a></h4>
                                                <div class="meta-tag">
                                                    <span>
                                                        <a href="#"><i class="lni-user"></i> Smith</a>
                                                    </span>
                                                    <span>
                                                        <a href="#"><i class="lni-map-marker"></i> New Your</a>
                                                    </span>
                                                    <span>
                                                        <a href="#"><i class="lni-tag"></i> Radio</a>
                                                    </span>
                                                </div>
                                                <h4 class="price">$480.00</h4>
                                            </div>
                                            <div class="clearfix"></div>
                                        </li>
                                        <li>
                                            <div class="widget-thumb">
                                                <a href="#"><img src="assets/img/details/img3.jpg"
                                                        alt="" /></a>
                                            </div>
                                            <div class="widget-content">
                                                <h4><a href="#">Little Harbor Yacht 38</a></h4>
                                                <div class="meta-tag">
                                                    <span>
                                                        <a href="#"><i class="lni-user"></i> Smith</a>
                                                    </span>
                                                    <span>
                                                        <a href="#"><i class="lni-map-marker"></i> New Your</a>
                                                    </span>
                                                    <span>
                                                        <a href="#"><i class="lni-tag"></i> Radio</a>
                                                    </span>
                                                </div>
                                                <h4 class="price">$480.00</h4>
                                            </div>
                                            <div class="clearfix"></div>
                                        </li>
                                        <li>
                                            <div class="widget-thumb">
                                                <a href="#"><img src="assets/img/details/img4.jpg"
                                                        alt="" /></a>
                                            </div>
                                            <div class="widget-content">
                                                <h4><a href="#">Little Harbor Yacht 38</a></h4>
                                                <div class="meta-tag">
                                                    <span>
                                                        <a href="#"><i class="lni-user"></i> Smith</a>
                                                    </span>
                                                    <span>
                                                        <a href="#"><i class="lni-map-marker"></i> New Your</a>
                                                    </span>
                                                    <span>
                                                        <a href="#"><i class="lni-tag"></i> Radio</a>
                                                    </span>
                                                </div>
                                                <h4 class="price">$480.00</h4>
                                            </div>
                                            <div class="clearfix"></div>
                                        </li>
                                        <li>
                                            <div class="widget-thumb">
                                                <a href="#"><img src="assets/img/details/img5.jpg"
                                                        alt="" /></a>
                                            </div>
                                            <div class="widget-content">
                                                <h4><a href="#">Little Harbor Yacht 38</a></h4>
                                                <div class="meta-tag">
                                                    <span>
                                                        <a href="#"><i class="lni-user"></i> Smith</a>
                                                    </span>
                                                    <span>
                                                        <a href="#"><i class="lni-map-marker"></i> New Your</a>
                                                    </span>
                                                    <span>
                                                        <a href="#"><i class="lni-tag"></i> Radio</a>
                                                    </span>
                                                </div>
                                                <h4 class="price">$480.00</h4>
                                            </div>
                                            <div class="clearfix"></div>
                                        </li>
                                    </ul>
                                </div>
                            </aside>

                        </div>
                    </div>
                @endforeach

            </div>
        </div>


        <section class="subscribes section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="subscribes-inner">
                            <div class="icon">
                                <i class="lni-pointer"></i>
                            </div>
                            <div class="sub-text">
                                <h3>Subscribe to Newsletter</h3>
                                <p>and receive new ads in inbox</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <form>
                            <div class="subscribe">
                                <input class="form-control" name="EMAIL" placeholder="Enter your Email"
                                    required="" type="email">
                                <button class="btn btn-common" type="submit">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>



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
</body>

</html>
