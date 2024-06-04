<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\database\Eloquent\Relations\BelongsTo;

class Jugador extends Model
{
    use HasFactory;
    protected $table = "jugadores";
    public $timestamps = false;
    public function equipo():BelongsTo{
        return $this->belongsTo(Equipo::class);
    }
}
