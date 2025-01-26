@extends('layout.master')

@section('admin-content')
<div dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}"
data-elementor-type="wp-page" data-elementor-id="543" class="elementor elementor-543">
    <div class="elementor-element elementor-element-be17373 e-con-full e-flex e-con e-parent"
        data-id="be17373" data-element_type="container">
        <div class="elementor-element elementor-element-ade3275 elementor-widget elementor-widget-pages_pages_contact_section"
            data-id="ade3275" data-element_type="widget"
            data-widget_type="pages_pages_contact_section.default">
            <div class="elementor-widget-container">
                <div class="contact-style-one-area overflow-hidden default-padding">
                    <div class="contact-shape">
                        <img decoding="async"
                            src="../wp-content/themes/gixus/assets/img/illustration/14.png"
                            alt="Image Not Found">
                    </div>
                    <div class="container">
                        <div class="row align-center">
                            <div class="contact-stye-one col-lg-5 mb-md-50 mb-xs-40">
                                <div class="contact-style-one-info">
                                    <h4 class="sub-title">{{__('messages.do_you_have_any_questions')}}</h4>
                                    <h2>{{__('messages.contact_info')}}</h2>
                                    <ul>
                                        <li class="wow fadeInUp" data-wow-delay="0ms">
                                            <div class="icon">
                                                <i class="fas fa-phone-alt"></i>
                                            </div>
                                            <div class="content">
                                                <h5 class="title">{{__('messages.phone_number')}}</h5>
                                                <a href="#">+01012620529</a>
                                            </div>
                                        </li>
                                        <li class="wow fadeInUp" data-wow-delay="250ms">
                                            <div class="icon">
                                                <i class="fas fa-map-marker-alt"></i>
                                            </div>
                                            <div class="content">
                                                <h5 class="title">{{__('messages.office_address')}}</h5>
                                                <a href="#"> 55 Main Street, The Grand Avenue 2nd Block,
                                                    <br> New York City</a>
                                            </div>
                                        </li>
                                        <li class="wow fadeInUp" data-wow-delay="500ms">
                                            <div class="icon">
                                                <i class="fas fa-envelope-open-text"></i>
                                            </div>
                                            <div class="content">
                                                <h5 class="title">{{__('messages.email')}}</h5>
                                                <a href="#">wordpressriver@gmail.com</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="contact-stye-one col-lg-7 pl-60 pl-md-15 pl-xs-15">
                                <div class="contact-form-style-one">
                                    <h2 class="heading">{{__('messages.send_a_message')}}</h2>

                                    <div class="wpcf7 no-js" id="wpcf7-f542-p543-o1"  dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}"
                                        data-wpcf7-id="542">
                                        <div class="screen-reader-response">
                                            <p role="status" aria-live="polite" aria-atomic="true"></p>
                                            <ul></ul>
                                        </div>
                                        <form
                                            action="https://wpriverthemes.com/gixus/contact/#wpcf7-f542-p543-o1"
                                            method="post" class="wpcf7-form init" aria-label="Contact form"
                                            novalidate="novalidate" data-status="init">
                                            <div style="display: none;">
                                                <input type="hidden" name="_wpcf7" value="542" />
                                                <input type="hidden" name="_wpcf7_version" value="6.0.1" />
                                                <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                                <input type="hidden" name="_wpcf7_unit_tag"
                                                    value="wpcf7-f542-p543-o1" />
                                                <input type="hidden" name="_wpcf7_container_post"
                                                    value="543" />
                                                <input type="hidden" name="_wpcf7_posted_data_hash"
                                                    value="" />
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <span class="wpcf7-form-control-wrap"
                                                            data-name="name1"><input size="40"
                                                                maxlength="400"
                                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                                                                aria-required="true" aria-invalid="false"
                                                                placeholder="{{__('messages.your_name')}}" value="" type="text"
                                                                name="name1" /></span>
                                                        <span class="alert-error"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <span class="wpcf7-form-control-wrap"
                                                            data-name="email-480"><input size="40"
                                                                maxlength="400"
                                                                class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email form-control"
                                                                aria-required="true" aria-invalid="false"
                                                                placeholder="{{__('messages.your_email')}}" value="" type="email"
                                                                name="email-480" /></span>
                                                        <span class="alert-error"></span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <span class="wpcf7-form-control-wrap"
                                                            data-name="phone"><input size="40"
                                                                maxlength="400"
                                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                                                                aria-required="true" aria-invalid="false"
                                                                placeholder="{{__('messages.your_phone')}}" value="" type="text"
                                                                name="phone" /></span>
                                                        <span class="alert-error"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group comments">
                                                        <span class="wpcf7-form-control-wrap"
                                                            data-name="comments"><textarea cols="40"
                                                                rows="10" maxlength="2000"
                                                                class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form-control"
                                                                aria-required="true" aria-invalid="false"
                                                                placeholder="{{__('messages.your_message')}} *"
                                                                name="comments"></textarea></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <button type="submit" name="submit" id="submit">
                                                        <i class="fa fa-paper-plane"></i> {{ __('messages.send') }}
                                                    </button>
                                                </div>
                                            </div>
                                            <!-- Alert Message -->
                                            <div class="col-lg-12 alert-notification">
                                                <div id="message" class="alert-msg"></div>
                                            </div>
                                            <div class="wpcf7-response-output" aria-hidden="true"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="elementor-element elementor-element-38e3051 e-con-full e-flex e-con e-parent"
        data-id="38e3051" data-element_type="container">
        <div class="elementor-element elementor-element-60dffe4 elementor-widget elementor-widget-pages_contact_map"
            data-id="60dffe4" data-element_type="widget" data-widget_type="pages_contact_map.default">
            <div class="elementor-widget-container">
                <!-- Start Map -->
                <div class="maps-area bg-gray overflow-hidden">
                    <div class="google-maps">
                    <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3437.123456789012!2d31.108916!3d29.0679409!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145a27f24c37e02f%3A0xef5ea497df1b3ab1!2sGarage%20Lounge!5e0!3m2!1sen!2seg!4v1691234567890!5m2!1sen!2seg"
    width="600"
    height="450"
    style="border:0;"
    allowfullscreen=""
    loading="lazy"
    referrerpolicy="no-referrer-when-downgrade">
</iframe>
                    </div>
                </div>
                <!-- End Map -->
            </div>
        </div>
    </div>
</div>

@endsection