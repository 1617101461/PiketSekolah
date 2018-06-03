<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\gurus;
class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $gurus = gurus::all();
            return view ('guru.index', compact('gurus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view ('guru.create');
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
            'nik'=>'required|max:255|unique:gurus',
            'nama'=>'required|min:2',
            'jk'=>'required|min:2',
            'tempat_lahir'=>'required|min:2',
            'tanggal_lahir'=>'required|min:2',
            'alamat'=>'required|min:2',
            'keahlian_bidang_studi'=>'required|min:2',
        ]);

        $gurus = new gurus;
        $gurus->nik = $request->nik;
        $gurus->nama = $request->nama;
        $gurus->jk = $request->jk;
        $gurus->tempat_lahir = $request->tempat_lahir;
        $gurus->tanggal_lahir = $request->tanggal_lahir;
        $gurus->alamat = $request->alamat;
        $gurus->keahlian_bidang_studi = $request->keahlian_bidang_studi;
        $gurus->save();
        return redirect()->route('guru.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $gurus = gurus::findOrFail($id);
            return view('guru.show', compact('gurus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $gurus = gurus::findOrFail($id);
            return view('guru.edit', compact('gurus'));
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

            'nik'=>'required|max:255|unique:gurus',
            'nama'=>'required|min:2',
            'jk'=>'required|min:2',
            'tempat_lahir'=>'required|min:2',
            'tanggal_lahir'=>'required|min:2',
            'alamat'=>'required|min:2',
            'keahlian_bidang_studi'=>'required|min:2',
        ]);

        $gurus = gurus::findOrFail($id);
        $gurus->nik = $request->nik;
        $gurus->nama = $request->nama;
        $gurus->jk = $request->jk;
        $gurus->tempat_lahir = $request->tempat_lahir;
        $gurus->tanggal_lahir = $request->tanggal_lahir;
        $gurus->alamat = $request->alamat;
        $gurus->keahlian_bidang_studi = $request->keahlian_bidang_studi;
        $gurus->save();
        return redirect()->route('guru.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $gurus = gurus::findOrFail($id);
        $gurus->delete();
            return redirect()->route('guru.index');
    }
}
