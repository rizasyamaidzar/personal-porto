<!DOCTYPE html>
<html lang="en" class="no-js classic-page-layout " data-audio-tick="audio/tick.mp3" data-click-ripple-animation="yes">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="ikonik - Responsive HTML5 vCard Template">
    <meta name="keywords" content="vcard, html5, portfolio">
    <meta name="author" content="Pixelwars">
    <meta name="theme-color" content="#1755cf" />

    <title>ikonik</title>

    <!-- FAV and TOUCH ICONS -->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon" href="images/ico/apple-touch-icon.png">

    <!-- FONTS -->
    <link rel="stylesheet" href="{{ asset('css/fonts/jost/jost.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


    <!-- STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="js/nprogress/nprogress.css')}}">
    <link rel="stylesheet" type="text/css" href="js/jquery.magnific-popup/magnific-popup.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fonts/fontello/css/fontello.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/768.css') }}">


    <!-- INITIAL SCRIPTS -->
    <script src="{{ asset('js/jquery.js') }}"></script>
</head>



<body>












    <!-- PAGE -->
    <div id="page" class="hfeed site">

        <!-- .site-main -->
        <main id="main" class="site-main cd-main">




            <!-- HEADER -->
            <header id="masthead" class="header" role="banner">

                <!-- header-wrap -->
                <div class="header-wrap layout-full">

                    <img src="{{ asset('images/home/fix.png') }}" alt="profile-image">

                    <div class="home-heading">
                        <div class="home-logo">

                            <p class="home-job-title">Fullstack Developer</p>

                            <p class="home-marquee">
                                A Full Stack Web Developer & Backend Engineer with professional experience gained
                                through full-time work, freelance projects,
                                internships, and multiple completed development projects. Skilled in frontend–backend
                                development, API design, and database
                                management, with proven experience in leading application development projects. Highly
                                proactive, quick to adapt to new technologies,
                                and capable of analyzing and solving complex technical problems effectively.
                            </p>

                            <!--<i class="home-logo-left "><span>Web</span></i>-->
                            <i class="home-logo-center">
                                <span class="home-icon">
                                    <img src="{{ asset('images/home/icon.svg') }}" alt="icon" />
                                </span>
                                <span class="home-text-container">
                                    <p class="home-text-container-placeholder">Riza Afif Syamaidzar</p>
                                </span>
                                <span class="home-text">Riza Afif Syamaidzar</span>
                            </i>
                            <!--<i class="home-logo-right"><span>Developer</span></i>-->
                        </div>
                    </div>



                    <!-- HOME BG LOGO -->
                    <div class="home-bg-logo">
                        <img src="{{ asset('images/home/icon-bg2.svg') }}" alt="icon" />
                    </div>
                    <!-- HOME BG LOGO -->


                    <!-- header-social -->
                    <div class="header-bottom">
                        <a href="https://gitlab.com/rizasyamaidzar" target="_blank" rel="noopener">
                            <i class="fab fa-gitlab" style="color: #c3c8d1;"></i>
                        </a>

                        <a class="social-link github" href="https://github.com/rizasyamaidzar" target="_blank"
                            rel="noopener"></a>

                        <a class="social-link linkedin" href="https://www.linkedin.com/in/rizaafifsyamaidzar"
                            target="_blank" rel="noopener"></a>

                        <a class="social-link instagram" href="https://instagram.com/rizaafifs_" target="_blank"
                            rel="noopener"></a>
                    </div>
                    <!-- header-social -->

                    <!-- NAV MENU -->
                    <nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
                        <div class="nav-menu menu-with-icons">
                            <ul>
                                <li><a class="home" href="{{ route('home') }}">Home</a></li>
                                {{-- <li><a class="search-toggle">Search</a></li> --}}

                            </ul>
                        </div>
                    </nav>
                    <!-- NAV MENU -->



                    <!-- SEARCH -->
                    <div class="header-search">
                        <form role="search" method="get" class="search-form" action="#">
                            <label>
                                <span class="screen-reader-text">Search for:</span>
                                <input type="search" class="search-field" placeholder="Enter Keyword"
                                    value="" name="s">
                            </label>
                            <input type="submit" class="search-submit" value="Search">
                        </form>
                    </div>
                    <!-- SEARCH -->


                </div>
                <!-- header-wrap -->

            </header>
            <!-- HEADER -->






            <!-- site-middle -->
            <div class="site-middle">








                <div class="layout-medium">
                    <div id="primary" class="content-area">











                        <!-- site-content -->
                        <div id="content" class="site-content" role="main"> <!-- .portfolio-single -->
                            <div class="portfolio-single page-layout">


                                <!-- .hentry -->
                                <article class="hentry">

                                    <!-- .entry-header -->
                                    <header class="entry-header">


                                        <!-- PORTFOLIO-NAV -->
                                        <div class="portfolio-nav">

                                            @if (!empty($prev))
                                                <span class="prev ajax">
                                                    <a href="{{ route('portofolio.show', $prev['id']) }}">Prev</a>
                                                </span>
                                            @endif

                                            <span class="back">
                                                <a href="{{ route('portofolio') }}">Close</a>
                                            </span>

                                            @if (!empty($next))
                                                <span class="next ajax">
                                                    <a href="{{ route('portofolio.show', $next['id']) }}">Next</a>
                                                </span>
                                            @endif

                                        </div>

                                        <!-- PORTFOLIO-NAV -->

                                        <!-- TITLE -->
                                        <h1 class="entry-title">{{ $portfolio['title'] }}</h1>
                                        <!-- TITLE -->

                                    </header>
                                    <!-- .entry-header -->


                                    <!-- .entry-content -->
                                    <div class="entry-content">


                                        <!-- .portfolio-desc -->
                                        <div class="portfolio-desc">

                                            <p>{{ $portfolio['description'] }}</p>

                                            <div class="portfolio-meta">
                                                <span><strong>Client</strong> {{ $portfolio['client'] }}</span>
                                                @if (!empty($portfolio['date']))
                                                    <span>
                                                        <strong>Date</strong>
                                                        {{ \Carbon\Carbon::parse($portfolio['date'])->format('F Y') }}
                                                    </span>
                                                @endif
                                                <span><strong>Services</strong> {{ $portfolio['services'] }}</span>
                                            </div>

                                            @if (!empty($portfolio['project_url']))
                                                <p>
                                                    <a href="{{ Str::startsWith($portfolio['project_url'], ['http://', 'https://'])
                                                        ? $portfolio['project_url']
                                                        : 'https://' . $portfolio['project_url'] }}"
                                                        target="_blank" class="button primary">
                                                        LAUNCH PROJECT
                                                    </a>

                                                </p>
                                            @endif

                                        </div>

                                        <!-- .portfolio-desc -->

                                        @if (!empty($portfolio['gallery']))
                                            @foreach ($portfolio['gallery'] as $image)
                                                <p>
                                                    <img src="{{ asset($image) }}" alt="{{ $portfolio['title'] }}">
                                                </p>
                                            @endforeach
                                        @endif






                                    </div>
                                    <!-- .entry-content -->


                                </article>
                                <!-- .hentry -->


                            </div>
                            <!-- .portfolio-single -->


                        </div>
                        <!-- site-content -->

                    </div>
                    <!-- primary -->





                </div>
                <!-- layout -->


            </div>
            <!-- site-middle -->






















        </main>
        <!-- .site-main -->





        <!-- ALERT : used for contact form mail delivery alert -->
        <div class="site-alert animated"></div>




    </div>
    <!-- PAGE -->

    <a href="#" id="back-to-top" class="show">↑ <span>Scroll to top</span></a>




    <!-- SCRIPTS -->
    <script src="{{ asset('js/tween-max.js') }}"></script>
    <script src="{{ asset('js/jquery-address.js') }}"></script>
    <script src="{{ asset('js/nprogress/nprogress.js') }}"></script>
    <script src="{{ asset('js/jquery-isotope.js') }}"></script>
    <script src="{{ asset('js/imagesloaded.js') }}"></script>
    <script src="{{ asset('js/jquery-fitvids.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup/jquery-magnific-popup.js') }}"></script>
    <script src="{{ asset('js/jquery-easing.js') }}"></script>
    <script src="{{ asset('js/jquery-validate.js') }}"></script>
    <script src="{{ asset('js/resize-sensor.js') }}"></script>
    <script src="{{ asset('js/jquery-sticky-sidebar.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>


</body>

</html>
