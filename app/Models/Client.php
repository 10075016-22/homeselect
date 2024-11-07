<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'is_frecuent',
        'observation',
        'status'
    ];

    protected $hidden = [];

    protected function casts(): array
    {
        return [
            // example
            // 'email_verified_at' => 'datetime',
        ];
    }
}
