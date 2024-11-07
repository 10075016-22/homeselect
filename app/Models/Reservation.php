<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_apartment',
        'id_client',
        'start_date',
        'end_date',
        'observation',
        'total_cost',
        'status'
    ];

    protected $hidden = ['deleted_at', 'updated_at'];

    protected function casts(): array {
        return [];
    }

    public function apartment() {
        return $this->belongsTo(Apartment::class, 'id_apartment');
    }

    public function client() {
        return $this->belongsTo(Client::class, 'id_client');
    }
}
