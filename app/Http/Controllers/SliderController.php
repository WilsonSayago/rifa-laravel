<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\SliderCreateRequest;
use App\Http\Requests\SliderEditRequest;
use App\Slider;
use Redirect;
use Session;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::orderBy('id', 'DES')->paginate(10);
        return view('slider.index')->with('sliders', $sliders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SliderCreateRequest $request)
    {
        \App\Slider::create($request->all());
        Session::flash('message',"rifa registrada exitosamente");
        return Redirect::to('slider');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = Slider::find($id);
        if($slider){
            return view('slider.edit')->with('slider', $slider);     
        }
        else{
            Session::flash('message-error',"Error Al Tratar de Editar el Slider");
            return Redirect::to('/slider');
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SliderEditRequest $request, $id)
    {
        $slider = Slider::find($id);
        if($request->texto){
            $slider->texto    = $request->texto;
        }
        if($request->imagen){
            $slider->imagen  = $request->imagen;    
        }
        $slider->save();
        Session::flash('message',"slider editado exitosamente");
        return Redirect::to('slider');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::find($id);
        if($slider){
            $slider->delete();
            Session::flash('warning',"imagen del slider eliminada exitosamente");
            return Redirect::to('/slider');    
        }
        else{
            Session::flash('message-error',"Error Al Tratar de Eliminar el Slider");
            return Redirect::to('/slider');
        }
        
    }
}
