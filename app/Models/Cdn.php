<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cdn extends Model
{
    protected $fillable = [
        'name',
        'provider',
        'api_endpoint',
        'notes',
    ];

    public function credentials()
    {
        return $this->hasMany(CdnCredential::class);
    }

    public function sites()
    {
        return $this->belongsToMany(Site::class)
            ->withPivot('zone_identifier')
            ->withTimestamps();
    }
}
