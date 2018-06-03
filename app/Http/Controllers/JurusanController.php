<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jurusans;
class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurusans = jurusans::all();
            return view('jurusan.index', compact('jurusans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jurusan.create');
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
            'nama_jurusan'=>'required|max:255|unique:jurusans',
            ]);

        $jurusans = new jurusans;
        $jurusans->nama_jurusan = $request->nama_jurusan;
        $jurusans->save();
        return redirect()->route('jurusan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $jurusans = jurusan::findOrFail($id);
            return view('jurusan.show', compact('jurusans'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jurusans = jurusans::findOrFail($id);
            return view('jurusan.edit', compact('jurusans'));
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
        
            'nama_jurusan'=>'required|max:255|unique:jurusans',
        ]);

        $jurusans = jurusans::findOrFail($id);
        $jurusans->nama_jurusan = $request->nama_jurusan;
        $jurusans->save();
        return redirect()->route('jurusan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $jurusans = jurusans::findOrFail($id);
        $jurusans->delete();
            return redirec()->route('jurusan.index');
    }
}
