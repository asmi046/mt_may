<div class="all_tour_wrapper greed">
    @foreach ($all_tours as $item)
        <div class="g_cell">
            <x-tour-card :item="$item"></x-tour-card>
        </div>
    @endforeach
</div>
