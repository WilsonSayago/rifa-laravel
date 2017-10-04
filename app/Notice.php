<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Notice extends Model
{
    protected $table = 'notice';

    protected $fillable = [
        'titulo', 'contenido', 'fecha', 'imagen', 'estatus'
    ];

    public function setImagenAttribute($imagen){
    	$this->attributes['imagen'] = Carbon::now()->second . $imagen->getClientOriginalName();
    	$name = Carbon::now()->second.$imagen->getClientOriginalName();
    	\Storage::disk('notices')->put($name, \File::get($imagen));
    }

    public function setEstatusAttribute($estatus){
    	$this->attributes['estatus'] = true;
    }
}
