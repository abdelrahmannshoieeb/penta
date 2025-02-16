@extends('layout.master')

@section('admin-content')
<div
    dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}"
    data-elementor-type="wp-page" data-elementor-id="25" class="elementor elementor-25">
    <div class="elementor-element elementor-element-f1caa7f e-con-full e-flex e-con e-parent" data-id="f1caa7f" data-element_type="container" id="home">
        <div class="elementor-element elementor-element-8bafed5 elementor-widget elementor-widget-home1_hero" data-id="8bafed5" data-element_type="widget" data-widget_type="home1_hero.default">
            <div class="elementor-widget-container">
                <div class="banner-style-one-area overflow-hidden bg-gray">
                    <div class="shape-blury"></div>
                    <div class="banner-style-one">
                        <div class="container">
                            <div class="content">
                                <div class="row align-center">
                                    <div class="col-xl-6 col-lg-7 pr-50 pr-md-15 pr-xs-15">
                                        <div class="information">
                                            <div class="animation-shape">
                                                <img decoding="async" src="{{asset('assets/wp-content/themes/gixus/assets/img/shape/anim-2.png')}}" alt="Image not found">
                                            </div>
                                            <h4 class="wow fadeInUp" data-wow-duration="400ms">{{ __('messages.welcome') }}</h4>
                                            <h2 class="wow fadeInUp" data-wow-delay="500ms" data-wow-duration="400ms"> {{ __('messages.grow_business') }}</h2>
                                            <p class="wow fadeInUp" data-wow-delay="900ms" data-wow-duration="400ms"> {{ __('messages.business_paragraph') }}.</p>
                                            <div class="button mt-40 wow fadeInUp" data-wow-delay="1200ms" data-wow-duration="400ms">
                                                <a class="btn btn-md circle btn-gradient animation" href="https://wa.me/+201012620529">
                                                    {{ __('messages.get_started') }} </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="banner-one-thumb col-xl-6 col-lg-5 pl-60 pl-md-15 pl-xs-15">
                                        <div class="thumb">
                                            <img decoding="async" class="wow fadeInUp" src="{{asset('assets/wp-content/themes/gixus/assets/img/thumb/1.png')}}" alt="Thumb">
                                            <div class="strategy">
                                                <div class="item wow fadeInLeft" data-wow-delay="800ms" dir>
                                                    <div class="icon">
                                                        <i aria-hidden="true" class="fas fa-chart-pie"></i>
                                                    </div>
                                                    <div class="info">
                                                        <p><strong>86%</strong> Business Growth</p>
                                                    </div>
                                                </div>
                                                <div class="item wow fadeInRight" data-wow-delay="500ms">
                                                    <div class="icon">
                                                        <i aria-hidden="true" class="fas fa-rocket"></i>
                                                    </div>
                                                    <div class="info">
                                                        <p><strong>75%</strong> Marketing</p>
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
            </div>
        </div>
    </div>
    <div style="display: none;" class="elementor-element elementor-element-bb22c19 e-con-full e-flex e-con e-parent" data-id="bb22c19" data-element_type="container">
        <div class="elementor-element elementor-element-d044600 elementor-widget elementor-widget-home1_features" data-id="d044600" data-element_type="widget" data-widget_type="home1_features.default">
            <div class="elementor-widget-container">
                <div class="feature-style-one-area">
                    <div class="container container-stage">
                        <div class="feature-style-one-items">
                            <div class="row">
                                <div class="col-xl-8 col-lg-7 feature-style-one-content text-light">
                                    <div class="feature-style-one-cards">
                                        <div class="path"></div>

                                        <!-- Single item -->
                                        <div class="feature-style-one-item wow fadeInRight" data-wow-delay="0ms">
                                            <div class="icon">
                                                <img decoding="async" src="{{asset('assets/wp-content/themes/gixus/assets/img/icon/1.png')}}" alt="Image Not Found">
                                            </div>
                                            <div class="info">
                                                <h4>Approach</h4>
                                                <p>Continued at necessary breakfast. Surrounded sir motionless she end literature. Gay direction neglected but supported yet her.</p>
                                            </div>
                                        </div>
                                        <!-- End Single item -->
                                        <!-- Single item -->
                                        <div class="feature-style-one-item wow fadeInRight" data-wow-delay="200ms">
                                            <div class="icon">
                                                <img decoding="async" src="{{asset('assets/wp-content/themes/gixus/assets/img/icon/2.png')}}" alt="Image Not Found">
                                            </div>
                                            <div class="info">
                                                <h4>Information</h4>
                                                <p>Continued at necessary breakfast. Surrounded sir motionless she end literature. Gay direction neglected but supported yet her.</p>
                                            </div>
                                        </div>
                                        <!-- End Single item -->
                                        <!-- Single item -->
                                        <div class="feature-style-one-item wow fadeInRight" data-wow-delay="400ms">
                                            <div class="icon">
                                                <img decoding="async" src="{{asset('assets/wp-content/themes/gixus/assets/img/icon/3.png')}}" alt="Image Not Found">
                                            </div>
                                            <div class="info">
                                                <h4>Goal</h4>
                                                <p>Continued at necessary breakfast. Surrounded sir motionless she end literature. Gay direction neglected but supported yet her.</p>
                                            </div>
                                        </div>
                                        <!-- End Single item -->

                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-5">
                                    <div class="feature-style-one-info">
                                        <div class="fun-fact">
                                            <div class="counter">
                                                <div class="timer" data-to="28" data-speed="1000">
                                                    28 </div>
                                                <div class="operator">
                                                    K </div>
                                            </div>
                                        </div>
                                        <h3>Customers are served in our consulting services</h3>
                                        <ul class="list-style-one mt-25">
                                            <li>Growth Method Analysis</li>
                                            <li>Business Management consultation</li>
                                            <li>Team Building Leadership</li>
                                            <li>Assessment Report Analysis</li>
                                        </ul>
                                        <div class="path"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="elementor-element elementor-element-857c852 e-con-full e-flex e-con e-parent" data-id="857c852" data-element_type="container" id="service">
        <div class="elementor-element elementor-element-1bfbfa5 elementor-widget elementor-widget-home1_service" data-id="1bfbfa5" data-element_type="widget" data-widget_type="home1_service.default">
            <div class="elementor-widget-container">
                <div class="services-style-one-area default-padding" style="background: url(wp-content/themes/gixus/assets/img/shape/12.png); padding-bottom: 20px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                                <div class="site-heading text-center">
                                    <h4 class="sub-title">{{__('messages.our_services')}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="services-style-one-items">
                                    <div class="services-style-one-item out wow fadeInRight" data-wow-delay="0ms">
                                        <div class="icon">
                                            <img decoding="async" src="{{ asset('assets/wp-content/themes/gixus/assets/img/icon/41.png') }}" alt="Image Not Found">
                                        </div>
                                        <div class="content">
                                            <h4><a href="advanced-business-intelligence/index.html">{{ __('messages.cashier_system') }}</a></h4>
                                            <p>{{ __('messages.cashier_system_paragraph') }}</p>
                                        </div>
                                        <div class="button" style="display: flex; gap: 10px;">
                                            <!-- WhatsApp Button -->
                                            <a class="btn" href="https://wa.me/+201012620529" style="background-color: #25D366; color: white;">
                                                <i class="fab fa-whatsapp" style="transform: rotate(0deg);"></i> WhatsApp
                                            </a>
                                            <!-- Call Us Button -->
                                            <a class="btn" href="tel:+201012620529" style="background-color: #007BFF; color: white;">
                                                <i class="fas fa-phone" style="transform: rotate(0deg);"></i> Call Us
                                            </a>
                                        </div>
                                    </div>

                                    <div class="services-style-one-item  wow fadeInRight" data-wow-delay="200ms">
                                        <div class="icon">
                                            <img decoding="async" src="{{asset('assets/wp-content/themes/gixus/assets/img/icon/51.png')}}" alt="Image Not Found">
                                        </div>
                                        <div class="content">
                                            <h4><a href="{{route('nexoria.swservices')}}">{{ __('messages.e_commerce') }}</a></h4>
                                            <p>{{ __('messages.e_commerce_paragraph') }}.</p>
                                        </div>
                                        <div class="button" style="display: flex; gap: 10px;">
                                            <!-- WhatsApp Button -->
                                            <a class="btn" href="https://wa.me/+201012620529" style="background-color: #25D366; color: white;">
                                                <i class="fab fa-whatsapp" style="transform: rotate(0deg);"></i> WhatsApp
                                            </a>
                                            <!-- Call Us Button -->
                                            <a class="btn" href="tel:+201012620529" style="background-color: #007BFF; color: white;">
                                                <i class="fas fa-phone" style="transform: rotate(0deg);"></i> Call Us
                                            </a>
                                        </div>
                                    </div>
                                    <div class="services-style-one-item  wow fadeInRight" data-wow-delay="400ms">
                                        <div class="icon">
                                            <img decoding="async" src="{{asset('assets/wp-content/themes/gixus/assets/img/icon/71.png')}}" alt="Image Not Found">
                                        </div>
                                        <div class="content">
                                            <h4><a href="digital-project-management-system/index.html">{{ __('messages.digital_markting') }}</a></h4>
                                            <p>{{ __('messages.digital_markting_paragraph') }}.</p>
                                        </div>
                                        <div class="button" style="display: flex; gap: 10px;">
                                            <!-- WhatsApp Button -->
                                            <a class="btn" href="https://wa.me/+201012620529" style="background-color: #25D366; color: white;">
                                                <i class="fab fa-whatsapp" style="transform: rotate(0deg);"></i> WhatsApp
                                            </a>
                                            <!-- Call Us Button -->
                                            <a class="btn" href="tel:+201012620529" style="background-color: #007BFF; color: white;">
                                                <i class="fas fa-phone" style="transform: rotate(0deg);"></i> Call Us
                                            </a>
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



    <main class="Main">
        <h4 style="margin:10px; padding:10px; text-align:center; background-color:#EBF3F7;">{{ __('messages.choose_between_these_designs') }}</h4>
        <section class="Carousel" id="carousel" tabindex="-1">
            <h2 class="Hidden">Carousel</h2>
            <article class="Card Card--overlay Card--square" id="card-1">
                <div class="Card__media">
                    <img class="Card__image" style="height: 100%;" alt="Card image description" width="480" height="480" loading="lazy" src="{{ asset('assets/imgs/temp1.png') }}">
                </div>
                <div class="Card__main">
                    <h2 class="Card__heading"><a class="Card__link" href="#">Prefer 1/1 aspect ratio</a></h2>
                    <p>This is a generic card pattern.</p>
                </div>
            </article>
            <!--/Card-->
            <article class="Card Card--overlay Card--wide" id="card-2">
                <div class="Card__media">
                    <img class="Card__image"  style="height: 100%;" alt="Card image description" width="720" height="480" loading="lazy" src="{{ asset('assets/imgs/temp2.png') }}">
                </div>
                <div class="Card__main">
                    <h2 class="Card__heading"><a class="Card__link" href="#">Prefer 16/9 aspect ratio</a></h2>
                    <p>This is a generic card pattern.</p>
                </div>
            </article>
            <!--/Card-->
            <article class="Card Card--overlay Card--portrait" id="card-3">
                <div class="Card__media">
                    <img class="Card__image"  style="height: 100%;" alt="Card image description" width="360" height="480" loading="lazy" src="{{ asset('assets/imgs/temp3.png') }}">
                </div>
                <div class="Card__main">
                    <h2 class="Card__heading"><a class="Card__link" href="#">Prefer 3/4 aspect ratio</a></h2>
                    <p>This is a generic card pattern.</p>
                </div>
            </article>
            <!--/Card-->
            <article class="Card Card--overlay Card--photo" id="card-4">
                <div class="Card__media">
                    <img class="Card__image"  style="height: 100%;" alt="Card image description" width="708" height="480" loading="lazy" src="{{ asset('assets/imgs/temp3.png') }}">
                </div>
                <div class="Card__main">
                    <h2 class="Card__heading"><a class="Card__link" href="#">Prefer 4/3 aspect ratio</a></h2>
                    <p>This is a generic card pattern.</p>
                </div>
            </article>
            <!--/Card-->
            <article class="Card Card--overlay Card--square" id="card-5">
                <div class="Card__media">
                    <img class="Card__image"  style="height: 100%;" alt="Card image description" width="480" height="480" loading="lazy" src="https://images.unsplash.com/photo-1622987437805-5c6f7c2609d7?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTYyMzMxOTA3NA&ixlib=rb-1.2.1&q=85&height=480">
                </div>
                <div class="Card__main">
                    <h2 class="Card__heading"><a class="Card__link" href="#">Prefer 1/1 aspect ratio</a></h2>
                    <p>This is a generic card pattern.</p>
                </div>
            </article>
        </section>
        <!--/Carousel-->

        <nav class="Pagination">
            <h2 class="Hidden">Carousel Navigation</h2>
            <button class="Arrow" type="button" aria-controls="carousel" disabled>
                <svg width="16" height="16" viewBox="0 0 16 16" role="presentation">
                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                </svg>
                <span class="Hidden">Previous slide</span>
            </button>
            <button class="Arrow" type="button" aria-controls="carousel" disabled>
                <svg width="16" height="16" viewBox="0 0 16 16" role="presentation">
                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                </svg>
                <span class="Hidden">Next slide</span>
            </button>
            <div class="Dots">
                <a href="#card-1" class="Dot" tabindex="-1"><span class="Hidden">Slide 1</span></a>
                <a href="#card-2" class="Dot" tabindex="-1"><span class="Hidden">Slide 2</span></a>
                <a href="#card-3" class="Dot" tabindex="-1"><span class="Hidden">Slide 3</span></a>
                <a href="#card-4" class="Dot" tabindex="-1"><span class="Hidden">Slide 4</span></a>
                <a href="#card-5" class="Dot" tabindex="-1"><span class="Hidden">Slide 5</span></a>
                <a href="#card-6" class="Dot" tabindex="-1"><span class="Hidden">Slide 6</span></a>
                <a href="#card-7" class="Dot" tabindex="-1"><span class="Hidden">Slide 7</span></a>
                <a href="#card-8" class="Dot" tabindex="-1"><span class="Hidden">Slide 8</span></a>
            </div>
        </nav>
    </main>




    <div class="elementor-element elementor-element-d0944d7 e-con-full e-flex e-con e-parent" data-id="d0944d7" data-element_type="container" id="about">
        <div class="elementor-element elementor-element-4988352 elementor-widget elementor-widget-home1_about" data-id="4988352" data-element_type="widget" data-widget_type="home1_about.default">
            <div class="elementor-widget-container">
                <div class="about-style-one-area default-padding-top">
                    <div class="container">
                        <div class="about-style-one-items">
                            <div class="row">
                                <div class="col-xl-7 col-lg-6">
                                    <div class="thumb-style-one">
                                        <img decoding="async" src="{{asset('assets/wp-content/themes/gixus/assets/img/about/1.jpg')}}" alt="Image Not Found">
                                        <a href="https://www.youtube.com/watch?v=aTC_RNYtEb0" class="popup-youtube video-play-button"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-lg-6 pl-50 pl-md-15 pl-xs-15">
                                    <div class="about-style-one-info">
                                        <div class="content">
                                            <h2 class="title split-text">Meet the executives driving our success.</h2>
                                            <p>Businesses operate in various industries, including technology, finance, healthcare, retail, and manufacturing, among others. They play a crucial role in the economy by providing goods, services, and employment never fruit up Pasture imagin..</p>
                                        </div>
                                        <ul class="card-list">
                                            <li class="wow fadeInUp">
                                                <img decoding="async" src="{{asset('assets/wp-content/themes/gixus/assets/img/icon/4.png')}}" alt="Image Not Found">
                                                <h5>Award Winning Company</h5>
                                            </li>
                                            <li class="wow fadeInUp">
                                                <h2>3.8 X </h2>
                                                <h5>Economical Growth</h5>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="elementor-element elementor-element-c3b0bb4 e-con-full e-flex e-con e-parent" data-id="c3b0bb4" data-element_type="container">
        <div class="elementor-element elementor-element-8aa4caf elementor-widget elementor-widget-home1_project" data-id="8aa4caf" data-element_type="widget" data-widget_type="home1_project.default">
            <div class="elementor-widget-container">
                <div class="project-style-one-area default-padding bg-gray">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 pr-60 pr-md-15 pr-xs-15">
                                <div class="project-style-one-info bg-cover text-light wow fadeInRight" style="background-image: url(wp-content/themes/gixus/assets/img/shape/1.jpg);">
                                    <h3>Have a view of our amazing projects with our clients</h3>
                                    <p>We’re a creative branding and communications company of creative thinkers, strategists, digital innovators, for your company</p>
                                    <ul class="list-style-two mt-20">
                                        <li>Satisfaction guarantee</li>
                                        <li>Ontime delivery</li>
                                    </ul>
                                    <a class="btn-style-two" href="project-v1/index.html">
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="project-style-one-items">
                                    <div class="accordion" id="projectAccordion">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading0">
                                                <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse0" aria-expanded="true" aria-controls="collapse0">
                                                    <span>Strategy</span>
                                                    <b>Digital business planning</b>
                                                </button>
                                            </h2>
                                            <div id="collapse0" class="accordion-collapse collapse show" aria-labelledby="heading0" data-bs-parent="#projectAccordion">
                                                <div class="accordion-body">
                                                    <div class="portfolio-style-one-thumb">
                                                        <img decoding="async" src="{{asset('assets/wp-content/themes/gixus/assets/img/portfolio/5.jpg')}}" alt="Image Not Found">
                                                        <a href="digital-business-planning/index.html">
                                                            <i class="fas fa-link"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading1">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                                    <span>Partnership</span>
                                                    <b>Business program management</b>
                                                </button>
                                            </h2>
                                            <div id="collapse1" class="accordion-collapse collapse " aria-labelledby="heading1" data-bs-parent="#projectAccordion">
                                                <div class="accordion-body">
                                                    <div class="portfolio-style-one-thumb">
                                                        <img decoding="async" src="{{asset('assets/wp-content/themes/gixus/assets/img/portfolio/6.jpg')}}" alt="Image Not Found">
                                                        <a href="business-program-management/index.html">
                                                            <i class="fas fa-link"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading2">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                                    <span>Branding</span>
                                                    <b>Strategy development</b>
                                                </button>
                                            </h2>
                                            <div id="collapse2" class="accordion-collapse collapse " aria-labelledby="heading2" data-bs-parent="#projectAccordion">
                                                <div class="accordion-body">
                                                    <div class="portfolio-style-one-thumb">
                                                        <img decoding="async" src="{{asset('assets/wp-content/themes/gixus/assets/img/portfolio/7.jpg')}}" alt="Image Not Found">
                                                        <a href="strategy-development/index.html">
                                                            <i class="fas fa-link"></i>
                                                        </a>
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
            </div>
        </div>
    </div>

   
    <div class="elementor-element elementor-element-5dbb408 e-con-full e-flex e-con e-parent" data-id="5dbb408" data-element_type="container">
        <div class="elementor-element elementor-element-6d9e93f elementor-widget elementor-widget-home1_counter" data-id="6d9e93f" data-element_type="widget" data-widget_type="home1_counter.default">
            <div class="elementor-widget-container">
                <div class="fun-factor-area default-padding-bottom">
                    <div class="container">
                        <div class="fun-fact-style-one-items text-center">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 funfact-style-one-item">
                                    <div class="fun-fact">
                                        <div class="counter">
                                            <div class="timer" data-to="56" data-speed="2000">56</div>
                                            <div class="operator">K</div>
                                        </div>
                                        <span class="medium">Clients around the world</span>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 funfact-style-one-item">
                                    <div class="fun-fact">
                                        <div class="counter">
                                            <div class="timer" data-to="30" data-speed="2000">30</div>
                                            <div class="operator">+</div>
                                        </div>
                                        <span class="medium">Award Winning</span>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 funfact-style-one-item">
                                    <div class="fun-fact">
                                        <div class="counter">
                                            <div class="timer" data-to="97" data-speed="2000">97</div>
                                            <div class="operator">%</div>
                                        </div>
                                        <span class="medium">Business Growth</span>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 funfact-style-one-item">
                                    <div class="fun-fact">
                                        <div class="counter">
                                            <div class="timer" data-to="60" data-speed="2000">60</div>
                                            <div class="operator">+</div>
                                        </div>
                                        <span class="medium">Team Members</span>
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
@endsection