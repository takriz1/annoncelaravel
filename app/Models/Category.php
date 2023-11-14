<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'libelle_c',
        'description_c',
        'image_c'

    ];

    use HasFactory;

    public function products()
    {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }
}
