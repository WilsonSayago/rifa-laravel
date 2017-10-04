<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ProductCreateRequest;
use App\Product;
use App\Purchase;
use DB;
use Redirect;
use Session;

class ProductController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('fecha', 'DES')->paginate(10);
        return view('product.index')->with('products', $products);
    }

    public function catalog()
    {
        $products = Product::orderBy('fecha', 'DES')->paginate(16);
        return view('product.catalog')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductCreateRequest $request)
    {
        \App\Product::create($request->all());
        Session::flash('message',"rifa registrada exitosamente");
        return Redirect::to('product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        if($product){
            $purcharses = Purchase::where('id_product', $product->id)->get();
            $purcharseNumber[] = [];
            $numbers[] = [];
            //ciclo de llenado
            foreach ($purcharses as $purcharse){
                $purcharseNumber[] = $purcharse->nro;
            }
            //Llenar el arreglos de numeros
            for ($i = 1; $i<=$product->serie; $i++){
            //Comprobar si esta disponible
                if(!in_array($i, $purcharseNumber)){
                    $numbers[] = $i;
                }
            }
            return view('product.show')
            ->with('product', $product)
            ->with('numbers', $numbers);
        }
        else{
            Session::flash('message-error',"Producto No Encontrado");
            return Redirect::to('/product/catalog'); 
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('product.edit')->with('product', $product); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name    = $request->name;
        $product->monto   = $request->monto;
        $product->fecha   = $request->fecha;
        $product->serie   = $request->serie;
        $product->imagen  = $request->imagen;
        $product->loteria = $request->loteria;
        $product->save();
        Session::flash('message',"rifa editada exitosamente");
        return Redirect::to('product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        Session::flash('warning',"rifa eliminada exitosamente");
        return Redirect::to('product');
    }
}
