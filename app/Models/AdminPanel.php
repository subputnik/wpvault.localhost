<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminPanel extends Model
{
    protected $fillable = [
        'site_id',
        'url',
        'is_primary',
        'is_available',
        'last_status_code',
        'last_checked_at',
        'notes',
    ];

    protected $casts = [
        'is_primary'     => 'boolean',
        'is_available'   => 'boolean',
        'last_checked_at'=> 'datetime',
    ];

    public function site()
    {
        return $this->belongsTo(Site::class);
    }

    public function credentials()
    {
        return $this->hasMany(WpAdminCredential::class);
    }
}
