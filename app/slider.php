<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class slider extends Model
{
    protected $table = 'slider';

    protected $fillable = [
        'texto', 'imagen', 'estatus'
    ];
    
    public function setImagenAttribute($imagen){
    	$this->attributes['imagen'] = Carbon::now()->second . $imagen->getClientOriginalName();
    	$name = Carbon::now()->second.$imagen->getClientOriginalName();
    	\Storage::disk('sliders')->put($name, \File::get($imagen));
    }

    public function setEstatusAttribute($estatus){
    	$this->attributes['estatus'] = true;
    }
}
