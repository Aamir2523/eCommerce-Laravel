<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => "Apple 14 pro",
                'price' => "1,00,000",
                'description' => "Apple 14 pro smartphone",
                "category" => "Mobile",
                "gallery" => "https://m.media-amazon.com/images/I/71xb2xkN5qL._SL1500_.jpg"
            ],
            [
                'name' => "Realme",
                'price' => "12,000",
                'description' => "Realme smartphone",
                "category" => "Mobile",
                "gallery" => "https://cdn1.smartprix.com/rx-iKWyXqzam-w1200-h1200/KWyXqzam.jpg"
            ]
        ]);


        // single product add and multiple product add(above code)

        // DB::table('products')->insert([
        //     'name' => "Apple 14 pro",
        //     'price' => "1,00,000",
        //     'description' => "Apple 14 pro smartphone",
        //     "category" => "Mobile",
        //     "gallery" => "https://m.media-amazon.com/images/I/71xb2xkN5qL._SL1500_.jpg"
        // ]);
    }
}
