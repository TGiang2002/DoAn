<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $table='orders_details';
    protected $primarykey='id';
    //protected $quarded=[];

    protected $fillable=[
        'order_id',
        'product_id',
        'qty',
        'amount',
        'total'
    ];

    public function order(){
        return $this->belongsTo(related:Order::class,foreignKey:'order_id',ownerKey:'id');
    }

    public function product(){
        return $this->belongsTo(related:Product::class,foreignKey:'product_id',ownerKey:'id');
    }
}
