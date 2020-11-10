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
        'code','name', 'description', 'price', 'cost', 'stock', 'provider_id'
    ];

    public function sales(){
        return $this->belongsToMany('App\Sale');
    }

    public function provider(){
        return $this->belongsTo('App\Provider');
    }

}
