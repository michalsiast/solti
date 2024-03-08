@extends('default.layout')
@section('content')
    <div class="breadcrumb__area breadcrumb__bg" data-background="{{ renderImage($item->galleryCover(), 1800, 400, 'cover') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__content">
                        <h2 class="title">{{$item->title}}</h2>
                        <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="/">Strona główna</a>
                                </span>
                            <span class="breadcrumb-separator">/</span>
                            <span property="itemListElement" typeof="ListItem">{{$item->title}}</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="services__details-area section-py-120">
        <div class="container" >
            <div class="row  justify-content-center">
                <div class="col-3">
                    @include('default.offer.category.home')
                </div>
                @if($item->offer_category_id == 15)
                <div class="col-lg-9">
                    <div class="about__content-three services__details-content" style="background-color: #00397c; border-radius: 5px">
                        <div class="col-12 order-0 order-lg-2" style="padding: 0px">
                            <div class="about__img-three services__details-img">
                                <img src="{{ renderImage($item->galleryCover(), 1800, 400, 'cover') }}" alt="img" style="width: 100%" class="wow img-custom-anim-right animated" data-wow-duration="1.5s" data-wow-delay="0.2s">
                            </div>
                        </div>
                        <div class="offer-color-hormann" style="padding: 0px 15px">
                            <div class="section__title section__title-three mt-20 mb-20">
                                <h2 class="title">{{$item->title}}</h2>
                            </div>
                            {!! $item->text !!}
                        </div>
                        <div class="gallery mt-50 mb-50">
                            <div class="container">
                                <div class="row">
                                    @foreach($item->gallery->items as $item)
                                        @if($item->type !== 'cover')
                                            <div class="col-lg-4 pb-4 magnific-img">
                                                <a class="image-popup-vertical-fit" href="{{renderImage($item->url, 1920, 1080, 'resize')}}">
                                                    <img style="width: 100%" src="{{renderImage($item->url, 600, 600, 'fit')}}" alt="">
                                                </a>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                    <div class="col-lg-9">
                        <div class="about__content-three services__details-content">
                            <div class="col-12 order-0 order-lg-2">
                                <div class="about__img-three services__details-img">
                                    <img src="{{ renderImage($item->galleryCover(), 1800, 400, 'cover') }}" alt="img" style="width: 100%" class="wow img-custom-anim-right animated" data-wow-duration="1.5s" data-wow-delay="0.2s">
                                </div>
                            </div>
                            <div class="section__title section__title-three mt-20 mb-20">
                                <h2 class="title">{{$item->title}}</h2>
                            </div>
                            {!! $item->text !!}
                            <div class="gallery mt-50 mb-50">
                                <div class="container">
                                    <div class="row">
                                        @foreach($item->gallery->items as $item)
                                            @if($item->type !== 'cover')
                                                <div class="col-lg-4 pb-4 magnific-img">
                                                    <a class="image-popup-vertical-fit" href="{{renderImage($item->url, 1920, 1080, 'resize')}}">
                                                        <img style="width: 100%" src="{{renderImage($item->url, 600, 600, 'fit')}}" alt="">
                                                    </a>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
            </div>
        </div>
    </section>
    @push('scripts.body.bottom')
        <script>
            var lightbox = $('.gallery a').simpleLightbox({});
        </script>
    @endpush
@endsection
