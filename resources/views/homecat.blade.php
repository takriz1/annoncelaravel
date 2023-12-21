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

    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">

</head>

<body>

    <header id="header-wrap">


        {{-- Include top bar --}}

        @include('inc.topbar')


        {{-- Include nav bar --}}

        @include('inc.navbar')

        <div class="main-container section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-xs-12 page-sidebar">
                        <aside>
                            <div class="widget_search">
                                <form id="search-form" role="search" action="{{ url('/category/prodList') }}" method="get">
                                    @csrf
                                    <input type="text" class="form-control" autocomplete="off" name="search"
                                    value="{{ request('search') }}" placeholder="Search...">
                                    <button type="submit" id="search-submit" class="search-btn"><i
                                            class="lni-search"></i></button>
                                </form>
                            </div>

                            {{-- <div class="widget categories">
                                <label for="category">Select Category:</label>
                                <select id="category" class="form-select">
                                    <option value="0">All Categories</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->libelle_c }}</option>
                                    @endforeach
                                </select>

                            </div> --}}
                            <div class="widget categories">
                                <h4 class="widget-title">All Categories</h4>
                                <ul class="categories-list" id="categoriesddl">

                                        <li class="searchCategory" value=""
                                           >
                                            <a href="#">
                                                <i class="lni-dinner"></i>
                                                 <span
                                                    class="category-counter"></span>
                                            </a>
                                        </li>

                                </ul>
                            </div>
                            <div class="widget">
                                <h4 class="widget-title">Advertisement</h4>
                                <div class="add-box">
                                    <img class="img-fluid" src="assets/img/img1.jpg" alt="">
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="col-lg-9 col-md-12 col-xs-12 page-content">

                        <div class="product-filter">
                            <div class="short-name">
                                <span>Showing (1 - 12 products of 7371 products)</span>
                            </div>
                            <div class="Show-item">
                                <span>Show Items</span>
                                <form class="woocommerce-ordering" method="post">
                                    <label>
                                        <select name="order" class="orderby">
                                            <option selected="selected" value="menu-order">49 items</option>
                                            <option value="popularity">popularity</option>
                                            <option value="popularity">Average ration</option>
                                            <option value="popularity">newness</option>
                                            <option value="popularity">price</option>
                                        </select>
                                    </label>
                                </form>
                            </div>
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#grid-view"><i class="lni-grid"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#list-view"><i
                                            class="lni-list"></i></a>
                                </li>
                            </ul>
                        </div>


                        <div class="adds-wrapper">
                            <div class="tab-content">
                                <div id="list-view" class="tab-pane fade active show">
                                    <div id="productContainer"></div>
                                    <div id="items-container">
                                        @include('catproducts')
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
                                        alt=""></div>
                                <div class="textwidget">
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                                        sed
                                        quia
                                        consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt
                                        consectetur,
                                        adipisci velit.</p>
                                </div>
                                <ul class="mt-3 footer-social">
                                    <li><a class="facebook" href="#"><i class="lni-facebook-filled"></i></a>
                                    </li>
                                    <li><a class="twitter" href="#"><i class="lni-twitter-filled"></i></a>
                                    </li>
                                    <li><a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a>
                                    </li>
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
                                        <strong><i class="lni-phone"></i></strong><span>+1 555 444 66647 <br> +1
                                            555
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


        <!--- Category List Ajax -->

        <!--  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
            <script>
                $(document).ready(function() {

                    $.ajax({
                        url: '/categories/99/products',
                        type: 'GET',
                        success: function(response) {
                            // Display products in the productContainer
                            $('#productContainer').html(response);
                        },
                        error: function(error) {
                            console.log('Error:', error);
                        }
                    });

                    // Handle category click event
                    $('.category').click(function() {
                        var categoryId = $(this).data('id');

                        // Fetch products for the selected category using AJAX
                        $.ajax({
                            url: '/categories/' + categoryId + '/products',
                            type: 'GET',
                            success: function(response) {
                                // Display products in the productContainer
                                $('#productContainer').html(response);
                            },
                            error: function(error) {
                                console.log('Error:', error);
                            }
                        });
                    });
                });
            </script> -->

        <!--- Pagination Ajax -->

        <!--   <script>
            $(document).ready(function() {
                loadProducts();

                function loadProducts(page = 1) {
                    $.ajax({
                        url: '/get-products?page=' + page,
                        method: 'GET',
                        success: function(data) {
                            $('#products-list').html(data);
                        }
                    });
                }

                $(document).on('click', '.pagination a', function(e) {
                    e.preventDefault();

                    var page = $(this).attr('href').split('page=')[1];
                    loadProducts(page);
                });
            });
        </script> -->

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


        <!-- Category List + Products Pagination Ajax
        <script>
            $(document).ready(function() {

                loadProducts(); //appel

                // ul change event
                $("#categoriesddl").on("click", "li.searchCategory", function(event) {

                    $('li').removeClass('active');
                    $(this).addClass('active');
                    var idCategory = $(this).attr("value");
                    var urlToSend = $(this).attr("url");

                    $.ajax({
                        url: urlToSend,
                        method: 'GET',
                        success: function(data) {
                            $('#products-list').html(data);
                        }
                    });

                    //   loadProducts(1, idCategory); // appel

                });

                function loadProducts(page = 1, pIdCaregory = -1) { // définition de la fonction

                    console.log("page number", page);
                    console.log("id category selected", pIdCaregory);

                    $.ajax({
                        url: '/get-products-by-category',
                        method: 'GET',
                        data: {
                            category_id: pIdCaregory,
                            page: page
                        },
                        success: function(data) {
                            $('#products-list').html(data);
                        }
                    });
                }

                $(document).on('click', '.pagination a', function(e) {
                    e.preventDefault();

                    var page = $(this).attr('href').split('page=')[1];
                    loadProducts(page);
                });
            });
        </script> -->

<!-- Add this inside the head tag of your layout file -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

         <!--- Pagination ajax with Search Filter -->
         <script>
            $(document).ready(function () {
                // Function to handle the form submission
                $('form').on('submit', function (e) {
                    e.preventDefault();
                    let formData = $(this).serialize();

                    // Ajax request to the controller
                    $.ajax({
                        url: '{{ url('/category/prodList') }}',
                        type: 'GET',
                        data: formData,
                        success: function (data) {
                            // Update the content with the returned HTML
                            $('#items-container').html(data);
                        }
                    });
                });

                // Function to handle pagination links
                $(document).on('click', '.pagination a', function (e) {
                    e.preventDefault();
                    let page = $(this).attr('href').split('page=')[1];

                    // Ajax request to the controller with the page parameter
                    $.ajax({
                        url: '{{ url('/category/prodList') }}?page=' + page,
                        type: 'GET',
                        success: function (data) {
                            // Update the content with the returned HTML
                            $('#items-container').html(data);
                        }
                    });
                });
            });
        </script>
</body>


</html>
