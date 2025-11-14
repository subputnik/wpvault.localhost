<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\AsEncryptedString;

class WpAdminCredential extends Model
{
    protected $fillable = [
        'admin_panel_id',
        'username',
        'password',
        'role',
        'notes',
    ];

    protected $casts = [
        'password' => 'encrypted',
    ];

    public function adminPanel()
    {
        return $this->belongsTo(AdminPanel::class);
    }
}
