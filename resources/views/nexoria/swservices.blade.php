@extends('layout.master')

@section('styles')
<link rel="stylesheet" href="{{ asset('assets/wp-content/themes/gixus/assets/css/test.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
@endsection
@section('admin-content')
<main class="Main">
    <h4 style="margin:10px; padding:10px; text-align:center; background-color:#EBF3F7;">{{ __('messages.choose_between_these_designs') }}</h4>
    <section class="Carousel" id="carousel" tabindex="-1">
        <h2 class="Hidden">Carousel</h2>
        <article class="Card Card--overlay Card--square" id="card-1">
            <div class="Card__media">
                <img class="Card__image" alt="Card image description" width="480" height="480" loading="lazy" src="{{ asset('assets/imgs/temp1.png') }}">
            </div>
            <div class="Card__main">
                <h2 class="Card__heading"><a class="Card__link" href="#">Prefer 1/1 aspect ratio</a></h2>
                <p>This is a generic card pattern.</p>
            </div>
        </article>
        <!--/Card-->
        <article class="Card Card--overlay Card--wide" id="card-2">
            <div class="Card__media">
                <img class="Card__image" alt="Card image description" width="720" height="480" loading="lazy" src="{{ asset('assets/imgs/temp2.png') }}">
            </div>
            <div class="Card__main">
                <h2 class="Card__heading"><a class="Card__link" href="#">Prefer 16/9 aspect ratio</a></h2>
                <p>This is a generic card pattern.</p>
            </div>
        </article>
        <!--/Card-->
        <article class="Card Card--overlay Card--portrait" id="card-3">
            <div class="Card__media">
                <img class="Card__image" alt="Card image description" width="360" height="480" loading="lazy" src="{{ asset('assets/imgs/temp3.png') }}">
            </div>
            <div class="Card__main">
                <h2 class="Card__heading"><a class="Card__link" href="#">Prefer 3/4 aspect ratio</a></h2>
                <p>This is a generic card pattern.</p>
            </div>
        </article>
        <!--/Card-->
        <article class="Card Card--overlay Card--photo" id="card-4">
            <div class="Card__media">
                <img class="Card__image" alt="Card image description" width="708" height="480" loading="lazy" src="{{ asset('assets/imgs/temp3.png') }}">
            </div>
            <div class="Card__main">
                <h2 class="Card__heading"><a class="Card__link" href="#">Prefer 4/3 aspect ratio</a></h2>
                <p>This is a generic card pattern.</p>
            </div>
        </article>
        <!--/Card-->
        <article class="Card Card--overlay Card--square" id="card-5">
            <div class="Card__media">
                <img class="Card__image" alt="Card image description" width="480" height="480" loading="lazy" src="https://images.unsplash.com/photo-1622987437805-5c6f7c2609d7?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTYyMzMxOTA3NA&ixlib=rb-1.2.1&q=85&height=480">
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
<div data-elementor-type="wp-page" data-elementor-id="736" class="elementor elementor-736">
    <div class="elementor-element elementor-element-ded8445 e-con-full e-flex e-con e-parent"
        data-id="ded8445" data-element_type="container">
        <div class="elementor-element elementor-element-56f090d elementor-widget elementor-widget-services_two_widget"
            data-id="56f090d" data-element_type="widget" data-widget_type="services_two_widget.default">
            <div class="elementor-widget-container">
                <div class="services-style-three-area default-padding bottom-less bg-gray-secondary bg-cover"
                    style="background-image: url(../wp-content/themes/gixus/assets/img/shape/24.png);">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                                <div class="site-heading text-center">
                                    <h4 class="sub-title">{{ __('messages.software_services_page_title') }}</h4>
                                    <h2 class="title split-text">{{ __('messages.software_services_page_title2') }}
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-md-6 mb-30" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">

                                <div class="services-style-three-item wow fadeInRight"
                                    data-wow-delay="200ms">
                                    <div class="item-title">
                                        <img decoding="async"
                                            src="{{ asset('assets/wp-content/themes/gixus/assets/img/icon/17.png') }}"
                                            alt="Image Not Found">
                                        <h4><a href="../risk-management/index.html" style="direction:rtl" >{{ __('messages.private_programing_header') }}</a></h4>
                                        <p>{{ __('messages.private_programing') }}</p>
                                        <div class="d-flex mt-30">
                                            <a href="../risk-management/index.html"><i
                                                    class="fas fa-long-arrow-right"></i></a>
                                            <div class="service-tags">
                                                <a>Hardware</a> <a>Error</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 mb-30" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
                                <div class="services-style-three-item wow fadeInRight"
                                    data-wow-delay="400ms">
                                    <div class="item-title">
                                        <img decoding="async"
                                            src="{{ asset('assets/wp-content/themes/gixus/assets/img/icon/18.png') }}"
                                            alt="Image Not Found">
                                        <h4><a href="../firewall-advance/index.html">{{ __('messages.sf_products_header') }}</a>
                                        </h4>
                                        <p>{{ __('messages.sf_products') }}.</p>
                                        <div class="d-flex mt-30">
                                            <a href="../firewall-advance/index.html"><i
                                                    class="fas fa-long-arrow-right"></i></a>
                                            <div class="service-tags">
                                                <a>Network</a> <a>Firewall</a>
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
    <div class="elementor-element elementor-element-5c8628d e-con-full e-flex e-con e-parent"
        data-id="5c8628d" data-element_type="container">
        <div class="elementor-element elementor-element-e33c91f elementor-widget elementor-widget-services_expertise_widget"
            data-id="e33c91f" data-element_type="widget"
            data-widget_type="services_expertise_widget.default">
            <div class="elementor-widget-container">
                <div class="speciality-style-one-area default-padding-bottom">
                    <div class="container">
                        <div class="row align-center">
                            <div class="col-lg-4">
                                <div class="fun-fact-style-two text-light"
                                    style="background-image: url(../wp-content/themes/gixus/assets/img/shape/1.jpg);">
                                    <div class="fun-fact">
                                        <div class="counter-title">
                                            <div class="counter">
                                                <div class="timer" data-to="98" data-speed="2000">98</div>
                                                <div class="operator">%</div>
                                            </div>
                                        </div>
                                        <span class="medium">Successful Projects</span>
                                    </div>
                                    <div class="fun-fact">
                                        <div class="counter-title">
                                            <div class="counter">
                                                <div class="timer" data-to="38" data-speed="2000">38</div>
                                                <div class="operator">K</div>
                                            </div>
                                        </div>
                                        <span class="medium">Happy Clients</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7 offset-xl-1 col-lg-8">
                                <div class="speciality-items">
                                    <h4 class="sub-title">Our expertise</h4>
                                    <h2 class="title">Our commitment <br> is client satisfaction</h2>
                                    <div class="d-grid mt-40">
                                        <ul class="list-style-two">
                                            <li>Organizational structure model</li>
                                            <li>Satisfaction guarantee</li>
                                            <li>Ontime delivery</li>
                                        </ul>
                                        <div class="progress-items">
                                            <div class="progress-box">
                                                <h5>IT Management</h5>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar"
                                                        data-width="70">
                                                        <span>70%</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress-box">
                                                <h5>Data Security</h5>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar"
                                                        data-width="95">
                                                        <span>95%</span>
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

    <div class="elementor-element elementor-element-451ef2c e-con-full e-flex e-con e-parent"
        data-id="451ef2c" data-element_type="container">
        <div class="elementor-element elementor-element-705897e elementor-widget elementor-widget-about_team"
            data-id="705897e" data-element_type="widget" data-widget_type="about_team.default">
            <div class="elementor-widget-container">

            </div>
        </div>
    </div>
    <div class="elementor-element elementor-element-e51c08e e-con-full e-flex e-con e-parent"
        data-id="e51c08e" data-element_type="container">
        <div class="elementor-element elementor-element-ed6c8dd elementor-widget elementor-widget-pricing_widget"
            data-id="ed6c8dd" data-element_type="widget" data-widget_type="pricing_widget.default">
            <div class="elementor-widget-container">
                <div class="pricing-style-one-area default-padding bg-cover bg-gray"
                    style="background-image: url(../wp-content/themes/gixus/assets/img/shape/3.jpg);">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                                <div class="site-heading text-center">
                                    <h4 class="sub-title">Pricing Plan</h4>
                                    <h2 class="title split-text">Our Pricing Packages</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="pricing-style-one wow fadeInUp">
                                    <div class="pricing-header">
                                        <h4>Basic Plan</h4>
                                        <p>The most basic Plan</p>
                                        <h2>$32</h2>
                                        <span>Per Month Package</span>
                                    </div>
                                    <ul>
                                        <li><i class="fas fa-check"></i> 100 Days Sitting</li>
                                        <li><i class="fas fa-check"></i> Market Report Analysis</li>
                                        <li><i class="fas fa-times"></i> Exclusive Manuals</li>
                                        <li><i class="fas fa-times"></i> Creative Leadership team</li>
                                    </ul>
                                    <a class="btn btn-gradient btn-md animation"
                                        href="../contact/index.html">Purchase Now</a>
                                </div>
                            </div>

                            <div class="col-lg-8">
                                <div class="pricing-two-box wow fadeInUp" data-wow-delay="300ms">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="pricing-style-one">
                                                <div class="badge">Best Deal</div>
                                                <div class="pricing-header">
                                                    <h4>Standard Plan</h4>
                                                    <p>Exclusive For small Business</p>
                                                    <h2>$58</h2>
                                                    <span>Per Month Package</span>
                                                </div>
                                                <ul>
                                                    <li><i class="fas fa-check"></i> 100 Days Sitting</li>
                                                    <li><i class="fas fa-check"></i> Market Report Analysis
                                                    </li>
                                                    <li><i class="fas fa-check"></i> Exclusive Manuals</li>
                                                    <li><i class="fas fa-times"></i> Creative Leadership
                                                        team</li>
                                                </ul>
                                                <a class="btn btn-dark btn-md animation"
                                                    href="../contact/index.html">Purchase Now</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="pricing-style-one">
                                                <div class="pricing-header">
                                                    <h4>Advanced Plan</h4>
                                                    <p>The most Profitable Plan</p>
                                                    <h2>$99</h2>
                                                    <span>Per Month Package</span>
                                                </div>
                                                <ul>
                                                    <li><i class="fas fa-check"></i> 100 Days Sitting</li>
                                                    <li><i class="fas fa-check"></i> Market Report Analysis
                                                    </li>
                                                    <li><i class="fas fa-check"></i> Exclusive Manuals</li>
                                                    <li><i class="fas fa-check"></i> Creative Leadership
                                                        team</li>
                                                </ul>
                                                <a class="btn btn-dark btn-md animation"
                                                    href="../contact/index.html">Purchase Now</a>
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
    <div class="elementor-element elementor-element-8ae99c9 e-con-full e-flex e-con e-parent"
        data-id="8ae99c9" data-element_type="container">
        <div class="elementor-element elementor-element-c2ba70c elementor-widget elementor-widget-home1_testimonial"
            data-id="c2ba70c" data-element_type="widget" data-widget_type="home1_testimonial.default">
            <div class="elementor-widget-container">
                <div class="testimonial-style-one-area default-padding">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                                <div class="site-heading text-center">
                                    <h4 class="sub-title">Testimonials</h4>
                                    <h2 class="title">What people say about us</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="testimonial-style-one-items bg-gray-secondary">
                            <div class="row align-center">
                                <div class="col-xl-5 pr-80 pr-md-15 pr-xs-15">
                                    <div class="testimonial-style-one-thumb">
                                        <img decoding="async"
                                            src="../wp-content/themes/gixus/assets/img/illustration/5.png"
                                            alt="Image Not Found">
                                        <div class="shape">
                                            <img decoding="async"
                                                src="../wp-content/themes/gixus/assets/img/shape/16.png"
                                                alt="Image Not Found">
                                            <img decoding="async"
                                                src="../wp-content/themes/gixus/assets/img/shape/17.png"
                                                alt="Image Not Found">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-7">
                                    <div class="testimonial-style-one-carousel swiper">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="testimonial-style-one">
                                                    <div class="item">
                                                        <div class="content">
                                                            <div class="top">
                                                                <h2>The best service ever</h2>
                                                            </div>
                                                            <p>“Targetingconsultation discover apartments.
                                                                ndulgence off under folly death wrote cause
                                                                her way spite. Plan upon yet way get cold
                                                                spot its week. Almost do am or limits
                                                                hearts. Resolve parties but why she shewing.
                                                                She sang know now always remembering”</p>
                                                        </div>
                                                        <div class="provider">
                                                            <div class="info">
                                                                <h4>Matthew J. Wyman</h4>
                                                                <span>Senior Consultant</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="testimonial-style-one">
                                                    <div class="item">
                                                        <div class="content">
                                                            <div class="top">
                                                                <h2>Awesome opportunities</h2>
                                                            </div>
                                                            <p>“Consultation discover apartments. ndulgence
                                                                off under folly death wrote cause her way
                                                                spite. Plan upon yet way get cold spot its
                                                                week. Almost do am or limits hearts. Resolve
                                                                parties but why she shewing. She sang know
                                                                now always remembering to the point”</p>
                                                        </div>
                                                        <div class="provider">
                                                            <div class="info">
                                                                <h4>Anthom Bu Spar</h4>
                                                                <span>Marketing Manager</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Navigation -->
                                        <div class="swiper-nav-left">
                                            <div class="swiper-button-prev"></div>
                                            <div class="swiper-button-next"></div>
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
@endsection