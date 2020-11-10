<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date','price', 'cost', 'quantity', 'total_cost', 'total_price', 'product_id'
    ];
    
    public function product() {
        return $this->belongsTo('App\Product');
        
    }
}
