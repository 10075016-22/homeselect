<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_incident',
        'id_employee',
        'cost_responsible',
        'observation',
        'asignation_date',
        'estimated_cost',
        'start_date',
        'end_date',
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

    public function incident() {
        return $this->belongsTo(Incident::class, 'id_incident');
    }
    public function employee() {
        return $this->belongsTo(Employee::class, 'id_employee');
    }
}
