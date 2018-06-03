<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\absensigurus;
use App\gurus;
class AbsensiguruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $absensigurus = absensigurus::with('guru')->get();
        return view('absensiguru.index',compact('absensigurus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $absensigurus = absensigurus::all();
        $gurus = gurus::all();
        return view('absensiguru.create',compact('absensigurus', 'gurus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            
            'id_gurus' => 'required',
            'keterangan'=>'required|min:2',

        ]);

        $absensigurus = new absensigurus;
        $absensigurus->id_gurus = $request->id_gurus;
        $absensigurus->keterangan = $request->keterangan;
        $absensigurus->save();
        return redirect()->route('absensiguru.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $absensigurus = absensigurus::findOrFail($id);
            return view('absensiguru.show', compact('absensigurus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $absensigurus = absensigurus::findOrFail($id);
        $gurus = gurus::all();
        $selectedguru = gurus::findOrFail($id)->id_gurus;
        return view('absensiguru.edit',compact('gurus','absensigurus','selectedguru'));
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
         $this->validate($request, [
        
            'id_gurus'=>'required|max:255',
            'keterangan'=>'required|min:2',
        ]);

        $absensigurus = absensigurus::findOrFail($id);
        $absensigurus->id_gurus = $request->id_gurus;
        $absensigurus->keterangan = $request->keterangan;
        $absensigurus->save();
        return redirect()->route('absensiguru.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $absensigurus = absensigurus::findOrFail($id);
       $absensigurus->delete();
        return redirect()->route('absensiguru.index');
    }
}
