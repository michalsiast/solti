@extends('default.layout')
@section('content')
    <div class="breadcrumb__area breadcrumb__bg" data-background="{{ renderImage($page->galleryCover(), 1800, 400, 'cover') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__content">
                        <h2 class="title">{{$page->name}}</h2>
                        <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="/">Strona główna</a>
                                </span>
                            <span class="breadcrumb-separator">/</span>
                            <span property="itemListElement" typeof="ListItem">{{$page->name}}</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="contact__area section-py-120">
        <div class="container">
            <div class="row gutter-24">
                <div class="col-lg-4">
                    <div class="contact__info-wrap">
                        @if(!empty(getConstField('link_to_map')))
                        <div class="contact__info-item">
                            <div class="contact__info-content">
                                <div class="icon">
                                    <i class="renova-map"></i>
                                </div>
                                <div class="content">
                                    <span>Odwiedź nas!</span>
                                    <h2 class="title"><a href="{{getConstField('link_to_map')}}">{{getConstField('company_address')}}<br>{{getConstField('company_post_code')}} {{getConstField('company_city')}}</a></h2>
                                </div>
                            </div>
                        </div>
                        @endif
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
                    <!-- contact-map-end -->
                    <div class="contact__form-wrap">
                        <div class="section__title section__title-three mb-40">
                            <span class="sub-title">Napisz do nas</span>
                            <h2 class="title">Skontaktuj się z nami!</h2>
                        </div>
                        @include('default.form.contact_form')
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
