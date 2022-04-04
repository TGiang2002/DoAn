<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $table='brands';
    protected $primarykey='id';
   // protected $quarded=[];

    protected $fillable=[
        'name',
        'created_at'
    ];


    public function products(){
        return $this->hasMany(related: Product::class, foreignKey: 'Brand_id', localKey:'id');//1-nhiều
    }
}
