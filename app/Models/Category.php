<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name'
    ];
    public function palettes()
    {
        return $this->hasManyThrough(Palette::class,Color::class,
            'category_id',
            'color_id',
            'id',
            'id');
    }
}
