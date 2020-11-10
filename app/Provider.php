<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','reposition_period', 'shipping_cost', 
    ];

    public function products(){
        return $this->hasMany('App\Product');
    }
}
