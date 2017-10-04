<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\BankAccountRequest;
use Redirect;
use Session;
use Auth;

class BankAccountController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('cliente');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = \App\User::find(Auth::user()->id);
        $cuentas = $user->bankaccounts;
        return view('bankaccount.index')->with('cuentas',$cuentas);   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bankaccount.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BankAccountRequest $request)
    {
        \App\BankAccount::create([
            'id_user' => Auth::user()->id,
            'titular' => $request['titular'],
            'email' => $request['email'],
            'nro' => $request['nro'],
            'tipo' => $request['tipo'],
            'banco' => $request['banco'],
        ]);
        Session::flash('message',"Cuenta Registrada con Exito");
        return Redirect::to('/bankaccount');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Redirect::to('/bankaccount');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cuenta = \App\BankAccount::find($id);
        if($cuenta){
            if($cuenta->id_user==Auth::user()->id){
                return view('bankaccount.edit')->with('cuenta', $cuenta);
            }
            else{
                Session::flash('message-error',"Cuenta Bancaria Errada");
                return Redirect::to('/bankaccount'); 
            }    
        }
        else{
            Session::flash('message-error',"Cuenta Bancaria Errada");
            return Redirect::to('/bankaccount');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BankAccountRequest $request, $id)
    {
        $cuenta = \App\BankAccount::find($id);
        $cuenta->fill($request->all());
        $cuenta->save();

        Session::flash('message','Cuenta modificada Exitosamente');
        return Redirect::to('/bankaccount');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cuenta = \App\BankAccount::destroy($id);
        if($cuenta){
            if($cuenta->id_user==Auth::user()->id){
                Session::flash('message','Cuenta Eliminada Exitosamente');
                return Redirect::to('/bankaccount');
            }
            else{
                Session::flash('message-error',"Cuenta Bancaria Errada");
                return Redirect::to('/bankaccount');
            }
        }
        else{
            Session::flash('message-error',"Cuenta Bancaria Errada");
            return Redirect::to('/bankaccount');
        }
    }
}
