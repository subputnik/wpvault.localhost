<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Server;

class ServerSeeder extends Seeder
{
    public function run(): void
    {
        Server::create([
            'name' => 'Main Server',
            'host' => '192.168.1.10',
            'provider' => 'Hetzner',
        ]);

        Server::create([
            'name' => 'Backup Server',
            'host' => '192.168.1.11',
            'provider' => 'DigitalOcean',
        ]);
    }
}
