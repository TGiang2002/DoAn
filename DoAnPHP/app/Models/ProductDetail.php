<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    use HasFactory;
    protected $table='product_details';
    protected $primarykey='id';
    protected $quarded=[];

    public function products(){
        return $this->belongsTo(related: Product::class, foreignKey: 'product_id', ownerKey:'id');
    }
}
