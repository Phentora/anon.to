<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AllowList extends Model
{
    protected $table = 'allow_lists';

    protected $fillable = [
        'url_host',
        'allow',
        'reason',
    ];

    protected $casts = [
        'allow' => 'boolean',
    ];
}
