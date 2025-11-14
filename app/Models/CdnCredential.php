<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\AsEncryptedString;

class CdnCredential extends Model
{
    protected $fillable = [
        'cdn_id',
        'label',
        'username',
        'password',
        'api_key',
        'api_secret',
        'notes',
    ];

    protected $casts = [
        'password'   => 'encrypted',
        'api_key'    => 'encrypted',
        'api_secret' => 'encrypted',
    ];

    public function cdn()
    {
        return $this->belongsTo(Cdn::class);
    }
}
