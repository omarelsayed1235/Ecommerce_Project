<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','total','type'];

    public function user(){

        return $this->belongsto(User::class);
    }
    public function products(){
        return $this->belongsToMany(Product::class);
    }
}
