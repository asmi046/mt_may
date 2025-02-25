<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class SeoDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'url' => "/",
                'seo_title' => "Новогодние туры с выездом из Курска",
                'seo_description' => "Новогодние туры с выездом из Курска, море эмоций и впечетлений зимы 2025!",
                'page_title' => "Новогодние <br>путешествия 2025 <br>с МирТуризма46",
                'page_sub_title' => "Коледоскоп эмоций и впечатлений этой зимы. Спешите к нам, мы подберем Новогодний тур из на любой вкус и кошелек!",
            ]
        ];

        DB::table("seo_data")->insert($data);
    }
}
