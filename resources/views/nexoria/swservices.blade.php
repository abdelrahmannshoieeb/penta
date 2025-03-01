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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection