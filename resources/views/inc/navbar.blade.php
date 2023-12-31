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
                <li class="nav-item ">
                    <a class="nav-link" href="/user/home">
                        Home
                    </a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/categories">
                        Categories
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        Pages
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="about.html">About Us</a>
                        <a class="dropdown-item" href="services.html">Services</a>
                        <a class="dropdown-item" href="ads-details.html">Ads Details</a>
                        <a class="dropdown-item" href="/user/AddPost">Ads Post</a>

                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link " href="#">
                        Blog
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
                    <a class="nav-link" href="contact.html">
                        Contact
                    </a>
                </li>
            </ul>
            <div class="post-btn">
                <a class="btn btn-common" href="/user/post/getAddPostForm"><i class="lni-pencil-alt"></i> Post an Ad</a>
            </div>
        </div>
    </div>

    <ul class="mobile-menu">
        <li>
            <a class="active" href="#">
                Home
            </a>
            <ul class="dropdown">
                <li><a class="active" href="index-2.html">Home 1</a></li>
                <li><a href="index-3.html">Home 2</a></li>
            </ul>
        </li>
        <li>
            <a href="/categories">Categories</a>
        </li>
        <li>
            <a href="#">
                Listings
            </a>
            <ul class="dropdown">
                <li><a href="adlistinggrid.html">Ad Grid</a></li>
                <li><a href="adlistinglist.html">Ad Listing</a></li>
                <li><a href="ads-details.html">Listing Detail</a></li>
            </ul>
        </li>
        <li>
            <a href="#">Pages</a>
            <ul class="dropdown">
                <li><a href="about.html">About Us</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="ads-details.html">Ads Details</a></li>
                <li><a href="post-ads.html">Ads Post</a></li>
                <li><a href="pricing.html">Packages</a></li>
                <li><a href="testimonial.html">Testimonial</a></li>
                <li><a href="faq.html">FAQ</a></li>
                <li><a href="404.html">404</a></li>
            </ul>
        </li>
        <li>
            <a href="#">Blog</a>
            <ul class="dropdown">
                <li><a href="blog.html">Blog - Right Sidebar</a></li>
                <li><a href="blog-left-sidebar.html">Blog - Left Sidebar</a></li>
                <li><a href="blog-grid-full-width.html"> Blog full width </a></li>
                <li><a href="single-post.html">Blog Details</a></li>
            </ul>
        </li>
        <li>
            <a href="contact.html">Contact Us</a>
        </li>
    </ul>

</nav>


<div id="hero-area">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9 col-xs-12 text-center">
                <div class="contents">
                    <h1 class="head-title">Welcome to The Largest <span class="year">Marketplace</span></h1>
                    <p>Buy and sell everything from used cars to mobile phones and computers, or search for
                        property, jobs and more</p>
                    <div class="search-bar">
                        <div class="search-inner">
                            <form class="search-form" action="/product/search" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="customword" class="form-control"
                                        placeholder="What are you looking for?">
                                </div>
                                <button class="btn btn-common" type="submit"><i class="lni-search"></i>
                                    Search Now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</header>


<section id="categories">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12 col-xs-12">
                <div id="categories-icon-slider" class="categories-wrapper owl-carousel owl-theme">
                    <div class="item">
                        <a href="category.html">
                            <div class="category-icon-item">
                                <div class="icon-box">
                                    <div class="icon">
                                        <img src="{{ asset('mainassets/img/category/img-1.png') }}" alt="">
                                    </div>
                                    <h4>Bicycle</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="category.html">
                            <div class="category-icon-item">
                                <div class="icon-box">
                                    <div class="icon">
                                        <img src="{{ asset('mainassets/img/category/img-2.png') }}" alt="">
                                    </div>
                                    <h4>Furniture</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="category.html">
                            <div class="category-icon-item">
                                <div class="icon-box">
                                    <div class="icon">
                                        <img src="{{ asset('mainassets/img/category/img-3.png') }}" alt="">
                                    </div>
                                    <h4>Laptop</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="category.html">
                            <div class="category-icon-item">
                                <div class="icon-box">
                                    <div class="icon">
                                        <img src="{{ asset('mainassets/img/category/img-4.png') }}" alt="">
                                    </div>
                                    <h4>Electronic</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="category.html">
                            <div class="category-icon-item">
                                <div class="icon-box">
                                    <div class="icon">
                                        <img src="{{ asset('mainassets/img/category/img-5.png') }}" alt="">
                                    </div>
                                    <h4>Toys</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="category.html">
                            <div class="category-icon-item">
                                <div class="icon-box">
                                    <div class="icon">
                                        <img src="{{ asset('mainassets/img/category/img-6.png') }}" alt="">
                                    </div>
                                    <h4>Cloths</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="category.html">
                            <div class="category-icon-item">
                                <div class="icon-box">
                                    <div class="icon">
                                        <img src="{{ asset('mainassets/img/category/img-1.png') }}" alt="">
                                    </div>
                                    <h4>Bicycle</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="category.html">
                            <div class="category-icon-item">
                                <div class="icon-box">
                                    <div class="icon">
                                        <img src="{{ asset('mainassets/img/category/img-2.png') }}" alt="">
                                    </div>
                                    <h4>Furniture</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="category.html">
                            <div class="category-icon-item">
                                <div class="icon-box">
                                    <div class="icon">
                                        <img src="{{ asset('mainassets/img/category/img-3.png') }}" alt="">
                                    </div>
                                    <h4>Laptop</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
