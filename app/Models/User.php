<?php

namespace App\Models;

use App\Http\Middleware\AdminMiddleware;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'login_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isAdmin()
    {
        $admins = app(AdminMiddleware::class)->admins;
        if (in_array($this->username, $admins)) {
            return true;
        }

        return false;
    }

    public function links()
    {
        return $this->hasMany(Link::class, 'created_by');
    }

    public function reports()
    {
        return $this->hasMany(Report::class, 'created_by');
    }
}
