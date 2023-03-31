<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modif extends Model
{
    use HasFactory;
    public function Examen()
    {
        return $this->hasMany(Examen::class);
    }
}
