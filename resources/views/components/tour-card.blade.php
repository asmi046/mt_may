<a href="{{ ($item['out_lnk'])?$item['out_lnk']:route('tour_page', $item['slug']) }}" class="tour_card">
    <div class="img">
        <img src="{{ Storage::url($item['img']) }}" alt="{{ $item['title'] }}">

        @if ($item['prices'])
            <div class="label price_label">
                от {{ $item['prices'][0]['price'] }} ₽
            </div>
        @endif
    </div>
    <div class="text">
        <h3>{{ $item['title'] }}</h3>
        <p class="label label_white">{{ $item['deycount'] }} {{ echo_days($item['deycount']) }}</p>
        @if ($item['multi_data'])
        <p class="label label_white">
            @foreach ($item['multi_data'] as $subitem)
                {{ date ("d.m.Y", strtotime($subitem['start_data'])) }}
                @if ($loop->index != count($item['multi_data'])-1)
                ,
                @endif
            @endforeach
        </p>
        @else
        <p class="label label_white">{{ date ("d.m.Y", strtotime($item['start_data'])) }}</p>
        @endif

        <button class="button">Подробнее</button>
    </div>
</a>
