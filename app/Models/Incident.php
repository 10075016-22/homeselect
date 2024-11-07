<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Incident extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_reservation',
        'observation'
    ];

    protected $hidden = [];

    protected function casts(): array
    {
        return [
            // example
            // 'email_verified_at' => 'datetime',
        ];
    }

    public function reservation() {
        return $this->belongsTo(Reservation::class, 'id_reservation');
    }
}
