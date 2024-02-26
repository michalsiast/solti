<aside class="shop__sidebar">
    <div class="blog__widget">
        <h4 class="blog__widget-title">Kategorie ofert</h4>
        <div class="blog__cat-list shop__cat-list">
            <ul class="list-wrap">
                @foreach($items as $item)
                <li>
                    <a href="{{route('offer_category.show.'.$item->id)}}">{{$item->title}} <i class="renova-right-arrow"></i></a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</aside>
