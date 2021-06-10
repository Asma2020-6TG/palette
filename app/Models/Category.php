<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'name'
    ];

    public $timestamps = false;

    //relationship between categories and colors: hasmanythrough

    public function colors()
    {
        return $this->hasManyThrough(Color::class,Palette::class,
            'id',
            'palette_id',
            'id',
            'id');
    }

    public function palettes()
    {
        return $this->hasMany(Palette::class);
    }
}
