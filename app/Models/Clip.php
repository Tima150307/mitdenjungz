<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clip extends Model
{
    use HasFactory;

    // Das hier erlaubt das Speichern aller Felder:
    protected $guarded = [];
}
