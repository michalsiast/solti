<div class="mainRotator">
    @if($rotator->arrows)
        <button class="prev"> ❰</button>
    @endif
        <section class="slider__area">
            <div class="swiper slider-active">
                <div class="swiper-wrapper">
                    @foreach($rotator->gallery->items as $item)
                        <div class="swiper-slide slider__bg" data-background="{{renderImage($item->url, 1920, 700, `fit`)}}">
                            <div class="container custom-container-two">
                                <div class="row">
                                    <div class="col-xl-7 col-lg-8">
                                        @if(!empty($item->name))
                                        <div class="slider__content">
                                            <span class="sub-title">{{$item->name}}</span>
                                            {!! $item->text !!}
                                        </div>
                                            @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @if($rotator->arrows)
        <button class="next"> ❱</button>
    @endif
</div>
@push('scripts.body.bottom')
    <script>
        $('#rotator{{$rotator->id}}').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: {{$rotator->time ?? 3000}},
            speed: {{$rotator->speed ?? 500}},
            arrows: {{$rotator->arrows ? 'true' : 'false'}},
            dots: {{$rotator->pager ? 'true' : 'false'}},
            prevArrow: $('.prev'),
            nextArrow: $('.next'),
            pauseOnHover: false
        });
    </script>
@endpush
