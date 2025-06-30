<!DOCTYPE html>
<html lang="en">
<head>
    <title>FoodMart - Free eCommerce Grocery Store HTML Website Template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="stylesheet" href={{asset("https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css")}}>
    <link
        href={{asset("https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css")}} rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href={{asset("assets/css/vendor.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("style.css")}}>
    <link href="https://cdn.fontcdn.ir/Font/Persian/Vazir/Vazir.css" rel="stylesheet">

    <link rel="preconnect" href={{asset("https://fonts.googleapis.com")}}>
    <link rel="preconnect" href={{asset("https://fonts.gstatic.com")}} crossorigin>

    <link
        href={{asset("https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap")}} rel="stylesheet">
    <style>
        body {
            font-family: 'Vazir', sans-serif;
        }
    </style>
</head>
<body>

<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <defs>
        <symbol xmlns="http://www.w3.org/2000/svg" id="link" viewBox="0 0 24 24">
            <path fill="currentColor"
                  d="M12 19a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm5 0a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm0-4a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm-5 0a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm7-12h-1V2a1 1 0 0 0-2 0v1H8V2a1 1 0 0 0-2 0v1H5a3 3 0 0 0-3 3v14a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V6a3 3 0 0 0-3-3Zm1 17a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-9h16Zm0-11H4V6a1 1 0 0 1 1-1h1v1a1 1 0 0 0 2 0V5h8v1a1 1 0 0 0 2 0V5h1a1 1 0 0 1 1 1ZM7 15a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm0 4a1 1 0 1 0-1-1a1 1 0 0 0 1 1Z"/>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="arrow-right" viewBox="0 0 24 24">
            <path fill="currentColor"
                  d="M17.92 11.62a1 1 0 0 0-.21-.33l-5-5a1 1 0 0 0-1.42 1.42l3.3 3.29H7a1 1 0 0 0 0 2h7.59l-3.3 3.29a1 1 0 0 0 0 1.42a1 1 0 0 0 1.42 0l5-5a1 1 0 0 0 .21-.33a1 1 0 0 0 0-.76Z"/>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="category" viewBox="0 0 24 24">
            <path fill="currentColor"
                  d="M19 5.5h-6.28l-.32-1a3 3 0 0 0-2.84-2H5a3 3 0 0 0-3 3v13a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3v-10a3 3 0 0 0-3-3Zm1 13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-13a1 1 0 0 1 1-1h4.56a1 1 0 0 1 .95.68l.54 1.64a1 1 0 0 0 .95.68h7a1 1 0 0 1 1 1Z"/>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="calendar" viewBox="0 0 24 24">
            <path fill="currentColor"
                  d="M19 4h-2V3a1 1 0 0 0-2 0v1H9V3a1 1 0 0 0-2 0v1H5a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3Zm1 15a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-7h16Zm0-9H4V7a1 1 0 0 1 1-1h2v1a1 1 0 0 0 2 0V6h6v1a1 1 0 0 0 2 0V6h2a1 1 0 0 1 1 1Z"/>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="heart" viewBox="0 0 24 24">
            <path fill="currentColor"
                  d="M20.16 4.61A6.27 6.27 0 0 0 12 4a6.27 6.27 0 0 0-8.16 9.48l7.45 7.45a1 1 0 0 0 1.42 0l7.45-7.45a6.27 6.27 0 0 0 0-8.87Zm-1.41 7.46L12 18.81l-6.75-6.74a4.28 4.28 0 0 1 3-7.3a4.25 4.25 0 0 1 3 1.25a1 1 0 0 0 1.42 0a4.27 4.27 0 0 1 6 6.05Z"/>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="plus" viewBox="0 0 24 24">
            <path fill="currentColor"
                  d="M19 11h-6V5a1 1 0 0 0-2 0v6H5a1 1 0 0 0 0 2h6v6a1 1 0 0 0 2 0v-6h6a1 1 0 0 0 0-2Z"/>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="minus" viewBox="0 0 24 24">
            <path fill="currentColor" d="M19 11H5a1 1 0 0 0 0 2h14a1 1 0 0 0 0-2Z"/>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="cart" viewBox="0 0 24 24">
            <path fill="currentColor"
                  d="M8.5 19a1.5 1.5 0 1 0 1.5 1.5A1.5 1.5 0 0 0 8.5 19ZM19 16H7a1 1 0 0 1 0-2h8.491a3.013 3.013 0 0 0 2.885-2.176l1.585-5.55A1 1 0 0 0 19 5H6.74a3.007 3.007 0 0 0-2.82-2H3a1 1 0 0 0 0 2h.921a1.005 1.005 0 0 1 .962.725l.155.545v.005l1.641 5.742A3 3 0 0 0 7 18h12a1 1 0 0 0 0-2Zm-1.326-9l-1.22 4.274a1.005 1.005 0 0 1-.963.726H8.754l-.255-.892L7.326 7ZM16.5 19a1.5 1.5 0 1 0 1.5 1.5a1.5 1.5 0 0 0-1.5-1.5Z"/>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="check" viewBox="0 0 24 24">
            <path fill="currentColor"
                  d="M18.71 7.21a1 1 0 0 0-1.42 0l-7.45 7.46l-3.13-3.14A1 1 0 1 0 5.29 13l3.84 3.84a1 1 0 0 0 1.42 0l8.16-8.16a1 1 0 0 0 0-1.47Z"/>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="trash" viewBox="0 0 24 24">
            <path fill="currentColor"
                  d="M10 18a1 1 0 0 0 1-1v-6a1 1 0 0 0-2 0v6a1 1 0 0 0 1 1ZM20 6h-4V5a3 3 0 0 0-3-3h-2a3 3 0 0 0-3 3v1H4a1 1 0 0 0 0 2h1v11a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8h1a1 1 0 0 0 0-2ZM10 5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v1h-4Zm7 14a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1V8h10Zm-3-1a1 1 0 0 0 1-1v-6a1 1 0 0 0-2 0v6a1 1 0 0 0 1 1Z"/>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="star-outline" viewBox="0 0 15 15">
            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                  d="M7.5 9.804L5.337 11l.413-2.533L4 6.674l2.418-.37L7.5 4l1.082 2.304l2.418.37l-1.75 1.793L9.663 11L7.5 9.804Z"/>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="star-solid" viewBox="0 0 15 15">
            <path fill="currentColor"
                  d="M7.953 3.788a.5.5 0 0 0-.906 0L6.08 5.85l-2.154.33a.5.5 0 0 0-.283.843l1.574 1.613l-.373 2.284a.5.5 0 0 0 .736.518l1.92-1.063l1.921 1.063a.5.5 0 0 0 .736-.519l-.373-2.283l1.574-1.613a.5.5 0 0 0-.283-.844L8.921 5.85l-.968-2.062Z"/>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="search" viewBox="0 0 24 24">
            <path fill="currentColor"
                  d="M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.39ZM11 18a7 7 0 1 1 7-7a7 7 0 0 1-7 7Z"/>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="user" viewBox="0 0 24 24">
            <path fill="currentColor"
                  d="M15.71 12.71a6 6 0 1 0-7.42 0a10 10 0 0 0-6.22 8.18a1 1 0 0 0 2 .22a8 8 0 0 1 15.9 0a1 1 0 0 0 1 .89h.11a1 1 0 0 0 .88-1.1a10 10 0 0 0-6.25-8.19ZM12 12a4 4 0 1 1 4-4a4 4 0 0 1-4 4Z"/>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="close" viewBox="0 0 15 15">
            <path fill="currentColor"
                  d="M7.953 3.788a.5.5 0 0 0-.906 0L6.08 5.85l-2.154.33a.5.5 0 0 0-.283.843l1.574 1.613l-.373 2.284a.5.5 0 0 0 .736.518l1.92-1.063l1.921 1.063a.5.5 0 0 0 .736-.519l-.373-2.283l1.574-1.613a.5.5 0 0 0-.283-.844L8.921 5.85l-.968-2.062Z"/>
        </symbol>
    </defs>
</svg>

<div class="preloader-wrapper">
    <div class="preloader">
    </div>
</div>

<div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasCart" aria-labelledby="My Cart">
    <div class="offcanvas-header justify-content-center">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="order-md-last">
            <h4 class="text-center mb-4 text-primary">پروفایل کاربری</h4>

            <ul class="list-group mb-3 list-group-spaced text-center">

                <li class="list-group-item">
                    <a><h6 class="my-0 m-0">مشاهده پروفایل</h6></a>
                </li>

                <li class="list-group-item">
                    <a><h6 class="my-0 m-0">تغییر رمز عبور</h6></a>
                </li>

            </ul>

            <style>
                .list-group-spaced .list-group-item + .list-group-item {
                    margin-top: 0.75rem;
                }
            </style>


            <button class="w-100 btn btn-primary btn-lg" type="submit">خروج از حساب کاربری</button>
        </div>
    </div>
</div>

<div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasSearch" aria-labelledby="Search">
    <div class="offcanvas-header justify-content-center">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="order-md-last">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-primary">Search</span>
            </h4>
            <form role="search" action="index.html" method="get" class="d-flex mt-3 gap-0">
                <input class="form-control rounded-start rounded-0 bg-light" type="email"
                       placeholder="What are you looking for?" aria-label="What are you looking for?">
                <button class="btn btn-dark rounded-end rounded-0" type="submit">Search</button>
            </form>
        </div>
    </div>
</div>

<!--------- header Section ---------->
<header style="background-color: #fcfdff;">
    <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-between flex-wrap py-4 border-bottom gap-3">

            <!-- لوگو -->
            <div class="main-logo">
                <a href="index.html">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="logo" class="img-fluid"
                         style="max-height: 65px;">
                </a>
            </div>

            <!-- نوار جستجو با وسط‌چینی -->
            <div class="search-bar d-flex align-items-center gap-2 bg-light px-3 py-2 rounded-4"
                 style="max-width: 580px; flex: 1;">
                <select id="provinceSelect" class="form-select w-auto border-0 bg-transparent"
                        style="font-size: 0.95rem;">
                    <option value="">استان</option>
                    <option>آذربایجان شرقی</option>
                </select>

                <select id="citySelect" class="form-select w-auto border-0 bg-transparent" style="font-size: 0.95rem;">
                    <option value="">شهر</option>
                </select>

                <!-- اینپوت وسط‌چین -->
                <input type="text"
                       class="form-control border-0 bg-transparent flex-grow-1 text-center"
                       placeholder="جستجو میان ۲۰,۰۰۰ کالا"
                       style="font-size: 0.95rem;">

                <button class="btn p-0" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22">
                        <path fill="currentColor"
                              d="M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.39ZM11 18a7 7 0 1 1 7-7a7 7 0 0 1-7 7Z"/>
                    </svg>
                </button>
            </div>

            <!-- فقط دکمه پروفایل باقی‌مانده -->
            <div class="d-flex gap-4 align-items-center">

                <div class="cart text-end d-none d-lg-block dropdown">
                    <button class="border-0 bg-transparent d-flex flex-column gap-2 lh-1" type="button"
                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart" aria-controls="offcanvasCart">
                        <span class="fs-6 text-muted dropdown-toggle">
                          <a href="#" class="rounded-circle bg-light p-2 mx-1">
                            <svg width="24" height="24" viewBox="0 0 24 24"><use xlink:href="#user"></use></svg>
                          </a>
                        </span>
                        {{--<span class="cart-total fs-5 fw-bold">پروفایل</span>--}}
                    </button>
                </div>

            </div>
        </div>
    </div>
</header>

<!--------- Banner Section ---------->
<section class="py-3"
         style="background-image: url({{asset('assets/images/background-pattern.jpg')}});background-repeat: no-repeat;background-size: cover;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="banner-blocks">

                    <!-- بنر اصلی سمت چپ -->
                    <div class="banner-ad large bg-info block-1">
                        <div class="swiper main-swiper">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="row banner-content p-5">
                                        <div class="content-wrapper col-md-7">
                                            <div class="categories my-3">همه مجتمع‌های شهر در یک نگاه</div>
                                            <h3 class="display-4">با MALLIO، خرید شهری رو متفاوت تجربه کن</h3>
                                            <p>لیست کامل مراکز خرید، فروشگاه‌ها، فودکورت و امکانات تفریحی با یک کلیک.</p>
                                            <a href="#"
                                               class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1 px-4 py-3 mt-3">مشاهده مراکز</a>
                                        </div>
                                        <div class="img-wrapper col-md-5">
                                            <img src={{asset("assets/images/product-thumb-1.png")}} class="img-fluid">
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="row banner-content p-5">
                                        <div class="content-wrapper col-md-7">
                                            <div class="categories mb-3 pb-3">پیشنهاد ویژه این هفته</div>
                                            <h3 class="banner-title">مرکز خرید نارون | طبقه همکف</h3>
                                            <p>فروشگاه‌های منتخب با تخفیف‌های ویژه و تنوع بی‌نظیر.</p>
                                            <a href="#"
                                               class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1">فروشگاه‌ها</a>
                                        </div>
                                        <div class="img-wrapper col-md-5">
                                            <img src="{{ asset('assets/images/product-thumb-1.png') }}"
                                                 class="img-fluid">
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="row banner-content p-5">
                                        <div class="content-wrapper col-md-7">
                                            <div class="categories mb-3 pb-3">خدمات رفاهی در شهر</div>
                                            <h3 class="banner-title">جای پارک، آسانسور، اتاق کودک و بیشتر</h3>
                                            <p>تمام جزئیات امکانات رفاهی مجتمع‌های شهر را اینجا ببین.</p>
                                            <a href="#"
                                               class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1">خدمات رفاهی</a>
                                        </div>
                                        <div class="img-wrapper col-md-5">
                                            <img src="{{ asset('assets/images/product-thumb-2.png') }}"
                                                 class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <!-- بنر بالا سمت راست -->
                    <div class="banner-ad bg-success-subtle block-2"
                         style="background:url({{ asset('assets/images/ad-image-1.png') }}) no-repeat;background-position: right bottom">
                        <div class="row banner-content p-5">
                            <div class="content-wrapper col-md-7">
                                <div class="categories sale mb-3 pb-3">۳۰٪ تخفیف تابستانه</div>
                                <h3 class="banner-title">پردیس ملت</h3>
                                <a href="#" class="d-flex align-items-center nav-link">مشاهده فروشگاه‌ها
                                    <svg width="24" height="24">
                                        <use xlink:href="#arrow-right"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- بنر پایین سمت راست -->
                    <div class="banner-ad bg-danger block-3"
                         style="background:url({{asset('assets/images/ad-image-2.png')}}) no-repeat;background-position: right bottom">
                        <div class="row banner-content p-5">
                            <div class="content-wrapper col-md-7">
                                <div class="categories sale mb-3 pb-3">فودکورت محبوب شهر</div>
                                <h3 class="item-title">مجتمع ستاره - طبقه سوم</h3>
                                <a href="#" class="d-flex align-items-center nav-link">دیدن رستوران‌ها
                                    <svg width="24" height="24">
                                        <use xlink:href="#arrow-right"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- / Banner Blocks -->

            </div>
        </div>
    </div>
</section>

<!--------- store Section ---------->
<section class="py-5 overflow-hidden" dir="rtl">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="section-header d-flex flex-wrap justify-content-between mb-5">

                    <h2 class="section-title">فروشگاه‌های تجاری شهر تبریز</h2>

                    <div class="d-flex align-items-center">
                        <a href="#" class="btn-link text-decoration-none">← مشاهده همه فروشگاه‌ها</a>
                        <div class="swiper-buttons me-3">
                            <button class="swiper-prev brand-carousel-prev btn btn-yellow">❮</button>
                            <button class="swiper-next brand-carousel-next btn btn-yellow">❯</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <div class="brand-carousel swiper">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="card mb-3 p-3 rounded-4 shadow border-0">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{ asset('assets/images/product-thumb-11.jpg') }}"
                                             class="img-fluid rounded" alt="Card title">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body py-0">
                                            <p class="text-muted mb-0">مرکز خرید لاله پارک</p>
                                            <h5 class="card-title">تنوعی از پوشاک برند در تبریز</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card mb-3 p-3 rounded-4 shadow border-0">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{ asset('assets/images/product-thumb-12.jpg') }}"
                                             class="img-fluid rounded" alt="Card title">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body py-0">
                                            <p class="text-muted mb-0">مجتمع تجاری اطلس</p>
                                            <h5 class="card-title">پوشاک، کیف و کفش با قیمت مناسب</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card mb-3 p-3 rounded-4 shadow border-0">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{ asset('assets/images/product-thumb-13.jpg') }}"
                                             class="img-fluid rounded" alt="Card title">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body py-0">
                                            <p class="text-muted mb-0">مرکز خرید ستاره باران</p>
                                            <h5 class="card-title">مدرن‌ترین مراکز تفریحی و تجاری</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card mb-3 p-3 rounded-4 shadow border-0">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{ asset('assets/images/product-thumb-14.jpg') }}"
                                             class="img-fluid rounded" alt="Card title">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body py-0">
                                            <p class="text-muted mb-0">مجتمع پردیس</p>
                                            <h5 class="card-title">فودکورت، سینما و فروشگاه‌های لوکس</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- تکرار آیتم‌ها -->
                        <div class="swiper-slide">
                            <div class="card mb-3 p-3 rounded-4 shadow border-0">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{ asset('assets/images/product-thumb-11.jpg') }}"
                                             class="img-fluid rounded" alt="Card title">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body py-0">
                                            <p class="text-muted mb-0">پاساژ شریعتی</p>
                                            <h5 class="card-title">مرکز تخصصی لوازم خانگی</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card mb-3 p-3 rounded-4 shadow border-0">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{ asset('assets/images/product-thumb-12.jpg') }}"
                                             class="img-fluid rounded" alt="Card title">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body py-0">
                                            <p class="text-muted mb-0">مرکز خرید رشدیه</p>
                                            <h5 class="card-title">خرید راحت با پارکینگ اختصاصی</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!--------- Product Section ---------->
<section class="py-5" dir="rtl">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">

                <div class="bootstrap-tabs product-tabs">
                    <div class="tabs-header d-flex justify-content-between border-bottom my-5">
                        <h3>محصولات پرطرفدار</h3>
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a href="#" class="nav-link text-uppercase fs-6 active" id="nav-all-tab"
                                   data-bs-toggle="tab" data-bs-target="#nav-all">همه</a>
                                <a href="#" class="nav-link text-uppercase fs-6" id="nav-clothes-tab"
                                   data-bs-toggle="tab" data-bs-target="#nav-clothes">پوشاک</a>
                                <a href="#" class="nav-link text-uppercase fs-6" id="nav-bags-tab"
                                   data-bs-toggle="tab" data-bs-target="#nav-bags">کیف و کفش</a>
                                <a href="#" class="nav-link text-uppercase fs-6" id="nav-food-tab"
                                   data-bs-toggle="tab" data-bs-target="#nav-food">غذا</a>
                            </div>
                        </nav>
                    </div>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-all" role="tabpanel"
                             aria-labelledby="nav-all-tab">

                            <div
                                class="product-grid row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">

                                <div class="col">
                                    <div class="product-item">
                                        <span class="badge bg-success position-absolute m-3">-30%</span>
                                        <a href="#" class="btn-wishlist">
                                            <svg width="24" height="24">
                                                <use xlink:href="#heart"></use>
                                            </svg>
                                        </a>
                                        <figure>
                                            <a href="index.html" title="عنوان محصول">
                                                <img src="{{ asset('assets/images/thumb-bananas.png') }}"
                                                     class="tab-image">
                                            </a>
                                        </figure>
                                        <h3>آب میوه تازه ملون سان استار</h3>
                                        <span class="qty">1 واحد</span><span class="rating"><svg width="24" height="24"
                                                                                                 class="text-primary"><use
                                                    xlink:href="#star-solid"></use></svg> 4.5</span>
                                        <span class="price">180,000 تومان</span>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="input-group product-qty">
                              <span class="input-group-btn">
                                  <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                          data-type="minus">
                                    <svg width="16" height="16"><use xlink:href="#minus"></use></svg>
                                  </button>
                              </span>
                                                <input type="text" id="quantity" name="quantity"
                                                       class="form-control input-number" value="1">
                                                <span class="input-group-btn">
                                  <button type="button" class="quantity-right-plus btn btn-success btn-number"
                                          data-type="plus">
                                      <svg width="16" height="16"><use xlink:href="#plus"></use></svg>
                                  </button>
                              </span>
                                            </div>
                                            <a href="#" class="nav-link">افزودن به سبد خرید
                                                <iconify-icon icon="uil:shopping-cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="product-item">
                                        <span class="badge bg-success position-absolute m-3">-30%</span>
                                        <a href="#" class="btn-wishlist">
                                            <svg width="24" height="24">
                                                <use xlink:href="#heart"></use>
                                            </svg>
                                        </a>
                                        <figure>
                                            <a href="index.html" title="عنوان محصول">
                                                <img src="{{ asset('assets/images/thumb-biscuits.png') }}"
                                                     class="tab-image">
                                            </a>
                                        </figure>
                                        <h3>آب میوه تازه ملون سان استار</h3>
                                        <span class="qty">1 واحد</span><span class="rating"><svg width="24" height="24"
                                                                                                 class="text-primary"><use
                                                    xlink:href="#star-solid"></use></svg> 4.5</span>
                                        <span class="price">180,000 تومان</span>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="input-group product-qty">
                              <span class="input-group-btn">
                                  <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                          data-type="minus">
                                    <svg width="16" height="16"><use xlink:href="#minus"></use></svg>
                                  </button>
                              </span>
                                                <input type="text" id="quantity" name="quantity"
                                                       class="form-control input-number" value="1">
                                                <span class="input-group-btn">
                                  <button type="button" class="quantity-right-plus btn btn-success btn-number"
                                          data-type="plus">
                                      <svg width="16" height="16"><use xlink:href="#plus"></use></svg>
                                  </button>
                              </span>
                                            </div>
                                            <a href="#" class="nav-link">افزودن به سبد خرید
                                                <iconify-icon icon="uil:shopping-cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="product-item">
                                        <a href="#" class="btn-wishlist">
                                            <svg width="24" height="24">
                                                <use xlink:href="#heart"></use>
                                            </svg>
                                        </a>
                                        <figure>
                                            <a href="index.html" title="عنوان محصول">
                                                <img src="{{ asset('assets/images/thumb-cucumber.png') }}"
                                                     class="tab-image">
                                            </a>
                                        </figure>
                                        <h3>آب میوه تازه ملون سان استار</h3>
                                        <span class="qty">1 واحد</span><span class="rating"><svg width="24" height="24"
                                                                                                 class="text-primary"><use
                                                    xlink:href="#star-solid"></use></svg> 4.5</span>
                                        <span class="price">180,000 تومان</span>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="input-group product-qty">
                              <span class="input-group-btn">
                                  <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                          data-type="minus">
                                    <svg width="16" height="16"><use xlink:href="#minus"></use></svg>
                                  </button>
                              </span>
                                                <input type="text" id="quantity" name="quantity"
                                                       class="form-control input-number" value="1">
                                                <span class="input-group-btn">
                                  <button type="button" class="quantity-right-plus btn btn-success btn-number"
                                          data-type="plus">
                                      <svg width="16" height="16"><use xlink:href="#plus"></use></svg>
                                  </button>
                              </span>
                                            </div>
                                            <a href="#" class="nav-link">افزودن به سبد خرید
                                                <iconify-icon icon="uil:shopping-cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="product-item">
                                        <a href="#" class="btn-wishlist">
                                            <svg width="24" height="24">
                                                <use xlink:href="#heart"></use>
                                            </svg>
                                        </a>
                                        <figure>
                                            <a href="index.html" title="عنوان محصول">
                                                <img src="{{ asset('assets/images/thumb-milk.png') }}"
                                                     class="tab-image">
                                            </a>
                                        </figure>
                                        <h3>آب میوه تازه ملون سان استار</h3>
                                        <span class="qty">1 واحد</span><span class="rating"><svg width="24" height="24"
                                                                                                 class="text-primary"><use
                                                    xlink:href="#star-solid"></use></svg> 4.5</span>
                                        <span class="price">180,000 تومان</span>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="input-group product-qty">
                              <span class="input-group-btn">
                                  <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                          data-type="minus">
                                    <svg width="16" height="16"><use xlink:href="#minus"></use></svg>
                                  </button>
                              </span>
                                                <input type="text" id="quantity" name="quantity"
                                                       class="form-control input-number" value="1">
                                                <span class="input-group-btn">
                                  <button type="button" class="quantity-right-plus btn btn-success btn-number"
                                          data-type="plus">
                                      <svg width="16" height="16"><use xlink:href="#plus"></use></svg>
                                  </button>
                              </span>
                                            </div>
                                            <a href="#" class="nav-link">افزودن به سبد خرید
                                                <iconify-icon icon="uil:shopping-cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="product-item">
                                        <a href="#" class="btn-wishlist">
                                            <svg width="24" height="24">
                                                <use xlink:href="#heart"></use>
                                            </svg>
                                        </a>
                                        <figure>
                                            <a href="index.html" title="عنوان محصول">
                                                <img src="{{ asset('assets/images/thumb-bananas.png') }}"
                                                     class="tab-image">
                                            </a>
                                        </figure>
                                        <h3>آب میوه تازه ملون سان استار</h3>
                                        <span class="qty">1 واحد</span><span class="rating"><svg width="24" height="24"
                                                                                                 class="text-primary"><use
                                                    xlink:href="#star-solid"></use></svg> 4.5</span>
                                        <span class="price">180,000 تومان</span>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="input-group product-qty">
                              <span class="input-group-btn">
                                  <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                          data-type="minus">
                                    <svg width="16" height="16"><use xlink:href="#minus"></use></svg>
                                  </button>
                              </span>
                                                <input type="text" id="quantity" name="quantity"
                                                       class="form-control input-number" value="1">
                                                <span class="input-group-btn">
                                  <button type="button" class="quantity-right-plus btn btn-success btn-number"
                                          data-type="plus">
                                      <svg width="16" height="16"><use xlink:href="#plus"></use></svg>
                                  </button>
                              </span>
                                            </div>
                                            <a href="#" class="nav-link">افزودن به سبد خرید
                                                <iconify-icon icon="uil:shopping-cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="product-item">
                                        <a href="#" class="btn-wishlist">
                                            <svg width="24" height="24">
                                                <use xlink:href="#heart"></use>
                                            </svg>
                                        </a>
                                        <figure>
                                            <a href="index.html" title="عنوان محصول">
                                                <img src="{{ asset('assets/images/thumb-biscuits.png') }}"
                                                     class="tab-image">
                                            </a>
                                        </figure>
                                        <h3>آب میوه تازه ملون سان استار</h3>
                                        <span class="qty">1 واحد</span><span class="rating"><svg width="24" height="24"
                                                                                                 class="text-primary"><use
                                                    xlink:href="#star-solid"></use></svg> 4.5</span>
                                        <span class="price">180,000 تومان</span>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="input-group product-qty">
                              <span class="input-group-btn">
                                  <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                          data-type="minus">
                                    <svg width="16" height="16"><use xlink:href="#minus"></use></svg>
                                  </button>
                              </span>
                                                <input type="text" id="quantity" name="quantity"
                                                       class="form-control input-number" value="1">
                                                <span class="input-group-btn">
                                  <button type="button" class="quantity-right-plus btn btn-success btn-number"
                                          data-type="plus">
                                      <svg width="16" height="16"><use xlink:href="#plus"></use></svg>
                                  </button>
                              </span>
                                            </div>
                                            <a href="#" class="nav-link">افزودن به سبد خرید
                                                <iconify-icon icon="uil:shopping-cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="product-item">
                                        <a href="#" class="btn-wishlist">
                                            <svg width="24" height="24">
                                                <use xlink:href="#heart"></use>
                                            </svg>
                                        </a>
                                        <figure>
                                            <a href="index.html" title="عنوان محصول">
                                                <img src="{{ asset('assets/images/thumb-cucumber.png') }}"
                                                     class="tab-image">
                                            </a>
                                        </figure>
                                        <h3>آب میوه تازه ملون سان استار</h3>
                                        <span class="qty">1 واحد</span><span class="rating"><svg width="24" height="24"
                                                                                                 class="text-primary"><use
                                                    xlink:href="#star-solid"></use></svg> 4.5</span>
                                        <span class="price">180,000 تومان</span>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="input-group product-qty">
                              <span class="input-group-btn">
                                  <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                          data-type="minus">
                                    <svg width="16" height="16"><use xlink:href="#minus"></use></svg>
                                  </button>
                              </span>
                                                <input type="text" id="quantity" name="quantity"
                                                       class="form-control input-number" value="1">
                                                <span class="input-group-btn">
                                  <button type="button" class="quantity-right-plus btn btn-success btn-number"
                                          data-type="plus">
                                      <svg width="16" height="16"><use xlink:href="#plus"></use></svg>
                                  </button>
                              </span>
                                            </div>
                                            <a href="#" class="nav-link">افزودن به سبد خرید
                                                <iconify-icon icon="uil:shopping-cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="product-item">
                                        <a href="#" class="btn-wishlist">
                                            <svg width="24" height="24">
                                                <use xlink:href="#heart"></use>
                                            </svg>
                                        </a>
                                        <figure>
                                            <a href="index.html" title="عنوان محصول">
                                                <img src="{{ asset('assets/images/thumb-milk.png') }}"
                                                     class="tab-image">
                                            </a>
                                        </figure>
                                        <h3>آب میوه تازه ملون سان استار</h3>
                                        <span class="qty">1 واحد</span><span class="rating"><svg width="24" height="24"
                                                                                                 class="text-primary"><use
                                                    xlink:href="#star-solid"></use></svg> 4.5</span>
                                        <span class="price">180,000 تومان</span>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="input-group product-qty">
                              <span class="input-group-btn">
                                  <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                          data-type="minus">
                                    <svg width="16" height="16"><use xlink:href="#minus"></use></svg>
                                  </button>
                              </span>
                                                <input type="text" id="quantity" name="quantity"
                                                       class="form-control input-number" value="1">
                                                <span class="input-group-btn">
                                  <button type="button" class="quantity-right-plus btn btn-success btn-number"
                                          data-type="plus">
                                      <svg width="16" height="16"><use xlink:href="#plus"></use></svg>
                                  </button>
                              </span>
                                            </div>
                                            <a href="#" class="nav-link">افزودن به سبد خرید
                                                <iconify-icon icon="uil:shopping-cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="product-item">
                                        <a href="#" class="btn-wishlist">
                                            <svg width="24" height="24">
                                                <use xlink:href="#heart"></use>
                                            </svg>
                                        </a>
                                        <figure>
                                            <a href="index.html" title="عنوان محصول">
                                                <img src="{{ asset('assets/images/thumb-bananas.png') }}"
                                                     class="tab-image">
                                            </a>
                                        </figure>
                                        <h3>آب میوه تازه ملون سان استار</h3>
                                        <span class="qty">1 واحد</span><span class="rating"><svg width="24" height="24"
                                                                                                 class="text-primary"><use
                                                    xlink:href="#star-solid"></use></svg> 4.5</span>
                                        <span class="price">180,000 تومان</span>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="input-group product-qty">
                              <span class="input-group-btn">
                                  <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                          data-type="minus">
                                    <svg width="16" height="16"><use xlink:href="#minus"></use></svg>
                                  </button>
                              </span>
                                                <input type="text" id="quantity" name="quantity"
                                                       class="form-control input-number" value="1">
                                                <span class="input-group-btn">
                                  <button type="button" class="quantity-right-plus btn btn-success btn-number"
                                          data-type="plus">
                                      <svg width="16" height="16"><use xlink:href="#plus"></use></svg>
                                  </button>
                              </span>
                                            </div>
                                            <a href="#" class="nav-link">افزودن به سبد خرید
                                                <iconify-icon icon="uil:shopping-cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="product-item">
                                        <a href="#" class="btn-wishlist">
                                            <svg width="24" height="24">
                                                <use xlink:href="#heart"></use>
                                            </svg>
                                        </a>
                                        <figure>
                                            <a href="index.html" title="عنوان محصول">
                                                <img src="{{ asset('assets/images/thumb-biscuits.png') }}"
                                                     class="tab-image">
                                            </a>
                                        </figure>
                                        <h3>آب میوه تازه ملون سان استار</h3>
                                        <span class="qty">1 واحد</span><span class="rating"><svg width="24" height="24"
                                                                                                 class="text-primary"><use
                                                    xlink:href="#star-solid"></use></svg> 4.5</span>
                                        <span class="price">180,000 تومان</span>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="input-group product-qty">
                              <span class="input-group-btn">
                                  <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                          data-type="minus">
                                    <svg width="16" height="16"><use xlink:href="#minus"></use></svg>
                                  </button>
                              </span>
                                                <input type="text" id="quantity" name="quantity"
                                                       class="form-control input-number" value="1">
                                                <span class="input-group-btn">
                                  <button type="button" class="quantity-right-plus btn btn-success btn-number"
                                          data-type="plus">
                                      <svg width="16" height="16"><use xlink:href="#plus"></use></svg>
                                  </button>
                              </span>
                                            </div>
                                            <a href="#" class="nav-link">افزودن به سبد خرید
                                                <iconify-icon icon="uil:shopping-cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- / product-grid -->

                        </div>

                        <div class="tab-pane fade" id="nav-clothes" role="tabpanel" aria-labelledby="nav-clothes-tab">

                            <div
                                class="product-grid row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">

                                <div class="col">
                                    <div class="product-item">
                                        <span class="badge bg-success position-absolute m-3">-30%</span>
                                        <a href="#" class="btn-wishlist">
                                            <svg width="24" height="24">
                                                <use xlink:href="#heart"></use>
                                            </svg>
                                        </a>
                                        <figure>
                                            <a href="index.html" title="عنوان محصول">
                                                <img src="{{ asset('assets/images/thumb-cucumber.png') }}"
                                                     class="tab-image">
                                            </a>
                                        </figure>
                                        <h3>آب میوه تازه ملون سان استار</h3>
                                        <span class="qty">1 واحد</span><span class="rating"><svg width="24" height="24"
                                                                                                 class="text-primary"><use
                                                    xlink:href="#star-solid"></use></svg> 4.5</span>
                                        <span class="price">180,000 تومان</span>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="input-group product-qty">
                              <span class="input-group-btn">
                                  <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                          data-type="minus">
                                    <svg width="16" height="16"><use xlink:href="#minus"></use></svg>
                                  </button>
                              </span>
                                                <input type="text" id="quantity" name="quantity"
                                                       class="form-control input-number" value="1">
                                                <span class="input-group-btn">
                                  <button type="button" class="quantity-right-plus btn btn-success btn-number"
                                          data-type="plus">
                                      <svg width="16" height="16"><use xlink:href="#plus"></use></svg>
                                  </button>
                              </span>
                                            </div>
                                            <a href="#" class="nav-link">افزودن به سبد خرید
                                                <iconify-icon icon="uil:shopping-cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="product-item">
                                        <span class="badge bg-success position-absolute m-3">-30%</span>
                                        <a href="#" class="btn-wishlist">
                                            <svg width="24" height="24">
                                                <use xlink:href="#heart"></use>
                                            </svg>
                                        </a>
                                        <figure>
                                            <a href="index.html" title="عنوان محصول">
                                                <img src="{{ asset('assets/images/thumb-milk.png') }}"
                                                     class="tab-image">
                                            </a>
                                        </figure>
                                        <h3>آب میوه تازه ملون سان استار</h3>
                                        <span class="qty">1 واحد</span><span class="rating"><svg width="24" height="24"
                                                                                                 class="text-primary"><use
                                                    xlink:href="#star-solid"></use></svg> 4.5</span>
                                        <span class="price">180,000 تومان</span>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="input-group product-qty">
                              <span class="input-group-btn">
                                  <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                          data-type="minus">
                                    <svg width="16" height="16"><use xlink:href="#minus"></use></svg>
                                  </button>
                              </span>
                                                <input type="text" id="quantity" name="quantity"
                                                       class="form-control input-number" value="1">
                                                <span class="input-group-btn">
                                  <button type="button" class="quantity-right-plus btn btn-success btn-number"
                                          data-type="plus">
                                      <svg width="16" height="16"><use xlink:href="#plus"></use></svg>
                                  </button>
                              </span>
                                            </div>
                                            <a href="#" class="nav-link">افزودن به سبد خرید
                                                <iconify-icon icon="uil:shopping-cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="product-item">
                                        <span class="badge bg-success position-absolute m-3">-30%</span>
                                        <a href="#" class="btn-wishlist">
                                            <svg width="24" height="24">
                                                <use xlink:href="#heart"></use>
                                            </svg>
                                        </a>
                                        <figure>
                                            <a href="index.html" title="عنوان محصول">
                                                <img src="{{ asset('assets/images/thumb-orange-juice.png') }}"
                                                     class="tab-image">
                                            </a>
                                        </figure>
                                        <h3>آب میوه تازه ملون سان استار</h3>
                                        <span class="qty">1 واحد</span><span class="rating"><svg width="24" height="24"
                                                                                                 class="text-primary"><use
                                                    xlink:href="#star-solid"></use></svg> 4.5</span>
                                        <span class="price">180,000 تومان</span>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="input-group product-qty">
                              <span class="input-group-btn">
                                  <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                          data-type="minus">
                                    <svg width="16" height="16"><use xlink:href="#minus"></use></svg>
                                  </button>
                              </span>
                                                <input type="text" id="quantity" name="quantity"
                                                       class="form-control input-number" value="1">
                                                <span class="input-group-btn">
                                  <button type="button" class="quantity-right-plus btn btn-success btn-number"
                                          data-type="plus">
                                      <svg width="16" height="16"><use xlink:href="#plus"></use></svg>
                                  </button>
                              </span>
                                            </div>
                                            <a href="#" class="nav-link">افزودن به سبد خرید
                                                <iconify-icon icon="uil:shopping-cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="product-item">
                                        <a href="#" class="btn-wishlist">
                                            <svg width="24" height="24">
                                                <use xlink:href="#heart"></use>
                                            </svg>
                                        </a>
                                        <figure>
                                            <a href="index.html" title="عنوان محصول">
                                                <img src="{{ asset('assets/images/thumb-raspberries.png') }}"
                                                     class="tab-image">
                                            </a>
                                        </figure>
                                        <h3>آب میوه تازه ملون سان استار</h3>
                                        <span class="qty">1 واحد</span><span class="rating"><svg width="24" height="24"
                                                                                                 class="text-primary"><use
                                                    xlink:href="#star-solid"></use></svg> 4.5</span>
                                        <span class="price">180,000 تومان</span>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="input-group product-qty">
                              <span class="input-group-btn">
                                  <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                          data-type="minus">
                                    <svg width="16" height="16"><use xlink:href="#minus"></use></svg>
                                  </button>
                              </span>
                                                <input type="text" id="quantity" name="quantity"
                                                       class="form-control input-number" value="1">
                                                <span class="input-group-btn">
                                  <button type="button" class="quantity-right-plus btn btn-success btn-number"
                                          data-type="plus">
                                      <svg width="16" height="16"><use xlink:href="#plus"></use></svg>
                                  </button>
                              </span>
                                            </div>
                                            <a href="#" class="nav-link">افزودن به سبد خرید
                                                <iconify-icon icon="uil:shopping-cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="product-item">
                                        <a href="#" class="btn-wishlist">
                                            <svg width="24" height="24">
                                                <use xlink:href="#heart"></use>
                                            </svg>
                                        </a>
                                        <figure>
                                            <a href="index.html" title="عنوان محصول">
                                                <img src="{{ asset('assets/images/thumb-bananas.png') }}"
                                                     class="tab-image">
                                            </a>
                                        </figure>
                                        <h3>آب میوه تازه ملون سان استار</h3>
                                        <span class="qty">1 واحد</span><span class="rating"><svg width="24" height="24"
                                                                                                 class="text-primary"><use
                                                    xlink:href="#star-solid"></use></svg> 4.5</span>
                                        <span class="price">180,000 تومان</span>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="input-group product-qty">
                              <span class="input-group-btn">
                                  <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                          data-type="minus">
                                    <svg width="16" height="16"><use xlink:href="#minus"></use></svg>
                                  </button>
                              </span>
                                                <input type="text" id="quantity" name="quantity"
                                                       class="form-control input-number" value="1">
                                                <span class="input-group-btn">
                                  <button type="button" class="quantity-right-plus btn btn-success btn-number"
                                          data-type="plus">
                                      <svg width="16" height="16"><use xlink:href="#plus"></use></svg>
                                  </button>
                              </span>
                                            </div>
                                            <a href="#" class="nav-link">افزودن به سبد خرید
                                                <iconify-icon icon="uil:shopping-cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="product-item">
                                        <a href="#" class="btn-wishlist">
                                            <svg width="24" height="24">
                                                <use xlink:href="#heart"></use>
                                            </svg>
                                        </a>
                                        <figure>
                                            <a href="index.html" title="عنوان محصول">
                                                <img src="{{ asset('assets/images/thumb-bananas.png') }}"
                                                     class="tab-image">
                                            </a>
                                        </figure>
                                        <h3>آب میوه تازه ملون سان استار</h3>
                                        <span class="qty">1 واحد</span><span class="rating"><svg width="24" height="24"
                                                                                                 class="text-primary"><use
                                                    xlink:href="#star-solid"></use></svg> 4.5</span>
                                        <span class="price">180,000 تومان</span>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="input-group product-qty">
                              <span class="input-group-btn">
                                  <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                          data-type="minus">
                                    <svg width="16" height="16"><use xlink:href="#minus"></use></svg>
                                  </button>
                              </span>
                                                <input type="text" id="quantity" name="quantity"
                                                       class="form-control input-number" value="1">
                                                <span class="input-group-btn">
                                  <button type="button" class="quantity-right-plus btn btn-success btn-number"
                                          data-type="plus">
                                      <svg width="16" height="16"><use xlink:href="#plus"></use></svg>
                                  </button>
                              </span>
                                            </div>
                                            <a href="#" class="nav-link">افزودن به سبد خرید
                                                <iconify-icon icon="uil:shopping-cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- / product-grid -->

                        </div>
                        <div class="tab-pane fade" id="nav-bags" role="tabpanel" aria-labelledby="nav-bags-tab">

                            <div
                                class="product-grid row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">

                                <div class="col">
                                    <div class="product-item">
                                        <a href="#" class="btn-wishlist">
                                            <svg width="24" height="24">
                                                <use xlink:href="#heart"></use>
                                            </svg>
                                        </a>
                                        <figure>
                                            <a href="index.html" title="عنوان محصول">
                                                <img src="{{ asset('assets/images/thumb-cucumber.png') }}"
                                                     class="tab-image">
                                            </a>
                                        </figure>
                                        <h3>آب میوه تازه ملون سان استار</h3>
                                        <span class="qty">1 واحد</span><span class="rating"><svg width="24" height="24"
                                                                                                 class="text-primary"><use
                                                    xlink:href="#star-solid"></use></svg> 4.5</span>
                                        <span class="price">180,000 تومان</span>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="input-group product-qty">
                              <span class="input-group-btn">
                                  <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                          data-type="minus">
                                    <svg width="16" height="16"><use xlink:href="#minus"></use></svg>
                                  </button>
                              </span>
                                                <input type="text" id="quantity" name="quantity"
                                                       class="form-control input-number" value="1">
                                                <span class="input-group-btn">
                                  <button type="button" class="quantity-right-plus btn btn-success btn-number"
                                          data-type="plus">
                                      <svg width="16" height="16"><use xlink:href="#plus"></use></svg>
                                  </button>
                              </span>
                                            </div>
                                            <a href="#" class="nav-link">افزودن به سبد خرید
                                                <iconify-icon icon="uil:shopping-cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="product-item">
                                        <a href="#" class="btn-wishlist">
                                            <svg width="24" height="24">
                                                <use xlink:href="#heart"></use>
                                            </svg>
                                        </a>
                                        <figure>
                                            <a href="index.html" title="عنوان محصول">
                                                <img src="{{ asset('assets/images/thumb-milk.png') }}"
                                                     class="tab-image">
                                            </a>
                                        </figure>
                                        <h3>آب میوه تازه ملون سان استار</h3>
                                        <span class="qty">1 واحد</span><span class="rating"><svg width="24" height="24"
                                                                                                 class="text-primary"><use
                                                    xlink:href="#star-solid"></use></svg> 4.5</span>
                                        <span class="price">180,000 تومان</span>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="input-group product-qty">
                              <span class="input-group-btn">
                                  <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                          data-type="minus">
                                    <svg width="16" height="16"><use xlink:href="#minus"></use></svg>
                                  </button>
                              </span>
                                                <input type="text" id="quantity" name="quantity"
                                                       class="form-control input-number" value="1">
                                                <span class="input-group-btn">
                                  <button type="button" class="quantity-right-plus btn btn-success btn-number"
                                          data-type="plus">
                                      <svg width="16" height="16"><use xlink:href="#plus"></use></svg>
                                  </button>
                              </span>
                                            </div>
                                            <a href="#" class="nav-link">افزودن به سبد خرید
                                                <iconify-icon icon="uil:shopping-cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="product-item">
                                        <a href="#" class="btn-wishlist">
                                            <svg width="24" height="24">
                                                <use xlink:href="#heart"></use>
                                            </svg>
                                        </a>
                                        <figure>
                                            <a href="index.html" title="عنوان محصول">
                                                <img src="{{ asset('assets/images/thumb-tomatoes.png') }}"
                                                     class="tab-image">
                                            </a>
                                        </figure>
                                        <h3>آب میوه تازه ملون سان استار</h3>
                                        <span class="qty">1 واحد</span><span class="rating"><svg width="24" height="24"
                                                                                                 class="text-primary"><use
                                                    xlink:href="#star-solid"></use></svg> 4.5</span>
                                        <span class="price">180,000 تومان</span>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="input-group product-qty">
                              <span class="input-group-btn">
                                  <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                          data-type="minus">
                                    <svg width="16" height="16"><use xlink:href="#minus"></use></svg>
                                  </button>
                              </span>
                                                <input type="text" id="quantity" name="quantity"
                                                       class="form-control input-number" value="1">
                                                <span class="input-group-btn">
                                  <button type="button" class="quantity-right-plus btn btn-success btn-number"
                                          data-type="plus">
                                      <svg width="16" height="16"><use xlink:href="#plus"></use></svg>
                                  </button>
                              </span>
                                            </div>
                                            <a href="#" class="nav-link">افزودن به سبد خرید
                                                <iconify-icon icon="uil:shopping-cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="product-item">
                                        <a href="#" class="btn-wishlist">
                                            <svg width="24" height="24">
                                                <use xlink:href="#heart"></use>
                                            </svg>
                                        </a>
                                        <figure>
                                            <a href="index.html" title="عنوان محصول">
                                                <img src="{{ asset('assets/images/thumb-tomatoketchup.png') }}"
                                                     class="tab-image">
                                            </a>
                                        </figure>
                                        <h3>آب میوه تازه ملون سان استار</h3>
                                        <span class="qty">1 واحد</span><span class="rating"><svg width="24" height="24"
                                                                                                 class="text-primary"><use
                                                    xlink:href="#star-solid"></use></svg> 4.5</span>
                                        <span class="price">180,000 تومان</span>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="input-group product-qty">
                              <span class="input-group-btn">
                                  <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                          data-type="minus">
                                    <svg width="16" height="16"><use xlink:href="#minus"></use></svg>
                                  </button>
                              </span>
                                                <input type="text" id="quantity" name="quantity"
                                                       class="form-control input-number" value="1">
                                                <span class="input-group-btn">
                                  <button type="button" class="quantity-right-plus btn btn-success btn-number"
                                          data-type="plus">
                                      <svg width="16" height="16"><use xlink:href="#plus"></use></svg>
                                  </button>
                              </span>
                                            </div>
                                            <a href="#" class="nav-link">افزودن به سبد خرید
                                                <iconify-icon icon="uil:shopping-cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="product-item">
                                        <a href="#" class="btn-wishlist">
                                            <svg width="24" height="24">
                                                <use xlink:href="#heart"></use>
                                            </svg>
                                        </a>
                                        <figure>
                                            <a href="index.html" title="عنوان محصول">
                                                <img src="{{ asset('assets/images/thumb-bananas.png') }}"
                                                     class="tab-image">
                                            </a>
                                        </figure>
                                        <h3>آب میوه تازه ملون سان استار</h3>
                                        <span class="qty">1 واحد</span><span class="rating"><svg width="24" height="24"
                                                                                                 class="text-primary"><use
                                                    xlink:href="#star-solid"></use></svg> 4.5</span>
                                        <span class="price">180,000 تومان</span>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="input-group product-qty">
                              <span class="input-group-btn">
                                  <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                          data-type="minus">
                                    <svg width="16" height="16"><use xlink:href="#minus"></use></svg>
                                  </button>
                              </span>
                                                <input type="text" id="quantity" name="quantity"
                                                       class="form-control input-number" value="1">
                                                <span class="input-group-btn">
                                  <button type="button" class="quantity-right-plus btn btn-success btn-number"
                                          data-type="plus">
                                      <svg width="16" height="16"><use xlink:href="#plus"></use></svg>
                                  </button>
                              </span>
                                            </div>
                                            <a href="#" class="nav-link">افزودن به سبد خرید
                                                <iconify-icon icon="uil:shopping-cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="product-item">
                                        <a href="#" class="btn-wishlist">
                                            <svg width="24" height="24">
                                                <use xlink:href="#heart"></use>
                                            </svg>
                                        </a>
                                        <figure>
                                            <a href="index.html" title="عنوان محصول">
                                                <img src="{{ asset('assets/images/thumb-bananas.png') }}"
                                                     class="tab-image">
                                            </a>
                                        </figure>
                                        <h3>آب میوه تازه ملون سان استار</h3>
                                        <span class="qty">1 واحد</span><span class="rating"><svg width="24" height="24"
                                                                                                 class="text-primary"><use
                                                    xlink:href="#star-solid"></use></svg> 4.5</span>
                                        <span class="price">180,000 تومان</span>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="input-group product-qty">
                              <span class="input-group-btn">
                                  <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                          data-type="minus">
                                    <svg width="16" height="16"><use xlink:href="#minus"></use></svg>
                                  </button>
                              </span>
                                                <input type="text" id="quantity" name="quantity"
                                                       class="form-control input-number" value="1">
                                                <span class="input-group-btn">
                                  <button type="button" class="quantity-right-plus btn btn-success btn-number"
                                          data-type="plus">
                                      <svg width="16" height="16"><use xlink:href="#plus"></use></svg>
                                  </button>
                              </span>
                                            </div>
                                            <a href="#" class="nav-link">افزودن به سبد خرید
                                                <iconify-icon icon="uil:shopping-cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- / product-grid -->

                        </div>
                        <div class="tab-pane fade" id="nav-food" role="tabpanel" aria-labelledby="nav-food-tab">

                            <div
                                class="product-grid row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">

                                <div class="col">
                                    <div class="product-item">
                                        <a href="#" class="btn-wishlist">
                                            <svg width="24" height="24">
                                                <use xlink:href="#heart"></use>
                                            </svg>
                                        </a>
                                        <figure>
                                            <a href="index.html" title="عنوان محصول">
                                                <img src="{{ asset('assets/images/thumb-cucumber.png') }}"
                                                     class="tab-image">
                                            </a>
                                        </figure>
                                        <h3>آب میوه تازه ملون سان استار</h3>
                                        <span class="qty">1 واحد</span><span class="rating"><svg width="24" height="24"
                                                                                                 class="text-primary"><use
                                                    xlink:href="#star-solid"></use></svg> 4.5</span>
                                        <span class="price">180,000 تومان</span>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="input-group product-qty">
                              <span class="input-group-btn">
                                  <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                          data-type="minus">
                                    <svg width="16" height="16"><use xlink:href="#minus"></use></svg>
                                  </button>
                              </span>
                                                <input type="text" id="quantity" name="quantity"
                                                       class="form-control input-number" value="1">
                                                <span class="input-group-btn">
                                  <button type="button" class="quantity-right-plus btn btn-success btn-number"
                                          data-type="plus">
                                      <svg width="16" height="16"><use xlink:href="#plus"></use></svg>
                                  </button>
                              </span>
                                            </div>
                                            <a href="#" class="nav-link">افزودن به سبد خرید
                                                <iconify-icon icon="uil:shopping-cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="product-item">
                                        <a href="#" class="btn-wishlist">
                                            <svg width="24" height="24">
                                                <use xlink:href="#heart"></use>
                                            </svg>
                                        </a>
                                        <figure>
                                            <a href="index.html" title="عنوان محصول">
                                                <img src="{{ asset('assets/images/thumb-milk.png') }}"
                                                     class="tab-image">
                                            </a>
                                        </figure>
                                        <h3>آب میوه تازه ملون سان استار</h3>
                                        <span class="qty">1 واحد</span><span class="rating"><svg width="24" height="24"
                                                                                                 class="text-primary"><use
                                                    xlink:href="#star-solid"></use></svg> 4.5</span>
                                        <span class="price">180,000 تومان</span>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="input-group product-qty">
                              <span class="input-group-btn">
                                  <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                          data-type="minus">
                                    <svg width="16" height="16"><use xlink:href="#minus"></use></svg>
                                  </button>
                              </span>
                                                <input type="text" id="quantity" name="quantity"
                                                       class="form-control input-number" value="1">
                                                <span class="input-group-btn">
                                  <button type="button" class="quantity-right-plus btn btn-success btn-number"
                                          data-type="plus">
                                      <svg width="16" height="16"><use xlink:href="#plus"></use></svg>
                                  </button>
                              </span>
                                            </div>
                                            <a href="#" class="nav-link">افزودن به سبد خرید
                                                <iconify-icon icon="uil:shopping-cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="product-item">
                                        <a href="#" class="btn-wishlist">
                                            <svg width="24" height="24">
                                                <use xlink:href="#heart"></use>
                                            </svg>
                                        </a>
                                        <figure>
                                            <a href="index.html" title="عنوان محصول">
                                                <img src="{{ asset('assets/images/thumb-tomatoes.png') }}"
                                                     class="tab-image">
                                            </a>
                                        </figure>
                                        <h3>آب میوه تازه ملون سان استار</h3>
                                        <span class="qty">1 واحد</span><span class="rating"><svg width="24" height="24"
                                                                                                 class="text-primary"><use
                                                    xlink:href="#star-solid"></use></svg> 4.5</span>
                                        <span class="price">180,000 تومان</span>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="input-group product-qty">
                              <span class="input-group-btn">
                                  <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                          data-type="minus">
                                    <svg width="16" height="16"><use xlink:href="#minus"></use></svg>
                                  </button>
                              </span>
                                                <input type="text" id="quantity" name="quantity"
                                                       class="form-control input-number" value="1">
                                                <span class="input-group-btn">
                                  <button type="button" class="quantity-right-plus btn btn-success btn-number"
                                          data-type="plus">
                                      <svg width="16" height="16"><use xlink:href="#plus"></use></svg>
                                  </button>
                              </span>
                                            </div>
                                            <a href="#" class="nav-link">افزودن به سبد خرید
                                                <iconify-icon icon="uil:shopping-cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="product-item">
                                        <a href="#" class="btn-wishlist">
                                            <svg width="24" height="24">
                                                <use xlink:href="#heart"></use>
                                            </svg>
                                        </a>
                                        <figure>
                                            <a href="index.html" title="عنوان محصول">
                                                <img src="{{ asset('assets/images/thumb-tomatoketchup.png') }}"
                                                     class="tab-image">
                                            </a>
                                        </figure>
                                        <h3>آب میوه تازه ملون سان استار</h3>
                                        <span class="qty">1 واحد</span><span class="rating"><svg width="24" height="24"
                                                                                                 class="text-primary"><use
                                                    xlink:href="#star-solid"></use></svg> 4.5</span>
                                        <span class="price">180,000 تومان</span>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="input-group product-qty">
                              <span class="input-group-btn">
                                  <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                          data-type="minus">
                                    <svg width="16" height="16"><use xlink:href="#minus"></use></svg>
                                  </button>
                              </span>
                                                <input type="text" id="quantity" name="quantity"
                                                       class="form-control input-number" value="1">
                                                <span class="input-group-btn">
                                  <button type="button" class="quantity-right-plus btn btn-success btn-number"
                                          data-type="plus">
                                      <svg width="16" height="16"><use xlink:href="#plus"></use></svg>
                                  </button>
                              </span>
                                            </div>
                                            <a href="#" class="nav-link">افزودن به سبد خرید
                                                <iconify-icon icon="uil:shopping-cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="product-item">
                                        <a href="#" class="btn-wishlist">
                                            <svg width="24" height="24">
                                                <use xlink:href="#heart"></use>
                                            </svg>
                                        </a>
                                        <figure>
                                            <a href="index.html" title="عنوان محصول">
                                                <img src="{{ asset('assets/images/thumb-bananas.png') }}"
                                                     class="tab-image">
                                            </a>
                                        </figure>
                                        <h3>آب میوه تازه ملون سان استار</h3>
                                        <span class="qty">1 واحد</span><span class="rating"><svg width="24" height="24"
                                                                                                 class="text-primary"><use
                                                    xlink:href="#star-solid"></use></svg> 4.5</span>
                                        <span class="price">180,000 تومان</span>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="input-group product-qty">
                              <span class="input-group-btn">
                                  <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                          data-type="minus">
                                    <svg width="16" height="16"><use xlink:href="#minus"></use></svg>
                                  </button>
                              </span>
                                                <input type="text" id="quantity" name="quantity"
                                                       class="form-control input-number" value="1">
                                                <span class="input-group-btn">
                                  <button type="button" class="quantity-right-plus btn btn-success btn-number"
                                          data-type="plus">
                                      <svg width="16" height="16"><use xlink:href="#plus"></use></svg>
                                  </button>
                              </span>
                                            </div>
                                            <a href="#" class="nav-link">افزودن به سبد خرید
                                                <iconify-icon icon="uil:shopping-cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="product-item">
                                        <a href="#" class="btn-wishlist">
                                            <svg width="24" height="24">
                                                <use xlink:href="#heart"></use>
                                            </svg>
                                        </a>
                                        <figure>
                                            <a href="index.html" title="عنوان محصول">
                                                <img src="{{ asset('assets/images/thumb-bananas.png') }}"
                                                     class="tab-image">
                                            </a>
                                        </figure>
                                        <h3>آب میوه تازه ملون سان استار</h3>
                                        <span class="qty">1 واحد</span><span class="rating"><svg width="24" height="24"
                                                                                                 class="text-primary"><use
                                                    xlink:href="#star-solid"></use></svg> 4.5</span>
                                        <span class="price">180,000 تومان</span>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="input-group product-qty">
                              <span class="input-group-btn">
                                  <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                          data-type="minus">
                                    <svg width="16" height="16"><use xlink:href="#minus"></use></svg>
                                  </button>
                              </span>
                                                <input type="text" id="quantity" name="quantity"
                                                       class="form-control input-number" value="1">
                                                <span class="input-group-btn">
                                  <button type="button" class="quantity-right-plus btn btn-success btn-number"
                                          data-type="plus">
                                      <svg width="16" height="16"><use xlink:href="#plus"></use></svg>
                                  </button>
                              </span>
                                            </div>
                                            <a href="#" class="nav-link">افزودن به سبد خرید
                                                <iconify-icon icon="uil:shopping-cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- / product-grid -->

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!--------- Offers Section ---------->
<section class="py-5">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-6">
                <div class="banner-ad bg-danger mb-3"
                     style="background: url({{ asset('assets/images/ad-image-3.png') }});background-repeat: no-repeat;background-position: left bottom;">
                    <div class="banner-content p-5 text-end" dir="rtl">

                        <div class="categories text-primary fs-3 fw-bold">تا ۲۵٪ تخفیف</div>
                        <h3 class="banner-title">شکلات تلخ لوکسا</h3>
                        <p>طعم بسیار لذیذ و خامه‌ای شکلاتی با کیفیت بالا.</p>
                        <a href="#" class="btn btn-dark text-uppercase">مشاهده</a>

                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="banner-ad bg-info"
                     style="background: url({{ asset('assets/images/ad-image-4.png') }});background-repeat: no-repeat;background-position: left bottom;">
                    <div class="banner-content p-5 text-end" dir="rtl">

                        <div class="categories text-primary fs-3 fw-bold">تا ۲۵٪ تخفیف</div>
                        <h3 class="banner-title">کاپ‌کیک خامه‌ای</h3>
                        <p>طعم بی‌نظیر کاپ‌کیک وانیلی با خامه رنگی و تازه.</p>
                        <a href="#" class="btn btn-dark text-uppercase">مشاهده</a>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!--------- most Sells Section ---------->
<section class="py-5 overflow-hidden" dir="rtl">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="section-header d-flex flex-wrap justify-content-between my-5">
                    <h2 class="section-title">پرفروش‌ترین محصولات</h2>

                    <div class="d-flex align-items-center">
                        <a href="#" class="btn-link text-decoration-none">مشاهده همه دسته‌بندی‌ها →</a>
                        <div class="swiper-buttons">
                            <button class="swiper-prev products-carousel-prev btn btn-primary">❮</button>
                            <button class="swiper-next products-carousel-next btn btn-primary">❯</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="products-carousel swiper">
                    <div class="swiper-wrapper">

                        <!-- فقط متن‌ها تغییر کرده‌اند، ادامه تکراری است -->
                        <div class="product-item swiper-slide">
                            <span class="badge bg-success position-absolute m-3">-۱۵٪</span>
                            <a href="#" class="btn-wishlist">
                                <svg width="24" height="24"><use xlink:href="#heart"></use></svg>
                            </a>
                            <figure>
                                <a href="index.html" title="عنوان محصول">
                                    <img src="{{ asset('assets/images/thumb-tomatoes.png') }}" class="tab-image">
                                </a>
                            </figure>
                            <h3>آب هندوانه تازه سان‌استار</h3>
                            <span class="qty">۱ عدد</span>
                            <span class="rating"><svg width="24" height="24" class="text-primary"><use xlink:href="#star-solid"></use></svg> ۴.۵</span>
                            <span class="price">۱۸ دلار</span>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="input-group product-qty">
                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-left-minus btn btn-danger btn-number" data-type="minus">
                                            <svg width="16" height="16"><use xlink:href="#minus"></use></svg>
                                        </button>
                                    </span>
                                    <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1">
                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus">
                                            <svg width="16" height="16"><use xlink:href="#plus"></use></svg>
                                        </button>
                                    </span>
                                </div>
                                <a href="#" class="nav-link">افزودن به سبد
                                    <iconify-icon icon="uil:shopping-cart"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="product-item swiper-slide">
                            <span class="badge bg-success position-absolute m-3">-۱۵٪</span>
                            <a href="#" class="btn-wishlist">
                                <svg width="24" height="24"><use xlink:href="#heart"></use></svg>
                            </a>
                            <figure>
                                <a href="index.html" title="عنوان محصول">
                                    <img src="{{ asset('assets/images/thumb-tomatoes.png') }}" class="tab-image">
                                </a>
                            </figure>
                            <h3>آب هندوانه تازه سان‌استار</h3>
                            <span class="qty">۱ عدد</span>
                            <span class="rating"><svg width="24" height="24" class="text-primary"><use xlink:href="#star-solid"></use></svg> ۴.۵</span>
                            <span class="price">۱۸ دلار</span>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="input-group product-qty">
                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-left-minus btn btn-danger btn-number" data-type="minus">
                                            <svg width="16" height="16"><use xlink:href="#minus"></use></svg>
                                        </button>
                                    </span>
                                    <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1">
                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus">
                                            <svg width="16" height="16"><use xlink:href="#plus"></use></svg>
                                        </button>
                                    </span>
                                </div>
                                <a href="#" class="nav-link">افزودن به سبد
                                    <iconify-icon icon="uil:shopping-cart"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="product-item swiper-slide">
                            <span class="badge bg-success position-absolute m-3">-۱۵٪</span>
                            <a href="#" class="btn-wishlist">
                                <svg width="24" height="24"><use xlink:href="#heart"></use></svg>
                            </a>
                            <figure>
                                <a href="index.html" title="عنوان محصول">
                                    <img src="{{ asset('assets/images/thumb-tomatoes.png') }}" class="tab-image">
                                </a>
                            </figure>
                            <h3>آب هندوانه تازه سان‌استار</h3>
                            <span class="qty">۱ عدد</span>
                            <span class="rating"><svg width="24" height="24" class="text-primary"><use xlink:href="#star-solid"></use></svg> ۴.۵</span>
                            <span class="price">۱۸ دلار</span>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="input-group product-qty">
                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-left-minus btn btn-danger btn-number" data-type="minus">
                                            <svg width="16" height="16"><use xlink:href="#minus"></use></svg>
                                        </button>
                                    </span>
                                    <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1">
                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus">
                                            <svg width="16" height="16"><use xlink:href="#plus"></use></svg>
                                        </button>
                                    </span>
                                </div>
                                <a href="#" class="nav-link">افزودن به سبد
                                    <iconify-icon icon="uil:shopping-cart"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="product-item swiper-slide">
                            <span class="badge bg-success position-absolute m-3">-۱۵٪</span>
                            <a href="#" class="btn-wishlist">
                                <svg width="24" height="24"><use xlink:href="#heart"></use></svg>
                            </a>
                            <figure>
                                <a href="index.html" title="عنوان محصول">
                                    <img src="{{ asset('assets/images/thumb-tomatoes.png') }}" class="tab-image">
                                </a>
                            </figure>
                            <h3>آب هندوانه تازه سان‌استار</h3>
                            <span class="qty">۱ عدد</span>
                            <span class="rating"><svg width="24" height="24" class="text-primary"><use xlink:href="#star-solid"></use></svg> ۴.۵</span>
                            <span class="price">۱۸ دلار</span>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="input-group product-qty">
                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-left-minus btn btn-danger btn-number" data-type="minus">
                                            <svg width="16" height="16"><use xlink:href="#minus"></use></svg>
                                        </button>
                                    </span>
                                    <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1">
                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus">
                                            <svg width="16" height="16"><use xlink:href="#plus"></use></svg>
                                        </button>
                                    </span>
                                </div>
                                <a href="#" class="nav-link">افزودن به سبد
                                    <iconify-icon icon="uil:shopping-cart"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="product-item swiper-slide">
                            <span class="badge bg-success position-absolute m-3">-۱۵٪</span>
                            <a href="#" class="btn-wishlist">
                                <svg width="24" height="24"><use xlink:href="#heart"></use></svg>
                            </a>
                            <figure>
                                <a href="index.html" title="عنوان محصول">
                                    <img src="{{ asset('assets/images/thumb-tomatoes.png') }}" class="tab-image">
                                </a>
                            </figure>
                            <h3>آب هندوانه تازه سان‌استار</h3>
                            <span class="qty">۱ عدد</span>
                            <span class="rating"><svg width="24" height="24" class="text-primary"><use xlink:href="#star-solid"></use></svg> ۴.۵</span>
                            <span class="price">۱۸ دلار</span>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="input-group product-qty">
                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-left-minus btn btn-danger btn-number" data-type="minus">
                                            <svg width="16" height="16"><use xlink:href="#minus"></use></svg>
                                        </button>
                                    </span>
                                    <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1">
                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus">
                                            <svg width="16" height="16"><use xlink:href="#plus"></use></svg>
                                        </button>
                                    </span>
                                </div>
                                <a href="#" class="nav-link">افزودن به سبد
                                    <iconify-icon icon="uil:shopping-cart"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="product-item swiper-slide">
                            <span class="badge bg-success position-absolute m-3">-۱۵٪</span>
                            <a href="#" class="btn-wishlist">
                                <svg width="24" height="24"><use xlink:href="#heart"></use></svg>
                            </a>
                            <figure>
                                <a href="index.html" title="عنوان محصول">
                                    <img src="{{ asset('assets/images/thumb-tomatoes.png') }}" class="tab-image">
                                </a>
                            </figure>
                            <h3>آب هندوانه تازه سان‌استار</h3>
                            <span class="qty">۱ عدد</span>
                            <span class="rating"><svg width="24" height="24" class="text-primary"><use xlink:href="#star-solid"></use></svg> ۴.۵</span>
                            <span class="price">۱۸ دلار</span>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="input-group product-qty">
                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-left-minus btn btn-danger btn-number" data-type="minus">
                                            <svg width="16" height="16"><use xlink:href="#minus"></use></svg>
                                        </button>
                                    </span>
                                    <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1">
                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus">
                                            <svg width="16" height="16"><use xlink:href="#plus"></use></svg>
                                        </button>
                                    </span>
                                </div>
                                <a href="#" class="nav-link">افزودن به سبد
                                    <iconify-icon icon="uil:shopping-cart"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="product-item swiper-slide">
                            <span class="badge bg-success position-absolute m-3">-۱۵٪</span>
                            <a href="#" class="btn-wishlist">
                                <svg width="24" height="24"><use xlink:href="#heart"></use></svg>
                            </a>
                            <figure>
                                <a href="index.html" title="عنوان محصول">
                                    <img src="{{ asset('assets/images/thumb-tomatoes.png') }}" class="tab-image">
                                </a>
                            </figure>
                            <h3>آب هندوانه تازه سان‌استار</h3>
                            <span class="qty">۱ عدد</span>
                            <span class="rating"><svg width="24" height="24" class="text-primary"><use xlink:href="#star-solid"></use></svg> ۴.۵</span>
                            <span class="price">۱۸ دلار</span>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="input-group product-qty">
                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-left-minus btn btn-danger btn-number" data-type="minus">
                                            <svg width="16" height="16"><use xlink:href="#minus"></use></svg>
                                        </button>
                                    </span>
                                    <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1">
                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus">
                                            <svg width="16" height="16"><use xlink:href="#plus"></use></svg>
                                        </button>
                                    </span>
                                </div>
                                <a href="#" class="nav-link">افزودن به سبد
                                    <iconify-icon icon="uil:shopping-cart"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="product-item swiper-slide">
                            <span class="badge bg-success position-absolute m-3">-۱۵٪</span>
                            <a href="#" class="btn-wishlist">
                                <svg width="24" height="24"><use xlink:href="#heart"></use></svg>
                            </a>
                            <figure>
                                <a href="index.html" title="عنوان محصول">
                                    <img src="{{ asset('assets/images/thumb-tomatoes.png') }}" class="tab-image">
                                </a>
                            </figure>
                            <h3>آب هندوانه تازه سان‌استار</h3>
                            <span class="qty">۱ عدد</span>
                            <span class="rating"><svg width="24" height="24" class="text-primary"><use xlink:href="#star-solid"></use></svg> ۴.۵</span>
                            <span class="price">۱۸ دلار</span>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="input-group product-qty">
                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-left-minus btn btn-danger btn-number" data-type="minus">
                                            <svg width="16" height="16"><use xlink:href="#minus"></use></svg>
                                        </button>
                                    </span>
                                    <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1">
                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus">
                                            <svg width="16" height="16"><use xlink:href="#plus"></use></svg>
                                        </button>
                                    </span>
                                </div>
                                <a href="#" class="nav-link">افزودن به سبد
                                    <iconify-icon icon="uil:shopping-cart"></iconify-icon>
                                </a>
                            </div>
                        </div>

                        <!-- بقیه محصولات مشابه همین هستند، فقط تکرار شوند با تغییر متن دلخواه -->

                    </div>
                </div>
                <!-- / products-carousel -->

            </div>
        </div>
    </div>
</section>

<!--------- blog Section ---------->
<section id="latest-blog" class="py-5" dir="rtl">
    <div class="container-fluid">
        <div class="row">
            <div class="section-header d-flex align-items-center justify-content-between my-5">
                <h2 class="section-title">آخرین مقالات ما</h2>
                <div class="btn-wrap align-right">
                    <a href="#" class="d-flex align-items-center nav-link">
                        مشاهده همه مقالات
                        <svg width="24" height="24">
                            <use xlink:href="#arrow-right"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <article class="post-item card border-0 shadow-sm p-3">
                    <div class="image-holder zoom-effect">
                        <a href="#">
                            <img src="{{ asset('assets/images/post-thumb-1.jpg') }}" alt="post" class="card-img-top">
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="post-meta d-flex text-uppercase gap-3 my-2 align-items-center">
                            <div class="meta-date">
                                <svg width="16" height="16"><use xlink:href="#calendar"></use></svg>
                                ۲۲ آگوست ۲۰۲۱
                            </div>
                            <div class="meta-categories">
                                <svg width="16" height="16"><use xlink:href="#category"></use></svg>
                                نکات و ترفندها
                            </div>
                        </div>
                        <div class="post-header">
                            <h3 class="post-title">
                                <a href="#" class="text-decoration-none">۱۰ ایده لباس غیررسمی برای کودکان</a>
                            </h3>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک...</p>
                        </div>
                    </div>
                </article>
            </div>

            <div class="col-md-4">
                <article class="post-item card border-0 shadow-sm p-3">
                    <div class="image-holder zoom-effect">
                        <a href="#">
                            <img src="{{ asset('assets/images/post-thumb-2.jpg') }}" alt="post" class="card-img-top">
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="post-meta d-flex text-uppercase gap-3 my-2 align-items-center">
                            <div class="meta-date">
                                <svg width="16" height="16"><use xlink:href="#calendar"></use></svg>
                                ۲۵ آگوست ۲۰۲۱
                            </div>
                            <div class="meta-categories">
                                <svg width="16" height="16"><use xlink:href="#category"></use></svg>
                                مد روز
                            </div>
                        </div>
                        <div class="post-header">
                            <h3 class="post-title">
                                <a href="#" class="text-decoration-none">جدیدترین ترندهای استایل خیابانی</a>
                            </h3>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک...</p>
                        </div>
                    </div>
                </article>
            </div>

            <div class="col-md-4">
                <article class="post-item card border-0 shadow-sm p-3">
                    <div class="image-holder zoom-effect">
                        <a href="#">
                            <img src="{{ asset('assets/images/post-thumb-3.jpg') }}" alt="post" class="card-img-top">
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="post-meta d-flex text-uppercase gap-3 my-2 align-items-center">
                            <div class="meta-date">
                                <svg width="16" height="16"><use xlink:href="#calendar"></use></svg>
                                ۲۸ آگوست ۲۰۲۱
                            </div>
                            <div class="meta-categories">
                                <svg width="16" height="16"><use xlink:href="#category"></use></svg>
                                الهام‌بخش
                            </div>
                        </div>
                        <div class="post-header">
                            <h3 class="post-title">
                                <a href="#" class="text-decoration-none">۱۰ مدل لباس راحتی شیک برای خانم‌ها</a>
                            </h3>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک...</p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>


<section class="py-5">
    <div class="container">
        <div class="row row-cols-2 row-cols-md-4 g-4 justify-content-center text-center">

            <!-- ارسال رایگان -->
            <div class="col">
                <div class="card border-0 h-100">
                    <div class="card-body">
                        <h5 class="fw-bold">ارسال رایگان</h5>
                        <p class="text-muted small mb-0">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ.</p>
                    </div>
                </div>
            </div>

            <!-- پرداخت امن -->
            <div class="col">
                <div class="card border-0 h-100">
                    <div class="card-body">
                        <h5 class="fw-bold">پرداخت کاملاً امن</h5>
                        <p class="text-muted small mb-0">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ.</p>
                    </div>
                </div>
            </div>

            <!-- صرفه‌جویی تضمینی -->
            <div class="col">
                <div class="card border-0 h-100">
                    <div class="card-body">
                        <h5 class="fw-bold">صرفه‌جویی تضمینی</h5>
                        <p class="text-muted small mb-0">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ.</p>
                    </div>
                </div>
            </div>

            <!-- پیشنهادهای روزانه -->
            <div class="col">
                <div class="card border-0 h-100">
                    <div class="card-body">
                        <h5 class="fw-bold">پیشنهادهای روزانه</h5>
                        <p class="text-muted small mb-0">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<footer class="py-5 border-top">
    <div class="container">
        <div class="row gy-4 justify-content-between align-items-start">

            <!-- لوگو و شبکه‌های اجتماعی -->
            <div class="col-lg-3 col-md-6">
                <img src="{{ asset('assets/images/logo.png') }}" alt="لوگو" style="max-width: 160px; height: auto;">
                <ul class="d-flex list-unstyled gap-2 mt-3">
                    <li><a href="#"><i class="fab fa-facebook-f fs-5"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter fs-5"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube fs-5"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram fs-5"></i></a></li>
                    <li><a href="#"><i class="fab fa-amazon fs-5"></i></a></li>
                </ul>
            </div>

            <!-- درباره التراس -->
            <div class="col-lg-2 col-md-6">
                <h6 class="fw-bold mb-3">درباره التراس</h6>
                <ul class="list-unstyled">
                    <li><a href="#" class="nav-link px-0 py-1">درباره ما</a></li>
                    <li><a href="#" class="nav-link px-0 py-1">شرایط استفاده</a></li>
                    <li><a href="#" class="nav-link px-0 py-1">ژورنال‌های ما</a></li>
                    <li><a href="#" class="nav-link px-0 py-1">فرصت‌های شغلی</a></li>
                    <li><a href="#" class="nav-link px-0 py-1">برنامه همکاری</a></li>
                    <li><a href="#" class="nav-link px-0 py-1">رسانه التراس</a></li>
                </ul>
            </div>

            <!-- خدمات مشتریان -->
            <div class="col-lg-2 col-md-6">
                <h6 class="fw-bold mb-3">خدمات مشتریان</h6>
                <ul class="list-unstyled">
                    <li><a href="#" class="nav-link px-0 py-1">سؤالات متداول</a></li>
                    <li><a href="#" class="nav-link px-0 py-1">تماس با ما</a></li>
                    <li><a href="#" class="nav-link px-0 py-1">حریم خصوصی</a></li>
                    <li><a href="#" class="nav-link px-0 py-1">بازگشت و بازپرداخت</a></li>
                    <li><a href="#" class="nav-link px-0 py-1">راهنمای کوکی</a></li>
                    <li><a href="#" class="nav-link px-0 py-1">اطلاعات ارسال</a></li>
                </ul>
            </div>

            <!-- عضویت در خبرنامه -->
            <div class="col-lg-4 col-md-6">
                <h6 class="fw-bold mb-3">عضویت در خبرنامه</h6>
                <p>برای دریافت پیشنهادهای ویژه ما در خبرنامه عضو شوید.</p>
                <form class="d-flex mt-3 gap-0" role="newsletter">
                    <input class="form-control rounded-start rounded-0 bg-light border-0" type="email"
                           placeholder="ایمیل خود را وارد کنید">
                    <button class="btn btn-dark rounded-end rounded-0" type="submit">عضویت</button>
                </form>
            </div>

        </div>
    </div>
</footer>



<div id="footer-bottom">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 copyright">
                <p>© 2025 MALLIO. All rights reserved.</p>
            </div>

        </div>
    </div>
</div>


<script src={{asset("assets/js/jquery-1.11.0.min.js")}}></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
<script src={{asset("assets/js/plugins.js")}}></script>
<script src={{asset("assets/js/script.js")}}></script>
<!-------------- header search section ---------------->
<script>
    /* ---------- داده‌ها: استان ← فهرست شهرها ---------- */
    const provinces = {
        'آذربایجان شرقی': ['تبریز', 'مراغه', 'مرند', 'میانه', 'اهر'],
        'آذربایجان غربی': ['ارومیه', 'خوی', 'مهاباد', 'بوکان', 'میاندوآب'],
        'اردبیل': ['اردبیل', 'پارس‌آباد', 'مشکین‌شهر', 'خلخال'],
        'اصفهان': ['اصفهان', 'کاشان', 'خمینی‌شهر', 'نجف‌آباد', 'شاهین‌شهر'],
        'البرز': ['کرج', 'نظرآباد', 'ساوجبلاغ', 'طالقان'],
        'ایلام': ['ایلام', 'دهلران', 'مهران', 'آبدانان'],
        'بوشهر': ['بوشهر', 'کنگان', 'گناوه', 'دشتستان', 'دیر'],
        'تهران': ['تهران', 'اسلام‌شهر', 'پردیس', 'ورامین', 'شهریار'],
        'چهارمحال و بختیاری': ['شهرکرد', 'بروجن', 'فارسان', 'لردگان'],
        'خراسان جنوبی': ['بیرجند', 'قائن', 'فردوس', 'طبس'],
        'خراسان رضوی': ['مشهد', 'سبزوار', 'نیشابور', 'تربت‌حیدریه', 'کاشمر'],
        'خراسان شمالی': ['بجنورد', 'شیروان', 'اسفراین'],
        'خوزستان': ['اهواز', 'آبادان', 'خرمشهر', 'دزفول', 'شوشتر'],
        'زنجان': ['زنجان', 'ابهر', 'خرمدره', 'قیدار'],
        'سمنان': ['سمنان', 'شاهرود', 'دامغان', 'گرمسار'],
        'سیستان و بلوچستان': ['زاهدان', 'چابهار', 'ایرانشهر', 'خاش'],
        'فارس': ['شیراز', 'مرودشت', 'کازرون', 'جهرم', 'لار'],
        'قزوین': ['قزوین', 'تاکستان', 'آبیک'],
        'قم': ['قم'],
        'کردستان': ['سنندج', 'سقز', 'بانه', 'قروه'],
        'کرمان': ['کرمان', 'جیرفت', 'رفسنجان', 'سیرجان', 'بم'],
        'کرمانشاه': ['کرمانشاه', 'اسلام‌آباد غرب', 'سنقر', 'کنگاور'],
        'کهگیلویه و بویراحمد': ['یاسوج', 'دوگنبدان', 'دهدشت'],
        'گلستان': ['گرگان', 'گنبد', 'علی‌آباد', 'بندرترکمن'],
        'گیلان': ['رشت', 'انزلی', 'لاهیجان', 'رودسر', 'صومعه‌سرا'],
        'لرستان': ['خرم‌آباد', 'بروجرد', 'دورود', 'الیگودرز'],
        'مازندران': ['ساری', 'قائم‌شهر', 'بابل', 'نوشهر', 'آمل'],
        'مرکزی': ['اراک', 'ساوه', 'محلات', 'خمین'],
        'هرمزگان': ['بندرعباس', 'قشم', 'کیش', 'بندرلنگه'],
        'همدان': ['همدان', 'ملایر', 'نهاوند', 'تویسرکان'],
        'یزد': ['یزد', 'اردکان', 'میبد', 'تفت']
    };

    /* ---------- مراجع به DOM ---------- */
    const provinceSelect = document.getElementById('provinceSelect');
    const citySelect = document.getElementById('citySelect');

    /* ---------- پرکردن منوی استان‌ها ---------- */
    Object.keys(provinces).forEach(province => {
        const opt = document.createElement('option');
        opt.value = province;
        opt.textContent = province;
        provinceSelect.appendChild(opt);
    });

    /* ---------- واکنش به تغییر استان ---------- */
    provinceSelect.addEventListener('change', function () {
        const selectedProvince = this.value;
        const cities = provinces[selectedProvince] || [];

        // پاک‌کردن گزینه‌های قبلی شهر
        citySelect.innerHTML = '<option value="">انتخاب شهر…</option>';

        // پرکردن شهرها
        cities.forEach(city => {
            const opt = document.createElement('option');
            opt.value = city;
            opt.textContent = city;
            citySelect.appendChild(opt);
        });

        // اگر هیچ استان انتخاب نشده بود، پیام راهنما برگردد
        if (!selectedProvince) {
            citySelect.firstElementChild.textContent = 'ابتدا استان را انتخاب کنید…';
        }
    });
</script>
</body>
</html>
