<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    
    protected $table='blogs';
    protected $primarykey='id';
    protected $quarded=[];//cac cot sẽ dc ghi hang loat

    public function blogComments(){
        return $this->hasMany(related:BlogComment::class,foreignKey:'blog_id',localKey:'id');
    }
}
