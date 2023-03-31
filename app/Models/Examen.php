<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Formation;
use App\Models\Epreuve;
class Examen extends Model
{
    use HasFactory;
    public function Formation()
    {
        return $this->belongsTo(Formation::class);
    }
    public function Epreuve()
    {
        return $this->belongsTo(Epreuve::class);
    }
    public function Modif()
    {
        return $this->belongsTO(Modif::class);
    }
    public function Salle()
    {
        return $this->belongsTO(Salle::class);
    }
    public function Alerte(){
        return $this->belongsTo(Alerte::class);
    }
}
