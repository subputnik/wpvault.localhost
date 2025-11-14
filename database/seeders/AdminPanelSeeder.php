<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AdminPanel;

class AdminPanelSeeder extends Seeder
{
    public function run(): void
    {
        AdminPanel::create([
            'site_id' => 1,
            'url' => 'https://corp.example.com/wp-admin',
            'is_primary' => true,
        ]);

        AdminPanel::create([
            'site_id' => 2,
            'url' => 'https://blog.example.com/wp-admin',
            'is_primary' => true,
        ]);

        AdminPanel::create([
            'site_id' => 3,
            'url' => 'https://shop.example.com/admin',
            'is_primary' => true,
        ]);
    }
}
