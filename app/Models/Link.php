<?php

namespace App\Models;

use App\Models\Traits\CreatedByTrait;
use App\Services\AnonServices;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use CreatedByTrait;

    protected $table = 'links';

    protected $fillable = [
        'hash',
        'url_scheme',
        'url_host',
        'url_port',
        'url_path',
        'url_query',
        'url_fragment',
        'created_by',
    ];

    public function getUrlAttribute()
    {
        return app(AnonServices::class)->unParseUrl($this);
    }
}
