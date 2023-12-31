<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'specie',
        'date_of_birth',
        'genre',
        'owner',
        'note',
    ];

    public function vaccinations(){
        return $this->belongsToMany(Vaccination::class)->withPivot('vaccination_date');
    }
}
