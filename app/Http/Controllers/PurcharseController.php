<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\PurchaseCreateRequest;
use App\Http\Requests\PurchaseEditRequest;
use Symfony\Component\Console\Output\ConsoleOutput;

use Auth;
use Redirect;
use Session;
use App\Product;
use App\Purchase;
use App\User;
use DB;

class PurcharseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = \App\User::find(Auth::user()->id);
        $misrifas = $user->purchases;
        return view('purchase.index')->with('misrifas',$misrifas);   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function call($id)
    {
        $product = Product::find($id);
        return view('purchase.create')->with('product',$product);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //Sacar todos los purcharse de un product
        $product = Product::find($id);
        $purcharses = Purchase::where('id_product', $product->id)->get();
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
        $numbers;
        dd($numbers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PurchaseCreateRequest $request, $id)
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
            if(array_key_exists($request['nro'], $numbers)){
                $purcharses = Purchase::where('nro', $numbers[$request['nro']])->where('id_product' , $product->id)->get();
                if(!$purcharses->last()){
                    Purchase::create([
                        'id_user' => Auth::user()->id,
                        'id_product' => $id,
                        'email' => $request['email'],
                        'nro' => $numbers[$request['nro']],
                        'estatus' => 'Por Pagar',
                    ]);
                    Session::flash('message',"Nro Registrado con Exito");
                    return Redirect::to('/product/catalog');
                }
                else{
                    Session::flash('message-error',"Numero No esta Disponible");
                    return Redirect::to('/product/catalog'); 
                }
            }
            else{
                Session::flash('message-error',"Numero Está Fuera de la Serie de la Rifa");
                return Redirect::to('/product/catalog'); 
            }
        }
        else{
            Session::flash('message-error',"Producto Errado");
            return Redirect::to('/product/catalog'); 
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $purchase = Purchase::find($id);
        if($purchase and $purchase->estatus=='Procesando'){
            return view('purchase.edit')->with('purchase', $purchase);    
        }
        else{
            Session::flash('message-error',"Pago No Puede Ser Procesado");
            return Redirect::to('/notifypayment'); 
        } 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PurchaseEditRequest $request, $id)
    {
        $purcharse = Purchase::find($id);
        if($request['estatus']=='Perdido'){
            $purcharse->notifypayment->delete();
            $purcharse->delete();
            Session::flash('message','Compra de Rifa eliminada Exitosamente');
        }
        else{
           $purcharse->fill($request->all());

            //metodo de asignar saldo
            
            $output = new ConsoleOutput();
            
            $user_nivel_0 = User::find($purcharse->id_user);
            $output->writeln($user_nivel_0->email);
            if($user_nivel_0->referido){
                $user_nivel_1 = User::where('email', '=',$user_nivel_0->referido)->get()->first();
                $user_nivel_1->saldo = $user_nivel_1->saldo + 100.00;
                $user_nivel_1->save();
                if($user_nivel_1->referido){
                    $user_nivel_2 = User::where('email', '=',$user_nivel_1->referido)->get()->first();
                    $user_nivel_2->saldo = $user_nivel_2->saldo+100;
                    $user_nivel_2->save();
                    if($user_nivel_2->referido){
                        $user_nivel_3 = User::where('email', '=',$user_nivel_2->referido)->get()->first();
                        $user_nivel_3->saldo = $user_nivel_3->saldo+100;
                        $user_nivel_3->save();
                        if($user_nivel_3->referido){
                            $user_nivel_4 = User::where('email', '=',$user_nivel_3->referido)->get()->first();
                            $user_nivel_4->saldo = $user_nivel_4->saldo+100;
                            $user_nivel_4->save();
                        }
                    }
                }
           }
           
           $purcharse->save();
           Session::flash('message','Compra de Rifa Verificada Exitosamente');
        }
        
        return Redirect::to('/notifypayment');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
