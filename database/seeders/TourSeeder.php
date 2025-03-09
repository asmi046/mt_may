<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $data = [
            [
                'order' => 10,
                'dir' => 'moscow',
                'title' => 'Москва + парк Патриот + ВДНХ выставка «Россия» на майские праздники из Курска',
                'deys' => 1,
                'img' => "1.jpg",
                'start_data'=> "28.04.2025",
                'prices' => [
                    ['price' => 4500, 'comment' => 'Детям до 16 лет'],
                    ['price' => 5000, 'comment' => 'Стандарт']
                ],
                'galery' => [
                    ['img' => "1.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "2.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "3.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "4.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "5.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "6.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "7.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "8.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "9.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "10.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "11.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "12.jpg", 'title' => "Описание 1", 'in_top' => false],
                ]
            ],

            [
                'order' => 9,
                'dir' => 'alpaka',
                'title' => 'Альпака парк + Корабль Петра I',
                'deys' => 1,
                'img' => "1.jpg",
                'start_data'=> "29.04.2025",
                'prices' => [
                    ['price' => 3000, 'comment' => 'Стандартная цена'],
                ],
                'galery' => [
                    ['img' => "1.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "2.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "3.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "4.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "5.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "6.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "7.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "8.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "9.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "10.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "11.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "12.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "13.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "14.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "15.jpg", 'title' => "Описание 1", 'in_top' => false],
                ]
            ],
            [
                'order' => 8,
                'dir' => 'bogatiri',
                'title' => 'Богатырская застава. Катание на ладье. Богатыри',
                'deys' => 1,
                'img' => "1.jpg",
                'start_data'=> "01.05.2025",
                'prices' => [
                    ['price' => 3000, 'comment' => 'Взрослые'],
                    ['price' => 2900, 'comment' => 'детям до 16 лет']
                ],
                'galery' => [
                    ['img' => "1.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "2.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "3.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "4.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "5.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "6.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "7.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "8.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "9.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "10.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "11.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "12.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "13.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "14.jpg", 'title' => "Описание 1", 'in_top' => false],
                ]
            ],
            [
                'order' => 7,
                'dir' => 'rusborg',
                'title' => 'РУСБОРГ — исторический фестиваль',
                'deys' => 1,
                'img' => "1.jpg",
                'start_data'=> "11.05.2025",
                'prices' => [
                    ['price' => 2500, 'comment' => 'Стандартная цена'],
                ],
                'galery' => [
                    ['img' => "1.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "2.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "3.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "4.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "5.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "6.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "7.webp", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "8.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "9.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "10.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "11.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "12.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "13.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "14.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "15.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "16.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "17.jpg", 'title' => "Описание 1", 'in_top' => false],
                ]
            ],
            [
                'order' => 6,
                'dir' => 'matrona',
                'title' => 'Матрона Московская + Всецарица (5 апреля, 19 апреля)',
                'deys' => 1,
                'img' => "1.jpg",
                'start_data'=> "05.04.2025","19.04.2025",
                'prices' => [
                    ['price' => 3500, 'comment' => '(5 апреля) дети до 16 лет'],
                    ['price' => 4000, 'comment' => '(5 апреля) взрослые'],
                    ['price' => 3500, 'comment' => '(19 апреля) дети до 16 лет'],
                    ['price' => 4000, 'comment' => '(19 апреля) взрослые']
                ],
                'galery' => [
                    ['img' => "1.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "2.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "3.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "4.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "5.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "6.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "7.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "8.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "9.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "10.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "11.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "12.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "13.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "14.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "15.jpg", 'title' => "Описание 1", 'in_top' => false],
                ]
            ],
            [
                'order' => 5,
                'dir' => 'kudikina_gora',
                'title' => 'Кудыкина гора на майские праздники',
                'deys' => 1,
                'img' => "1.jpg",
                'start_data'=> "10.05.2025",
                'prices' => [
                    ['price' => 2500, 'comment' => 'Стандартная цена']
                ],
                'galery' => [
                    ['img' => "1.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "2.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "3.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "4.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "5.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "6.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "7.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "8.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "9.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "10.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "11.jpg", 'title' => "Описание 1", 'in_top' => false],
                ]
            ],
            [
                'order' => 4,
                'dir' => 'volgograd',
                'title' => 'Тур в Волгоград на майские праздники 2025 из Курска',
                'deys' => 1,
                'img' => "1.jpg",
                'start_data'=> "01.05.2025","09.05.2025",
                'prices' => [
                    ['price' => 7000, 'comment' => 'детям до 16 лет (1 мая)'],
                    ['price' => 7500, 'comment' => 'взрослые (1 мая)'],
                    ['price' => 7500, 'comment' => 'детям до 16 лет (9 мая)'],
                    ['price' => 8000, 'comment' => 'взрослые (9 мая)']
                ],
                'galery' => [
                    ['img' => "1.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "2.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "3.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "4.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "5.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "6.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "7.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "8.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "9.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "10.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "11.jpg", 'title' => "Описание 1", 'in_top' => false],
                ]
            ],
            [
                'order' => 3,
                'dir' => 'kazan',
                'title' => 'Автобусный тур Казань + Йошкар-Ола + Остров-град Свияжск на майские праздники из Курска (Отель 4* в центре Казани)',
                'deys' => 2,
                'img' => "1.jpg",
                'start_data'=> "08.05.2025","12.06.2025",
                'prices' => [
                    ['price' => 25000, 'comment' => 'дети до 16 лет'],
                    ['price' => 25500, 'comment' => 'взрослые'],
                    ['price' => 29500, 'comment' => '1-местн. размещение'],
                ],
                'galery' => [
                    ['img' => "1.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "2.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "3.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "4.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "5.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "6.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "7.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "8.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "9.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "10.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "11.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "12.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "13.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "14.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "15.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "17.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "18.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "19.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "20.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "21.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "22.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "23.jpeg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "23.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "24.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "25.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "26.jpg", 'title' => "Описание 1", 'in_top' => false],
                ]
            ],
            [
                'order' => 2,
                'dir' => 'piter',
                'title' => 'Санкт-Петербург на майские праздники из Курска Открытие фонтанов Петергофа + теплоход',
                'deys' => 3,
                'img' => "1.jpg",
                'start_data'=> "30.04.2025","7.05.2025",
                'prices' => [
                    ['price' => 26000, 'comment' => 'дети до 16 лет'],
                    ['price' => 26500, 'comment' => 'взрослые'],
                    ['price' => 29500, 'comment' => '1-местн. размещение'],
                ],
                'galery' => [
                    ['img' => "1.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "2.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "3.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "4.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "5.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "6.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "7.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "8.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "9.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "10.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "11.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "12.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "13.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "14.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "15.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "16.jpg", 'title' => "Описание 1", 'in_top' => false],
                ]
            ],
            [
                'order' => 1,
                'dir' => 'adigea',
                'out_lnk' => 'https://adygea.mirturizma46.ru/',
                'title' => 'Тур в Адыгею из Курска',
                'deys' => 3,
                'img' => "1.jpg",
                'start_data'=> "30.04.2025","7.05.2025",
                'prices' => [
                    ['price' => 20000, 'comment' => 'Стандартная цена'],
                ],
                'galery' => [
                    ['img' => "1.jpg", 'title' => "Описание 1", 'in_top' => true],
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

            $inserted_item = [
                'order' => $item['order'],
                'out_lnk' => $item['out_lnk']?$item['out_lnk']:null,
                'title' => $item['title'],
                'title_input' => $item['title'],
                'slug' => Str::slug($item['title']),
                'img' => $main_img,
                'deycount' => $item['deys'],
                'start_data' => date("Y-m-d", strtotime($item['start_data'])),
                'top_description' => file_get_contents(public_path('tour_info/'.$item['dir'].'/top.html')),
                'program' => file_get_contents(public_path('tour_info/'.$item['dir'].'/program.html')),
                'in_price' => file_get_contents(public_path('tour_info/'.$item['dir'].'/in_price.html')),
                'out_price' => file_get_contents(public_path('tour_info/'.$item['dir'].'/out_price.html')),
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
