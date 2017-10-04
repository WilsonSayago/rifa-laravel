<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Product;
use App\User;
use Redirect;
use Session;
use Auth;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function system()
    {
        $user = User::find(Auth::user()->id);
        $nrifas = $user->purchases;
        $nporpagar = 0;
        $npagadas = 0;
        if($nrifas){
            foreach($nrifas as $purcharse){
                if($purcharse->estatus=='Pagado'){
                    $npagadas = $npagadas+1;
                }
                elseif ($purcharse->estatus=='Por Pagar'){
                    $nporpagar = $nporpagar+1;
                }
            }
        }
        $products = Product::orderBy('fecha', 'DES')->take(3)->get();
        return view('system')->with(['nrifas' => $nrifas, 'nporpagar' => $nporpagar,'npagadas' => $npagadas])
                             ->with('products', $products);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
        $referido = 'sayagowilson92@gmail.com';
        if($request['referido']){
            $referido = $request['referido'];
        }
        \App\User::create([
            'email' => $request['email'],
            'password' => $request['password'],
            'type' => 'cliente',
            'name' => $request['name'],
            'saldo' => 0,
            'referido' => $referido,
        ]);
        Session::flash('message',"Usuario Registrado con Exito");
        return Redirect::to('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        #para imprimir
        #use Symfony\Component\Console\Output\ConsoleOutput;
        #$output = new ConsoleOutput();
        #$output->writeln($n1->email);
        $user = User::find(Auth::user()->id);
        $nivel1 = User::where('referido', '=',$user->email)->get();
        $nivel2 = 0;
        $nivel3 = 0;
        $nivel4 = 0;
        if($nivel1){
            foreach($nivel1 as $n1){
                $usersnivel2 = User::where('referido', '=',$n1->email)->get();
                $nivel2 = $nivel2 + count($usersnivel2);
                if($usersnivel2){
                    foreach($usersnivel2 as $n2){
                        $usersnivel3 = User::where('referido', '=',$n2->email)->get();
                        $nivel3 = $nivel3 + count($usersnivel3);
                        if($usersnivel3){
                            foreach($usersnivel3 as $n3){
                                $usersnivel4 = User::where('referido', '=',$n3->email)->get();
                                $nivel4 = $nivel4 + count($usersnivel4);
                            }
                        }
                    }
                }
            }
        }
        return view('user.show')->with('user', $user)->with('nivel1', $nivel1)->with('nivel2', $nivel2)->with('nivel3', $nivel3)->with('nivel4', $nivel4); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = \App\User::find(Auth::user()->id);
        return view('user.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
        $user = \App\User::find($id);
        $user->fill($request->all());
        $user->save();

        Session::flash('message','Perfil modificado Exitosamente');
        return Redirect::to('/sistema');
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
