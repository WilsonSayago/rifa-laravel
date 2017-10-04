<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NotifyPaymentCreateRequest;
use App\Http\Requests;
use App\Purchase;
use App\NotifyPayment;
use Auth;
use Redirect;
use Session;
use DB;

class NotifyPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $purcharses = DB::table('purchases')->select('id')->where('estatus','Procesando')->get();
        //dd($purcharses);
        $numbers[] = null;
            //ciclo de llenado
        foreach ($purcharses as $purcharse){
            $numbers[] = $purcharse->id;
        }
        //dd($numbers);
        $notifypayments = NotifyPayment::all()->whereIn('id_purchase',$numbers);
        //dd($notifypayments);
        return view('notifypayment.index')->with('notifypayments',$notifypayments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function notificar($id)
    {
        $purchase = Purchase::find($id);
        if($purchase){
            if($purchase->estatus=='Por Pagar' and $purchase->id_user==Auth::user()->id){
                return view('notifypayment.create')->with('purchase',$purchase);
            }
            else{
                Session::flash('message-error',"No puedes Notificar Este Pago");
                return Redirect::to('/purchase');
            }
        }
        else{
            Session::flash('message-error',"No puedes Notificar Este Pago Porque no existe");
            return Redirect::to('/purchase');
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NotifyPaymentCreateRequest $request,$id)
    {
        $purchase = Purchase::find($id);
        if($purchase->id_user==Auth::user()->id){
            NotifyPayment::create([
                'id_purchase' => $id,
                'nro_referencia' => $request['nro_referencia'],
                'monto' => $request['monto'],
                'ci' => $request['ci'],
                'banco' => $request['banco'],
            ]);
            $purchase->estatus = 'Procesando';
            $purchase->save();
            Session::flash('message',"Pago Notificado con Exito");
            return Redirect::to('/purchase');
        }
        else{
            Session::flash('message-error',"Dicho Pago No Te Pertenece");
            return Redirect::to('/purchase');
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
        $notifypayment = NotifyPayment::find($id);
        return view('notifyPayment.edit')->with('notifypayment', $notifypayment);
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
        //
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
