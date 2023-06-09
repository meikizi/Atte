<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'email_verified',
        'email_verify_token',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Attendances関連付け
     * 1対多
     */
    public function Attendances()
    {
        return $this->hasMany(Attendance::class);
    }

    /**
     * Rests関連付け
     * 1対多
     */
    public function Rests()
    {
        return $this->hasMany(Rest::class);
    }

    public function scopeNameSearch($query, $name)
    {
        if (!empty($name)) {
            $query->where('name', $name);
        }
    }

    protected $dates = [
        'start_work',
        'end_work',
    ];
}
