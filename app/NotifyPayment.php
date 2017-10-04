<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotifyPayment extends Model
{
    protected $table = 'notifypayments';

    protected $fillable = [
        'nro_referencia', 'monto', 'ci', 'banco','id_purchase',
    ];
    public function purchase()
    {
        return $this->belongsTo('App\Purchase','id_purchase');
    }

}
