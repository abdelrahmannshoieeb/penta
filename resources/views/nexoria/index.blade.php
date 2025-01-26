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
                <div class="services-style-one-area default-padding" style="background: url(wp-content/themes/gixus/assets/img/shape/12.png);">
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
                                            <img decoding="async" src="{{ asset('assets/wp-content/themes/gixus/assets/img/icon/4.png') }}" alt="Image Not Found">
                                            <img decoding="async" src="{{ asset('assets/wp-content/themes/gixus/assets/img/icon/5.png') }}" alt="Image Not Found">
                                        </div>
                                        <div class="content">
                                            <h4><a href="advanced-business-intelligence/index.html">{{ __('messages.cashier_system') }}</a></h4>
                                            <p>{{ __('messages.cashier_system_paragraph') }}</p>
                                        </div>
                                        <div class="button" style="display: flex; gap: 10px;">
                                            <!-- WhatsApp Button -->
                                            <a class="btn" href="https://wa.me/+201012620529" style="background-color: #25D366; color: white;">
                                                <i class="fab fa-whatsapp"  style="transform: rotate(0deg);"></i> WhatsApp
                                            </a>
                                            <!-- Call Us Button -->
                                            <a class="btn" href="tel:+201012620529" style="background-color: #007BFF; color: white;">
                                                <i class="fas fa-phone" style="transform: rotate(0deg);"></i> Call Us
                                            </a>
                                        </div>
                                    </div>

                                    <div class="services-style-one-item  wow fadeInRight" data-wow-delay="200ms">
                                        <div class="icon">
                                            <img decoding="async" src="{{asset('assets/wp-content/themes/gixus/assets/img/icon/5.png')}}" alt="Image Not Found"><img decoding="async" src="{{asset('assets/wp-content/themes/gixus/assets/img/icon/6.png')}}" alt="Image Not Found">
                                        </div>
                                        <div class="content">
                                            <h4><a href="business-research-and-development/index.html">Business Research And Development</a></h4>
                                            <p>Seeing rather her you not esteem men settle genius excuse. Deal say over you age devonshire Comparison new ham melancholy son themselves instrument out reasonably.</p>
                                        </div>
                                        <div class="button">
                                            <a class="btn" href="business-research-and-development/index.html"><i class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="services-style-one-item  wow fadeInRight" data-wow-delay="400ms">
                                        <div class="icon">
                                            <img decoding="async" src="{{asset('assets/wp-content/themes/gixus/assets/img/icon/7.png')}}" alt="Image Not Found">
                                        </div>
                                        <div class="content">
                                            <h4><a href="digital-project-management-system/index.html">Digital Project Management System</a></h4>
                                            <p>Seeing rather her you not esteem men settle genius excuse. Deal say over you age devonshire Comparison new ham melancholy son themselves instrument out reasonably.</p>
                                        </div>
                                        <div class="button">
                                            <a class="btn" href="digital-project-management-system/index.html"><i class="fas fa-arrow-right"></i></a>
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

    <div class="elementor-element elementor-element-9dc485f e-con-full e-flex e-con e-parent" data-id="9dc485f" data-element_type="container" id="process">
        <div class="elementor-element elementor-element-acdc4c9 elementor-widget elementor-widget-home1_choose" data-id="acdc4c9" data-element_type="widget" data-widget_type="home1_choose.default">
            <div class="elementor-widget-container">
                <div class="choose-us-style-one-area overflow-hidden default-padding-top bg-gray">
                    <div class="container">
                        <div class="heading-left">
                            <div class="row">
                                <div class="col-lg-5 offset-lg-1">
                                    <div class="experience-style-one">
                                        <h2><strong>26</strong> Years of Experience</h2>
                                    </div>
                                </div>
                                <div class="col-lg-5 offset-lg-1">
                                    <div class="circle-progress">
                                        <div class="progressbar">
                                            <div class="circle" data-percent="65">
                                                <strong></strong>
                                            </div>
                                            <h4>Business Development</h4>
                                        </div>
                                        <div class="progressbar">
                                            <div class="circle" data-percent="84">
                                                <strong></strong>
                                            </div>
                                            <h4>Investment Analysis</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container container-stage">
                        <div class="choose-us-one-thumb">
                            <div class="content">
                                <div class="left-info">
                                    <h2 class="title split-text">Building great future Together, Be with us</h2>
                                </div>
                                <div class="process-style-one">
                                    <div class="process-style-one-item wow fadeInRight" data-wow-delay="0ms">
                                        <span>01</span>
                                        <h4>Information Collection</h4>
                                        <p>Excuse Deal say over contain performance from comparison new melancholy themselves.</p>
                                    </div>
                                    <div class="process-style-one-item wow fadeInRight" data-wow-delay="200ms">
                                        <span>02</span>
                                        <h4>Projection Report Analysis</h4>
                                        <p>Excuse Deal say over contain performance from comparison new melancholy themselves.</p>
                                    </div>
                                    <div class="process-style-one-item wow fadeInRight" data-wow-delay="400ms">
                                        <span>03</span>
                                        <h4>Consultation Solution</h4>
                                        <p>Excuse Deal say over contain performance from comparison new melancholy themselves.</p>
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
    <div class="elementor-element elementor-element-7b61722 e-con-full e-flex e-con e-parent" data-id="7b61722" data-element_type="container" id="team">
        <div class="elementor-element elementor-element-5dc5cf4 elementor-widget elementor-widget-home1_team" data-id="5dc5cf4" data-element_type="widget" data-widget_type="home1_team.default">
            <div class="elementor-widget-container">

                <div class="team-style-one-area default-padding">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                                <div class="site-heading text-center">
                                    <h4 class="sub-title">Team Members</h4>
                                    <h2 class="title split-text">Meet the talented team from our company</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="team-style-one-items">
                            <div class="row">

                                <div class="col-xl-3 col-lg-4 mb-50">
                                    <div class="team-style-one-item wow fadeInUp" data-wow-delay="0ms">
                                        <div class="thumb">
                                            <img decoding="async" src="{{asset('assets/wp-content/themes/gixus/assets/img/team/2.jpg')}}" alt="Image Not Found">
                                            <div class="social-overlay">
                                                <ul>
                                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                </ul>
                                                <div class="icon"><i class="fas fa-plus"></i></div>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <span>CEO &amp; Founder</span>
                                            <h4><a href="aleesha-brown/index.html">Aleesha Brown</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single item -->
                                <div class="col-xl-3 col-lg-4 mb-50">
                                    <div class="team-style-one-item wow fadeInUp" data-wow-delay="200ms">
                                        <div class="thumb">
                                            <img decoding="async" src="{{asset('assets/wp-content/themes/gixus/assets/img/team/3.jpg')}}" alt="Image Not Found">
                                            <div class="social-overlay">
                                                <ul>
                                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                </ul>
                                                <div class="icon"><i class="fas fa-plus"></i></div>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <span>Product Manager</span>
                                            <h4><a href="kevin-martin/index.html">Kevin Martin</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single item -->
                                <div class="col-xl-3 col-lg-4 mb-50">
                                    <div class="team-style-one-item wow fadeInUp" data-wow-delay="400ms">
                                        <div class="thumb">
                                            <img decoding="async" src="{{asset('assets/wp-content/themes/gixus/assets/img/team/4.jpg')}}" alt="Image Not Found">
                                            <div class="social-overlay">
                                                <ul>
                                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                </ul>
                                                <div class="icon"><i class="fas fa-plus"></i></div>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <span>Financial Consultant</span>
                                            <h4><a href="sarah-albert/index.html">Sarah Albert</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-9 offset-xl-3 col-lg-12">
                                    <div class="team-grid">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4 mb-50">
                                                <div class="team-style-one-item wow fadeInUp" data-wow-delay="0ms">
                                                    <div class="thumb">
                                                        <img decoding="async" src="{{asset('assets/wp-content/themes/gixus/assets/img/team/7.jpg')}}" alt="Image Not Found">
                                                        <div class="social-overlay">
                                                            <ul>
                                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                            </ul>
                                                            <div class="icon"><i class="fas fa-plus"></i></div>
                                                        </div>
                                                    </div>
                                                    <div class="info">
                                                        <span>Developer</span>
                                                        <h4><a href="amanulla-joey/index.html">Amanulla Joey</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 mb-50">
                                                <div class="team-style-one-item wow fadeInUp" data-wow-delay="200ms">
                                                    <div class="thumb">
                                                        <img decoding="async" src="{{asset('assets/wp-content/themes/gixus/assets/img/team/6.jpg')}}" alt="Image Not Found">
                                                        <div class="social-overlay">
                                                            <ul>
                                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                            </ul>
                                                            <div class="icon"><i class="fas fa-plus"></i></div>
                                                        </div>
                                                    </div>
                                                    <div class="info">
                                                        <span>Co Founder</span>
                                                        <h4><a href="kamal-abraham/index.html">Kamal Abraham</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 mb-50">
                                                <div class="team-style-one-item wow fadeInUp" data-wow-delay="400ms">
                                                    <div class="thumb">
                                                        <img decoding="async" src="{{asset('assets/wp-content/themes/gixus/assets/img/team/9.jpg')}}" alt="Image Not Found">
                                                        <div class="social-overlay">
                                                            <ul>
                                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                            </ul>
                                                            <div class="icon"><i class="fas fa-plus"></i></div>
                                                        </div>
                                                    </div>
                                                    <div class="info">
                                                        <span>Marketing Leader</span>
                                                        <h4><a href="daniyel-joe/index.html">Daniyel Joe</a></h4>
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
                <!-- End Team -->
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
    <div class="elementor-element elementor-element-6c0b4f1 e-con-full e-flex e-con e-parent" data-id="6c0b4f1" data-element_type="container">
        <div class="elementor-element elementor-element-630ee7f elementor-widget elementor-widget-home1_testimonial" data-id="630ee7f" data-element_type="widget" data-widget_type="home1_testimonial.default">
            <div class="elementor-widget-container">
                <div class="testimonial-style-one-area">
                    <div class="container">
                        <div class="testimonial-style-one-items bg-gray-secondary">
                            <div class="row align-center">
                                <div class="col-xl-5 pr-80 pr-md-15 pr-xs-15">
                                    <div class="testimonial-style-one-thumb">
                                        <img decoding="async" src="{{asset('assets/wp-content/themes/gixus/assets/img/illustration/5.png')}}" alt="Image Not Found">
                                        <div class="shape">
                                            <img decoding="async" src="{{asset('assets/wp-content/themes/gixus/assets/img/shape/16.png')}}" alt="Image Not Found">
                                            <img decoding="async" src="{{asset('assets/wp-content/themes/gixus/assets/img/shape/17.png')}}" alt="Image Not Found">
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
                                                            <p>“Targetingconsultation discover apartments. ndulgence off under folly death wrote cause her way spite. Plan upon yet way get cold spot its week. Almost do am or limits hearts. Resolve parties but why she shewing. She sang know now always remembering”</p>
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
                                                            <p>“Consultation discover apartments. ndulgence off under folly death wrote cause her way spite. Plan upon yet way get cold spot its week. Almost do am or limits hearts. Resolve parties but why she shewing. She sang know now always remembering to the point”</p>
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
    <div class="elementor-element elementor-element-d019915 e-con-full e-flex e-con e-parent" data-id="d019915" data-element_type="container" id="blog">
        <div class="elementor-element elementor-element-8cd84e7 elementor-widget elementor-widget-home1_blog" data-id="8cd84e7" data-element_type="widget" data-widget_type="home1_blog.default">
            <div class="elementor-widget-container">
                <div class="blog-area home-blog default-padding bottom-less">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                                <div class="site-heading text-center">
                                    <h4 class="sub-title">Blog Insight</h4>
                                    <h2 class="title split-text">Valuable insights to change your startup idea</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-4 col-md-6 col-lg-6 mb-30">
                                <div class="home-blog-style-one-item wow fadeInUp" data-wow-delay="0ms">
                                    <div class="home-blog-thumb">
                                        <img decoding="async" src="{{asset('assets/wp-content/uploads/2021/08/9.jpg')}}" alt="Announcing if attachment resolution sentiments.">
                                        <ul class="home-blog-meta">
                                            <li>
                                                <a href="category/finance/index.html">
                                                    Finance </a>
                                            </li>
                                            <li>August 26, 2021</li>
                                        </ul>
                                    </div>
                                    <div class="content">
                                        <div class="info">
                                            <h4 class="blog-title">
                                                <a href="announcing-if-attachment-resolution-sentiments/index.html">Announcing if attachment resolution sentiments.</a>
                                            </h4>
                                            <a href="announcing-if-attachment-resolution-sentiments/index.html" class="btn-read-more">Read More <i class="fas fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-lg-6 mb-30">
                                <div class="home-blog-style-one-item wow fadeInUp" data-wow-delay="200ms">
                                    <div class="home-blog-thumb">
                                        <img decoding="async" src="{{asset('assets/wp-content/uploads/2021/01/3.jpg')}}" alt="Minuter him own clothes but observe country.">
                                        <ul class="home-blog-meta">
                                            <li>
                                                <a href="category/firewall/index.html">
                                                    Firewall </a>
                                            </li>
                                            <li>January 20, 2021</li>
                                        </ul>
                                    </div>
                                    <div class="content">
                                        <div class="info">
                                            <h4 class="blog-title">
                                                <a href="minuter-him-own-clothes-but-observe-country/index.html">Minuter him own clothes but observe country.</a>
                                            </h4>
                                            <a href="minuter-him-own-clothes-but-observe-country/index.html" class="btn-read-more">Read More <i class="fas fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-lg-6 mb-30">
                                <div class="home-blog-style-one-item wow fadeInUp" data-wow-delay="400ms">
                                    <div class="home-blog-thumb">
                                        <img decoding="async" src="{{asset('assets/wp-content/uploads/2021/01/2.jpg')}}" alt="Considered imprudence of technical friendship.">
                                        <ul class="home-blog-meta">
                                            <li>
                                                <a href="category/analysis/index.html">
                                                    Analysis </a>
                                            </li>
                                            <li>January 20, 2021</li>
                                        </ul>
                                    </div>
                                    <div class="content">
                                        <div class="info">
                                            <h4 class="blog-title">
                                                <a href="considered-imprudence-of-technical-friendship/index.html">Considered imprudence of technical friendship.</a>
                                            </h4>
                                            <a href="considered-imprudence-of-technical-friendship/index.html" class="btn-read-more">Read More <i class="fas fa-long-arrow-right"></i></a>
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