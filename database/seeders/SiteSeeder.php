<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Site;

class SiteSeeder extends Seeder
{
    public function run(): void
    {
        Site::create([
            'name' => 'Корпоративный сайт',
            'domain' => 'corp.example.com',
            'server_id' => 1,
            'wp_version' => '6.6.0',
            'description' => 'Основной сайт компании',
        ]);

        Site::create([
            'name' => 'Блог',
            'domain' => 'blog.example.com',
            'server_id' => 2,
            'wp_version' => '6.5.2',
            'description' => 'Личный блог на WordPress',
        ]);

        Site::create([
            'name' => 'Интернет-магазин',
            'domain' => 'shop.example.com',
            'server_id' => 1,
            'wp_version' => '6.4.5',
            'description' => 'Магазин с WooCommerce',
        ]);
    }
}
