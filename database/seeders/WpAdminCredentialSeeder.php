<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\WpAdminCredential;

class WpAdminCredentialSeeder extends Seeder
{
    public function run(): void
    {
        WpAdminCredential::create([
            'admin_panel_id' => 1,
            'username' => 'admin',
            'password' => 'admin123',
            'role' => 'administrator',
        ]);

        WpAdminCredential::create([
            'admin_panel_id' => 2,
            'username' => 'editor',
            'password' => 'blog123',
            'role' => 'editor',
        ]);

        WpAdminCredential::create([
            'admin_panel_id' => 3,
            'username' => 'shop-admin',
            'password' => 'shop123',
            'role' => 'administrator',
        ]);
    }
}

