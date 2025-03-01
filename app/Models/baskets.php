<?php

namespace App\Models;
use Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class baskets extends Model
{
    protected $fillable= ['count' , 'is_payed' , 'product_id' , 'user_id'];
    use HasFactory;
    public function Products()
    {
        return $this->belongsTo(Products::class , 'product_id')->first();
    }
    
}
