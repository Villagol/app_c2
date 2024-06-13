<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Equipo extends Model
{
    use HasFactory;
    
    protected $table = "equipos";
    public $timestamps = false;
    protected $fillable = ['nombre','entrenador','region_id'];

    public function jugadores(): HasMany
    {
        return $this->hasMany(Jugador::class);
    }

    public function region(): BelongsTo
    {
        return $this->belongsTo(Region::class);
    }

    public function encuentros(): BelongsToMany
    {
        return $this->belongsToMany(Encuentro::class, 'encuentro_equipos', 'equipo_id', 'encuentro_id')
                    ->withPivot('resultado');
    }
}
