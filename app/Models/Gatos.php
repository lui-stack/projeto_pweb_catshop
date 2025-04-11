<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gatos extends Model
{
    use HasFactory;

    protected $table = "gatos";

    protected $fillable =[
        "nome",
        "raca",
        "idade"


    ];
}
