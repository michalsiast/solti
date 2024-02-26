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
    @if(!empty($fields->about_us_heading))
    <section class="about__area-two section-py-120">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="about__img-wrap-two">
                        <img src="{{asset('images/about_us_3.jpg')}}" alt="img" class="wow img-custom-anim-right animated" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <img src="{{asset('images/about_us_1.jpg')}}" alt="img" class="wow img-custom-anim-left animated" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <img src="{{asset('images/about_us_2.jpg')}}" alt="img" class="wow img-custom-anim-top animated" data-wow-duration="1.5s" data-wow-delay="0.6s">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__content-two">
                        <div class="section__title section__title-three mb-25">
                            <span class="sub-title">O nas</span>
                            <h2 class="title">Kilka słów o nas</h2>
                        </div>
                        {!! $fields->about_us_heading !!}
                        <a href="{{route('offer.index')}}" class="btn">Zobacz ofertę <img src="{{asset('image/icons/right_arrow.svg')}}"
                                                                                                            alt="" class="injectable"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
@endsection
