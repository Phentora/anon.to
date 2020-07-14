<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Content extends Model
{
    protected $table = 'links';

    protected $fillable = [
        'title',
        'slug',
        'content',
    ];

    public function setSlugAttribute($value)
    {
        if (empty($this->attributes['slug'])) {
            $this->attributes['slug'] = Str::slug($value);
        }
    }
}
