<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cdn;

class CdnSeeder extends Seeder
{
    public function run(): void
    {
        Cdn::create([
            'name' => 'Cloudflare',
            'provider' => 'Cloudflare',
            'api_endpoint' => 'https://api.cloudflare.com/client/v4/',
        ]);

        Cdn::create([
            'name' => 'BunnyCDN',
            'provider' => 'Bunny',
            'api_endpoint' => 'https://api.bunny.net/',
        ]);
    }
}

