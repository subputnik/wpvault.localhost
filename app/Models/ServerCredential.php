<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\AsEncryptedString;

class ServerCredential extends Model
{
    protected $fillable = [
        'server_id', 'type', 'username', 'password',
        'port', 'private_key', 'is_root', 'notes',
    ];

    protected $casts = [
        'password'    => 'encrypted',
        'private_key' => 'encrypted',
        'is_root'     => 'boolean',
    ];
}