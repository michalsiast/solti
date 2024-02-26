<div class="brand__area section-pb-120">
    <div class="container">
        <div class="swiper brand-active">
            <div class="swiper-wrapper">
                @foreach($items as $item)
                    <div class="swiper-slide">
                        <div class="brand__item">
                            <a href="{{$item->title}}" target="_blank">
                                <img src="{{ renderImage($item->galleryCover(), 400, 200, 'cover') }}" alt="img">
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
