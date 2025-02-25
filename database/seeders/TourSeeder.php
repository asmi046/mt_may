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
                'dir' => 'moscow',
                'title' => 'Москва (Новогодний / Рождественский тур) Новый год 2025',
                'deys' => 1,
                'img' => "center.jpg",
                'start_data'=> "27.01.2025",
                'prices' => [
                    ['price' => 5000, 'comment' => 'Детям до 16 лет (включая билет на локации парка Патриот)'],
                    ['price' => 6000, 'comment' => 'Стандарт (включая билет на локации парка Патриот)']
                ],
                'galery' => [
                    ['img' => "big_teatr.webp", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "center.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "gum_2.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "gum.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "kreml.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "nikolskaya.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "salut.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "vasili_blazgenni.jpg", 'title' => "Описание 1", 'in_top' => false],
                ]
            ],

            [
                'dir' => 'kudikina',
                'title' => 'Новогодняя Кудыкина Гора. В гости к символу Нового Года',
                'deys' => 1,
                'img' => "Кудыкина-Гора-на-Новый-Год.-Автобусный-тур-из-Курска-от-Мир-Туризма.-3.jpg",
                'start_data'=> "13.01.2025",
                'prices' => [
                    ['price' => 2500, 'comment' => 'Стандарт'],
                ],
                'galery' => [
                    ['img' => "914e72ds-1920-min.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "1677c489-1128-4d88-8128-b1ba3db20ea8-min-копия-3.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "227204aebbb9e21e2dc23368657de9377b101d8f-min.png", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "15428005-min.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "Hutor_Pesochnoe-2.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "IMG_4491-900-min.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "scale_1200-1-min.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "scale_1200-min.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "Кудыкина-Гора-на-Новый-Год.-Автобусный-тур-из-Курска-от-Мир-Туризма.-1.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "Кудыкина-Гора-на-Новый-Год.-Автобусный-тур-из-Курска-от-Мир-Туризма.-2.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "Кудыкина-Гора-на-Новый-Год.-Автобусный-тур-из-Курска-от-Мир-Туризма.-3.jpg", 'title' => "Описание 1", 'in_top' => false],
                ]
            ],

            [
                'dir' => 'krasnaya_polyana',
                'title' => 'Горнолыжный тур в Красную поляну',
                'deys' => 5,
                'img' => "Горнолыжный-тур-в-Красную-поляну-Роха_111.jpg",

                'start_data'=> "17.02.2025",
                'prices' => [
                    ['price' => 25000, 'comment' => ''],
                    ['price' => 28000, 'comment' => '1-местное размещение (без подселения)']
                ],
                'galery' => [
                    ['img' => "1ZCPoMqcxfOK15XvhFQOiUqVEjj2JAaARa113daKc25RAQ7eTn_8w9F-EO-hYd292dtyV3bnirEwzx6yOh4VnYu9-min.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "hkKH14g1Al0jD-wq7u9JgnMdvqpmRGZHlNZpq-igsKYx5gUr4vIJPlNjmSFXdHIaT843tuObbva8qqXNpn1sVF_s-min.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "lGiyPKgMq92r1WX_Cuf7i7sVAajL73xmmjhIq2SkPiPSV7Rerk8MUe1oaszpO4uNiysyTfyWX_-NW1kjx0rBhP97-min.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "Q25-B26Taddqntz_JTs421WdHQTayub9sQF7cHVlO3vLMBT82Ayi4B9WlAjeWrilP8NYKHiC3_KyAEcunbKsrqgY-min.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "roza_hutor2019_.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "roza_hutor2019_mir_turizma-1.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "SDsGT1TEKQF4V51E-qm2MIlRM_Kg09OjpJzNnANhPECAGIAj3cbyCQvY9o_QMsj-gwDKiDpaycklvC-V6TmODdC9-min.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "Wei7oj_r0KQ66Zj2U3vdtAKQ6YWl37T4tlqcK6ct-VgoGIUN9iqT8VeoYXGfwwEX8x0buHGtIxpqR3Giupu6FcsQ-min.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "zoabRduzIwC8leO9How2x1aJMY6q56RI8isJA-Y3vzfDZ6xkJxHQe3ba56RzduTTKBGCHp7qq0HMyD8uUyQn3QuZ-min.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "Горнолыжный-тур-в-Красную-поляну-Роха_111.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "изображение_viber_2021-10-25_20-49-58-097-min.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "изображение_viber_2021-10-25_20-51-06-540-min-e1635186608301.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "изображение_viber_2021-10-25_20-51-06-598-min.jpg", 'title' => "Описание 1", 'in_top' => false],
                ]
            ],

            [
                'dir' => 'gorki57',
                'title' => 'Поездки в Горки 57',
                'deys' => 1,
                'img' => "orel-sl-1.jpg",
                'start_data'=> "04.01.2025",
                'prices' => [
                    ['price' => 2000, 'comment' => 'Взрослый']
                ],
                'galery' => [
                    ['img' => "1607.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "common-1194.jpeg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "maxresdefault.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "orel-sl-1.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "orel-sl-2.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "orel-sl-3.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "orel-sl-5.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "orel-sl-6.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "P2153478.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "qoi5qyc7vfkkkwko084o4wss800csw.jpg", 'title' => "Описание 1", 'in_top' => false],
                ]
            ],

            [
                'dir' => 'pronino',
                'title' => 'Едем в Пронино',
                'deys' => 1,
                'img' => "ватрушки-в-Пронино.-Поездки-из-Курска-от-Мир-туризма.jpg-min.jpg",
                'start_data'=> "04.01.2025",
                'prices' => [
                    ['price' => 2000, 'comment' => 'Взрослый'],
                ],
                'galery' => [
                    ['img' => "ватрушки-в-Пронино.-Поездки-из-Курска-от-Мир-туризма.jpg-min.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "горнолыжные-поездки-в-Пронино-Орёл-из-Курска-от-Мир-Туризма-min.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "Для-лыжников-и-сноубордистов-поездки-в-Пронино-Орёл-из-Курска-от-Мир-Туризма-min.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "Едем-в-Пронино-Орёл-из-Курска-от-Мир-Туризма-min.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "поездки-в-Пронино-Орёл-из-Курска-от-Мир-Туризма-min.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "Пронино-Орёл-из-Курска-от-Мир-Туризма-min.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "снежный-банан-в-Пронино.-Поездки-из-Курска-от-Мир-Туризма-min.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "сноутюбинг-ватрушки-в-Пронино.-Поездки-из-Курска-от-Мир-туризма-min.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "тюбинг-в-Пронино.-Поездки-из-Курска-от-Мир-туризма.jpg-min.jpg", 'title' => "Описание 1", 'in_top' => false],
                ]
            ],
            // [
            //     'dir' => 'kursk',
            //     'title' => 'Курск – новогоднее путешествие!',
            //     'deys' => 1,
            //     'img' => "Маяк-Новая-Боевка-Пикник-парк.-Туры-в-Курск-от-Мир-Туризма.jpg",
            //     'start_data'=> "04.01.2025",
            //     'prices' => [
            //         ['price' => 15000, 'comment' => ''],
            //     ],
            //     'galery' => [
            //         ['img' => "Губернский-каток.-Мир-Туризма-Курск-.jpg", 'title' => "Описание 1", 'in_top' => true],
            //         ['img' => "Ёлочный-базар-в-Курске.-Туры.-Мир-Туризма.jpg", 'title' => "Описание 1", 'in_top' => true],
            //         ['img' => "Ёлочный-базар-в-Курском-Центральном-универмаге.-Туры.-Мир-Туризма.jpg", 'title' => "Описание 1", 'in_top' => true],
            //         ['img' => "Ёлочный-базар-в-Курском-ЦУМе.-Туры.-Мир-Туризма.jpg", 'title' => "Описание 1", 'in_top' => true],
            //         ['img' => "Маяк-Новая-Боевка-Пикник-парк.-Туры-в-Курск-от-Мир-Туризма.jpg", 'title' => "Описание 1", 'in_top' => false],
            //         ['img' => "Новогодние-праздники-в-Курске.-Туры-от-Мир-Туризма.jpg", 'title' => "Описание 1", 'in_top' => false],
            //         ['img' => "Новогодние-путешествия-от-Мир-Туризма.jpg", 'title' => "Описание 1", 'in_top' => false],
            //         ['img' => "Новогодние-туры-в-Курск-от-Мир-Туризма.jpg", 'title' => "Описание 1", 'in_top' => false],
            //         ['img' => "Новогодние-Туры-в-Курск-от-Мир-Туризма.-Новая-Боевка-Пикник-парк.jpg", 'title' => "Описание 1", 'in_top' => false],
            //         ['img' => "Новогодний-каток-в-Курске.-Мир-туризма.jpg", 'title' => "Описание 1", 'in_top' => true],
            //         ['img' => "Новый-год-в-Курске.-Мир-Туризма.jpg", 'title' => "Описание 1", 'in_top' => true],
            //         ['img' => "Новый-год-на-Новой-Боевке-Пикник-парк.-Мир-Туризма.jpg", 'title' => "Описание 1", 'in_top' => true],
            //         ['img' => "Пикник-парк-Новая-Боевка-Туры-в-Курск-от-Мир-Туризма.jpg", 'title' => "Описание 1", 'in_top' => true],
            //         ['img' => "Рождественские-туры-в-Курск.-Мир-Туризма.jpg", 'title' => "Описание 1", 'in_top' => false],
            //         ['img' => "Театральная-площадь.-Новогодний-Тур-в-Курск.-Мир-Туризма.jpg", 'title' => "Описание 1", 'in_top' => false],
            //         ['img' => "Туры-в-Курск-к-Деду-морозу.-Мир-Туризма-Курск.jpg", 'title' => "Описание 1", 'in_top' => false],
            //         ['img' => "Туры-в-Курск-от-Мир-Туризма.jpg", 'title' => "Описание 1", 'in_top' => false],
            //         ['img' => "Туры-на-Новогоднюю-ёлку-в-Курск.-Пикник-Парк-Новая-Боевка.-Туры-от-Мир-Туризма.jpg", 'title' => "Описание 1", 'in_top' => false],
            //         ['img' => "Абрис-Курского-детинца.-Туры-в-Курск.-Мир-Туризма.jpg", 'title' => "Описание 1", 'in_top' => false],
            //         ['img' => "Древний-Курск.-Туры-для-груп-от-Мир-Туризма.jpg", 'title' => "Описание 1", 'in_top' => false],
            //         ['img' => "Курский-детинец.-Туры-в-Курск-от-Мир-Туризма.jpg", 'title' => "Описание 1", 'in_top' => false],
            //     ]
            // ],

            [
                'dir' => 'bogatir',
                'title' => 'Знаменская Богатырская застава',
                'deys' => 1,
                'img' => "Hutor_Pesochnoe-9.jpg",
                'start_data'=> "24.02.2025",
                'prices' => [
                    ['price' => 3000, 'comment' => ''],
                    ['price' => 2900, 'comment' => 'Детям до 16лет'],
                ],
                'galery' => [
                    ['img' => "6dc89468-4741-46bd-be65-bd98c2b9df54.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "9c7d1934-11fc-4bef-9d46-e79d8f4a8c89.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "Hutor_Pesochnoe-2.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "Hutor_Pesochnoe-6.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "Hutor_Pesochnoe-7.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "Hutor_Pesochnoe-9.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "Богатырская-застава-тур-из-Курска-от-Мир-Туризма-1.jpeg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "Богатырская-застава-тур-из-Курска-от-Мир-Туризма-1.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "Богатырская-застава-тур-из-Курска-от-Мир-Туризма-2.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "Богатырская-застава-тур-из-Курска-от-Мир-Туризма-6.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "Богатырская-застава-тур-из-Курска-от-Мир-Туризма-7.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "Богатырская-застава-тур-из-Курска-от-Мир-Туризма-9.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "Богатырская-застава-тур-из-Курска-от-Мир-Туризма-11.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "-застава-тур-из-Курска-от-Мир-Туризма-10-e1681093905746.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "Знаменская-Богатырская-застава-из-Курска-от-Мир-Туризма-www.mirturizma46.ru-5.jpg", 'title' => "Описание 1", 'in_top' => false],
                ]
            ],
            [
                'dir' => 'tula',
                'title' => 'Тула город оружейников! Пряников! И самоваров!',
                'deys' => 1,
                'img' => "H1VvKh9E7As-2-e1680604314929.jpg",
                'start_data'=> "03.11.2024",
                'prices' => [
                    ['price' => 3900, 'comment' => ''],
                    ['price' => 3800, 'comment' => 'Детям до 16лет'],
                ],
                'galery' => [
                    ['img' => "3-2-1.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "ekskursionni-tur-v-tulu.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "f6f17b1b145b2d466fba48a83e52fdb1.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "Flx-LcuYbfc-2-e1680604361564.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "H1VvKh9E7As-2-e1680604314929.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "Mir-turizma-tur-v-tulu-1-e1633351907277.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "m-oboron.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "scale_1200-4-1-e1633354795947.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "tur-vihodnogi-dnya-v-tulu.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "tur-v-tulu-na-vihodnie.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "tur-v-tulu-ot-mir-turizma.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "tur-v-tulu-ot-mir-turizma-tulskiy-kreml-e1602977695326.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "VDKLq2prdak.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "x7wjZv_7Te4-2.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "YKkj8S-XLKA.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "Тур-в-Тулу-из-Курска-от-Мир-Туризма-min.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "Тур-в-тулу-тульские-пряники-музей-оружия-арбат-Курск-Мир-Туризма-min.jpg", 'title' => "Описание 1", 'in_top' => false],
                ]
            ],
            [
                'dir' => 'kareliya',
                'title' => 'Новогодний тур в Карелию',
                'deys' => 4,
                'img' => "karel-sl-5.jpg",
                'start_data'=> "02.01.2025",
                'prices' => [
                    ['price' => 17800 , 'comment' => ''],
                ],
                'galery' => [
                    ['img' => "c8c2d066fc69769cdb8955a1d4a8059d-min.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "karel-sl-2.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "karel-sl-3.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "karel-sl-4.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "karel-sl-5.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "karel-sl-6.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "Новый-год-в-Карелии-от-Мир-Туризма-Курск-min.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "Тур-в-карелию-от-мир-туризма-курск-min-1.jpg", 'title' => "Описание 1", 'in_top' => false],
                ]
            ],
            [
                'dir' => 'elka',
                'title' => 'Новогодний тур в Карелию на елку',
                'deys' => 1,
                'img' => "kreml-elka-sl-1.jpg",
                'start_data'=> "03.01.2025",
                'prices' => [
                    ['price' => 1 , 'comment' => ''],
                    ['price' => 1 , 'comment' => 'для детей (включён 🎁 подарок на Ёлке🎄)'],
                ],
                'galery' => [
                    ['img' => "eU79SQRFW9I-min.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "kreml-elka-sl-1.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "kreml-elka-sl-3.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "moskva-sl-2.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "moskva-sl-4.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "Москва-Новогодний-Рождественский-тур-из-Курска_-min.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "Тур-на-Кремлёвскую-Ёлку-из-Курска-Мир-Туризма-1.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "Тур-на-Кремлёвскую-Ёлку-из-Курска-Мир-Туризма-2.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "Тур-на-Кремлёвскую-Ёлку-из-Курска-Мир-Туризма-3.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "Тур-на-Кремлёвскую-Ёлку-из-Курска-Мир-Туризма-4.jpg", 'title' => "Описание 1", 'in_top' => false],
                ]
            ],
            [
                'dir' => 'suzdal',
                'title' => 'Тур в Новогоднюю столицу Суздаль + Владимир',
                'deys' => 2,
                'img' => "photo_5413710705451980063_y.jpg",
                'start_data'=> "01.01.2025",
                'prices' => [
                    ['price' => 1, 'comment' => ''],
                ],
                'galery' => [
                    ['img' => "istock-1186973756_8fc-e1701372905214.webp", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "photo_5413710705451980061_y.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "photo_5413710705451980062_y.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "photo_5413710705451980063_y.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "photo_5413710705451980065_y.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "photo_5413710705451980066_y.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "photo_5413710705451980067_y.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "photo_5413710705451980068_x.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "photo_5413710705451980070_y.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "photo_5413710705451980071_y-e1701258266893.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "photo_5413710705451980072_y.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "photo_5413710705451980073_y.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "photo_5413710705451980074_y.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "photo_5413710705451980076_y-e1701256264894.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "photo_5413710705451980077_x.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "photo_5413710705451980078_y.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "photo_5413710705451980079_y-e1701073431146.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "photo_5413740413740764913_y-e1701071552846.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "новогодний-суздаль.jpg", 'title' => "Описание 1", 'in_top' => false],
                ]
            ],
            [
                'dir' => 'ledovoeshoy',
                'title' => 'Ледовое Шоу Татьяны Навка',
                'deys' => 1,
                'img' => "2023-11-18_21-37-26.png",
                'start_data'=> "05.01.2025",
                'prices' => [
                    ['price' => 1 , 'comment' => ''],
                ],
                'galery' => [
                    ['img' => "2d067061-9806-4f34-9198-9627e5685546-1.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "2023-11-18_21-37-26.png", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "Dmf_sQ9XcAA0hT-min.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "kreml-elka-sl-1.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "ld0omgehfi7tk1ro7copq8jrq0eyfbby-min.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "moskva-sl-2.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "moskva-sl-4.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "Москва-Новогодний-Рождественский-тур-из-Курска_-min.jpg", 'title' => "Описание 1", 'in_top' => false],
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
                'order' => 100,
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
