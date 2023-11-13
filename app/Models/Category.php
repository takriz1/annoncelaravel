<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

  /*  public function users(){

        return $this->belongsTo(User::class, 'user_id', 'id' );
    } */
    public function products(){
        return $this->hasMany(Product::class , 'category_id', 'id' );
    }
}
