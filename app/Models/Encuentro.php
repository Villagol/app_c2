<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Encuentro extends Model
{
    use HasFactory;
    
    protected $table = "encuentros";
    public $timestamps = false;
    protected $fillable = [
        'fecha',
        'hora',
    ];

    public function mapa(): BelongsTo
    {
        return $this->belongsTo(Mapa::class);
    }

    public function equipos(): BelongsToMany
    {
        return $this->belongsToMany(Equipo::class, 'encuentro_equipos', 'encuentro_id', 'equipo_id')
                    ->withPivot('resultado');
    }
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
