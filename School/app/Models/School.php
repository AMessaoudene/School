<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable = [
        'name',
        'address',
        'surface',
    ];

    public function department()
    {
        return $this->hasMany(Department::class);
    }
}
