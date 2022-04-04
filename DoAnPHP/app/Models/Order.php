<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table='orders';
    protected $primarykey='id';
    //protected $quarded=[];
    protected $fillable=[
        'frist_name',
        'last_name',
        'country',
        'street_address',
        'email',
        'phone'
    ];

    public function orderDetails(){
        return $this->hasMany(related:OrderDetail::class,foreignKey:'order_id',localKey:'id');
    }



}
