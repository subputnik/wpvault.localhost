<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ServerSeeder::class,
            ServerCredentialSeeder::class,
            CdnSeeder::class,
            CdnCredentialSeeder::class,
            SiteSeeder::class,
            AdminPanelSeeder::class,
            WpAdminCredentialSeeder::class,
            CdnSiteSeeder::class,
        ]);
        
        // User::factory(10)->create();

        /* User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]); */
    }
}
