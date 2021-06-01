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
        'code',
        'status',
        'palette_id'
    ];
    public function palette(){
        return $this -> belongsTo('Palette::class','palette_id','id');
    }
}
