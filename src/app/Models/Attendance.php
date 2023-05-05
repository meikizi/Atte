<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'date',
        'start_work',
        'end_work',
    ];

    /**
     * ユーザー関連付け
     * 1対多
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Rests関連付け
     * 1対多
     */
    public function Rests()
    {
        return $this->hasMany(Rest::class);
    }

    public function scopeDateSearch($query, $date)
    {
        if (!empty($date)) {
            $query->where('date', $date);
        }
    }

}