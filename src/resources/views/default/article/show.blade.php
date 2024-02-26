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
    <section class="blog__details-area section-py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog__details-thumb">
                        <img src="{{ renderImage($item->galleryCover(), 1800, 400, 'cover') }}" alt="img">
                    </div>
                    <div class="blog__details-content">
                        <h2 class="title">{{$item->title}}</h2>
                        <p>{!! $item->lead !!}</p>
                        <p>{!! $item->text !!}</p>
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
                <div class="col-lg-4">
                    @include('default.article.category.home')
                </div>
            </div>
        </div>
    </section>
@endsection
