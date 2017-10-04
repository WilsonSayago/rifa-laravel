<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Slider;
use App\Product;
use App\Notice;
use Illuminate\Support\Facades\Input;

class IndexController extends Controller
{
	public function index(Request $request){
		#$referido = Input::get('referido');
		$referido = $request['referido'];
		$sliders = Slider::where('estatus', 'true')->get();
		$products = Product::orderBy('fecha', 'DES')->take(4)->get();
		$notices = Notice::orderBy('fecha', 'DES')->take(4)->get();
		$auxiliar = Product::orderBy('created_at', 'DES')->take(1)->get();
		//foreach ($notices as $notice) {
			//dd(substr($notice->contenido, 0, 200));
		//}
		$last = $auxiliar->last();
		return view('indexPruebas')->with('sliders', $sliders)
								   ->with('products', $products)
								   ->with('notices', $notices)
								   ->with('last', $last)
								   ->with('referido', $referido);
	}
	public function session(){
		return view('session');
	}
	public function contact(){
		return view('contact');
	}
}
