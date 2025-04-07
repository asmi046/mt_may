<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class TourSeederMoscow extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $data = [
            [
                'order' => 10,
                'dir' => 'moscow_2',
                'title' => 'Москва + парк Патриот на майские праздники (3 и 9 мая) из Курска 🇷🇺 День Победы в Москве',
                'slug' => "Москва + парк Патриот, 9 мая",
                'deys' => 3,
                'video' => "video.mp4",
                'img' => "1.jpg",
                'start_data'=> "03.05.2025",
                'multi_data' => json_encode([
                    ["#" => null, "start_data" => "2025-05-03"],
                    ["#" => null,"start_data" => "2025-05-09"]
                ]),
                'page_bg' => 'moskow_bg',
                'prices' => [
                    ['price' => 5000, 'comment' => '3 мая (дети до 16 лет)'],
                    ['price' => 6000, 'comment' => '3 мая (взрослые)'],
                    ['price' => 5000, 'comment' => '9 мая (дети до 16 лет)'],
                    ['price' => 6000, 'comment' => '9 мая (взрослые)'],
                ],
                'galery' => [
                    ['img' => "1.jpg", 'title' => "Столица!", 'in_top' => true],
                    ['img' => "2.jpg", 'title' => "Россия!", 'in_top' => true],
                    ['img' => "3.jpg", 'title' => "Весна :)", 'in_top' => true],
                    ['img' => "4.jpg", 'title' => "Давай с нами :)", 'in_top' => true],
                    ['img' => "5.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "6.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "7.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "8.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "9.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "10.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "11.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "12.jpg", 'title' => "", 'in_top' => false],
                ]
            ],

        ];

        $index = 0;
        foreach ($data as $item) {

            $main_img = "tours/".$index."_".$item['img'];
            Storage::disk('public')->put($main_img, file_get_contents(public_path('tour_info/'.$item['dir'].'/img/'.$item['img'])), 'public');
            $inserted_galery = [];

            foreach ($item['galery'] as $galery_item) {
                Storage::disk('public')->put("tours/".$index."_".$galery_item['img'], file_get_contents(public_path('tour_info/'.$item['dir'].'/img/'.$galery_item['img'])), 'public');
                $galery_item['img'] = "tours/".$index."_".$galery_item['img'];
                $inserted_galery[] = $galery_item;
            }

            if (isset($item['video'])) {
                Storage::disk('public')->put("tours/".$index."_".$item['dir'].".mp4", file_get_contents(public_path('tour_info/'.$item['dir'].'/'.$item['video'])), 'public');
            }

            $inserted_item = [
                'order' => $item['order'],
                'header_bg' => isset($item['video'])?"tours/".$index."_".$item['dir'].".mp4":null,
                'out_lnk' => isset($item['out_lnk'])?$item['out_lnk']:null,
                'page_bg' => isset($item['page_bg'])?$item['page_bg']:null,
                'title' => $item['title'],
                'title_input' => $item['title'],
                'slug' => Str::slug($item['slug']),
                'img' => $main_img,
                'deycount' => $item['deys'],
                'start_data' => date("Y-m-d", strtotime($item['start_data'])),
                'multi_data' => isset($item['multi_data'])?$item['multi_data']: null ,
                'top_description' => file_get_contents(public_path('tour_info/'.$item['dir'].'/top.html')),
                'program' => file_get_contents(public_path('tour_info/'.$item['dir'].'/program.html')),
                'in_price' => file_exists(public_path('tour_info/'.$item['dir'].'/in_price.html'))?file_get_contents(public_path('tour_info/'.$item['dir'].'/in_price.html')):null,
                'out_price' => file_exists(public_path('tour_info/'.$item['dir'].'/out_price.html'))?file_get_contents(public_path('tour_info/'.$item['dir'].'/out_price.html')):null,
                'galery' => json_encode($inserted_galery),
                'prices' => json_encode($item['prices'])
            ];

            $index ++;
            DB::table("seo_data")->insert(
                [
                    'url' => 'tours/'.Str::slug($item['title']),
                    'seo_title' => $item['title'],
                    'seo_description' => $item['title'],
                ]
            );
            DB::table("tours")->insert($inserted_item);
        }

    }
}
