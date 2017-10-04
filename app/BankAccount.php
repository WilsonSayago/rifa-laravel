<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankAccount extends Model
{
    protected $table = 'bankaccounts';

    protected $fillable = [
        'nro', 'tipo', 'email', 'banco','titular', 'id_user',
    ];
    protected $hidden = [
        'id_user',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
