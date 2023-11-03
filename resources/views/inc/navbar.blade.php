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
            <a href="index-2.html" class="navbar-brand"><img src="{{ asset('mainassets/img/logo.png') }}"
                    alt=""></a>
        </div>
        <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav mr-auto w-100 justify-content-center">
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Home
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item active" href="index-2.html">Home 1</a>
                        <a class="dropdown-item" href="index-3.html">Home 2</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="category.html">
                        Categories
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Listings
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="adlistinggrid.html">Ad Grid</a>
                        <a class="dropdown-item" href="adlistinglist.html">Ad Listing</a>
                        <a class="dropdown-item" href="ads-details.html">Listing Detail</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Pages
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="about.html">About Us</a>
                        <a class="dropdown-item" href="services.html">Services</a>
                        <a class="dropdown-item" href="ads-details.html">Ads Details</a>
                        <a class="dropdown-item" href="post-ads.html">Ads Post</a>
                        <a class="dropdown-item" href="pricing.html">Packages</a>
                        <a class="dropdown-item" href="testimonial.html">Testimonial</a>
                        <a class="dropdown-item" href="faq.html">FAQ</a>
                        <a class="dropdown-item" href="404.html">404</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Blog
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="blog.html">Blog - Right Sidebar</a>
                        <a class="dropdown-item" href="blog-left-sidebar.html">Blog - Left Sidebar</a>
                        <a class="dropdown-item" href="blog-grid-full-width.html"> Blog full width </a>
                        <a class="dropdown-item" href="single-post.html">Blog Details</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">
                        Contact
                    </a>
                </li>
            </ul>
            <div class="post-btn">
                <a class="btn btn-common" href="post-ads.html"><i class="lni-pencil-alt"></i> Post an Ad</a>
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
            <a href="category.html">Categories</a>
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
                            <form class="search-form">
                                <div class="form-group">
                                    <input type="text" name="customword" class="form-control"
                                        placeholder="What are you looking for?">
                                </div>
                                <div class="form-group inputwithicon">
                                    <div class="select">
                                        <select>
                                            <option value="none">Locations</option>
                                            <option value="none">New York</option>
                                            <option value="none">California</option>
                                            <option value="none">Washington</option>
                                            <option value="none">Birmingham</option>
                                            <option value="none">Chicago</option>
                                            <option value="none">Phoenix</option>
                                        </select>
                                    </div>
                                    <i class="lni-target"></i>
                                </div>
                                <div class="form-group inputwithicon">
                                    <div class="select">
                                        <select>
                                            <option value="none">Select Catagory</option>
                                            <option value="none">Jobs</option>
                                            <option value="none">Electronics</option>
                                            <option value="none">Mobile</option>
                                            <option value="none">Training</option>
                                            <option value="none">Pets</option>
                                            <option value="none">Real Estate</option>
                                            <option value="none">Services</option>
                                            <option value="none">Training</option>
                                            <option value="none">Vehicles</option>
                                        </select>
                                    </div>
                                    <i class="lni-menu"></i>
                                </div>
                                <button class="btn btn-common" type="button"><i class="lni-search"></i>
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
                                    <img src="{{ asset('mainassets/img/category/img-1.png') }}"
                                        alt="">
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
                                    <img src="{{ asset('mainassets/img/category/img-2.png') }}"
                                        alt="">
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
                                    <img src="{{ asset('mainassets/img/category/img-3.png') }}"
                                        alt="">
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
                                    <img src="{{ asset('mainassets/img/category/img-4.png') }}"
                                        alt="">
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
                                    <img src="{{ asset('mainassets/img/category/img-5.png') }}"
                                        alt="">
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
                                    <img src="{{ asset('mainassets/img/category/img-6.png') }}"
                                        alt="">
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
                                    <img src="{{ asset('mainassets/img/category/img-1.png') }}"
                                        alt="">
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
                                    <img src="{{ asset('mainassets/img/category/img-2.png') }}"
                                        alt="">
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
                                    <img src="{{ asset('mainassets/img/category/img-3.png') }}"
                                        alt="">
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
