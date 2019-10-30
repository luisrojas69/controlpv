<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Control;
use Illuminate\Support\Facades\DB;

class ControlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $controls = Control::all();
        return view('pages.controls.index', compact('controls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.controls.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $control= New Control; 
        try {
            $control->date_control = $request->date_control;
            $control->amount = $request->amount;
            $control->comment = $request->comment;

            DB::BeginTransaction();
            $control->save();
            DB::Commit();
            Session()->flash('my_message', 'Control Registrado Correctamente');
            return redirect()->back();
        } catch (Exception $e) {
            Session()->flash('my_error', $e->getMessage());
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
        $control= Control::find($id); 
        return view('pages.controls.edit', compact('control'));
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
        $control= Control::find($id); 
        try {
            $control->date_control = $request->date_control;
            $control->amount = $request->amount;
            $control->comment = $request->comment;

            DB::BeginTransaction();
            $control->save();
            DB::Commit();
            Session()->flash('my_message', 'Control Editado Correctamente');
            return redirect('control');
        } catch (Exception $e) {
            Session()->flash('my_error', $e->getMessage());
        }
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
        $control= Control::find($id); 
        try {
           

            DB::BeginTransaction();
            $control->delete();
            DB::Commit();
            Session()->flash('my_message', 'Control Eliminado Correctamente');
            return redirect('control');
        } catch (Exception $e) {
            Session()->flash('my_error', $e->getMessage());
        }
        //
    }

}
