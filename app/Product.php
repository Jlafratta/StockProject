<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code','name', 'description', 'price', 'cost', 'stock',
    ];

    public function sales(){
        return $this->belongsToMany('App\Sale');
    }

}
