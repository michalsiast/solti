<!doctype html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {!! SEOMeta::generate() !!}

    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('image/favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('image/favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('image/favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('image/favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('image/favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('image/favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('image/favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('image/favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('image/favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('image/favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('image/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('image/favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('image/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('image/favicon//manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


    <link href="{{asset('css/vendors/bootstrap.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link href="{{asset('css/main.css')}}?version=1" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontello.css')}}">
    <link rel="stylesheet" href="{{asset('css/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/default-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/default.css')}}">
    <link rel="stylesheet" href="{{asset('css/odometer.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('css/tg-cursor.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/2.10.3/simple-lightbox.min.css" integrity="sha512-Ne9/ZPNVK3w3pBBX6xE86bNG295dJl4CHttrCp3WmxO+8NQ2Vn8FltNr6UsysA1vm7NE6hfCszbXe3D6FUNFsA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script>
        const BASE_URL = '{{url()->to('/')}}/';
        const CSRF_TOKEN = '{{csrf_token()}}';
        const SITE_LANG = '{{app()->getLocale()}}';
    </script>

    @stack('scrips.head.bottom')
</head>
<body>
<!--Preloader-->
<div id="preloader">
    <div id="loader" class="loader">
        <div class="loader-container">
            <div class="loader-icon"><img src="{{asset('images/preloader.jpg')}}" alt="Preloader"></div>
        </div>
    </div>
</div>
<!--Preloader-end -->

<!-- Scroll-top -->
<button class="scroll__top scroll-to-target" data-target="html">
    <i class="renova-up-arrow"></i>
</button>
<!-- Scroll-top-end-->

<!-- header-area -->
<header>
    <div id="header-fixed-height"></div>
    <div id="sticky-header" class="tg-header__area">
        <div class="container custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="tgmenu__wrap">
                        <nav class="tgmenu__nav">
                            <div class="logo">
                                <a href="/"><img src="{{asset('images/logo.jpg')}}" alt="Solti Logo"></a>
                            </div>
                            <div class="tgmenu__navbar-wrap tgmenu__main-menu d-none d-xl-flex">
                                @include('default.nav_item.main', ['name' => 'main'])
                            </div>
                            <div class="tgmenu__action">
                                <ul class="list-wrap">
                                    @if(!empty(getConstField('facebook')))
                                        <li class="header-search"><a href="{{getConstField('facebook')}}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    @endif
                                    @if(!empty(getConstField('instagram')))
                                        <li class="header-search"><a href="{{getConstField('instagram')}}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                    @endif
                                </ul>
                            </div>
                            <div class="mobile-nav-toggler"><i class="tg-flaticon-menu-1"></i></div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Menu  -->
    <div class="tgmobile__menu">
        <nav class="tgmobile__menu-box">
            <div class="close-btn"><i class="tg-flaticon-close-1"></i></div>
            <div class="nav-logo">
                <a href="/"><img src="{{asset('images/logo.jpg')}}" alt="Logo"></a>
            </div>
            <div class="tgmobile__menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
            <div class="social-links">
                <ul class="list-wrap">
                    @if(!empty(getConstField('facebook')))
                        <li><a href="{{getConstField('facebook')}}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    @endif
                    @if(!empty(getConstField('instagram')))
                        <li><a href="{{getConstField('instagram')}}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    @endif
                </ul>
            </div>
        </nav>
    </div>
    <div class="tgmobile__menu-backdrop"></div>
</header>

<!-- main-area -->
<main class="main-area fix">
{{--@include('default._helpers.lang_nav')--}}

@yield('content')

</main>
<footer class="footer__area">
    <div class="container">
        <div class="footer__top">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                    <div class="footer__widget">
                        <div class="footer__logo">
                            <a href="/"><img src="{{asset('images/logo.jpg')}}" alt="Solti Logo"></a>
                        </div>
                        @if(!empty(getConstField('company_description')))
                        <div class="footer__content">
                            {!! getConstField('company_description') !!}
                        </div>
                        @endif
                        <div class="footer__social">
                            <ul class="list-wrap">
                                @if(!empty(getConstField('facebook')))
                                    <li><a href="{{getConstField('facebook')}}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                @endif
                                    @if(!empty(getConstField('instagram')))
                                    <li><a href="{{getConstField('instagram')}}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                    <div class="footer__widget">
                        <h4 class="footer__widget-title">Informacje o firmie</h4>
                        <div class="footer__widget-link">
                            <ul class="list-wrap">
                                @if(!empty(getConstField('company_name')))
                                <li>
                                    {{getConstField('company_name')}}
                                </li>
                                @endif
                                    @if(!empty(getConstField('company_address')))
                                <li>
                                    {{getConstField('company_address')}}
                                </li>
                                    @endif
                                        @if(!empty(getConstField('company_city')))
                                <li>
                                    {{getConstField('company_post_code')}} {{getConstField('company_city')}}
                                </li>
                                    @endif
                                            @if(!empty(getConstField('company_nip')))
                                <li>
                                    {{getConstField('company_nip')}}
                                </li>
                                    @endif
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                    <div class="footer__widget">
                        <h4 class="footer__widget-title">Dane kontaktowe</h4>
                        <div class="footer__widget-link">
                            <ul class="list-wrap">
                                @if(!empty(getConstField('person')))
                                <li>
                                    <a><i class="fas fa-user"></i><span>{{getConstField('person')}}</span></a>
                                </li>
                                @endif
                                    @if(!empty(getConstField('phone')))
                                <li style="display: flex">
                                    <i class="fas fa-phone" style="margin-top: 5px"></i><div>
                                        @if(!empty(getConstField('phone')))
                                            <a href="tel:{{str_replace(' ', '', getConstField('phone'))}}" style="margin-left: 10px;"><span>{{getConstField('phone')}}</span></a>
                                        @endif
                                        @if(!empty(getConstField('phone2')))
                                            <a href="tel:{{str_replace(' ', '', getConstField('phone2'))}}" style="margin-left: 10px;"><span>{{getConstField('phone2')}}</span></a>
                                        @endif
                                        @if(!empty(getConstField('phone3')))
                                            <a href="tel:{{str_replace(' ', '', getConstField('phone3'))}}" style="margin-left: 10px;"><span>{{getConstField('phone3')}}</span></a>
                                        @endif
                                    </div>
                                </li>
                                    @endif
                                        @if(!empty(getConstField('email')))
                                <li>
                                    <a href="mailto:{{getConstField('email')}}"><i class="fas fa-envelope"></i><span class="text-lowercase">{{getConstField('email')}}</span></a>
                                </li>
                                    @endif
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                    <div class="footer__widget">
                        <h4 class="footer__widget-title">Przydatne linki</h4>
                        <div class="footer__widget-link">
                            <ul class="list-wrap">
                                <li>
                                    <a href="{{route('offer.index')}}"><i class="renova-right-arrow"></i><span>Oferta</span></a>
                                </li>
                                <li>
                                    <a href="{{route('article.index')}}"><i class="renova-right-arrow"></i><span>Baza wiedzy</span></a>
                                </li>
                                <li>
                                    <a href="{{route('contact.show')}}"><i class="renova-right-arrow"></i><span>Kontakt</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="copyright-text">
                        <p class="text-center"><?php echo date("Y") ?> &copy; Wszelkie prawa zastrzeżone. Strona stworzona przez: <a href="https://palmax.pl">Palmax</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/2.10.3/simple-lightbox.jquery.min.js" integrity="sha512-iJCzEG+s9LeaFYGzCbDInUbnF03KbE1QV1LM983AW5EHLxrWQTQaZvQfAQgLFgfgoyozb1fhzhe/0jjyZPYbmQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{asset('js/frontend.js')}}"></script>
<script src="{{asset('js/main.min.js')}}"></script>

<script src="{{asset('js/vendor/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/jquery.odometer.min.js')}}"></script>
<script src="{{asset('js/jquery.appear.js')}}"></script>
<script src="{{asset('js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('js/jquery.marquee.min.js')}}"></script>
<script src="{{asset('js/tg-cursor.min.js')}}"></script>
<script src="{{asset('js/ajax-form.js')}}"></script>
<script src="{{asset('js/jquery-ui.min.js')}}"></script>
<script src="{{asset('js/svg-inject.min.js')}}"></script>
<script src="{{asset('js/tween-max.min.js')}}"></script>
<script src="{{asset('js/wow.min.js')}}"></script>
<script src="{{asset('js/aos.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script>
    SVGInject(document.querySelectorAll("img.injectable"));
</script>

@stack('scripts.body.bottom')
</body>
</html>
