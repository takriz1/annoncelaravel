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

    <link rel="stylesheet" type="text/css" href="{{ asset('mainassets/css/summernote.css') }}">

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

        <div class="page-header" style="background: url('mainassets/img/banner1.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-wrapper">
                            <h2 class="product-title">Post you Ads</h2>
                            <ol class="breadcrumb">
                                <li><a href="#">Home /</a></li>
                                <li class="current">Post you Ads</li>
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
                                        <h3>{{ Auth::user()->name }}</h3>
                                        <h4>Administrator</h4>
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
                                            <a class="active" href="/user/post/getAddPostForm">
                                                <i class="lni-layers"></i>
                                                <span>Add Post</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="account-myads.html">
                                                <i class="lni-layers"></i>
                                                <span>My Ads</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
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
                                            <a href="account-profile-setting.html">
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
                        <div class="row page-content">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">
                                <form action="/user/post/add" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="inner-box">
                                        @if (session()->has('message'))
                                            <div class="alert alert-success">
                                                {{ session()->get('message') }}
                                            </div>
                                        @endif

                                        <div class="dashboard-box">
                                            <h2 class="dashbord-title">Ad Detail</h2>
                                        </div>
                                        <div class="dashboard-wrapper">
                                            <div class="form-group mb-3">
                                                <label class="control-label">Product Title</label>
                                                <input class="form-control input-md" name="name" placeholder="Title"
                                                    type="text">
                                                @error('name')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}

                                                    </div>
                                                @enderror
                                                <input type="hidden" name="userId" value="{{ Auth::user()->id }}">
                                            </div>
                                            <div class="form-group mb-3 tg-inputwithicon">
                                                <label class="control-label">Categories</label>
                                                <div class="tg-select form-control">
                                                    <select name="category">

                                                        @foreach ($categories as $c)
                                                            <option value="{{ $c->id }}">{{ $c->libelle_c }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('category')
                                                        <div class="alert alert-danger">
                                                            {{ $message }}

                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label class="control-label">Product Price</label>
                                                <input class="form-control input-md" name="price"
                                                    placeholder="Ad your Price" type="text">
                                                @error('price')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}

                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="form-group mb-3">

                                                <label class="control-label">Description </label>
                                                {{-- <textarea name="description" class="note-codable"></textarea> --}}
                                                <textarea name="description" class="form-control" placeholder="Description" rows="7"
                                                    data-error="Write your description" required=""></textarea>
                                                @error('description')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}

                                                    </div>
                                                @enderror

                                            </div>
                                            <div class="form-group mb-3">
                                                <label class="control-label">Quantity</label>
                                                <input class="form-control input-md" name="qtt"
                                                    placeholder="Title" type="number">
                                                @error('qtt')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}

                                                    </div>
                                                @enderror
                                            </div>
                                            <label class="tg-fileuploadlabel" for="tg-photogallery">
                                                <span>Drop files anywhere to upload</span>
                                                <span>Or</span>
                                                <span class="btn btn-common">Select Files</span>
                                                <span>Maximum upload file size: 500 KB</span>
                                                <input id="tg-photogallery" class="tg-fileinput" type="file"
                                                    name="image">
                                                @error('image')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </label>
                                            <button class="btn btn-common" type="submit">Post Here</button>
                                        </div>
                                        {{-- <div class="mb-3">

                                        </div> --}}
                                    </div>
                                </form>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
                                <div class="inner-box">
                                    <div class="tg-contactdetail">
                                        <div class="dashboard-box">
                                            <h2 class="dashbord-title">Contact Detail</h2>
                                        </div>
                                        <div class="dashboard-wrapper">
                                            <div class="form-group mb-3">
                                                <strong>I’m a:</strong>
                                                <div class="tg-selectgroup">
                                                    <span class="tg-radio">
                                                        <input id="tg-sameuser" type="radio" name="usertype"
                                                            value="same user" checked="" disabled>
                                                        <label for="tg-sameuser">Same User</label>
                                                    </span>
                                                    <span class="tg-radio">
                                                        <input id="tg-someoneelse" type="radio" name="usertype"
                                                            value="someone else" disabled>
                                                        <label for="tg-someoneelse">Someone Else</label>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label class="control-label">FirstName :
                                                    {{ Auth::user()->first_name }}</label>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label class="control-label">LastName :
                                                    {{ Auth::user()->last_name }}</label>

                                            </div>
                                            <div class="form-group mb-3">
                                                <label class="control-label">Phone :
                                                    {{ Auth::user()->telephone }}</label>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label class="control-label">Mail : {{ Auth::user()->email }} </label>

                                            </div>
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
                                <div class="footer-logo"><img src="{{ asset('mainassets/img/logo.png') }} "
                                        alt=""></div>
                                <div class="textwidget">
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed
                                        quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt
                                        consectetur, adipisci velit.</p>
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
                                            444 66647</span>
                                    </li>
                                    <li>
                                        <strong><i class="lni-envelope"></i></strong><span><a
                                                href="http://preview.uideck.com/cdn-cgi/l/email-protection"
                                                class="__cf_email__"
                                                data-cfemail="2f4c40415b4e4c5b6f424e4643014c4042">[email&#160;protected]</a>
                                            <br> <a href="http://preview.uideck.com/cdn-cgi/l/email-protection"
                                                class="__cf_email__"
                                                data-cfemail="b8cbcdc8c8d7caccf8d5d9d1d496dbd7d5">[email&#160;protected]</a></span>
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
            src="{{ asset('mainassets/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode-min.js') }}"></script>
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
            $('#summernote').summernote({
                height: 250, // set editor height
                minHeight: null, // set minimum height of editor
                maxHeight: null, // set maximum height of editor
                focus: false // set focus to editable area after initializing summernote
            });
        </script>
</body>

</html>
