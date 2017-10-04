<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $table = 'purchases';

    protected $fillable = [
        'nro', 'estatus','id_product', 'id_user',
    ];

    public function product()
    {
        return $this->belongsTo('App\Product', 'id_product');
    }
    public function user()
    {
        return $this->belongsTo('App\user');
    }

    public function notifypayment()
    {
        return $this->hasOne('App\NotifyPayment', 'id_purchase');
    }

}
