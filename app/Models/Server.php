<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    protected $fillable = [
        'name',
        'host',
        'ip_address',
        'provider',
        'notes',
    ];

    public function sites()
    {
        return $this->hasMany(Site::class);
    }

    public function credentials()
    {
        return $this->hasMany(ServerCredential::class);
    }
}
