@extends('components.base')

@section('content')
        <!-- ============================ Sale Offer Start =========================== -->
        <div class="sale-offer ">
            <div class="container container-full ">
                <div class="sale-offer__content flx-between position-relative">
                    <div class="sale-offer__countdown">

                        <div class="countdown" data-date="14-10-2026" data-time="12:00">
                            <div class="day"><span class="num"></span><span class="word"></span></div>
                            <div class="hour"><span class="num"></span><span class="word"></span></div>
                            <div class="min"><span class="num"></span><span class="word"></span></div>
                            <div class="sec"><span class="num"></span><span class="word"></span></div>
                        </div>

                    </div>
                    <div class="sale-offer__discount flx-align gap-2">
                        <span class="sale-offer__text text-heading text-capitalize">New Year Flash Sale Offer</span>
                        <strong class="sale-offer__qty text-heading font-heading">45% OFF</strong>
                        <a href="#" class="btn btn-sm btn-white pill fw-500">Shop Now</a>
                    </div>
                    <div class="sale-offer__button">
                        <button type="submit" class="sale-offer__close text-heading"><i
                                class="las la-times"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================ Sale Offer End =========================== -->
        <!-- ==================== Header Start Here ==================== -->
        <header class="header">
            <div class="container container-full">
                <nav class="header-inner flx-between">
                    <!-- Logo Start -->
                    <div class="logo">
                        <a href="index.html" class="link white-version">
                            <img src="assets/images/logo/logo-two.png" alt="Logo">
                        </a>
                        <a href="index.html" class="link dark-version">
                            <img src="assets/images/logo/white-logo.png" alt="Logo">
                        </a>
                    </div>
                    <!-- Logo End  -->

                    <!-- Menu Start  -->
                    <div class="header-menu d-lg-block d-none">

                        <ul class="nav-menu flx-align ">
                            <li class="nav-menu__item has-submenu">
                                <a href="javascript:void(0)" class="nav-menu__link">Home</a>
                                <ul class="nav-submenu">
                                    <li class="nav-submenu__item">
                                        <a href="index.html" class="nav-submenu__link"> Home One</a>
                                    </li>
                                    <li class="nav-submenu__item">
                                        <a href="index-two.html" class="nav-submenu__link"> Home Two</a>
                                    </li>
                                    <li class="nav-submenu__item">
                                        <a href="index-three.html" class="nav-submenu__link"> Home Three</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-menu__item has-submenu">
                                <a href="javascript:void(0)" class="nav-menu__link">Products</a>
                                <ul class="nav-submenu">
                                    <li class="nav-submenu__item">
                                        <a href="all-product.html" class="nav-submenu__link"> All Products</a>
                                    </li>
                                    <li class="nav-submenu__item">
                                        <a href="product-details.html" class="nav-submenu__link"> Product Details</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-menu__item has-submenu">
                                <a href="javascript:void(0)" class="nav-menu__link">Pages</a>
                                <ul class="nav-submenu">
                                    <li class="nav-submenu__item">
                                        <a href="profile.html" class="nav-submenu__link"> Profile</a>
                                    </li>
                                    <li class="nav-submenu__item">
                                        <a href="cart.html" class="nav-submenu__link"> Shopping Cart</a>
                                    </li>
                                    <li class="nav-submenu__item">
                                        <a href="cart-personal.html" class="nav-submenu__link"> Mailing Address</a>
                                    </li>
                                    <li class="nav-submenu__item">
                                        <a href="cart-payment.html" class="nav-submenu__link"> Payment Method</a>
                                    </li>
                                    <li class="nav-submenu__item">
                                        <a href="cart-thank-you.html" class="nav-submenu__link"> Preview Order</a>
                                    </li>
                                    <li class="nav-submenu__item">
                                        <a href="dashboard.html" class="nav-submenu__link"> Dashboard</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-menu__item has-submenu">
                                <a href="javascript:void(0)" class="nav-menu__link">Blog</a>
                                <ul class="nav-submenu">
                                    <li class="nav-submenu__item">
                                        <a href="blog.html" class="nav-submenu__link"> Blog</a>
                                    </li>
                                    <li class="nav-submenu__item">
                                        <a href="blog-details.html" class="nav-submenu__link"> Blog Details</a>
                                    </li>
                                    <li class="nav-submenu__item">
                                        <a href="blog-details-sidebar.html" class="nav-submenu__link"> Blog Details
                                            Sidebar</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-menu__item">
                                <a href="contact.html" class="nav-menu__link">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Menu End  -->

                    <!-- Header Right start -->
                    <div class="header-right flx-align">
                        <a href="cart.html" class="header-right__button cart-btn position-relative">
                            <img src="assets/images/icons/cart.svg" alt="" class="white-version">
                            <img src="assets/images/icons/cart-white.svg" alt="" class="dark-version">
                            <span class="qty-badge font-12">0</span>
                        </a>

                        <!-- Light Dark Mode -->
                        <div class="theme-switch-wrapper position-relative">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" class="d-none" id="checkbox">
                                <span class="slider text-black header-right__button white-version">
                                    <img src="assets/images/icons/sun.svg" alt="">
                                </span>
                                <span class="slider text-black header-right__button dark-version">
                                    <img src="assets/images/icons/moon.svg" alt="">
                                </span>
                            </label>
                        </div>

                        <div class="header-right__inner gap-3 flx-align d-lg-flex d-none">

                            <a href="register.html" class="btn btn-main pill">
                                <span class="icon-left icon">
                                    <img src="assets/images/icons/user.svg" alt="">
                                </span>Create Account
                            </a>
                            <div class="language-select flx-align select-has-icon">
                                <img src="assets/images/icons/globe.svg" alt="" class="globe-icon white-version">
                                <img src="assets/images/icons/globe-white.svg" alt="" class="globe-icon dark-version">
                                <select class="select py-0 ps-2 border-0 fw-500">
                                    <option value="1">Eng</option>
                                    <option value="2">Bn</option>
                                    <option value="3">Eur</option>
                                    <option value="4">Urd</option>
                                </select>
                            </div>
                        </div>
                        <button type="button" class="toggle-mobileMenu d-lg-none"> <i class="las la-bars"></i> </button>
                    </div>
                    <!-- Header Right End  -->
                </nav>
            </div>
        </header>
        <!-- ==================== Header End Here ==================== -->
        <!--========================== Banner Section Start ==========================-->
        <section class="hero section-bg z-index-1">
            <img src="assets/images/gradients/banner-gradient.png" alt="" class="bg--gradient white-version">

            <img src="assets/images/shapes/element-moon1.png" alt="" class="element one">
            <img src="assets/images/shapes/element-moon2.png" alt="" class="element two">

            <div class="container container-two">
                <div class="row align-items-center gy-sm-5 gy-4">
                    <div class="col-lg-6">
                        <div class="hero-inner position-relative pe-lg-5">
                            <div>
                                <h1 class="hero-inner__title">2M+ curated digital products</h1>
                                <p class="hero-inner__desc font-18">Explore the best premium themes and plugins
                                    available for sale. Our unique collection is hand-curated by experts. Find and buy
                                    the perfect premium theme today.</p>

                                <div class="position-relative">
                                    <div class="search-box">
                                        <input type="text"
                                            class="common-input common-input--lg pill shadow-sm auto-suggestion-input"
                                            placeholder="Search theme, plugins & more...">
                                        <button type="submit" class="btn btn-main btn-icon icon border-0"><img
                                                src="assets/images/icons/search.svg" alt=""></button>
                                    </div>

                                    <ul class="auto-suggestion-list">
                                        <li>
                                            <a href="#" class="auto-suggestion-list__item w-100 text-body">Business in
                                                HTML</a>
                                        </li>
                                        <li>
                                            <a href="#" class="auto-suggestion-list__item w-100 text-body">Business in
                                                WordPress</a>
                                        </li>
                                        <li>
                                            <a href="#" class="auto-suggestion-list__item w-100 text-body">Business in
                                                CMS</a>
                                        </li>
                                        <li>
                                            <a href="#" class="auto-suggestion-list__item w-100 text-body">Ecommerce in
                                                HTML</a>
                                        </li>
                                        <li>
                                            <a href="#" class="auto-suggestion-list__item w-100 text-body">Ecommerce in
                                                WordPress</a>
                                        </li>
                                        <li>
                                            <a href="#" class="auto-suggestion-list__item w-100 text-body">Ecommerce in
                                                CMS</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Tech List Start -->
                                <div class="product-category-list">
                                    <a href="all-product.html" class="product-category-list__item"
                                        data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="WordPress">
                                        <img src="assets/images/thumbs/tech-icon1.png" alt="" class="white-version">
                                        <img src="assets/images/thumbs/tech-icon-white1.png" alt=""
                                            class="dark-version">
                                    </a>
                                    <a href="all-product.html" class="product-category-list__item"
                                        data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Laravel">
                                        <img src="assets/images/thumbs/tech-icon2.png" alt="">
                                    </a>
                                    <a href="all-product.html" class="product-category-list__item"
                                        data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="PHP">
                                        <img src="assets/images/thumbs/tech-icon3.png" alt="" class="white-version">
                                        <img src="assets/images/thumbs/tech-icon-white3.png" alt=""
                                            class="dark-version">
                                    </a>
                                    <a href="all-product.html" class="product-category-list__item"
                                        data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="HTML">
                                        <img src="assets/images/thumbs/tech-icon4.png" alt="">
                                    </a>
                                    <a href="all-product.html" class="product-category-list__item"
                                        data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Sketch">
                                        <img src="assets/images/thumbs/tech-icon5.png" alt="">
                                    </a>
                                    <a href="all-product.html" class="product-category-list__item"
                                        data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Figma">
                                        <img src="assets/images/thumbs/tech-icon6.png" alt="">
                                    </a>
                                    <a href="all-product.html" class="product-category-list__item"
                                        data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Bootstrap">
                                        <img src="assets/images/thumbs/tech-icon7.png" alt="">
                                    </a>
                                    <a href="all-product.html" class="product-category-list__item"
                                        data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tailwind">
                                        <img src="assets/images/thumbs/tech-icon8.png" alt="">
                                    </a>
                                    <a href="all-product.html" class="product-category-list__item"
                                        data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="React">
                                        <img src="assets/images/thumbs/tech-icon9.png" alt="">
                                    </a>
                                </div>
                                <!-- Tech List End -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hero-thumb">
                            <img src="assets/images/thumbs/banner-img.png" alt="">
                            <img src="assets/images/shapes/dots.png" alt="" class="dotted-img white-version">
                            <img src="assets/images/shapes/dots-white.png" alt="" class="dotted-img dark-version">
                            <img src="assets/images/shapes/element2.png" alt="" class="element two end-0">

                            <div class="statistics animation bg-main text-center">
                                <h5 class="statistics__amount text-white">50k</h5>
                                <span class="statistics__text text-white font-14">Customers</span>
                            </div>

                            <div class="statistics style-two bg-white text-center">
                                <h5 class="statistics__amount statistics__amount-two text-heading">22k</h5>
                                <span class="statistics__text text-heading font-14">Themes & Plugins</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--========================== Banner Section End ==========================-->

        <!-- ======================== popular Section Start =========================== -->
        <section class="popular padding-y-120 overflow-hidden">
            <div class="container container-two">
                <div class="section-heading style-left mb-64">
                    <h5 class="section-heading__title">Popular Categories</h5>
                </div>
                <div class="popular-slider arrow-style-two row gy-4">
                    <div class="col-lg-2">
                        <a href="all-product.html" class="popular-item w-100">
                            <span class="popular-item__icon">
                                <img src="assets/images/icons/popular-icon1.svg" alt="">
                            </span>
                            <h6 class="popular-item__title font-18">WordPress</h6>
                            <span class="popular-item__qty text-body">15,296</span>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="all-product.html" class="popular-item w-100">
                            <span class="popular-item__icon">
                                <img src="assets/images/icons/popular-icon2.svg" alt="">
                            </span>
                            <h6 class="popular-item__title font-18">Plugin</h6>
                            <span class="popular-item__qty text-body">15,296</span>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="all-product.html" class="popular-item w-100">
                            <span class="popular-item__icon">
                                <img src="assets/images/icons/popular-icon3.svg" alt="">
                            </span>
                            <h6 class="popular-item__title font-18">HTML</h6>
                            <span class="popular-item__qty text-body">15,296</span>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="all-product.html" class="popular-item w-100">
                            <span class="popular-item__icon">
                                <img src="assets/images/icons/popular-icon4.svg" alt="">
                            </span>
                            <h6 class="popular-item__title font-18">Java Script</h6>
                            <span class="popular-item__qty text-body">15,296</span>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="all-product.html" class="popular-item w-100">
                            <span class="popular-item__icon">
                                <img src="assets/images/icons/popular-icon5.svg" alt="">
                            </span>
                            <h6 class="popular-item__title font-18">Mobile App</h6>
                            <span class="popular-item__qty text-body">15,296</span>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="all-product.html" class="popular-item w-100">
                            <span class="popular-item__icon">
                                <img src="assets/images/icons/popular-icon6.svg" alt="">
                            </span>
                            <h6 class="popular-item__title font-18">PHP Script</h6>
                            <span class="popular-item__qty text-body">15,296</span>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="all-product.html" class="popular-item w-100">
                            <span class="popular-item__icon">
                                <img src="assets/images/icons/popular-icon4.svg" alt="">
                            </span>
                            <h6 class="popular-item__title font-18">Java Script</h6>
                            <span class="popular-item__qty text-body">15,296</span>
                        </a>
                    </div>
                </div>
                <div class="popular__button text-center">
                    <a href="all-product.html"
                        class="font-18 fw-600 text-heading hover-text-main text-decoration-underline font-heading">Explore
                        More</a>
                </div>
            </div>
        </section>
        <!-- ======================== popular Section End =========================== -->
        <!-- =========================== Arrival Product Section Start ========================== -->
        <section class="arrival-product padding-y-120 section-bg position-relative z-index-1">
            <img src="assets/images/gradients/product-gradient.png" alt="" class="bg--gradient white-version">

            <img src="assets/images/shapes/element2.png" alt="" class="element one">

            <div class="container container-two">
                <div class="section-heading">
                    <h3 class="section-heading__title">New Arrival Products</h3>
                </div>

                <ul class="nav common-tab justify-content-center nav-pills mb-48" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all"
                            aria-selected="true">All Item</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-wordPress-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-wordPress" type="button" role="tab" aria-controls="pills-wordPress"
                            aria-selected="false">wordPress</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-php-tab" data-bs-toggle="pill" data-bs-target="#pills-php"
                            type="button" role="tab" aria-controls="pills-php" aria-selected="false">php</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-siteTemplate-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-siteTemplate" type="button" role="tab"
                            aria-controls="pills-siteTemplate" aria-selected="false">site Template</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-blogging-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-blogging" type="button" role="tab" aria-controls="pills-blogging"
                            aria-selected="false">blogging</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-marketing-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-marketing" type="button" role="tab" aria-controls="pills-marketing"
                            aria-selected="false">marketing</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-plugins-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-plugins" type="button" role="tab" aria-controls="pills-plugins"
                            aria-selected="false">plugins</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-uiTemplate-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-uiTemplate" type="button" role="tab" aria-controls="pills-uiTemplate"
                            aria-selected="false">UI Template</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-all" role="tabpanel"
                        aria-labelledby="pills-all-tab" tabindex="0">
                        <div class="row gy-4">
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img1.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$120</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$259</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">1200 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img2.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$236</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">100 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img3.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">900 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img4.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$59</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$129</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">1225 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img5.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$99</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$129</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">1300 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img6.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$256</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">200 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img7.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$259</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">500 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img8.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">2100 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-wordPress" role="tabpanel"
                        aria-labelledby="pills-wordPress-tab" tabindex="0">
                        <div class="row gy-4">
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img1.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$120</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$259</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">1200 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img2.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$236</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">100 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img3.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">900 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img4.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$59</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$129</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">1225 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img5.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$99</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$129</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">1300 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img6.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$256</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">200 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img7.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$259</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">500 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img8.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">2100 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-php" role="tabpanel" aria-labelledby="pills-php-tab"
                        tabindex="0">
                        <div class="row gy-4">
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img1.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$120</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$259</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">1200 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img2.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$236</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">100 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img3.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">900 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img4.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$59</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$129</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">1225 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img5.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$99</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$129</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">1300 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img6.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$256</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">200 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img7.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$259</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">500 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img8.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">2100 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-siteTemplate" role="tabpanel"
                        aria-labelledby="pills-siteTemplate-tab" tabindex="0">
                        <div class="row gy-4">
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img1.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$120</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$259</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">1200 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img2.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$236</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">100 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img3.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">900 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img4.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$59</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$129</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">1225 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img5.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$99</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$129</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">1300 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img6.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$256</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">200 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img7.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$259</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">500 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img8.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">2100 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-blogging" role="tabpanel" aria-labelledby="pills-blogging-tab"
                        tabindex="0">
                        <div class="row gy-4">
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img1.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$120</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$259</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">1200 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img2.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$236</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">100 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img3.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">900 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img4.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$59</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$129</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">1225 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img5.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$99</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$129</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">1300 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img6.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$256</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">200 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img7.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$259</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">500 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img8.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">2100 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-marketing" role="tabpanel"
                        aria-labelledby="pills-marketing-tab" tabindex="0">
                        <div class="row gy-4">
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img1.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$120</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$259</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">1200 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img2.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$236</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">100 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img3.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">900 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img4.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$59</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$129</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">1225 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img5.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$99</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$129</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">1300 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img6.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$256</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">200 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img7.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$259</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">500 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img8.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">2100 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-plugins" role="tabpanel" aria-labelledby="pills-plugins-tab"
                        tabindex="0">
                        <div class="row gy-4">
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img1.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$120</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$259</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">1200 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img2.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$236</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">100 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img3.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">900 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img4.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$59</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$129</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">1225 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img5.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$99</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$129</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">1300 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img6.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$256</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">200 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img7.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$259</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">500 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img8.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">2100 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-uiTemplate" role="tabpanel"
                        aria-labelledby="pills-uiTemplate-tab" tabindex="0">
                        <div class="row gy-4">
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img1.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$120</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$259</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">1200 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img2.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$236</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">100 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img3.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">900 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img4.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$59</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$129</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">1225 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img5.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$99</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$129</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">1300 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img6.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$256</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">200 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img7.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$259</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">500 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img8.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">2100 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="text-center mt-64">
                    <a href="all-product.html" class="btn btn-main btn-lg pill fw-300">
                        View All Products
                    </a>
                </div>

            </div>
        </section>
        <!-- =========================== Arrival Product Section End ========================== -->
        <!-- ======================= Featured Products Start =============================== -->
        <section class="featured-product padding-y-120 position-relative z-index-1">
            <img src="assets/images/gradients/featured-gradient.png" alt="" class="bg--gradient white-version">
            <img src="assets/images/shapes/spider-net.png" alt=""
                class="spider-net position-absolute top-0 end-0 z-index--1 white-version">
            <img src="assets/images/shapes/spider-net-white.png" alt=""
                class="spider-net position-absolute top-0 end-0 z-index--1 dark-version">

            <img src="assets/images/shapes/element1.png" alt="" class="element two">

            <div class="container container-two">
                <div class="row gy-4 flex-wrap-reverse align-items-center">
                    <div class="col-xl-6">
                        <div class="row gy-4 card-wrapper">
                            <div class="col-sm-6">
                                <div class="product-item box-shadow">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img9.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$120</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$259</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">1200 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="product-item box-shadow">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img10.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$236</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">100 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="product-item box-shadow">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img11.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">900 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="product-item box-shadow">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img4.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$59</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$129</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">1225 Sales</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-1 d-xl-block d-none"></div>
                    <div class="col-xl-5">
                        <div class="section-content">
                            <div class="section-heading style-left">
                                <h3 class="section-heading__title">Featured Products</h3>
                                <p class="section-heading__desc font-18 w-sm">Every month we pick some best products for
                                    you. This month's best web themes & templates have arrived, chosen by our content
                                    specialists.</p>
                            </div>
                            <a href="all-product.html" class="btn btn-main btn-lg pill fw-300">
                                View All Items
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======================= Featured Products End =============================== -->

        <!-- ======================= Selling Products Start ========================= -->
        <section class="selling-product padding-y-120 position-relative z-index-1 overflow-hidden">
            <img src="assets/images/gradients/selling-gradient.png" alt="" class="bg--gradient">

            <img src="assets/images/shapes/element2.png" alt="" class="element one">
            <img src="assets/images/shapes/element1.png" alt="" class="element two">

            <img src="assets/images/shapes/curve-pattern1.png" alt=""
                class="position-absolute start-0 top-0 z-index--1">
            <img src="assets/images/shapes/curve-pattern2.png" alt="" class="position-absolute end-0 top-0 z-index--1">

            <div class="container container-two">
                <div class="section-heading style-left style-white flx-between max-w-unset gap-4">
                    <div>
                        <h3 class="section-heading__title">Weekly Best selling Products</h3>
                        <p class="section-heading__desc font-18">Every month we pick some best products for you. This
                            month's best web themes &amp; templates have arrived, chosen by our content specialists.</p>
                    </div>
                    <a href="all-product.html" class="btn btn-main btn-lg pill fw-300">
                        View All Items
                    </a>
                </div>
                <div class="selling-product-slider">
                    <div class="product-item shadow-sm overlay-none">
                        <div class="product-item__thumb d-flex max-h-unset">
                            <a href="product-details.html" class="link w-100">
                                <img src="assets/images/thumbs/product-img12.png" alt="" class="cover-img">
                            </a>
                        </div>
                        <div class="product-item__content">
                            <h6 class="product-item__title">
                                <a href="product-details.html" class="link">Title here digital products new marketplace
                                    theme</a>
                            </h6>
                            <div class="product-item__info flx-between gap-2">
                                <span class="product-item__author">
                                    by
                                    <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
                                </span>
                                <div class="flx-align gap-2">
                                    <h6 class="product-item__price mb-0">$56</h6>
                                    <span class="product-item__prevPrice text-decoration-line-through">$65</span>
                                </div>
                            </div>
                            <div class="product-item__bottom flx-between gap-2">
                                <div>
                                    <span class="product-item__sales font-16 mb-2">1230 Sales</span>
                                    <ul class="star-rating gap-2">
                                        <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>
                                        <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>
                                        <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>
                                        <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>
                                        <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="flx-align gap-2">
                                    <a href="product-details.html"
                                        class="btn btn-outline-light download-icon btn-icon btn-icon--sm pill">
                                        <span class="icon">
                                            <img src="assets/images/icons/download.svg" alt="" class="white-version">
                                            <img src="assets/images/icons/download-white.svg" alt=""
                                                class="dark-version">
                                        </span>
                                    </a>
                                    <a href="product-details.html" class="btn btn-outline-light pill">Live Demo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-item shadow-sm overlay-none">
                        <div class="product-item__thumb d-flex max-h-unset">
                            <a href="product-details.html" class="link w-100">
                                <img src="assets/images/thumbs/product-img13.png" alt="" class="cover-img">
                            </a>
                        </div>
                        <div class="product-item__content">
                            <h6 class="product-item__title">
                                <a href="product-details.html" class="link">Title here digital products new marketplace
                                    theme</a>
                            </h6>
                            <div class="product-item__info flx-between gap-2">
                                <span class="product-item__author">
                                    by
                                    <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
                                </span>
                                <div class="flx-align gap-2">
                                    <h6 class="product-item__price mb-0">$32</h6>
                                    <span class="product-item__prevPrice text-decoration-line-through">$40</span>
                                </div>
                            </div>
                            <div class="product-item__bottom flx-between gap-2">
                                <div>
                                    <span class="product-item__sales font-16 mb-2">1230 Sales</span>
                                    <ul class="star-rating gap-2">
                                        <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>
                                        <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>
                                        <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>
                                        <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>
                                        <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="flx-align gap-2">
                                    <a href="product-details.html"
                                        class="btn btn-outline-light download-icon btn-icon btn-icon--sm pill">
                                        <span class="icon">
                                            <img src="assets/images/icons/download.svg" alt="" class="white-version">
                                            <img src="assets/images/icons/download-white.svg" alt=""
                                                class="dark-version">
                                        </span>
                                    </a>
                                    <a href="product-details.html" class="btn btn-outline-light pill">Live Demo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-item shadow-sm overlay-none">
                        <div class="product-item__thumb d-flex max-h-unset">
                            <a href="product-details.html" class="link w-100">
                                <img src="assets/images/thumbs/product-img14.png" alt="" class="cover-img">
                            </a>
                        </div>
                        <div class="product-item__content">
                            <h6 class="product-item__title">
                                <a href="product-details.html" class="link">Title here digital products new marketplace
                                    theme</a>
                            </h6>
                            <div class="product-item__info flx-between gap-2">
                                <span class="product-item__author">
                                    by
                                    <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
                                </span>
                                <div class="flx-align gap-2">
                                    <h6 class="product-item__price mb-0">$90</h6>
                                    <span class="product-item__prevPrice text-decoration-line-through">$120</span>
                                </div>
                            </div>
                            <div class="product-item__bottom flx-between gap-2">
                                <div>
                                    <span class="product-item__sales font-16 mb-2">1230 Sales</span>
                                    <ul class="star-rating gap-2">
                                        <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>
                                        <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>
                                        <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>
                                        <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>
                                        <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="flx-align gap-2">
                                    <a href="product-details.html"
                                        class="btn btn-outline-light download-icon btn-icon btn-icon--sm pill">
                                        <span class="icon">
                                            <img src="assets/images/icons/download.svg" alt="" class="white-version">
                                            <img src="assets/images/icons/download-white.svg" alt=""
                                                class="dark-version">
                                        </span>
                                    </a>
                                    <a href="product-details.html" class="btn btn-outline-light pill">Live Demo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-item shadow-sm overlay-none">
                        <div class="product-item__thumb d-flex max-h-unset">
                            <a href="product-details.html" class="link w-100">
                                <img src="assets/images/thumbs/product-img13.png" alt="" class="cover-img">
                            </a>
                        </div>
                        <div class="product-item__content">
                            <h6 class="product-item__title">
                                <a href="product-details.html" class="link">Title here digital products new marketplace
                                    theme</a>
                            </h6>
                            <div class="product-item__info flx-between gap-2">
                                <span class="product-item__author">
                                    by
                                    <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
                                </span>
                                <div class="flx-align gap-2">
                                    <h6 class="product-item__price mb-0">$56</h6>
                                    <span class="product-item__prevPrice text-decoration-line-through">$54</span>
                                </div>
                            </div>
                            <div class="product-item__bottom flx-between gap-2">
                                <div>
                                    <span class="product-item__sales font-16 mb-2">1230 Sales</span>
                                    <ul class="star-rating gap-2">
                                        <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>
                                        <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>
                                        <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>
                                        <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>
                                        <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="flx-align gap-2">
                                    <a href="product-details.html"
                                        class="btn btn-outline-light download-icon btn-icon btn-icon--sm pill">
                                        <span class="icon">
                                            <img src="assets/images/icons/download.svg" alt="" class="white-version">
                                            <img src="assets/images/icons/download-white.svg" alt=""
                                                class="dark-version">
                                        </span>
                                    </a>
                                    <a href="product-details.html" class="btn btn-outline-light pill">Live Demo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======================= Selling Products End ========================= -->

        <!-- ======================= To Featured Author Start =============================== -->
        <section class="top-author padding-y-120 section-bg position-relative z-index-1">
            <img src="assets/images/gradients/featured-gradient.png" alt="" class="bg--gradient white-version">
            <img src="assets/images/shapes/spider-net.png" alt=""
                class="spider-net position-absolute top-0 start-0 z-index--1 white-version">
            <img src="assets/images/shapes/spider-net-white2.png" alt=""
                class="spider-net position-absolute top-0 start-0 z-index--1 dark-version">
            <img src="assets/images/shapes/pattern-curve-three.png" alt=""
                class="position-absolute top-0 end-0 z-index--1">

            <img src="assets/images/shapes/element1.png" alt="" class="element two">

            <div class="container container-two">
                <div class="row gy-4 align-items-center">
                    <div class="col-xl-5">
                        <div class="section-content">
                            <div class="section-heading style-left">
                                <h3 class="section-heading__title">Top Featured Author</h3>
                                <p class="section-heading__desc font-18 w-sm">Every month we pick some best products for
                                    you. This month's best web themes & templates have arrived, chosen by our content
                                    specialists.</p>
                            </div>
                            <div class="author-info d-flex align-items-center gap-3">
                                <div class="author-info__thumb">
                                    <img src="assets/images/thumbs/author-img.png" alt="">
                                </div>
                                <div class="author-info__content">
                                    <h4 class="author-info__name mb-1">Amplify</h4>
                                    <span class="author-info__text">Member Since 2021</span>
                                </div>
                            </div>
                            <div class="flx-align gap-2 mt-48">
                                <a href="profile.html" class="btn btn-main btn-lg pill fw-300"> View Profile </a>
                                <button type="button"
                                    class="follow-btn btn btn-outline-light btn-lg pill">Follow</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="circle-content position-relative">
                            <div class="circle static-circle">
                                <div class="circle__badge">
                                    <img src="assets/images/icons/featured-badge.png" alt="">
                                </div>
                                <div class="circle__text">
                                    <p>
                                        DPmarketer Top Featured Author
                                    </p>
                                </div>
                            </div>
                            <div class="row gy-4 card-wrapper">
                                <div class="col-sm-6">
                                    <div class="product-item box-shadow">
                                        <div class="product-item__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="assets/images/thumbs/product-img9.png" alt=""
                                                    class="cover-img">
                                            </a>
                                            <button type="button" class="product-item__wishlist"><i
                                                    class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-item__content">
                                            <h6 class="product-item__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital
                                                    products Title here</a>
                                            </h6>
                                            <div class="product-item__info flx-between gap-2">
                                                <span class="product-item__author">
                                                    by
                                                    <a href="profile.html" class="link hover-text-decoration-underline">
                                                        themepix</a>
                                                </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-item__price mb-0">$120</h6>
                                                    <span
                                                        class="product-item__prevPrice text-decoration-line-through">$259</span>
                                                </div>
                                            </div>
                                            <div class="product-item__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-item__sales font-14 mb-2">1200 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i
                                                                    class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i
                                                                    class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i
                                                                    class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i
                                                                    class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i
                                                                    class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14">
                                                            (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html"
                                                    class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="product-item box-shadow">
                                        <div class="product-item__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="assets/images/thumbs/product-img10.png" alt=""
                                                    class="cover-img">
                                            </a>
                                            <button type="button" class="product-item__wishlist"><i
                                                    class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-item__content">
                                            <h6 class="product-item__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital
                                                    products Title here</a>
                                            </h6>
                                            <div class="product-item__info flx-between gap-2">
                                                <span class="product-item__author">
                                                    by
                                                    <a href="profile.html" class="link hover-text-decoration-underline">
                                                        themepix</a>
                                                </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-item__price mb-0">$129</h6>
                                                    <span
                                                        class="product-item__prevPrice text-decoration-line-through">$236</span>
                                                </div>
                                            </div>
                                            <div class="product-item__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-item__sales font-14 mb-2">100 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i
                                                                    class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i
                                                                    class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i
                                                                    class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i
                                                                    class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i
                                                                    class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14">
                                                            (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html"
                                                    class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="product-item box-shadow">
                                        <div class="product-item__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="assets/images/thumbs/product-img11.png" alt=""
                                                    class="cover-img">
                                            </a>
                                            <button type="button" class="product-item__wishlist"><i
                                                    class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-item__content">
                                            <h6 class="product-item__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital
                                                    products Title here</a>
                                            </h6>
                                            <div class="product-item__info flx-between gap-2">
                                                <span class="product-item__author">
                                                    by
                                                    <a href="profile.html" class="link hover-text-decoration-underline">
                                                        themepix</a>
                                                </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-item__price mb-0">$79</h6>
                                                    <span
                                                        class="product-item__prevPrice text-decoration-line-through">$99</span>
                                                </div>
                                            </div>
                                            <div class="product-item__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-item__sales font-14 mb-2">900 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i
                                                                    class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i
                                                                    class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i
                                                                    class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i
                                                                    class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i
                                                                    class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14">
                                                            (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html"
                                                    class="btn btn-outline-light btn-sm pill">Live Demo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="product-item box-shadow">
                                        <div class="product-item__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="assets/images/thumbs/product-img4.png" alt=""
                                                    class="cover-img">
                                            </a>
                                            <button type="button" class="product-item__wishlist"><i
                                                    class="fas fa-heart"></i></button>
                                        </div>
                                        <div class="product-item__content">
                                            <h6 class="product-item__title">
                                                <a href="product-details.html" class="link">SaaS dashboard digital
                                                    products Title here</a>
                                            </h6>
                                            <div class="product-item__info flx-between gap-2">
                                                <span class="product-item__author">
                                                    by
                                                    <a href="profile.html" class="link hover-text-decoration-underline">
                                                        themepix</a>
                                                </span>
                                                <div class="flx-align gap-2">
                                                    <h6 class="product-item__price mb-0">$59</h6>
                                                    <span
                                                        class="product-item__prevPrice text-decoration-line-through">$129</span>
                                                </div>
                                            </div>
                                            <div class="product-item__bottom flx-between gap-2">
                                                <div>
                                                    <span class="product-item__sales font-14 mb-2">1225 Sales</span>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i
                                                                    class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i
                                                                    class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i
                                                                    class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i
                                                                    class="fas fa-star"></i></li>
                                                            <li class="star-rating__item font-11"><i
                                                                    class="fas fa-star"></i></li>
                                                        </ul>
                                                        <span class="star-rating__text text-heading fw-500 font-14">
                                                            (16)</span>
                                                    </div>
                                                </div>
                                                <a href="product-details.html"
                                                    class="btn btn-outline-light btn-sm pill">Live Demo</a>
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
        <!-- ======================= To Featured Author End =============================== -->
        <!-- ======================= Top performance Author Start =============================== -->
        <section class="top-performance overflow-hidden padding-y-120 position-relative z-index-1">
            <img src="assets/images/shapes/spider-net.png" alt=""
                class="spider-net position-absolute top-0 end-0 z-index--1 white-version">
            <img src="assets/images/shapes/spider-net-white.png" alt=""
                class="spider-net position-absolute top-0 end-0 z-index--1 dark-version">
            <img src="assets/images/shapes/pattern-curve-four.png" alt=""
                class="position-absolute top-0 start-0 z-index--1">

            <img src="assets/images/shapes/element2.png" alt="" class="element two">

            <div class="container container-two">
                <div class="row gy-4 align-items-center flex-wrap-reverse">
                    <div class="col-lg-7 pe-lg-5">
                        <div class="position-relative">
                            <div class="circle style-two static-circle">
                                <div class="circle__badge">
                                    <img src="assets/images/icons/featured-badge.png" alt="">
                                </div>
                                <div class="circle__desc circle__text">
                                    <p>
                                        Our Top Performance
                                    </p>
                                </div>
                            </div>
                            <div class="performance-content">
                                <div class="performance-content__item">
                                    <span class="performance-content__text font-18">Email Subscription</span>
                                    <h4 class="performance-content__count">49,000+</h4>
                                </div>
                                <div class="performance-content__item">
                                    <span class="performance-content__text font-18"> Total Products</span>
                                    <h4 class="performance-content__count">45,000+</h4>
                                </div>
                                <div class="performance-content__item">
                                    <span class="performance-content__text font-18"> Total Download</span>
                                    <h4 class="performance-content__count">48,000+</h4>
                                </div>
                                <div class="performance-content__item">
                                    <span class="performance-content__text font-18"> Monthly Visitor</span>
                                    <h4 class="performance-content__count">65,000+</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="section-content">
                            <div class="section-heading style-left">
                                <h3 class="section-heading__title">Top Performance</h3>
                                <p class="section-heading__desc font-18 w-sm">Every month we pick some best products for
                                    you. This month's best web themes & templates have arrived, chosen by our content
                                    specialists.</p>
                            </div>
                            <a href="register.html" class="btn btn-main btn-lg pill fw-300"> Get Started </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======================= Top performance Author End =============================== -->
        <!-- =========================== Blog Section Start ========================== -->
        <section class="blog padding-y-120 section-bg position-relative z-index-1 overflow-hidden">
            <img src="assets/images/shapes/pattern-five.png" class="position-absolute end-0 top-0 z-index--1" alt="">
            <div class="container container-two">
                <div class="section-heading style-left style-flex flx-between align-items-end gap-3">
                    <div class="section-heading__inner">
                        <h3 class="section-heading__title">Browse all latest blogs and articles</h3>
                    </div>
                    <a href="blog.html" class="btn btn-main btn-lg pill">Browse All Articles </a>
                </div>
                <div class="row gy-4">
                    <div class="col-lg-4 col-sm-6">
                        <div class="post-item">
                            <div class="post-item__thumb">
                                <a href="blog-details.html" class="link">
                                    <img src="assets/images/thumbs/blog1.png" class="cover-img" alt="">
                                </a>
                            </div>
                            <div class="post-item__content">
                                <div class="post-item__top flx-align">
                                    <a href="blog.html"
                                        class="post-item__tag pill font-14 text-heading fw-500 hover-text-main">Hiring</a>
                                    <div class="post-item__date font-14 flx-align gap-2 font-14 text-heading fw-500">
                                        <span class="icon">
                                            <img src="assets/images/icons/calendar.svg" alt="" class="white-version">
                                            <img src="assets/images/icons/calendar-white.svg" alt=""
                                                class="dark-version">
                                        </span>
                                        <span class="text">Jan 17, 2024</span>
                                    </div>
                                </div>
                                <h5 class="post-item__title">
                                    <a href="blog-details.html" class="link">How to hire a right business executive for
                                        your company</a>
                                </h5>
                                <a href="blog-details.html" class="btn btn-outline-light pill fw-600">Read More </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="post-item">
                            <div class="post-item__thumb">
                                <a href="blog-details.html" class="link">
                                    <img src="assets/images/thumbs/blog2.png" class="cover-img" alt="">
                                </a>
                            </div>
                            <div class="post-item__content">
                                <div class="post-item__top flx-align">
                                    <a href="blog.html"
                                        class="post-item__tag pill font-14 text-heading fw-500 hover-text-main">Workshop</a>
                                    <div class="post-item__date font-14 flx-align gap-2 font-14 text-heading fw-500">
                                        <span class="icon">
                                            <img src="assets/images/icons/calendar.svg" alt="" class="white-version">
                                            <img src="assets/images/icons/calendar-white.svg" alt=""
                                                class="dark-version">
                                        </span>
                                        <span class="text">Jan 17, 2024</span>
                                    </div>
                                </div>
                                <h5 class="post-item__title">
                                    <a href="blog-details.html" class="link">The Gig Economy: Adapting to a Flexible
                                        Workforce</a>
                                </h5>
                                <a href="blog-details.html" class="btn btn-outline-light pill fw-600">Read More </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="post-item">
                            <div class="post-item__thumb">
                                <a href="blog-details.html" class="link">
                                    <img src="assets/images/thumbs/blog3.png" class="cover-img" alt="">
                                </a>
                            </div>
                            <div class="post-item__content">
                                <div class="post-item__top flx-align">
                                    <a href="blog.html"
                                        class="post-item__tag pill font-14 text-heading fw-500 hover-text-main">Project
                                        Management</a>
                                    <div class="post-item__date font-14 flx-align gap-2 font-14 text-heading fw-500">
                                        <span class="icon">
                                            <img src="assets/images/icons/calendar.svg" alt="" class="white-version">
                                            <img src="assets/images/icons/calendar-white.svg" alt=""
                                                class="dark-version">
                                        </span>
                                        <span class="text">Jan 17, 2024</span>
                                    </div>
                                </div>
                                <h5 class="post-item__title">
                                    <a href="blog-details.html" class="link">The Future of Remote Work: Strategies for
                                        Success</a>
                                </h5>
                                <a href="blog-details.html" class="btn btn-outline-light pill fw-600">Read More </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =========================== Blog Section End ========================== -->

        <!-- ======================= Become seller section start ==================== -->
        <section class="seller padding-y-120">
            <div class="container container-two">
                <div class="row gy-4">
                    <div class="col-lg-6">
                        <div class="seller-item position-relative z-index-1">
                            <img src="assets/images/shapes/seller-bg.png" class="position-absolute
                    start-0 top-0 z-index--1" alt="">
                            <h3 class="seller-item__title">Earn 75% of the ItemD Price</h3>
                            <p class="seller-item__desc fw-500 text-heading">Sellers receive 75% of the Itemp Price for
                                items Dsold exclusively and 50% for items sold non-exclusively. See detailed
                                informationabout the fee structure on Market.</p>
                            <a href="register.html" class="btn btn-static-outline-black btn-xl pill fw-600">Become a
                                Seller</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="seller-item bg-two position-relative z-index-1">
                            <img src="assets/images/shapes/seller-bg-two.png" class="position-absolute
                    start-0 top-0 z-index--1" alt="">
                            <h3 class="seller-item__title">Earn until 40% commission</h3>
                            <p class="seller-item__desc fw-500 text-heading">Our Market is the world’s largest creative
                                market place, selling millions of digital assets every year. With 30% affiliate
                                commission, earning money has never been easier!</p>
                            <a href="register.html" class="btn btn-static-outline-black btn-xl pill fw-600">Become an
                                Affiliate</a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="support position-relative z-index-1">
                            <img src="assets/images/shapes/spider-net-sm.png" alt=""
                                class="spider-net position-absolute top-0 end-0 z-index--1">
                            <img src="assets/images/shapes/arrow-shape.png" alt="" class="arrow-shape">
                            <div class="row align-items-center">
                                <div class="col-lg-1 d-lg-block d-none"></div>
                                <div class="col-lg-3 col-md-4 d-md-block d-none">
                                    <div class="support-thumb text-center">
                                        <img src="assets/images/thumbs/support-img.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-3 d-lg-block d-none"></div>
                                <div class="col-lg-5 col-md-8">
                                    <div class="support-content">
                                        <h3 class="support-content__title mb-3">Support 24/7</h3>
                                        <p class="support-content__desc">Wanna talk? Send us a message</p>
                                        <a href="mailto:infomail@office.com"
                                            class="btn btn-static-black btn-lg fw-300 pill">infomail@office.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======================= Become seller section End ==================== -->

        <!-- ======================== Brand Section Start ========================= -->
        <div class="brand ">
            <div class="container container">
                <div class="brand-slider">
                    <div class="brand-item d-flex align-items-center justify-content-center">
                        <img src="assets/images/thumbs/brand-img1.png" alt="" class="white-version">
                        <img src="assets/images/thumbs/brand-white-img1.png" alt="" class="dark-version">
                    </div>
                    <div class="brand-item d-flex align-items-center justify-content-center">
                        <img src="assets/images/thumbs/brand-img2.png" alt="" class="white-version">
                        <img src="assets/images/thumbs/brand-white-img2.png" alt="" class="dark-version">
                    </div>
                    <div class="brand-item d-flex align-items-center justify-content-center">
                        <img src="assets/images/thumbs/brand-img3.png" alt="" class="white-version">
                        <img src="assets/images/thumbs/brand-white-img3.png" alt="" class="dark-version">
                    </div>
                    <div class="brand-item d-flex align-items-center justify-content-center">
                        <img src="assets/images/thumbs/brand-img4.png" alt="" class="white-version">
                        <img src="assets/images/thumbs/brand-white-img4.png" alt="" class="dark-version">
                    </div>
                    <div class="brand-item d-flex align-items-center justify-content-center">
                        <img src="assets/images/thumbs/brand-img5.png" alt="" class="white-version">
                        <img src="assets/images/thumbs/brand-white-img5.png" alt="" class="dark-version">
                    </div>
                    <div class="brand-item d-flex align-items-center justify-content-center">
                        <img src="assets/images/thumbs/brand-img3.png" alt="" class="white-version">
                        <img src="assets/images/thumbs/brand-white-img3.png" alt="" class="dark-version">
                    </div>
                </div>
            </div>
        </div>
        <!-- ======================== Brand Section End ========================= -->
@endsection
