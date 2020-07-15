<?php

namespace App\Models;

use App\Models\Traits\CreatedByTrait;
use Illuminate\Database\Eloquent\Model;

class Redirect extends Model
{
    use CreatedByTrait;

    protected $table = 'redirects';

    protected $fillable = [
        'hash',
        'url',
        'visited_at',
        'visits',
    ];
}
