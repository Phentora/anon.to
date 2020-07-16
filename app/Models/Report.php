<?php

namespace App\Models;

use App\Models\Traits\CreatedByTrait;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use CreatedByTrait;

    protected $table = 'reports';

    protected $fillable = [
        'link_id',
        'url',
        'email',
        'comment',
        'ip_address',
        'created_by',
        'dealt_at',
    ];

    public function link()
    {
        return $this->belongsTo(Link::class, 'link_id');
    }
}
