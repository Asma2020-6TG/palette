<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Color;

class Palette extends Model
{
    use HasFactory;
    protected $table = "palettes";
    protected $fillable = [
        'id',
        'color_id',
        'favourite',
        'size'
    ];


 }
