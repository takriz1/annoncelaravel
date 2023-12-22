<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
                                    <ul id="clientDashbordNav">
                                        <li class="clientDashSideBar"
                                            url="{{ route('user.partial.view.show', 'dashbord') }}">
                                            <a class="active" href="#">
                                                <i class="lni-dashboard"></i>
                                                <span>Dashboard</span>
                                            </a>
                                        </li>
                                        <li class="clientDashSideBar"
                                            url="{{ route('user.partial.view.show', 'profile') }}">
                                            <a href="#">
                                                <i class="lni-cog"></i>
                                                <span>Profile Settings</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{-- {{ __('Logout') }} --}}
                                                <i class="lni-enter"></i>
                                                <span>Logout</span>

                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
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


                    {{-- Posts Partial View --}}

                    <div class="col-sm-12 col-md-8 col-lg-9" id="clientDashboardPartialView"></div>


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

            {{-- ModalEditProduct --}}

            <div class="modal fade" id="editPost" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Edit Product</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="alert alert-danger" style="display:none"></div>
                        <form id="editPostForm" name="editPostForm" class="form-horizontal">
                            <div class="modal-body">
                                <input type="hidden" name="postId" id="postId">
                                <input type="hidden" name="postHiddenImage" id="postHiddenImage">
                                <div class="form-group">
                                    <label for="name" class="col-sm-2 control-label">Product Name :</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="postName" name="postName"
                                            placeholder="Enter Name" value="" maxlength="50" required="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Product Description </label>
                                    <div class="col-sm-12">
                                        <textarea class="form-control" id="postDescription" rows="3" name="postDescription">
                                        </textarea>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Price : </label>
                                    <div class="col-sm-12">
                                        <input class="form-control" id="postPrice" type="number"
                                            placeholder="Product price" name="postPrice" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Quantity : </label>
                                    <div class="col-sm-12">
                                        <input class="form-control" id="postQuantity" type="number"
                                            placeholder="Product price" name="postQuantity" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Choose Image : </label>
                                    <div class="col-sm-12">
                                        <input class="form-control" id="postImage" type="file" name="postImage">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Image Existed : </label>
                                    <div class="col-sm-12">
                                        <img class="img-fluid" id="postImageDisplay" src="" alt="">
                                    </div>
                                </div>


                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button class="btn btn-success" id="productEditSubmit">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


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


                $("#clientDashbordNav").on("click", "li.clientDashSideBar", function(event) {
                    $('li').find('a').removeClass('active');
                    $(this).find('a').addClass('active');
                    var urlToCall = $(this).attr("url");
                    console.log("urlToCall", urlToCall);
                    $.ajax({
                        type: "GET",
                        url: urlToCall,
                        success: function(data) {
                            $('#clientDashboardPartialView').html(data);
                        },
                        error: function(data) {
                            console.log('An error occurred.');
                            console.log(data);
                        },
                    });
                });


            });
        </script>


</body>

</html>
