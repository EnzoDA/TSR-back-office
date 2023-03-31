<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Formation;
class Epreuve extends Model
{
    use HasFactory;
    public function Formation()
    {
        return $this->belongsTo(Formation::class);
    }
    public function Formations()
    {
        return $this->hasMany(Formation::class);
    }
}
