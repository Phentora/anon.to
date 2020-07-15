<?php

namespace App\Models\Traits;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

trait CreatedByTrait
{
    public static function boot()
    {
        static::creating(function (Model $model) {
            if ($model->isFillable('created_by') && empty($model->attributes['created_by'])) {
                $model->attributes['created_by'] = self::getAuthId();
            }
        });

        parent::boot();
    }

    private static function getAuthId()
    {
        return auth()->check() ? auth()->id() : 1;
    }

    public function user($key = 'created_by')
    {
        return $this->belongsTo(User::class, $key, 'id');
    }
}
