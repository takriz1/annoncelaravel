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
                    <a class="nav-link dropdown-toggle" href="/user/home" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/user/home/categories">
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
            </ul>
            <div class="post-btn">
                <a class="btn btn-common" href="/user/post/getAddPostForm"><i class="lni-pencil-alt"></i> Post an Ad</a>
            </div>
        </div>
    </div>


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
                    @foreach ($categories as $cat)
                        <div class="item">
                            <a href="category.html">
                                <div class="category-icon-item">
                                    <div class="icon-box">
                                        <div class="icon">
                                            <img src="{{ asset('uploads' . '/categories') }}/{{ $cat->image_c }}" alt="">
                                        </div>
                                        <h4>{{$cat->libelle_c}}</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    // var a = document.querySelectorAll(".navbar-nav li a");
    // for (var i = 0, length = a.length; i < length; i++) {
    //     a[i].onclick = function() {
    //         var b = document.querySelector(".navbar-nav li.active");
    //         if (b) b.classList.remove("active");
    //         this.parentNode.classList.add('active');
    //     };
    // }
</script>
