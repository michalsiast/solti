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
    <section class="services__area-two section-pt-120 section-pb-95">
        <div class="container">
            <div class="row ">
                <div class="col-3">
                    @include('default.offer.category.home')
                </div>
                <div class="col-9">
                    {!! $item->lead !!}
                    {!! $item->text !!}
                    <div class="row gutter-24 justify-content-center">
                        @foreach($items as $item)
                            <div class="col-lg-4 col-md-6 pt-40">
                                <div class="services__item-two shine__animate-item">
                                    <div class="services__thumb-two">
                                        <a href="{{route('offer.show.'.$item->id)}}" class="shine__animate-link">
                                            <img src="{{ renderImage($item->galleryCover(), 440, 280, 'cover') }}" alt="img">
                                        </a>
                                    </div>
                                    <div class="services__content-two">
                                        <h4 class="title"><a href="{{route('offer.show.'.$item->id)}}">{{$item->title}}</a></h4>
                                        {!! $item->lead !!}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
