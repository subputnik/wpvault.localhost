<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CdnCredential;

class CdnCredentialSeeder extends Seeder
{
    public function run(): void
    {
        CdnCredential::create([
            'cdn_id' => 1,
            'label' => 'Main Cloudflare Key',
            'api_key' => 'cf_api_key_123',
            'api_secret' => 'cf_api_secret_123',
        ]);

        CdnCredential::create([
            'cdn_id' => 2,
            'label' => 'Bunny Key',
            'api_key' => 'bunny_api_key_abc',
        ]);
    }
}
