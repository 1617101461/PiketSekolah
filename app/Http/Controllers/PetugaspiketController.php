<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\petugaspikets;
class PetugaspiketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $petugaspikets = petugaspikets::all();
            return view('petugaspiket.index', compact('petugaspikets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('petugaspiket.create');
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
            'nama_petugas'=>'required|max:255',
            'hari'=>'required|min:2',
            'tanggal'=>'required|min:2',
        ]);

        $petugaspikets = new petugaspikets;
        $petugaspikets->nama_petugas = $request->nama_petugas;
        $petugaspikets->hari = $request->hari;
        $petugaspikets->tanggal = $request->tanggal;
        $petugaspikets->save();
        return redirect()->route('petugaspiket.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $petugaspikets = petugaspikets::findOrFail($id);
            return view('petugaspiket.show', compact('petugaspikets'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $petugaspikets = petugaspikets::findOrFail($id);
            return view('petugaspiket.edit', compact('petugaspikets'));
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
        
            'nama_petugas'=>'required|max:255',
            'hari'=>'required|min:2',
            'tanggal'=>'required|min:2',
        ]);

        $petugaspikets = petugaspikets::findOrFail($id);
        $petugaspikets->nama_petugas = $request->nama_petugas;
        $petugaspikets->hari = $request->hari;
        $petugaspikets->tanggal = $request->tanggal;
        $petugaspikets->save();
        return redirect()->route('petugaspiket.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $petugaspikets = petugaspikets::findOrFail($id);
        $petugaspikets->delete();
            return redirect()->route('petugaspiket.index');
    }
}
