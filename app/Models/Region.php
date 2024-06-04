<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Region extends Model
{
    use HasFactory;
    protected $table = "regiones";
    public $timestamps = false;
    public function equipos(): HasMany{
        return $this->hasMany(Equipo::class);
    }
}
