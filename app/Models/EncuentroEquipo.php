<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EncuentroEquipo extends Model
{
    use HasFactory;
    
    protected $table = "encuentro_equipos";
    public $timestamps = false;
    protected $fillable = [
        'resultado',
    ];

    public function encuentro()
    {
        return $this->belongsTo(Encuentro::class);
    }

    public function equipoLocal()
    {
        return $this->belongsTo(Equipo::class, 'equipo_local_id');
    }

    public function equipoVisitante()
    {
        return $this->belongsTo(Equipo::class, 'equipo_visitante_id');
    }
}
