<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>آموزش برنامه نویسی دلووپر آموز</title>
    <link rel="icon" href="front/pics/Fevicon.png" type="image/png">
    <!-- start style and css -->
    <link rel="stylesheet" href="front/css/bootstrap.min.css">
    <link rel="stylesheet" href="front/css/themify-icons.css">
    <link rel="stylesheet" href="front/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="front/css/owl.carousel.min.css">
    <link rel="stylesheet" href="front/css/style.css">
</head>

<body>

    <header class="header-area">
        <div class="main-menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container box-1620">
                    <a class="navbar-brand logo-h" href="index.html"><img src="front/pics/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu-nav justify-content-end">
                            <li class="nav-item active"><a class="nav-link" href="index.html">خانه</a></li>
                            <li class="nav-item"><a class="nav-link" href="feature.html">ویژگی ها</a></li>
                            <li class="nav-item"><a class="nav-link" href="service.html">سرویس ها</a>
                            <li class="nav-item"><a class="nav-link" href="pricing.html">قیمت</a>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">صفحات</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="blog.html">بلاگ</a>
                                    <li class="nav-item"><a class="nav-link" href="blog-details.html">بلاگ
                                            با جزئیات</a>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="contact.html">تماس با ما</a></li>
                        </ul>

                        <div class="nav-left text-center text-lg-left py-4 py-lg-0">
                            {{--  <a class="button button-link ml-4" href="#"><span class="align-middle"><i
                                        class="ti-comments"></i></span> چت آنلاین</a>  --}}


                            @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                @auth
                                    <a href="{{ url('/dashboard') }}"
                                        class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                                @else
                                    {{-- <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a> --}}
                                    <a class="button button-outline button-small" href="{{ url('/dashboard') }}">ورود </a>

                                    @if (Route::has('register'))
                                        {{-- <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a> --}}
                                        <a class="button button-outline button-small" href="{{ route('register') }}"> ثبت
                                            نام </a>
                                    @endif
                                @endauth
                                {{-- </div> --}}
                            @endif

                            {{-- <a class="button button-outline button-small" href="#">ورود / ثبت نام </a> --}}
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>


    @yield('content')


    <footer class="footer-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
                    <h4>درباره ما</h4>
                    <p>از فضای میزبانی با نام هاست هم نام برده می‌شود که در اصل اگر Host را به فارسی برگردانی کنیم، همان
                        معنی و مفهوم فضای میزبانی را می‌دهد.</p>
                    <a class="navbar-brand logo-h d-none d-xl-block" href="index.html"><img src="front/pics/logo.png"
                            alt=""></a>
                </div>
                <div class="col-xl-3 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
                    <h4>اطلاعات تماس</h4>
                    <ul>
                        <li>آدرس : ایران | شیراز</li>
                        <li><a href="tel:+88044338899">تلفن : 09032309534</a></li>
                        <li><a href="mailto:info@colorlib.com">ایمیل : info@webrubik.com</a></li>
                    </ul>
                </div>
                <div class="col-xl-2 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
                    <h4>لینک های مهم</h4>
                    <ul>
                        <li><a href="#">قوانین و مقررات</a></li>
                        <li><a href="#">سوالات متداول</a></li>
                        <li><a href="#">حساب کاربری</a></li>
                    </ul>
                </div>
                <div class="offset-xl-1 col-xl-3 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
                    <h4>خبرنامه</h4>
                    <p>با عضویت در خبرنامه از تمامی خبرهای جدید و جدیدترین مطالب سایت باخبر شوید</p>

                    <div class="form-wrap" id="mc-embed-signup">
                        <form target="-blank" action="" method="get">
                            <div class="input-group">
                                <input type="email" class="form-control" name="EMAIL" placeholder="ایمیل شما"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'ایمیل شما '">
                                <div class="input-group-append">
                                    <button class="btn click-btn" type="submit">
                                        <i class="ti-arrow-left"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="info"></div>
                        </form>
                    </div>

                </div>
            </div>
            <div class="footer-bottom row align-items-center text-center text-lg-right">
                <p class="footer-text m-0 col-lg-8 col-md-12">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    CopyRight &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All Rights reserved | This template is made with <i class="ti-heart"
                        aria-hidden="true"></i> by <a href="https://colorlib.com" target="-blank">Colorlib</a>
                    <br>فارسی و راست چین شده با <i class="ti-heart" aria-hidden="true"></i> توسط <a
                        href="https://webrubik.com/" target="-blank">Webrubik.com</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
                <div class="col-lg-4 col-md-12 text-center text-lg-left footer-social">
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"><i class="ti-twitter-alt"></i></a>
                    <a href="#"><i class="ti-dribbble"></i></a>
                    <a href="#"><i class="ti-linkedin"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- start java scripts -->
    <script src="front/js/jquery-3.2.1.min.js"></script>
    <script src="front/js/bootstrap.bundle.min.js"></script>
    <script src="front/js/owl.carousel.min.js"></script>
    <script src="front/js/jquery.ajaxchimp.min.js"></script>
    <script src="front/js/scripts.js"></script>
</body><!-- This template has been downloaded from Webrubik.com -->

</html>
