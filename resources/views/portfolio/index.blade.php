<!DOCTYPE html>
<html lang="en" class="no-js classic-page-layout " data-audio-tick="audio/tick.mp3" data-click-ripple-animation="yes">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Riza Afif Syamaidzar - Responsive HTML5 vCard Template">
    <meta name="keywords" content="vcard, html5, portfolio">
    <meta name="author" content="Pixelwars">
    <meta name="theme-color" content="#1755cf" />

    <title>Riza Afif Syamaidzar</title>

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
    <link rel="stylesheet" type="text/css" href="{{ asset('js/nprogress/nprogress.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('js/jquery.magnific-popup/magnific-popup.css') }}">
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
                        <div id="content" class="site-content" role="main"> <!-- .page-single -->
                            <div class="page-single page-layout">


                                <!-- .hentry -->
                                <article class="page hentry">

                                    <!-- .entry-header -->
                                    <header class="entry-header">
                                        <h1 class="entry-title">Portfolio</h1>
                                    </header>
                                    <!-- .entry-header -->


                                    <!-- .entry-content -->
                                    <div class="entry-content">




                                        <!--FILTERS-->
                                        <ul id="filters" class="filters">
                                            @foreach ($portfolioFilters as $index => $filter)
                                                <li class="{{ $index === 0 ? 'current' : '' }}">
                                                    <a href="#"
                                                        data-filter="{{ $filter['key'] === '*' ? '*' : '.' . $filter['key'] }}">
                                                        {{ strtolower($filter['label']) }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>

                                        <!--FILTERS-->



                                        <!-- PORTFOLIO -->
                                        <div class="portfolio-items media-grid masonry" data-layout="masonry"
                                            data-item-width="360">

                                            @foreach ($portfolios as $item)
                                                <div class="media-cell {{ $item['type'] }} hentry">

                                                    <div class="media-box">
                                                        <img src="{{ asset($item['image']) }}" alt="portfolio-post"
                                                            style="
        width: 100%;
        height: 260px;
        object-fit: cover;
        display: block;
    ">
                                                        <div class="mask">
                                                        </div>

                                                        {{-- AJAX --}}
                                                        @if ($item['link_type'] === 'ajax')
                                                            <a href="{{ $item['link'] }}" class="ajax"></a>

                                                            {{-- LIGHTBOX IMAGE --}}
                                                        @elseif ($item['link_type'] === 'image')
                                                            <a href="{{ asset($item['link']) }}" class="lightbox"
                                                                data-title="{{ $item['title'] }}"></a>

                                                            {{-- LIGHTBOX VIDEO --}}
                                                        @elseif ($item['link_type'] === 'video')
                                                            <a href="{{ $item['link'] }}" class="lightbox mfp-iframe"
                                                                data-title="{{ $item['title'] }}"></a>

                                                            {{-- LIGHTBOX GALLERY --}}
                                                        @elseif ($item['link_type'] === 'gallery')
                                                            @foreach ($item['gallery'] as $gallery)
                                                                <a href="{{ asset($gallery) }}" class="lightbox"
                                                                    data-title="{{ $item['title'] }}"></a>
                                                            @endforeach

                                                            {{-- EXTERNAL --}}
                                                        @elseif ($item['link_type'] === 'external')
                                                            <a href="{{ $item['link'] }}" target="_blank"></a>
                                                        @endif
                                                    </div>

                                                    <div class="media-cell-desc">
                                                        <h3>{{ $item['title'] }}</h3>
                                                        <p class="category">{{ $item['category'] }}</p>
                                                    </div>

                                                </div>
                                            @endforeach

                                        </div>

                                        <!-- PORTFOLIO -->






                                    </div>
                                    <!-- .entry-content -->



                                </article>
                                <!-- .hentry -->


                            </div>
                            <!-- .page-single -->


                        </div>
                        <!-- site-content -->

                    </div>
                    <!-- primary -->





                </div>
                <!-- layout -->


            </div>
        </main>
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
