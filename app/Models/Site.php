<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    protected $fillable = [
        'name',
        'domain',
        'wp_version',
        'server_id',
        'description',
    ];

    public function server()
    {
        return $this->belongsTo(Server::class);
    }

    public function adminPanels()
    {
        return $this->hasMany(AdminPanel::class);
    }

    public function cdns()
    {
        return $this->belongsToMany(Cdn::class)->withTimestamps();
    }
}