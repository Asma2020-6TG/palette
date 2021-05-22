<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Palette extends Model
{
    use HasFactory;
    protected $table = "palettes";
    protected $fillable = [
        'id',
        'category',
    ];
    public function colors(){
        return $this -> hasMany('App\Models\Color','palette_id','id');
    }
}
