<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class ProductOrder extends Model
{
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date',
        'shipping_cost',
        'quantity',
        'state',
        'product_id',
        'provider_id',
    ];

    public static function hasArrived($order)
    {
        if($order->getArrivalDate($order)->diffInDays((Carbon::now()->toDateString()), false) > 0 ){
            return true;
        }else{
            return false;
        }
    }

    public function getArrivalDate($order)
    {
        $date = Carbon::createFromFormat('Y-m-d', $order->date);    // Fecha de emision
        $period = $order->provider->reposition_period;      // Periodo de entrega
        return $date->addDay($period);           // Fecha de emision + periodo de entrega = llegada
    }

    public static function getState($order)
    {
        // Si el pedido no llego esta pendiente a llegar (0)
        if(!$order->hasArrived($order) && !$order->state){
            return 0;
        } else if (($order->state == 0) && $order->hasArrived($order)){   // Si llego y no se recibio, esta disponible
            return 1;
        }else {         // sino, ya fue recibido
            return 2;
        }
    }

    public function product(){
        return $this->belongsTo('App\Product');
    }

    public function provider(){
        return $this->belongsTo('App\Provider');
    }
}
