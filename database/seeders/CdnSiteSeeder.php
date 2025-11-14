<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CdnSiteSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('cdn_site')->insert([
            [
                'site_id' => 1,
                'cdn_id' => 1,
                'zone_identifier' => 'cf-zone-123',
            ],
            [
                'site_id' => 2,
                'cdn_id' => 2,
                'zone_identifier' => 'bunny-zone-abc',
            ],
        ]);
    }
}
