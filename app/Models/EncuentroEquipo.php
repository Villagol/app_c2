<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EncuentroEquipo extends Model
{
    use HasFactory;
    protected $table = "encuentro_equipos";
    public $timestamps = false;
}
