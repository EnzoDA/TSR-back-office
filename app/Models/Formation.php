<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Examen;
use App\Models\Epreuve;

class Formation extends Model
{
    use HasFactory;
    public function Examen()
    {
        return $this->hasMany(Examen::class);
    }
    public function Epreuve()
    {
        return $this->hasMany(Epreuve::class);
    }
    public function Epreuves()
    {
        return $this->belongsTo(Epreuve::class);
    }
}
