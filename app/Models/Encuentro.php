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
    public function mapas():BelongsTo{
        return $this->belongsTo(Mapa::class);
    }
    public function equipos():BelongsToMany{
        return $this->belongsToMany(Equipo::class);
    }
}
