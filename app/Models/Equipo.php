<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\Hash;

class Equipo extends Model
{
    use HasFactory;
    protected $table = "equipos";
    public $timestamps = false;
    public function jugadores(): HasMany{
        return $this->hasMany(Jugador::class);
    }
    public function regiones():BelongsTo{
        return $this->belongsTo(Region::class);
    }
    public function encuentros():BelongsToMany{
        return $this->belongsToMany(Encuentro::class);

}
}
