<div class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-5 col-xs-12">

                <ul class="list-inline">
                    <li><i class="lni-phone"></i> +0123 456 789</li>
                    <li><i class="lni-envelope"></i> <a href="http://preview.uideck.com/cdn-cgi/l/email-protection"
                            class="__cf_email__"
                            data-cfemail="fb888e8b8b94898fbb9c969a9297d5989496">[email&#160;protected]</a></li>
                </ul>

            </div>
            <div class="col-lg-5 col-md-7 col-xs-12">
                <div class="roof-social float-right">
                    <a class="facebook" href="#"><i class="lni-facebook-filled"></i></a>
                    <a class="twitter" href="#"><i class="lni-twitter-filled"></i></a>
                    <a class="instagram" href="#"><i class="lni-instagram-filled"></i></a>
                    <a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a>
                    <a class="google" href="#"><i class="lni-google-plus"></i></a>
                </div>
                <div class="header-top-right float-right">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <a href="{{ route('login') }}" class="header-top-button"><i class="lni-lock"></i> Log In</a> |
                        @endif

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="header-top-button"><i class="lni-pencil"></i>
                                Register</a>
                        @endif
                    @else
                        <a href="{{ route('login') }}" class="header-top-button"><i class="lni-lock"></i>
                            {{ Auth::user()->name }}</a> |
                        <a class="header-top-button" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    @endguest
                </div>
            </div>
        </div>
    </div>
</div>
