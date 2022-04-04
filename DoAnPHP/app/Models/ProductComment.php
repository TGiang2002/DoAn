<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductComment extends Model
{
    use HasFactory;
    protected $table='product_comments';
    protected $primarykey='id';
    // protected $quarded=[];

    public $fillable=[
        'product_id',
        'user_id',
        'email',
        'message',
        'name',
        'rating',
        
    ];

    public function products(){
        return $this->belongsTo(related: Product::class, foreignKey: 'product_id', ownerKey:'id');
    }
}
