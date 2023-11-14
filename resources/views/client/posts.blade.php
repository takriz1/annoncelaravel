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
                            <h2 class="product-title">My Ads</h2>
                            <ol class="breadcrumb">
                                <li><a href="#">Home /</a></li>
                                <li class="current">My Ads</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div id="content" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-3 page-sidebar">
                        <aside>
                            <div class="sidebar-box">
                                <div class="user">
                                    <figure>
                                        <a href="#"><img src="{{ asset('mainassets/img/author/img1.jpg') }}"
                                                alt=""></a>
                                    </figure>
                                    <div class="usercontent">
                                        <h3> {{ Auth::user()->name }}</h3>
                                        <h4>Client</h4>
                                    </div>
                                </div>
                                <nav class="navdashboard">
                                    <ul>
                                        <li>
                                            <a href="dashboard.html">
                                                <i class="lni-dashboard"></i>
                                                <span>Dashboard</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="account-profile-setting.html">
                                                <i class="lni-cog"></i>
                                                <span>Profile Settings</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="active" href="account-myads.html">
                                                <i class="lni-layers"></i>
                                                <span>My Ads</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="offermessages.html">
                                                <i class="lni-envelope"></i>
                                                <span>Offers/Messages</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="payments.html">
                                                <i class="lni-wallet"></i>
                                                <span>Payments</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="account-favourite-ads.html">
                                                <i class="lni-heart"></i>
                                                <span>My Favourites</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="privacy-setting.html">
                                                <i class="lni-star"></i>
                                                <span>Privacy Settings</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="lni-enter"></i>
                                                <span>Logout</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="widget">
                                <h4 class="widget-title">Advertisement</h4>
                                <div class="add-box">
                                    <img class="img-fluid" src="{{ asset('mainassets/img/img1.jpg') }}" alt="">
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="col-sm-12 col-md-8 col-lg-9">
                        <div class="page-content">
                            <div class="inner-box">
                                <div class="dashboard-box">
                                    <h2 class="dashbord-title">My Ads</h2>
                                </div>
                                <div class="dashboard-wrapper">
                                    <nav class="nav-table">
                                        <ul>
                                            <li class="active"><a href="#">All Ads (42)</a></li>

                                        </ul>
                                    </nav>
                                    <table class="table table-responsive dashboardtable tablemyads">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="checkedall">
                                                        <label class="custom-control-label" for="checkedall"></label>
                                                    </div>
                                                </th>
                                                <th>Photo</th>
                                                <th>Title</th>
                                                <th>Category</th>
                                                <th>Ad Status</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (!$products->isEmpty())
                                                @foreach ($products as $index => $p)
                                                    <tr data-category="active">
                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="adone">
                                                                <label class="custom-control-label"
                                                                    for="adone"></label>
                                                            </div>
                                                        </td>
                                                        <td class="photo"><img class="img-fluid"
                                                                src="{{ asset('uploads/products') }}/{{ $p->image }}"
                                                                alt=""></td>
                                                        <td data-title="Title">
                                                            <h3>{{ $p->name }}</h3>
                                                        </td>
                                                        <td data-title="Category"><span class="adcategories"></span>
                                                        </td>
                                                        <td data-title="Ad Status"><span
                                                                class="adstatus adstatusactive">active</span></td>
                                                        <td data-title="Price">
                                                            <h3>{{ $p->price }}</h3>
                                                        </td>
                                                        <td data-title="Quantity">
                                                            <h3>{{ $p->qtt }}</h3>
                                                        </td>
                                                        <td data-title="Action">
                                                            <div class="btns-actions">
                                                                <a class="btn-action btn-view" href="#"><i
                                                                        class="lni-eye"></i></a>
                                                                <a class="btn-action btn-edit" href="#"><i
                                                                        class="lni-pencil"></i></a>
                                                                <a class="btn-action btn-delete" href="#"><i
                                                                        class="lni-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                            @endif
                                        </tbody>
                                    </table>
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
