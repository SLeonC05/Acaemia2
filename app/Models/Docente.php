<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    protected $fillable = ['nombres', 'apellidos', 'titulo', 'edad', 'fecha', 'imagen', 'documento'];
    use HasFactory;

    public function materias(){
        return $this->belongsTo(Materia::class);
    }
}
