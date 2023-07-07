<header id="header" class="site-header header-style-6">
    <div class="topbar">
        <div class="upper-topbar">
            <div class="container">
                <div class="row">
                    <div class="col col-sm-9">
                        <div class="upper-topbar-contact">
                            <ul>
                                <li><i class="fa fa-envelope"></i> info@extin-innovation.com</li>
                                <li><i class="fa fa-location-arrow"></i> 380 St Kilda Road, Melbourne, VIC 3004,
                                    Australia</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col col-sm-3">
                        <div class="upper-topbar-social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                {{-- <li><a href="#"><i class="fa fa-google-plus"></i></a></li> --}}
                                {{-- <li><a href="#"><i class="fa fa-rss"></i></a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </div>
    </div> <!-- end topbar -->

    <nav class="navigation navigation-s6 navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="open-btn">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand"><img src="assets/images/logo-sans-fond.png" width="160"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse navbar-right navigation-holder">
                <button class="close-navbar"><i class="fa fa-close"></i></button>
                <ul class="nav navbar-nav">
                    <li>
                        <a class="{{ Request::is('accueil') ? 'active' : '' }}" href="{{ route('display.view', 'accueil') }}">Accueil</a>
                    </li>
                    <li>
                        <a class="{{ Request::is('about') ? 'active' : '' }}" href="{{ route('display.view', 'about') }}">Qui
                            sommes-nous</a>
                    </li>
                    <li class="">
                        <a class="{{ Request::is('services') ? 'active' : '' }}" href="{{ route('display.view', 'services') }}">Nos
                            services</a>
                    </li>
                    <li class="">
                        <a class="{{ Request::is('formation') ? 'active' : '' }}" href="{{ route('display.view', 'formation') }}">Nos
                            formations</a>
                        </li>
                    <li>
                        <a class="{{ Request::is('contact') ? 'active' : '' }}" href="{{ route('display.view', 'contact') }}">Contact</a>
                    </li>
                </ul>
            </div><!-- end of nav-collapse -->

        </div><!-- end of container -->
    </nav>
</header>
