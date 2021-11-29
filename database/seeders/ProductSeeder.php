<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{

    public function run()
    {
        $products = [
            [
                'name' => 'Shirt1',
                'description' => 'シャツです。',
                'image' => 'https://url.kr/4wu1xo',
                'price' => 1000
            ],
            [
                'name' => 'Shirt2',
                'description' => 'シャツです。',
                'image' => 'https://url.kr/oq4cd9',
                'price' => 1500
            ],
            [
                'name' => 'Pant',
                'description' => 'パンツです。',
                'image' => 'https://url.kr/awfhtn',
                'price' => 2000
            ],
            [
                'name' => 'shoes',
                'description' => '靴です。',
                'image' => 'https://url.kr/d3fn96' ,
                'price' => 2500
            ]
        ];

        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}
