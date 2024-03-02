@extends('default.layout')
@section('content')
{{--{!! getPhoneLink('phone', 'phone', '<b>icon</b> ') !!}--}}
{{--{!! getEmailLink('email', 'email',  '<b>icon</b> ') !!}--}}
{{--    <span style="display: block">{!! getAddressString() !!}</span>--}}
{{--    <span style="display: block">{!! getFooterCreator() !!}</span>--}}

    @include('default.rotator.base', ['id_rotator' => $fields->rotator, 'type' => 'main'])
<section class="features__area section-pt-120 section-pb-90">
    <div class="container">
        <div class="row justify-content-center gutter-24">
            @if(!empty($fields->services_and_solutions_heading_1))
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="features__item">
                        @if(!empty($fields->services_and_solutions_icon_1))
                        <div class="features__icon">
                            <i class="{{$fields->services_and_solutions_icon_1}}"></i>
                        </div>
                        @endif
                        <div class="features__content">
                            @if(!empty($fields->services_and_solutions_heading_1))
                                <h3 class="title">{{$fields->services_and_solutions_heading_1}}</h3>
                            @endif
                            @if(!empty($fields->services_and_solutions_description_1))
                                {!! $fields->services_and_solutions_description_1 !!}
                            @endif
                                @if(!empty($fields->services_and_solutions_link_1))
                            <a href="{{$fields->services_and_solutions_link_1}}" class="btn">Zobacz więcej <img src="{{asset('image/icons/right_arrow.svg')}}"
                                                                             alt="" class="injectable"></a>
                                @endif
                        </div>
                    </div>
                </div>
            @endif
                @if(!empty($fields->services_and_solutions_heading_2))
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="features__item">
                            @if(!empty($fields->services_and_solutions_icon_2))
                                <div class="features__icon">
                                    <i class="{{$fields->services_and_solutions_icon_2}}"></i>
                                </div>
                            @endif
                            <div class="features__content">
                                @if(!empty($fields->services_and_solutions_heading_2))
                                    <h3 class="title">{{$fields->services_and_solutions_heading_2}}</h3>
                                @endif
                                @if(!empty($fields->services_and_solutions_description_2))
                                    {!! $fields->services_and_solutions_description_2 !!}
                                @endif
                                @if(!empty($fields->services_and_solutions_link_2))
                                    <a href="{{$fields->services_and_solutions_link_2}}" class="btn">Zobacz więcej <img src="{{asset('image/icons/right_arrow.svg')}}"
                                                                                                                        alt="" class="injectable"></a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endif
                @if(!empty($fields->services_and_solutions_heading_3))
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="features__item">
                            @if(!empty($fields->services_and_solutions_icon_3))
                                <div class="features__icon">
                                    <i class="{{$fields->services_and_solutions_icon_3}}"></i>
                                </div>
                            @endif
                            <div class="features__content">
                                @if(!empty($fields->services_and_solutions_heading_3))
                                    <h3 class="title">{{$fields->services_and_solutions_heading_3}}</h3>
                                @endif
                                @if(!empty($fields->services_and_solutions_description_3))
                                    {!! $fields->services_and_solutions_description_3 !!}
                                @endif
                                @if(!empty($fields->services_and_solutions_link_3))
                                    <a href="{{$fields->services_and_solutions_link_3}}" class="btn">Zobacz więcej <img src="{{asset('image/icons/right_arrow.svg')}}"
                                                                                                                        alt="" class="injectable"></a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endif
        </div>
    </div>
</section>

@if(!empty($fields->about_us_heading))
<section class="about__area section-pb-120">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-md-9">
                <div class="about__img-wrap wow img-custom-anim-left animated" data-wow-duration="1.5s"
                     data-wow-delay="0.1s">
                    <img src="{{asset('images/about_us.jpg')}}" alt="img" class="about__img-wrap-img">
                    <div class="about__img-content">
                        @if(!empty($fields->about_us_heading))
                        <h4 class="title">{{$fields->about_us_heading}}</h4>
                        @endif
                        <a href="{{route('about-us.show')}}" class="btn">O nas <img
                                src="{{asset('image/icons/right_arrow.svg')}}" alt="" class="injectable"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about__content">
                    <div class="section__title mb-20">
                        @if(!empty($fields->about_us_heading))
                            <h2 class="title">{{$fields->about_us_heading}}</h2>
                        @endif
                        <h4 class="number">01</h4>
                    </div>
                    @if(!empty($fields->about_us_description))
                        {!! $fields->about_us_description !!}
                    @endif
                    <div class="about__list-box-wrap">
                        <div class="about__list-box" data-aos="fade-up" data-aos-delay="400">
                            @if(!empty($fields->about_us_icon_1))
                            <div class="icon">
                                <i class="{{$fields->about_us_icon_1}}"></i>
                            </div>
                            @endif
                            <div class="content">
                                @if(!empty($fields->about_us_heading_1))
                                    <h4 class="title">{{$fields->about_us_heading_1}}</h4>
                                @endif
                                @if(!empty($fields->about_us_description_1))
                                    {!! $fields->about_us_description_1 !!}
                                @endif
                            </div>
                        </div>
                        <div class="about__list-box" data-aos="fade-up" data-aos-delay="600">
                            @if(!empty($fields->about_us_icon_2))
                                <div class="icon">
                                    <i class="{{$fields->about_us_icon_2}}"></i>
                                </div>
                            @endif
                                <div class="content">
                                    @if(!empty($fields->about_us_heading_2))
                                        <h4 class="title">{{$fields->about_us_heading_2}}</h4>
                                    @endif
                                    @if(!empty($fields->about_us_description_2))
                                        {!! $fields->about_us_description_2 !!}
                                    @endif
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

<section class="counter__area">
    <div class="container">
        <div class="counter__item-wrap">
            <div class="row">
                @if(!empty($fields->counter_number_1))
                <div class="col-lg-4 col-sm-6">
                    <div class="counter__item">
                        @if(!empty($fields->counter_icon_1))
                            <div class="counter__icon">
                                <i class="{{$fields->counter_icon_1}}"></i>
                            </div>
                        @endif
                        <div class="counter__content">
                            @if(!empty($fields->counter_number_1))
                            <h3 class="count"><span class="odometer" data-count="{{$fields->counter_number_1}}"></span>+</h3>
                            @endif
                            @if(!empty($fields->counter_heading_1))
                                <p>{{$fields->counter_heading_1}}</p>
                            @endif
                        </div>
                    </div>
                </div>
                @endif
                    @if(!empty($fields->counter_number_2))
                        <div class="col-lg-4 col-sm-6">
                            <div class="counter__item">
                                @if(!empty($fields->counter_icon_2))
                                    <div class="counter__icon">
                                        <i class="{{$fields->counter_icon_2}}"></i>
                                    </div>
                                @endif
                                <div class="counter__content">
                                    @if(!empty($fields->counter_number_2))
                                        <h3 class="count"><span class="odometer" data-count="{{$fields->counter_number_2}}"></span>+</h3>
                                    @endif
                                    @if(!empty($fields->counter_heading_2))
                                        <p>{{$fields->counter_heading_2}}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endif
                    @if(!empty($fields->counter_number_3))
                        <div class="col-lg-4 col-sm-6">
                            <div class="counter__item">
                                @if(!empty($fields->counter_icon_3))
                                    <div class="counter__icon">
                                        <i class="{{$fields->counter_icon_3}}"></i>
                                    </div>
                                @endif
                                <div class="counter__content">
                                    @if(!empty($fields->counter_number_3))
                                        <h3 class="count"><span class="odometer" data-count="{{$fields->counter_number_3}}"></span>+</h3>
                                    @endif
                                    @if(!empty($fields->counter_heading_3))
                                        <p>{{$fields->counter_heading_3}}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endif
            </div>
        </div>
    </div>
</section>

@include('default.offer.home')

<section class="work__area-two section-pt-120 section-pb-90">
    <div class="container">
        <div class="work__item-wrap">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="work__item">
                        @if(!empty($fields->pillars_our_excellence_icon_1))
                        <div class="work__icon">
                            <i class="{{$fields->pillars_our_excellence_icon_1}}"></i>
                            <span class="number">01</span>
                        </div>
                        @endif
                        <div class="work__content-two">
                            @if(!empty($fields->pillars_our_excellence_heading_1))
                            <h4 class="title">{{$fields->pillars_our_excellence_heading_1}}</h4>
                            @endif
                            @if(!empty($fields->pillars_our_excellence_description_1))
                                <h4 class="title">{!! $fields->pillars_our_excellence_description_1 !!}</h4>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="work__item">
                        @if(!empty($fields->pillars_our_excellence_icon_2))
                            <div class="work__icon">
                                <i class="{{$fields->pillars_our_excellence_icon_2}}"></i>
                                <span class="number">02</span>
                            </div>
                        @endif
                        <div class="work__content-two">
                            @if(!empty($fields->pillars_our_excellence_heading_2))
                                <h4 class="title">{{$fields->pillars_our_excellence_heading_2}}</h4>
                            @endif
                            @if(!empty($fields->pillars_our_excellence_description_2))
                                <h4 class="title">{!! $fields->pillars_our_excellence_description_2 !!}</h4>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="work__item">
                        @if(!empty($fields->pillars_our_excellence_icon_3))
                            <div class="work__icon">
                                <i class="{{$fields->pillars_our_excellence_icon_3}}"></i>
                                <span class="number">03</span>
                            </div>
                        @endif
                        <div class="work__content-two">
                            @if(!empty($fields->pillars_our_excellence_heading_3))
                                <h4 class="title">{{$fields->pillars_our_excellence_heading_3}}</h4>
                            @endif
                            @if(!empty($fields->pillars_our_excellence_description_3))
                                <h4 class="title">{!! $fields->pillars_our_excellence_description_3 !!}</h4>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="work__item">
                        @if(!empty($fields->pillars_our_excellence_icon_4))
                            <div class="work__icon">
                                <i class="{{$fields->pillars_our_excellence_icon_4}}"></i>
                                <span class="number">04</span>
                            </div>
                        @endif
                        <div class="work__content-two">
                            @if(!empty($fields->pillars_our_excellence_heading_4))
                                <h4 class="title">{{$fields->pillars_our_excellence_heading_4}}</h4>
                            @endif
                            @if(!empty($fields->pillars_our_excellence_description_4))
                                <h4 class="title">{!! $fields->pillars_our_excellence_description_4 !!}</h4>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('default.article.home')

@if(!empty($fields->cooperate_section_heading))
<section class="cta__area fix">
    <div class="cta__bg" data-background="{{asset('images/cooperate.jpg')}}"></div>
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="cta__content">
                    <h2 class="title">{{$fields->cooperate_section_heading}}</h2>
                    <div class="cta__btn">
                        <a href="{{route('offer.index')}}" class="btn btn-two">Zobacz ofertę <img
                                src="{{asset('image/icons/right_arrow.svg')}}" alt="" class="injectable"></a>
                        <a href="{{route('contact.show')}}" class="btn transparent-btn">Skontaktuj się z nami <img
                                src="{{asset('image/icons/right_arrow.svg')}}" alt="" class="injectable"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cta__shape">
        <img src="{{asset('image/shape/cta_shape.png')}}" alt="shape" data-aos="fade-down-left" data-aos-delay="400">
    </div>
</section>
@endif

<section class="contact__area section-py-120">
    <div class="container">
        <div class="row gutter-24">
            <div class="col-lg-4">
                <div class="contact__info-wrap">
                    @if(!empty(getConstField('email')))
                    <div class="contact__info-item">
                        <div class="contact__info-content">
                            <div class="icon">
                                <i class="renova-envelope-open"></i>
                            </div>
                            <div class="content">
                                <span>Napisz do nas</span>
                                <h2 class="title"><a href="mailto:{{getConstField('email')}}">{{getConstField('email')}}</a></h2>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if(!empty(getConstField('phone')))
                    <div class="contact__info-item">
                        <div class="contact__info-content">
                            <div class="icon">
                                <i class="renova-headphone"></i>
                            </div>
                            <div class="content">
                                <span>Zadzwoń</span>
                                <h2 class="title">
                                    @if(!empty(getConstField('phone')))
                                    <a href="tel:{{str_replace(' ', '', getConstField('phone'))}}">{{getConstField('phone')}}</a>
                                    @endif
                                    @if(!empty(getConstField('phone2')))
                                        <br><a href="tel:{{str_replace(' ', '', getConstField('phone2'))}}">{{getConstField('phone2')}}</a>
                                    @endif
                                    @if(!empty(getConstField('phone3')))
                                        <br><a href="tel:{{str_replace(' ', '', getConstField('phone3'))}}">{{getConstField('phone3')}}</a>
                                    @endif</h2>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
            <div class="col-lg-8">
                <!-- contact-map -->
                <div class="contact-map">
                    <iframe src="{{getConstField('google_map_iframe')}}" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

@include('default.realization.home')

@endsection
