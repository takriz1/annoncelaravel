<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>NexusPlus - Classified Ads and Listing Template</title>

    <link rel="stylesheet" type="text/css" href="{{asset('mainassets/css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('mainassets/fonts/line-icons.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('mainassets/css/slicknav.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('mainassets/css/color-switcher.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('mainassets/css/animate.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('mainassets/css/owl.carousel.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('mainassets/css/main.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('mainassets/css/responsive.css')}}">
</head>

<body>

  @include('inc.navbar')


    <div class="page-header" style="background: url(assets/img/banner1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Join Us</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">Home /</a></li>
                            <li class="current">Register</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="register section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Register') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="first_name" class="col-md-4 col-form-label text-md-end">{{ __('First Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="lastname" autofocus>

                                        @error('first_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="last_name" class="col-md-4 col-form-label text-md-end">{{ __('Last Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                                        @error('last_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
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
                            <div class="footer-logo"><img src="{{asset('mainassets/img/logo.png')}}" alt=""></div>
                            <div class="textwidget">
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                    consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt consectetur,
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
                                    <strong><i class="lni-phone"></i></strong><span>+1 555 444 66647 <br> +1 555 444
                                        66647</span>
                                </li>
                                <li>
                                    <strong><i class="lni-envelope"></i></strong><span><a
                                            href="http://preview.uideck.com/cdn-cgi/l/email-protection"
                                            class="__cf_email__"
                                            data-cfemail="c9aaa6a7bda8aabd89a4a8a0a5e7aaa6a4">[email&#160;protected]</a>
                                        <br> <a href="http://preview.uideck.com/cdn-cgi/l/email-protection"
                                            class="__cf_email__"
                                            data-cfemail="9be8eeebebf4e9efdbf6faf2f7b5f8f4f6">[email&#160;protected]</a></span>
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
    <script src="{{asset('mainassets/js/jquery-min.js')}}"></script>
    <script src="{{asset('mainassets/js/popper.min.js')}}"></script>
    <script src="{{asset('mainassets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('mainassets/js/color-switcher.js')}}"></script>
    <script src="{{asset('mainassets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('mainassets/js/waypoints.min.js')}}"></script>
    <script src="{{asset('mainassets/js/wow.js')}}"></script>
    <script src="{{asset('mainassets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('mainassets/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('mainassets/js/main.js')}}"></script>
    <script src="{{asset('mainassets/js/form-validator.min.js')}}"></script>
    <script src="{{asset('mainassets/js/contact-form-script.min.js')}}"></script>
    <script src="{{asset('mainassets/js/summernote.js')}}"></script>
</body>


</html>
