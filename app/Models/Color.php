<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Models\Palette;

class Color extends Model
{
    use HasFactory, Notifiable;

    protected $table = "colors";
    protected $fillable = [
        'id',
        'hex_code',
        'rgb_code',
        'status',
        'category_id',
        'palette_id'
    ];
    public $timestamps = false;

}
