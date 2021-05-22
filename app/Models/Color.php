<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory, Notifiable;

    protected $table = "colors";
    protected $fillable = [
        'id',
        'code',
        'palette_id'
    ];
    public function palette(){
        return $this -> belongsTo('App\Models\Palette','palette_id','id');
    }
}
