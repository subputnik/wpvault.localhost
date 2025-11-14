<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ServerCredential;

class ServerCredentialSeeder extends Seeder
{
    public function run(): void
    {
        ServerCredential::create([
            'server_id' => 1,
            'type' => 'ssh',
            'username' => 'root',
            'password' => 'rootpass123',
            'port' => 22,
            'is_root' => true,
        ]);

        ServerCredential::create([
            'server_id' => 1,
            'type' => 'ssh',
            'username' => 'deploy',
            'password' => 'deploypass',
            'port' => 22,
        ]);

        ServerCredential::create([
            'server_id' => 2,
            'type' => 'ftp',
            'username' => 'ftp-user',
            'password' => 'ftppass',
            'port' => 21,
        ]);
    }
}
