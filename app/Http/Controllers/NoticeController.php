<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\NoticeCreateRequest;
use App\Notice;
use Redirect;
use Session;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notices = notice::orderBy('fecha', 'ASC')->paginate(10);
        return view('notice.index')->with('notices', $notices);
    }

    public function news()
    {
        $notices = notice::orderBy('fecha', 'DES')->paginate(10);
        return view('notice.news')->with('notices', $notices);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $notice = notice::find($id);
        return view('notice.show')->with('notice', $notice);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notice.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NoticeCreateRequest $request)
    {
        Notice::create($request->all());
        Session::flash('message',"rifa registrada exitosamente");
        return Redirect::to('notice');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notice = Notice::find($id);
        if($notice){
            return view('notice.edit')->with('notice', $notice);     
        }
        else{
            Session::flash('message-error',"Error Noticia No Encontrada");
            return Redirect::to('/notice');
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NoticeCreateRequest $request, $id)
    {
        $notice = Notice::find($id);
        $notice->contenido    = $request->contenido;
        $notice->fecha   = $request->fecha;
        if($request->imagen){
            $notice->imagen  = $request->imagen;    
        }
        
        $notice->save();
        Session::flash('message',"noticia editada exitosamente");
        return Redirect::to('notice');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notice = Notice::find($id);
        if($notice){
            $notice->delete();
            Session::flash('warning',"Noticia eliminada exitosamente");
            return Redirect::to('/notice');    
        }
        else{
            Session::flash('message-error',"Error Al Tratar de Eliminar la Noticia");
            return Redirect::to('/notice');
        }
        
    }
}
