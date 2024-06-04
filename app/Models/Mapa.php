<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Mapa extends Model
{
    use HasFactory;
    protected $table = "mapas";
    public $timestamps = false;
public function encuentros():HasMany {
    return $this->hasMany(Encuentro::class);
}
}
