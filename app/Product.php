<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'name', 'monto', 'fecha', 'serie', 'imagen', 'loteria', 'numeroGanador'
    ];

    public function purchases()
    {
        return $this->hasMany('App\Purchase');
    }
    public function setImagenAttribute($imagen){
    	$this->attributes['imagen'] = Carbon::now()->second . $imagen->getClientOriginalName();
    	$name = Carbon::now()->second.$imagen->getClientOriginalName();
    	\Storage::disk('products')->put($name, \File::get($imagen));
    }
}
