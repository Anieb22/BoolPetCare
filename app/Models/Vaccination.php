<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccination extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'manufacturer',

    ];
    
    public function animals(){
        return $this->belongsToMany(Animal::class)->withPivot('vaccination_date');;
    }
}
