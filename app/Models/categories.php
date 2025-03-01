<?php

namespace App\Models;
use Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    use HasFactory;

    public function Products(){
        return $this->hasMany(Products::class)->get();
    }

    protected $fillable = ['name' , 'discription'];
}
