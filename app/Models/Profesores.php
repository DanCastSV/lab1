<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesores extends Model
{
    protected $table = "tbl_prof";
    use HasFactory;
    protected $fillable = [
        'nombre',
        'apellido',
        'DUI',
        'edad',
    ];
}
