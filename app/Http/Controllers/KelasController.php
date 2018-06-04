<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kelas;
use App\jurusans;
class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $kelas = kelas::with('jurusan')->get();
        return view('kelas.index',compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = kelas::all();
        $jurusans = jurusans::all();
        return view('kelas.create',compact('kelas', 'jurusans'));
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
            'nama_kelas'=>'required|max:255|unique:kelas',
            'id_jurusans'=>'required|max:255',

        ]);

        $kelas = new kelas;
        $kelas->nama_kelas = $request->nama_kelas;
        $kelas->id_jurusans = $request->id_jurusans;
        $kelas->save();
        return redirect()->route('kelas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $kelas = kelas::findOrFail($id);
            return view('kelas.show', compact('kelas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kelas = kelas::findOrFail($id);
        $jurusans = jurusans::all();
        $selectedjurusan = jurusans::findOrFail($id)->id_jurusans;
        return view('kelas.edit',compact('jurusans','kelas','selectedjurusan'));
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
        
            'nama_kelas'=>'required|max:255|unique:kelas',
            'id_jurusans'=>'required|max:255',
        ]);

        $kelas = kelas::findOrFail($id);
        $kelas->nama_kelas = $request->nama_kelas;
        $kelas->id_jurusans = $request->id_jurusans;
        $kelas->save();
        return redirect()->route('kelas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kelas = kelas::findOrFail($id);
        $kelas->delete();
            return redirect()->route('kelas.index');
    }
}
