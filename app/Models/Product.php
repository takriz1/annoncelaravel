<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'price',
        'qtt',
        'image',
        'state',
        'category_id',
        'user_id',
    ];



    use HasFactory;
    public function category()
    {

        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function user()
    {

        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
