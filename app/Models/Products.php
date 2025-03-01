<?php

namespace App\Models;
use Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Products extends Model
{
    use HasFactory;
    public function Categories()
    {
        return $this->belongsTo(categories::class , 'category_id')->first();
    }

    protected $fillable = ['name' , 'discription' ,'category_id', 'price' , 'size' , 'image'];
    
}
