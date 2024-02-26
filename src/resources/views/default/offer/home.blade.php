@if(isset($items))
<section class="blog__post-area section-pt-120 section-pb-90">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-8">
                <div class="section__title mb-70">
                    <h2 class="title">Nasza oferta</h2>
                    <h1 class="number">02</h1>
                </div>
            </div>
        </div>
        <div class="row justify-content-center gutter-24">
            @php
                $limitedItems = $items->take(3);
            @endphp
            @foreach($limitedItems as $item)
                <div class="col-lg-4 col-md-6">
                    <div class="blog__post-item shine__animate-item">
                        <div class="blog__post-thumb">
                            <a href="{{route('offer.show.'.$item->id)}}" class="shine__animate-link">
                                <img src="{{ renderImage($item->galleryCover(), 440, 280, 'cover') }}" alt="img">
                            </a>
                        </div>
                        <div class="blog__post-content">
                            <h4 class="title"><a href="{{route('offer.show.'.$item->id)}}">{{$item->title}}</a></h4>
                            {!! $item->lead !!}
                            <a href="{{route('offer.show.'.$item->id)}}" class="btn">Zobacz ofertę</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center">
            <a href="{{route('offer.index')}}" class="btn border-btn">Zobacz naszą ofertę</a>
        </div>
    </div>
</section>
@endif
